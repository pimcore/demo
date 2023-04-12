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
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\PayPalSmartPaymentButton;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\AbstractRequest;
use Pimcore\Controller\FrontendController;
use Pimcore\Translation\Translator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
        $cartManager = $factory->getCartManager();
        $breadcrumbHelperService->enrichCheckoutPage();

        $cart = $cartManager->getOrCreateCartByName('cart');

        if ($cart->isEmpty()) {
            return $this->redirectToRoute('shop-cart-detail');
        }

        $checkoutManager = $factory->getCheckoutManager($cart);
        $paymentProvider = $checkoutManager->getPayment();

        $SDKUrl = '';
        if ($paymentProvider instanceof PayPalSmartPaymentButton) {
            $SDKUrl = $paymentProvider->buildPaymentSDKLink();
        }

        $trackingManager = $factory->getTrackingManager();
        $trackingManager->trackCheckoutStep(new Confirm($cart), $cart, 2);

        return $this->render('payment/checkout_payment.html.twig', [
            'cart' => $cart,
            'SDKUrl' => $SDKUrl
        ]);
    }

    /**
     * @Route("/checkout-start-payment", name="shop-checkout-start-payment")
     *
     * @param Request $request
     * @param Factory $factory
     *
     * @return JsonResponse
     */
    public function startPaymentAction(Request $request, Factory $factory, LoggerInterface $logger)
    {
        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('cart');

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);
        $paymentInformation = $checkoutManager->initOrderPayment();
        $order = $paymentInformation->getObject();

        $config = [
                'return_url' => '',
                'cancel_url' => 'https://demo.pimcore.fun/payment-error',
                'OrderDescription' => 'My Order ' . $order->getOrdernumber() . ' at pimcore.org',
                'InternalPaymentId' => $paymentInformation->getInternalPaymentId()
            ];

        $paymentConfig = new AbstractRequest($config);

        $response = $checkoutManager->startOrderPaymentWithPaymentProvider($paymentConfig);

        return new JsonResponse($response->getJsonString(), 200, [], true);
    }

    /**
     * @Route("/payment-error", name = "shop-checkout-payment-error" )
     *
     * @return RedirectResponse
     */
    public function paymentErrorAction(Request $request, LoggerInterface $logger)
    {
        $this->addFlash('danger', 'Payment error');

        return $this->redirectToRoute('shop-checkout-payment');
    }

    /**
     * @Route("/payment-commit-order", name="shop-commit-order")
     *
     * @param Request $request
     * @param Factory $factory
     * @param LoggerInterface $logger
     * @param Translator $translator
     *
     * @return RedirectResponse
     *
     */
    public function commitOrderAction(Request $request, Factory $factory, LoggerInterface $logger, Translator $translator)
    {
        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('cart');

        $checkoutManager = $factory->getCheckoutManager($cart);
        $params = array_merge($request->query->all(), $request->request->all());

        $order = $checkoutManager->handlePaymentResponseAndCommitOrderPayment($params);

        $session = $request->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }

        $session->set('last_order_id', $order->getId());

        return $this->redirectToRoute('shop-checkout-completed');
    }
}
