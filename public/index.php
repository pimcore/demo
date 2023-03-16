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
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

use Pimcore\Bootstrap;
use Pimcore\Tool;
use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

Bootstrap::setProjectRoot();
Bootstrap::bootstrap();

return function (Request $request, array $context) {

    // set current request as property on tool as there's no
    // request stack available yet
    Tool::setCurrentRequest($request);

    $kernel = Bootstrap::kernel();

    // reset current request - will be read from request stack from now on
    Tool::setCurrentRequest(null);

    return $kernel;
};
