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

interface PasswordRecoveryInterface
{
    /**
     * @return $this
     */
    public function setPasswordRecoveryToken(?string $token): static;

    public function getPasswordRecoveryToken(): ?string;

    /**
     * @return $this
     */
    public function setPasswordRecoveryTokenDate(?Carbon $tokenDate): static;

    public function getPasswordRecoveryTokenDate(): ?Carbon;

    /**
     * @return $this
     */
    public function save(): static;

    public function getEmail(): ?string;

    /**
     * @return $this
     */
    public function setPassword(?string $password): static;
}
