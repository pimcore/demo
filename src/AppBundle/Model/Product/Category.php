<?php


namespace AppBundle\Model\Product;


use Pimcore\Model\Document;

class Category extends \Pimcore\Model\DataObject\Category
{

    /**
     * returns parent categories for this
     * stops at given root category or global root category in document if set
     * otherwise stops at topmost category of object tree
     *
     * @param Category|null $rootCategory
     * @param Document|null $document
     *
     * @return array
     */
    public function getParentCategoryList(Category $rootCategory = null, Document $document = null)
    {
        $stopCategory = $rootCategory;
        if (empty($stopCategory) && $document) {
            $stopCategory = $document->getProperty('globalRootCategory');
        }
        $parentCategories = [];

        $parentCategory = $this->getParent();
        while ($parentCategory && $parentCategory instanceof Category && $parentCategory->getPublished()) {
            $parentCategories[] = $parentCategory;

            if ($stopCategory && $parentCategory->getId() == $stopCategory->getId()) {

                //cancel when root category is reached
                $parentCategory = null;
            } else {
                $parentCategory = $parentCategory->getParent();
            }
        }

        return array_reverse($parentCategories);
    }

}