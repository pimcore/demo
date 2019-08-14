<?php


namespace AppBundle\EventListener;


use AppBundle\Model\CustomerManagementFramework\Activity\OrderActivity;
use CustomerManagementFrameworkBundle\ActivityManager\ActivityManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Event\Model\Ecommerce\CommitOrderProcessorEvent;
use Pimcore\Event\Model\Ecommerce\OrderManagerEvent;
use Pimcore\Event\Model\Ecommerce\SendConfirmationMailEvent;
use Pimcore\Model\DataObject\OnlineShopOrder;

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
     * CheckoutEventListener constructor.
     * @param Factory $ecommerceFactory
     * @param ActivityManagerInterface $activityManager
     */
    public function __construct(Factory $ecommerceFactory, ActivityManagerInterface $activityManager)
    {
        $this->ecommerceFactory = $ecommerceFactory;
        $this->activityManager = $activityManager;
    }


    /**
     * @param OrderManagerEvent $event
     * @throws \Exception
     */
    public function onUpdateOrder(OrderManagerEvent $event) {

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
    public function sendConfirmationMail(SendConfirmationMailEvent $event) {
        //TODO send confirmation mail
        $event->setSkipDefaultBehaviour(true);
    }

    /**
     * @param CommitOrderProcessorEvent $event
     * @throws \Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException
     */
    public function postCommitOrder(CommitOrderProcessorEvent $event) {

        $order = $event->getOrder();
        if($this->activityManager && $order->getCustomer()) {
            $this->activityManager->trackActivity(new OrderActivity($order->getCustomer(), $order));
        }

    }

}