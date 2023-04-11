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

use App\Model\Product\AbstractProduct;
use App\Model\Product\Car;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\Document\Hardlink;
use Pimcore\Bundle\WebToPrintBundle\Processor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Web2printController extends BaseController
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function defaultAction(Request $request)
    {
        $paramsBag = [
            'document' => $this->document
        ];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $paramsBag = array_merge($this->getAllParameters($request), $paramsBag);

        if ($this->document->getProperty('hide-layout')) {
            return $this->render('web2print/default_no_layout.html.twig', $paramsBag);
        } else {
            return $this->render('web2print/default.html.twig', $paramsBag);
        }
    }

    /**
     *
     * @param Request $request
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function containerAction(Request $request)
    {
        $paramsBag = [
            'document' => $this->document
        ];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $allChildren = [];

        //prepare children for include
        foreach ($this->document->getAllChildren() as $child) {
            if ($child instanceof Hardlink) {
                $child = Hardlink\Service::wrap($child);
            }

            $child->setProperty('hide-layout', 'bool', true, false, true);

            $allChildren[] = $child;
        }

        $paramsBag['allChildren'] = $allChildren;

        return $this->render('web2print/container.html.twig', $paramsBag);
    }

    /**
     * @throws \Exception
     */
    public function productCellAction(Request $request): Response
    {
        AbstractObject::setGetInheritedValues(true);
        $product = AbstractProduct::getById($request->query->getInt('id'));
        if(!$product) {
            $product = AbstractProduct::getById($request->attributes->getInt('id'));
        }
        $paramsBag['product'] = $product;

        return $this->render('web2print/product_cell.html.twig', $paramsBag);
    }

    /**
     * @Route("/product-print", name="product_print")
     *
     * @throws \Exception
     */
    public function productPrintAction(Request $request): Response
    {
        $objId = $request->query->getInt('id');
        $obj = Car::getById($objId);

        if ($obj instanceof Car) {
            $params = $this->getAllParameters($request);
            $params['product'] = $obj;
            $html = $this->renderView('web2print/product_detail.html.twig', $params);

            if ($request->get('html')) {
                return new Response($html);
            }

            $adapter = Processor::getInstance();

            if ($html) {
                return new Response(
                    $adapter->getPdfFromString($html),
                    200,
                    ['Content-Type' => 'application/pdf']
                );
            }
        }

        throw $this->createNotFoundException();
    }
}
