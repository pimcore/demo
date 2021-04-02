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

namespace App\Model\CustomerManagementFramework;

use Carbon\Carbon;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;

interface PasswordRecoveryInterface
{
    /**
     * @param string|null $token
     *
     * @return CustomerInterface
     */
    public function setPasswordRecoveryToken(?string $token);

    /**
     * @return string
     */
    public function getPasswordRecoveryToken(): ?string;

    /**
     * @param Carbon|null $tokenDate
     *
     * @return CustomerInterface
     */
    public function setPasswordRecoveryTokenDate(?\Carbon\Carbon $tokenDate);

    /**
     * @return Carbon|null
     */
    public function getPasswordRecoveryTokenDate(): ?\Carbon\Carbon;

    /**
     * @return CustomerInterface
     */
    public function save();

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * @param string|null $password
     *
     * @return CustomerInterface
     */
    public function setPassword(?string $password);
}
