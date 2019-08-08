<?php

namespace AppBundle\Controller;


use AppBundle\Model\Product\AbstractProduct;
use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use AppBundle\Model\Product\Category;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Templating\Helper\HeadTitle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Paginator\Paginator;

class ProductController extends BaseController
{

    /**
     * @param Request $request
     * @Route("/shop/{path}{productname}~p{product}", name="shop-detail", defaults={"path"=""}, requirements={"path"=".*?", "productname"="[\w-]+", "product"="\d+"})
     */
    public function detailAction(Request $request, HeadTitle $headTitleHelper, BreadcrumbHelperService $breadcrumbHelperService, Factory $factory) {

        $product = Concrete::getById($request->get("product"));

        if(!($product->isPublished() && ($product instanceof Car || $product instanceof AccessoryPart))) {
            throw new NotFoundHttpException("Product not found.");
        }

        $breadcrumbHelperService->enrichProductDetailPage($product);

        $headTitleHelper($product->getOSName());

        $paramBag = $this->view->getAllParameters();
        $paramBag['product'] = $product;


        if($product instanceof Car) {
            return $this->render('product/detail.html.twig', $paramBag);
        } else if($product instanceof AccessoryPart) {

            // get all compatible products
            $productList = $factory->getIndexService()->getProductListForCurrentTenant();
            $productList->addCondition('o_id IN (' . implode(',',  $product->getCompatibleToProductIds()) . ')', 'o_id');
            $paramBag['compatibleTo'] = $productList;

            return $this->render('product/detail_accessory.html.twig', $paramBag);
        }
    }


    /**
     * @param Request $request
     * @Route("/shop/{path}{categoryname}~c{category}", name="shop-category", defaults={"path"=""}, requirements={"path"=".*?", "categoryname"="[\w-]+", "category"="\d+"})
     */
    public function listingAction(Request $request, HeadTitle $headTitleHelper, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory)
    {
        $params = array_merge($request->query->all(), $request->attributes->all());
        $params['parentCategoryIds'] = $params['category'];

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
        $this->view->productListing = $productListing;

        //TODO load filter definition
        $filterDefinition = FilterDefinition::getById(563);
        $filterService = $ecommerceFactory->getFilterService();

        Helper::setupProductList($filterDefinition, $productListing, $params, $this->view, $filterService, true);
        $this->view->filterService = $filterService;
        $this->view->filterDefinition = $filterDefinition;

        // init pagination
        $paginator = new Paginator($productListing);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(18);
        $paginator->setPageRange(5);
        $this->view->results = $paginator;
        $this->view->paginationVariables = $paginator->getPages('Sliding');

        $category = Category::getById($params['category']);
        $this->view->category = $category;
        $headTitleHelper($category->getName());

        $breadcrumbHelperService->enrichCategoryPage($category);

    }

    public function productTeaserAction(Request $request)
    {
        $paramsBag = [];
        if ($request->get('type') == 'object') {
            AbstractObject::setGetInheritedValues(true);
            $product = AbstractProduct::getById($request->get('id'));

            $paramsBag['product'] = $product;
            //$trackingManager = Factory::getInstance()->getTrackingManager();
            //$trackingManager->trackProductImpression($product);
            return $this->render('/product/product_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('Product not found.');

    }

}

