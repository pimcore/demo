<?php

declare(strict_types=1);

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Form;

use Pimcore\Model\Element\ValidationException;
use Symfony\Component\PasswordHasher\Hasher\CheckPasswordLengthTrait;

trait PasswordMaxLengthTrait
{
    use CheckPasswordLengthTrait;

    /**
     * @throws ValidationException
     */
    public function checkPassword(string $password): void
    {
        if ($this->isPasswordTooLong($password)) {
            throw new ValidationException('Given password is too long.');
        }
    }
}
