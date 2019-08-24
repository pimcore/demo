<?php

namespace AppBundle\Controller;

use AppBundle\Model\Product\AbstractProduct;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\ProductListInterface;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\Asset;
use Pimcore\Model\DataObject\FilterDefinition;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Zend\Paginator\Paginator;

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
     * @return array
     */
    public function genericMailAction(Request $request) {
    }


    /**
     * @param Request $request
     * @Route("/search", name="search")
     */
    public function searchAction(Factory $factory)
    {

        $productList = $factory->getIndexService()->getProductListForCurrentTenant();
        $productList->addQueryCondition('term');




        //TODO: Implement search logic
        return $this->json(
                    array (
                        0 =>
                            array (
                                'food' => 'Sauce - Thousand Island',
                                'cities' => 'Soanindrariny',
                                'animals' => 'Common boubou shrike',
                            ),
                        1 =>
                            array (
                                'food' => 'Wild Boar - Tenderloin',
                                'cities' => 'Luthu',
                                'animals' => 'Eastern diamondback rattlesnake',
                            ),
                        2 =>
                            array (
                                'food' => 'Goat - Whole Cut',
                                'cities' => 'Kargowa',
                                'animals' => 'Sheep, red',
                            ),
                        3 =>
                            array (
                                'food' => 'Cherries - Bing, Canned',
                                'cities' => 'Colonia Aurora',
                                'animals' => 'Sarus crane',
                            ),
                        4 =>
                            array (
                                'food' => 'Table Cloth 62x120 Colour',
                                'cities' => 'Poykovskiy',
                                'animals' => 'Monster, gila',
                            ),
                        5 =>
                            array (
                                'food' => 'Bag - Clear 7 Lb',
                                'cities' => 'Buenavista',
                                'animals' => 'Common genet',
                            ),
                        6 =>
                            array (
                                'food' => 'Kippers - Smoked',
                                'cities' => 'Sypniewo',
                                'animals' => 'Weaver, red-billed buffalo',
                            ),
                        7 =>
                            array (
                                'food' => 'Pasta - Ravioli',
                                'cities' => 'Niaohe',
                                'animals' => 'Mountain lion',
                            ),
                        8 =>
                            array (
                                'food' => 'Capers - Pickled',
                                'cities' => 'Mariestad',
                                'animals' => 'Pie, rufous tree',
                            ),
                        9 =>
                            array (
                                'food' => 'Ice Cream Bar - Oreo Sandwich',
                                'cities' => 'Ngaoundéré',
                                'animals' => 'Darter, african',
                            ),
                        10 =>
                            array (
                                'food' => 'Worcestershire Sauce',
                                'cities' => 'Paris 08',
                                'animals' => 'Peregrine falcon',
                            ),
                        11 =>
                            array (
                                'food' => 'Chicken - Whole',
                                'cities' => 'Poroj',
                                'animals' => 'Alpaca',
                            ),
                        12 =>
                            array (
                                'food' => 'Cabbage - Red',
                                'cities' => 'Kuala Lumpur',
                                'animals' => 'Emerald green tree boa',
                            ),
                        13 =>
                            array (
                                'food' => 'Crab - Meat',
                                'cities' => 'Rajapeni',
                                'animals' => 'Steenbuck',
                            ),
                        14 =>
                            array (
                                'food' => 'Star Anise, Whole',
                                'cities' => 'Plettenberg Bay',
                                'animals' => 'Cougar',
                            ),
                        15 =>
                            array (
                                'food' => 'Wine - Cave Springs Dry Riesling',
                                'cities' => 'Thoen',
                                'animals' => 'Manatee',
                            )
                    )
        );
    }

    /**
     * @param Request $request
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
