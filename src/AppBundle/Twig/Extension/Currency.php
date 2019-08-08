<?php

namespace AppBundle\Twig\Extension;

use Pimcore\Localization\IntlFormatter;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Currency extends AbstractExtension
{

    /**
     * @var IntlFormatter
     */
    protected $formatter;

    public function __construct(IntlFormatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('currency', [$this, 'format'])
        ];
    }

    public function format($value, $currency = "EUR") {
        return $this->formatter->formatCurrency($value, $currency);
    }

}