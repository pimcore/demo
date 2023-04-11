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

namespace App\EventListener;

use App\Model\CustomerManagementFramework\Activity\OrderActivity;
use CustomerManagementFrameworkBundle\ActivityManager\ActivityManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Event\Model\CommitOrderProcessorEvent;
use Pimcore\Bundle\EcommerceFrameworkBundle\Event\Model\OrderManagerEvent;
use Pimcore\Bundle\EcommerceFrameworkBundle\Event\Model\SendConfirmationMailEvent;
use Pimcore\Localization\LocaleServiceInterface;
use Pimcore\Mail;
use Pimcore\Model\DataObject\OnlineShopOrder;
use Pimcore\Model\Document\Email;

class CheckoutEventListener
{
    /**
     * @var Factory
     */
    protected $ecommerceFactory;

    /**
     * @var ActivityManagerInterface
     */
    protected $activityManager;

    /**
     * @var LocaleServiceInterface
     */
    protected $localeService;

    /**
     * CheckoutEventListener constructor.
     *
     * @param Factory $ecommerceFactory
     * @param ActivityManagerInterface $activityManager
     */
    public function __construct(Factory $ecommerceFactory, ActivityManagerInterface $activityManager, LocaleServiceInterface $localeService)
    {
        $this->ecommerceFactory = $ecommerceFactory;
        $this->activityManager = $activityManager;
        $this->localeService = $localeService;
    }

    /**
     * @param OrderManagerEvent $event
     *
     * @throws \Exception
     */
    public function onUpdateOrder(OrderManagerEvent $event)
    {
        $cart = $event->getCart();

        /**
         * @var $order OnlineShopOrder
         */
        $order = $event->getOrder();

        $checkout = $this->ecommerceFactory->getCheckoutManager($cart);
        $deliveryAddress = $checkout->getCheckoutStep('deliveryaddress') ? $checkout->getCheckoutStep('deliveryaddress')->getData() : null;

        if ($deliveryAddress) {

            //inserting delivery and billing address from checkout step delivery

            $order->setCustomerFirstname($deliveryAddress->firstname);
            $order->setCustomerLastname($deliveryAddress->lastname);
            $order->setCustomerCompany($deliveryAddress->company);
            $order->setCustomerStreet($deliveryAddress->street);
            $order->setCustomerZip($deliveryAddress->zip);
            $order->setCustomerCity($deliveryAddress->city);
            $order->setCustomerCountry($deliveryAddress->countryCode);
            $order->setCustomerEmail($deliveryAddress->email);

            $order->setDeliveryFirstname($deliveryAddress->firstname);
            $order->setDeliveryLastname($deliveryAddress->lastname);
            $order->setDeliveryCompany($deliveryAddress->company);
            $order->setDeliveryStreet($deliveryAddress->street);
            $order->setDeliveryZip($deliveryAddress->zip);
            $order->setDeliveryCity($deliveryAddress->city);
            $order->setDeliveryCountry($deliveryAddress->countryCode);

            //updating customer object based on delivery address data
            $customer = $order->getCustomer();
            if ($customer) {
                $params = ['email', 'firstname', 'lastname', 'street', 'zip', 'city', 'countryCode'];
                foreach ($params as $param) {
                    $customer->{'set' . ucfirst($param)}($deliveryAddress->{$param});
                }
                $customer->save();
            }
        }
    }

    /**
     * @param SendConfirmationMailEvent $event
     */
    public function sendConfirmationMail(SendConfirmationMailEvent $event)
    {
        $order = $event->getOrder();

        $mail = new Mail();
        $mail->setDocument(Email::getByPath('/' . $this->localeService->getLocale() . '/mails/confirmation-mail'));
        $mail->setParams([
            'ordernumber' => $order->getOrdernumber(),
            'order' => $order
        ]);

        $mail->addTo($order->getCustomerEMail());
        $mail->send();

        $event->setSkipDefaultBehaviour(true);
    }

    /**
     * @param CommitOrderProcessorEvent $event
     *
     * @throws \Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException
     */
    public function postCommitOrder(CommitOrderProcessorEvent $event)
    {
        $order = $event->getOrder();
        if ($this->activityManager && $order->getCustomer()) {
            $this->activityManager->trackActivity(new OrderActivity($order->getCustomer(), $order));
        }
    }
}
