<?php


namespace AppBundle\Twig\Extension;


use AppBundle\Model\Product\Category;
use AppBundle\Website\LinkGenerator\CategoryLinkGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CategoryFilterExtension extends AbstractExtension
{
    /**
     * @var CategoryLinkGenerator
     */
    protected $categoryLinkGenerator;

    /**
     * CategoryFilterExtension constructor.
     * @param CategoryLinkGenerator $categoryLinkGenerator
     */
    public function __construct(CategoryLinkGenerator $categoryLinkGenerator)
    {
        $this->categoryLinkGenerator = $categoryLinkGenerator;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('app_category_filter_generate_link', [$this, 'generateLink']),
            new TwigFunction('app_category_filter_prepare_data', [$this, 'prepareData']),
        ];
    }

    public function prepareData($currentValue, Category $rootCategory = null) {

        $data = new \stdClass();

        $data->currentCategory = $this->getCurrentCategory($currentValue);
        $data->parentCategories = $data->currentCategory->getParentCategoryList($rootCategory);
        $data->subCategories = $this->getSubCategories($data->currentCategory, $rootCategory);

        return $data;
    }

    /**
     * @param $currentValue
     * @return Category
     */
    public function getCurrentCategory($currentValue) {
        return Category::getById($currentValue);
    }

    public function getParentCategories() {

    }

    public function getSubCategories(Category $currentCategory) {
        $subCategories = [];

        if($currentCategory) {
            foreach($currentCategory->getChildren() as $subCategory) {
                $subCategories[] = $subCategory;
            }
        } else {
            //TODO get top level categories
        }

        return $subCategories;
    }

    /**
     * @param Category $category
     * @param Category|null $rootCategory
     * @param bool $reset
     * @return string
     */
    public function generateLink(Category $category, Category $rootCategory = null, $reset = false): string {
        return $this->categoryLinkGenerator->generate($category, ['rootCategory' => $rootCategory], $reset);
    }

}