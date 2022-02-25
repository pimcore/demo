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

namespace App\Twig\Extension;

use App\Website\LinkGenerator\AbstractProductLinkGenerator;
use App\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Model\Document;
use Pimcore\Navigation\Container;
use Pimcore\Navigation\Page\Document as NavDocument;
use Pimcore\Twig\Extension\Templating\Navigation;
use Pimcore\Twig\Extension\Templating\Placeholder;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NavigationExtension extends AbstractExtension
{
    const NAVIGATION_EXTENSION_POINT_PROPERTY = 'navigation_extension_point';

    /**
     * @var CategoryLinkGenerator
     */
    protected $categoryLinkGenerator;

    /**
     * @var Navigation
     */
    protected $navigationHelper;

    /**
     * @var Placeholder
     */
    protected $placeholderHelper;

    /**
     * @param Navigation $navigationHelper
     */
    public function __construct(Navigation $navigationHelper, Placeholder $placeholderHelper, CategoryLinkGenerator $categoryLinkGenerator)
    {
        $this->navigationHelper = $navigationHelper;
        $this->categoryLinkGenerator = $categoryLinkGenerator;
        $this->placeholderHelper = $placeholderHelper;
    }

    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('app_navigation_data_links', [$this, 'getDataLinks']),
            new TwigFunction('app_navigation_enrich_breadcrumbs', [$this, 'enrichBreadcrumbs'])
        ];
    }

    /**
     * @param Document $document
     * @param Document $startNode
     *
     * @return \Pimcore\Navigation\Container
     */
    public function getDataLinks(Document $document, Document $startNode)
    {
        $navigation = $this->navigationHelper->build([
            'active' => $document,
            'root' => $startNode,
            'pageCallback' => function ($page, $document) {
                if ($document->getProperty(self::NAVIGATION_EXTENSION_POINT_PROPERTY) == 'category' && $rootCategory = $document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME)) {
                    foreach ($rootCategory->getChildren() as $category) {
                        $categoryPage = new NavDocument([
                            'label' => $category->getName(),
                            'id' => 'category-' . $category->getId(),
                            'uri' => $this->categoryLinkGenerator->generate($category, ['rootCategory' => $rootCategory, 'page' => null], true)
                        ]);

                        foreach ($category->getChildren() as $subCategory) {
                            $subCategoryPage = new NavDocument([
                                'label' => $subCategory->getName(),
                                'id' => 'category-' . $subCategory->getId(),
                                'uri' => $this->categoryLinkGenerator->generate($subCategory, ['rootCategory' => $rootCategory, 'page' => null], true)
                            ]);

                            $categoryPage->addPage($subCategoryPage);
                        }
                        $page->addPage($categoryPage);
                    }
                }
            }
        ]);

        return $navigation;
    }

    /**
     * @param Container $navigation
     *
     * @return Container
     *
     * @throws \Exception
     */
    public function enrichBreadcrumbs(Container $navigation): Container
    {
        $additionalBreadCrumbs = $this->placeholderHelper->__invoke('addBreadcrumb');

        if ($additionalBreadCrumbs->getArrayCopy()) {
            $parentPage = false;

            foreach ($additionalBreadCrumbs->getArrayCopy() as $breadcrumb) {
                $page = $navigation->findBy('id', $breadcrumb['id']);
                if (null === $page) {
                    $parentPage = $parentPage ?: $navigation->findBy('id', $breadcrumb['parentId']);
                    $newPage = new \Pimcore\Navigation\Page\Document([
                        'id' => $breadcrumb['id'],
                        'uri' => isset($breadcrumb['url']) && $breadcrumb['url'] != '' ? $breadcrumb['url'] : '',
                        'label' => $breadcrumb['label'],
                        'active' => true
                    ]);
                    if ($parentPage) {
                        $parentPage->setActive(false);
                        $parentPage->addPage($newPage);
                        $parentPage = $newPage;
                    } else {
                        $navigation->addPage($newPage);
                    }
                }
            }
        }

        return $navigation;
    }
}
