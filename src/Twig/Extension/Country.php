<?php

/**
 * This source file is available under the terms of the
 * Pimcore Open Core License (POCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (https://www.pimcore.com)
 *  @license    Pimcore Open Core License (POCL)
 */

namespace App\Twig\Extension;

use Symfony\Component\Intl\Countries;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Country extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('country', function ($code, $displayLocale = null) {
                if (!empty($code)) {
                    return Countries::getName($code, $displayLocale);
                }

                return null;
            })
        ];
    }
}
