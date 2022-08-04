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
     * @var ProductLinkGenerator
     */
    protected $productLinkGenerator;

    /**
     * @var Translator
     */
    protected $translator;

    /**
     * ProductPageExtension constructor.
     *
     * @param ProductLinkGenerator $productLinkGenerator
     * @param Translator $translator
     */
    public function __construct(ProductLinkGenerator $productLinkGenerator, Translator $translator)
    {
        $this->productLinkGenerator = $productLinkGenerator;
        $this->translator = $translator;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('app_product_detaillink', [$this, 'generateLink']),
        ];
    }

    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('colorname', [$this, 'getColorName'])
        ];
    }

    /**
     * @param ProductInterface $product
     *
     * @return string
     */
    public function generateLink(ProductInterface $product): string
    {
        return $this->productLinkGenerator->generateWithMockup($product, []);
    }

    /**
     * @param array|null $colorNames
     *
     * @return string
     */
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
