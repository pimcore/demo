<?php

return [
    "views" => [
        [
            "treetype" => "object",
            "name" => "Cars",
            "condition" => NULL,
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/automotive.svg",
            "id" => 1,
            "rootfolder" => "/Product Data/Cars",
            "showroot" => FALSE,
            "classes" => "CAR",
            "position" => "left",
            "sort" => "3",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Accessories",
            "condition" => NULL,
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-product.svg",
            "id" => 2,
            "rootfolder" => "/Product Data/Accessories",
            "showroot" => FALSE,
            "classes" => "AP",
            "position" => "left",
            "sort" => "4",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Orders",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-cart.svg",
            "id" => 3,
            "showroot" => FALSE,
            "rootfolder" => "/Shop/Orders",
            "classes" => "",
            "position" => "left",
            "sort" => "10",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Categories",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-category.svg",
            "id" => 4,
            "showroot" => false,
            "rootfolder" => "/Product Data/Categories",
            "classes" => "CA",
            "position" => "left",
            "sort" => "5",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Product Attributes",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-setting.svg",
            "id" => 5,
            "showroot" => FALSE,
            "rootfolder" => "/Product Data",
            "classes" => "BS,MA",
            "position" => "left",
            "sort" => "6",
            "expanded" => TRUE,
            "where" => "(o_path LIKE '/Product Data/Manufacturer/%' OR o_key = 'Manufacturer' OR o_path LIKE '/Product Data/Body-Styles/%' OR o_key = 'Body-Styles')"
        ],
        [
            "treetype" => "object",
            "name" => "Customers",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/businessman.svg",
            "id" => 7,
            "showroot" => FALSE,
            "rootfolder" => "/Customer Management/customers",
            "classes" => "CU",
            "position" => "left",
            "sort" => "6",
            "expanded" => TRUE
        ],
        [
            "treetype" => "object",
            "name" => "Customer Segments",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pie_chart.svg",
            "id" => 8,
            "showroot" => FALSE,
            "rootfolder" => "/Customer Management/segments",
            "classes" => "1,2,3",
            "position" => "left",
            "sort" => "6",
            "expanded" => TRUE
        ],
        [
            "treetype" => "document",
            "name" => "Katalog",
            "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/pimcore-main-icon-print.svg",
            "id" => 6,
            "showroot" => FALSE,
            "rootfolder" => "/print",
            "position" => "left",
            "sort" => "5",
            "expanded" => FALSE
        ]
    ]
];
