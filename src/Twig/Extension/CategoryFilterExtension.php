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

namespace App\Twig\Extension;

use App\Model\Product\Category;
use App\Website\LinkGenerator\CategoryLinkGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CategoryFilterExtension extends AbstractExtension
{
    protected CategoryLinkGenerator $categoryLinkGenerator;

    public function __construct(CategoryLinkGenerator $categoryLinkGenerator)
    {
        $this->categoryLinkGenerator = $categoryLinkGenerator;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('app_category_filter_generate_link', [$this, 'generateLink']),
            new TwigFunction('app_category_filter_prepare_data', [$this, 'prepareData']),
        ];
    }

    public function prepareData(?int $currentValue, ?Category $rootCategory = null): \stdClass
    {
        $data = new \stdClass();

        $data->parentCategories = [];
        $data->currentCategory = $this->getCurrentCategory($currentValue);
        if ($data->currentCategory) {
            $data->parentCategories = $data->currentCategory->getParentCategoryList($rootCategory);
        }

        $data->subCategories = $this->getSubCategories($data->currentCategory, $rootCategory);

        return $data;
    }

    public function getCurrentCategory(?int $currentValue): ?Category
    {
        if(is_int($currentValue)) {
            return Category::getById($currentValue);
        }
        return null;
    }

    /**
     * @return Category[]
     */
    public function getSubCategories(?Category $currentCategory = null, ?Category $rootCategory = null): array
    {
        $subCategories = [];

        $parent = $currentCategory ?: $rootCategory;

        if ($parent) {
            $subCategories = array_filter($parent->getChildren()->load(), static function ($item) {
                return $item instanceof Category && $item->isPublished();
            });
        }

        return $subCategories;
    }

    public function generateLink(Category $category, ?Category $rootCategory = null, bool $reset = false): string
    {
        return $this->categoryLinkGenerator->generate($category, ['rootCategory' => $rootCategory], $reset);
    }
}
