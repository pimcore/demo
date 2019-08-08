<?php


namespace AppBundle\Twig\Extension;


use AppBundle\Model\Product\AbstractProduct;
use AppBundle\Model\Product\Car;
use AppBundle\Website\LinkGenerator\ProductLinkGenerator;
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
     * @param ProductLinkGenerator $productLinkGenerator
     * @param Translator $translator
     */
    public function __construct(ProductLinkGenerator $productLinkGenerator, Translator $translator)
    {
        $this->productLinkGenerator = $productLinkGenerator;
        $this->translator = $translator;
    }


    public function getFunctions()
    {
        return [
            new TwigFunction('app_product_detaillink', [$this, 'generateLink']),
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter('colorname', [$this, 'getColorName'])
        ];
    }

    /**
     * @param AbstractProduct $product
     * @return string
     */
    public function generateLink(AbstractProduct $product): string {
        return $this->productLinkGenerator->generate($product, []);
    }

    /**
     * @param Car $car
     * @return string
     */
    public function getColorName(array $colorNames = []): string {

        $translatedColors = [];
        foreach($colorNames as $color) {
            $translatedColors[] = $this->translator->trans('color.' . $color);
        }

        return implode("-", $translatedColors);
    }

}