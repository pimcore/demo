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
use CustomerManagementFrameworkBundle\Model\ActivityStoreEntry\ActivityStoreEntryInterface;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;

class OrderActivity extends AbstractActivity
{
    const TYPE = 'Customer Order';

    /**
     * @var CustomerInterface
     */
    protected $customer;

    /**
     * @var AbstractOrder
     */
    protected $order;

    /**
     * LoginActivity constructor.
     *
     * @param CustomerInterface $customer
     * @param int $activityDate
     */
    public function __construct(CustomerInterface $customer, AbstractOrder $order)
    {
        $this->customer = $customer;
        $this->order = $order;
    }

    /**
     * Return the type of the activity (i.e. Booking, Login...)
     *
     * @return string
     */
    public function cmfGetType()
    {
        return self::TYPE;
    }

    /**
     * Returns an array representation of this activity.
     *
     * @return array
     */
    public function cmfToArray()
    {
        return [
            'customerId' => $this->getCustomer()->getId(),
            'orderId' => $this->order->getId(),
            'orderNumber' => $this->order->getOrdernumber(),
            'totalPrice' => $this->order->getTotalPrice(),
        ];
    }

    /**
     * @return bool
     */
    public function cmfWebserviceUpdateAllowed()
    {
        return false;
    }

    public static function cmfGetOverviewData(ActivityStoreEntryInterface $entry)
    {
        $attributes = $entry->getAttributes();

        $data = [
            'Ordernumber' => $attributes['orderNumber'],
            'Total Price' => $attributes['totalPrice'],
        ];

        /**
         * @var $order AbstractOrder
         */
        $orderId = $attributes['orderId'];
        $order = AbstractOrder::getById($orderId);

        if ($order) {
            $data['Current Order State'] = $order->getOrderState();
        }

        return $data;
    }

    public static function cmfGetDetailviewData(ActivityStoreEntryInterface $entry)
    {
        $attributes = $entry->getAttributes();

        $data = [
            'Ordernumber' => $attributes['orderNumber'],
            'Total Price' => $attributes['totalPrice'],
            'Internal Order ID' => $attributes['orderId'],
        ];

        /**
         * @var $order AbstractOrder
         */
        $orderId = $attributes['orderId'];
        $order = AbstractOrder::getById($orderId);

        if ($order) {
            $data['Current Order State'] = $order->getOrderState();
        }

        return $data;
    }
}
