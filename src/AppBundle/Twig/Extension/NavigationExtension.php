<?php


namespace AppBundle\Twig\Extension;

use AppBundle\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Model\Document;
use Pimcore\Navigation\Container;
use Pimcore\Navigation\Page\Document as NavDocument;
use Pimcore\Templating\Helper\Navigation;
use Pimcore\Templating\Helper\Placeholder;
use AppBundle\Website\LinkGenerator\AbstractProductLinkGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;


class NavigationExtension extends AbstractExtension
{
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
    public function getDataLinks(Document $document, Document $startNode) {
        $navigation = $this->navigationHelper->buildNavigation($document, $startNode, null, function($page, $document) {
            if($document->getProperty("templateType") == "category" && $rootCategory = $document->getProperty(AbstractProductLinkGenerator::ROOT_CATEGORY_PROPERTY_NAME)) {
                foreach($rootCategory->getChildren() as $category) {
                    $categoryPage = new NavDocument([
                        "label" => $category->getName(),
                        "id" => "category-" . $category->getId(),
                        "uri" => $this->categoryLinkGenerator->generate($category, ['rootCategory' => $rootCategory, 'page' => null])
                    ]);

                    foreach($category->getChildren() as $subCategory) {
                        $subCategoryPage = new NavDocument([
                            "label" => $subCategory->getName(),
                            "id" => "category-" . $subCategory->getId(),
                            "uri" => $this->categoryLinkGenerator->generate($subCategory, ['rootCategory' => $rootCategory, 'page' => null])
                        ]);

                        $categoryPage->addPage($subCategoryPage);
                    }
                    $page->addPage($categoryPage);
                }
            }

        });

        return $navigation;
    }

    /**
     * @param Container $navigation
     * @return Container
     * @throws \Exception
     */
    public function enrichBreadcrumbs(Container $navigation): Container {

        $placeholderHelper = $this->placeholderHelper;
        $additionalBreadCrumbs = $placeholderHelper('addBreadcrumb');

        if( $additionalBreadCrumbs->getValue() )
        {
            $parentPage = false;

            foreach( $additionalBreadCrumbs->getValue() as $breadcrumb )
            {
                $page = $navigation->findBy('id', $breadcrumb['id']);
                if(null === $page) {
                    $parentPage = $parentPage ?: $navigation->findBy('id', $breadcrumb['parentId']);
                    $newPage = new \Pimcore\Navigation\Page\Document([
                        'id' => $breadcrumb['id'],
                        'uri' => $breadcrumb['url'] != '' ? $breadcrumb['url'] : '',
                        'label' => $breadcrumb['label'],
                        "active" => true
                    ]);
                    if($parentPage)
                    {
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