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

namespace App\EventListener;

use Pimcore\Bundle\AdminBundle\Security\Event\LogoutListener;
use Pimcore\Bundle\EcommerceFrameworkBundle\Environment;
use Pimcore\Bundle\EcommerceFrameworkBundle\EnvironmentInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\EventListener\SessionBagListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * Authentication listener to cleanup user and session in general from e-commerce framework environment after logout
 */
class AuthenticationLogoutListener extends LogoutListener
{
    public function __construct(
        protected EnvironmentInterface $environment,
        protected SessionBagListener $sessionBagListener,
        protected TokenStorageInterface    $tokenStorage,
        protected RouterInterface          $router,
        protected EventDispatcherInterface $eventDispatcher
    ) {
    }

    /**
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function onLogoutSuccess(Request $request): RedirectResponse|Response
    {
        // unset user in environment
        $this->environment->setCurrentUserId(Environment::USER_ID_NOT_SET);
        $this->environment->save();

        // clear complete e-commerce framework session
        $this->sessionBagListener->clearSession($request->getSession());

        // call parent in order to return correct redirect
        return parent::onLogoutSuccess($request);
    }
}
