<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace AppBundle\Controller;

use AppBundle\EventListener\AuthenticationLoginListener;
use AppBundle\Form\LoginFormType;
use AppBundle\Form\RegistrationFormHandler;
use AppBundle\Form\RegistrationFormType;
use AppBundle\Model\Customer;
use AppBundle\Services\NewsletterDoubleOptInService;
use AppBundle\Services\PasswordRecoveryService;
use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use CustomerManagementFrameworkBundle\CustomerSaveValidator\Exception\DuplicateCustomerException;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use CustomerManagementFrameworkBundle\Security\Authentication\LoginManagerInterface;
use CustomerManagementFrameworkBundle\Security\OAuth\Exception\AccountNotLinkedException;
use CustomerManagementFrameworkBundle\Security\OAuth\OAuthRegistrationHandler;
use CustomerManagementFrameworkBundle\Security\SsoIdentity\SsoIdentityServiceInterface;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\Authentication\Token\OAuthToken;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\CustomerObject;
use Pimcore\DataObject\Consent\Service;
use Pimcore\Translation\Translator;
use Ramsey\Uuid\Uuid;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class AccountController
 *
 * Controller that handles all account functionality, including register, login and connect to SSO profiles
 */
class AccountController extends BaseController
{
    /**
     * @Route("/account/login", name="account-login")
     *
     * @param AuthenticationUtils $authenticationUtils
     * @param OAuthRegistrationHandler $oAuthHandler
     * @param SessionInterface $session
     * @param Request $request
     * @param UserInterface|null $user
     *
     * @return array|RedirectResponse
     */
    public function loginAction(
        AuthenticationUtils $authenticationUtils,
        OAuthRegistrationHandler $oAuthHandler,
        SessionInterface $session,
        Request $request,
        UserInterface $user = null
    ) {

        //redirect user to index page if logged in
        if ($user && $this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('account-index');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // OAuth handling - the OAuth authenticator is configured to return to the login page on errors
        // (see failure_path configuration) - therefore we can fetch the last authentication error
        // here. If the error is an AccountNotLinkedException (as thrown by our user provider) save the
        // OAuth token to the session and redirect to registration with a special key which can be used
        // to load the token to prepopulate the registration form with account data.
        if ($error instanceof AccountNotLinkedException) {
            // this can be anything - for simplicity we just use an UUID as it is unique and random
            $registrationKey = (string) Uuid::uuid4();
            $oAuthHandler->saveToken($registrationKey, $error->getToken());

            return $this->redirectToRoute('account-register', [
                'registrationKey' => $registrationKey
            ]);
        }

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $formData = [
            '_username' => $lastUsername
        ];

        $form = $this->createForm(LoginFormType::class, $formData, [
            'action' => $this->generateUrl('account-login'),
        ]);

        //store referer in session to get redirected after login
        if (!$request->get('no-referer-redirect')) {
            $session->set('_security.demo_frontend.target_path', $request->headers->get('referer'));
        }

        return [
            'form' => $form->createView(),
            'error' => $error,
            'hideBreadcrumbs' => true
        ];
    }

    /**
     * If registration is called with a registration key, the key will be used to look for an existing OAuth token in
     * the session. This OAuth token will be used to fetch user info which can be used to pre-populate the form and to
     * link a SSO identity to the created customer object.
     *
     * This could be further separated into services, but was kept as single method for demonstration purposes as the
     * registration process is different on every project.
     *
     * @Route("/account/register", name="account-register")
     *
     * @param Request $request
     * @param CustomerProviderInterface $customerProvider
     * @param OAuthRegistrationHandler $oAuthHandler
     * @param LoginManagerInterface $loginManager
     * @param RegistrationFormHandler $registrationFormHandler
     * @param SessionInterface $session
     * @param AuthenticationLoginListener $authenticationLoginListener
     * @param Translator $translator
     * @param Service $consentService
     * @param UrlGeneratorInterface $urlGenerator
     * @param NewsletterDoubleOptInService $newsletterDoubleOptInService
     * @param UserInterface|null $user
     *
     * @return array|RedirectResponse
     */
    public function registerAction(
        Request $request,
        CustomerProviderInterface $customerProvider,
        OAuthRegistrationHandler $oAuthHandler,
        LoginManagerInterface $loginManager,
        RegistrationFormHandler $registrationFormHandler,
        SessionInterface $session,
        AuthenticationLoginListener $authenticationLoginListener,
        Translator $translator,
        Service $consentService,
        UrlGeneratorInterface $urlGenerator,
        NewsletterDoubleOptInService $newsletterDoubleOptInService,
        UserInterface $user = null
    ) {

        //redirect user to index page if logged in
        if ($user && $this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('account-index');
        }

        $registrationKey = $request->get('registrationKey');

        // create a new, empty customer instance
        /** @var CustomerInterface|\Pimcore\Model\DataObject\Customer $customer */
        $customer = $customerProvider->create();

        /** @var OAuthToken $oAuthToken */
        $oAuthToken = null;

        /** @var UserResponseInterface $oAuthUserInfo */
        $oAuthUserInfo = null;

        // load previously stored token from the session and try to load user profile
        // from provider
        if (null !== $registrationKey) {
            $oAuthToken = $oAuthHandler->loadToken($registrationKey);
            $oAuthUserInfo = $oAuthHandler->loadUserInformation($oAuthToken);
        }

        if (null !== $oAuthUserInfo) {
            // try to load a customer with the given identity from our storage. if this succeeds, we can't register
            // the customer and should either log in the existing identity or show an error. for simplicity, we just
            // throw an exception here.
            // this shouldn't happen as the login would log in the user if found
            if ($oAuthHandler->getCustomerFromUserResponse($oAuthUserInfo)) {
                throw new \RuntimeException('Customer is already registered');
            }
        }

        // the registration form handler is just a utility class to map pimcore object data to form
        // and vice versa.
        $formData = $registrationFormHandler->buildFormData($customer);
        $hidePassword = false;
        if (null !== $oAuthToken) {
            $formData = $this->mergeOAuthFormData($formData, $oAuthUserInfo);
            $hidePassword = true;
        }

        // build the registration form and pre-fill it with customer data
        $form = $this->createForm(RegistrationFormType::class, $formData, ['hidePassword' => $hidePassword]);
        $form->handleRequest($request);

        $errors = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $registrationFormHandler->updateCustomerFromForm($customer, $form);
            $customer->setCustomerLanguage($request->getLocale());
            $customer->setActive(true);

            try {
                $customer->save();

                if ($form->getData()['newsletter']) {
                    $consentService->giveConsent($customer, 'newsletter', $translator->trans('general.newsletter'));
                    $newsletterDoubleOptInService->sendDoubleOptInMail($customer, $this->document->getProperty('newsletter_confirm_mail'));
                }
                if ($form->getData()['profiling']) {
                    $consentService->giveConsent($customer, 'profiling', $translator->trans('general.profiling'));
                }

                // add SSO identity from OAuth data
                if (null !== $oAuthUserInfo) {
                    $oAuthHandler->connectSsoIdentity($customer, $oAuthUserInfo);
                }

                //check if special redirect is necessary
                if ($session->get('referrer')) {
                    $response = $this->redirect($session->get('referrer'));
                    $session->remove('referrer');
                } else {
                    $response = $this->redirectToRoute('account-index');
                }

                // log user in manually
                // pass response to login manager as it adds potential remember me cookies
                $loginManager->login($customer, $request, $response);

                //do ecommerce framework login
                $authenticationLoginListener->doEcommerceFrameworkLogin($customer);

                return $response;
            } catch (DuplicateCustomerException $e) {
                $errors[] = $translator->trans(
                    'account.customer-already-exists',
                    [
                        $customer->getEmail(),
                        $urlGenerator->generate('account-password-send-recovery', ['email' => $customer->getEmail()])
                    ]
                );
            } catch (\Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors() as $error) {
                $errors[] = $error->getMessage();
            }
        }

        // re-save user info to session as we need it in subsequent requests (e.g. after form errors) or
        // when form is rendered for the first time
        if (null !== $registrationKey && null !== $oAuthToken) {
            $oAuthHandler->saveToken($registrationKey, $oAuthToken);
        }

        return [
            'customer' => $customer,
            'form' => $form->createView(),
            'errors' => $errors,
            'hideBreadcrumbs' => true,
            'hidePassword' => $hidePassword
        ];
    }

    /**
     * Special route for connecting to social profiles that saves referrer in session for later
     * redirect to that referrer
     *
     * @param Request $request
     * @param SessionInterface $session
     * @param $service
     *
     * @return Response
     * @Route("/auth/oauth/referrerLogin/{service}", name="app_auth_oauth_login_referrer")
     */
    public function connectAction(Request $request, SessionInterface $session, $service)
    {
        // we overwrite this route to store user's referrer in the session
        $session->set('referrer', $request->headers->get('referer'));

        return $this->forward('HWIOAuthBundle:Connect:redirectToService', ['service' => $service]);
    }

    /**
     * Connects an already logged in user to an auth provider
     *
     * @Route("/oauth/connect/{service}", name="app_auth_oauth_connect")
     * @Security("has_role('ROLE_USER')")
     *
     * @param Request $request
     * @param OAuthRegistrationHandler $oAuthHandler
     * @param UserInterface $user
     * @param string $service
     *
     * @return RedirectResponse
     */
    public function oAuthConnectAction(
        Request $request,
        OAuthRegistrationHandler $oAuthHandler,
        UserInterface $user,
        string $service
    ) {
        $resourceOwner = $oAuthHandler->getResourceOwner($service);

        $redirectUrl = $this->generateUrl('app_auth_oauth_connect', [
            'service' => $service
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        // redirect to authorization
        if (!$resourceOwner->handles($request)) {
            $authorizationUrl = $oAuthHandler->getAuthorizationUrl($request, $service, $redirectUrl);

            return $this->redirect($authorizationUrl);
        }

        // get access token from URL
        $accessToken = $resourceOwner->getAccessToken($request, $redirectUrl);

        // e.g. user cancelled auth on provider side
        if (null === $accessToken) {
            return $this->redirectToRoute('account-index');
        }

        $oAuthUserInfo = $resourceOwner->getUserInformation($accessToken);

        // we don't want to allow linking an OAuth account to multiple customers
        if ($oAuthHandler->getCustomerFromUserResponse($oAuthUserInfo)) {
            throw new \RuntimeException('There\'s already a customer registered with this provider identity');
        }

        // create a SSO identity object and save it to the user
        $oAuthHandler->connectSsoIdentity($user, $oAuthUserInfo);

        // redirect to secure page which should now list the newly linked profile
        return $this->redirectToRoute('account-index');
    }

    /**
     * @param array $formData
     * @param UserResponseInterface $userInformation
     *
     * @return array
     */
    private function mergeOAuthFormData(
        array $formData,
        UserResponseInterface $userInformation
    ): array {
        return array_replace([
            'firstname' => $userInformation->getFirstName(),
            'lastname' => $userInformation->getLastName(),
            'email' => $userInformation->getEmail()
        ], $formData);
    }

    /**
     * Index page for account - it is restricted to ROLE_USER via security annotation
     *
     * @Route("/account/index", name="account-index")
     * @Security("has_role('ROLE_USER')")
     *
     * @param SsoIdentityServiceInterface $identityService
     * @param UserInterface|null $user
     *
     * @return array
     */
    public function indexAction(SsoIdentityServiceInterface $identityService, UserInterface $user = null)
    {
        $blacklist = [];
        foreach ($identityService->getSsoIdentities($user) as $identity) {
            $blacklist[] = $identity->getProvider();
        }

        $orderManager = Factory::getInstance()->getOrderManager();
        $orderList = $orderManager->createOrderList();
        $orderList->addFilter(new CustomerObject($user));
        $orderList->setOrder('orderDate DESC');

        return [
            'blacklist' => $blacklist,
            'orderList' => $orderList,
            'hideBreadcrumbs' => true
        ];
    }

    /**
     * @Route("/account/update-marketing", name="account-update-marketing-permission")
     * @Security("has_role('ROLE_USER')")
     *
     * @param Request $request
     * @param Service $consentService
     * @param Translator $translator
     * @param NewsletterDoubleOptInService $newsletterDoubleOptInService
     * @param UserInterface|null $user
     *
     * @return RedirectResponse
     *
     * @throws \Exception
     */
    public function updateMarketingPermissionAction(Request $request, Service $consentService, Translator $translator, NewsletterDoubleOptInService $newsletterDoubleOptInService, UserInterface $user = null)
    {
        if ($user instanceof Customer) {
            $currentNewsletterPermission = $user->getNewsletter()->getConsent();
            if (!$currentNewsletterPermission && $request->get('newsletter')) {
                $consentService->giveConsent($user, 'newsletter', $translator->trans('general.newsletter'));
                $newsletterDoubleOptInService->sendDoubleOptInMail($user, $this->document->getProperty('newsletter_confirm_mail'));
            } elseif ($currentNewsletterPermission && !$request->get('newsletter')) {
                $user->setNewsletterConfirmed(false);
                $consentService->revokeConsent($user, 'newsletter');
            }

            $currentProfilingPermission = $user->getProfiling()->getConsent();
            if (!$currentProfilingPermission && $request->get('profiling')) {
                $consentService->giveConsent($user, 'profiling', $translator->trans('general.profiling'));
            } elseif ($currentProfilingPermission && !$request->get('profiling')) {
                $consentService->revokeConsent($user, 'profiling');
            }

            $user->save();

            $this->addFlash('success', $translator->trans('account.marketing-permissions-updated'));
        }

        return $this->redirectToRoute('account-index');
    }

    /**
     * @Route("/account/confirm-newsletter", name="account-confirm-newsletter")
     *
     * @param Request $request
     * @param NewsletterDoubleOptInService $newsletterDoubleOptInService
     * @param Translator $translator
     *
     * @return RedirectResponse
     */
    public function confirmNewsletterAction(Request $request, NewsletterDoubleOptInService $newsletterDoubleOptInService, Translator $translator)
    {
        $token = $request->get('token');
        $customer = $newsletterDoubleOptInService->handleDoubleOptInConfirmation($token);
        if ($customer) {
            $this->addFlash('success', $translator->trans('account.marketing-permissions-confirmed-newsletter'));

            return $this->redirectToRoute('account-index');
        } else {
            throw new NotFoundHttpException('Invalid token');
        }
    }

    /**
     * @Route("/account/send-password-recovery", name="account-password-send-recovery")
     *
     * @param Request $request
     * @param PasswordRecoveryService $service
     * @param Translator $translator
     *
     * @throws \Exception
     */
    public function sendPasswordRecoveryMailAction(Request $request, PasswordRecoveryService $service, Translator $translator)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            $service->sendRecoveryMail($request->get('email', ''), $this->document->getProperty('password_reset_mail'));
            $this->addFlash('success', $translator->trans('account.reset-mail-sent-when-possible'));

            return $this->redirectToRoute('account-login', ['no-referer-redirect' => true]);
        }

        return [
            'hideBreadcrumbs' => true,
            'emailPrefill' => $request->get('email')
        ];
    }

    /**
     * @Route("/account/reset-password", name="account-reset-password")
     *
     * @param Request $request
     * @param PasswordRecoveryService $service
     * @param Translator $translator
     *
     * @return array|RedirectResponse
     */
    public function resetPasswordAction(Request $request, PasswordRecoveryService $service, Translator $translator)
    {
        $token = $request->get('token');
        $customer = $service->getCustomerByToken($token);
        if (!$customer) {
            //TODO render error page
            throw new NotFoundHttpException('Invalid token');
        }

        if ($request->isMethod(Request::METHOD_POST)) {
            $newPassword = $request->get('password');
            $service->setPassword($token, $newPassword);

            $this->addFlash('success', $translator->trans('account.password-reset-successful'));

            return $this->redirectToRoute('account-login', ['no-referer-redirect' => true]);
        }

        return [
            'hideBreadcrumbs' => true,
            'token' => $token,
            'email' => $customer->getEmail()
        ];
    }
}
