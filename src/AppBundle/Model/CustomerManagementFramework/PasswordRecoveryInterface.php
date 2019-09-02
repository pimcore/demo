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

namespace AppBundle\Model\CustomerManagementFramework;

use Carbon\Carbon;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;

interface PasswordRecoveryInterface
{
    /**
     * @param string $token
     *
     * @return CustomerInterface
     */
    public function setPasswordRecoveryToken($token);

    /**
     * @return string
     */
    public function getPasswordRecoveryToken();

    /**
     * @param Carbon $tokenDate
     *
     * @return CustomerInterface
     */
    public function setPasswordRecoveryTokenDate($tokenDate);

    /**
     * @return Carbon
     */
    public function getPasswordRecoveryTokenDate();

    /**
     * @return CustomerInterface
     */
    public function save();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $password
     *
     * @return CustomerInterface
     */
    public function setPassword($password);
}
