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

namespace App\Model;

use App\Model\CustomerManagementFramework\PasswordRecoveryInterface;

class Customer extends \Pimcore\Model\DataObject\Customer implements PasswordRecoveryInterface
{
    public function getProfilingConsent(): ?\Pimcore\Model\DataObject\Data\Consent
    {
        return $this->getProfiling();
    }
}
