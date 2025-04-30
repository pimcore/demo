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

use Pimcore\Localization\IntlFormatter;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Currency extends AbstractExtension
{
    public function __construct(protected IntlFormatter $formatter)
    {
    }

    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('currency', [$this, 'format'])
        ];
    }

    public function format(float $value, string $currency = 'EUR'): string
    {
        return $this->formatter->formatCurrency($value, $currency);
    }
}
