<?php

namespace AppBundle\Controller;

use AppBundle\Model\Product\AbstractProduct;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\FilterDefinition;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Paginator\Paginator;

class DefaultController extends BaseController
{

    /**
     * @param Request $request
     * @Route("/examples", name="examples")
     */
    public function examplesAction(Request $request)
    {
    }

    public function defaultAction(Request $request)
    {
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function galleryRenderletAction(Request $request)
    {
        if ($request->get('id') && $request->get('type') === 'asset') {
            $this->view->asset = Asset::getById($request->get('id'));
        }
    }


//    /**
//     * @Route("/checkout-address", name="shop-checkout-address")
//     */
//    public function checkoutAddressAction(Factory $factory, Request $request) {
//        $cartManager = $factory->getCartManager();
//        $this->view->cart = $cartManager->getOrCreateCartByName('cart');
//
//        if($request->getMethod() == Request::METHOD_POST) {
//            return $this->redirectToRoute('shop-checkout-payment');
//        }
//
//    }


}
