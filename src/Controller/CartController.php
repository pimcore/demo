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

use App\Model\Product\AbstractProduct;
use App\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\CartInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\VoucherServiceException;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\CheckoutableInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\ProductInterface;
use Pimcore\Controller\FrontendController;
use Pimcore\Translation\Translator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;

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
     * @return CartInterface
     */
    protected function getCart()
    {
        $cartManager = $this->factory->getCartManager();

        return $cartManager->getOrCreateCartByName(self::DEFAULT_CART_NAME);
    }

    /**
     * @Route("/cart/add-to-cart", name="shop-add-to-cart", methods={"POST"})
     *
     * @throws \Exception
     */
    public function addToCartAction(Request $request, Factory $ecommerceFactory): RedirectResponse
    {
        if (!$this->isCsrfTokenValid('addToCart', $request->request->get('_csrf_token'))) {
            throw new \Exception('Invalid request');
        }

        $id = $request->query->getInt('id');
        $product = AbstractProduct::getById($id);

        if (null === $product) {
            throw new \Exception('Product not found');
        }

        $cart = $this->getCart();
        if ($cart->getItemCount() > 99) {
            throw new \Exception('Maximum Cart items limit Reached');
        }

        $cart->addItem($product, 1);
        $cart->save();

        $trackingManager = $ecommerceFactory->getTrackingManager();
        $trackingManager->trackCartProductActionAdd($cart, $product);
        $trackingManager->forwardTrackedCodesAsFlashMessage();

        return $this->redirectToRoute('shop-cart-detail');
    }

    /**
     * @Route("/cart", name="shop-cart-detail")
     *
     * @param Request $request
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param Factory $ecommerceFactory
     *
     * @return Response
     */
    public function cartListingAction(Request $request, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory)
    {
        $cart = $this->getCart();

        if ($request->getMethod() == Request::METHOD_POST) {
            if (!$this->isCsrfTokenValid('cartListing', $request->get('_csrf_token'))) {
                throw new AccessDeniedHttpException('Invalid request');
            }

            $items = $request->get('items');

            foreach ($items as $itemKey => $quantity) {
                if (!is_numeric($quantity)) {
                    continue;
                }

                if ($cart->getItemCount() > 99) {
                    break;
                }
                $product = AbstractProduct::getById($itemKey);
                if ($product instanceof CheckoutableInterface) {
                    $cart->updateItem($itemKey, $product, floor($quantity), true);
                }
            }
            $cart->save();

            $trackingManager = $ecommerceFactory->getTrackingManager();
            $trackingManager->trackCartUpdate($cart);
        }

        $breadcrumbHelperService->enrichCartPage();
        $params = array_merge($request->request->all(), $request->query->all());
        if ($cart->isEmpty()) {
            return $this->render('cart/cart_empty.html.twig', array_merge($params, ['cart' => $cart]));
        } else {
            return $this->render('cart/cart_listing.html.twig', array_merge($params, ['cart' => $cart]));
        }
    }

    /**
     * @Route("/cart/remove-from-cart", name="shop-remove-from-cart", methods={"POST"})
     */
    public function removeFromCartAction(Request $request, Factory $ecommerceFactory): RedirectResponse
    {
        if (!$this->isCsrfTokenValid('cartListing', $request->request->get('_csrf_token'))) {
            throw new \Exception('Invalid request');
        }

        $id = $request->query->getInt('id');
        $product = AbstractProduct::getById($id);

        $cart = $this->getCart();
        $cart->removeItem($id);
        $cart->save();

        if ($product instanceof ProductInterface) {
            $trackingManager = $ecommerceFactory->getTrackingManager();
            $trackingManager->trackCartProductActionRemove($cart, $product);
            $trackingManager->forwardTrackedCodesAsFlashMessage();
        }

        return $this->redirectToRoute('shop-cart-detail');
    }

    /**
     * @Route("/cart/apply-voucher", name="shop-cart-apply-voucher")
     *
     * @param Request $request
     * @param Translator $translator
     * @param Factory $ecommerceFactory
     *
     * @return RedirectResponse
     *
     * @throws \Exception
     */
    public function applyVoucherAction(Request $request, Translator $translator, Factory $ecommerceFactory)
    {
        if ($token = strip_tags($request->get('voucher-code'))) {
            $cart = $this->getCart();

            try {
                $success = $cart->addVoucherToken($token);
                if ($success) {
                    $this->addFlash('success', $translator->trans('cart.voucher-code-added'));

                    $trackingManager = $ecommerceFactory->getTrackingManager();
                    $trackingManager->trackCartUpdate($cart);
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
     *
     * @param Request $request
     * @param Translator $translator
     * @param Factory $ecommerceFactory
     *
     * @return RedirectResponse
     */
    public function removeVoucherAction(Request $request, Translator $translator, Factory $ecommerceFactory)
    {
        if ($token = strip_tags($request->get('voucher-code'))) {
            $cart = $this->getCart();

            try {
                $cart->removeVoucherToken($token);
                $this->addFlash('success', $translator->trans('cart.voucher-code-removed'));

                $trackingManager = $ecommerceFactory->getTrackingManager();
                $trackingManager->trackCartUpdate($cart);
            } catch (VoucherServiceException $e) {
                $this->addFlash('danger', $translator->trans('cart.error-voucher-code-' . $e->getCode()));
            }
        } else {
            $this->addFlash('danger', $translator->trans('cart.empty-voucher-code'));
        }

        return $this->redirectToRoute('shop-cart-detail');
    }
}
