<?php


namespace AppBundle\Controller;


use AppBundle\Form\DeliveryAddressFormType;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
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
    public function checkoutAddressAction(Factory $factory, Request $request) {
        $cartManager = $factory->getCartManager();
        $this->view->cart = $cartManager->getOrCreateCartByName('cart');

        $deliveryAddressDataArray = [];

        $form = $this->createForm(DeliveryAddressFormType::class, $deliveryAddressDataArray, []);
        $form->handleRequest($request);
        $this->view->form = $form->createView();


        if($request->getMethod() == Request::METHOD_POST) {
            return $this->redirectToRoute('shop-checkout-payment');
        }

    }

}