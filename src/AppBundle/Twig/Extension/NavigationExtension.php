<?php


namespace AppBundle\Twig\Extension;

use AppBundle\Website\LinkGenerator\CategoryLinkGenerator;
use Pimcore\Model\Document;
use Pimcore\Navigation\Page\Document as NavDocument;
use Pimcore\Templating\Helper\Navigation;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;


class NavigationExtension extends AbstractExtension
{
    /**
     * @var CategoryLinkGenerator
     */
    protected $categoryLinkGenerator;

    /** @var Navigation */
    private $navigationHelper;

    /**
     * @param Navigation $navigationHelper
     */
    public function __construct(Navigation $navigationHelper, CategoryLinkGenerator $categoryLinkGenerator)
    {
        $this->navigationHelper = $navigationHelper;
        $this->categoryLinkGenerator = $categoryLinkGenerator;
    }


    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('app_navigation_data_links', [$this, 'getDataLinks'])
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
            if($document->getProperty("templateType") == "category" && $rootCategory = $document->getProperty("templateListRoot")) {
                foreach($rootCategory->getChildren() as $category) {
                    $page->addPage(new NavDocument([
                        "label" => $category->getName(),
                        "id" => "category-" . $category->getId(),
                        "uri" => $this->categoryLinkGenerator->generate($category, ['rootCategory' => $rootCategory, 'page' => null])
                    ]));
                }
            }
        });



        return $navigation;
    }
}