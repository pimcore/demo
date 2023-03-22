<?php

declare(strict_types=1);

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
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
            throw new ValidationException("Given password is too long.");
        }
    }
}
