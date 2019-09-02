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

namespace AppBundle\Model;

use AppBundle\Model\CustomerManagementFramework\PasswordRecoveryInterface;
use CustomerManagementFrameworkBundle\Model\SsoAwareCustomerInterface;

class Customer extends \Pimcore\Model\DataObject\Customer implements SsoAwareCustomerInterface, PasswordRecoveryInterface
{
    /**
     * @return bool
     */
    public function getProfilingConsent()
    {
        return $this->getProfiling() ? $this->getProfiling()->getConsent() : false;
    }
}
