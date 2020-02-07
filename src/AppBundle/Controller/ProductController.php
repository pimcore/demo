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

namespace AppBundle\Controller;

use AppBundle\Model\Product\AbstractProduct;
use AppBundle\Model\Product\AccessoryPart;
use AppBundle\Model\Product\Car;
use AppBundle\Model\Product\Category;
use AppBundle\Services\SegmentTrackingHelperService;
use AppBundle\Website\LinkGenerator\ProductLinkGenerator;
use AppBundle\Website\Navigation\BreadcrumbHelperService;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ElasticSearch\AbstractElasticSearch;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Config;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Templating\Helper\HeadTitle;
use Pimcore\Templating\Model\ViewModel;
use Pimcore\Translation\Translator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Paginator\Paginator;

class ProductController extends BaseController
{
    /**
     * @Route("/shop/{path}{productname}~p{product}", name="shop-detail", defaults={"path"=""}, requirements={"path"=".*?", "productname"="[\w-]+", "product"="\d+"})
     *
     * @param Request $request
     * @param HeadTitle $headTitleHelper
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param Factory $ecommerceFactory
     * @param SegmentTrackingHelperService $segmentTrackingHelperService
     * @param Concrete $product built-in parameter conversion, please see https://github.com/pimcore/pimcore/pull/5554
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function detailAction(Request $request, HeadTitle $headTitleHelper, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory, SegmentTrackingHelperService $segmentTrackingHelperService, Concrete $product)
    {
        if (!(
                $product && ($product->isPublished() && (($product instanceof Car && $product->getObjectType() == Car::OBJECT_TYPE_ACTUAL_CAR) || $product instanceof AccessoryPart) || $this->verifyPreviewRequest($request, $product))
            )
        ) {
            throw new NotFoundHttpException('Product not found.');
        }

        $breadcrumbHelperService->enrichProductDetailPage($product);
        $headTitleHelper($product->getOSName());

        $paramBag = $this->view->getAllParameters();
        $paramBag['product'] = $product;

        //track segments for personalization
        $segmentTrackingHelperService->trackSegmentsForProduct($product);

        $trackingManager = $ecommerceFactory->getTrackingManager();
        $trackingManager->trackProductView($product);

        if ($product instanceof Car) {

            foreach ($product->getAccessories() as $accessory) {
                $trackingManager->trackProductImpression($accessory, 'crosssells');
            }

            return $this->render('product/detail.html.twig', $paramBag);
        } elseif ($product instanceof AccessoryPart) {

            // get all compatible products
            $productList = $ecommerceFactory->getIndexService()->getProductListForCurrentTenant();
            $productList->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
            if($productList instanceof DefaultMysql) {
                $productList->addCondition('o_id IN (' . implode(',', $product->getCompatibleToProductIds()) . ')', 'o_id');
            } else if($productList instanceof AbstractElasticSearch) {
                $productList->addCondition(['terms' => ['system.o_id' => $product->getCompatibleToProductIds()]], 'o_id');
            }

            foreach($productList as $compatibleProduct) {
                $trackingManager->trackProductImpression($compatibleProduct, 'crosssells');
            }

            $paramBag['compatibleTo'] = $productList;

            return $this->render('product/detail_accessory.html.twig', $paramBag);
        }
    }

    /**
     * @Route("/shop/{path}{categoryname}~c{category}", name="shop-category", defaults={"path"=""}, requirements={"path"=".*?", "categoryname"="[\w-]+", "category"="\d+"})
     *
     * @param Request $request
     * @param HeadTitle $headTitleHelper
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param Factory $ecommerceFactory
     * @param SegmentTrackingHelperService $segmentTrackingHelperService
     *
     * @return array|\Symfony\Component\HttpFoundation\Response
     */
    public function listingAction(Request $request, HeadTitle $headTitleHelper, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory, SegmentTrackingHelperService $segmentTrackingHelperService)
    {
        $viewModel = new ViewModel();
        $params = array_merge($request->query->all(), $request->attributes->all());

        //needed to make sure category filter filters for active category
        $params['parentCategoryIds'] = $params['category'] ?? null;

        $category = Category::getById($params['category'] ?? null);
        $viewModel->category = $category;
        if ($category) {
            $headTitleHelper($category->getName());
            $breadcrumbHelperService->enrichCategoryPage($category);
        }

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
        $viewModel->productListing = $productListing;

        // load current filter
        if ($category) {
            $filterDefinition = $category->getFilterdefinition();

            //track segments for personalization
            $segmentTrackingHelperService->trackSegmentsForCategory($category);

            $trackingManager = $ecommerceFactory->getTrackingManager();
            $trackingManager->trackCategoryPageView($category->getName(), null);
        }

        if ($request->get('filterdefinition') instanceof FilterDefinition) {
            $filterDefinition = $request->get('filterdefinition');
        }

        if (empty($filterDefinition)) {
            $filterDefinition = Config::getWebsiteConfig()->get('fallbackFilterdefinition');
        }

        $filterService = $ecommerceFactory->getFilterService();
        Helper::setupProductList($filterDefinition, $productListing, $params, $viewModel, $filterService, true);
        $viewModel->filterService = $filterService;
        $viewModel->filterDefinition = $filterDefinition;

        // init pagination
        $paginator = new Paginator($productListing);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(18);
        $paginator->setPageRange(5);
        $viewModel->results = $paginator;
        $viewModel->paginationVariables = $paginator->getPages('Sliding');

        if ($request->attributes->get('noLayout')) {
            return $this->render('/product/listing_content.html.twig', array_merge($this->view->getAllParameters(), $viewModel->getAllParameters()));
        }

        // track product impressions
        $trackingManager = $ecommerceFactory->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product, 'grid');
        }

        return $viewModel->getAllParameters();
    }

    /**
     * @param Request $request
     * @param Factory $ecommerceFactory
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function productTeaserAction(Request $request, Factory $ecommerceFactory)
    {
        $paramsBag = [];
        if ($request->get('type') == 'object') {
            AbstractObject::setGetInheritedValues(true);
            $product = AbstractProduct::getById($request->get('id'));

            $paramsBag['product'] = $product;

            //track product impression
            $trackingManager = $ecommerceFactory->getTrackingManager();
            $trackingManager->trackProductImpression($product, 'teaser');

            return $this->render('/product/product_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('Product not found.');
    }

    /**
     * @Route("/search", name="search")
     *
     * @param Request $request
     * @param Factory $ecommerceFactory
     * @param ProductLinkGenerator $productLinkGenerator
     * @param Translator $translator
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param HeadTitle $headTitleHelper
     *
     * @return array|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function searchAction(Request $request, Factory $ecommerceFactory, ProductLinkGenerator $productLinkGenerator, Translator $translator, BreadcrumbHelperService $breadcrumbHelperService, HeadTitle $headTitleHelper)
    {
        $params = $request->query->all();
        $viewModel = new ViewModel();

        $viewModel->category = Category::getById($params['category'] ?? null);

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);

        $term = strip_tags($request->get('term'));

        if($productListing instanceof AbstractElasticSearch) {

            // simple elastic search query - uses multi-match query on all defined search_attributes
//            $productListing->addQueryCondition($term);

            //sample for a more specific elastic search query - not considers search_attributes but provides full flexibility
            // this query weights cars more that accessories
            $query = [
                'function_score' => [
                    'query' => [
                        'multi_match' => [
                            "query" => $term,
                            "type" => "cross_fields",
                            "operator" => "and",
                            "fields" => [
                                "attributes.name^4",
                                "attributes.name.analyzed",
                                "attributes.name.analyzed_ngram",
                                "attributes.manufacturer_name^3",
                                "attributes.manufacturer_name.analyzed",
                                "attributes.manufacturer_name.analyzed_ngram",
                                "attributes.color",
                                "attributes.carClass"
                            ]
                        ]
                    ],
                    'functions' => [
                        [
                            'filter' => ['match' => ['system.o_classId' => 'AP']],
                            'weight' => 1
                        ],
                        [
                            'filter' => ['match' => ['system.o_classId' => 'CAR']],
                            'weight' => 2
                        ]
                    ],
                    'boost_mode' => 'multiply'
                ]

            ];

            $productListing->addQueryCondition($query, 'searchTerm');


        } else {

            //default mysql search query condition - would also work for elastic search in that way
            $term = trim(preg_replace('/\s+/', ' ', $term));

            if (!empty($term)) {
                foreach (explode(' ', $term) as $t) {
                    $productListing->addQueryCondition($t);
                }
            }

        }


        if ($params['autocomplete']) {
            $resultset = [];
            $productListing->setLimit(10);
            foreach ($productListing as $product) {
                $result['href'] = $productLinkGenerator->generateWithMockup($product, []);
                if ($product instanceof Car) {
                    $result['product'] = $product->getOSName() . ' ' . $product->getColor()[0] . ', ' . $product->getCarClass();
                } else {
                    $result['product'] = $product->getOSName();
                }

                $resultset[] = $result;
            }

            return $this->json($resultset);
        }

        $filterDefinition = $viewModel->filterDefinition = Config::getWebsiteConfig()->get('fallbackFilterdefinition');

        // create and init filter service
        $filterService = Factory::getInstance()->getFilterService();

        Helper::setupProductList($filterDefinition, $productListing, $params, $viewModel, $filterService, true);
        $viewModel->filterService = $filterService;
        $viewModel->products = $productListing;

        // init pagination
        $paginator = new Paginator($productListing);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(18);
        $paginator->setPageRange(5);
        $viewModel->results = $paginator;
        $viewModel->paginationVariables = $paginator->getPages('Sliding');

        $trackingManager = $ecommerceFactory->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product, 'search-results');
        }

        //breadcrumbs
        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'search-result',
            'label' => $translator->trans('shop.search-result', [$term])
        ]);

        $viewModel->language = $request->getLocale();
        $viewModel->term = $term;

        $breadcrumbHelperService->enrichGenericDynamicPage($translator->trans('shop.search-result', [$term]));
        $headTitleHelper($translator->trans('shop.search-result', [$term]));

        return $viewModel->getAllParameters();
    }
}
