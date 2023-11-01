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

namespace App\Controller;

use App\EventListener\AuthenticationLoginListener;
use App\Form\LoginFormType;
use App\Form\PasswordMaxLengthTrait;
use App\Form\RegistrationFormHandler;
use App\Form\RegistrationFormType;
use App\Model\Customer;
use App\Services\NewsletterDoubleOptInService;
use App\Services\PasswordRecoveryService;
use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use CustomerManagementFrameworkBundle\CustomerSaveValidator\Exception\DuplicateCustomerException;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use CustomerManagementFrameworkBundle\Security\Authentication\LoginManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\CustomerObject;
use Pimcore\DataObject\Consent\Service;
use Pimcore\Translation\Translator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * Class AccountController
 *
 * Controller that handles all account functionality, including register, login and connect to SSO profiles
 */
class AccountController extends BaseController
{
    use PasswordMaxLengthTrait;
    /**
     * @Route("/account/login", name="account-login")
     *
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @param UserInterface|null $user
     *
     * @return Response|RedirectResponse
     */
    public function loginAction(
        AuthenticationUtils $authenticationUtils,
        Request $request,
        UserInterface $user = null
    ) {

        //redirect user to index page if logged in
        if ($user && $this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('account-index');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

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
            $request->getSession()->set('_security.demo_frontend.target_path', $request->headers->get('referer'));
        }

        return $this->render('account/login.html.twig', [
            'form' => $form->createView(),
            'error' => $error ? 'Credentials are not valid.' : '',
            'hideBreadcrumbs' => true
        ]);
    }

    /**
     *
     * This could be further separated into services, but was kept as single method for demonstration purposes as the
     * registration process is different on every project.
     *
     * @Route("/account/register", name="account-register")
     *
     * @param Request $request
     * @param CustomerProviderInterface $customerProvider
     * @param LoginManagerInterface $loginManager
     * @param RegistrationFormHandler $registrationFormHandler
     * @param AuthenticationLoginListener $authenticationLoginListener
     * @param Translator $translator
     * @param Service $consentService
     * @param UrlGeneratorInterface $urlGenerator
     * @param NewsletterDoubleOptInService $newsletterDoubleOptInService
     * @param UserInterface|null $user
     *
     * @return Response|RedirectResponse
     */
    public function registerAction(
        Request $request,
        CustomerProviderInterface $customerProvider,
        LoginManagerInterface $loginManager,
        RegistrationFormHandler $registrationFormHandler,
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

        // create a new, empty customer instance
        /** @var CustomerInterface|\Pimcore\Model\DataObject\Customer $customer */
        $customer = $customerProvider->create();

        // the registration form handler is just a utility class to map pimcore object data to form
        // and vice versa.
        $formData = $registrationFormHandler->buildFormData($customer);

        // build the registration form and pre-fill it with customer data
        $form = $this->createForm(RegistrationFormType::class, $formData, ['hidePassword' => false]);
        $form->handleRequest($request);

        $errors = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $registrationFormHandler->updateCustomerFromForm($customer, $form);
            $customer->setCustomerLanguage($request->getLocale());
            $customer->setActive(true);

            try {
                $this->checkPassword($form->getData()['password']);

                $customer->save();

                if ($form->getData()['newsletter']) {
                    $consentService->giveConsent($customer, 'newsletter', $translator->trans('general.newsletter'));
                    $newsletterDoubleOptInService->sendDoubleOptInMail($customer, $this->document->getProperty('newsletter_confirm_mail'));
                }
                if ($form->getData()['profiling']) {
                    $consentService->giveConsent($customer, 'profiling', $translator->trans('general.profiling'));
                }

                $response = $this->redirectToRoute('account-index');

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

        return $this->render('account/register.html.twig', [
            'customer' => $customer,
            'form' => $form->createView(),
            'errors' => $errors,
            'hideBreadcrumbs' => true,
            'hidePassword' => false
        ]);
    }

    /**
     * Index page for account - it is restricted to ROLE_USER via security annotation
     *
     * @Route("/account/index", name="account-index")
     *
     * @param UserInterface|null $user
     *
     * @return Response
     */
    #[IsGranted('ROLE_USER')]
    public function indexAction(UserInterface $user = null)
    {
        $orderManager = Factory::getInstance()->getOrderManager();
        $orderList = $orderManager->createOrderList();
        $orderList->addFilter(new CustomerObject($user));
        $orderList->setOrder('orderDate DESC');

        return $this->render('account/index.html.twig', [
            'orderList' => $orderList,
            'hideBreadcrumbs' => true
        ]);
    }

    /**
     * @Route("/account/update-marketing", name="account-update-marketing-permission")
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
    #[IsGranted('ROLE_USER')]
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
     * @return Response
     *
     * @throws \Exception
     */
    public function sendPasswordRecoveryMailAction(Request $request, PasswordRecoveryService $service, Translator $translator)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            try {
                $service->sendRecoveryMail(
                    $request->get('email', ''),
                    $this->document->getProperty('password_reset_mail')
                );

                $this->addFlash('success', $translator->trans('account.reset-mail-sent-when-possible'));
            } catch (\Exception $e) {
                $this->addFlash('danger', $e->getMessage());
            }

            return $this->redirectToRoute('account-login', ['no-referer-redirect' => true]);
        }

        return $this->render('account/send_password_recovery_mail.html.twig', [
            'hideBreadcrumbs' => true,
            'emailPrefill' => $request->get('email')
        ]);
    }

    /**
     * @Route("/account/reset-password", name="account-reset-password")
     *
     * @param Request $request
     * @param PasswordRecoveryService $service
     * @param Translator $translator
     *
     * @return Response|RedirectResponse
     */
    public function resetPasswordAction(Request $request, PasswordRecoveryService $service, Translator $translator)
    {
        $token = $request->get('token');
        $customer = $service->getCustomerByToken($token);
        $error = null;
        try {
            if (!$customer) {
                throw new NotFoundHttpException('Invalid token');
            }

            if ($request->isMethod(Request::METHOD_POST)) {

                $newPassword = $request->get('password');

                $this->checkPassword($newPassword);

                $service->setPassword($token, $newPassword);

                $this->addFlash('success', $translator->trans('account.password-reset-successful'));

                return $this->redirectToRoute('account-login', ['no-referer-redirect' => true]);

            }

        } catch (\Exception $exception) {
            $error = $exception->getMessage();
        }

        return $this->render('account/reset_password.html.twig', [
            'hideBreadcrumbs' => true,
            'token' => $token,
            'email' => $customer?->getEmail(),
            'error' => $error
        ]);
    }
}
