<?php


namespace AppBundle\Controller;


use AppBundle\Form\DeliveryAddressFormType;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\CheckoutManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\Heidelpay;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\AbstractRequest;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\HeidelpayRequest;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\QPayRequest;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentResponse\UrlResponse;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\OnlineShopOrder;
use Pimcore\Translation\Translator;
use Psr\Log\LoggerInterface;
use Psr\Log\Test\LoggerInterfaceTest;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends FrontendController
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
     * @Route("/checkout-payment", name="shop-checkout-payment")
     *
     * @param Factory $factory
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @return array
     */
    public function checkoutPaymentAction(Factory $factory, BreadcrumbHelperService $breadcrumbHelperService) {
        $cartManager = $factory->getCartManager();
        $breadcrumbHelperService->enrichCheckoutPage();

        $cart = $cartManager->getOrCreateCartByName('cart');
        $checkoutManager = $factory->getCheckoutManager($cart);
        $paymentProvider = $checkoutManager->getPayment();

        $accessKey = '';
        if($paymentProvider instanceof Heidelpay) {
            $accessKey = $paymentProvider->getPublicAccessKey();
        }

        return [
            'cart' => $cart,
            'accessKey' => $accessKey
        ];
    }

    /**
     * @Route("/checkout-start-payment", name="shop-checkout-start-payment")
     *
     * @param Request $request
     * @param Factory $factory
     * @return RedirectResponse
     */
    public function startPaymentAction(Request $request, Factory $factory, LoggerInterface $logger) {
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

            if($response instanceof UrlResponse) {
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

        if($clientMessage = $request->get('clientMessage')) {
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
     * @return RedirectResponse
     * @throws \Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException
     */
    public function commitOrderAction(Request $request, Factory $factory, LoggerInterface $logger, Translator $translator, SessionInterface $session) {
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

        } catch(\Exception $e) {
            $logger->error($e->getMessage());
        }

        if(!$order || $order->getOrderState() !== AbstractOrder::ORDER_STATE_COMMITTED) {

            $this->addFlash('danger', $translator->trans('checkout.payment-failed'));
            return $this->redirectToRoute('shop-checkout-payment');
        }

        if (!$session->isStarted()) {
            $session->start();
        }

        $session->set("last_order_id", $order->getId());

        return $this->redirectToRoute('shop-checkout-completed');
    }

//    /**
//     * @Route("/checkout-payment-frame", name="shop-checkout-payment-frame")
//     *
//     * @param Request $request
//     * @param Factory $factory
//     * @param Translator $translator
//     * @return array
//     * @throws \Pimcore\Bundle\EcommerceFrameworkBundle\Exception\UnsupportedException
//     */
//    public function paymentFrameAction(Request $request, Factory $factory, Translator $translator) {
//        $cartManager = $factory->getCartManager();
//        $cart = $cartManager->getOrCreateCartByName('cart');
//
//        /**
//         * @var $checkoutManager CheckoutManagerInterface
//         */
//        $checkoutManager = $factory->getCheckoutManager($cart);
//
//
////        try {
//            $paymentInformation = $checkoutManager->initOrderPayment();
//
////        } catch (PaymentNotAllowedException $e) {
////
////            /**
////             * @var $orderManager OrderManagerInterface
////             */
////            $orderManager = $factory->getOrderManager();
////
////            $orderManager->recreateOrder($cart);
////
////            $paymentInformation = $checkoutManager->initOrderPayment();
////        }
////        //$payment = $checkoutManager->getPayment();
//
//        //payment should be datatrans
//        // TODO add more payments here
//        $url = $request->getSchemeAndHttpHost() . $this->generateUrl('shop-checkout-payment-status') . '?mode=';
//        //Datatrans
////        $config = [
////            // checkout config
////            'language' => $request->getLocale(),
////            'refno' => $paymentInformation->getInternalPaymentId(),
////            'useAlias' => true,
////            'reqtype' => 'CAA', // payment direkt ausführen
////
////            // system
////            'successUrl' => $url . 'success',
////            'errorUrl' => $url . 'error',
////            'cancelUrl' => $url . 'cancel'
////        ];
//        //QPAY
//        $config = [
//            'language' => $request->getLocale(),
//            'successURL' => $url . 'success',
//            'cancelURL' => $url . 'cancel',
//            'failureURL' => $url . 'failure',
//            'serviceURL' => $url . 'service',
//            //'confirmURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'handle-payment', 'action' => 'server-side-q-pay', 'prefix' => $language, 'elementsclientauth' => 'disabled']),
//            'confirmMail' => 'christian.fasching@pimcore.com',
//            'orderDescription' => 'My Order at pimcore.org',
//            'imageURL' => 'https://www.pimcore.org/static/css/skins/default/logo.png',
//            'orderIdent' => $paymentInformation->getInternalPaymentId()
//        ];
//
//        $config = new QPayRequest($config);
//        $config->setLanguage($request->getLocale());
////        $config['language'] = $request->getLocale();
////        $config['successURL'] = $url . 'success';
////        $config['cancelURL'] = $url . 'cancel';
////        $config['failureURL'] = $url . 'failure';
////        $config['serviceURL'] = $url . 'service';
////        $config['confirmMail'] = 'christian.fasching@pimcore.com';
////        $config['orderDescription'] = 'My Order at pimcore.org';
////        $config['imageURL'] = 'https://www.pimcore.org/static/css/skins/default/logo.png';
////        $config['orderIdent'] = $paymentInformation->getInternalPaymentId();
//
//        $startPaymentResponse = $checkoutManager->startOrderPaymentWithPaymentProvider($config);
//
//        $paymentForm = $startPaymentResponse->getForm();
//        $paymentForm->remove('submitbutton');
//        $paymentForm->add('submitbutton', SubmitType::class, ['attr' => ['class' => 'btn btn-primary'], 'label' => $translator->trans('checkout.payment.paynow')]);
//
//        return [
//            'cart' => $cart,
//            'form' => $paymentForm->getForm()->createView()
//        ];
//    }

//
//    /**
//     * @Route("/checkout-payment-status", name="shop-checkout-payment-status")
//     *
//     * @param Request $request
//     * @param Factory $factory
//     * @param Translator $translator
//     * @param SessionInterface $session
//     * @return array
//     */
//    public function paymentStatusAction(Request $request, Factory $factory, Translator $translator, SessionInterface $session) {
//        $cartManager = $factory->getCartManager();
//        $cart = $cartManager->getOrCreateCartByName('cart');
//        $checkoutManager = $factory->getCheckoutManager($cart);
//
//        if ($request->get('mode') == 'cancel') {
//            try {
//                $checkoutManager->cancelStartedOrderPayment();
//            } catch (\Exception $e) {
//                //it seems that payment already canceled due to server side call.
//            }
//
//            $this->addFlash('danger', $translator->trans('checkout.payment.canceled'));
//            return [
//                'goto' => $this->generateUrl('shop-checkout-address')
//            ];
//        }
//
//        $params = array_merge($request->query->all(), $request->request->all());
//
//        try {
//            $order = $checkoutManager->handlePaymentResponseAndCommitOrderPayment($params);
//
//            // optional to clear payment
//            // if this call is necessary depends on payment provider and configuration.
//            // its possible to execute this later (e.g. when shipment is done)
////            $payment = $checkoutManager->getPayment();
////            $paymentStatus = $payment->executeDebit();
////            $orderAgent = Factory::getInstance()->getOrderManager()->createOrderAgent($order);
////            $orderAgent->updatePayment($paymentStatus);
//
//            if ($order && $order->getOrderState() == $order::ORDER_STATE_COMMITTED) {
//
//                $session->set("last_order_id", $order->getId());
//
//                $goto = $this->generateUrl('shop-checkout-completed');
//            } else {
//
//                $this->addFlash('danger', strip_tags($request->get('mode'))); //TODO error message
//                $goto = $this->generateUrl('shop-checkout-address');
//            }
//        } catch (\Exception $e) {
//
//            $this->addFlash('danger', $e->getMessage()); //TODO error message
//            $goto = $this->generateUrl('shop-checkout-address');
//
//        }
//
//        return [
//            'goto' => $goto
//        ];
//
//    }


}