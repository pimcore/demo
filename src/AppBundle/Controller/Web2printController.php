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

namespace AppBundle\Controller;

use AppBundle\Model\Product\AbstractProduct;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\Document\Hardlink;
use Symfony\Component\HttpFoundation\Request;

class Web2printController extends BaseController
{
    public function defaultAction(Request $request)
    {
        $paramsBag = [];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $paramsBag = array_merge($this->view->getAllParameters(), $paramsBag);

        if($this->document->getProperty('hide-layout')) {
            return $this->render('web2print/default_no_layout.html.twig', $paramsBag);
        } else {
            return $this->render('web2print/default.html.twig', $paramsBag);
        }
    }

    public function containerAction(Request $request)
    {
        $paramsBag = [];

        foreach ($request->attributes as $key => $value) {
            $paramsBag[$key] = $value;
        }

        $allChildren = [];

        //prepare children for include
        foreach($this->document->getAllChildren() as $child) {
            if($child instanceof Hardlink) {
                $child = Hardlink\Service::wrap($child);
            }

            $child->setProperty("hide-layout", "bool", true);

            $allChildren[] = $child;
        }

        $paramsBag['allChildren'] = $allChildren;

        return $paramsBag;
    }

    public function productCellAction(Request $request)
    {

        AbstractObject::setGetInheritedValues(true);
        $product = AbstractProduct::getById($request->get('id'));
        $paramsBag['product'] = $product;

        return $paramsBag;

    }
}
