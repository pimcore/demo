<?php


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
     */
    public function checkoutAddressAction(Factory $factory, Request $request, BreadcrumbHelperService $breadcrumbHelperService) {
        $cartManager = $factory->getCartManager();
        $cart = $this->view->cart = $cartManager->getOrCreateCartByName('cart');

        $checkoutManager = $factory->getCheckoutManager($cart);

        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');


        $deliveryAddressDataArray = $this->fillDeliveryAddressFromCustomer($deliveryAddress->getData());

        $form = $this->createForm(DeliveryAddressFormType::class, $deliveryAddressDataArray, []);
        $form->handleRequest($request);
        $this->view->form = $form->createView();

        $breadcrumbHelperService->enrichCheckoutPage();

        if($request->getMethod() == Request::METHOD_POST) {

            $address = new \stdClass();

            $formData = $form->getData();
            foreach($formData as $key => $value) {
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

    }

    /**
     * @param $deliveryAddress
     * @return array|null
     */
    protected function fillDeliveryAddressFromCustomer($deliveryAddress) {
        $user = $this->getUser();

        $deliveryAddress = (array) $deliveryAddress;

        if($user) {
            if($deliveryAddress === null) {
                $deliveryAddress = [];
            }

            $params = ['email', 'firstname', 'lastname', 'street', 'zip', 'city', 'countryCode'];
            foreach($params as $param) {
                if(empty($deliveryAddress[$param])) {
                    $deliveryAddress[$param] = $user->{'get' . ucfirst($param)}();
                }
            }
        }

        return $deliveryAddress;
    }


    /**
     * @Route("/checkout-completed", name="shop-checkout-completed")
     */
    public function checkoutCompletedAction(SessionInterface $session) {

        $orderId = $session->get("last_order_id");

        $order = OnlineShopOrder::getById($orderId);
        $this->view->order = $order;

    }

}