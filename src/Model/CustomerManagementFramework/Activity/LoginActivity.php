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

namespace App\Model\CustomerManagementFramework\Activity;

use CustomerManagementFrameworkBundle\Model\AbstractActivity;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;

class LoginActivity extends AbstractActivity
{
    const TYPE = 'Customer Login';

    /**
     * @var CustomerInterface
     */
    protected $customer;

    protected int $activityDate;

    /**
     * LoginActivity constructor.
     */
    public function __construct(CustomerInterface $customer, int $activityDate = null)
    {
        if (is_null($activityDate)) {
            $activityDate = time();
        }

        $this->customer = $customer;
        $this->activityDate = $activityDate;
    }

    /**
     * Return the type of the activity (i.e. Booking, Login...)
     */
    public function cmfGetType(): string
    {
        return self::TYPE;
    }

    /**
     * Returns an array representation of this activity.
     */
    public function cmfToArray(): array
    {
        return ['customer' => $this->getCustomer()->getId(), 'date' => $this->activityDate];
    }

    public function cmfWebserviceUpdateAllowed(): bool
    {
        return false;
    }
}
