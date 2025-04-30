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

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject;
use Pimcore\Tool;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends FrontendController
{
    protected function verifyPreviewRequest(Request $request, DataObject $object): bool
    {
        if (Tool::isElementRequestByAdmin($request, $object)) {
            return true;
        }

        return false;
    }

    protected function getAllParameters(Request $request): array
    {
        return array_merge($request->request->all(), $request->query->all());
    }
}
