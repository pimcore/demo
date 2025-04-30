<?php

declare(strict_types=1);

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

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class UniqidExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('uniqid', function (string $prefix = '', bool $moreEntropy = false) {
                return uniqid($prefix, $moreEntropy);
            })
        ];
    }
}
