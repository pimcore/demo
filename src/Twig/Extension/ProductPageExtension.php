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

use App\Website\LinkGenerator\ProductLinkGenerator;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\ProductInterface;
use Pimcore\Translation\Translator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class ProductPageExtension extends AbstractExtension
{
    /**
     * ProductPageExtension constructor.
     */
    public function __construct(protected ProductLinkGenerator $productLinkGenerator, protected Translator $translator)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('app_product_detaillink', [$this, 'generateLink']),
        ];
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('colorname', [$this, 'getColorName'])
        ];
    }

    public function generateLink(ProductInterface $product): string
    {
        return $this->productLinkGenerator->generateWithMockup($product, []);
    }

    public function getColorName(?array $colorNames = []): string
    {
        $translatedColors = [];
        if ($colorNames) {
            foreach ($colorNames as $color) {
                $translatedColors[] = $this->translator->trans(mb_strtolower('attribute.' . $color));
            }
        }

        return implode('-', $translatedColors);
    }
}
