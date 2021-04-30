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

use App\Model\Product\AccessoryPart;
use App\Model\Product\Car;
use App\Website\Tool\ForceInheritance;
use App\Website\Tool\Text;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\ProductInterface;
use Pimcore\Model\DataObject\ClassDefinition\LinkGeneratorInterface;
use Pimcore\Model\DataObject\Concrete;
use Pimcore\Model\Document;

class ProductLinkGenerator extends AbstractProductLinkGenerator implements LinkGeneratorInterface
{
    /**
     * @param Concrete $object
     * @param array $params
     *
     * @return string
     */
    public function generate(Concrete $object, array $params = []): string
    {
        if (!($object instanceof Car || $object instanceof AccessoryPart)) {
            throw new \InvalidArgumentException('Given object is no Car');
        }

        if (isset($params['document']) && $params['document'] instanceof Document) {
            $this->document = $params['document'];
        }

        return $this->doGenerate($object, $params);
    }

    /**
     * @param ProductInterface $object
     * @param array $params
     * @return string
     */
    public function generateWithMockup(ProductInterface $object, array $params = []): string {
        return $this->doGenerate($object, $params);
    }

    /**
     * @param $object
     * @param $params
     * @return string
     */
    protected function doGenerate($object, $params): string
    {
        return ForceInheritance::run(function () use ($object, $params) {
            if(!empty($object->getUrlSlug())) {
                return current($object->getUrlSlug())->getSlug();
            }

            return $this->pimcoreUrl->__invoke(
                [
                    'productname' => Text::toUrl($object->getOSName() ? $object->getOSName() : 'product'),
                    'product' => $object->getId(),
                    'path' => $this->getNavigationPath($object->getMainCategory(), $params['rootCategory'] ?? null),
                    'page' => null
                ],
                'shop-detail',
                true
            );
        });
    }
}
