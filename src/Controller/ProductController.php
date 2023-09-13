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
use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use App\Model\Product\Category;
use App\Services\SegmentTrackingHelperService;
use App\Website\LinkGenerator\ProductLinkGenerator;
use App\Website\Navigation\BreadcrumbHelperService;
use Knp\Component\Pager\Pagination\SlidingPagination;
use Knp\Component\Pager\PaginatorInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\ListHelper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\DefaultMysql;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ElasticSearch\AbstractElasticSearch;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Config;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\Data\UrlSlug;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Translation\Translator;
use Pimcore\Twig\Extension\Templating\HeadTitle;
use Pimcore\Twig\Extension\Templating\Placeholder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends BaseController
{
    /**
     * @param Request $request
     * @param AbstractObject $object
     * @param UrlSlug $urlSlug
     *
     * @return Response
     */
    public function productDetailSlugAction(Request $request, AbstractObject $object, UrlSlug $urlSlug)
    {
        return $this->forward('App\Controller\ProductController::detailAction', ['product' => $object]);
    }

    /**
     * @Route("/shop/{path}{productname}~p{product}", name="shop-detail", defaults={"path"=""}, requirements={"path"=".*?", "productname"="[\w-]+", "product"="\d+"})
     *
     * @param Request $request
     * @param HeadTitle $headTitleHelper
     * @param BreadcrumbHelperService $breadcrumbHelperService
     * @param Factory $ecommerceFactory
     * @param SegmentTrackingHelperService $segmentTrackingHelperService
     * @param Concrete $product built-in parameter conversion, please see https://github.com/pimcore/pimcore/pull/5554
     * @param ProductLinkGenerator $productLinkGenerator
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function detailAction(
        Request $request,
        HeadTitle $headTitleHelper,
        BreadcrumbHelperService $breadcrumbHelperService,
        Factory $ecommerceFactory,
        SegmentTrackingHelperService $segmentTrackingHelperService,
        Concrete $product,
        ProductLinkGenerator $productLinkGenerator
    ) {
        if (!(
                $product && ($product->isPublished() && (($product instanceof Car && $product->getObjectType() == Car::OBJECT_TYPE_ACTUAL_CAR) || $product instanceof AccessoryPart) || $this->verifyPreviewRequest($request, $product))
            )
        ) {
            throw new NotFoundHttpException('Product not found.');
        }

        //redirect to main url
        $generatorUrl = $productLinkGenerator->generate($product);
        if ($generatorUrl != $request->getPathInfo()) {
            $queryString = $request->getQueryString();

            return $this->redirect($generatorUrl . ($queryString ? '?' . $queryString : ''));
        }

        $breadcrumbHelperService->enrichProductDetailPage($product);
        $headTitleHelper($product->getOSName());

        $paramBag = $this->getAllParameters($request);
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
            if ($productList instanceof DefaultMysql) {
                $productList->addCondition('id IN (' . implode(',', $product->getCompatibleToProductIds()) . ')', 'id');
            } elseif ($productList instanceof AbstractElasticSearch) {
                $productList->addCondition(['terms' => ['system.id' => $product->getCompatibleToProductIds()]], 'id');
            }

            foreach ($productList as $compatibleProduct) {
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
     * @param ListHelper $listHelper
     *
     * @return Response
     */
    public function listingAction(Request $request, HeadTitle $headTitleHelper, BreadcrumbHelperService $breadcrumbHelperService, Factory $ecommerceFactory, SegmentTrackingHelperService $segmentTrackingHelperService, ListHelper $listHelper, PaginatorInterface $paginator)
    {
        $params = array_merge($request->query->all(), $request->attributes->all());

        //needed to make sure category filter filters for active category
        $params['parentCategoryIds'] = $params['category'] ?? null;

        $category = Category::getById($params['category'] ?? -1);
        $params['category'] = $category;
        if ($category) {
            $headTitleHelper($category->getName());
            $breadcrumbHelperService->enrichCategoryPage($category);
        }

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
        $params['productListing'] = $productListing;

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
            $filterDefinition = Config::getWebsiteConfig()['fallbackFilterdefinition'];
        }

        $filterService = $ecommerceFactory->getFilterService();
        $listHelper->setupProductList($filterDefinition, $productListing, $params, $filterService, true);
        $params['filterService'] = $filterService;
        $params['filterDefinition'] = $filterDefinition;

        /** @var SlidingPagination $paginator */
        // init pagination
        $paginator = $paginator->paginate(
            $productListing,
            $request->get('page', 1),
            $filterDefinition->getPageLimit()
        );

        $params['results'] = $paginator;
        $params['paginationVariables'] = $paginator->getPaginationData();

        if ($request->attributes->get('noLayout')) {
            return $this->render('product/listing_content.html.twig', $params);
        }

        // track product impressions
        $trackingManager = $ecommerceFactory->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product, 'grid');
        }

        return $this->render('product/listing.html.twig', $params);
    }

    public function productTeaserAction(Request $request, Factory $ecommerceFactory): Response
    {
        $paramsBag = [];
        $type = $request->attributes->get('type')?:$request->query->get('type');
        if ($type === 'object') {
            AbstractObject::setGetInheritedValues(true);
            $id = $request->attributes->getInt('id')?:$request->query->getInt('id');
            $product = AbstractProduct::getById($id);
            if ($product instanceof Car && $product->getObjectType() === Car::OBJECT_TYPE_VIRTUAL_CAR) {
                throw new \Exception('Virtual products are not allowed in product teasers.');
            }
            $paramsBag['product'] = $product;

            //track product impression
            $trackingManager = $ecommerceFactory->getTrackingManager();
            $trackingManager->trackProductImpression($product, 'teaser');

            return $this->render('product/product_teaser.html.twig', $paramsBag);
        }

        throw new NotFoundHttpException('Product not found.');
    }

    /**
     * @Route("/search", name="search", methods={"GET"})
     */
    public function searchAction(Request $request, ListHelper $listHelper, Factory $ecommerceFactory, ProductLinkGenerator $productLinkGenerator, Translator $translator, BreadcrumbHelperService $breadcrumbHelperService, HeadTitle $headTitleHelper, Placeholder $placeholder, PaginatorInterface $paginator): Response
    {
        $params = $request->query->all();

        $params['category'] = Category::getById((int) ($params['category'] ?? -1));

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);

        $term = strip_tags($request->query->get('term'));

        if ($productListing instanceof AbstractElasticSearch) {

            // simple elastic search query - uses multi-match query on all defined search_attributes
//            $productListing->addQueryCondition($term);

            //sample for a more specific elastic search query - not considers search_attributes but provides full flexibility
            // this query weights cars more that accessories
            $query = [
                'function_score' => [
                    'query' => [
                        'multi_match' => [
                            'query' => $term,
                            'type' => 'cross_fields',
                            'operator' => 'and',
                            'fields' => [
                                'attributes.name^4',
                                'attributes.name.analyzed',
                                'attributes.name.analyzed_ngram',
                                'attributes.manufacturer_name^3',
                                'attributes.manufacturer_name.analyzed',
                                'attributes.manufacturer_name.analyzed_ngram',
                                'attributes.color',
                                'attributes.color.analyzed',
                                'attributes.color.analyzed_ngram',
                                'attributes.carClass',
                                'attributes.carClass.analyzed',
                                'attributes.carClass.analyzed_ngram'
                            ]
                        ]
                    ],
                    'functions' => [
                        [
                            'filter' => ['match' => ['system.classId' => 'AP']],
                            'weight' => 1
                        ],
                        [
                            'filter' => ['match' => ['system.classId' => 'CAR']],
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

        if (isset($params['autocomplete'])) {
            $resultset = [];
            $productListing->setLimit(10);
            foreach ($productListing as $product) {
                $result['href'] = $productLinkGenerator->generateWithMockup($product, []);

                $result['product'] = $product->getOSName() ?? '';
                if ($product instanceof Car) {
                    $result['product'] .= ' ' . $product->getColor()[0] . ', ' . $product->getCarClass();
                }

                $resultset[] = $result;
            }

            return $this->json($resultset);
        }

        $filterDefinition = $params['filterDefinition'] = Config::getWebsiteConfig()['fallbackFilterdefinition'];

        // create and init filter service
        $filterService = Factory::getInstance()->getFilterService();

        $listHelper->setupProductList($filterDefinition, $productListing, $params, $filterService, true);

        $params['filterService'] = $filterService;
        $params['products'] = $productListing;

        // init pagination
        $paginator = $paginator->paginate(
            $productListing,
            $request->query->getInt('page', 1),
            $filterDefinition->getPageLimit()
        );

        $params['results'] = $paginator;
        $params['paginationVariables'] = $paginator->getPaginationData();

        $trackingManager = $ecommerceFactory->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product, 'search-results');
        }

        //breadcrumbs
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'search-result',
            'label' => $translator->trans('shop.search-result', [$term])
        ]);

        $params['language'] = $request->getLocale();
        $params['term'] = $term;

        $breadcrumbHelperService->enrichGenericDynamicPage($translator->trans('shop.search-result', [$term]));
        $headTitleHelper($translator->trans('shop.search-result', [$term]));

        return $this->render('product/search.html.twig', $params);
    }
}
