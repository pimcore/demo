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

namespace App\Website\LinkGenerator;

use App\Model\Product\Category;
use App\Website\Tool\Text;
use Pimcore\Http\Request\Resolver\DocumentResolver;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\Document;
use Pimcore\Twig\Extension\Templating\PimcoreUrl;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class AbstractProductLinkGenerator implements LinkGeneratorInterface
{
    const ROOT_CATEGORY_PROPERTY_NAME = 'root_category';

    protected ?Document $document = null;

    public function __construct(
        protected DocumentResolver $documentResolver,
        protected RequestStack $requestStack,
        protected PimcoreUrl $pimcoreUrl
    ) {
    }

    public function getNavigationPath(?Category $category, ?Category $rootCategory = null, string $locale = null)
    {
        if (empty($rootCategory)) {
            if (!$this->document) {
                try {
                    $this->document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
                } catch (\Exception) {
                    // nothing to do
                }
            }

            if ($this->document) {
                $rootCategory = $this->document->getProperty(self::ROOT_CATEGORY_PROPERTY_NAME);
            }
        }

        $categories = [];
        $path = '';

        if ($category) {
            $categories = $category->getParentCategoryList($rootCategory);
        }

        foreach ($categories as $categoryInPath) {
            $path .= Text::toUrl($categoryInPath->getName($locale)).'/';
        }

        return $path;
    }
}
