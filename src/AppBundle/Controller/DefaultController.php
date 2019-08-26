<?php

namespace AppBundle\Controller;

use AppBundle\Model\Product\AbstractProduct;
use AppBundle\Model\Product\Car;
use AppBundle\Model\Product\Category;
use AppBundle\Website\LinkGenerator\ProductLinkGenerator;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Controller\FrontendController;
use Pimcore\Config;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Templating\Model\ViewModel;
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
     * @return array
     */
    public function genericMailAction(Request $request) {
    }


    /**
     * @param Request $request
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request, Factory $ecommerceFactory, ProductLinkGenerator $productLinkGenerator)
    {
        $paramsBag = [];
        $paramsBag["hideNav"] = true;
        $params = $request->query->all();
        $viewModel = new ViewModel();

        $category = Category::getById($params['category']);
        $viewModel->category = $category;

        $indexService = $ecommerceFactory->getIndexService();
        $productListing = $indexService->getProductListForCurrentTenant();
        $productListing->setVariantMode(ProductListInterface::VARIANT_MODE_VARIANTS_ONLY);
        if ($request->get('term')) {
            foreach (explode(' ', $params['term']) as $term) {
                $productListing->addQueryCondition($term, 'search');
            }
        }

        if($params["autocomplete"]) {
            $resultset = [];
            $productListing->setLimit(10);
            foreach ($productListing as $product) {
                $result["href"] = $productLinkGenerator->generate($product, []);
                if($product instanceof Car){
                    $result['product'] = $product->getOSName() . ' ' . $product->getColor()[0] . ', ' . $product->getCarClass();
                } else {
                    $result['product'] = $product->getOSName();
                }

                $resultset[] = $result;
            }

            return $this->json($resultset);
        }

        if (empty($filterDefinition)) {
            $filterDefinition = Config::getWebsiteConfig()->get('fallbackFilterdefinition');
        }
        $viewModel->filterDefinition = $filterDefinition;

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

        $trackingManager = Factory::getInstance()->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product);
        }

        $translator = $this->get('translator');

        //breadcrumbs
        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'search-result',
            'label' => $translator->trans('shop.search-result', [$request->get('term')])
        ]);

        $viewModel->language = $request->getLocale();
        $viewModel->language = $request->getLocale();


        $headTitle = $this->get('pimcore.templating.view_helper.head_title');
        $headTitle($translator->trans('shop.search-result', [$request->get('term')]));

        return $viewModel->getAllParameters();

    }

    /**
     * @param Request $request
     * @return array
     */
    public function galleryRenderletAction(Request $request)
    {
        if ($request->get('id') && $request->get('type') === 'asset') {
            return [
                'asset' => Asset::getById($request->get('id'))
            ];
        }

        return [];
    }

}
