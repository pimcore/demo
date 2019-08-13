<?php 

/** 
* Generated at: 2019-08-13T10:31:42+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (2)
* IP: 192.168.9.96


Fields Summary: 
- active [checkbox]
- gender [gender]
- firstname [firstname]
- lastname [lastname]
- email [email]
- street [input]
- zip [input]
- city [input]
- countryCode [country]
- phone [input]
- idEncoded [input]
- manualSegments [advancedManyToManyObjectRelation]
- calculatedSegments [advancedManyToManyObjectRelation]
- password [password]
- ssoIdentities [manyToManyObjectRelation]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'CU',
   'name' => 'Customer',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1565685102,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '\\CustomerManagementFrameworkBundle\\Model\\AbstractCustomer\\DefaultAbstractUserawareCustomer',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => false,
   'allowVariants' => NULL,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => 'top',
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => NULL,
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => NULL,
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Base Data',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Base Data',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'active',
                 'title' => 'Active',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Gender::__set_state(array(
                 'fieldtype' => 'gender',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'male',
                    'value' => 'male',
                  ),
                  1 => 
                  array (
                    'key' => 'female',
                    'value' => 'female',
                  ),
                  2 => 
                  array (
                    'key' => '',
                    'value' => 'unknown',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => '190',
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'gender',
                 'title' => 'Gender',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Firstname::__set_state(array(
                 'fieldtype' => 'firstname',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'firstname',
                 'title' => 'Firstname',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Lastname::__set_state(array(
                 'fieldtype' => 'lastname',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'lastname',
                 'title' => 'Lastname',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Email::__set_state(array(
                 'fieldtype' => 'email',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'email',
                 'title' => 'Email',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'street',
                 'title' => 'Street',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'zip',
                 'title' => 'Zip',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              7 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'city',
                 'title' => 'City',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
                 'fieldtype' => 'country',
                 'restrictTo' => '',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Afghanistan',
                    'value' => 'AF',
                  ),
                  1 => 
                  array (
                    'key' => 'Albania',
                    'value' => 'AL',
                  ),
                  2 => 
                  array (
                    'key' => 'Algeria',
                    'value' => 'DZ',
                  ),
                  3 => 
                  array (
                    'key' => 'American Samoa',
                    'value' => 'AS',
                  ),
                  4 => 
                  array (
                    'key' => 'Andorra',
                    'value' => 'AD',
                  ),
                  5 => 
                  array (
                    'key' => 'Angola',
                    'value' => 'AO',
                  ),
                  6 => 
                  array (
                    'key' => 'Anguilla',
                    'value' => 'AI',
                  ),
                  7 => 
                  array (
                    'key' => 'Antigua and Barbuda',
                    'value' => 'AG',
                  ),
                  8 => 
                  array (
                    'key' => 'Argentina',
                    'value' => 'AR',
                  ),
                  9 => 
                  array (
                    'key' => 'Armenia',
                    'value' => 'AM',
                  ),
                  10 => 
                  array (
                    'key' => 'Aruba',
                    'value' => 'AW',
                  ),
                  11 => 
                  array (
                    'key' => 'Australia',
                    'value' => 'AU',
                  ),
                  12 => 
                  array (
                    'key' => 'Austria',
                    'value' => 'AT',
                  ),
                  13 => 
                  array (
                    'key' => 'Azerbaijan',
                    'value' => 'AZ',
                  ),
                  14 => 
                  array (
                    'key' => 'Bahamas',
                    'value' => 'BS',
                  ),
                  15 => 
                  array (
                    'key' => 'Bahrain',
                    'value' => 'BH',
                  ),
                  16 => 
                  array (
                    'key' => 'Bangladesh',
                    'value' => 'BD',
                  ),
                  17 => 
                  array (
                    'key' => 'Barbados',
                    'value' => 'BB',
                  ),
                  18 => 
                  array (
                    'key' => 'Belarus',
                    'value' => 'BY',
                  ),
                  19 => 
                  array (
                    'key' => 'Belgium',
                    'value' => 'BE',
                  ),
                  20 => 
                  array (
                    'key' => 'Belize',
                    'value' => 'BZ',
                  ),
                  21 => 
                  array (
                    'key' => 'Benin',
                    'value' => 'BJ',
                  ),
                  22 => 
                  array (
                    'key' => 'Bermuda',
                    'value' => 'BM',
                  ),
                  23 => 
                  array (
                    'key' => 'Bhutan',
                    'value' => 'BT',
                  ),
                  24 => 
                  array (
                    'key' => 'Bolivia',
                    'value' => 'BO',
                  ),
                  25 => 
                  array (
                    'key' => 'Bosnia and Herzegovina',
                    'value' => 'BA',
                  ),
                  26 => 
                  array (
                    'key' => 'Botswana',
                    'value' => 'BW',
                  ),
                  27 => 
                  array (
                    'key' => 'Brazil',
                    'value' => 'BR',
                  ),
                  28 => 
                  array (
                    'key' => 'British Indian Ocean Territory',
                    'value' => 'IO',
                  ),
                  29 => 
                  array (
                    'key' => 'British Virgin Islands',
                    'value' => 'VG',
                  ),
                  30 => 
                  array (
                    'key' => 'Brunei',
                    'value' => 'BN',
                  ),
                  31 => 
                  array (
                    'key' => 'Bulgaria',
                    'value' => 'BG',
                  ),
                  32 => 
                  array (
                    'key' => 'Burkina Faso',
                    'value' => 'BF',
                  ),
                  33 => 
                  array (
                    'key' => 'Burundi',
                    'value' => 'BI',
                  ),
                  34 => 
                  array (
                    'key' => 'Cambodia',
                    'value' => 'KH',
                  ),
                  35 => 
                  array (
                    'key' => 'Cameroon',
                    'value' => 'CM',
                  ),
                  36 => 
                  array (
                    'key' => 'Canada',
                    'value' => 'CA',
                  ),
                  37 => 
                  array (
                    'key' => 'Canary Islands',
                    'value' => 'IC',
                  ),
                  38 => 
                  array (
                    'key' => 'Cape Verde',
                    'value' => 'CV',
                  ),
                  39 => 
                  array (
                    'key' => 'Caribbean Netherlands',
                    'value' => 'BQ',
                  ),
                  40 => 
                  array (
                    'key' => 'Cayman Islands',
                    'value' => 'KY',
                  ),
                  41 => 
                  array (
                    'key' => 'Central African Republic',
                    'value' => 'CF',
                  ),
                  42 => 
                  array (
                    'key' => 'Ceuta and Melilla',
                    'value' => 'EA',
                  ),
                  43 => 
                  array (
                    'key' => 'Chad',
                    'value' => 'TD',
                  ),
                  44 => 
                  array (
                    'key' => 'Chile',
                    'value' => 'CL',
                  ),
                  45 => 
                  array (
                    'key' => 'China',
                    'value' => 'CN',
                  ),
                  46 => 
                  array (
                    'key' => 'Christmas Island',
                    'value' => 'CX',
                  ),
                  47 => 
                  array (
                    'key' => 'Cocos (Keeling) Islands',
                    'value' => 'CC',
                  ),
                  48 => 
                  array (
                    'key' => 'Colombia',
                    'value' => 'CO',
                  ),
                  49 => 
                  array (
                    'key' => 'Comoros',
                    'value' => 'KM',
                  ),
                  50 => 
                  array (
                    'key' => 'Congo - Brazzaville',
                    'value' => 'CG',
                  ),
                  51 => 
                  array (
                    'key' => 'Congo - Kinshasa',
                    'value' => 'CD',
                  ),
                  52 => 
                  array (
                    'key' => 'Cook Islands',
                    'value' => 'CK',
                  ),
                  53 => 
                  array (
                    'key' => 'Costa Rica',
                    'value' => 'CR',
                  ),
                  54 => 
                  array (
                    'key' => 'Croatia',
                    'value' => 'HR',
                  ),
                  55 => 
                  array (
                    'key' => 'Cuba',
                    'value' => 'CU',
                  ),
                  56 => 
                  array (
                    'key' => 'Curaçao',
                    'value' => 'CW',
                  ),
                  57 => 
                  array (
                    'key' => 'Cyprus',
                    'value' => 'CY',
                  ),
                  58 => 
                  array (
                    'key' => 'Czech Republic',
                    'value' => 'CZ',
                  ),
                  59 => 
                  array (
                    'key' => 'Côte d’Ivoire',
                    'value' => 'CI',
                  ),
                  60 => 
                  array (
                    'key' => 'Denmark',
                    'value' => 'DK',
                  ),
                  61 => 
                  array (
                    'key' => 'Diego Garcia',
                    'value' => 'DG',
                  ),
                  62 => 
                  array (
                    'key' => 'Djibouti',
                    'value' => 'DJ',
                  ),
                  63 => 
                  array (
                    'key' => 'Dominica',
                    'value' => 'DM',
                  ),
                  64 => 
                  array (
                    'key' => 'Dominican Republic',
                    'value' => 'DO',
                  ),
                  65 => 
                  array (
                    'key' => 'Ecuador',
                    'value' => 'EC',
                  ),
                  66 => 
                  array (
                    'key' => 'Egypt',
                    'value' => 'EG',
                  ),
                  67 => 
                  array (
                    'key' => 'El Salvador',
                    'value' => 'SV',
                  ),
                  68 => 
                  array (
                    'key' => 'Equatorial Guinea',
                    'value' => 'GQ',
                  ),
                  69 => 
                  array (
                    'key' => 'Eritrea',
                    'value' => 'ER',
                  ),
                  70 => 
                  array (
                    'key' => 'Estonia',
                    'value' => 'EE',
                  ),
                  71 => 
                  array (
                    'key' => 'Ethiopia',
                    'value' => 'ET',
                  ),
                  72 => 
                  array (
                    'key' => 'Falkland Islands',
                    'value' => 'FK',
                  ),
                  73 => 
                  array (
                    'key' => 'Faroe Islands',
                    'value' => 'FO',
                  ),
                  74 => 
                  array (
                    'key' => 'Fiji',
                    'value' => 'FJ',
                  ),
                  75 => 
                  array (
                    'key' => 'Finland',
                    'value' => 'FI',
                  ),
                  76 => 
                  array (
                    'key' => 'France',
                    'value' => 'FR',
                  ),
                  77 => 
                  array (
                    'key' => 'French Guiana',
                    'value' => 'GF',
                  ),
                  78 => 
                  array (
                    'key' => 'French Polynesia',
                    'value' => 'PF',
                  ),
                  79 => 
                  array (
                    'key' => 'Gabon',
                    'value' => 'GA',
                  ),
                  80 => 
                  array (
                    'key' => 'Gambia',
                    'value' => 'GM',
                  ),
                  81 => 
                  array (
                    'key' => 'Georgia',
                    'value' => 'GE',
                  ),
                  82 => 
                  array (
                    'key' => 'Germany',
                    'value' => 'DE',
                  ),
                  83 => 
                  array (
                    'key' => 'Ghana',
                    'value' => 'GH',
                  ),
                  84 => 
                  array (
                    'key' => 'Gibraltar',
                    'value' => 'GI',
                  ),
                  85 => 
                  array (
                    'key' => 'Greece',
                    'value' => 'GR',
                  ),
                  86 => 
                  array (
                    'key' => 'Greenland',
                    'value' => 'GL',
                  ),
                  87 => 
                  array (
                    'key' => 'Grenada',
                    'value' => 'GD',
                  ),
                  88 => 
                  array (
                    'key' => 'Guadeloupe',
                    'value' => 'GP',
                  ),
                  89 => 
                  array (
                    'key' => 'Guam',
                    'value' => 'GU',
                  ),
                  90 => 
                  array (
                    'key' => 'Guatemala',
                    'value' => 'GT',
                  ),
                  91 => 
                  array (
                    'key' => 'Guernsey',
                    'value' => 'GG',
                  ),
                  92 => 
                  array (
                    'key' => 'Guinea',
                    'value' => 'GN',
                  ),
                  93 => 
                  array (
                    'key' => 'Guinea-Bissau',
                    'value' => 'GW',
                  ),
                  94 => 
                  array (
                    'key' => 'Guyana',
                    'value' => 'GY',
                  ),
                  95 => 
                  array (
                    'key' => 'Haiti',
                    'value' => 'HT',
                  ),
                  96 => 
                  array (
                    'key' => 'Honduras',
                    'value' => 'HN',
                  ),
                  97 => 
                  array (
                    'key' => 'Hong Kong SAR China',
                    'value' => 'HK',
                  ),
                  98 => 
                  array (
                    'key' => 'Hungary',
                    'value' => 'HU',
                  ),
                  99 => 
                  array (
                    'key' => 'Iceland',
                    'value' => 'IS',
                  ),
                  100 => 
                  array (
                    'key' => 'India',
                    'value' => 'IN',
                  ),
                  101 => 
                  array (
                    'key' => 'Indonesia',
                    'value' => 'ID',
                  ),
                  102 => 
                  array (
                    'key' => 'Iran',
                    'value' => 'IR',
                  ),
                  103 => 
                  array (
                    'key' => 'Iraq',
                    'value' => 'IQ',
                  ),
                  104 => 
                  array (
                    'key' => 'Ireland',
                    'value' => 'IE',
                  ),
                  105 => 
                  array (
                    'key' => 'Isle of Man',
                    'value' => 'IM',
                  ),
                  106 => 
                  array (
                    'key' => 'Israel',
                    'value' => 'IL',
                  ),
                  107 => 
                  array (
                    'key' => 'Italy',
                    'value' => 'IT',
                  ),
                  108 => 
                  array (
                    'key' => 'Jamaica',
                    'value' => 'JM',
                  ),
                  109 => 
                  array (
                    'key' => 'Japan',
                    'value' => 'JP',
                  ),
                  110 => 
                  array (
                    'key' => 'Jersey',
                    'value' => 'JE',
                  ),
                  111 => 
                  array (
                    'key' => 'Jordan',
                    'value' => 'JO',
                  ),
                  112 => 
                  array (
                    'key' => 'Kazakhstan',
                    'value' => 'KZ',
                  ),
                  113 => 
                  array (
                    'key' => 'Kenya',
                    'value' => 'KE',
                  ),
                  114 => 
                  array (
                    'key' => 'Kiribati',
                    'value' => 'KI',
                  ),
                  115 => 
                  array (
                    'key' => 'Kosovo',
                    'value' => 'XK',
                  ),
                  116 => 
                  array (
                    'key' => 'Kuwait',
                    'value' => 'KW',
                  ),
                  117 => 
                  array (
                    'key' => 'Kyrgyzstan',
                    'value' => 'KG',
                  ),
                  118 => 
                  array (
                    'key' => 'Laos',
                    'value' => 'LA',
                  ),
                  119 => 
                  array (
                    'key' => 'Latvia',
                    'value' => 'LV',
                  ),
                  120 => 
                  array (
                    'key' => 'Lebanon',
                    'value' => 'LB',
                  ),
                  121 => 
                  array (
                    'key' => 'Lesotho',
                    'value' => 'LS',
                  ),
                  122 => 
                  array (
                    'key' => 'Liberia',
                    'value' => 'LR',
                  ),
                  123 => 
                  array (
                    'key' => 'Libya',
                    'value' => 'LY',
                  ),
                  124 => 
                  array (
                    'key' => 'Liechtenstein',
                    'value' => 'LI',
                  ),
                  125 => 
                  array (
                    'key' => 'Lithuania',
                    'value' => 'LT',
                  ),
                  126 => 
                  array (
                    'key' => 'Luxembourg',
                    'value' => 'LU',
                  ),
                  127 => 
                  array (
                    'key' => 'Macau SAR China',
                    'value' => 'MO',
                  ),
                  128 => 
                  array (
                    'key' => 'Macedonia',
                    'value' => 'MK',
                  ),
                  129 => 
                  array (
                    'key' => 'Madagascar',
                    'value' => 'MG',
                  ),
                  130 => 
                  array (
                    'key' => 'Malawi',
                    'value' => 'MW',
                  ),
                  131 => 
                  array (
                    'key' => 'Malaysia',
                    'value' => 'MY',
                  ),
                  132 => 
                  array (
                    'key' => 'Mali',
                    'value' => 'ML',
                  ),
                  133 => 
                  array (
                    'key' => 'Malta',
                    'value' => 'MT',
                  ),
                  134 => 
                  array (
                    'key' => 'Marshall Islands',
                    'value' => 'MH',
                  ),
                  135 => 
                  array (
                    'key' => 'Martinique',
                    'value' => 'MQ',
                  ),
                  136 => 
                  array (
                    'key' => 'Mauritania',
                    'value' => 'MR',
                  ),
                  137 => 
                  array (
                    'key' => 'Mauritius',
                    'value' => 'MU',
                  ),
                  138 => 
                  array (
                    'key' => 'Mayotte',
                    'value' => 'YT',
                  ),
                  139 => 
                  array (
                    'key' => 'Mexico',
                    'value' => 'MX',
                  ),
                  140 => 
                  array (
                    'key' => 'Micronesia',
                    'value' => 'FM',
                  ),
                  141 => 
                  array (
                    'key' => 'Moldova',
                    'value' => 'MD',
                  ),
                  142 => 
                  array (
                    'key' => 'Monaco',
                    'value' => 'MC',
                  ),
                  143 => 
                  array (
                    'key' => 'Mongolia',
                    'value' => 'MN',
                  ),
                  144 => 
                  array (
                    'key' => 'Montenegro',
                    'value' => 'ME',
                  ),
                  145 => 
                  array (
                    'key' => 'Montserrat',
                    'value' => 'MS',
                  ),
                  146 => 
                  array (
                    'key' => 'Morocco',
                    'value' => 'MA',
                  ),
                  147 => 
                  array (
                    'key' => 'Mozambique',
                    'value' => 'MZ',
                  ),
                  148 => 
                  array (
                    'key' => 'Myanmar (Burma)',
                    'value' => 'MM',
                  ),
                  149 => 
                  array (
                    'key' => 'Namibia',
                    'value' => 'NA',
                  ),
                  150 => 
                  array (
                    'key' => 'Nauru',
                    'value' => 'NR',
                  ),
                  151 => 
                  array (
                    'key' => 'Nepal',
                    'value' => 'NP',
                  ),
                  152 => 
                  array (
                    'key' => 'Netherlands',
                    'value' => 'NL',
                  ),
                  153 => 
                  array (
                    'key' => 'New Caledonia',
                    'value' => 'NC',
                  ),
                  154 => 
                  array (
                    'key' => 'New Zealand',
                    'value' => 'NZ',
                  ),
                  155 => 
                  array (
                    'key' => 'Nicaragua',
                    'value' => 'NI',
                  ),
                  156 => 
                  array (
                    'key' => 'Niger',
                    'value' => 'NE',
                  ),
                  157 => 
                  array (
                    'key' => 'Nigeria',
                    'value' => 'NG',
                  ),
                  158 => 
                  array (
                    'key' => 'Niue',
                    'value' => 'NU',
                  ),
                  159 => 
                  array (
                    'key' => 'Norfolk Island',
                    'value' => 'NF',
                  ),
                  160 => 
                  array (
                    'key' => 'North Korea',
                    'value' => 'KP',
                  ),
                  161 => 
                  array (
                    'key' => 'Northern Mariana Islands',
                    'value' => 'MP',
                  ),
                  162 => 
                  array (
                    'key' => 'Norway',
                    'value' => 'NO',
                  ),
                  163 => 
                  array (
                    'key' => 'Oman',
                    'value' => 'OM',
                  ),
                  164 => 
                  array (
                    'key' => 'Pakistan',
                    'value' => 'PK',
                  ),
                  165 => 
                  array (
                    'key' => 'Palau',
                    'value' => 'PW',
                  ),
                  166 => 
                  array (
                    'key' => 'Palestinian Territories',
                    'value' => 'PS',
                  ),
                  167 => 
                  array (
                    'key' => 'Panama',
                    'value' => 'PA',
                  ),
                  168 => 
                  array (
                    'key' => 'Papua New Guinea',
                    'value' => 'PG',
                  ),
                  169 => 
                  array (
                    'key' => 'Paraguay',
                    'value' => 'PY',
                  ),
                  170 => 
                  array (
                    'key' => 'Peru',
                    'value' => 'PE',
                  ),
                  171 => 
                  array (
                    'key' => 'Philippines',
                    'value' => 'PH',
                  ),
                  172 => 
                  array (
                    'key' => 'Pitcairn Islands',
                    'value' => 'PN',
                  ),
                  173 => 
                  array (
                    'key' => 'Poland',
                    'value' => 'PL',
                  ),
                  174 => 
                  array (
                    'key' => 'Portugal',
                    'value' => 'PT',
                  ),
                  175 => 
                  array (
                    'key' => 'Puerto Rico',
                    'value' => 'PR',
                  ),
                  176 => 
                  array (
                    'key' => 'Qatar',
                    'value' => 'QA',
                  ),
                  177 => 
                  array (
                    'key' => 'Romania',
                    'value' => 'RO',
                  ),
                  178 => 
                  array (
                    'key' => 'Russia',
                    'value' => 'RU',
                  ),
                  179 => 
                  array (
                    'key' => 'Rwanda',
                    'value' => 'RW',
                  ),
                  180 => 
                  array (
                    'key' => 'Réunion',
                    'value' => 'RE',
                  ),
                  181 => 
                  array (
                    'key' => 'Saint Barthélemy',
                    'value' => 'BL',
                  ),
                  182 => 
                  array (
                    'key' => 'Saint Helena',
                    'value' => 'SH',
                  ),
                  183 => 
                  array (
                    'key' => 'Saint Kitts and Nevis',
                    'value' => 'KN',
                  ),
                  184 => 
                  array (
                    'key' => 'Saint Lucia',
                    'value' => 'LC',
                  ),
                  185 => 
                  array (
                    'key' => 'Saint Martin',
                    'value' => 'MF',
                  ),
                  186 => 
                  array (
                    'key' => 'Saint Pierre and Miquelon',
                    'value' => 'PM',
                  ),
                  187 => 
                  array (
                    'key' => 'Samoa',
                    'value' => 'WS',
                  ),
                  188 => 
                  array (
                    'key' => 'San Marino',
                    'value' => 'SM',
                  ),
                  189 => 
                  array (
                    'key' => 'Saudi Arabia',
                    'value' => 'SA',
                  ),
                  190 => 
                  array (
                    'key' => 'Senegal',
                    'value' => 'SN',
                  ),
                  191 => 
                  array (
                    'key' => 'Serbia',
                    'value' => 'RS',
                  ),
                  192 => 
                  array (
                    'key' => 'Seychelles',
                    'value' => 'SC',
                  ),
                  193 => 
                  array (
                    'key' => 'Sierra Leone',
                    'value' => 'SL',
                  ),
                  194 => 
                  array (
                    'key' => 'Singapore',
                    'value' => 'SG',
                  ),
                  195 => 
                  array (
                    'key' => 'Sint Maarten',
                    'value' => 'SX',
                  ),
                  196 => 
                  array (
                    'key' => 'Slovakia',
                    'value' => 'SK',
                  ),
                  197 => 
                  array (
                    'key' => 'Slovenia',
                    'value' => 'SI',
                  ),
                  198 => 
                  array (
                    'key' => 'Solomon Islands',
                    'value' => 'SB',
                  ),
                  199 => 
                  array (
                    'key' => 'Somalia',
                    'value' => 'SO',
                  ),
                  200 => 
                  array (
                    'key' => 'South Africa',
                    'value' => 'ZA',
                  ),
                  201 => 
                  array (
                    'key' => 'South Korea',
                    'value' => 'KR',
                  ),
                  202 => 
                  array (
                    'key' => 'South Sudan',
                    'value' => 'SS',
                  ),
                  203 => 
                  array (
                    'key' => 'Spain',
                    'value' => 'ES',
                  ),
                  204 => 
                  array (
                    'key' => 'Sri Lanka',
                    'value' => 'LK',
                  ),
                  205 => 
                  array (
                    'key' => 'St. Vincent & Grenadines',
                    'value' => 'VC',
                  ),
                  206 => 
                  array (
                    'key' => 'Sudan',
                    'value' => 'SD',
                  ),
                  207 => 
                  array (
                    'key' => 'Suriname',
                    'value' => 'SR',
                  ),
                  208 => 
                  array (
                    'key' => 'Svalbard and Jan Mayen',
                    'value' => 'SJ',
                  ),
                  209 => 
                  array (
                    'key' => 'Swaziland',
                    'value' => 'SZ',
                  ),
                  210 => 
                  array (
                    'key' => 'Sweden',
                    'value' => 'SE',
                  ),
                  211 => 
                  array (
                    'key' => 'Switzerland',
                    'value' => 'CH',
                  ),
                  212 => 
                  array (
                    'key' => 'Syria',
                    'value' => 'SY',
                  ),
                  213 => 
                  array (
                    'key' => 'São Tomé and Príncipe',
                    'value' => 'ST',
                  ),
                  214 => 
                  array (
                    'key' => 'Taiwan',
                    'value' => 'TW',
                  ),
                  215 => 
                  array (
                    'key' => 'Tanzania',
                    'value' => 'TZ',
                  ),
                  216 => 
                  array (
                    'key' => 'Thailand',
                    'value' => 'TH',
                  ),
                  217 => 
                  array (
                    'key' => 'Timor-Leste',
                    'value' => 'TL',
                  ),
                  218 => 
                  array (
                    'key' => 'Togo',
                    'value' => 'TG',
                  ),
                  219 => 
                  array (
                    'key' => 'Tokelau',
                    'value' => 'TK',
                  ),
                  220 => 
                  array (
                    'key' => 'Tonga',
                    'value' => 'TO',
                  ),
                  221 => 
                  array (
                    'key' => 'Trinidad and Tobago',
                    'value' => 'TT',
                  ),
                  222 => 
                  array (
                    'key' => 'Tunisia',
                    'value' => 'TN',
                  ),
                  223 => 
                  array (
                    'key' => 'Turkey',
                    'value' => 'TR',
                  ),
                  224 => 
                  array (
                    'key' => 'Turks and Caicos Islands',
                    'value' => 'TC',
                  ),
                  225 => 
                  array (
                    'key' => 'Tuvalu',
                    'value' => 'TV',
                  ),
                  226 => 
                  array (
                    'key' => 'U.S. Outlying Islands',
                    'value' => 'UM',
                  ),
                  227 => 
                  array (
                    'key' => 'U.S. Virgin Islands',
                    'value' => 'VI',
                  ),
                  228 => 
                  array (
                    'key' => 'Uganda',
                    'value' => 'UG',
                  ),
                  229 => 
                  array (
                    'key' => 'Ukraine',
                    'value' => 'UA',
                  ),
                  230 => 
                  array (
                    'key' => 'United Arab Emirates',
                    'value' => 'AE',
                  ),
                  231 => 
                  array (
                    'key' => 'United Kingdom',
                    'value' => 'GB',
                  ),
                  232 => 
                  array (
                    'key' => 'United States',
                    'value' => 'US',
                  ),
                  233 => 
                  array (
                    'key' => 'Uruguay',
                    'value' => 'UY',
                  ),
                  234 => 
                  array (
                    'key' => 'Uzbekistan',
                    'value' => 'UZ',
                  ),
                  235 => 
                  array (
                    'key' => 'Vanuatu',
                    'value' => 'VU',
                  ),
                  236 => 
                  array (
                    'key' => 'Venezuela',
                    'value' => 'VE',
                  ),
                  237 => 
                  array (
                    'key' => 'Vietnam',
                    'value' => 'VN',
                  ),
                  238 => 
                  array (
                    'key' => 'Wallis and Futuna',
                    'value' => 'WF',
                  ),
                  239 => 
                  array (
                    'key' => 'Western Sahara',
                    'value' => 'EH',
                  ),
                  240 => 
                  array (
                    'key' => 'Yemen',
                    'value' => 'YE',
                  ),
                  241 => 
                  array (
                    'key' => 'Zambia',
                    'value' => 'ZM',
                  ),
                  242 => 
                  array (
                    'key' => 'Zimbabwe',
                    'value' => 'ZW',
                  ),
                  243 => 
                  array (
                    'key' => 'Åland Islands',
                    'value' => 'AX',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => '190',
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'countryCode',
                 'title' => 'Country',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              9 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'phone',
                 'title' => 'phone',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              10 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => NULL,
                 'name' => 'idEncoded',
                 'title' => 'Id Encoded',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => true,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Segmentation',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Segmentation',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
                 'fieldtype' => 'text',
                 'html' => '<b>​Assigned Segments to Customer</b><br><div>Calculated segments are assigned automatically via segmentation building process and cannot edited manually.&nbsp;</div><div>Manual segments can be assigned and updated manually.&nbsp;</div>',
                 'renderingClass' => '',
                 'renderingData' => '',
                 'border' => false,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => 'CustomerSegment',
                 'visibleFields' => 'id,name',
                 'columns' => 
                array (
                  0 => 
                  array (
                    'type' => 'number',
                    'position' => 1,
                    'key' => 'created_timestamp',
                    'id' => 'extModel2805-1',
                    'label' => 'Segment created (Timestamp)',
                  ),
                  1 => 
                  array (
                    'type' => 'number',
                    'position' => 2,
                    'key' => 'application_counter',
                    'id' => 'extModel2805-2',
                    'label' => 'Segment application counter',
                  ),
                ),
                 'columnKeys' => 
                array (
                  0 => 'created_timestamp',
                  1 => 'application_counter',
                ),
                 'fieldtype' => 'advancedManyToManyObjectRelation',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                 'enableBatchEdit' => NULL,
                 'allowMultipleAssignments' => NULL,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'relationType' => true,
                 'optimizedAdminLoading' => false,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'name' => 'manualSegments',
                 'title' => 'Manual Segments',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => 'CustomerSegment',
                 'visibleFields' => 'name,id',
                 'columns' => 
                array (
                  0 => 
                  array (
                    'type' => 'number',
                    'position' => 1,
                    'key' => 'created_timestamp',
                    'id' => 'extModel1622-1',
                    'label' => 'Segment created (Timestamp)',
                  ),
                  1 => 
                  array (
                    'type' => 'number',
                    'position' => 2,
                    'key' => 'application_counter',
                    'id' => 'extModel1622-2',
                    'label' => 'Segment application counter',
                  ),
                ),
                 'columnKeys' => 
                array (
                  0 => 'created_timestamp',
                  1 => 'application_counter',
                ),
                 'fieldtype' => 'advancedManyToManyObjectRelation',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ObjectMetadata[]',
                 'enableBatchEdit' => NULL,
                 'allowMultipleAssignments' => NULL,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'relationType' => true,
                 'optimizedAdminLoading' => false,
                 'lazyLoading' => true,
                 'classes' => 
                array (
                ),
                 'pathFormatterClass' => '',
                 'name' => 'calculatedSegments',
                 'title' => 'Calculated Segments',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Authentication',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Authentication',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
                 'fieldtype' => 'text',
                 'html' => '<font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif"><span style="font-size: 13px;"><b>Authentication area groups all information needed to authenticate the customer</b></span></font><div style=""><ul style=""><li style=""><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif"><span style="font-size: 13px;">Password if set directly in Application</span></font></li><li style=""><font face="Open Sans, Helvetica Neue, helvetica, arial, verdana, sans-serif"><span style="font-size: 13px;">SSO Identities if profile is connected to other social profiles like Google, Twitter, etc.&nbsp;</span></font></li></ul></div>',
                 'renderingClass' => '',
                 'renderingData' => '',
                 'border' => false,
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => 'padding: 10px; background-color: #d9edf7; border-color: #bce8f1 !important; color: #31708f;',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                 'fieldtype' => 'password',
                 'width' => '',
                 'queryColumnType' => 'varchar(190)',
                 'columnType' => 'varchar(190)',
                 'phpdocType' => 'string',
                 'algorithm' => 'password_hash',
                 'salt' => '',
                 'saltlocation' => 'back',
                 'name' => 'password',
                 'title' => 'Password',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'visibleFields' => NULL,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'SsoIdentity',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'ssoIdentities',
                 'title' => 'SSO Identities',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'icon' => '/bundles/pimcorecustomermanagementframework/icons/customer.svg',
   'previewUrl' => '',
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
