<?php

namespace AppBundle\Controller;


use AppBundle\Model\Product\Car;
use AppBundle\Model\Product\Category;
use AppBundle\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\DataObject\FilterDefinition;
use Pimcore\Templating\Helper\HeadTitle;
use Pimcore\Templating\Helper\Placeholder;
use AppBundle\Website\LinkGenerator\AbstractProductLinkGenerator;
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
    public function detailAction(Request $request, Placeholder $placeholderHelper, HeadTitle $headTitleHelper, CategoryLinkGenerator $categoryLinkGenerator) {

        $product = Concrete::getById($request->get("product"));

        if(!($product->isPublished() && $product instanceof Car)) {
            throw new NotFoundHttpException("Product not found.");
        }

        //breadcrumbs
        $category = $product->getMainCategory();
        if ($category) {
            $parentId = $this->document->getId();
            $parentCategories = $category->getParentCategoryList($this->document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $placeholderHelper('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $categoryLinkGenerator->generate($parentCategory, [], true),
                    'label' => $parentCategory->getName()
                ]);
                $parentId = 'category-' . $parentCategory->getId();
            }
        }

        $placeholderHelper('addBreadcrumb')->append([
            'parentId' => $category ? 'category-' . $category->getParentId() : '',
            'id' => 'product-' . $product->getId(),
            'url' => '#',
            'label' => $product->getOSName()
        ]);

        $headTitleHelper($product->getOSName());

        $this->view->product = $product;
    }


    /**
     * @param Request $request
     * @Route("/shop/{path}{categoryname}~c{category}", name="shop-category", defaults={"path"=""}, requirements={"path"=".*?", "categoryname"="[\w-]+", "category"="\d+"})
     */
    public function listingAction(Request $request, Placeholder $placeholderHelper, CategoryLinkGenerator $categoryLinkGenerator, Factory $ecommerceFactory)
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

        // breadcrumbs
        $category = Category::getById($params['category']);
        if ($category) {
            $parentId = $this->document->getId();
            $parentCategories = $category->getParentCategoryList($this->document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $placeholderHelper('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $categoryLinkGenerator->generate($parentCategory, [], true),
                    'label' => $parentCategory->getName()
                ]);
                $parentId = 'category-' . $parentCategory->getId();
            }
        }

    }

}

