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

use AppBundle\Form\CarSubmitFormType;
use AppBundle\Model\Product\Car;
use AppBundle\Website\Tool\Text;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Controller\Configuration\ResponseHeader;
use Pimcore\Model\DataObject\BodyStyle;
use Pimcore\Model\DataObject\Manufacturer;
use Pimcore\Model\DataObject\Service;
use Pimcore\Translation\Translator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends BaseController
{
    public function defaultAction()
    {
    }

    /**
     * The annotations below demonstrate the ResponseHeader annotation which can be
     * used to set custom response headers on the auto-rendered response. At this point, the headers
     * are not really set as we don't have a response yet, but they will be added to the final response
     * by the ResponseHeaderListener.
     *
     * @ResponseHeader("X-Custom-Header", values={"Foo", "Bar"})
     * @ResponseHeader("X-Custom-Header2", values="Bazinga", replace=true)
     *
     * @return array
     */
    public function portalAction()
    {
        // you can also set the header via code
        $this->addResponseHeader('X-Custom-Header3', ['foo', 'bar']);

        return [
            'isPortal' => true
        ];
    }

    public function editableRoundupAction()
    {
    }

    public function thumbnailsAction()
    {
    }

    public function carSubmitAction(Request $request, Translator $translator)
    {
        $form = $this->createForm(CarSubmitFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();

            $car = new Car();
            $car->setParent(Service::createFolderByPath('/upload/new'));
            $car->setKey(Text::toUrl($formData['name'] . '-' . time()));

            $car->setName($formData['name']);
            $car->setDescription($formData['description']);
            $car->setManufacturer(Manufacturer::getById($formData['manufacturer']));
            $car->setBodyStyle(BodyStyle::getById($formData['bodyStyle']));
            $car->setCarClass($formData['carClass']);

            $car->save();

            $this->addFlash('success', $translator->trans('general.car-submitted'));

            return $this->renderTemplate('content/car_submit_success.html.twig', array_merge($this->view->getAllParameters(), ['car' => $car]));
        }

        return [
            'form' => $form->createView()
        ];
    }


    public function tenantSwitchesAction(Request $request, Factory $ecommerceFactory)
    {
        $environment = $ecommerceFactory->getEnvironment();

        if ($request->get('change-checkout-tenant')) {
            $checkoutTenant = $request->get('change-checkout-tenant');
            $checkoutTenant = $checkoutTenant == 'default' ? '' : $checkoutTenant;
            $environment->setCurrentCheckoutTenant(strip_tags($checkoutTenant));
            $environment->save();
        }

        if ($request->get('change-assortment-tenant')) {
            $assortmentTenant = $request->get('change-assortment-tenant');
            $assortmentTenant = $assortmentTenant == 'default' ? '' : $assortmentTenant;
            $environment->setCurrentAssortmentTenant(strip_tags($assortmentTenant));
            $environment->save();
        }

        $paramsBag['checkoutTenants'] = ['default' => ''];
        $paramsBag['currentCheckoutTenant'] = $environment->getCurrentCheckoutTenant() ? $environment->getCurrentCheckoutTenant() : 'default';

        $paramsBag['assortmentTenants'] = ['default' => '', 'ElasticSearch' => 'needs to be configured and activated in configuration'];
        $paramsBag['currentAssortmentTenant'] = $environment->getCurrentAssortmentTenant() ? $environment->getCurrentAssortmentTenant() : 'default';

        return $paramsBag;
    }
}
