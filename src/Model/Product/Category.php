<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Model\Product;

class Category extends \Pimcore\Model\DataObject\Category
{
    /**
     * returns parent categories for this category
     * stops at given stop category, otherwise stops at topmost category of object tree
     */
    public function getParentCategoryList(self $stopCategory = null, bool $includeStopCategory = false): array
    {
        $parentCategories = [];

        $parentCategory = $this->getParent();
        while ($parentCategory && $parentCategory instanceof self && $parentCategory->getPublished()) {
            if ($stopCategory && $parentCategory->getId() == $stopCategory->getId()) {
                //cancel when root category is reached
                $parentCategory = null;
                if ($includeStopCategory) {
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
