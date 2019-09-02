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

namespace AppBundle\Controller;

use AppBundle\Form\DeliveryAddressFormType;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\OnlineShopOrder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends FrontendController
{
    /**
     * @inheritDoc
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }

    /**
     * @Route("/checkout-address", name="shop-checkout-address")
     *
     * @param Factory $factory
     * @param Request $request
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param Factory $ecommerceFactory
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function checkoutAddressAction(Factory $factory, Request $request, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory)
    {
        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('cart');

        $checkoutManager = $factory->getCheckoutManager($cart);

        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');
        $deliveryAddressDataArray = $this->fillDeliveryAddressFromCustomer($deliveryAddress->getData());

        $form = $this->createForm(DeliveryAddressFormType::class, $deliveryAddressDataArray, []);
        $form->handleRequest($request);

        $breadcrumbHelperService->enrichCheckoutPage();

        if ($request->getMethod() == Request::METHOD_POST) {
            $address = new \stdClass();

            $formData = $form->getData();
            foreach ($formData as $key => $value) {
                $address->{$key} = $value;
            }

            // save address if we have no errors
            if (count($form->getErrors()) === 0) {
                // commit step
                $checkoutManager->commitStep($deliveryAddress, $address);

                //TODO remove this - only needed, because one step only is not supported by the framework right now
                $confirm = $checkoutManager->getCheckoutStep('confirm');
                $checkoutManager->commitStep($confirm, true);

                return $this->redirectToRoute('shop-checkout-payment');
            }
        }

        $trackingManager = $ecommerceFactory->getTrackingManager();
        $trackingManager->trackCheckoutStep($deliveryAddress, $cart, 1);

        return [
            'cart' => $cart,
            'form' => $form->createView(),
        ];
    }

    /**
     * @param $deliveryAddress
     *
     * @return array|null
     */
    protected function fillDeliveryAddressFromCustomer($deliveryAddress)
    {
        $user = $this->getUser();

        $deliveryAddress = (array) $deliveryAddress;

        if ($user) {
            if ($deliveryAddress === null) {
                $deliveryAddress = [];
            }

            $params = ['email', 'firstname', 'lastname', 'street', 'zip', 'city', 'countryCode'];
            foreach ($params as $param) {
                if (empty($deliveryAddress[$param])) {
                    $deliveryAddress[$param] = $user->{'get' . ucfirst($param)}();
                }
            }
        }

        return $deliveryAddress;
    }

    /**
     * @Route("/checkout-completed", name="shop-checkout-completed")
     *
     * @param SessionInterface $session
     * @param Factory $ecommerceFactory
     *
     * @return array
     */
    public function checkoutCompletedAction(SessionInterface $session, Factory $ecommerceFactory)
    {
        $orderId = $session->get('last_order_id');

        $order = OnlineShopOrder::getById($orderId);

        $trackingManager = $ecommerceFactory->getTrackingManager();
        $trackingManager->trackCheckoutComplete($order);

        return [
            'order' => $order,
            'hideBreadcrumbs' => true
        ];
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function confirmationMailAction(Request $request)
    {
        $order = $request->get('order');

        if ($request->get('order-id')) {
            $order = OnlineShopOrder::getById($request->get('order-id'));
        }

        return [
            'order' => $order,
            'ordernumber' => $request->get('ordernumber')
        ];
    }
}
