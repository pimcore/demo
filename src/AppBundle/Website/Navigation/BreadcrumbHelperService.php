<?php


namespace AppBundle\Website\Navigation;


use AppBundle\Model\Product\Category;
use AppBundle\Website\LinkGenerator\AbstractProductLinkGenerator;
use AppBundle\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\Document;
use Pimcore\Templating\Helper\Placeholder;
use Pimcore\Translation\Translator;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BreadcrumbHelperService
{

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var Placeholder
     */
    protected $placeholderHelper;

    /**
     * @var CategoryLinkGenerator
     */
    protected $categoryLinkGenerator;

    /**
     * @var Translator
     */
    protected $translator;

    /**
     * @var UrlGeneratorInterface
     */
    protected $urlGenerator;

    /**
     * BreadcrumbHelperService constructor.
     * @param RequestStack $requestStack
     * @param Placeholder $placeholderHelper
     * @param CategoryLinkGenerator $categoryLinkGenerator
     * @param Translator $translator
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(RequestStack $requestStack, Placeholder $placeholderHelper, CategoryLinkGenerator $categoryLinkGenerator, Translator $translator, UrlGeneratorInterface $urlGenerator)
    {
        $this->requestStack = $requestStack;
        $this->placeholderHelper = $placeholderHelper;
        $this->categoryLinkGenerator = $categoryLinkGenerator;
        $this->translator = $translator;
        $this->urlGenerator = $urlGenerator;
    }


    /**
     * @return Document
     */
    protected function getCurrentDocument(): Document {
        return $this->requestStack->getCurrentRequest()->attributes->get('contentDocument');
    }


    public function enrichProductDetailPage(AbstractObject $product) {

        $document = $this->getCurrentDocument();
        $placeholderHelper = $this->placeholderHelper;

        //breadcrumbs
        $category = $product->getMainCategory();
        if ($category) {
            $parentId = $document->getId();
            $parentCategories = $category->getParentCategoryList($document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $placeholderHelper('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $this->categoryLinkGenerator->generate($parentCategory, [], true),
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
    }

    public function enrichCategoryPage(Category $category) {

        $document = $this->getCurrentDocument();
        $placeholderHelper = $this->placeholderHelper;

        if ($category) {
            $parentId = $document->getId();
            $parentCategories = $category->getParentCategoryList($document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $placeholderHelper('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $this->categoryLinkGenerator->generate($parentCategory, [], true),
                    'label' => $parentCategory->getName()
                ]);
                $parentId = 'category-' . $parentCategory->getId();
            }
        }

    }

    public function enrichCartPage() {

        $document = $this->getCurrentDocument();
        $placeholderHelper = $this->placeholderHelper;

        $placeholderHelper('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'cart',
            'url' => '#',
            'label' => $this->translator->trans('cart.title')
        ]);

    }

    public function enrichCheckoutPage() {

        $document = $this->getCurrentDocument();
        $placeholderHelper = $this->placeholderHelper;

        $placeholderHelper('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'cart',
            'url' => $this->urlGenerator->generate('shop-cart-detail'),
            'label' => $this->translator->trans('cart.title')
        ]);

        $placeholderHelper('addBreadcrumb')->append([
            'parentId' => 'cart',
            'id' => 'checkout',
            'url' => '#',
            'label' => $this->translator->trans('general.checkout')
        ]);


    }

}