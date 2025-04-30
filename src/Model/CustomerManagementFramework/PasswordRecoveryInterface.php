<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
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
