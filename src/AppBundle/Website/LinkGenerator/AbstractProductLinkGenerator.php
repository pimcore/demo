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

    public function __construct(DocumentResolver $documentResolver, RequestStack $requestStack, PimcoreUrl $pimcoreUrl)
    {
        $this->documentResolver = $documentResolver;
        $this->requestStack = $requestStack;
        $this->pimcoreUrl = $pimcoreUrl;
    }

    public function getNavigationPath(?Category $category, ?Category $rootCategory = null)
    {
        if (empty($rootCategory)) {
            $document = $this->documentResolver->getDocument($this->requestStack->getCurrentRequest());
            if ($document) {
                $rootCategory = $document->getProperty(self::ROOT_CATEGORY_PROPERTY_NAME);
            }
        }

        $categories = [];
        $path = '';

        if ($category) {
            $categories = $category->getParentCategoryList($rootCategory);
        }

        foreach ($categories as $categoryInPath) {
            $path .= Text::toUrl($categoryInPath->getName()).'/';
        }

        return $path;
    }
}
