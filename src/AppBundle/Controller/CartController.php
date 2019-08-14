<?php


namespace AppBundle\Controller;


use AppBundle\Model\Product\AbstractProduct;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\CartInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\VoucherServiceException;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Controller\FrontendController;
use Pimcore\Translation\Translator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;


class CartController extends FrontendController
{
    const DEFAULT_CART_NAME = 'cart';

    /**
     * @var Factory
     */
    protected $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @inheritDoc
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        // enable view auto-rendering
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }


    /**
     * @return CartInterface
     */
    protected function getCart() {
        $cartManager = $this->factory->getCartManager();
        return $cartManager->getOrCreateCartByName(self::DEFAULT_CART_NAME);
    }

    /**
     * @param Request $request
     * @Route("/cart/add-to-cart", name="shop-add-to-cart")
     */
    public function addToCartAction(Request $request) {

        $id = $request->get('id');
        $product = AbstractProduct::getById($id);

        if(null === $product) {
            throw new \Exception('Product not found');
        }

        $cart = $this->getCart();
        $cart->addItem($product, 1);
        $cart->save();

        return $this->redirectToRoute("shop-cart-detail");
    }

    /**
     * @Route("/cart", name="shop-cart-detail")
     */
    public function cartListingAction(Request $request, BreadcrumbHelperService $breadcrumbHelperService) {
        $cart = $this->getCart();

        if($request->getMethod() == Request::METHOD_POST) {

            $items = $request->get('items');

            foreach($items as $itemKey => $quantity) {
                $product = AbstractProduct::getById($itemKey);
                $cart->updateItem($itemKey, $product, $quantity, true);
            }
            $cart->save();
        }

        $breadcrumbHelperService->enrichCartPage();

        if($cart->isEmpty()) {
            return $this->render('cart/cart_empty.html.twig', array_merge($this->view->getAllParameters(), ['cart' => $cart]));
        } else {
            return $this->render('cart/cart_listing.html.twig', array_merge($this->view->getAllParameters(), ['cart' => $cart]));
        }

    }

    /**
     * @param Request $request
     * @Route("/cart/remove-from-cart", name="shop-remove-from-cart")
     */
    public function removeFromCartAction(Request $request) {

        $cart = $this->getCart();
        $cart->removeItem($request->get('id'));
        $cart->save();

        return $this->redirectToRoute("shop-cart-detail");
    }

    /**
     * @Route("/cart/apply-voucher", name="shop-cart-apply-voucher")
     */
    public function applyVoucherAction(Request $request, Translator $translator) {

        if($token = strip_tags($request->get('voucher-code'))) {
            $cart = $this->getCart();

            try {
                $success = $cart->addVoucherToken($token);
                if($success) {
                    $this->addFlash('success', $translator->trans('cart.voucher-code-added'));
                } else {
                    $this->addFlash('danger', $translator->trans('cart.voucher-code-could-not-be-added'));
                }

            } catch (VoucherServiceException $e) {
                $this->addFlash('danger', $translator->trans('cart.error-voucher-code-' . $e->getCode()));
            }

        } else {
            $this->addFlash('danger', $translator->trans('cart.empty-voucher-code'));
        }
        return $this->redirectToRoute('shop-cart-detail');
    }

    /**
     * @Route("/cart/remove-voucher", name="shop-cart-remove-voucher")
     */
    public function removeVoucherAction(Request $request, Translator $translator) {

        if($token = strip_tags($request->get('voucher-code'))) {
            $cart = $this->getCart();

            try {
                $cart->removeVoucherToken($token);
                $this->addFlash('success', $translator->trans('cart.voucher-code-removed'));
            } catch (VoucherServiceException $e) {
                $this->addFlash('danger', $translator->trans('cart.error-voucher-code-' . $e->getCode()));
            }

        } else {
            $this->addFlash('danger', $translator->trans('cart.empty-voucher-code'));
        }
        return $this->redirectToRoute('shop-cart-detail');

    }

}