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
     * BreadcrumbHelperService constructor.
     */
    public function __construct(
        protected RequestStack $requestStack,
        protected Placeholder $placeholderHelper,
        protected CategoryLinkGenerator $categoryLinkGenerator,
        protected Translator $translator,
        protected UrlGeneratorInterface $urlGenerator
    ) {
    }

    protected function getCurrentDocument(): Document
    {
        return $this->requestStack->getCurrentRequest()->attributes->get('contentDocument');
    }

    public function enrichProductDetailPage(AbstractObject $product): void
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

    public function enrichCategoryPage(Category $category): void
    {
        $document = $this->getCurrentDocument();
        $parentId = $document->getId();
        $parentCategories = $category->getParentCategoryList($document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME));
        $parentCategories[] = $category;
        foreach ($parentCategories as $parentCategory) {
            $this->placeholderHelper->__invoke('addBreadcrumb')->append([
                'parentId' => $parentId,
                'id' => 'category-' . $parentCategory->getId(),
                'url' => $this->categoryLinkGenerator->generate($parentCategory, [], true),
                'label' => $parentCategory->getName()
            ]);
            $parentId = 'category-' . $parentCategory->getId();
        }
    }

    public function enrichCartPage(): void
    {
        $document = $this->getCurrentDocument();

        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'cart',
            'url' => '#',
            'label' => $this->translator->trans('cart.title')
        ]);
    }

    public function enrichCheckoutPage(): void
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

    public function enrichNewsPage(News $news): void
    {
        $document = $this->getCurrentDocument();
        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'news-' . $news->getId(),
            'url' => '#',
            'label' => $news->getTitle()
        ]);
    }

    public function enrichGenericDynamicPage(string $label): void
    {
        $document = $this->getCurrentDocument();
        $this->placeholderHelper->__invoke('addBreadcrumb')->append([
            'parentId' => $document->getId(),
            'id' => 'search-result',
            'label' => $label
        ]);
    }
}
