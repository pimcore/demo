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

    /**
     * @return TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('currency', [$this, 'format'])
        ];
    }

    /**
     * @param float $value
     * @param string $currency
     * @return string
     */
    public function format($value, $currency = 'EUR')
    {
        return $this->formatter->formatCurrency($value, $currency);
    }
}
