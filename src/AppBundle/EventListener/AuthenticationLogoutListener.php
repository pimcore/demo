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

use Pimcore\Bundle\EcommerceFrameworkBundle\EnvironmentInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Tools\SessionConfigurator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\HttpUtils;
use Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;

/**
 * Authentication listener to cleanup user and session in general from e-commerce framework environment after logout
 */
class AuthenticationLogoutListener extends DefaultLogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    /**
     * @var EnvironmentInterface
     */
    protected $environment;

    /**
     * @var SessionConfigurator
     */
    protected $sessionConfigurator;

    /**
     * @var SessionInterface
     */
    protected $session;

    public function __construct(
        HttpUtils $httpUtils,
        EnvironmentInterface $environment,
        SessionConfigurator $sessionConfigurator,
        SessionInterface $session,
        string $targetUrl = '/'
    ) {
        parent::__construct($httpUtils, $targetUrl);

        $this->environment = $environment;
        $this->sessionConfigurator = $sessionConfigurator;
        $this->session = $session;
    }

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request $request
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request)
    {
        // unset user in environment
        $this->environment->setCurrentUserId(null);
        $this->environment->save();

        // clear complete e-commerce framework session
        $this->sessionConfigurator->clearSession($this->session);

        // call parent in order to return correct redirect
        return parent::onLogoutSuccess($request);
    }
}
