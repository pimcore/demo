<?php 

return [
    "folders" => [

    ],
    "list" => [
        "products" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "products",
                "description" => "Product related data like Cars, AccessoryParts, Categories etc.",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Car" => [
                        "id" => "Car",
                        "name" => "Car",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "categories",
                                        "label" => "Categories",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,name,fullpath",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "categories",
                                            "title" => "Categories",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "bodyStyle",
                                        "label" => "Body Style",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "BodyStyle"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "bodyStyle",
                                            "title" => "Body Style",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "carClass",
                                        "label" => "Class",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Full-size luxury car",
                                                    "value" => "Full-size luxury car"
                                                ],
                                                [
                                                    "key" => "Grand tourer",
                                                    "value" => "Grand tourer"
                                                ],
                                                [
                                                    "key" => "Light commercial vehicle",
                                                    "value" => "Light commercial vehicle"
                                                ],
                                                [
                                                    "key" => "Muscle Car",
                                                    "value" => "Muscle Car"
                                                ],
                                                [
                                                    "key" => "City Car",
                                                    "value" => "City Car"
                                                ],
                                                [
                                                    "key" => "Executive car",
                                                    "value" => "Executive car"
                                                ],
                                                [
                                                    "key" => "Economy car",
                                                    "value" => "Economy car"
                                                ],
                                                [
                                                    "key" => "Personal luxury car",
                                                    "value" => "Personal luxury car"
                                                ],
                                                [
                                                    "key" => "Full-Size",
                                                    "value" => "Full-Size"
                                                ],
                                                [
                                                    "key" => "Family car",
                                                    "value" => "Family car"
                                                ],
                                                [
                                                    "key" => "Mid-size luxury",
                                                    "value" => "Mid-size luxury"
                                                ],
                                                [
                                                    "key" => "sports car",
                                                    "value" => "sports car"
                                                ]
                                            ],
                                            "width" => 300,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "carClass",
                                            "title" => "Class",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "color",
                                        "label" => "Color",
                                        "dataType" => "multiselect",
                                        "layout" => [
                                            "fieldtype" => "multiselect",
                                            "options" => [
                                                [
                                                    "key" => "grey",
                                                    "value" => "grey"
                                                ],
                                                [
                                                    "key" => "beige",
                                                    "value" => "beige"
                                                ],
                                                [
                                                    "key" => "silver",
                                                    "value" => "silver"
                                                ],
                                                [
                                                    "key" => "brown",
                                                    "value" => "brown"
                                                ],
                                                [
                                                    "key" => "orange",
                                                    "value" => "orange"
                                                ],
                                                [
                                                    "key" => "yellow",
                                                    "value" => "yellow"
                                                ],
                                                [
                                                    "key" => "blue",
                                                    "value" => "blue"
                                                ],
                                                [
                                                    "key" => "black",
                                                    "value" => "black"
                                                ],
                                                [
                                                    "key" => "green",
                                                    "value" => "green"
                                                ],
                                                [
                                                    "key" => "red",
                                                    "value" => "red"
                                                ],
                                                [
                                                    "key" => "white",
                                                    "value" => "white"
                                                ]
                                            ],
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "renderType" => "list",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "array",
                                            "dynamicOptions" => FALSE,
                                            "name" => "color",
                                            "title" => "Color",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "country",
                                        "label" => "Country",
                                        "dataType" => "country",
                                        "layout" => [
                                            "fieldtype" => "country",
                                            "restrictTo" => "",
                                            "options" => [
                                                [
                                                    "key" => "Afghanistan",
                                                    "value" => "AF"
                                                ],
                                                [
                                                    "key" => "Albania",
                                                    "value" => "AL"
                                                ],
                                                [
                                                    "key" => "Algeria",
                                                    "value" => "DZ"
                                                ],
                                                [
                                                    "key" => "American Samoa",
                                                    "value" => "AS"
                                                ],
                                                [
                                                    "key" => "Andorra",
                                                    "value" => "AD"
                                                ],
                                                [
                                                    "key" => "Angola",
                                                    "value" => "AO"
                                                ],
                                                [
                                                    "key" => "Anguilla",
                                                    "value" => "AI"
                                                ],
                                                [
                                                    "key" => "Antarctica",
                                                    "value" => "AQ"
                                                ],
                                                [
                                                    "key" => "Antigua & Barbuda",
                                                    "value" => "AG"
                                                ],
                                                [
                                                    "key" => "Argentina",
                                                    "value" => "AR"
                                                ],
                                                [
                                                    "key" => "Armenia",
                                                    "value" => "AM"
                                                ],
                                                [
                                                    "key" => "Aruba",
                                                    "value" => "AW"
                                                ],
                                                [
                                                    "key" => "Ascension Island",
                                                    "value" => "AC"
                                                ],
                                                [
                                                    "key" => "Australia",
                                                    "value" => "AU"
                                                ],
                                                [
                                                    "key" => "Austria",
                                                    "value" => "AT"
                                                ],
                                                [
                                                    "key" => "Azerbaijan",
                                                    "value" => "AZ"
                                                ],
                                                [
                                                    "key" => "Bahamas",
                                                    "value" => "BS"
                                                ],
                                                [
                                                    "key" => "Bahrain",
                                                    "value" => "BH"
                                                ],
                                                [
                                                    "key" => "Bangladesh",
                                                    "value" => "BD"
                                                ],
                                                [
                                                    "key" => "Barbados",
                                                    "value" => "BB"
                                                ],
                                                [
                                                    "key" => "Belarus",
                                                    "value" => "BY"
                                                ],
                                                [
                                                    "key" => "Belgium",
                                                    "value" => "BE"
                                                ],
                                                [
                                                    "key" => "Belize",
                                                    "value" => "BZ"
                                                ],
                                                [
                                                    "key" => "Benin",
                                                    "value" => "BJ"
                                                ],
                                                [
                                                    "key" => "Bermuda",
                                                    "value" => "BM"
                                                ],
                                                [
                                                    "key" => "Bhutan",
                                                    "value" => "BT"
                                                ],
                                                [
                                                    "key" => "Bolivia",
                                                    "value" => "BO"
                                                ],
                                                [
                                                    "key" => "Bosnia & Herzegovina",
                                                    "value" => "BA"
                                                ],
                                                [
                                                    "key" => "Botswana",
                                                    "value" => "BW"
                                                ],
                                                [
                                                    "key" => "Brazil",
                                                    "value" => "BR"
                                                ],
                                                [
                                                    "key" => "British Indian Ocean Territory",
                                                    "value" => "IO"
                                                ],
                                                [
                                                    "key" => "British Virgin Islands",
                                                    "value" => "VG"
                                                ],
                                                [
                                                    "key" => "Brunei",
                                                    "value" => "BN"
                                                ],
                                                [
                                                    "key" => "Bulgaria",
                                                    "value" => "BG"
                                                ],
                                                [
                                                    "key" => "Burkina Faso",
                                                    "value" => "BF"
                                                ],
                                                [
                                                    "key" => "Burundi",
                                                    "value" => "BI"
                                                ],
                                                [
                                                    "key" => "Cambodia",
                                                    "value" => "KH"
                                                ],
                                                [
                                                    "key" => "Cameroon",
                                                    "value" => "CM"
                                                ],
                                                [
                                                    "key" => "Canada",
                                                    "value" => "CA"
                                                ],
                                                [
                                                    "key" => "Canary Islands",
                                                    "value" => "IC"
                                                ],
                                                [
                                                    "key" => "Cape Verde",
                                                    "value" => "CV"
                                                ],
                                                [
                                                    "key" => "Caribbean Netherlands",
                                                    "value" => "BQ"
                                                ],
                                                [
                                                    "key" => "Cayman Islands",
                                                    "value" => "KY"
                                                ],
                                                [
                                                    "key" => "Central African Republic",
                                                    "value" => "CF"
                                                ],
                                                [
                                                    "key" => "Ceuta & Melilla",
                                                    "value" => "EA"
                                                ],
                                                [
                                                    "key" => "Chad",
                                                    "value" => "TD"
                                                ],
                                                [
                                                    "key" => "Chile",
                                                    "value" => "CL"
                                                ],
                                                [
                                                    "key" => "China",
                                                    "value" => "CN"
                                                ],
                                                [
                                                    "key" => "Christmas Island",
                                                    "value" => "CX"
                                                ],
                                                [
                                                    "key" => "Cocos (Keeling) Islands",
                                                    "value" => "CC"
                                                ],
                                                [
                                                    "key" => "Colombia",
                                                    "value" => "CO"
                                                ],
                                                [
                                                    "key" => "Comoros",
                                                    "value" => "KM"
                                                ],
                                                [
                                                    "key" => "Congo - Brazzaville",
                                                    "value" => "CG"
                                                ],
                                                [
                                                    "key" => "Congo - Kinshasa",
                                                    "value" => "CD"
                                                ],
                                                [
                                                    "key" => "Cook Islands",
                                                    "value" => "CK"
                                                ],
                                                [
                                                    "key" => "Costa Rica",
                                                    "value" => "CR"
                                                ],
                                                [
                                                    "key" => "Croatia",
                                                    "value" => "HR"
                                                ],
                                                [
                                                    "key" => "Cuba",
                                                    "value" => "CU"
                                                ],
                                                [
                                                    "key" => "Curaçao",
                                                    "value" => "CW"
                                                ],
                                                [
                                                    "key" => "Cyprus",
                                                    "value" => "CY"
                                                ],
                                                [
                                                    "key" => "Czechia",
                                                    "value" => "CZ"
                                                ],
                                                [
                                                    "key" => "Côte d’Ivoire",
                                                    "value" => "CI"
                                                ],
                                                [
                                                    "key" => "Denmark",
                                                    "value" => "DK"
                                                ],
                                                [
                                                    "key" => "Diego Garcia",
                                                    "value" => "DG"
                                                ],
                                                [
                                                    "key" => "Djibouti",
                                                    "value" => "DJ"
                                                ],
                                                [
                                                    "key" => "Dominica",
                                                    "value" => "DM"
                                                ],
                                                [
                                                    "key" => "Dominican Republic",
                                                    "value" => "DO"
                                                ],
                                                [
                                                    "key" => "Ecuador",
                                                    "value" => "EC"
                                                ],
                                                [
                                                    "key" => "Egypt",
                                                    "value" => "EG"
                                                ],
                                                [
                                                    "key" => "El Salvador",
                                                    "value" => "SV"
                                                ],
                                                [
                                                    "key" => "Equatorial Guinea",
                                                    "value" => "GQ"
                                                ],
                                                [
                                                    "key" => "Eritrea",
                                                    "value" => "ER"
                                                ],
                                                [
                                                    "key" => "Estonia",
                                                    "value" => "EE"
                                                ],
                                                [
                                                    "key" => "Ethiopia",
                                                    "value" => "ET"
                                                ],
                                                [
                                                    "key" => "Eurozone",
                                                    "value" => "EZ"
                                                ],
                                                [
                                                    "key" => "Falkland Islands",
                                                    "value" => "FK"
                                                ],
                                                [
                                                    "key" => "Faroe Islands",
                                                    "value" => "FO"
                                                ],
                                                [
                                                    "key" => "Fiji",
                                                    "value" => "FJ"
                                                ],
                                                [
                                                    "key" => "Finland",
                                                    "value" => "FI"
                                                ],
                                                [
                                                    "key" => "France",
                                                    "value" => "FR"
                                                ],
                                                [
                                                    "key" => "French Guiana",
                                                    "value" => "GF"
                                                ],
                                                [
                                                    "key" => "French Polynesia",
                                                    "value" => "PF"
                                                ],
                                                [
                                                    "key" => "French Southern Territories",
                                                    "value" => "TF"
                                                ],
                                                [
                                                    "key" => "Gabon",
                                                    "value" => "GA"
                                                ],
                                                [
                                                    "key" => "Gambia",
                                                    "value" => "GM"
                                                ],
                                                [
                                                    "key" => "Georgia",
                                                    "value" => "GE"
                                                ],
                                                [
                                                    "key" => "Germany",
                                                    "value" => "DE"
                                                ],
                                                [
                                                    "key" => "Ghana",
                                                    "value" => "GH"
                                                ],
                                                [
                                                    "key" => "Gibraltar",
                                                    "value" => "GI"
                                                ],
                                                [
                                                    "key" => "Greece",
                                                    "value" => "GR"
                                                ],
                                                [
                                                    "key" => "Greenland",
                                                    "value" => "GL"
                                                ],
                                                [
                                                    "key" => "Grenada",
                                                    "value" => "GD"
                                                ],
                                                [
                                                    "key" => "Guadeloupe",
                                                    "value" => "GP"
                                                ],
                                                [
                                                    "key" => "Guam",
                                                    "value" => "GU"
                                                ],
                                                [
                                                    "key" => "Guatemala",
                                                    "value" => "GT"
                                                ],
                                                [
                                                    "key" => "Guernsey",
                                                    "value" => "GG"
                                                ],
                                                [
                                                    "key" => "Guinea",
                                                    "value" => "GN"
                                                ],
                                                [
                                                    "key" => "Guinea-Bissau",
                                                    "value" => "GW"
                                                ],
                                                [
                                                    "key" => "Guyana",
                                                    "value" => "GY"
                                                ],
                                                [
                                                    "key" => "Haiti",
                                                    "value" => "HT"
                                                ],
                                                [
                                                    "key" => "Honduras",
                                                    "value" => "HN"
                                                ],
                                                [
                                                    "key" => "Hong Kong SAR China",
                                                    "value" => "HK"
                                                ],
                                                [
                                                    "key" => "Hungary",
                                                    "value" => "HU"
                                                ],
                                                [
                                                    "key" => "Iceland",
                                                    "value" => "IS"
                                                ],
                                                [
                                                    "key" => "India",
                                                    "value" => "IN"
                                                ],
                                                [
                                                    "key" => "Indonesia",
                                                    "value" => "ID"
                                                ],
                                                [
                                                    "key" => "Iran",
                                                    "value" => "IR"
                                                ],
                                                [
                                                    "key" => "Iraq",
                                                    "value" => "IQ"
                                                ],
                                                [
                                                    "key" => "Ireland",
                                                    "value" => "IE"
                                                ],
                                                [
                                                    "key" => "Isle of Man",
                                                    "value" => "IM"
                                                ],
                                                [
                                                    "key" => "Israel",
                                                    "value" => "IL"
                                                ],
                                                [
                                                    "key" => "Italy",
                                                    "value" => "IT"
                                                ],
                                                [
                                                    "key" => "Jamaica",
                                                    "value" => "JM"
                                                ],
                                                [
                                                    "key" => "Japan",
                                                    "value" => "JP"
                                                ],
                                                [
                                                    "key" => "Jersey",
                                                    "value" => "JE"
                                                ],
                                                [
                                                    "key" => "Jordan",
                                                    "value" => "JO"
                                                ],
                                                [
                                                    "key" => "Kazakhstan",
                                                    "value" => "KZ"
                                                ],
                                                [
                                                    "key" => "Kenya",
                                                    "value" => "KE"
                                                ],
                                                [
                                                    "key" => "Kiribati",
                                                    "value" => "KI"
                                                ],
                                                [
                                                    "key" => "Kosovo",
                                                    "value" => "XK"
                                                ],
                                                [
                                                    "key" => "Kuwait",
                                                    "value" => "KW"
                                                ],
                                                [
                                                    "key" => "Kyrgyzstan",
                                                    "value" => "KG"
                                                ],
                                                [
                                                    "key" => "Laos",
                                                    "value" => "LA"
                                                ],
                                                [
                                                    "key" => "Latvia",
                                                    "value" => "LV"
                                                ],
                                                [
                                                    "key" => "Lebanon",
                                                    "value" => "LB"
                                                ],
                                                [
                                                    "key" => "Lesotho",
                                                    "value" => "LS"
                                                ],
                                                [
                                                    "key" => "Liberia",
                                                    "value" => "LR"
                                                ],
                                                [
                                                    "key" => "Libya",
                                                    "value" => "LY"
                                                ],
                                                [
                                                    "key" => "Liechtenstein",
                                                    "value" => "LI"
                                                ],
                                                [
                                                    "key" => "Lithuania",
                                                    "value" => "LT"
                                                ],
                                                [
                                                    "key" => "Luxembourg",
                                                    "value" => "LU"
                                                ],
                                                [
                                                    "key" => "Macau SAR China",
                                                    "value" => "MO"
                                                ],
                                                [
                                                    "key" => "Macedonia",
                                                    "value" => "MK"
                                                ],
                                                [
                                                    "key" => "Madagascar",
                                                    "value" => "MG"
                                                ],
                                                [
                                                    "key" => "Malawi",
                                                    "value" => "MW"
                                                ],
                                                [
                                                    "key" => "Malaysia",
                                                    "value" => "MY"
                                                ],
                                                [
                                                    "key" => "Maldives",
                                                    "value" => "MV"
                                                ],
                                                [
                                                    "key" => "Mali",
                                                    "value" => "ML"
                                                ],
                                                [
                                                    "key" => "Malta",
                                                    "value" => "MT"
                                                ],
                                                [
                                                    "key" => "Marshall Islands",
                                                    "value" => "MH"
                                                ],
                                                [
                                                    "key" => "Martinique",
                                                    "value" => "MQ"
                                                ],
                                                [
                                                    "key" => "Mauritania",
                                                    "value" => "MR"
                                                ],
                                                [
                                                    "key" => "Mauritius",
                                                    "value" => "MU"
                                                ],
                                                [
                                                    "key" => "Mayotte",
                                                    "value" => "YT"
                                                ],
                                                [
                                                    "key" => "Mexico",
                                                    "value" => "MX"
                                                ],
                                                [
                                                    "key" => "Micronesia",
                                                    "value" => "FM"
                                                ],
                                                [
                                                    "key" => "Moldova",
                                                    "value" => "MD"
                                                ],
                                                [
                                                    "key" => "Monaco",
                                                    "value" => "MC"
                                                ],
                                                [
                                                    "key" => "Mongolia",
                                                    "value" => "MN"
                                                ],
                                                [
                                                    "key" => "Montenegro",
                                                    "value" => "ME"
                                                ],
                                                [
                                                    "key" => "Montserrat",
                                                    "value" => "MS"
                                                ],
                                                [
                                                    "key" => "Morocco",
                                                    "value" => "MA"
                                                ],
                                                [
                                                    "key" => "Mozambique",
                                                    "value" => "MZ"
                                                ],
                                                [
                                                    "key" => "Myanmar (Burma)",
                                                    "value" => "MM"
                                                ],
                                                [
                                                    "key" => "Namibia",
                                                    "value" => "NA"
                                                ],
                                                [
                                                    "key" => "Nauru",
                                                    "value" => "NR"
                                                ],
                                                [
                                                    "key" => "Nepal",
                                                    "value" => "NP"
                                                ],
                                                [
                                                    "key" => "Netherlands",
                                                    "value" => "NL"
                                                ],
                                                [
                                                    "key" => "New Caledonia",
                                                    "value" => "NC"
                                                ],
                                                [
                                                    "key" => "New Zealand",
                                                    "value" => "NZ"
                                                ],
                                                [
                                                    "key" => "Nicaragua",
                                                    "value" => "NI"
                                                ],
                                                [
                                                    "key" => "Niger",
                                                    "value" => "NE"
                                                ],
                                                [
                                                    "key" => "Nigeria",
                                                    "value" => "NG"
                                                ],
                                                [
                                                    "key" => "Niue",
                                                    "value" => "NU"
                                                ],
                                                [
                                                    "key" => "Norfolk Island",
                                                    "value" => "NF"
                                                ],
                                                [
                                                    "key" => "North Korea",
                                                    "value" => "KP"
                                                ],
                                                [
                                                    "key" => "Northern Mariana Islands",
                                                    "value" => "MP"
                                                ],
                                                [
                                                    "key" => "Norway",
                                                    "value" => "NO"
                                                ],
                                                [
                                                    "key" => "Oman",
                                                    "value" => "OM"
                                                ],
                                                [
                                                    "key" => "Pakistan",
                                                    "value" => "PK"
                                                ],
                                                [
                                                    "key" => "Palau",
                                                    "value" => "PW"
                                                ],
                                                [
                                                    "key" => "Palestinian Territories",
                                                    "value" => "PS"
                                                ],
                                                [
                                                    "key" => "Panama",
                                                    "value" => "PA"
                                                ],
                                                [
                                                    "key" => "Papua New Guinea",
                                                    "value" => "PG"
                                                ],
                                                [
                                                    "key" => "Paraguay",
                                                    "value" => "PY"
                                                ],
                                                [
                                                    "key" => "Peru",
                                                    "value" => "PE"
                                                ],
                                                [
                                                    "key" => "Philippines",
                                                    "value" => "PH"
                                                ],
                                                [
                                                    "key" => "Pitcairn Islands",
                                                    "value" => "PN"
                                                ],
                                                [
                                                    "key" => "Poland",
                                                    "value" => "PL"
                                                ],
                                                [
                                                    "key" => "Portugal",
                                                    "value" => "PT"
                                                ],
                                                [
                                                    "key" => "Puerto Rico",
                                                    "value" => "PR"
                                                ],
                                                [
                                                    "key" => "Qatar",
                                                    "value" => "QA"
                                                ],
                                                [
                                                    "key" => "Romania",
                                                    "value" => "RO"
                                                ],
                                                [
                                                    "key" => "Russia",
                                                    "value" => "RU"
                                                ],
                                                [
                                                    "key" => "Rwanda",
                                                    "value" => "RW"
                                                ],
                                                [
                                                    "key" => "Réunion",
                                                    "value" => "RE"
                                                ],
                                                [
                                                    "key" => "Samoa",
                                                    "value" => "WS"
                                                ],
                                                [
                                                    "key" => "San Marino",
                                                    "value" => "SM"
                                                ],
                                                [
                                                    "key" => "Saudi Arabia",
                                                    "value" => "SA"
                                                ],
                                                [
                                                    "key" => "Senegal",
                                                    "value" => "SN"
                                                ],
                                                [
                                                    "key" => "Serbia",
                                                    "value" => "RS"
                                                ],
                                                [
                                                    "key" => "Seychelles",
                                                    "value" => "SC"
                                                ],
                                                [
                                                    "key" => "Sierra Leone",
                                                    "value" => "SL"
                                                ],
                                                [
                                                    "key" => "Singapore",
                                                    "value" => "SG"
                                                ],
                                                [
                                                    "key" => "Sint Maarten",
                                                    "value" => "SX"
                                                ],
                                                [
                                                    "key" => "Slovakia",
                                                    "value" => "SK"
                                                ],
                                                [
                                                    "key" => "Slovenia",
                                                    "value" => "SI"
                                                ],
                                                [
                                                    "key" => "Solomon Islands",
                                                    "value" => "SB"
                                                ],
                                                [
                                                    "key" => "Somalia",
                                                    "value" => "SO"
                                                ],
                                                [
                                                    "key" => "South Africa",
                                                    "value" => "ZA"
                                                ],
                                                [
                                                    "key" => "South Georgia & South Sandwich Islands",
                                                    "value" => "GS"
                                                ],
                                                [
                                                    "key" => "South Korea",
                                                    "value" => "KR"
                                                ],
                                                [
                                                    "key" => "South Sudan",
                                                    "value" => "SS"
                                                ],
                                                [
                                                    "key" => "Spain",
                                                    "value" => "ES"
                                                ],
                                                [
                                                    "key" => "Sri Lanka",
                                                    "value" => "LK"
                                                ],
                                                [
                                                    "key" => "St. Barthélemy",
                                                    "value" => "BL"
                                                ],
                                                [
                                                    "key" => "St. Helena",
                                                    "value" => "SH"
                                                ],
                                                [
                                                    "key" => "St. Kitts & Nevis",
                                                    "value" => "KN"
                                                ],
                                                [
                                                    "key" => "St. Lucia",
                                                    "value" => "LC"
                                                ],
                                                [
                                                    "key" => "St. Martin",
                                                    "value" => "MF"
                                                ],
                                                [
                                                    "key" => "St. Pierre & Miquelon",
                                                    "value" => "PM"
                                                ],
                                                [
                                                    "key" => "St. Vincent & Grenadines",
                                                    "value" => "VC"
                                                ],
                                                [
                                                    "key" => "Sudan",
                                                    "value" => "SD"
                                                ],
                                                [
                                                    "key" => "Suriname",
                                                    "value" => "SR"
                                                ],
                                                [
                                                    "key" => "Svalbard & Jan Mayen",
                                                    "value" => "SJ"
                                                ],
                                                [
                                                    "key" => "Swaziland",
                                                    "value" => "SZ"
                                                ],
                                                [
                                                    "key" => "Sweden",
                                                    "value" => "SE"
                                                ],
                                                [
                                                    "key" => "Switzerland",
                                                    "value" => "CH"
                                                ],
                                                [
                                                    "key" => "Syria",
                                                    "value" => "SY"
                                                ],
                                                [
                                                    "key" => "São Tomé & Príncipe",
                                                    "value" => "ST"
                                                ],
                                                [
                                                    "key" => "Taiwan",
                                                    "value" => "TW"
                                                ],
                                                [
                                                    "key" => "Tajikistan",
                                                    "value" => "TJ"
                                                ],
                                                [
                                                    "key" => "Tanzania",
                                                    "value" => "TZ"
                                                ],
                                                [
                                                    "key" => "Thailand",
                                                    "value" => "TH"
                                                ],
                                                [
                                                    "key" => "Timor-Leste",
                                                    "value" => "TL"
                                                ],
                                                [
                                                    "key" => "Togo",
                                                    "value" => "TG"
                                                ],
                                                [
                                                    "key" => "Tokelau",
                                                    "value" => "TK"
                                                ],
                                                [
                                                    "key" => "Tonga",
                                                    "value" => "TO"
                                                ],
                                                [
                                                    "key" => "Trinidad & Tobago",
                                                    "value" => "TT"
                                                ],
                                                [
                                                    "key" => "Tristan da Cunha",
                                                    "value" => "TA"
                                                ],
                                                [
                                                    "key" => "Tunisia",
                                                    "value" => "TN"
                                                ],
                                                [
                                                    "key" => "Turkey",
                                                    "value" => "TR"
                                                ],
                                                [
                                                    "key" => "Turkmenistan",
                                                    "value" => "TM"
                                                ],
                                                [
                                                    "key" => "Turks & Caicos Islands",
                                                    "value" => "TC"
                                                ],
                                                [
                                                    "key" => "Tuvalu",
                                                    "value" => "TV"
                                                ],
                                                [
                                                    "key" => "U.S. Outlying Islands",
                                                    "value" => "UM"
                                                ],
                                                [
                                                    "key" => "U.S. Virgin Islands",
                                                    "value" => "VI"
                                                ],
                                                [
                                                    "key" => "Uganda",
                                                    "value" => "UG"
                                                ],
                                                [
                                                    "key" => "Ukraine",
                                                    "value" => "UA"
                                                ],
                                                [
                                                    "key" => "United Arab Emirates",
                                                    "value" => "AE"
                                                ],
                                                [
                                                    "key" => "United Kingdom",
                                                    "value" => "GB"
                                                ],
                                                [
                                                    "key" => "United Nations",
                                                    "value" => "UN"
                                                ],
                                                [
                                                    "key" => "United States",
                                                    "value" => "US"
                                                ],
                                                [
                                                    "key" => "Uruguay",
                                                    "value" => "UY"
                                                ],
                                                [
                                                    "key" => "Uzbekistan",
                                                    "value" => "UZ"
                                                ],
                                                [
                                                    "key" => "Vanuatu",
                                                    "value" => "VU"
                                                ],
                                                [
                                                    "key" => "Vatican City",
                                                    "value" => "VA"
                                                ],
                                                [
                                                    "key" => "Venezuela",
                                                    "value" => "VE"
                                                ],
                                                [
                                                    "key" => "Vietnam",
                                                    "value" => "VN"
                                                ],
                                                [
                                                    "key" => "Wallis & Futuna",
                                                    "value" => "WF"
                                                ],
                                                [
                                                    "key" => "Western Sahara",
                                                    "value" => "EH"
                                                ],
                                                [
                                                    "key" => "Yemen",
                                                    "value" => "YE"
                                                ],
                                                [
                                                    "key" => "Zambia",
                                                    "value" => "ZM"
                                                ],
                                                [
                                                    "key" => "Zimbabwe",
                                                    "value" => "ZW"
                                                ],
                                                [
                                                    "key" => "Åland Islands",
                                                    "value" => "AX"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "country",
                                            "title" => "Country",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "gallery",
                                        "label" => "Gallery",
                                        "dataType" => "imageGallery",
                                        "layout" => [
                                            "fieldtype" => "imageGallery",
                                            "queryColumnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ImageGallery",
                                            "width" => 300,
                                            "height" => 300,
                                            "uploadPath" => "",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "name" => "gallery",
                                            "title" => "Gallery",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productionYear",
                                        "label" => "Production Year",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 300,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "productionYear",
                                            "title" => "Production Year",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~priceInEUR",
                                        "label" => "Price in EUR",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => 0,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => 10,
                                            "decimalPrecision" => 2,
                                            "name" => "priceInEUR",
                                            "title" => "Price in EUR",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~cylinders",
                                        "label" => "Cylinders",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "cylinders",
                                            "title" => "Cylinders",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Bodywork~numberOfDoors",
                                        "label" => "Number Of Doors",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "numberOfDoors",
                                            "title" => "Number Of Doors",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Bodywork~numberOfSeats",
                                        "label" => "Number Of Seats",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "numberOfSeats",
                                            "title" => "Number Of Seats",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~milage",
                                        "label" => "Milage",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "7",
                                            "validUnits" => [
                                                "8",
                                                "7"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "milage",
                                            "title" => "Milage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~power",
                                        "label" => "Power",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "6",
                                            "validUnits" => [
                                                "6"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "power",
                                            "title" => "Power",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Engine~capacity",
                                        "label" => "Capacity",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "5",
                                            "validUnits" => [
                                                "5"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "capacity",
                                            "title" => "Capacity",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~length",
                                        "label" => "Length",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "length",
                                            "title" => "Length",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~width",
                                        "label" => "Width",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "width",
                                            "title" => "Width",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~wheelbase",
                                        "label" => "Wheelbase",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "1",
                                            "validUnits" => [
                                                "1"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "wheelbase",
                                            "title" => "Wheelbase",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Dimensions~weight",
                                        "label" => "Weight",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "3",
                                            "validUnits" => [
                                                "3"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "weight",
                                            "title" => "Weight",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "AccessoryPart" => [
                        "id" => "AccessoryPart",
                        "name" => "AccessoryPart",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "generatedName",
                                        "label" => "Fullname",
                                        "dataType" => "calculatedValue",
                                        "layout" => [
                                            "fieldtype" => "calculatedValue",
                                            "width" => 500,
                                            "calculatorClass" => "\\AppBundle\\Model\\Product\\CalculatedValue\\AccessoryPartName",
                                            "queryColumnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue",
                                            "name" => "generatedName",
                                            "title" => "Fullname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "nameAddition",
                                        "label" => "Name Addition",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "nameAddition",
                                            "title" => "Name Addition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "mainCategory",
                                        "label" => "Main Category",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "mainCategory",
                                            "title" => "Main Category",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "additionalCategories",
                                        "label" => "Additional Categories",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,fullpath,name",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "additionalCategories",
                                            "title" => "Additional Categories",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "series",
                                        "label" => "Series",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "series",
                                            "title" => "Series",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "image",
                                        "label" => "image",
                                        "dataType" => "hotspotimage",
                                        "layout" => [
                                            "fieldtype" => "hotspotimage",
                                            "queryColumnType" => [
                                                "image" => "int(11)",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "image" => "int(11)",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Hotspotimage",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => "",
                                            "name" => "image",
                                            "title" => "image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "compatibleTo",
                                        "label" => "Compatible To",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,key,name,bodyStyle",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "compatibleTo",
                                            "title" => "Compatible To",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "erpNumber",
                                        "label" => "ERP Number",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "erpNumber",
                                            "title" => "ERP Number",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "categoryCode",
                                        "label" => "Category Code",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "categoryCode",
                                            "title" => "Category Code",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "owner",
                                        "label" => "Owner",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "owner",
                                            "title" => "Owner",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~priceInEUR",
                                        "label" => "Price in EUR",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => 0,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => 10,
                                            "decimalPrecision" => 2,
                                            "name" => "priceInEUR",
                                            "title" => "Price in EUR",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~availabilityPieces",
                                        "label" => "Availability Pieces",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "availabilityPieces",
                                            "title" => "Availability Pieces",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~availabilityType",
                                        "label" => "Availability Type",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "couple-weeks",
                                                    "value" => "couple-weeks"
                                                ],
                                                [
                                                    "key" => "couple-days",
                                                    "value" => "couple-days"
                                                ],
                                                [
                                                    "key" => "instant",
                                                    "value" => "instant"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "availabilityType",
                                            "title" => "Availability Type",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~condition",
                                        "label" => "Condition",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "broken",
                                                    "value" => "broken"
                                                ],
                                                [
                                                    "key" => "reworked",
                                                    "value" => "reworked"
                                                ],
                                                [
                                                    "key" => "used",
                                                    "value" => "used"
                                                ],
                                                [
                                                    "key" => "new",
                                                    "value" => "new"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "condition",
                                            "title" => "Condition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "SaleInformation~milage",
                                        "label" => "Milage",
                                        "dataType" => "quantityValue",
                                        "layout" => [
                                            "fieldtype" => "quantityValue",
                                            "width" => NULL,
                                            "unitWidth" => NULL,
                                            "defaultValue" => NULL,
                                            "defaultUnit" => "7",
                                            "validUnits" => [
                                                "8",
                                                "7"
                                            ],
                                            "decimalPrecision" => NULL,
                                            "autoConvert" => FALSE,
                                            "queryColumnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "columnType" => [
                                                "value" => "double",
                                                "unit" => "bigint(20)"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\QuantityValue",
                                            "name" => "milage",
                                            "title" => "Milage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Manufacturer" => [
                        "id" => "Manufacturer",
                        "name" => "Manufacturer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "logo",
                                        "label" => "Logo",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => "",
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "logo",
                                            "title" => "Logo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "BodyStyle" => [
                        "id" => "BodyStyle",
                        "name" => "BodyStyle",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Category" => [
                        "id" => "Category",
                        "name" => "Category",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productNamePart",
                                        "label" => "Product Name Part",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productNamePart",
                                            "title" => "Product Name Part",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "filterDefinition",
                                        "label" => "Filter Definition",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 800,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "FilterDefinition"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "filterDefinition",
                                            "title" => "Filter Definition",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => FALSE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "create" => FALSE,
                        "read" => FALSE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "6332aa5e6d3d6c0be31da2a8b3442113"
            ],
            "workspaces" => [
                "asset" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Car Images",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1664-2"
                    ],
                    [
                        "read" => TRUE,
                        "cpath" => "/Brand Logos",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1664-1"
                    ]
                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Product Data",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1696-4"
                    ]
                ]
            ]
        ],
        "shop" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "shop",
                "description" => "Shop related information like Orders, OrderItems, Vouchers.",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "OnlineShopOrder" => [
                        "id" => "OnlineShopOrder",
                        "name" => "OnlineShopOrder",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "ordernumber",
                                        "label" => "Ordernumber",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "ordernumber",
                                            "title" => "Ordernumber",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "orderState",
                                        "label" => "OrderState",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Committed",
                                                    "value" => "committed"
                                                ],
                                                [
                                                    "key" => "Cancelled",
                                                    "value" => "cancelled"
                                                ],
                                                [
                                                    "key" => "Payment Pending",
                                                    "value" => "paymentPending"
                                                ],
                                                [
                                                    "key" => "Aborted",
                                                    "value" => "aborted"
                                                ]
                                            ],
                                            "width" => 400,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "orderState",
                                            "title" => "OrderState",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "orderdate",
                                        "label" => "Orderdate",
                                        "dataType" => "datetime",
                                        "layout" => [
                                            "fieldtype" => "datetime",
                                            "queryColumnType" => "bigint(20)",
                                            "columnType" => "bigint(20)",
                                            "phpdocType" => "\\Carbon\\Carbon",
                                            "defaultValue" => NULL,
                                            "useCurrentDate" => FALSE,
                                            "name" => "orderdate",
                                            "title" => "Orderdate",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "items",
                                        "label" => "Items",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopOrderItem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "items",
                                            "title" => "Items",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "comment",
                                        "label" => "Comment",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 400,
                                            "height" => 200,
                                            "maxLength" => NULL,
                                            "showCharCount" => NULL,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "comment",
                                            "title" => "Comment",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "customerOrderData",
                                        "label" => "Customer Order Data",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "customerOrderData",
                                            "title" => "Customer Order Data",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "voucherTokens",
                                        "label" => "Voucher Tokens",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopVoucherToken"
                                                ]
                                            ],
                                            "pathFormatterClass" => NULL,
                                            "name" => "voucherTokens",
                                            "title" => "Voucher Tokens",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "giftItems",
                                        "label" => "Gift Items",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => NULL,
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopOrderItem"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "giftItems",
                                            "title" => "Gift Items",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "subTotalNetPrice",
                                        "label" => "SubTotalNetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "subTotalNetPrice",
                                            "title" => "SubTotalNetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "subTotalPrice",
                                        "label" => "SubTotalPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "subTotalPrice",
                                            "title" => "SubTotalPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalNetPrice",
                                        "label" => "TotalNetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "totalNetPrice",
                                            "title" => "TotalNetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalPrice",
                                        "label" => "TotalPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => 19,
                                            "decimalPrecision" => 4,
                                            "name" => "totalPrice",
                                            "title" => "TotalPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "currency",
                                        "label" => "Currency",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "currency",
                                            "title" => "Currency",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "customer",
                                        "label" => "Customer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Customer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "customer",
                                            "title" => "Customer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryFirstname",
                                        "label" => "Firstname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryFirstname",
                                            "title" => "Firstname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryLastname",
                                        "label" => "Lastname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryLastname",
                                            "title" => "Lastname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryCompany",
                                        "label" => "Company",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryCompany",
                                            "title" => "Company",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryStreet",
                                        "label" => "Street",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryStreet",
                                            "title" => "Street",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryZip",
                                        "label" => "Zip",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryZip",
                                            "title" => "Zip",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "deliveryCity",
                                        "label" => "City",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "deliveryCity",
                                            "title" => "City",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "paymentInfo",
                                        "label" => "Payment Informations",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Fieldcollection",
                                            "allowedTypes" => [
                                                "PaymentInfo"
                                            ],
                                            "lazyLoading" => FALSE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => TRUE,
                                            "disallowReorder" => TRUE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "paymentInfo",
                                            "title" => "Payment Informations",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "paymentReference",
                                        "label" => "Payment Ref.",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => NULL,
                                            "showCharCount" => NULL,
                                            "name" => "paymentReference",
                                            "title" => "Payment Ref.",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "OnlineShopOrderItem" => [
                        "id" => "OnlineShopOrderItem",
                        "name" => "OnlineShopOrderItem",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "orderState",
                                        "label" => "Order Item State",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Committed",
                                                    "value" => "committed"
                                                ],
                                                [
                                                    "key" => "Cancelled",
                                                    "value" => "cancelled"
                                                ]
                                            ],
                                            "width" => 400,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "orderState",
                                            "title" => "Order Item State",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productNumber",
                                        "label" => "Produktnummer",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productNumber",
                                            "title" => "Produktnummer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productName",
                                        "label" => "Produktname",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "productName",
                                            "title" => "Produktname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "amount",
                                        "label" => "Amount",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "amount",
                                            "title" => "Amount",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalNetPrice",
                                        "label" => "NetPrice",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "totalNetPrice",
                                            "title" => "NetPrice",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "totalPrice",
                                        "label" => "Price",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 400,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => NULL,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "totalPrice",
                                            "title" => "Price",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => "",
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "pricingRules",
                                        "label" => "Pricing Rules",
                                        "dataType" => "fieldcollections",
                                        "layout" => [
                                            "fieldtype" => "fieldcollections",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Fieldcollection",
                                            "allowedTypes" => [
                                                "PricingRule"
                                            ],
                                            "lazyLoading" => TRUE,
                                            "maxItems" => "",
                                            "disallowAddRemove" => FALSE,
                                            "disallowReorder" => FALSE,
                                            "collapsed" => FALSE,
                                            "collapsible" => FALSE,
                                            "border" => FALSE,
                                            "name" => "pricingRules",
                                            "title" => "Pricing Rules",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "comment",
                                        "label" => "Comment",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 400,
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => NULL,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "comment",
                                            "title" => "Comment",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "OnlineShopVoucherToken" => [
                        "id" => "OnlineShopVoucherToken",
                        "name" => "OnlineShopVoucherToken",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "tokenId",
                                        "label" => "Token ID",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 500,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => FALSE,
                                            "unsigned" => FALSE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "tokenId",
                                            "title" => "Token ID",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "token",
                                        "label" => "Token",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 500,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "token",
                                            "title" => "Token",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "voucherSeries",
                                        "label" => "Voucher Series",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 500,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => FALSE,
                                            "classes" => [
                                                [
                                                    "classes" => "OnlineShopVoucherSeries"
                                                ]
                                            ],
                                            "pathFormatterClass" => NULL,
                                            "name" => "voucherSeries",
                                            "title" => "Voucher Series",
                                            "tooltip" => "",
                                            "mandatory" => TRUE,
                                            "noteditable" => TRUE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Customer" => [
                        "id" => "Customer",
                        "name" => "Customer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "gender",
                                        "label" => "Gender",
                                        "dataType" => "gender",
                                        "layout" => [
                                            "fieldtype" => "gender",
                                            "options" => [
                                                [
                                                    "key" => "male",
                                                    "value" => "male"
                                                ],
                                                [
                                                    "key" => "female",
                                                    "value" => "female"
                                                ],
                                                [
                                                    "key" => "",
                                                    "value" => "unknown"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => "190",
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "gender",
                                            "title" => "Gender",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "firstname",
                                        "label" => "Firstname",
                                        "dataType" => "firstname",
                                        "layout" => [
                                            "fieldtype" => "firstname",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "firstname",
                                            "title" => "Firstname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "lastname",
                                        "label" => "Lastname",
                                        "dataType" => "lastname",
                                        "layout" => [
                                            "fieldtype" => "lastname",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "lastname",
                                            "title" => "Lastname",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "company",
                                        "label" => "Company",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "company",
                                            "title" => "Company",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "email",
                                        "label" => "Email",
                                        "dataType" => "email",
                                        "layout" => [
                                            "fieldtype" => "email",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "email",
                                            "title" => "Email",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "street",
                                        "label" => "Street",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "street",
                                            "title" => "Street",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "zip",
                                        "label" => "Zip",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "zip",
                                            "title" => "Zip",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "countryCode",
                                        "label" => "Country",
                                        "dataType" => "country",
                                        "layout" => [
                                            "fieldtype" => "country",
                                            "restrictTo" => "",
                                            "options" => [
                                                [
                                                    "key" => "Afghanistan",
                                                    "value" => "AF"
                                                ],
                                                [
                                                    "key" => "Albania",
                                                    "value" => "AL"
                                                ],
                                                [
                                                    "key" => "Algeria",
                                                    "value" => "DZ"
                                                ],
                                                [
                                                    "key" => "American Samoa",
                                                    "value" => "AS"
                                                ],
                                                [
                                                    "key" => "Andorra",
                                                    "value" => "AD"
                                                ],
                                                [
                                                    "key" => "Angola",
                                                    "value" => "AO"
                                                ],
                                                [
                                                    "key" => "Anguilla",
                                                    "value" => "AI"
                                                ],
                                                [
                                                    "key" => "Antigua and Barbuda",
                                                    "value" => "AG"
                                                ],
                                                [
                                                    "key" => "Argentina",
                                                    "value" => "AR"
                                                ],
                                                [
                                                    "key" => "Armenia",
                                                    "value" => "AM"
                                                ],
                                                [
                                                    "key" => "Aruba",
                                                    "value" => "AW"
                                                ],
                                                [
                                                    "key" => "Australia",
                                                    "value" => "AU"
                                                ],
                                                [
                                                    "key" => "Austria",
                                                    "value" => "AT"
                                                ],
                                                [
                                                    "key" => "Azerbaijan",
                                                    "value" => "AZ"
                                                ],
                                                [
                                                    "key" => "Bahamas",
                                                    "value" => "BS"
                                                ],
                                                [
                                                    "key" => "Bahrain",
                                                    "value" => "BH"
                                                ],
                                                [
                                                    "key" => "Bangladesh",
                                                    "value" => "BD"
                                                ],
                                                [
                                                    "key" => "Barbados",
                                                    "value" => "BB"
                                                ],
                                                [
                                                    "key" => "Belarus",
                                                    "value" => "BY"
                                                ],
                                                [
                                                    "key" => "Belgium",
                                                    "value" => "BE"
                                                ],
                                                [
                                                    "key" => "Belize",
                                                    "value" => "BZ"
                                                ],
                                                [
                                                    "key" => "Benin",
                                                    "value" => "BJ"
                                                ],
                                                [
                                                    "key" => "Bermuda",
                                                    "value" => "BM"
                                                ],
                                                [
                                                    "key" => "Bhutan",
                                                    "value" => "BT"
                                                ],
                                                [
                                                    "key" => "Bolivia",
                                                    "value" => "BO"
                                                ],
                                                [
                                                    "key" => "Bosnia and Herzegovina",
                                                    "value" => "BA"
                                                ],
                                                [
                                                    "key" => "Botswana",
                                                    "value" => "BW"
                                                ],
                                                [
                                                    "key" => "Brazil",
                                                    "value" => "BR"
                                                ],
                                                [
                                                    "key" => "British Indian Ocean Territory",
                                                    "value" => "IO"
                                                ],
                                                [
                                                    "key" => "British Virgin Islands",
                                                    "value" => "VG"
                                                ],
                                                [
                                                    "key" => "Brunei",
                                                    "value" => "BN"
                                                ],
                                                [
                                                    "key" => "Bulgaria",
                                                    "value" => "BG"
                                                ],
                                                [
                                                    "key" => "Burkina Faso",
                                                    "value" => "BF"
                                                ],
                                                [
                                                    "key" => "Burundi",
                                                    "value" => "BI"
                                                ],
                                                [
                                                    "key" => "Cambodia",
                                                    "value" => "KH"
                                                ],
                                                [
                                                    "key" => "Cameroon",
                                                    "value" => "CM"
                                                ],
                                                [
                                                    "key" => "Canada",
                                                    "value" => "CA"
                                                ],
                                                [
                                                    "key" => "Canary Islands",
                                                    "value" => "IC"
                                                ],
                                                [
                                                    "key" => "Cape Verde",
                                                    "value" => "CV"
                                                ],
                                                [
                                                    "key" => "Caribbean Netherlands",
                                                    "value" => "BQ"
                                                ],
                                                [
                                                    "key" => "Cayman Islands",
                                                    "value" => "KY"
                                                ],
                                                [
                                                    "key" => "Central African Republic",
                                                    "value" => "CF"
                                                ],
                                                [
                                                    "key" => "Ceuta and Melilla",
                                                    "value" => "EA"
                                                ],
                                                [
                                                    "key" => "Chad",
                                                    "value" => "TD"
                                                ],
                                                [
                                                    "key" => "Chile",
                                                    "value" => "CL"
                                                ],
                                                [
                                                    "key" => "China",
                                                    "value" => "CN"
                                                ],
                                                [
                                                    "key" => "Christmas Island",
                                                    "value" => "CX"
                                                ],
                                                [
                                                    "key" => "Cocos (Keeling) Islands",
                                                    "value" => "CC"
                                                ],
                                                [
                                                    "key" => "Colombia",
                                                    "value" => "CO"
                                                ],
                                                [
                                                    "key" => "Comoros",
                                                    "value" => "KM"
                                                ],
                                                [
                                                    "key" => "Congo - Brazzaville",
                                                    "value" => "CG"
                                                ],
                                                [
                                                    "key" => "Congo - Kinshasa",
                                                    "value" => "CD"
                                                ],
                                                [
                                                    "key" => "Cook Islands",
                                                    "value" => "CK"
                                                ],
                                                [
                                                    "key" => "Costa Rica",
                                                    "value" => "CR"
                                                ],
                                                [
                                                    "key" => "Croatia",
                                                    "value" => "HR"
                                                ],
                                                [
                                                    "key" => "Cuba",
                                                    "value" => "CU"
                                                ],
                                                [
                                                    "key" => "Curaçao",
                                                    "value" => "CW"
                                                ],
                                                [
                                                    "key" => "Cyprus",
                                                    "value" => "CY"
                                                ],
                                                [
                                                    "key" => "Czech Republic",
                                                    "value" => "CZ"
                                                ],
                                                [
                                                    "key" => "Côte d’Ivoire",
                                                    "value" => "CI"
                                                ],
                                                [
                                                    "key" => "Denmark",
                                                    "value" => "DK"
                                                ],
                                                [
                                                    "key" => "Diego Garcia",
                                                    "value" => "DG"
                                                ],
                                                [
                                                    "key" => "Djibouti",
                                                    "value" => "DJ"
                                                ],
                                                [
                                                    "key" => "Dominica",
                                                    "value" => "DM"
                                                ],
                                                [
                                                    "key" => "Dominican Republic",
                                                    "value" => "DO"
                                                ],
                                                [
                                                    "key" => "Ecuador",
                                                    "value" => "EC"
                                                ],
                                                [
                                                    "key" => "Egypt",
                                                    "value" => "EG"
                                                ],
                                                [
                                                    "key" => "El Salvador",
                                                    "value" => "SV"
                                                ],
                                                [
                                                    "key" => "Equatorial Guinea",
                                                    "value" => "GQ"
                                                ],
                                                [
                                                    "key" => "Eritrea",
                                                    "value" => "ER"
                                                ],
                                                [
                                                    "key" => "Estonia",
                                                    "value" => "EE"
                                                ],
                                                [
                                                    "key" => "Ethiopia",
                                                    "value" => "ET"
                                                ],
                                                [
                                                    "key" => "Falkland Islands",
                                                    "value" => "FK"
                                                ],
                                                [
                                                    "key" => "Faroe Islands",
                                                    "value" => "FO"
                                                ],
                                                [
                                                    "key" => "Fiji",
                                                    "value" => "FJ"
                                                ],
                                                [
                                                    "key" => "Finland",
                                                    "value" => "FI"
                                                ],
                                                [
                                                    "key" => "France",
                                                    "value" => "FR"
                                                ],
                                                [
                                                    "key" => "French Guiana",
                                                    "value" => "GF"
                                                ],
                                                [
                                                    "key" => "French Polynesia",
                                                    "value" => "PF"
                                                ],
                                                [
                                                    "key" => "Gabon",
                                                    "value" => "GA"
                                                ],
                                                [
                                                    "key" => "Gambia",
                                                    "value" => "GM"
                                                ],
                                                [
                                                    "key" => "Georgia",
                                                    "value" => "GE"
                                                ],
                                                [
                                                    "key" => "Germany",
                                                    "value" => "DE"
                                                ],
                                                [
                                                    "key" => "Ghana",
                                                    "value" => "GH"
                                                ],
                                                [
                                                    "key" => "Gibraltar",
                                                    "value" => "GI"
                                                ],
                                                [
                                                    "key" => "Greece",
                                                    "value" => "GR"
                                                ],
                                                [
                                                    "key" => "Greenland",
                                                    "value" => "GL"
                                                ],
                                                [
                                                    "key" => "Grenada",
                                                    "value" => "GD"
                                                ],
                                                [
                                                    "key" => "Guadeloupe",
                                                    "value" => "GP"
                                                ],
                                                [
                                                    "key" => "Guam",
                                                    "value" => "GU"
                                                ],
                                                [
                                                    "key" => "Guatemala",
                                                    "value" => "GT"
                                                ],
                                                [
                                                    "key" => "Guernsey",
                                                    "value" => "GG"
                                                ],
                                                [
                                                    "key" => "Guinea",
                                                    "value" => "GN"
                                                ],
                                                [
                                                    "key" => "Guinea-Bissau",
                                                    "value" => "GW"
                                                ],
                                                [
                                                    "key" => "Guyana",
                                                    "value" => "GY"
                                                ],
                                                [
                                                    "key" => "Haiti",
                                                    "value" => "HT"
                                                ],
                                                [
                                                    "key" => "Honduras",
                                                    "value" => "HN"
                                                ],
                                                [
                                                    "key" => "Hong Kong SAR China",
                                                    "value" => "HK"
                                                ],
                                                [
                                                    "key" => "Hungary",
                                                    "value" => "HU"
                                                ],
                                                [
                                                    "key" => "Iceland",
                                                    "value" => "IS"
                                                ],
                                                [
                                                    "key" => "India",
                                                    "value" => "IN"
                                                ],
                                                [
                                                    "key" => "Indonesia",
                                                    "value" => "ID"
                                                ],
                                                [
                                                    "key" => "Iran",
                                                    "value" => "IR"
                                                ],
                                                [
                                                    "key" => "Iraq",
                                                    "value" => "IQ"
                                                ],
                                                [
                                                    "key" => "Ireland",
                                                    "value" => "IE"
                                                ],
                                                [
                                                    "key" => "Isle of Man",
                                                    "value" => "IM"
                                                ],
                                                [
                                                    "key" => "Israel",
                                                    "value" => "IL"
                                                ],
                                                [
                                                    "key" => "Italy",
                                                    "value" => "IT"
                                                ],
                                                [
                                                    "key" => "Jamaica",
                                                    "value" => "JM"
                                                ],
                                                [
                                                    "key" => "Japan",
                                                    "value" => "JP"
                                                ],
                                                [
                                                    "key" => "Jersey",
                                                    "value" => "JE"
                                                ],
                                                [
                                                    "key" => "Jordan",
                                                    "value" => "JO"
                                                ],
                                                [
                                                    "key" => "Kazakhstan",
                                                    "value" => "KZ"
                                                ],
                                                [
                                                    "key" => "Kenya",
                                                    "value" => "KE"
                                                ],
                                                [
                                                    "key" => "Kiribati",
                                                    "value" => "KI"
                                                ],
                                                [
                                                    "key" => "Kosovo",
                                                    "value" => "XK"
                                                ],
                                                [
                                                    "key" => "Kuwait",
                                                    "value" => "KW"
                                                ],
                                                [
                                                    "key" => "Kyrgyzstan",
                                                    "value" => "KG"
                                                ],
                                                [
                                                    "key" => "Laos",
                                                    "value" => "LA"
                                                ],
                                                [
                                                    "key" => "Latvia",
                                                    "value" => "LV"
                                                ],
                                                [
                                                    "key" => "Lebanon",
                                                    "value" => "LB"
                                                ],
                                                [
                                                    "key" => "Lesotho",
                                                    "value" => "LS"
                                                ],
                                                [
                                                    "key" => "Liberia",
                                                    "value" => "LR"
                                                ],
                                                [
                                                    "key" => "Libya",
                                                    "value" => "LY"
                                                ],
                                                [
                                                    "key" => "Liechtenstein",
                                                    "value" => "LI"
                                                ],
                                                [
                                                    "key" => "Lithuania",
                                                    "value" => "LT"
                                                ],
                                                [
                                                    "key" => "Luxembourg",
                                                    "value" => "LU"
                                                ],
                                                [
                                                    "key" => "Macau SAR China",
                                                    "value" => "MO"
                                                ],
                                                [
                                                    "key" => "Macedonia",
                                                    "value" => "MK"
                                                ],
                                                [
                                                    "key" => "Madagascar",
                                                    "value" => "MG"
                                                ],
                                                [
                                                    "key" => "Malawi",
                                                    "value" => "MW"
                                                ],
                                                [
                                                    "key" => "Malaysia",
                                                    "value" => "MY"
                                                ],
                                                [
                                                    "key" => "Mali",
                                                    "value" => "ML"
                                                ],
                                                [
                                                    "key" => "Malta",
                                                    "value" => "MT"
                                                ],
                                                [
                                                    "key" => "Marshall Islands",
                                                    "value" => "MH"
                                                ],
                                                [
                                                    "key" => "Martinique",
                                                    "value" => "MQ"
                                                ],
                                                [
                                                    "key" => "Mauritania",
                                                    "value" => "MR"
                                                ],
                                                [
                                                    "key" => "Mauritius",
                                                    "value" => "MU"
                                                ],
                                                [
                                                    "key" => "Mayotte",
                                                    "value" => "YT"
                                                ],
                                                [
                                                    "key" => "Mexico",
                                                    "value" => "MX"
                                                ],
                                                [
                                                    "key" => "Micronesia",
                                                    "value" => "FM"
                                                ],
                                                [
                                                    "key" => "Moldova",
                                                    "value" => "MD"
                                                ],
                                                [
                                                    "key" => "Monaco",
                                                    "value" => "MC"
                                                ],
                                                [
                                                    "key" => "Mongolia",
                                                    "value" => "MN"
                                                ],
                                                [
                                                    "key" => "Montenegro",
                                                    "value" => "ME"
                                                ],
                                                [
                                                    "key" => "Montserrat",
                                                    "value" => "MS"
                                                ],
                                                [
                                                    "key" => "Morocco",
                                                    "value" => "MA"
                                                ],
                                                [
                                                    "key" => "Mozambique",
                                                    "value" => "MZ"
                                                ],
                                                [
                                                    "key" => "Myanmar (Burma)",
                                                    "value" => "MM"
                                                ],
                                                [
                                                    "key" => "Namibia",
                                                    "value" => "NA"
                                                ],
                                                [
                                                    "key" => "Nauru",
                                                    "value" => "NR"
                                                ],
                                                [
                                                    "key" => "Nepal",
                                                    "value" => "NP"
                                                ],
                                                [
                                                    "key" => "Netherlands",
                                                    "value" => "NL"
                                                ],
                                                [
                                                    "key" => "New Caledonia",
                                                    "value" => "NC"
                                                ],
                                                [
                                                    "key" => "New Zealand",
                                                    "value" => "NZ"
                                                ],
                                                [
                                                    "key" => "Nicaragua",
                                                    "value" => "NI"
                                                ],
                                                [
                                                    "key" => "Niger",
                                                    "value" => "NE"
                                                ],
                                                [
                                                    "key" => "Nigeria",
                                                    "value" => "NG"
                                                ],
                                                [
                                                    "key" => "Niue",
                                                    "value" => "NU"
                                                ],
                                                [
                                                    "key" => "Norfolk Island",
                                                    "value" => "NF"
                                                ],
                                                [
                                                    "key" => "North Korea",
                                                    "value" => "KP"
                                                ],
                                                [
                                                    "key" => "Northern Mariana Islands",
                                                    "value" => "MP"
                                                ],
                                                [
                                                    "key" => "Norway",
                                                    "value" => "NO"
                                                ],
                                                [
                                                    "key" => "Oman",
                                                    "value" => "OM"
                                                ],
                                                [
                                                    "key" => "Pakistan",
                                                    "value" => "PK"
                                                ],
                                                [
                                                    "key" => "Palau",
                                                    "value" => "PW"
                                                ],
                                                [
                                                    "key" => "Palestinian Territories",
                                                    "value" => "PS"
                                                ],
                                                [
                                                    "key" => "Panama",
                                                    "value" => "PA"
                                                ],
                                                [
                                                    "key" => "Papua New Guinea",
                                                    "value" => "PG"
                                                ],
                                                [
                                                    "key" => "Paraguay",
                                                    "value" => "PY"
                                                ],
                                                [
                                                    "key" => "Peru",
                                                    "value" => "PE"
                                                ],
                                                [
                                                    "key" => "Philippines",
                                                    "value" => "PH"
                                                ],
                                                [
                                                    "key" => "Pitcairn Islands",
                                                    "value" => "PN"
                                                ],
                                                [
                                                    "key" => "Poland",
                                                    "value" => "PL"
                                                ],
                                                [
                                                    "key" => "Portugal",
                                                    "value" => "PT"
                                                ],
                                                [
                                                    "key" => "Puerto Rico",
                                                    "value" => "PR"
                                                ],
                                                [
                                                    "key" => "Qatar",
                                                    "value" => "QA"
                                                ],
                                                [
                                                    "key" => "Romania",
                                                    "value" => "RO"
                                                ],
                                                [
                                                    "key" => "Russia",
                                                    "value" => "RU"
                                                ],
                                                [
                                                    "key" => "Rwanda",
                                                    "value" => "RW"
                                                ],
                                                [
                                                    "key" => "Réunion",
                                                    "value" => "RE"
                                                ],
                                                [
                                                    "key" => "Saint Barthélemy",
                                                    "value" => "BL"
                                                ],
                                                [
                                                    "key" => "Saint Helena",
                                                    "value" => "SH"
                                                ],
                                                [
                                                    "key" => "Saint Kitts and Nevis",
                                                    "value" => "KN"
                                                ],
                                                [
                                                    "key" => "Saint Lucia",
                                                    "value" => "LC"
                                                ],
                                                [
                                                    "key" => "Saint Martin",
                                                    "value" => "MF"
                                                ],
                                                [
                                                    "key" => "Saint Pierre and Miquelon",
                                                    "value" => "PM"
                                                ],
                                                [
                                                    "key" => "Samoa",
                                                    "value" => "WS"
                                                ],
                                                [
                                                    "key" => "San Marino",
                                                    "value" => "SM"
                                                ],
                                                [
                                                    "key" => "Saudi Arabia",
                                                    "value" => "SA"
                                                ],
                                                [
                                                    "key" => "Senegal",
                                                    "value" => "SN"
                                                ],
                                                [
                                                    "key" => "Serbia",
                                                    "value" => "RS"
                                                ],
                                                [
                                                    "key" => "Seychelles",
                                                    "value" => "SC"
                                                ],
                                                [
                                                    "key" => "Sierra Leone",
                                                    "value" => "SL"
                                                ],
                                                [
                                                    "key" => "Singapore",
                                                    "value" => "SG"
                                                ],
                                                [
                                                    "key" => "Sint Maarten",
                                                    "value" => "SX"
                                                ],
                                                [
                                                    "key" => "Slovakia",
                                                    "value" => "SK"
                                                ],
                                                [
                                                    "key" => "Slovenia",
                                                    "value" => "SI"
                                                ],
                                                [
                                                    "key" => "Solomon Islands",
                                                    "value" => "SB"
                                                ],
                                                [
                                                    "key" => "Somalia",
                                                    "value" => "SO"
                                                ],
                                                [
                                                    "key" => "South Africa",
                                                    "value" => "ZA"
                                                ],
                                                [
                                                    "key" => "South Korea",
                                                    "value" => "KR"
                                                ],
                                                [
                                                    "key" => "South Sudan",
                                                    "value" => "SS"
                                                ],
                                                [
                                                    "key" => "Spain",
                                                    "value" => "ES"
                                                ],
                                                [
                                                    "key" => "Sri Lanka",
                                                    "value" => "LK"
                                                ],
                                                [
                                                    "key" => "St. Vincent & Grenadines",
                                                    "value" => "VC"
                                                ],
                                                [
                                                    "key" => "Sudan",
                                                    "value" => "SD"
                                                ],
                                                [
                                                    "key" => "Suriname",
                                                    "value" => "SR"
                                                ],
                                                [
                                                    "key" => "Svalbard and Jan Mayen",
                                                    "value" => "SJ"
                                                ],
                                                [
                                                    "key" => "Swaziland",
                                                    "value" => "SZ"
                                                ],
                                                [
                                                    "key" => "Sweden",
                                                    "value" => "SE"
                                                ],
                                                [
                                                    "key" => "Switzerland",
                                                    "value" => "CH"
                                                ],
                                                [
                                                    "key" => "Syria",
                                                    "value" => "SY"
                                                ],
                                                [
                                                    "key" => "São Tomé and Príncipe",
                                                    "value" => "ST"
                                                ],
                                                [
                                                    "key" => "Taiwan",
                                                    "value" => "TW"
                                                ],
                                                [
                                                    "key" => "Tanzania",
                                                    "value" => "TZ"
                                                ],
                                                [
                                                    "key" => "Thailand",
                                                    "value" => "TH"
                                                ],
                                                [
                                                    "key" => "Timor-Leste",
                                                    "value" => "TL"
                                                ],
                                                [
                                                    "key" => "Togo",
                                                    "value" => "TG"
                                                ],
                                                [
                                                    "key" => "Tokelau",
                                                    "value" => "TK"
                                                ],
                                                [
                                                    "key" => "Tonga",
                                                    "value" => "TO"
                                                ],
                                                [
                                                    "key" => "Trinidad and Tobago",
                                                    "value" => "TT"
                                                ],
                                                [
                                                    "key" => "Tunisia",
                                                    "value" => "TN"
                                                ],
                                                [
                                                    "key" => "Turkey",
                                                    "value" => "TR"
                                                ],
                                                [
                                                    "key" => "Turks and Caicos Islands",
                                                    "value" => "TC"
                                                ],
                                                [
                                                    "key" => "Tuvalu",
                                                    "value" => "TV"
                                                ],
                                                [
                                                    "key" => "U.S. Outlying Islands",
                                                    "value" => "UM"
                                                ],
                                                [
                                                    "key" => "U.S. Virgin Islands",
                                                    "value" => "VI"
                                                ],
                                                [
                                                    "key" => "Uganda",
                                                    "value" => "UG"
                                                ],
                                                [
                                                    "key" => "Ukraine",
                                                    "value" => "UA"
                                                ],
                                                [
                                                    "key" => "United Arab Emirates",
                                                    "value" => "AE"
                                                ],
                                                [
                                                    "key" => "United Kingdom",
                                                    "value" => "GB"
                                                ],
                                                [
                                                    "key" => "United States",
                                                    "value" => "US"
                                                ],
                                                [
                                                    "key" => "Uruguay",
                                                    "value" => "UY"
                                                ],
                                                [
                                                    "key" => "Uzbekistan",
                                                    "value" => "UZ"
                                                ],
                                                [
                                                    "key" => "Vanuatu",
                                                    "value" => "VU"
                                                ],
                                                [
                                                    "key" => "Venezuela",
                                                    "value" => "VE"
                                                ],
                                                [
                                                    "key" => "Vietnam",
                                                    "value" => "VN"
                                                ],
                                                [
                                                    "key" => "Wallis and Futuna",
                                                    "value" => "WF"
                                                ],
                                                [
                                                    "key" => "Western Sahara",
                                                    "value" => "EH"
                                                ],
                                                [
                                                    "key" => "Yemen",
                                                    "value" => "YE"
                                                ],
                                                [
                                                    "key" => "Zambia",
                                                    "value" => "ZM"
                                                ],
                                                [
                                                    "key" => "Zimbabwe",
                                                    "value" => "ZW"
                                                ],
                                                [
                                                    "key" => "Åland Islands",
                                                    "value" => "AX"
                                                ]
                                            ],
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "optionsProviderClass" => NULL,
                                            "optionsProviderData" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => "190",
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "countryCode",
                                            "title" => "Country",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "phone",
                                        "label" => "phone",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => NULL,
                                            "name" => "phone",
                                            "title" => "phone",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "create" => FALSE,
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "read" => TRUE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "295b86489dca91a4aafaac8315cdb84a"
            ],
            "workspaces" => [
                "asset" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Car Images",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel16109-2"
                    ],
                    [
                        "read" => TRUE,
                        "cpath" => "/Brand Logos",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel16109-1"
                    ]
                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Shop",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel16141-1"
                    ]
                ]
            ]
        ],
        "assets" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "assets",
                "description" => "",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [

                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder"
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "9e265983fbd2dc42b8f7cdb841c82807"
            ],
            "workspaces" => [
                "asset" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Brand Logos",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel14963-1"
                    ],
                    [
                        "read" => TRUE,
                        "cpath" => "/Car Images",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel4621-1"
                    ]
                ],
                "object" => [

                ]
            ]
        ],
        "events" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "events",
                "description" => "",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Event" => [
                        "id" => "Event",
                        "name" => "Event",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "title",
                                        "label" => "title",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 540,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "title",
                                            "title" => "title",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => 640,
                                            "height" => 250,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "locationAddress",
                                        "label" => "Location Address",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 550,
                                            "height" => 100,
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "locationAddress",
                                            "title" => "Location Address",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "locationMap",
                                        "label" => "Location Map",
                                        "dataType" => "geopoint",
                                        "layout" => [
                                            "fieldtype" => "geopoint",
                                            "queryColumnType" => [
                                                "longitude" => "double",
                                                "latitude" => "double"
                                            ],
                                            "columnType" => [
                                                "longitude" => "double",
                                                "latitude" => "double"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Geopoint",
                                            "lat" => 0,
                                            "lng" => 0,
                                            "zoom" => 1,
                                            "mapType" => "roadmap",
                                            "name" => "locationMap",
                                            "title" => "Location Map",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "cars",
                                        "label" => "Cars",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => [

                                            ],
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Car"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "cars",
                                            "title" => "Cars",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "FromDate",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "D, M d Y",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "Start (fromDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "fromDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861112"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "ToDate",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "D, M d Y",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "End (toDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "toDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861115"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "FromTime",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "h:i A",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "Start (fromDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "fromDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861116"
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "ToTime",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "h:i A",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "End (toDate)",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "toDate",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#5d83518861117"
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "mainImage",
                                        "label" => "Image",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => 350,
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "mainImage",
                                            "title" => "Image",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "video",
                                        "label" => "Video",
                                        "dataType" => "video",
                                        "layout" => [
                                            "fieldtype" => "video",
                                            "width" => 500,
                                            "height" => 350,
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\Video",
                                            "name" => "video",
                                            "title" => "Video",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "images",
                                        "label" => "Additional Images",
                                        "dataType" => "imageGallery",
                                        "layout" => [
                                            "fieldtype" => "imageGallery",
                                            "queryColumnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "columnType" => [
                                                "images" => "text",
                                                "hotspots" => "text"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\DataObject\\Data\\ImageGallery",
                                            "width" => 300,
                                            "height" => 200,
                                            "uploadPath" => "",
                                            "ratioX" => NULL,
                                            "ratioY" => NULL,
                                            "predefinedDataTemplates" => "",
                                            "name" => "images",
                                            "title" => "Additional Images",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "tags",
                                        "label" => "Tags",
                                        "dataType" => "multiselect",
                                        "layout" => [
                                            "fieldtype" => "multiselect",
                                            "options" => [
                                                [
                                                    "key" => "1960",
                                                    "value" => "1960"
                                                ],
                                                [
                                                    "key" => "BMW Group",
                                                    "value" => "BMW Group"
                                                ],
                                                [
                                                    "key" => "Vintage",
                                                    "value" => "Vintage"
                                                ],
                                                [
                                                    "key" => "Ferrari",
                                                    "value" => "Ferrari"
                                                ]
                                            ],
                                            "width" => 500,
                                            "height" => "",
                                            "maxItems" => "",
                                            "renderType" => "tags",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "text",
                                            "columnType" => "text",
                                            "phpdocType" => "array",
                                            "dynamicOptions" => FALSE,
                                            "name" => "tags",
                                            "title" => "Tags",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "margin-left:50px",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactName",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 250,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 255,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactName",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactPhone",
                                        "label" => "Phone",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 250,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactPhone",
                                            "title" => "Phone",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactEmail",
                                        "label" => "Email",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 350,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "contactEmail",
                                            "title" => "Email",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "contactAddress",
                                        "label" => "Address",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => 550,
                                            "height" => 100,
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "name" => "contactAddress",
                                            "title" => "Address",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Car" => [
                        "id" => "Car",
                        "name" => "Car",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "manufacturer",
                                        "label" => "Manufacturer",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => 400,
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Manufacturer"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "manufacturer",
                                            "title" => "Manufacturer",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "carClass",
                                        "label" => "Class",
                                        "dataType" => "select",
                                        "layout" => [
                                            "fieldtype" => "select",
                                            "options" => [
                                                [
                                                    "key" => "Full-size luxury car",
                                                    "value" => "Full-size luxury car"
                                                ],
                                                [
                                                    "key" => "Grand tourer",
                                                    "value" => "Grand tourer"
                                                ],
                                                [
                                                    "key" => "Light commercial vehicle",
                                                    "value" => "Light commercial vehicle"
                                                ],
                                                [
                                                    "key" => "Muscle Car",
                                                    "value" => "Muscle Car"
                                                ],
                                                [
                                                    "key" => "City Car",
                                                    "value" => "City Car"
                                                ],
                                                [
                                                    "key" => "Executive car",
                                                    "value" => "Executive car"
                                                ],
                                                [
                                                    "key" => "Economy car",
                                                    "value" => "Economy car"
                                                ],
                                                [
                                                    "key" => "Personal luxury car",
                                                    "value" => "Personal luxury car"
                                                ],
                                                [
                                                    "key" => "Full-Size",
                                                    "value" => "Full-Size"
                                                ],
                                                [
                                                    "key" => "Family car",
                                                    "value" => "Family car"
                                                ],
                                                [
                                                    "key" => "Mid-size luxury",
                                                    "value" => "Mid-size luxury"
                                                ],
                                                [
                                                    "key" => "sports car",
                                                    "value" => "sports car"
                                                ]
                                            ],
                                            "width" => 300,
                                            "defaultValue" => "",
                                            "optionsProviderClass" => "",
                                            "optionsProviderData" => "",
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "dynamicOptions" => FALSE,
                                            "name" => "carClass",
                                            "title" => "Class",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "productionYear",
                                        "label" => "Production Year",
                                        "dataType" => "numeric",
                                        "layout" => [
                                            "fieldtype" => "numeric",
                                            "width" => 300,
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "double",
                                            "columnType" => "double",
                                            "phpdocType" => "float",
                                            "integer" => TRUE,
                                            "unsigned" => TRUE,
                                            "minValue" => NULL,
                                            "maxValue" => NULL,
                                            "unique" => FALSE,
                                            "decimalSize" => NULL,
                                            "decimalPrecision" => NULL,
                                            "name" => "productionYear",
                                            "title" => "Production Year",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Manufacturer" => [
                        "id" => "Manufacturer",
                        "name" => "Manufacturer",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => 400,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => TRUE,
                                            "visibleSearch" => TRUE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "logo",
                                        "label" => "Logo",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "width" => 500,
                                            "height" => "",
                                            "uploadPath" => "",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "phpdocType" => "\\Pimcore\\Model\\Asset\\Image",
                                            "name" => "logo",
                                            "title" => "Logo",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "asset" => [
                        "id" => "asset",
                        "read" => TRUE
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder",
                        "read" => TRUE
                    ],
                    "object_folder" => [
                        "id" => "object_folder",
                        "read" => FALSE
                    ],
                    "document" => [
                        "id" => "document"
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "8e0935fe948ccf727342e86015c00834"
            ],
            "workspaces" => [
                "document" => [

                ],
                "asset" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Sample Content/Event images",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1362-1"
                    ]
                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/Product Data/Manufacturer",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1448-2"
                    ],
                    [
                        "read" => TRUE,
                        "cpath" => "/Product Data/Cars",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel1448-1"
                    ],
                    [
                        "read" => TRUE,
                        "cpath" => "/Events",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel3397-1"
                    ]
                ]
            ]
        ]
    ]
];
