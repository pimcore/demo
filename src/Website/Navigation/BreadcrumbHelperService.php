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

namespace App\Website\Navigation;

use App\Model\Product\Category;
use App\Website\LinkGenerator\AbstractProductLinkGenerator;
use App\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\News;
use Pimcore\Model\Document;
use Pimcore\Translation\Translator;
use Pimcore\Twig\Extension\Templating\Placeholder;
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
     *
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
    protected function getCurrentDocument(): Document
    {
        return $this->requestStack->getCurrentRequest()->attributes->get('contentDocument');
    }

    public function enrichProductDetailPage(AbstractObject $product)
    {
        $document = $this->getCurrentDocument();

        //breadcrumbs
        $category = $product->getMainCategory();
        if ($category) {
            $parentId = $document->getId();
            $parentCategories = $category->getParentCategoryList($document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $this->placeholderHelper->__invoke('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $this->categoryLinkGenerator->generate($parentCategory, [], true),
                    'label' => $parentCategory->getName()
                ]);
                $parentId = 'category-' . $parentCategory->getId();
            }
        }

        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $category ? 'category-' . $category->getParentId() : '',
            'id' => 'product-' . $product->getId(),
            'url' => '#',
            'label' => $product->getOSName() ?? ''
        ]);
    }

    public function enrichCategoryPage(Category $category)
    {
        $document = $this->getCurrentDocument();

        if ($category) {
            $parentId = $document->getId();
            $parentCategories = $category->getParentCategoryList($document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $this->placeholderHelper->__invoke('addBreadcrumb')->append([
                    'parentId' => $parentId,
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $this->categoryLinkGenerator->generate($parentCategory, [], true),
                    'label' => $parentCategory->getName()
                ]);
                $parentId = 'category-' . $parentCategory->getId();
            }
        }
    }

    public function enrichCartPage()
    {
        $document = $this->getCurrentDocument();

        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'cart',
            'url' => '#',
            'label' => $this->translator->trans('cart.title')
        ]);
    }

    public function enrichCheckoutPage()
    {
        $document = $this->getCurrentDocument();

        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'cart',
            'url' => $this->urlGenerator->generate('shop-cart-detail'),
            'label' => $this->translator->trans('cart.title')
        ]);

        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => 'cart',
            'id' => 'checkout',
            'url' => '#',
            'label' => $this->translator->trans('general.checkout')
        ]);
    }

    /**
     * @param News $news
     */
    public function enrichNewsPage(News $news)
    {
        $document = $this->getCurrentDocument();
        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'news-' . $news->getId(),
            'url' => '#',
            'label' => $news->getTitle()
        ]);
    }

    public function enrichGenericDynamicPage($label)
    {
        $document = $this->getCurrentDocument();
        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'search-result',
            'label' => $label
        ]);
    }
}
