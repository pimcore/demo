<?php


namespace AppBundle\Model\Product;

class Category extends \Pimcore\Model\DataObject\Category
{

    /**
     * returns parent categories for this category
     * stops at given stop category, otherwise stops at topmost category of object tree
     *
     * @param Category|null $stopCategory
     * @param bool $includeStopCategory
     * @return array
     */
    public function getParentCategoryList(Category $stopCategory = null, $includeStopCategory = false): array
    {
        $parentCategories = [];

        $parentCategory = $this->getParent();
        while ($parentCategory && $parentCategory instanceof Category && $parentCategory->getPublished()) {
            if ($stopCategory && $parentCategory->getId() == $stopCategory->getId()) {
                //cancel when root category is reached
                $parentCategory = null;
                if($includeStopCategory) {
                    $parentCategories[] = $stopCategory;
                }
            } else {
                $parentCategories[] = $parentCategory;
                $parentCategory = $parentCategory->getParent();
            }
        }

        return array_reverse($parentCategories);
    }

}