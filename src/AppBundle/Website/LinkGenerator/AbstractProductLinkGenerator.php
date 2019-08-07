<?php


namespace AppBundle\Website\LinkGenerator;


use AppBundle\Model\Product\Category;
use AppBundle\Website\Tool\Text;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Templating\Helper\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class AbstractProductLinkGenerator implements LinkGeneratorInterface
{

    const ROOT_CATEGORY_PROPERTY_NAME = 'templateListRoot';

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var PimcoreUrl
     */
    protected $pimcoreUrl;

    public function __construct(RequestStack $requestStack, PimcoreUrl $pimcoreUrl)
    {
        $this->requestStack = $requestStack;
        $this->pimcoreUrl = $pimcoreUrl;
    }


    public function getNavigationPath(Category $category, Category $rootCategory = null)
    {
        if(empty($rootCategory)) {
            $document = $this->requestStack->getCurrentRequest()->attributes->get('contentDocument');
            if($document) {
                $rootCategory = $document->getProperty(self::ROOT_CATEGORY_PROPERTY_NAME);
            }
        }

        $categories = $category->getParentCategoryList($rootCategory);

        $path = '';

        foreach ($categories as $categoryInPath) {
            $path .= Text::toUrl($categoryInPath->getName()).'/';
        }

        return $path;
    }


}