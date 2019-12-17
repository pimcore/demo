<?php 

return [
    "Workflow_TODO" => [
        "name" => "Workflow_TODO",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, carClass FROM object_localized_CAR_en WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'ToDo') ",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, carClass FROM object_localized_CAR_en WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'ToDo') ",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "o_id",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 80,
                "label" => "ID",
                "columnAction" => "openObject",
                "id" => "extModel1524-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Key",
                "id" => "extModel1524-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Name",
                "id" => "extModel1524-3"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Car Class",
                "id" => "extModel1524-4"
            ]
        ],
        "niceName" => "TODOs",
        "group" => "Workflow",
        "groupIconClass" => "",
        "iconClass" => "pimcore_icon_workflow_action",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => NULL,
        "pieColumn" => NULL,
        "pieLabelColumn" => NULL,
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567408793,
        "creationDate" => 1567408234,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Workflow_TODO"
    ],
    "Workflow_Done-All" => [
        "name" => "Workflow_Done-All",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "o_id, o_key, name, carClass FROM object_localized_CAR_en WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'done_all') ",
                "from" => "",
                "where" => "",
                "groupby" => "",
                "sqlText" => "SELECT o_id, o_key, name, carClass FROM object_localized_CAR_en WHERE o_id IN (SELECT cid FROM element_workflow_state WHERE place = 'done_all') ",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "o_id",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 80,
                "label" => "ID",
                "columnAction" => "openObject",
                "id" => "extModel1872-1"
            ],
            [
                "name" => "o_key",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Key",
                "id" => "extModel1872-2"
            ],
            [
                "name" => "name",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Name",
                "id" => "extModel1872-3"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 200,
                "label" => "Car Class",
                "id" => "extModel1872-4"
            ]
        ],
        "niceName" => "Done All",
        "group" => "Workflow",
        "groupIconClass" => "",
        "iconClass" => "pimcore_icon_workflow_action",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => NULL,
        "pieColumn" => NULL,
        "pieLabelColumn" => NULL,
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567408822,
        "creationDate" => 1567408710,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Workflow_Done-All"
    ],
    "Quality_Images" => [
        "name" => "Quality_Images",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "carClass, imagesAvailable, count(*)",
                "from" => "object_localized_CAR_en",
                "where" => "objectType = 'actual-car'",
                "groupby" => "imagesAvailable",
                "sqlText" => "SELECT carClass, imagesAvailable, count(*) FROM object_localized_CAR_en WHERE objectType = 'actual-car' GROUP BY imagesAvailable",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "imagesAvailable",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 300,
                "label" => "Images Available",
                "id" => "extModel704-3"
            ],
            [
                "name" => "count(*)",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 100,
                "label" => "Count",
                "id" => "extModel704-4"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Car Class",
                "id" => "extModel704-5",
                "filter_drilldown" => "only_filter"
            ]
        ],
        "niceName" => "Images",
        "group" => "Quality",
        "groupIconClass" => "",
        "iconClass" => "",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => "pie",
        "pieColumn" => "count(*)",
        "pieLabelColumn" => "imagesAvailable",
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567409589,
        "creationDate" => 1567408859,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Quality_Images"
    ],
    "Quality_Texts_EN" => [
        "name" => "Quality_Texts_EN",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "carClass, textsAvailable, count(*)",
                "from" => "object_localized_CAR_en",
                "where" => "objectType = 'actual-car'",
                "groupby" => "textsAvailable",
                "sqlText" => "SELECT carClass, textsAvailable, count(*) FROM object_localized_CAR_en WHERE objectType = 'actual-car' GROUP BY textsAvailable",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "textsAvailable",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 300,
                "label" => "Texts Available",
                "id" => "extModel1606-3"
            ],
            [
                "name" => "count(*)",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 100,
                "label" => "Count",
                "id" => "extModel1606-4"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Carr Class",
                "id" => "extModel1606-5",
                "filter_drilldown" => "only_filter"
            ]
        ],
        "niceName" => "Texts EN",
        "group" => "Quality",
        "groupIconClass" => "",
        "iconClass" => "",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => "pie",
        "pieColumn" => "count(*)",
        "pieLabelColumn" => "textsAvailable",
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567409766,
        "creationDate" => 1567409307,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Quality_Texts_EN"
    ],
    "Quality_Texts_DE" => [
        "name" => "Quality_Texts_DE",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "textsAvailable, count(*), carClass",
                "from" => "object_localized_CAR_de",
                "where" => "objectType = 'actual-car'",
                "groupby" => "textsAvailable",
                "sqlText" => "SELECT textsAvailable, count(*), carClass FROM object_localized_CAR_de WHERE objectType = 'actual-car' GROUP BY textsAvailable",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "textsAvailable",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 300,
                "label" => "Texts Available",
                "id" => "extModel996-3"
            ],
            [
                "name" => "count(*)",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 100,
                "label" => "Count",
                "id" => "extModel996-4"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Car Class",
                "id" => "extModel996-5",
                "filter_drilldown" => "only_filter"
            ]
        ],
        "niceName" => "Texts DE",
        "group" => "Quality",
        "groupIconClass" => "",
        "iconClass" => "",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => "pie",
        "pieColumn" => "count(*)",
        "pieLabelColumn" => "textsAvailable",
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567409782,
        "creationDate" => 1567409307,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Quality_Texts_DE"
    ],
    "Quality_Attributes" => [
        "name" => "Quality_Attributes",
        "sql" => "",
        "dataSourceConfig" => [
            [
                "sql" => "carClass, attributesAvailable, count(*)",
                "from" => "object_localized_CAR_en",
                "where" => "objectType = 'actual-car'",
                "groupby" => "attributesAvailable",
                "sqlText" => "SELECT carClass, attributesAvailable, count(*) FROM object_localized_CAR_en WHERE objectType = 'actual-car' GROUP BY attributesAvailable",
                "type" => "sql"
            ]
        ],
        "columnConfiguration" => [
            [
                "name" => "attributesAvailable",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 300,
                "label" => "Attributes",
                "id" => "extModel803-3"
            ],
            [
                "name" => "count(*)",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => 100,
                "label" => "Count",
                "id" => "extModel803-4"
            ],
            [
                "name" => "carClass",
                "display" => TRUE,
                "export" => TRUE,
                "order" => TRUE,
                "width" => "",
                "label" => "Car Class",
                "filter_drilldown" => "only_filter",
                "id" => "extModel803-5"
            ]
        ],
        "niceName" => "Attributes",
        "group" => "Quality",
        "groupIconClass" => "",
        "iconClass" => "",
        "menuShortcut" => TRUE,
        "reportClass" => "",
        "chartType" => "pie",
        "pieColumn" => "count(*)",
        "pieLabelColumn" => "attributesAvailable",
        "xAxis" => NULL,
        "yAxis" => [

        ],
        "modificationDate" => 1567409727,
        "creationDate" => 1567409307,
        "shareGlobally" => FALSE,
        "sharedUserNames" => [

        ],
        "sharedRoleNames" => [

        ],
        "id" => "Quality_Attributes"
    ]
];
