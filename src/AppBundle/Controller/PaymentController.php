<?php


namespace AppBundle\Controller;


use AppBundle\Form\DeliveryAddressFormType;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\V7\CheckoutManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\StartPaymentRequest\QPayRequest;
use Pimcore\Controller\FrontendController;
use Pimcore\Translation\Translator;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;

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
     */
    public function checkoutPaymentAction(Factory $factory, BreadcrumbHelperService $breadcrumbHelperService) {
        $cartManager = $factory->getCartManager();
        $this->view->cart = $cartManager->getOrCreateCartByName('cart');
        $breadcrumbHelperService->enrichCheckoutPage();
    }


    /**
     * @Route("/checkout-payment-frame", name="shop-checkout-payment-frame")
     */
    public function paymentFrameAction(Request $request, Factory $factory, Translator $translator) {
        $cartManager = $factory->getCartManager();
        $this->view->cart = $cart = $cartManager->getOrCreateCartByName('cart');

        /**
         * @var $checkoutManager CheckoutManagerInterface
         */
        $checkoutManager = $factory->getCheckoutManager($cart);


//        try {
            $paymentInformation = $checkoutManager->initOrderPayment();

//        } catch (PaymentNotAllowedException $e) {
//
//            /**
//             * @var $orderManager OrderManagerInterface
//             */
//            $orderManager = $factory->getOrderManager();
//
//            $orderManager->recreateOrder($cart);
//
//            $paymentInformation = $checkoutManager->initOrderPayment();
//        }
//        //$payment = $checkoutManager->getPayment();

        //payment should be datatrans
        // TODO add more payments here
        $url = $request->getSchemeAndHttpHost() . $this->generateUrl('shop-checkout-payment-status') . '?mode=';
        //Datatrans
//        $config = [
//            // checkout config
//            'language' => $request->getLocale(),
//            'refno' => $paymentInformation->getInternalPaymentId(),
//            'useAlias' => true,
//            'reqtype' => 'CAA', // payment direkt ausführen
//
//            // system
//            'successUrl' => $url . 'success',
//            'errorUrl' => $url . 'error',
//            'cancelUrl' => $url . 'cancel'
//        ];
        //QPAY
        $config = [
            'language' => $request->getLocale(),
            'successURL' => $url . 'success',
            'cancelURL' => $url . 'cancel',
            'failureURL' => $url . 'failure',
            'serviceURL' => $url . 'service',
            //'confirmURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'handle-payment', 'action' => 'server-side-q-pay', 'prefix' => $language, 'elementsclientauth' => 'disabled']),
            'confirmMail' => 'christian.fasching@pimcore.com',
            'orderDescription' => 'My Order at pimcore.org',
            'imageURL' => 'https://www.pimcore.org/static/css/skins/default/logo.png',
            'orderIdent' => $paymentInformation->getInternalPaymentId()
        ];

        $config = new QPayRequest($config);
        $config->setLanguage($request->getLocale());
//        $config['language'] = $request->getLocale();
//        $config['successURL'] = $url . 'success';
//        $config['cancelURL'] = $url . 'cancel';
//        $config['failureURL'] = $url . 'failure';
//        $config['serviceURL'] = $url . 'service';
//        $config['confirmMail'] = 'christian.fasching@pimcore.com';
//        $config['orderDescription'] = 'My Order at pimcore.org';
//        $config['imageURL'] = 'https://www.pimcore.org/static/css/skins/default/logo.png';
//        $config['orderIdent'] = $paymentInformation->getInternalPaymentId();

        $startPaymentResponse = $checkoutManager->startOrderPaymentWithPaymentProvider($config);

        $paymentForm = $startPaymentResponse->getForm();
        $paymentForm->remove('submitbutton');
        $paymentForm->add('submitbutton', SubmitType::class, ['attr' => ['class' => 'btn btn-primary'], 'label' => $translator->trans('checkout.payment.paynow')]);

        $this->view->form = $paymentForm->getForm()->createView();

    }


    /**
     * @Route("/checkout-payment-status", name="shop-checkout-payment-status")
     */
    public function paymentStatusAction(Request $request, Factory $factory, Translator $translator, SessionInterface $session) {
        $cartManager = $factory->getCartManager();
        $cart = $cartManager->getOrCreateCartByName('cart');
        $checkoutManager = $factory->getCheckoutManager($cart);

        if ($request->get('mode') == 'cancel') {
            try {
                $checkoutManager->cancelStartedOrderPayment();
            } catch (\Exception $e) {
                //it seems that payment already canceled due to server side call.
            }

            $this->addFlash('danger', $translator->trans('checkout.payment.canceled'));
            $this->view->goto = $this->generateUrl('shop-checkout-address');
            return;
        }

        $params = array_merge($request->query->all(), $request->request->all());

        try {
            $order = $checkoutManager->handlePaymentResponseAndCommitOrderPayment($params);

            // optional to clear payment
            // if this call is necessary depends on payment provider and configuration.
            // its possible to execute this later (e.g. when shipment is done)
//            $payment = $checkoutManager->getPayment();
//            $paymentStatus = $payment->executeDebit();
//            $orderAgent = Factory::getInstance()->getOrderManager()->createOrderAgent($order);
//            $orderAgent->updatePayment($paymentStatus);

            if ($order && $order->getOrderState() == $order::ORDER_STATE_COMMITTED) {

                $session->set("last_order_id", $order->getId());

                $this->view->goto = $this->generateUrl('shop-checkout-completed');
            } else {

                $this->addFlash('danger', strip_tags($request->get('mode'))); //TODO error message
                $this->view->goto = $this->generateUrl('shop-checkout-address');
            }
        } catch (\Exception $e) {

            $this->addFlash('danger', $e->getMessage()); //TODO error message
            $this->view->goto = $this->generateUrl('shop-checkout-address');

        }

    }


}