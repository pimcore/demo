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

namespace App\Controller;

use Pimcore\Model\Asset;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends BaseController
{
    /**
     * @Route("/examples", name="examples")
     *
     * @param Request $request
     * @return Response
     */
    public function examplesAction(Request $request)
    {
        return $this->render('default/examples.html.twig');
    }

    /**
     * @Template
     *
     * @param Request $request
     * @return array
     */
    public function defaultAction(Request $request)
    {
        return [];
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function genericMailAction(Request $request)
    {
        return $this->render('default/generic_mail.html.twig');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function galleryRenderletAction(Request $request)
    {
        $params = [];
        if ($request->get('id') && $request->get('type') === 'asset') {
            $params['asset'] =  Asset::getById($request->get('id'));
        }

        return $this->render('default/gallery_renderlet.html.twig', $params);
    }
}
