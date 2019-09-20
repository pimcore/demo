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

namespace AppBundle\EventListener;

use AppBundle\Controller\CartController;
use AppBundle\Model\CustomerManagementFramework\Activity\LoginActivity;
use CustomerManagementFrameworkBundle\ActivityManager\ActivityManagerInterface;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\CartInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\EnvironmentInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler;
use Symfony\Component\Security\Http\HttpUtils;

/**
 * Authentication listener to set correct user to e-commerce framework environment after login and track login activity
 */
class AuthenticationLoginListener extends DefaultAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var EnvironmentInterface
     */
    protected $environment;

    /**
     * @var ActivityManagerInterface
     */
    protected $activityManager;

    /**
     * @var Factory
     */
    protected $factory;

    public function __construct(HttpUtils $httpUtils, EnvironmentInterface $environment, ActivityManagerInterface $activityManager, Factory $factory, array $options = [])
    {
        parent::__construct($httpUtils, $options);

        $this->environment = $environment;
        $this->activityManager = $activityManager;
        $this->factory = $factory;
    }

    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @param Request $request
     * @param TokenInterface $token
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // save current user to e-commerce framework environment
        $user = $token->getUser();

        $this->doEcommerceFrameworkLogin($user);

        // call parent function to create correct redirect
        return parent::onAuthenticationSuccess($request, $token);
    }

    public function doEcommerceFrameworkLogin(CustomerInterface $customer)
    {
        if ($customer) {

            //migrate current cart entries to cart of to-log-in users cart
            $cartManager = $this->factory->getCartManager();
            $oldCart = $cartManager->getCartByName(CartController::DEFAULT_CART_NAME);

            $this->environment->setCurrentUserId($customer->getId());

            $cartManager->reset();

            if ($oldCart instanceof CartInterface && count($oldCart->getItems()) > 0) {
                $userCart = $this->factory->getCartManager()->getOrCreateCartByName(CartController::DEFAULT_CART_NAME);
                foreach ($oldCart->getItems() as $item) {
                    $userCart->addItem($item->getProduct(), $item->getCount());
                }
                $userCart->save();
            }
        } else {
            $this->environment->setCurrentUserId(null);
        }

        // track login activity
        $this->activityManager->trackActivity(new LoginActivity($customer));

        $this->environment->save();
    }
}
