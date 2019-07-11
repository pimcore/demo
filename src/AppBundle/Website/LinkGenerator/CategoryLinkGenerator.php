<?php


namespace AppBundle\Website\LinkGenerator;


use AppBundle\Model\Product\Category;
use AppBundle\Website\Tool\Text;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\Document;
use Pimcore\Templating\Helper\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

class CategoryLinkGenerator implements LinkGeneratorInterface
{

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


    public function getNavigationPath(Category $category, Category $rootCategory = null, Document $document = null)
    {
        $categories = $category->getParentCategoryList($rootCategory, $document);
//        $categories[] = $category;

        $path = '';

        foreach ($categories as $categoryInPath) {
            $path .= Text::toUrl($categoryInPath->getName()).'/';
        }

//        $path = substr($path, 0, strlen($path) - 1);

        return $path;
    }


    /**
     * @param Concrete $object
     * @param array $params
     *
     * @return string
     */
    public function generate(Concrete $object, array $params = []): string
    {

        //TODO consider root category and/or document

        if(false === $object instanceof Category) {
            throw new \InvalidArgumentException("Given object is no category");
        }

        return $this->pimcoreUrl->__invoke([
                'categoryname' => Text::toUrl($object->getName() ? $object->getName() : 'elements'),
                'category' => $object->getId(),
                'path' => $this->getNavigationPath($object, $params['rootCategory']),
                'page' => null
            ],
            'shop-category'
        );

    }
}