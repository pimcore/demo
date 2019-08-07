<?php


namespace AppBundle\Twig\Extension;


use Symfony\Component\Intl\Intl;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Country extends AbstractExtension
{

    public function getFilters()
    {
        return [
            new TwigFilter('country', function($code, $displayLocale = null) {
                return Intl::getRegionBundle()->getCountryName($code, $displayLocale);
            })
        ];
    }

}