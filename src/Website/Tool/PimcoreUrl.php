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

namespace App\Website\Tool;

class PimcoreUrl extends \Pimcore\Twig\Extension\Templating\PimcoreUrl
{
    /**
     * @param array $urlOptions
     * @param null $name
     * @param bool $reset
     * @param bool $encode
     * @param bool $relative
     *
     * @return string
     */
    public function __invoke(array $urlOptions = [], $name = null, $reset = false, $encode = true, $relative = false): string
    {
        // merge all parameters from request to parameters
        if (!$reset && $this->requestHelper->hasMainRequest()) {
            $urlOptions = array_replace($this->requestHelper->getMainRequest()->attributes->get('_route_params', []), $urlOptions);
        }

        return parent::__invoke($urlOptions, $name, $reset, $encode, $relative);
    }
}
