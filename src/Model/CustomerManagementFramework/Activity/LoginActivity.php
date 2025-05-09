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
