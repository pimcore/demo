<?php


namespace AppBundle\Website\LinkGenerator;


use AppBundle\Model\Product\Category;
use AppBundle\Website\Tool\Text;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Templating\Helper\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class AbstractProductLinkGenerator implements LinkGeneratorInterface
{

    const ROOT_CATEGORY_PROPERTY_NAME = 'root_category';

    /**
     * @var DocumentResolver
     */
    protected $documentResolver;

    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var PimcoreUrl
     */
    protected $pimcoreUrl;

    public function __construct(DocumentResolver $documentResolver, RequestStack $requestStack,  PimcoreUrl $pimcoreUrl)
    {
        $this->documentResolver = $documentResolver;
        $this->requestStack = $requestStack;
        $this->pimcoreUrl = $pimcoreUrl;
    }


    public function getNavigationPath(?Category $category, ?Category $rootCategory = null)
    {
        if(empty($rootCategory)) {
            $document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
            if($document) {
                $rootCategory = $document->getProperty(self::ROOT_CATEGORY_PROPERTY_NAME);
            }
        }

        $categories = [];
        $path = '';

        if($category) {
            $categories = $category->getParentCategoryList($rootCategory);
        }

        foreach ($categories as $categoryInPath) {
            $path .= Text::toUrl($categoryInPath->getName()).'/';
        }

        return $path;
    }


}