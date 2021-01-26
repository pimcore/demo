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

namespace App\Controller;

use App\Ecommerce\CheckoutManager\Confirm;
use App\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\CheckoutManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\Heidelpay;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\HeidelpayRequest;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\HobexRequest;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentResponse\SnippetResponse;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentResponse\UrlResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\OnlineShopOrder;
use Pimcore\Translation\Translator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends FrontendController
{
    /**
     * @Route("/checkout-payment", name="shop-checkout-payment")
     *
     * @param Factory $factory
     * @param BreadcrumbHelperService $breadcrumbHelperService
     *
     * @return Response
     */
    public function checkoutPaymentAction(Factory $factory, BreadcrumbHelperService $breadcrumbHelperService)
    {
//        $cartManager = $factory->getCartManager();
//        $breadcrumbHelperService->enrichCheckoutPage();
//
//        $cart = $cartManager->getOrCreateCartByName('cart');
//        $checkoutManager = $factory->getCheckoutManager($cart);
//        $paymentProvider = $checkoutManager->getPayment();
//
//        $accessKey = '';
//        if ($paymentProvider instanceof Heidelpay) {
//            $accessKey = $paymentProvider->getPublicAccessKey();
//        }
//
//        $trackingManager = $factory->getTrackingManager();
//        $trackingManager->trackCheckoutStep(new Confirm($cart), $cart, 2);
//
//        return $this->render('payment/checkout_payment.html.twig', [
//            'cart' => $cart,
//            'accessKey' => $accessKey
//        ]);

        $cartManager = $factory->getCartManager();
        $orderManager = $factory->getOrderManager();
        $paymentManager = $factory->getPaymentManager();

        p_r($paymentManager->getProviderTypes()); die;

        $cart = $cartManager->getCartByName('cart');
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        $order = $orderManager->getOrCreateOrderFromCart($cart);

        $requestConfig = new HobexRequest();
        $requestConfig
            ->setShopperResultUrl($this->generateUrl('app_webshop_payment_result'))
            ->setLocale('de')
        ;

        /** @var SnippetResponse $paymentInitResponse */
        $paymentInitResponse = $checkoutManager->startOrderPaymentWithPaymentProvider($requestConfig);

        return $this->renderTemplate('Webshop/Checkout/payment.html.twig', [
            'cart' => $cart,
            'order' => $order,
            'renderedForm' => $paymentInitResponse->getSnippet()
        ]);
    }

    /**
     * Final step of the example payment checkout.
     * This is called then the payment succeeded and the order got confirmed.
     * @Route("/checkout/success")
     * @param Request $request
     */
    public function success(Request $request) {
        return $this->redirectToRoute('shop-checkout-completed');
    }

    /**
     * In the payment controller the response from Hobex payments is handled.
     * This action is typically called when the payment succeeded.
     * @Route("/checkout/payment/result", name="app_webshop_payment_result")
     * @param Request $request
     */
    public function result(Request $request, Factory $factory) {

        $cartManager = $factory->getCartManager();
        $orderManager = $factory->getOrderManager();

        $paymentProvider = Factory::getInstance()->getPaymentManager()->getProvider("hobex_testprovider");

        $order = Factory::getInstance()->getCommitOrderProcessor()->handlePaymentResponseAndCommitOrderPayment(
            $request->query->all(),
            $paymentProvider
        );

        if ($order->getOrderState() == AbstractOrder::ORDER_STATE_COMMITTED) {
            return $this->redirectToRoute('app_webshop_checkout_success');
        } else {
            $errorMessage = 'Something wrent wrong with the payment: '.$order->getLastPaymentInfo()->getMessage();
            // error handling ...
            return $this->redirectToRoute('app_webshop_checkout_step1');
        }

    }

    /**
     * @Route("/checkout-start-payment", name="shop-checkout-start-payment")
     *
     * @param Request $request
     * @param Factory $factory
     *
     * @return RedirectResponse
     */
    public function startPaymentAction(Request $request, Factory $factory, LoggerInterface $logger)
    {
        try {
            $cartManager = $factory->getCartManager();
            $cart = $cartManager->getOrCreateCartByName('cart');

            /**
             * @var $checkoutManager CheckoutManagerInterface
             */
            $checkoutManager = $factory->getCheckoutManager($cart);

            $paymentInfo = $checkoutManager->initOrderPayment();

            /**
             * @var OnlineShopOrder $order
             */
            $order = $paymentInfo->getObject();

            $paymentConfig = new HeidelpayRequest();
            $paymentConfig->setInternalPaymentId($paymentInfo->getInternalPaymentId());
            $paymentConfig->setPaymentReference($request->get('paymentId'));
            $paymentConfig->setReturnUrl($this->generateUrl('shop-commit-order', ['order' => $order->getOrdernumber()], UrlGeneratorInterface::ABSOLUTE_URL));
            $paymentConfig->setErrorUrl($this->generateUrl('shop-checkout-payment-error', [], UrlGeneratorInterface::ABSOLUTE_URL));

            $response = $checkoutManager->startOrderPaymentWithPaymentProvider($paymentConfig);

            if ($response instanceof UrlResponse) {
                return new RedirectResponse($response->getUrl());
            }
        } catch (\Exception $e) {
            $this->addFlash('danger', $e->getMessage());
            $logger->error($e->getMessage());

            return $this->redirectToRoute('shop-checkout-payment');
        }
    }

    /**
     * @Route("/payment-error", name = "shop-checkout-payment-error" )
     */
    public function paymentErrorAction(Request $request, LoggerInterface $logger)
    {
        $logger->error('payment error: ' . $request->get('merchantMessage'));

        if ($clientMessage = $request->get('clientMessage')) {
            $this->addFlash('danger', $clientMessage);
        }

        return $this->redirectToRoute('shop-checkout-payment');
    }

    /**
     * @Route("/payment-commit-order", name="shop-commit-order")
     *
     * @param Request $request
     * @param Factory $factory
     * @param LoggerInterface $logger
     * @param Translator $translator
     * @param SessionInterface $session
     *
     * @return RedirectResponse
     *
     * @throws \Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException
     */
    public function commitOrderAction(Request $request, Factory $factory, LoggerInterface $logger, Translator $translator, SessionInterface $session)
    {
        $order = OnlineShopOrder::getByOrdernumber($request->query->get('order'), 1);

        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('cart');

        /**
         * @var $checkoutManager CheckoutManagerInterface
         */
        $checkoutManager = $factory->getCheckoutManager($cart);

        try {
            $order = $checkoutManager->handlePaymentResponseAndCommitOrderPayment([
                'order' => $order
            ]);
        } catch (\Exception $e) {
            $logger->error($e->getMessage());
        }

        if (!$order || $order->getOrderState() !== AbstractOrder::ORDER_STATE_COMMITTED) {
            $this->addFlash('danger', $translator->trans('checkout.payment-failed'));

            return $this->redirectToRoute('shop-checkout-payment');
        }

        if (!$session->isStarted()) {
            $session->start();
        }

        $session->set('last_order_id', $order->getId());

        return $this->redirectToRoute('shop-checkout-completed');
    }
}
