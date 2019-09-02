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

namespace AppBundle\Controller;

use Pimcore\Model\Asset;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BaseController
{
    /**
     * @param Request $request
     * @Route("/examples", name="examples")
     */
    public function examplesAction(Request $request)
    {
    }

    public function defaultAction(Request $request)
    {
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function genericMailAction(Request $request)
    {
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function galleryRenderletAction(Request $request)
    {
        if ($request->get('id') && $request->get('type') === 'asset') {
            return [
                'asset' => Asset::getById($request->get('id'))
            ];
        }

        return [];
    }
}
