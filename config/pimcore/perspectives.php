<?php

return [
    "default" => [
        "iconCls" => "pimcore_nav_icon_perspective",
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -3
            ],
            [
                "type" => "assets",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -2
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -1
            ]
        ],
        "dashboards" => [
            "predefined" => [
                "welcome" => [
                    "positions" => [
                        [
                            [
                                "id" => 1,
                                "type" => "pimcore.layout.portlets.modificationStatistic",
                                "config" => null
                            ],
                            [
                                "id" => 2,
                                "type" => "pimcore.layout.portlets.modifiedAssets",
                                "config" => null
                            ],
                        ],
                        [
                            [
                                "id" => 3,
                                "type" => "pimcore.layout.portlets.modifiedObjects",
                                "config" => null
                            ],
                            [
                                "id" => 4,
                                "type" => "pimcore.layout.portlets.modifiedDocuments",
                                "config" => null
                            ]
                        ]
                    ],
                    ]
                ]
            ]
    ],

    "PIM" => [
        "iconCls" => "pimcore_nav_icon_object",
        "toolbar" => [
            "file" => 1
            ,
            "extras" => [
                "hidden" => true
            ],
            "marketing" => [
                "hidden" => true
            ],
            "settings" => [
                "items" => [
                    "documentTypes" => false,
                    "predefinedProperties" => false,
                    "predefinedMetadata" => false,
                    "system" => false,
                    "routes" => false,
                    "thumbnails" => false,
                    "adminTranslations" => false,
                    "website" => false,
                    "users" => false,
                    "cache" => false
                ]
            ],
            "search" => [
                "items" => [
                    "documents" => false,
                    "esBackendSearch" => false
                ]
            ],
            "ecommerce" => false
        ],
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => -3
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => -1
            ],
            [
                "type" => "customview",
                "id" => 1,
                "hidden" => false,
                "position" => "left",
                "sort" => -5
            ],
            [
                "type" => "customview",
                "id" => 2,
                "hidden" => false,
                "position" => "left",
                "sort" => -4
            ],

            [
                "type" => "customview",
                "id" => 4,
                "hidden" => false,
                "position" => "right",
                "sort" => 1
            ],
            [
                "type" => "customview",
                "id" => 5,
                "hidden" => false,
                "position" => "right",
                "sort" => 2
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 3
            ],
        ],
    ],

    "DAM" => [
        "iconCls" => "pimcore_nav_icon_asset",
        "toolbar" => [
            "file" => 1
            ,
            "extras" => [
                "hidden" => true
            ],
            "marketing" => [
                "hidden" => true
            ],
            "settings" => [
                "items" => [
                    "documentTypes" => false,
                    "predefinedProperties" => false,
                    "system" => false,
                    "routes" => false,
                    "adminTranslations" => false,
                    "website" => false,
                    "users" => false,
                    "objects" => false,
                    "cache" => false
                ]
            ],
            "search" => [
                "items" => [
                    "objects" => false,
                    "documents" => false,
                    "esBackendSearch" => false
                ]
            ],
            "ecommerce" => false
        ],
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => -3
            ],
            [
                "type" => "assets",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -2
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => true,
                "sort" => -1
            ],
            [
                "type" => "customview",
                "name" => "Products",
                "hidden" => "true",
            ],
            [
                "type" => "customview",
                "name" => "Orders",
                "hidden" => "true",
            ]
        ],
    ],

    "CMS" => [
        "iconCls" => "pimcore_nav_icon_document",
        "elementTree" => [
            [
                "type" => "documents",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -3
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => -2
            ],
            [
                "type" => "objects",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => -1
            ],
            [
                "type" => "customview",
                "name" => "Products",
                "hidden" => "true",
            ],
            [
                "type" => "customview",
                "name" => "Orders",
                "hidden" => "true",
            ]
        ],
    ],

    "Commerce" => [
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/shopping-cart.svg",
        "toolbar" => [
            "file" => true,
            "extras" => false,
            "marketing" => false,
            "settings" => false,
            "search" => true,
            "ecommerce" => true
        ],
        "elementTree" => [
            [
                "type" => "customview",
                "id" => 3,
                "position" => "left",
                "expanded" => true,
                "hidden" => false,
                "sort" => -5
            ],
            [
                "type" => "objects",
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "customview",
                "id" => 7,
                "position" => "right",
                "expanded" => true,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "customview",
                "id" => 8,
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 1
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 2
            ],
            [
                "type" => "documents",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => 3
            ]

        ]
    ],

    "Catalog" => [
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/book.svg",
        "toolbar" => [
            "file" => true,
            "extras" => false,
            "marketing" => false,
            "settings" => false,
            "search" => true,
            "ecommerce" => false
        ],
        "elementTree" => [
            [
                "type" => "customview",
                "id" => 6,
                "position" => "left",
                "expanded" => false,
                "hidden" => false,
                "sort" => -3
            ],
            [
                "type" => "assets",
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => -2
            ],
            [
                "type" => "customview",
                "id" => 1,
                "position" => "right",
                "expanded" => false,
                "hidden" => false,
                "sort" => -1
            ]
        ]
    ],

    "CDP" => [
        "elementTree" => [
            [
                "type" => "customview",
                "position" => "left",
                "sort" => 0,
                "treeContextMenu" => [

                ],
                "id" => 7
            ],
            [
                "type" => "customview",
                "position" => "right",
                "sort" => 0,
                "treeContextMenu" => [

                ],
                "id" => 8
            ],
            [
                "type" => "customview",
                "position" => "right",
                "sort" => 1,
                "treeContextMenu" => [

                ],
                "id" => 3
            ]
        ],
        "iconCls" => NULL,
        "icon" => "/bundles/pimcoreadmin/img/flat-white-icons/conference_call.svg",
        "toolbar" => [
            "file" => [
                "hidden" => false,
                "items" => [
                    "perspectives" => true,
                    "dashboards" => true,
                    "openDocument" => false,
                    "openAsset" => false,
                    "openObject" => true,
                    "searchReplace" => true,
                    "schedule" => true,
                    "seemode" => false,
                    "closeAll" => true,
                    "help" => true,
                    "about" => true
                ]
            ],
            "marketing" => [
                "hidden" => true,
                "items" => [
                    "reports" => true,
                    "tagmanagement" => true,
                    "targeting" => true,
                    "seo" => [
                        "hidden" => false,
                        "items" => [
                            "documents" => true,
                            "robots" => true,
                            "httperrors" => true
                        ]
                    ]
                ]
            ],
            "extras" => [
                "hidden" => true,
                "items" => [
                    "glossary" => false,
                    "redirects" => false,
                    "translations" => true,
                    "recyclebin" => false,
                    "plugins" => false,
                    "notesEvents" => false,
                    "applicationlog" => false,
                    "gdpr_data_extractor" => false,
                    "emails" => false,
                    "maintenance" => false,
                    "systemtools" => [
                        "hidden" => false,
                        "items" => [
                            "phpinfo" => true,
                            "opcache" => true,
                            "requirements" => true,
                            "serverinfo" => true,
                            "database" => true,
                            "fileexplorer" => true
                        ]
                    ]
                ]
            ],
            "settings" => [
                "hidden" => true,
                "items" => [
                    "customReports" => true,
                    "marketingReports" => true,
                    "documentTypes" => true,
                    "predefinedProperties" => true,
                    "predefinedMetadata" => true,
                    "system" => true,
                    "website" => true,
                    "web2print" => true,
                    "users" => [
                        "hidden" => false,
                        "items" => [
                            "users" => true,
                            "roles" => true
                        ]
                    ],
                    "thumbnails" => true,
                    "objects" => [
                        "hidden" => false,
                        "items" => [
                            "classes" => true,
                            "fieldcollections" => true,
                            "objectbricks" => true,
                            "quantityValue" => true,
                            "classificationstore" => true,
                            "bulkExport" => true,
                            "bulkImport" => true
                        ]
                    ],
                    "routes" => true,
                    "cache" => [
                        "hidden" => false,
                        "items" => [
                            "clearAll" => true,
                            "clearData" => true,
                            "clearSymfony" => true,
                            "clearOutput" => true,
                            "clearTemp" => true
                        ]
                    ],
                    "adminTranslations" => true,
                    "tagConfiguration" => true,
                    "perspectiveEditor" => true
                ]
            ],
            "search" => [
                "hidden" => false,
                "items" => [
                    "quickSearch" => true,
                    "documents" => false,
                    "assets" => false,
                    "objects" => true,
                    "advancedObjectSearch" => true
                ]
            ]
        ]
    ]
];
