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

namespace App\Model\Product;

class Category extends \Pimcore\Model\DataObject\Category
{
    /**
     * returns parent categories for this category
     * stops at given stop category, otherwise stops at topmost category of object tree
     *
     * @param Category|null $stopCategory
     * @param bool $includeStopCategory
     *
     * @return array
     */
    public function getParentCategoryList(self $stopCategory = null, $includeStopCategory = false): array
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
