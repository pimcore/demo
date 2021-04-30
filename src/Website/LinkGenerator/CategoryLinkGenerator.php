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
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\Document;

class CategoryLinkGenerator extends AbstractProductLinkGenerator implements LinkGeneratorInterface
{
    /**
     * @param Concrete $object
     * @param array $params
     * @param bool $reset
     *
     * @return string
     */
    public function generate(Concrete $object, array $params = [], $reset = false): string
    {
        if (false === $object instanceof Category) {
            throw new \InvalidArgumentException('Given object is no category');
        }

        if (isset($params['document']) && $params['document'] instanceof Document) {
            $this->document = $params['document'];
        }

        return $this->pimcoreUrl->__invoke(
            [
                'categoryname' => Text::toUrl($object->getName() ? $object->getName() : 'elements'),
                'category' => $object->getId(),
                'path' => $this->getNavigationPath($object, $params['rootCategory'] ?? null),
                'page' => null
            ],
            'shop-category',
            $reset
        );
    }
}
