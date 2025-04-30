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

namespace App\Website\Tool;

class PimcoreUrl extends \Pimcore\Twig\Extension\Templating\PimcoreUrl
{
    public function __invoke(array $urlOptions = [], string $name = null, bool $reset = false, bool $encode = true, bool $relative = false): string
    {
        // merge all parameters from request to parameters
        if (!$reset && $this->requestHelper->hasMainRequest()) {
            $urlOptions = array_replace($this->requestHelper->getMainRequest()->attributes->get('_route_params', []), $urlOptions);
        }

        return parent::__invoke($urlOptions, $name, $reset, $encode, $relative);
    }
}
