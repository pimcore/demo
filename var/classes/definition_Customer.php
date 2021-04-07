<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- active [checkbox]
- gender [gender]
- firstname [firstname]
- lastname [lastname]
- company [input]
- email [email]
- street [input]
- zip [input]
- city [input]
- countryCode [country]
- phone [input]
- idEncoded [input]
- customerLanguage [language]
- newsletter [consent]
- newsletterConfirmed [newsletterConfirmed]
- newsletterConfirmToken [input]
- profiling [consent]
- manualSegments [advancedManyToManyObjectRelation]
- calculatedSegments [advancedManyToManyObjectRelation]
- password [password]
- ssoIdentities [manyToManyObjectRelation]
- passwordRecoveryToken [input]
- passwordRecoveryTokenDate [datetime]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'CU',
   'name' => 'Customer',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805483,
   'userOwner' => 2,
   'userModification' => 1,
   'parentClass' => '\\CustomerManagementFrameworkBundle\\Model\\AbstractCustomer\\DefaultAbstractUserawareCustomer',
   'implementsInterfaces' => '',
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
     'layout' => NULL,
     'border' => false,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
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
             'layout' => NULL,
             'border' => false,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
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
                 'columnLength' => '190',
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Firstname::__set_state(array(
                 'fieldtype' => 'firstname',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Lastname::__set_state(array(
                 'fieldtype' => 'lastname',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'company',
                 'title' => 'Company',
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              5 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Email::__set_state(array(
                 'fieldtype' => 'email',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              6 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              7 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              8 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              9 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Country::__set_state(array(
                 'fieldtype' => 'country',
                 'width' => '',
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
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'columnLength' => '190',
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              10 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              11 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              12 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Language::__set_state(array(
                 'fieldtype' => 'language',
                 'onlySystemLanguages' => false,
                 'options' =>
                array (
                  0 =>
                  array (
                    'key' => 'Afrikaans',
                    'value' => 'af',
                  ),
                  1 =>
                  array (
                    'key' => 'Afrikaans (Namibia)',
                    'value' => 'af_NA',
                  ),
                  2 =>
                  array (
                    'key' => 'Afrikaans (South Africa)',
                    'value' => 'af_ZA',
                  ),
                  3 =>
                  array (
                    'key' => 'Aghem',
                    'value' => 'agq',
                  ),
                  4 =>
                  array (
                    'key' => 'Aghem (Cameroon)',
                    'value' => 'agq_CM',
                  ),
                  5 =>
                  array (
                    'key' => 'Akan',
                    'value' => 'ak',
                  ),
                  6 =>
                  array (
                    'key' => 'Akan (Ghana)',
                    'value' => 'ak_GH',
                  ),
                  7 =>
                  array (
                    'key' => 'Albanian',
                    'value' => 'sq',
                  ),
                  8 =>
                  array (
                    'key' => 'Albanian (Albania)',
                    'value' => 'sq_AL',
                  ),
                  9 =>
                  array (
                    'key' => 'Albanian (Kosovo)',
                    'value' => 'sq_XK',
                  ),
                  10 =>
                  array (
                    'key' => 'Albanian (North Macedonia)',
                    'value' => 'sq_MK',
                  ),
                  11 =>
                  array (
                    'key' => 'Amharic',
                    'value' => 'am',
                  ),
                  12 =>
                  array (
                    'key' => 'Amharic (Ethiopia)',
                    'value' => 'am_ET',
                  ),
                  13 =>
                  array (
                    'key' => 'Arabic',
                    'value' => 'ar',
                  ),
                  14 =>
                  array (
                    'key' => 'Arabic (Algeria)',
                    'value' => 'ar_DZ',
                  ),
                  15 =>
                  array (
                    'key' => 'Arabic (Bahrain)',
                    'value' => 'ar_BH',
                  ),
                  16 =>
                  array (
                    'key' => 'Arabic (Chad)',
                    'value' => 'ar_TD',
                  ),
                  17 =>
                  array (
                    'key' => 'Arabic (Comoros)',
                    'value' => 'ar_KM',
                  ),
                  18 =>
                  array (
                    'key' => 'Arabic (Djibouti)',
                    'value' => 'ar_DJ',
                  ),
                  19 =>
                  array (
                    'key' => 'Arabic (Egypt)',
                    'value' => 'ar_EG',
                  ),
                  20 =>
                  array (
                    'key' => 'Arabic (Eritrea)',
                    'value' => 'ar_ER',
                  ),
                  21 =>
                  array (
                    'key' => 'Arabic (Iraq)',
                    'value' => 'ar_IQ',
                  ),
                  22 =>
                  array (
                    'key' => 'Arabic (Israel)',
                    'value' => 'ar_IL',
                  ),
                  23 =>
                  array (
                    'key' => 'Arabic (Jordan)',
                    'value' => 'ar_JO',
                  ),
                  24 =>
                  array (
                    'key' => 'Arabic (Kuwait)',
                    'value' => 'ar_KW',
                  ),
                  25 =>
                  array (
                    'key' => 'Arabic (Lebanon)',
                    'value' => 'ar_LB',
                  ),
                  26 =>
                  array (
                    'key' => 'Arabic (Libya)',
                    'value' => 'ar_LY',
                  ),
                  27 =>
                  array (
                    'key' => 'Arabic (Mauritania)',
                    'value' => 'ar_MR',
                  ),
                  28 =>
                  array (
                    'key' => 'Arabic (Morocco)',
                    'value' => 'ar_MA',
                  ),
                  29 =>
                  array (
                    'key' => 'Arabic (Oman)',
                    'value' => 'ar_OM',
                  ),
                  30 =>
                  array (
                    'key' => 'Arabic (Palestinian Territories)',
                    'value' => 'ar_PS',
                  ),
                  31 =>
                  array (
                    'key' => 'Arabic (Qatar)',
                    'value' => 'ar_QA',
                  ),
                  32 =>
                  array (
                    'key' => 'Arabic (Saudi Arabia)',
                    'value' => 'ar_SA',
                  ),
                  33 =>
                  array (
                    'key' => 'Arabic (Somalia)',
                    'value' => 'ar_SO',
                  ),
                  34 =>
                  array (
                    'key' => 'Arabic (South Sudan)',
                    'value' => 'ar_SS',
                  ),
                  35 =>
                  array (
                    'key' => 'Arabic (Sudan)',
                    'value' => 'ar_SD',
                  ),
                  36 =>
                  array (
                    'key' => 'Arabic (Syria)',
                    'value' => 'ar_SY',
                  ),
                  37 =>
                  array (
                    'key' => 'Arabic (Tunisia)',
                    'value' => 'ar_TN',
                  ),
                  38 =>
                  array (
                    'key' => 'Arabic (United Arab Emirates)',
                    'value' => 'ar_AE',
                  ),
                  39 =>
                  array (
                    'key' => 'Arabic (Western Sahara)',
                    'value' => 'ar_EH',
                  ),
                  40 =>
                  array (
                    'key' => 'Arabic (World)',
                    'value' => 'ar_001',
                  ),
                  41 =>
                  array (
                    'key' => 'Arabic (Yemen)',
                    'value' => 'ar_YE',
                  ),
                  42 =>
                  array (
                    'key' => 'Armenian',
                    'value' => 'hy',
                  ),
                  43 =>
                  array (
                    'key' => 'Armenian (Armenia)',
                    'value' => 'hy_AM',
                  ),
                  44 =>
                  array (
                    'key' => 'Assamese',
                    'value' => 'as',
                  ),
                  45 =>
                  array (
                    'key' => 'Assamese (India)',
                    'value' => 'as_IN',
                  ),
                  46 =>
                  array (
                    'key' => 'Asturian',
                    'value' => 'ast',
                  ),
                  47 =>
                  array (
                    'key' => 'Asturian (Spain)',
                    'value' => 'ast_ES',
                  ),
                  48 =>
                  array (
                    'key' => 'Asu',
                    'value' => 'asa',
                  ),
                  49 =>
                  array (
                    'key' => 'Asu (Tanzania)',
                    'value' => 'asa_TZ',
                  ),
                  50 =>
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az',
                  ),
                  51 =>
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az_Latn',
                  ),
                  52 =>
                  array (
                    'key' => 'Azerbaijani',
                    'value' => 'az_Cyrl',
                  ),
                  53 =>
                  array (
                    'key' => 'Azerbaijani (Azerbaijan)',
                    'value' => 'az_Latn_AZ',
                  ),
                  54 =>
                  array (
                    'key' => 'Azerbaijani (Azerbaijan)',
                    'value' => 'az_Cyrl_AZ',
                  ),
                  55 =>
                  array (
                    'key' => 'Bafia',
                    'value' => 'ksf',
                  ),
                  56 =>
                  array (
                    'key' => 'Bafia (Cameroon)',
                    'value' => 'ksf_CM',
                  ),
                  57 =>
                  array (
                    'key' => 'Bambara',
                    'value' => 'bm',
                  ),
                  58 =>
                  array (
                    'key' => 'Bambara (Mali)',
                    'value' => 'bm_ML',
                  ),
                  59 =>
                  array (
                    'key' => 'Bangla',
                    'value' => 'bn',
                  ),
                  60 =>
                  array (
                    'key' => 'Bangla (Bangladesh)',
                    'value' => 'bn_BD',
                  ),
                  61 =>
                  array (
                    'key' => 'Bangla (India)',
                    'value' => 'bn_IN',
                  ),
                  62 =>
                  array (
                    'key' => 'Basaa',
                    'value' => 'bas',
                  ),
                  63 =>
                  array (
                    'key' => 'Basaa (Cameroon)',
                    'value' => 'bas_CM',
                  ),
                  64 =>
                  array (
                    'key' => 'Basque',
                    'value' => 'eu',
                  ),
                  65 =>
                  array (
                    'key' => 'Basque (Spain)',
                    'value' => 'eu_ES',
                  ),
                  66 =>
                  array (
                    'key' => 'Belarusian',
                    'value' => 'be',
                  ),
                  67 =>
                  array (
                    'key' => 'Belarusian (Belarus)',
                    'value' => 'be_BY',
                  ),
                  68 =>
                  array (
                    'key' => 'Bemba',
                    'value' => 'bem',
                  ),
                  69 =>
                  array (
                    'key' => 'Bemba (Zambia)',
                    'value' => 'bem_ZM',
                  ),
                  70 =>
                  array (
                    'key' => 'Bena',
                    'value' => 'bez',
                  ),
                  71 =>
                  array (
                    'key' => 'Bena (Tanzania)',
                    'value' => 'bez_TZ',
                  ),
                  72 =>
                  array (
                    'key' => 'Bodo',
                    'value' => 'brx',
                  ),
                  73 =>
                  array (
                    'key' => 'Bodo (India)',
                    'value' => 'brx_IN',
                  ),
                  74 =>
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs',
                  ),
                  75 =>
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs_Cyrl',
                  ),
                  76 =>
                  array (
                    'key' => 'Bosnian',
                    'value' => 'bs_Latn',
                  ),
                  77 =>
                  array (
                    'key' => 'Bosnian (Bosnia & Herzegovina)',
                    'value' => 'bs_Cyrl_BA',
                  ),
                  78 =>
                  array (
                    'key' => 'Bosnian (Bosnia & Herzegovina)',
                    'value' => 'bs_Latn_BA',
                  ),
                  79 =>
                  array (
                    'key' => 'Breton',
                    'value' => 'br',
                  ),
                  80 =>
                  array (
                    'key' => 'Breton (France)',
                    'value' => 'br_FR',
                  ),
                  81 =>
                  array (
                    'key' => 'Bulgarian',
                    'value' => 'bg',
                  ),
                  82 =>
                  array (
                    'key' => 'Bulgarian (Bulgaria)',
                    'value' => 'bg_BG',
                  ),
                  83 =>
                  array (
                    'key' => 'Burmese',
                    'value' => 'my',
                  ),
                  84 =>
                  array (
                    'key' => 'Burmese (Myanmar (Burma))',
                    'value' => 'my_MM',
                  ),
                  85 =>
                  array (
                    'key' => 'Cantonese',
                    'value' => 'yue',
                  ),
                  86 =>
                  array (
                    'key' => 'Cantonese',
                    'value' => 'yue_Hans',
                  ),
                  87 =>
                  array (
                    'key' => 'Cantonese',
                    'value' => 'yue_Hant',
                  ),
                  88 =>
                  array (
                    'key' => 'Cantonese (China)',
                    'value' => 'yue_Hans_CN',
                  ),
                  89 =>
                  array (
                    'key' => 'Cantonese (Hong Kong SAR China)',
                    'value' => 'yue_Hant_HK',
                  ),
                  90 =>
                  array (
                    'key' => 'Catalan',
                    'value' => 'ca',
                  ),
                  91 =>
                  array (
                    'key' => 'Catalan (Andorra)',
                    'value' => 'ca_AD',
                  ),
                  92 =>
                  array (
                    'key' => 'Catalan (France)',
                    'value' => 'ca_FR',
                  ),
                  93 =>
                  array (
                    'key' => 'Catalan (Italy)',
                    'value' => 'ca_IT',
                  ),
                  94 =>
                  array (
                    'key' => 'Catalan (Spain)',
                    'value' => 'ca_ES',
                  ),
                  95 =>
                  array (
                    'key' => 'Cebuano',
                    'value' => 'ceb',
                  ),
                  96 =>
                  array (
                    'key' => 'Cebuano (Philippines)',
                    'value' => 'ceb_PH',
                  ),
                  97 =>
                  array (
                    'key' => 'Central Atlas Tamazight',
                    'value' => 'tzm',
                  ),
                  98 =>
                  array (
                    'key' => 'Central Atlas Tamazight (Morocco)',
                    'value' => 'tzm_MA',
                  ),
                  99 =>
                  array (
                    'key' => 'Central Kurdish',
                    'value' => 'ckb',
                  ),
                  100 =>
                  array (
                    'key' => 'Central Kurdish (Iran)',
                    'value' => 'ckb_IR',
                  ),
                  101 =>
                  array (
                    'key' => 'Central Kurdish (Iraq)',
                    'value' => 'ckb_IQ',
                  ),
                  102 =>
                  array (
                    'key' => 'Chakma',
                    'value' => 'ccp',
                  ),
                  103 =>
                  array (
                    'key' => 'Chakma (Bangladesh)',
                    'value' => 'ccp_BD',
                  ),
                  104 =>
                  array (
                    'key' => 'Chakma (India)',
                    'value' => 'ccp_IN',
                  ),
                  105 =>
                  array (
                    'key' => 'Chechen',
                    'value' => 'ce',
                  ),
                  106 =>
                  array (
                    'key' => 'Chechen (Russia)',
                    'value' => 'ce_RU',
                  ),
                  107 =>
                  array (
                    'key' => 'Cherokee',
                    'value' => 'chr',
                  ),
                  108 =>
                  array (
                    'key' => 'Cherokee (United States)',
                    'value' => 'chr_US',
                  ),
                  109 =>
                  array (
                    'key' => 'Chiga',
                    'value' => 'cgg',
                  ),
                  110 =>
                  array (
                    'key' => 'Chiga (Uganda)',
                    'value' => 'cgg_UG',
                  ),
                  111 =>
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh_Hans',
                  ),
                  112 =>
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh_Hant',
                  ),
                  113 =>
                  array (
                    'key' => 'Chinese',
                    'value' => 'zh',
                  ),
                  114 =>
                  array (
                    'key' => 'Chinese (China)',
                    'value' => 'zh_Hans_CN',
                  ),
                  115 =>
                  array (
                    'key' => 'Chinese (Hong Kong SAR China)',
                    'value' => 'zh_Hans_HK',
                  ),
                  116 =>
                  array (
                    'key' => 'Chinese (Hong Kong SAR China)',
                    'value' => 'zh_Hant_HK',
                  ),
                  117 =>
                  array (
                    'key' => 'Chinese (Macao SAR China)',
                    'value' => 'zh_Hant_MO',
                  ),
                  118 =>
                  array (
                    'key' => 'Chinese (Macao SAR China)',
                    'value' => 'zh_Hans_MO',
                  ),
                  119 =>
                  array (
                    'key' => 'Chinese (Singapore)',
                    'value' => 'zh_Hans_SG',
                  ),
                  120 =>
                  array (
                    'key' => 'Chinese (Taiwan)',
                    'value' => 'zh_Hant_TW',
                  ),
                  121 =>
                  array (
                    'key' => 'Colognian',
                    'value' => 'ksh',
                  ),
                  122 =>
                  array (
                    'key' => 'Colognian (Germany)',
                    'value' => 'ksh_DE',
                  ),
                  123 =>
                  array (
                    'key' => 'Cornish',
                    'value' => 'kw',
                  ),
                  124 =>
                  array (
                    'key' => 'Cornish (United Kingdom)',
                    'value' => 'kw_GB',
                  ),
                  125 =>
                  array (
                    'key' => 'Croatian',
                    'value' => 'hr',
                  ),
                  126 =>
                  array (
                    'key' => 'Croatian (Bosnia & Herzegovina)',
                    'value' => 'hr_BA',
                  ),
                  127 =>
                  array (
                    'key' => 'Croatian (Croatia)',
                    'value' => 'hr_HR',
                  ),
                  128 =>
                  array (
                    'key' => 'Czech',
                    'value' => 'cs',
                  ),
                  129 =>
                  array (
                    'key' => 'Czech (Czechia)',
                    'value' => 'cs_CZ',
                  ),
                  130 =>
                  array (
                    'key' => 'Danish',
                    'value' => 'da',
                  ),
                  131 =>
                  array (
                    'key' => 'Danish (Denmark)',
                    'value' => 'da_DK',
                  ),
                  132 =>
                  array (
                    'key' => 'Danish (Greenland)',
                    'value' => 'da_GL',
                  ),
                  133 =>
                  array (
                    'key' => 'Duala',
                    'value' => 'dua',
                  ),
                  134 =>
                  array (
                    'key' => 'Duala (Cameroon)',
                    'value' => 'dua_CM',
                  ),
                  135 =>
                  array (
                    'key' => 'Dutch',
                    'value' => 'nl',
                  ),
                  136 =>
                  array (
                    'key' => 'Dutch (Aruba)',
                    'value' => 'nl_AW',
                  ),
                  137 =>
                  array (
                    'key' => 'Dutch (Belgium)',
                    'value' => 'nl_BE',
                  ),
                  138 =>
                  array (
                    'key' => 'Dutch (Caribbean Netherlands)',
                    'value' => 'nl_BQ',
                  ),
                  139 =>
                  array (
                    'key' => 'Dutch (Curaçao)',
                    'value' => 'nl_CW',
                  ),
                  140 =>
                  array (
                    'key' => 'Dutch (Netherlands)',
                    'value' => 'nl_NL',
                  ),
                  141 =>
                  array (
                    'key' => 'Dutch (Sint Maarten)',
                    'value' => 'nl_SX',
                  ),
                  142 =>
                  array (
                    'key' => 'Dutch (Suriname)',
                    'value' => 'nl_SR',
                  ),
                  143 =>
                  array (
                    'key' => 'Dzongkha',
                    'value' => 'dz',
                  ),
                  144 =>
                  array (
                    'key' => 'Dzongkha (Bhutan)',
                    'value' => 'dz_BT',
                  ),
                  145 =>
                  array (
                    'key' => 'Embu',
                    'value' => 'ebu',
                  ),
                  146 =>
                  array (
                    'key' => 'Embu (Kenya)',
                    'value' => 'ebu_KE',
                  ),
                  147 =>
                  array (
                    'key' => 'English',
                    'value' => 'en',
                  ),
                  148 =>
                  array (
                    'key' => 'English (American Samoa)',
                    'value' => 'en_AS',
                  ),
                  149 =>
                  array (
                    'key' => 'English (Anguilla)',
                    'value' => 'en_AI',
                  ),
                  150 =>
                  array (
                    'key' => 'English (Antigua & Barbuda)',
                    'value' => 'en_AG',
                  ),
                  151 =>
                  array (
                    'key' => 'English (Australia)',
                    'value' => 'en_AU',
                  ),
                  152 =>
                  array (
                    'key' => 'English (Austria)',
                    'value' => 'en_AT',
                  ),
                  153 =>
                  array (
                    'key' => 'English (Bahamas)',
                    'value' => 'en_BS',
                  ),
                  154 =>
                  array (
                    'key' => 'English (Barbados)',
                    'value' => 'en_BB',
                  ),
                  155 =>
                  array (
                    'key' => 'English (Belgium)',
                    'value' => 'en_BE',
                  ),
                  156 =>
                  array (
                    'key' => 'English (Belize)',
                    'value' => 'en_BZ',
                  ),
                  157 =>
                  array (
                    'key' => 'English (Bermuda)',
                    'value' => 'en_BM',
                  ),
                  158 =>
                  array (
                    'key' => 'English (Botswana)',
                    'value' => 'en_BW',
                  ),
                  159 =>
                  array (
                    'key' => 'English (British Indian Ocean Territory)',
                    'value' => 'en_IO',
                  ),
                  160 =>
                  array (
                    'key' => 'English (British Virgin Islands)',
                    'value' => 'en_VG',
                  ),
                  161 =>
                  array (
                    'key' => 'English (Burundi)',
                    'value' => 'en_BI',
                  ),
                  162 =>
                  array (
                    'key' => 'English (Cameroon)',
                    'value' => 'en_CM',
                  ),
                  163 =>
                  array (
                    'key' => 'English (Canada)',
                    'value' => 'en_CA',
                  ),
                  164 =>
                  array (
                    'key' => 'English (Cayman Islands)',
                    'value' => 'en_KY',
                  ),
                  165 =>
                  array (
                    'key' => 'English (Christmas Island)',
                    'value' => 'en_CX',
                  ),
                  166 =>
                  array (
                    'key' => 'English (Cocos (Keeling) Islands)',
                    'value' => 'en_CC',
                  ),
                  167 =>
                  array (
                    'key' => 'English (Cook Islands)',
                    'value' => 'en_CK',
                  ),
                  168 =>
                  array (
                    'key' => 'English (Cyprus)',
                    'value' => 'en_CY',
                  ),
                  169 =>
                  array (
                    'key' => 'English (Denmark)',
                    'value' => 'en_DK',
                  ),
                  170 =>
                  array (
                    'key' => 'English (Diego Garcia)',
                    'value' => 'en_DG',
                  ),
                  171 =>
                  array (
                    'key' => 'English (Dominica)',
                    'value' => 'en_DM',
                  ),
                  172 =>
                  array (
                    'key' => 'English (Eritrea)',
                    'value' => 'en_ER',
                  ),
                  173 =>
                  array (
                    'key' => 'English (Eswatini)',
                    'value' => 'en_SZ',
                  ),
                  174 =>
                  array (
                    'key' => 'English (Europe)',
                    'value' => 'en_150',
                  ),
                  175 =>
                  array (
                    'key' => 'English (Falkland Islands)',
                    'value' => 'en_FK',
                  ),
                  176 =>
                  array (
                    'key' => 'English (Fiji)',
                    'value' => 'en_FJ',
                  ),
                  177 =>
                  array (
                    'key' => 'English (Finland)',
                    'value' => 'en_FI',
                  ),
                  178 =>
                  array (
                    'key' => 'English (Gambia)',
                    'value' => 'en_GM',
                  ),
                  179 =>
                  array (
                    'key' => 'English (Germany)',
                    'value' => 'en_DE',
                  ),
                  180 =>
                  array (
                    'key' => 'English (Ghana)',
                    'value' => 'en_GH',
                  ),
                  181 =>
                  array (
                    'key' => 'English (Gibraltar)',
                    'value' => 'en_GI',
                  ),
                  182 =>
                  array (
                    'key' => 'English (Grenada)',
                    'value' => 'en_GD',
                  ),
                  183 =>
                  array (
                    'key' => 'English (Guam)',
                    'value' => 'en_GU',
                  ),
                  184 =>
                  array (
                    'key' => 'English (Guernsey)',
                    'value' => 'en_GG',
                  ),
                  185 =>
                  array (
                    'key' => 'English (Guyana)',
                    'value' => 'en_GY',
                  ),
                  186 =>
                  array (
                    'key' => 'English (Hong Kong SAR China)',
                    'value' => 'en_HK',
                  ),
                  187 =>
                  array (
                    'key' => 'English (India)',
                    'value' => 'en_IN',
                  ),
                  188 =>
                  array (
                    'key' => 'English (Ireland)',
                    'value' => 'en_IE',
                  ),
                  189 =>
                  array (
                    'key' => 'English (Isle of Man)',
                    'value' => 'en_IM',
                  ),
                  190 =>
                  array (
                    'key' => 'English (Israel)',
                    'value' => 'en_IL',
                  ),
                  191 =>
                  array (
                    'key' => 'English (Jamaica)',
                    'value' => 'en_JM',
                  ),
                  192 =>
                  array (
                    'key' => 'English (Jersey)',
                    'value' => 'en_JE',
                  ),
                  193 =>
                  array (
                    'key' => 'English (Kenya)',
                    'value' => 'en_KE',
                  ),
                  194 =>
                  array (
                    'key' => 'English (Kiribati)',
                    'value' => 'en_KI',
                  ),
                  195 =>
                  array (
                    'key' => 'English (Lesotho)',
                    'value' => 'en_LS',
                  ),
                  196 =>
                  array (
                    'key' => 'English (Liberia)',
                    'value' => 'en_LR',
                  ),
                  197 =>
                  array (
                    'key' => 'English (Macao SAR China)',
                    'value' => 'en_MO',
                  ),
                  198 =>
                  array (
                    'key' => 'English (Madagascar)',
                    'value' => 'en_MG',
                  ),
                  199 =>
                  array (
                    'key' => 'English (Malawi)',
                    'value' => 'en_MW',
                  ),
                  200 =>
                  array (
                    'key' => 'English (Malaysia)',
                    'value' => 'en_MY',
                  ),
                  201 =>
                  array (
                    'key' => 'English (Malta)',
                    'value' => 'en_MT',
                  ),
                  202 =>
                  array (
                    'key' => 'English (Marshall Islands)',
                    'value' => 'en_MH',
                  ),
                  203 =>
                  array (
                    'key' => 'English (Mauritius)',
                    'value' => 'en_MU',
                  ),
                  204 =>
                  array (
                    'key' => 'English (Micronesia)',
                    'value' => 'en_FM',
                  ),
                  205 =>
                  array (
                    'key' => 'English (Montserrat)',
                    'value' => 'en_MS',
                  ),
                  206 =>
                  array (
                    'key' => 'English (Namibia)',
                    'value' => 'en_NA',
                  ),
                  207 =>
                  array (
                    'key' => 'English (Nauru)',
                    'value' => 'en_NR',
                  ),
                  208 =>
                  array (
                    'key' => 'English (Netherlands)',
                    'value' => 'en_NL',
                  ),
                  209 =>
                  array (
                    'key' => 'English (New Zealand)',
                    'value' => 'en_NZ',
                  ),
                  210 =>
                  array (
                    'key' => 'English (Nigeria)',
                    'value' => 'en_NG',
                  ),
                  211 =>
                  array (
                    'key' => 'English (Niue)',
                    'value' => 'en_NU',
                  ),
                  212 =>
                  array (
                    'key' => 'English (Norfolk Island)',
                    'value' => 'en_NF',
                  ),
                  213 =>
                  array (
                    'key' => 'English (Northern Mariana Islands)',
                    'value' => 'en_MP',
                  ),
                  214 =>
                  array (
                    'key' => 'English (Pakistan)',
                    'value' => 'en_PK',
                  ),
                  215 =>
                  array (
                    'key' => 'English (Palau)',
                    'value' => 'en_PW',
                  ),
                  216 =>
                  array (
                    'key' => 'English (Papua New Guinea)',
                    'value' => 'en_PG',
                  ),
                  217 =>
                  array (
                    'key' => 'English (Philippines)',
                    'value' => 'en_PH',
                  ),
                  218 =>
                  array (
                    'key' => 'English (Pitcairn Islands)',
                    'value' => 'en_PN',
                  ),
                  219 =>
                  array (
                    'key' => 'English (Puerto Rico)',
                    'value' => 'en_PR',
                  ),
                  220 =>
                  array (
                    'key' => 'English (Rwanda)',
                    'value' => 'en_RW',
                  ),
                  221 =>
                  array (
                    'key' => 'English (Samoa)',
                    'value' => 'en_WS',
                  ),
                  222 =>
                  array (
                    'key' => 'English (Seychelles)',
                    'value' => 'en_SC',
                  ),
                  223 =>
                  array (
                    'key' => 'English (Sierra Leone)',
                    'value' => 'en_SL',
                  ),
                  224 =>
                  array (
                    'key' => 'English (Singapore)',
                    'value' => 'en_SG',
                  ),
                  225 =>
                  array (
                    'key' => 'English (Sint Maarten)',
                    'value' => 'en_SX',
                  ),
                  226 =>
                  array (
                    'key' => 'English (Slovenia)',
                    'value' => 'en_SI',
                  ),
                  227 =>
                  array (
                    'key' => 'English (Solomon Islands)',
                    'value' => 'en_SB',
                  ),
                  228 =>
                  array (
                    'key' => 'English (South Africa)',
                    'value' => 'en_ZA',
                  ),
                  229 =>
                  array (
                    'key' => 'English (South Sudan)',
                    'value' => 'en_SS',
                  ),
                  230 =>
                  array (
                    'key' => 'English (St. Helena)',
                    'value' => 'en_SH',
                  ),
                  231 =>
                  array (
                    'key' => 'English (St. Kitts & Nevis)',
                    'value' => 'en_KN',
                  ),
                  232 =>
                  array (
                    'key' => 'English (St. Lucia)',
                    'value' => 'en_LC',
                  ),
                  233 =>
                  array (
                    'key' => 'English (St. Vincent & Grenadines)',
                    'value' => 'en_VC',
                  ),
                  234 =>
                  array (
                    'key' => 'English (Sudan)',
                    'value' => 'en_SD',
                  ),
                  235 =>
                  array (
                    'key' => 'English (Sweden)',
                    'value' => 'en_SE',
                  ),
                  236 =>
                  array (
                    'key' => 'English (Switzerland)',
                    'value' => 'en_CH',
                  ),
                  237 =>
                  array (
                    'key' => 'English (Tanzania)',
                    'value' => 'en_TZ',
                  ),
                  238 =>
                  array (
                    'key' => 'English (Tokelau)',
                    'value' => 'en_TK',
                  ),
                  239 =>
                  array (
                    'key' => 'English (Tonga)',
                    'value' => 'en_TO',
                  ),
                  240 =>
                  array (
                    'key' => 'English (Trinidad & Tobago)',
                    'value' => 'en_TT',
                  ),
                  241 =>
                  array (
                    'key' => 'English (Turks & Caicos Islands)',
                    'value' => 'en_TC',
                  ),
                  242 =>
                  array (
                    'key' => 'English (Tuvalu)',
                    'value' => 'en_TV',
                  ),
                  243 =>
                  array (
                    'key' => 'English (U.S. Outlying Islands)',
                    'value' => 'en_UM',
                  ),
                  244 =>
                  array (
                    'key' => 'English (U.S. Virgin Islands)',
                    'value' => 'en_VI',
                  ),
                  245 =>
                  array (
                    'key' => 'English (Uganda)',
                    'value' => 'en_UG',
                  ),
                  246 =>
                  array (
                    'key' => 'English (United Arab Emirates)',
                    'value' => 'en_AE',
                  ),
                  247 =>
                  array (
                    'key' => 'English (United Kingdom)',
                    'value' => 'en_GB',
                  ),
                  248 =>
                  array (
                    'key' => 'English (United States)',
                    'value' => 'en_US_POSIX',
                  ),
                  249 =>
                  array (
                    'key' => 'English (United States)',
                    'value' => 'en_US',
                  ),
                  250 =>
                  array (
                    'key' => 'English (Vanuatu)',
                    'value' => 'en_VU',
                  ),
                  251 =>
                  array (
                    'key' => 'English (World)',
                    'value' => 'en_001',
                  ),
                  252 =>
                  array (
                    'key' => 'English (Zambia)',
                    'value' => 'en_ZM',
                  ),
                  253 =>
                  array (
                    'key' => 'English (Zimbabwe)',
                    'value' => 'en_ZW',
                  ),
                  254 =>
                  array (
                    'key' => 'Esperanto',
                    'value' => 'eo',
                  ),
                  255 =>
                  array (
                    'key' => 'Esperanto (World)',
                    'value' => 'eo_001',
                  ),
                  256 =>
                  array (
                    'key' => 'Estonian',
                    'value' => 'et',
                  ),
                  257 =>
                  array (
                    'key' => 'Estonian (Estonia)',
                    'value' => 'et_EE',
                  ),
                  258 =>
                  array (
                    'key' => 'Ewe',
                    'value' => 'ee',
                  ),
                  259 =>
                  array (
                    'key' => 'Ewe (Ghana)',
                    'value' => 'ee_GH',
                  ),
                  260 =>
                  array (
                    'key' => 'Ewe (Togo)',
                    'value' => 'ee_TG',
                  ),
                  261 =>
                  array (
                    'key' => 'Ewondo',
                    'value' => 'ewo',
                  ),
                  262 =>
                  array (
                    'key' => 'Ewondo (Cameroon)',
                    'value' => 'ewo_CM',
                  ),
                  263 =>
                  array (
                    'key' => 'Faroese',
                    'value' => 'fo',
                  ),
                  264 =>
                  array (
                    'key' => 'Faroese (Denmark)',
                    'value' => 'fo_DK',
                  ),
                  265 =>
                  array (
                    'key' => 'Faroese (Faroe Islands)',
                    'value' => 'fo_FO',
                  ),
                  266 =>
                  array (
                    'key' => 'Filipino',
                    'value' => 'fil',
                  ),
                  267 =>
                  array (
                    'key' => 'Filipino (Philippines)',
                    'value' => 'fil_PH',
                  ),
                  268 =>
                  array (
                    'key' => 'Finnish',
                    'value' => 'fi',
                  ),
                  269 =>
                  array (
                    'key' => 'Finnish (Finland)',
                    'value' => 'fi_FI',
                  ),
                  270 =>
                  array (
                    'key' => 'French',
                    'value' => 'fr',
                  ),
                  271 =>
                  array (
                    'key' => 'French (Algeria)',
                    'value' => 'fr_DZ',
                  ),
                  272 =>
                  array (
                    'key' => 'French (Belgium)',
                    'value' => 'fr_BE',
                  ),
                  273 =>
                  array (
                    'key' => 'French (Benin)',
                    'value' => 'fr_BJ',
                  ),
                  274 =>
                  array (
                    'key' => 'French (Burkina Faso)',
                    'value' => 'fr_BF',
                  ),
                  275 =>
                  array (
                    'key' => 'French (Burundi)',
                    'value' => 'fr_BI',
                  ),
                  276 =>
                  array (
                    'key' => 'French (Cameroon)',
                    'value' => 'fr_CM',
                  ),
                  277 =>
                  array (
                    'key' => 'French (Canada)',
                    'value' => 'fr_CA',
                  ),
                  278 =>
                  array (
                    'key' => 'French (Central African Republic)',
                    'value' => 'fr_CF',
                  ),
                  279 =>
                  array (
                    'key' => 'French (Chad)',
                    'value' => 'fr_TD',
                  ),
                  280 =>
                  array (
                    'key' => 'French (Comoros)',
                    'value' => 'fr_KM',
                  ),
                  281 =>
                  array (
                    'key' => 'French (Congo - Brazzaville)',
                    'value' => 'fr_CG',
                  ),
                  282 =>
                  array (
                    'key' => 'French (Congo - Kinshasa)',
                    'value' => 'fr_CD',
                  ),
                  283 =>
                  array (
                    'key' => 'French (Côte d’Ivoire)',
                    'value' => 'fr_CI',
                  ),
                  284 =>
                  array (
                    'key' => 'French (Djibouti)',
                    'value' => 'fr_DJ',
                  ),
                  285 =>
                  array (
                    'key' => 'French (Equatorial Guinea)',
                    'value' => 'fr_GQ',
                  ),
                  286 =>
                  array (
                    'key' => 'French (France)',
                    'value' => 'fr_FR',
                  ),
                  287 =>
                  array (
                    'key' => 'French (French Guiana)',
                    'value' => 'fr_GF',
                  ),
                  288 =>
                  array (
                    'key' => 'French (French Polynesia)',
                    'value' => 'fr_PF',
                  ),
                  289 =>
                  array (
                    'key' => 'French (Gabon)',
                    'value' => 'fr_GA',
                  ),
                  290 =>
                  array (
                    'key' => 'French (Guadeloupe)',
                    'value' => 'fr_GP',
                  ),
                  291 =>
                  array (
                    'key' => 'French (Guinea)',
                    'value' => 'fr_GN',
                  ),
                  292 =>
                  array (
                    'key' => 'French (Haiti)',
                    'value' => 'fr_HT',
                  ),
                  293 =>
                  array (
                    'key' => 'French (Luxembourg)',
                    'value' => 'fr_LU',
                  ),
                  294 =>
                  array (
                    'key' => 'French (Madagascar)',
                    'value' => 'fr_MG',
                  ),
                  295 =>
                  array (
                    'key' => 'French (Mali)',
                    'value' => 'fr_ML',
                  ),
                  296 =>
                  array (
                    'key' => 'French (Martinique)',
                    'value' => 'fr_MQ',
                  ),
                  297 =>
                  array (
                    'key' => 'French (Mauritania)',
                    'value' => 'fr_MR',
                  ),
                  298 =>
                  array (
                    'key' => 'French (Mauritius)',
                    'value' => 'fr_MU',
                  ),
                  299 =>
                  array (
                    'key' => 'French (Mayotte)',
                    'value' => 'fr_YT',
                  ),
                  300 =>
                  array (
                    'key' => 'French (Monaco)',
                    'value' => 'fr_MC',
                  ),
                  301 =>
                  array (
                    'key' => 'French (Morocco)',
                    'value' => 'fr_MA',
                  ),
                  302 =>
                  array (
                    'key' => 'French (New Caledonia)',
                    'value' => 'fr_NC',
                  ),
                  303 =>
                  array (
                    'key' => 'French (Niger)',
                    'value' => 'fr_NE',
                  ),
                  304 =>
                  array (
                    'key' => 'French (Rwanda)',
                    'value' => 'fr_RW',
                  ),
                  305 =>
                  array (
                    'key' => 'French (Réunion)',
                    'value' => 'fr_RE',
                  ),
                  306 =>
                  array (
                    'key' => 'French (Senegal)',
                    'value' => 'fr_SN',
                  ),
                  307 =>
                  array (
                    'key' => 'French (Seychelles)',
                    'value' => 'fr_SC',
                  ),
                  308 =>
                  array (
                    'key' => 'French (St. Barthélemy)',
                    'value' => 'fr_BL',
                  ),
                  309 =>
                  array (
                    'key' => 'French (St. Martin)',
                    'value' => 'fr_MF',
                  ),
                  310 =>
                  array (
                    'key' => 'French (St. Pierre & Miquelon)',
                    'value' => 'fr_PM',
                  ),
                  311 =>
                  array (
                    'key' => 'French (Switzerland)',
                    'value' => 'fr_CH',
                  ),
                  312 =>
                  array (
                    'key' => 'French (Syria)',
                    'value' => 'fr_SY',
                  ),
                  313 =>
                  array (
                    'key' => 'French (Togo)',
                    'value' => 'fr_TG',
                  ),
                  314 =>
                  array (
                    'key' => 'French (Tunisia)',
                    'value' => 'fr_TN',
                  ),
                  315 =>
                  array (
                    'key' => 'French (Vanuatu)',
                    'value' => 'fr_VU',
                  ),
                  316 =>
                  array (
                    'key' => 'French (Wallis & Futuna)',
                    'value' => 'fr_WF',
                  ),
                  317 =>
                  array (
                    'key' => 'Friulian',
                    'value' => 'fur',
                  ),
                  318 =>
                  array (
                    'key' => 'Friulian (Italy)',
                    'value' => 'fur_IT',
                  ),
                  319 =>
                  array (
                    'key' => 'Fulah',
                    'value' => 'ff_Latn',
                  ),
                  320 =>
                  array (
                    'key' => 'Fulah',
                    'value' => 'ff',
                  ),
                  321 =>
                  array (
                    'key' => 'Fulah (Burkina Faso)',
                    'value' => 'ff_Latn_BF',
                  ),
                  322 =>
                  array (
                    'key' => 'Fulah (Cameroon)',
                    'value' => 'ff_Latn_CM',
                  ),
                  323 =>
                  array (
                    'key' => 'Fulah (Gambia)',
                    'value' => 'ff_Latn_GM',
                  ),
                  324 =>
                  array (
                    'key' => 'Fulah (Ghana)',
                    'value' => 'ff_Latn_GH',
                  ),
                  325 =>
                  array (
                    'key' => 'Fulah (Guinea)',
                    'value' => 'ff_Latn_GN',
                  ),
                  326 =>
                  array (
                    'key' => 'Fulah (Guinea-Bissau)',
                    'value' => 'ff_Latn_GW',
                  ),
                  327 =>
                  array (
                    'key' => 'Fulah (Liberia)',
                    'value' => 'ff_Latn_LR',
                  ),
                  328 =>
                  array (
                    'key' => 'Fulah (Mauritania)',
                    'value' => 'ff_Latn_MR',
                  ),
                  329 =>
                  array (
                    'key' => 'Fulah (Niger)',
                    'value' => 'ff_Latn_NE',
                  ),
                  330 =>
                  array (
                    'key' => 'Fulah (Nigeria)',
                    'value' => 'ff_Latn_NG',
                  ),
                  331 =>
                  array (
                    'key' => 'Fulah (Senegal)',
                    'value' => 'ff_Latn_SN',
                  ),
                  332 =>
                  array (
                    'key' => 'Fulah (Sierra Leone)',
                    'value' => 'ff_Latn_SL',
                  ),
                  333 =>
                  array (
                    'key' => 'Galician',
                    'value' => 'gl',
                  ),
                  334 =>
                  array (
                    'key' => 'Galician (Spain)',
                    'value' => 'gl_ES',
                  ),
                  335 =>
                  array (
                    'key' => 'Ganda',
                    'value' => 'lg',
                  ),
                  336 =>
                  array (
                    'key' => 'Ganda (Uganda)',
                    'value' => 'lg_UG',
                  ),
                  337 =>
                  array (
                    'key' => 'Georgian',
                    'value' => 'ka',
                  ),
                  338 =>
                  array (
                    'key' => 'Georgian (Georgia)',
                    'value' => 'ka_GE',
                  ),
                  339 =>
                  array (
                    'key' => 'German',
                    'value' => 'de',
                  ),
                  340 =>
                  array (
                    'key' => 'German (Austria)',
                    'value' => 'de_AT',
                  ),
                  341 =>
                  array (
                    'key' => 'German (Belgium)',
                    'value' => 'de_BE',
                  ),
                  342 =>
                  array (
                    'key' => 'German (Germany)',
                    'value' => 'de_DE',
                  ),
                  343 =>
                  array (
                    'key' => 'German (Italy)',
                    'value' => 'de_IT',
                  ),
                  344 =>
                  array (
                    'key' => 'German (Liechtenstein)',
                    'value' => 'de_LI',
                  ),
                  345 =>
                  array (
                    'key' => 'German (Luxembourg)',
                    'value' => 'de_LU',
                  ),
                  346 =>
                  array (
                    'key' => 'German (Switzerland)',
                    'value' => 'de_CH',
                  ),
                  347 =>
                  array (
                    'key' => 'Greek',
                    'value' => 'el',
                  ),
                  348 =>
                  array (
                    'key' => 'Greek (Cyprus)',
                    'value' => 'el_CY',
                  ),
                  349 =>
                  array (
                    'key' => 'Greek (Greece)',
                    'value' => 'el_GR',
                  ),
                  350 =>
                  array (
                    'key' => 'Gujarati',
                    'value' => 'gu',
                  ),
                  351 =>
                  array (
                    'key' => 'Gujarati (India)',
                    'value' => 'gu_IN',
                  ),
                  352 =>
                  array (
                    'key' => 'Gusii',
                    'value' => 'guz',
                  ),
                  353 =>
                  array (
                    'key' => 'Gusii (Kenya)',
                    'value' => 'guz_KE',
                  ),
                  354 =>
                  array (
                    'key' => 'Hausa',
                    'value' => 'ha',
                  ),
                  355 =>
                  array (
                    'key' => 'Hausa (Ghana)',
                    'value' => 'ha_GH',
                  ),
                  356 =>
                  array (
                    'key' => 'Hausa (Niger)',
                    'value' => 'ha_NE',
                  ),
                  357 =>
                  array (
                    'key' => 'Hausa (Nigeria)',
                    'value' => 'ha_NG',
                  ),
                  358 =>
                  array (
                    'key' => 'Hawaiian',
                    'value' => 'haw',
                  ),
                  359 =>
                  array (
                    'key' => 'Hawaiian (United States)',
                    'value' => 'haw_US',
                  ),
                  360 =>
                  array (
                    'key' => 'Hebrew',
                    'value' => 'he',
                  ),
                  361 =>
                  array (
                    'key' => 'Hebrew (Israel)',
                    'value' => 'he_IL',
                  ),
                  362 =>
                  array (
                    'key' => 'Hindi',
                    'value' => 'hi',
                  ),
                  363 =>
                  array (
                    'key' => 'Hindi (India)',
                    'value' => 'hi_IN',
                  ),
                  364 =>
                  array (
                    'key' => 'Hungarian',
                    'value' => 'hu',
                  ),
                  365 =>
                  array (
                    'key' => 'Hungarian (Hungary)',
                    'value' => 'hu_HU',
                  ),
                  366 =>
                  array (
                    'key' => 'Icelandic',
                    'value' => 'is',
                  ),
                  367 =>
                  array (
                    'key' => 'Icelandic (Iceland)',
                    'value' => 'is_IS',
                  ),
                  368 =>
                  array (
                    'key' => 'Igbo',
                    'value' => 'ig',
                  ),
                  369 =>
                  array (
                    'key' => 'Igbo (Nigeria)',
                    'value' => 'ig_NG',
                  ),
                  370 =>
                  array (
                    'key' => 'Inari Sami',
                    'value' => 'smn',
                  ),
                  371 =>
                  array (
                    'key' => 'Inari Sami (Finland)',
                    'value' => 'smn_FI',
                  ),
                  372 =>
                  array (
                    'key' => 'Indonesian',
                    'value' => 'id',
                  ),
                  373 =>
                  array (
                    'key' => 'Indonesian (Indonesia)',
                    'value' => 'id_ID',
                  ),
                  374 =>
                  array (
                    'key' => 'Interlingua',
                    'value' => 'ia',
                  ),
                  375 =>
                  array (
                    'key' => 'Interlingua (World)',
                    'value' => 'ia_001',
                  ),
                  376 =>
                  array (
                    'key' => 'Irish',
                    'value' => 'ga',
                  ),
                  377 =>
                  array (
                    'key' => 'Irish (Ireland)',
                    'value' => 'ga_IE',
                  ),
                  378 =>
                  array (
                    'key' => 'Irish (United Kingdom)',
                    'value' => 'ga_GB',
                  ),
                  379 =>
                  array (
                    'key' => 'Italian',
                    'value' => 'it',
                  ),
                  380 =>
                  array (
                    'key' => 'Italian (Italy)',
                    'value' => 'it_IT',
                  ),
                  381 =>
                  array (
                    'key' => 'Italian (San Marino)',
                    'value' => 'it_SM',
                  ),
                  382 =>
                  array (
                    'key' => 'Italian (Switzerland)',
                    'value' => 'it_CH',
                  ),
                  383 =>
                  array (
                    'key' => 'Italian (Vatican City)',
                    'value' => 'it_VA',
                  ),
                  384 =>
                  array (
                    'key' => 'Japanese',
                    'value' => 'ja',
                  ),
                  385 =>
                  array (
                    'key' => 'Japanese (Japan)',
                    'value' => 'ja_JP',
                  ),
                  386 =>
                  array (
                    'key' => 'Javanese',
                    'value' => 'jv',
                  ),
                  387 =>
                  array (
                    'key' => 'Javanese (Indonesia)',
                    'value' => 'jv_ID',
                  ),
                  388 =>
                  array (
                    'key' => 'Jola-Fonyi',
                    'value' => 'dyo',
                  ),
                  389 =>
                  array (
                    'key' => 'Jola-Fonyi (Senegal)',
                    'value' => 'dyo_SN',
                  ),
                  390 =>
                  array (
                    'key' => 'Kabuverdianu',
                    'value' => 'kea',
                  ),
                  391 =>
                  array (
                    'key' => 'Kabuverdianu (Cape Verde)',
                    'value' => 'kea_CV',
                  ),
                  392 =>
                  array (
                    'key' => 'Kabyle',
                    'value' => 'kab',
                  ),
                  393 =>
                  array (
                    'key' => 'Kabyle (Algeria)',
                    'value' => 'kab_DZ',
                  ),
                  394 =>
                  array (
                    'key' => 'Kako',
                    'value' => 'kkj',
                  ),
                  395 =>
                  array (
                    'key' => 'Kako (Cameroon)',
                    'value' => 'kkj_CM',
                  ),
                  396 =>
                  array (
                    'key' => 'Kalaallisut',
                    'value' => 'kl',
                  ),
                  397 =>
                  array (
                    'key' => 'Kalaallisut (Greenland)',
                    'value' => 'kl_GL',
                  ),
                  398 =>
                  array (
                    'key' => 'Kalenjin',
                    'value' => 'kln',
                  ),
                  399 =>
                  array (
                    'key' => 'Kalenjin (Kenya)',
                    'value' => 'kln_KE',
                  ),
                  400 =>
                  array (
                    'key' => 'Kamba',
                    'value' => 'kam',
                  ),
                  401 =>
                  array (
                    'key' => 'Kamba (Kenya)',
                    'value' => 'kam_KE',
                  ),
                  402 =>
                  array (
                    'key' => 'Kannada',
                    'value' => 'kn',
                  ),
                  403 =>
                  array (
                    'key' => 'Kannada (India)',
                    'value' => 'kn_IN',
                  ),
                  404 =>
                  array (
                    'key' => 'Kashmiri',
                    'value' => 'ks',
                  ),
                  405 =>
                  array (
                    'key' => 'Kashmiri (India)',
                    'value' => 'ks_IN',
                  ),
                  406 =>
                  array (
                    'key' => 'Kazakh',
                    'value' => 'kk',
                  ),
                  407 =>
                  array (
                    'key' => 'Kazakh (Kazakhstan)',
                    'value' => 'kk_KZ',
                  ),
                  408 =>
                  array (
                    'key' => 'Khmer',
                    'value' => 'km',
                  ),
                  409 =>
                  array (
                    'key' => 'Khmer (Cambodia)',
                    'value' => 'km_KH',
                  ),
                  410 =>
                  array (
                    'key' => 'Kikuyu',
                    'value' => 'ki',
                  ),
                  411 =>
                  array (
                    'key' => 'Kikuyu (Kenya)',
                    'value' => 'ki_KE',
                  ),
                  412 =>
                  array (
                    'key' => 'Kinyarwanda',
                    'value' => 'rw',
                  ),
                  413 =>
                  array (
                    'key' => 'Kinyarwanda (Rwanda)',
                    'value' => 'rw_RW',
                  ),
                  414 =>
                  array (
                    'key' => 'Konkani',
                    'value' => 'kok',
                  ),
                  415 =>
                  array (
                    'key' => 'Konkani (India)',
                    'value' => 'kok_IN',
                  ),
                  416 =>
                  array (
                    'key' => 'Korean',
                    'value' => 'ko',
                  ),
                  417 =>
                  array (
                    'key' => 'Korean (North Korea)',
                    'value' => 'ko_KP',
                  ),
                  418 =>
                  array (
                    'key' => 'Korean (South Korea)',
                    'value' => 'ko_KR',
                  ),
                  419 =>
                  array (
                    'key' => 'Koyra Chiini',
                    'value' => 'khq',
                  ),
                  420 =>
                  array (
                    'key' => 'Koyra Chiini (Mali)',
                    'value' => 'khq_ML',
                  ),
                  421 =>
                  array (
                    'key' => 'Koyraboro Senni',
                    'value' => 'ses',
                  ),
                  422 =>
                  array (
                    'key' => 'Koyraboro Senni (Mali)',
                    'value' => 'ses_ML',
                  ),
                  423 =>
                  array (
                    'key' => 'Kurdish',
                    'value' => 'ku',
                  ),
                  424 =>
                  array (
                    'key' => 'Kurdish (Turkey)',
                    'value' => 'ku_TR',
                  ),
                  425 =>
                  array (
                    'key' => 'Kwasio',
                    'value' => 'nmg',
                  ),
                  426 =>
                  array (
                    'key' => 'Kwasio (Cameroon)',
                    'value' => 'nmg_CM',
                  ),
                  427 =>
                  array (
                    'key' => 'Kyrgyz',
                    'value' => 'ky',
                  ),
                  428 =>
                  array (
                    'key' => 'Kyrgyz (Kyrgyzstan)',
                    'value' => 'ky_KG',
                  ),
                  429 =>
                  array (
                    'key' => 'Lakota',
                    'value' => 'lkt',
                  ),
                  430 =>
                  array (
                    'key' => 'Lakota (United States)',
                    'value' => 'lkt_US',
                  ),
                  431 =>
                  array (
                    'key' => 'Langi',
                    'value' => 'lag',
                  ),
                  432 =>
                  array (
                    'key' => 'Langi (Tanzania)',
                    'value' => 'lag_TZ',
                  ),
                  433 =>
                  array (
                    'key' => 'Lao',
                    'value' => 'lo',
                  ),
                  434 =>
                  array (
                    'key' => 'Lao (Laos)',
                    'value' => 'lo_LA',
                  ),
                  435 =>
                  array (
                    'key' => 'Latvian',
                    'value' => 'lv',
                  ),
                  436 =>
                  array (
                    'key' => 'Latvian (Latvia)',
                    'value' => 'lv_LV',
                  ),
                  437 =>
                  array (
                    'key' => 'Lingala',
                    'value' => 'ln',
                  ),
                  438 =>
                  array (
                    'key' => 'Lingala (Angola)',
                    'value' => 'ln_AO',
                  ),
                  439 =>
                  array (
                    'key' => 'Lingala (Central African Republic)',
                    'value' => 'ln_CF',
                  ),
                  440 =>
                  array (
                    'key' => 'Lingala (Congo - Brazzaville)',
                    'value' => 'ln_CG',
                  ),
                  441 =>
                  array (
                    'key' => 'Lingala (Congo - Kinshasa)',
                    'value' => 'ln_CD',
                  ),
                  442 =>
                  array (
                    'key' => 'Lithuanian',
                    'value' => 'lt',
                  ),
                  443 =>
                  array (
                    'key' => 'Lithuanian (Lithuania)',
                    'value' => 'lt_LT',
                  ),
                  444 =>
                  array (
                    'key' => 'Low German',
                    'value' => 'nds',
                  ),
                  445 =>
                  array (
                    'key' => 'Low German (Germany)',
                    'value' => 'nds_DE',
                  ),
                  446 =>
                  array (
                    'key' => 'Low German (Netherlands)',
                    'value' => 'nds_NL',
                  ),
                  447 =>
                  array (
                    'key' => 'Lower Sorbian',
                    'value' => 'dsb',
                  ),
                  448 =>
                  array (
                    'key' => 'Lower Sorbian (Germany)',
                    'value' => 'dsb_DE',
                  ),
                  449 =>
                  array (
                    'key' => 'Luba-Katanga',
                    'value' => 'lu',
                  ),
                  450 =>
                  array (
                    'key' => 'Luba-Katanga (Congo - Kinshasa)',
                    'value' => 'lu_CD',
                  ),
                  451 =>
                  array (
                    'key' => 'Luo',
                    'value' => 'luo',
                  ),
                  452 =>
                  array (
                    'key' => 'Luo (Kenya)',
                    'value' => 'luo_KE',
                  ),
                  453 =>
                  array (
                    'key' => 'Luxembourgish',
                    'value' => 'lb',
                  ),
                  454 =>
                  array (
                    'key' => 'Luxembourgish (Luxembourg)',
                    'value' => 'lb_LU',
                  ),
                  455 =>
                  array (
                    'key' => 'Luyia',
                    'value' => 'luy',
                  ),
                  456 =>
                  array (
                    'key' => 'Luyia (Kenya)',
                    'value' => 'luy_KE',
                  ),
                  457 =>
                  array (
                    'key' => 'Macedonian',
                    'value' => 'mk',
                  ),
                  458 =>
                  array (
                    'key' => 'Macedonian (North Macedonia)',
                    'value' => 'mk_MK',
                  ),
                  459 =>
                  array (
                    'key' => 'Machame',
                    'value' => 'jmc',
                  ),
                  460 =>
                  array (
                    'key' => 'Machame (Tanzania)',
                    'value' => 'jmc_TZ',
                  ),
                  461 =>
                  array (
                    'key' => 'Makhuwa-Meetto',
                    'value' => 'mgh',
                  ),
                  462 =>
                  array (
                    'key' => 'Makhuwa-Meetto (Mozambique)',
                    'value' => 'mgh_MZ',
                  ),
                  463 =>
                  array (
                    'key' => 'Makonde',
                    'value' => 'kde',
                  ),
                  464 =>
                  array (
                    'key' => 'Makonde (Tanzania)',
                    'value' => 'kde_TZ',
                  ),
                  465 =>
                  array (
                    'key' => 'Malagasy',
                    'value' => 'mg',
                  ),
                  466 =>
                  array (
                    'key' => 'Malagasy (Madagascar)',
                    'value' => 'mg_MG',
                  ),
                  467 =>
                  array (
                    'key' => 'Malay',
                    'value' => 'ms',
                  ),
                  468 =>
                  array (
                    'key' => 'Malay (Brunei)',
                    'value' => 'ms_BN',
                  ),
                  469 =>
                  array (
                    'key' => 'Malay (Malaysia)',
                    'value' => 'ms_MY',
                  ),
                  470 =>
                  array (
                    'key' => 'Malay (Singapore)',
                    'value' => 'ms_SG',
                  ),
                  471 =>
                  array (
                    'key' => 'Malayalam',
                    'value' => 'ml',
                  ),
                  472 =>
                  array (
                    'key' => 'Malayalam (India)',
                    'value' => 'ml_IN',
                  ),
                  473 =>
                  array (
                    'key' => 'Maltese',
                    'value' => 'mt',
                  ),
                  474 =>
                  array (
                    'key' => 'Maltese (Malta)',
                    'value' => 'mt_MT',
                  ),
                  475 =>
                  array (
                    'key' => 'Manx',
                    'value' => 'gv',
                  ),
                  476 =>
                  array (
                    'key' => 'Manx (Isle of Man)',
                    'value' => 'gv_IM',
                  ),
                  477 =>
                  array (
                    'key' => 'Maori',
                    'value' => 'mi',
                  ),
                  478 =>
                  array (
                    'key' => 'Maori (New Zealand)',
                    'value' => 'mi_NZ',
                  ),
                  479 =>
                  array (
                    'key' => 'Marathi',
                    'value' => 'mr',
                  ),
                  480 =>
                  array (
                    'key' => 'Marathi (India)',
                    'value' => 'mr_IN',
                  ),
                  481 =>
                  array (
                    'key' => 'Masai',
                    'value' => 'mas',
                  ),
                  482 =>
                  array (
                    'key' => 'Masai (Kenya)',
                    'value' => 'mas_KE',
                  ),
                  483 =>
                  array (
                    'key' => 'Masai (Tanzania)',
                    'value' => 'mas_TZ',
                  ),
                  484 =>
                  array (
                    'key' => 'Mazanderani',
                    'value' => 'mzn',
                  ),
                  485 =>
                  array (
                    'key' => 'Mazanderani (Iran)',
                    'value' => 'mzn_IR',
                  ),
                  486 =>
                  array (
                    'key' => 'Meru',
                    'value' => 'mer',
                  ),
                  487 =>
                  array (
                    'key' => 'Meru (Kenya)',
                    'value' => 'mer_KE',
                  ),
                  488 =>
                  array (
                    'key' => 'Metaʼ',
                    'value' => 'mgo',
                  ),
                  489 =>
                  array (
                    'key' => 'Metaʼ (Cameroon)',
                    'value' => 'mgo_CM',
                  ),
                  490 =>
                  array (
                    'key' => 'Mongolian',
                    'value' => 'mn',
                  ),
                  491 =>
                  array (
                    'key' => 'Mongolian (Mongolia)',
                    'value' => 'mn_MN',
                  ),
                  492 =>
                  array (
                    'key' => 'Morisyen',
                    'value' => 'mfe',
                  ),
                  493 =>
                  array (
                    'key' => 'Morisyen (Mauritius)',
                    'value' => 'mfe_MU',
                  ),
                  494 =>
                  array (
                    'key' => 'Mundang',
                    'value' => 'mua',
                  ),
                  495 =>
                  array (
                    'key' => 'Mundang (Cameroon)',
                    'value' => 'mua_CM',
                  ),
                  496 =>
                  array (
                    'key' => 'Nama',
                    'value' => 'naq',
                  ),
                  497 =>
                  array (
                    'key' => 'Nama (Namibia)',
                    'value' => 'naq_NA',
                  ),
                  498 =>
                  array (
                    'key' => 'Nepali',
                    'value' => 'ne',
                  ),
                  499 =>
                  array (
                    'key' => 'Nepali (India)',
                    'value' => 'ne_IN',
                  ),
                  500 =>
                  array (
                    'key' => 'Nepali (Nepal)',
                    'value' => 'ne_NP',
                  ),
                  501 =>
                  array (
                    'key' => 'Ngiemboon',
                    'value' => 'nnh',
                  ),
                  502 =>
                  array (
                    'key' => 'Ngiemboon (Cameroon)',
                    'value' => 'nnh_CM',
                  ),
                  503 =>
                  array (
                    'key' => 'Ngomba',
                    'value' => 'jgo',
                  ),
                  504 =>
                  array (
                    'key' => 'Ngomba (Cameroon)',
                    'value' => 'jgo_CM',
                  ),
                  505 =>
                  array (
                    'key' => 'North Ndebele',
                    'value' => 'nd',
                  ),
                  506 =>
                  array (
                    'key' => 'North Ndebele (Zimbabwe)',
                    'value' => 'nd_ZW',
                  ),
                  507 =>
                  array (
                    'key' => 'Northern Luri',
                    'value' => 'lrc',
                  ),
                  508 =>
                  array (
                    'key' => 'Northern Luri (Iran)',
                    'value' => 'lrc_IR',
                  ),
                  509 =>
                  array (
                    'key' => 'Northern Luri (Iraq)',
                    'value' => 'lrc_IQ',
                  ),
                  510 =>
                  array (
                    'key' => 'Northern Sami',
                    'value' => 'se',
                  ),
                  511 =>
                  array (
                    'key' => 'Northern Sami (Finland)',
                    'value' => 'se_FI',
                  ),
                  512 =>
                  array (
                    'key' => 'Northern Sami (Norway)',
                    'value' => 'se_NO',
                  ),
                  513 =>
                  array (
                    'key' => 'Northern Sami (Sweden)',
                    'value' => 'se_SE',
                  ),
                  514 =>
                  array (
                    'key' => 'Norwegian Bokmål',
                    'value' => 'nb',
                  ),
                  515 =>
                  array (
                    'key' => 'Norwegian Bokmål (Norway)',
                    'value' => 'nb_NO',
                  ),
                  516 =>
                  array (
                    'key' => 'Norwegian Bokmål (Svalbard & Jan Mayen)',
                    'value' => 'nb_SJ',
                  ),
                  517 =>
                  array (
                    'key' => 'Norwegian Nynorsk',
                    'value' => 'nn',
                  ),
                  518 =>
                  array (
                    'key' => 'Norwegian Nynorsk (Norway)',
                    'value' => 'nn_NO',
                  ),
                  519 =>
                  array (
                    'key' => 'Nuer',
                    'value' => 'nus',
                  ),
                  520 =>
                  array (
                    'key' => 'Nuer (South Sudan)',
                    'value' => 'nus_SS',
                  ),
                  521 =>
                  array (
                    'key' => 'Nyankole',
                    'value' => 'nyn',
                  ),
                  522 =>
                  array (
                    'key' => 'Nyankole (Uganda)',
                    'value' => 'nyn_UG',
                  ),
                  523 =>
                  array (
                    'key' => 'Odia',
                    'value' => 'or',
                  ),
                  524 =>
                  array (
                    'key' => 'Odia (India)',
                    'value' => 'or_IN',
                  ),
                  525 =>
                  array (
                    'key' => 'Oromo',
                    'value' => 'om',
                  ),
                  526 =>
                  array (
                    'key' => 'Oromo (Ethiopia)',
                    'value' => 'om_ET',
                  ),
                  527 =>
                  array (
                    'key' => 'Oromo (Kenya)',
                    'value' => 'om_KE',
                  ),
                  528 =>
                  array (
                    'key' => 'Ossetic',
                    'value' => 'os',
                  ),
                  529 =>
                  array (
                    'key' => 'Ossetic (Georgia)',
                    'value' => 'os_GE',
                  ),
                  530 =>
                  array (
                    'key' => 'Ossetic (Russia)',
                    'value' => 'os_RU',
                  ),
                  531 =>
                  array (
                    'key' => 'Pashto',
                    'value' => 'ps',
                  ),
                  532 =>
                  array (
                    'key' => 'Pashto (Afghanistan)',
                    'value' => 'ps_AF',
                  ),
                  533 =>
                  array (
                    'key' => 'Pashto (Pakistan)',
                    'value' => 'ps_PK',
                  ),
                  534 =>
                  array (
                    'key' => 'Persian',
                    'value' => 'fa',
                  ),
                  535 =>
                  array (
                    'key' => 'Persian (Afghanistan)',
                    'value' => 'fa_AF',
                  ),
                  536 =>
                  array (
                    'key' => 'Persian (Iran)',
                    'value' => 'fa_IR',
                  ),
                  537 =>
                  array (
                    'key' => 'Polish',
                    'value' => 'pl',
                  ),
                  538 =>
                  array (
                    'key' => 'Polish (Poland)',
                    'value' => 'pl_PL',
                  ),
                  539 =>
                  array (
                    'key' => 'Portuguese',
                    'value' => 'pt',
                  ),
                  540 =>
                  array (
                    'key' => 'Portuguese (Angola)',
                    'value' => 'pt_AO',
                  ),
                  541 =>
                  array (
                    'key' => 'Portuguese (Brazil)',
                    'value' => 'pt_BR',
                  ),
                  542 =>
                  array (
                    'key' => 'Portuguese (Cape Verde)',
                    'value' => 'pt_CV',
                  ),
                  543 =>
                  array (
                    'key' => 'Portuguese (Equatorial Guinea)',
                    'value' => 'pt_GQ',
                  ),
                  544 =>
                  array (
                    'key' => 'Portuguese (Guinea-Bissau)',
                    'value' => 'pt_GW',
                  ),
                  545 =>
                  array (
                    'key' => 'Portuguese (Luxembourg)',
                    'value' => 'pt_LU',
                  ),
                  546 =>
                  array (
                    'key' => 'Portuguese (Macao SAR China)',
                    'value' => 'pt_MO',
                  ),
                  547 =>
                  array (
                    'key' => 'Portuguese (Mozambique)',
                    'value' => 'pt_MZ',
                  ),
                  548 =>
                  array (
                    'key' => 'Portuguese (Portugal)',
                    'value' => 'pt_PT',
                  ),
                  549 =>
                  array (
                    'key' => 'Portuguese (Switzerland)',
                    'value' => 'pt_CH',
                  ),
                  550 =>
                  array (
                    'key' => 'Portuguese (São Tomé & Príncipe)',
                    'value' => 'pt_ST',
                  ),
                  551 =>
                  array (
                    'key' => 'Portuguese (Timor-Leste)',
                    'value' => 'pt_TL',
                  ),
                  552 =>
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa_Guru',
                  ),
                  553 =>
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa_Arab',
                  ),
                  554 =>
                  array (
                    'key' => 'Punjabi',
                    'value' => 'pa',
                  ),
                  555 =>
                  array (
                    'key' => 'Punjabi (India)',
                    'value' => 'pa_Guru_IN',
                  ),
                  556 =>
                  array (
                    'key' => 'Punjabi (Pakistan)',
                    'value' => 'pa_Arab_PK',
                  ),
                  557 =>
                  array (
                    'key' => 'Quechua',
                    'value' => 'qu',
                  ),
                  558 =>
                  array (
                    'key' => 'Quechua (Bolivia)',
                    'value' => 'qu_BO',
                  ),
                  559 =>
                  array (
                    'key' => 'Quechua (Ecuador)',
                    'value' => 'qu_EC',
                  ),
                  560 =>
                  array (
                    'key' => 'Quechua (Peru)',
                    'value' => 'qu_PE',
                  ),
                  561 =>
                  array (
                    'key' => 'Romanian',
                    'value' => 'ro',
                  ),
                  562 =>
                  array (
                    'key' => 'Romanian (Moldova)',
                    'value' => 'ro_MD',
                  ),
                  563 =>
                  array (
                    'key' => 'Romanian (Romania)',
                    'value' => 'ro_RO',
                  ),
                  564 =>
                  array (
                    'key' => 'Romansh',
                    'value' => 'rm',
                  ),
                  565 =>
                  array (
                    'key' => 'Romansh (Switzerland)',
                    'value' => 'rm_CH',
                  ),
                  566 =>
                  array (
                    'key' => 'Rombo',
                    'value' => 'rof',
                  ),
                  567 =>
                  array (
                    'key' => 'Rombo (Tanzania)',
                    'value' => 'rof_TZ',
                  ),
                  568 =>
                  array (
                    'key' => 'Rundi',
                    'value' => 'rn',
                  ),
                  569 =>
                  array (
                    'key' => 'Rundi (Burundi)',
                    'value' => 'rn_BI',
                  ),
                  570 =>
                  array (
                    'key' => 'Russian',
                    'value' => 'ru',
                  ),
                  571 =>
                  array (
                    'key' => 'Russian (Belarus)',
                    'value' => 'ru_BY',
                  ),
                  572 =>
                  array (
                    'key' => 'Russian (Kazakhstan)',
                    'value' => 'ru_KZ',
                  ),
                  573 =>
                  array (
                    'key' => 'Russian (Kyrgyzstan)',
                    'value' => 'ru_KG',
                  ),
                  574 =>
                  array (
                    'key' => 'Russian (Moldova)',
                    'value' => 'ru_MD',
                  ),
                  575 =>
                  array (
                    'key' => 'Russian (Russia)',
                    'value' => 'ru_RU',
                  ),
                  576 =>
                  array (
                    'key' => 'Russian (Ukraine)',
                    'value' => 'ru_UA',
                  ),
                  577 =>
                  array (
                    'key' => 'Rwa',
                    'value' => 'rwk',
                  ),
                  578 =>
                  array (
                    'key' => 'Rwa (Tanzania)',
                    'value' => 'rwk_TZ',
                  ),
                  579 =>
                  array (
                    'key' => 'Sakha',
                    'value' => 'sah',
                  ),
                  580 =>
                  array (
                    'key' => 'Sakha (Russia)',
                    'value' => 'sah_RU',
                  ),
                  581 =>
                  array (
                    'key' => 'Samburu',
                    'value' => 'saq',
                  ),
                  582 =>
                  array (
                    'key' => 'Samburu (Kenya)',
                    'value' => 'saq_KE',
                  ),
                  583 =>
                  array (
                    'key' => 'Sango',
                    'value' => 'sg',
                  ),
                  584 =>
                  array (
                    'key' => 'Sango (Central African Republic)',
                    'value' => 'sg_CF',
                  ),
                  585 =>
                  array (
                    'key' => 'Sangu',
                    'value' => 'sbp',
                  ),
                  586 =>
                  array (
                    'key' => 'Sangu (Tanzania)',
                    'value' => 'sbp_TZ',
                  ),
                  587 =>
                  array (
                    'key' => 'Scottish Gaelic',
                    'value' => 'gd',
                  ),
                  588 =>
                  array (
                    'key' => 'Scottish Gaelic (United Kingdom)',
                    'value' => 'gd_GB',
                  ),
                  589 =>
                  array (
                    'key' => 'Sena',
                    'value' => 'seh',
                  ),
                  590 =>
                  array (
                    'key' => 'Sena (Mozambique)',
                    'value' => 'seh_MZ',
                  ),
                  591 =>
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr',
                  ),
                  592 =>
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr_Latn',
                  ),
                  593 =>
                  array (
                    'key' => 'Serbian',
                    'value' => 'sr_Cyrl',
                  ),
                  594 =>
                  array (
                    'key' => 'Serbian (Bosnia & Herzegovina)',
                    'value' => 'sr_Cyrl_BA',
                  ),
                  595 =>
                  array (
                    'key' => 'Serbian (Bosnia & Herzegovina)',
                    'value' => 'sr_Latn_BA',
                  ),
                  596 =>
                  array (
                    'key' => 'Serbian (Kosovo)',
                    'value' => 'sr_Latn_XK',
                  ),
                  597 =>
                  array (
                    'key' => 'Serbian (Kosovo)',
                    'value' => 'sr_Cyrl_XK',
                  ),
                  598 =>
                  array (
                    'key' => 'Serbian (Montenegro)',
                    'value' => 'sr_Latn_ME',
                  ),
                  599 =>
                  array (
                    'key' => 'Serbian (Montenegro)',
                    'value' => 'sr_Cyrl_ME',
                  ),
                  600 =>
                  array (
                    'key' => 'Serbian (Serbia)',
                    'value' => 'sr_Cyrl_RS',
                  ),
                  601 =>
                  array (
                    'key' => 'Serbian (Serbia)',
                    'value' => 'sr_Latn_RS',
                  ),
                  602 =>
                  array (
                    'key' => 'Shambala',
                    'value' => 'ksb',
                  ),
                  603 =>
                  array (
                    'key' => 'Shambala (Tanzania)',
                    'value' => 'ksb_TZ',
                  ),
                  604 =>
                  array (
                    'key' => 'Shona',
                    'value' => 'sn',
                  ),
                  605 =>
                  array (
                    'key' => 'Shona (Zimbabwe)',
                    'value' => 'sn_ZW',
                  ),
                  606 =>
                  array (
                    'key' => 'Sichuan Yi',
                    'value' => 'ii',
                  ),
                  607 =>
                  array (
                    'key' => 'Sichuan Yi (China)',
                    'value' => 'ii_CN',
                  ),
                  608 =>
                  array (
                    'key' => 'Sindhi',
                    'value' => 'sd',
                  ),
                  609 =>
                  array (
                    'key' => 'Sindhi (Pakistan)',
                    'value' => 'sd_PK',
                  ),
                  610 =>
                  array (
                    'key' => 'Sinhala',
                    'value' => 'si',
                  ),
                  611 =>
                  array (
                    'key' => 'Sinhala (Sri Lanka)',
                    'value' => 'si_LK',
                  ),
                  612 =>
                  array (
                    'key' => 'Slovak',
                    'value' => 'sk',
                  ),
                  613 =>
                  array (
                    'key' => 'Slovak (Slovakia)',
                    'value' => 'sk_SK',
                  ),
                  614 =>
                  array (
                    'key' => 'Slovenian',
                    'value' => 'sl',
                  ),
                  615 =>
                  array (
                    'key' => 'Slovenian (Slovenia)',
                    'value' => 'sl_SI',
                  ),
                  616 =>
                  array (
                    'key' => 'Soga',
                    'value' => 'xog',
                  ),
                  617 =>
                  array (
                    'key' => 'Soga (Uganda)',
                    'value' => 'xog_UG',
                  ),
                  618 =>
                  array (
                    'key' => 'Somali',
                    'value' => 'so',
                  ),
                  619 =>
                  array (
                    'key' => 'Somali (Djibouti)',
                    'value' => 'so_DJ',
                  ),
                  620 =>
                  array (
                    'key' => 'Somali (Ethiopia)',
                    'value' => 'so_ET',
                  ),
                  621 =>
                  array (
                    'key' => 'Somali (Kenya)',
                    'value' => 'so_KE',
                  ),
                  622 =>
                  array (
                    'key' => 'Somali (Somalia)',
                    'value' => 'so_SO',
                  ),
                  623 =>
                  array (
                    'key' => 'Spanish',
                    'value' => 'es',
                  ),
                  624 =>
                  array (
                    'key' => 'Spanish (Argentina)',
                    'value' => 'es_AR',
                  ),
                  625 =>
                  array (
                    'key' => 'Spanish (Belize)',
                    'value' => 'es_BZ',
                  ),
                  626 =>
                  array (
                    'key' => 'Spanish (Bolivia)',
                    'value' => 'es_BO',
                  ),
                  627 =>
                  array (
                    'key' => 'Spanish (Brazil)',
                    'value' => 'es_BR',
                  ),
                  628 =>
                  array (
                    'key' => 'Spanish (Canary Islands)',
                    'value' => 'es_IC',
                  ),
                  629 =>
                  array (
                    'key' => 'Spanish (Ceuta & Melilla)',
                    'value' => 'es_EA',
                  ),
                  630 =>
                  array (
                    'key' => 'Spanish (Chile)',
                    'value' => 'es_CL',
                  ),
                  631 =>
                  array (
                    'key' => 'Spanish (Colombia)',
                    'value' => 'es_CO',
                  ),
                  632 =>
                  array (
                    'key' => 'Spanish (Costa Rica)',
                    'value' => 'es_CR',
                  ),
                  633 =>
                  array (
                    'key' => 'Spanish (Cuba)',
                    'value' => 'es_CU',
                  ),
                  634 =>
                  array (
                    'key' => 'Spanish (Dominican Republic)',
                    'value' => 'es_DO',
                  ),
                  635 =>
                  array (
                    'key' => 'Spanish (Ecuador)',
                    'value' => 'es_EC',
                  ),
                  636 =>
                  array (
                    'key' => 'Spanish (El Salvador)',
                    'value' => 'es_SV',
                  ),
                  637 =>
                  array (
                    'key' => 'Spanish (Equatorial Guinea)',
                    'value' => 'es_GQ',
                  ),
                  638 =>
                  array (
                    'key' => 'Spanish (Guatemala)',
                    'value' => 'es_GT',
                  ),
                  639 =>
                  array (
                    'key' => 'Spanish (Honduras)',
                    'value' => 'es_HN',
                  ),
                  640 =>
                  array (
                    'key' => 'Spanish (Latin America)',
                    'value' => 'es_419',
                  ),
                  641 =>
                  array (
                    'key' => 'Spanish (Mexico)',
                    'value' => 'es_MX',
                  ),
                  642 =>
                  array (
                    'key' => 'Spanish (Nicaragua)',
                    'value' => 'es_NI',
                  ),
                  643 =>
                  array (
                    'key' => 'Spanish (Panama)',
                    'value' => 'es_PA',
                  ),
                  644 =>
                  array (
                    'key' => 'Spanish (Paraguay)',
                    'value' => 'es_PY',
                  ),
                  645 =>
                  array (
                    'key' => 'Spanish (Peru)',
                    'value' => 'es_PE',
                  ),
                  646 =>
                  array (
                    'key' => 'Spanish (Philippines)',
                    'value' => 'es_PH',
                  ),
                  647 =>
                  array (
                    'key' => 'Spanish (Puerto Rico)',
                    'value' => 'es_PR',
                  ),
                  648 =>
                  array (
                    'key' => 'Spanish (Spain)',
                    'value' => 'es_ES',
                  ),
                  649 =>
                  array (
                    'key' => 'Spanish (United States)',
                    'value' => 'es_US',
                  ),
                  650 =>
                  array (
                    'key' => 'Spanish (Uruguay)',
                    'value' => 'es_UY',
                  ),
                  651 =>
                  array (
                    'key' => 'Spanish (Venezuela)',
                    'value' => 'es_VE',
                  ),
                  652 =>
                  array (
                    'key' => 'Standard Moroccan Tamazight',
                    'value' => 'zgh',
                  ),
                  653 =>
                  array (
                    'key' => 'Standard Moroccan Tamazight (Morocco)',
                    'value' => 'zgh_MA',
                  ),
                  654 =>
                  array (
                    'key' => 'Swahili',
                    'value' => 'sw',
                  ),
                  655 =>
                  array (
                    'key' => 'Swahili (Congo - Kinshasa)',
                    'value' => 'sw_CD',
                  ),
                  656 =>
                  array (
                    'key' => 'Swahili (Kenya)',
                    'value' => 'sw_KE',
                  ),
                  657 =>
                  array (
                    'key' => 'Swahili (Tanzania)',
                    'value' => 'sw_TZ',
                  ),
                  658 =>
                  array (
                    'key' => 'Swahili (Uganda)',
                    'value' => 'sw_UG',
                  ),
                  659 =>
                  array (
                    'key' => 'Swedish',
                    'value' => 'sv',
                  ),
                  660 =>
                  array (
                    'key' => 'Swedish (Finland)',
                    'value' => 'sv_FI',
                  ),
                  661 =>
                  array (
                    'key' => 'Swedish (Sweden)',
                    'value' => 'sv_SE',
                  ),
                  662 =>
                  array (
                    'key' => 'Swedish (Åland Islands)',
                    'value' => 'sv_AX',
                  ),
                  663 =>
                  array (
                    'key' => 'Swiss German',
                    'value' => 'gsw',
                  ),
                  664 =>
                  array (
                    'key' => 'Swiss German (France)',
                    'value' => 'gsw_FR',
                  ),
                  665 =>
                  array (
                    'key' => 'Swiss German (Liechtenstein)',
                    'value' => 'gsw_LI',
                  ),
                  666 =>
                  array (
                    'key' => 'Swiss German (Switzerland)',
                    'value' => 'gsw_CH',
                  ),
                  667 =>
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi_Tfng',
                  ),
                  668 =>
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi_Latn',
                  ),
                  669 =>
                  array (
                    'key' => 'Tachelhit',
                    'value' => 'shi',
                  ),
                  670 =>
                  array (
                    'key' => 'Tachelhit (Morocco)',
                    'value' => 'shi_Tfng_MA',
                  ),
                  671 =>
                  array (
                    'key' => 'Tachelhit (Morocco)',
                    'value' => 'shi_Latn_MA',
                  ),
                  672 =>
                  array (
                    'key' => 'Taita',
                    'value' => 'dav',
                  ),
                  673 =>
                  array (
                    'key' => 'Taita (Kenya)',
                    'value' => 'dav_KE',
                  ),
                  674 =>
                  array (
                    'key' => 'Tajik',
                    'value' => 'tg',
                  ),
                  675 =>
                  array (
                    'key' => 'Tajik (Tajikistan)',
                    'value' => 'tg_TJ',
                  ),
                  676 =>
                  array (
                    'key' => 'Tamil',
                    'value' => 'ta',
                  ),
                  677 =>
                  array (
                    'key' => 'Tamil (India)',
                    'value' => 'ta_IN',
                  ),
                  678 =>
                  array (
                    'key' => 'Tamil (Malaysia)',
                    'value' => 'ta_MY',
                  ),
                  679 =>
                  array (
                    'key' => 'Tamil (Singapore)',
                    'value' => 'ta_SG',
                  ),
                  680 =>
                  array (
                    'key' => 'Tamil (Sri Lanka)',
                    'value' => 'ta_LK',
                  ),
                  681 =>
                  array (
                    'key' => 'Tasawaq',
                    'value' => 'twq',
                  ),
                  682 =>
                  array (
                    'key' => 'Tasawaq (Niger)',
                    'value' => 'twq_NE',
                  ),
                  683 =>
                  array (
                    'key' => 'Tatar',
                    'value' => 'tt',
                  ),
                  684 =>
                  array (
                    'key' => 'Tatar (Russia)',
                    'value' => 'tt_RU',
                  ),
                  685 =>
                  array (
                    'key' => 'Telugu',
                    'value' => 'te',
                  ),
                  686 =>
                  array (
                    'key' => 'Telugu (India)',
                    'value' => 'te_IN',
                  ),
                  687 =>
                  array (
                    'key' => 'Teso',
                    'value' => 'teo',
                  ),
                  688 =>
                  array (
                    'key' => 'Teso (Kenya)',
                    'value' => 'teo_KE',
                  ),
                  689 =>
                  array (
                    'key' => 'Teso (Uganda)',
                    'value' => 'teo_UG',
                  ),
                  690 =>
                  array (
                    'key' => 'Thai',
                    'value' => 'th',
                  ),
                  691 =>
                  array (
                    'key' => 'Thai (Thailand)',
                    'value' => 'th_TH',
                  ),
                  692 =>
                  array (
                    'key' => 'Tibetan',
                    'value' => 'bo',
                  ),
                  693 =>
                  array (
                    'key' => 'Tibetan (China)',
                    'value' => 'bo_CN',
                  ),
                  694 =>
                  array (
                    'key' => 'Tibetan (India)',
                    'value' => 'bo_IN',
                  ),
                  695 =>
                  array (
                    'key' => 'Tigrinya',
                    'value' => 'ti',
                  ),
                  696 =>
                  array (
                    'key' => 'Tigrinya (Eritrea)',
                    'value' => 'ti_ER',
                  ),
                  697 =>
                  array (
                    'key' => 'Tigrinya (Ethiopia)',
                    'value' => 'ti_ET',
                  ),
                  698 =>
                  array (
                    'key' => 'Tongan',
                    'value' => 'to',
                  ),
                  699 =>
                  array (
                    'key' => 'Tongan (Tonga)',
                    'value' => 'to_TO',
                  ),
                  700 =>
                  array (
                    'key' => 'Turkish',
                    'value' => 'tr',
                  ),
                  701 =>
                  array (
                    'key' => 'Turkish (Cyprus)',
                    'value' => 'tr_CY',
                  ),
                  702 =>
                  array (
                    'key' => 'Turkish (Turkey)',
                    'value' => 'tr_TR',
                  ),
                  703 =>
                  array (
                    'key' => 'Turkmen',
                    'value' => 'tk',
                  ),
                  704 =>
                  array (
                    'key' => 'Turkmen (Turkmenistan)',
                    'value' => 'tk_TM',
                  ),
                  705 =>
                  array (
                    'key' => 'Ukrainian',
                    'value' => 'uk',
                  ),
                  706 =>
                  array (
                    'key' => 'Ukrainian (Ukraine)',
                    'value' => 'uk_UA',
                  ),
                  707 =>
                  array (
                    'key' => 'Upper Sorbian',
                    'value' => 'hsb',
                  ),
                  708 =>
                  array (
                    'key' => 'Upper Sorbian (Germany)',
                    'value' => 'hsb_DE',
                  ),
                  709 =>
                  array (
                    'key' => 'Urdu',
                    'value' => 'ur',
                  ),
                  710 =>
                  array (
                    'key' => 'Urdu (India)',
                    'value' => 'ur_IN',
                  ),
                  711 =>
                  array (
                    'key' => 'Urdu (Pakistan)',
                    'value' => 'ur_PK',
                  ),
                  712 =>
                  array (
                    'key' => 'Uyghur',
                    'value' => 'ug',
                  ),
                  713 =>
                  array (
                    'key' => 'Uyghur (China)',
                    'value' => 'ug_CN',
                  ),
                  714 =>
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Latn',
                  ),
                  715 =>
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Arab',
                  ),
                  716 =>
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz',
                  ),
                  717 =>
                  array (
                    'key' => 'Uzbek',
                    'value' => 'uz_Cyrl',
                  ),
                  718 =>
                  array (
                    'key' => 'Uzbek (Afghanistan)',
                    'value' => 'uz_Arab_AF',
                  ),
                  719 =>
                  array (
                    'key' => 'Uzbek (Uzbekistan)',
                    'value' => 'uz_Latn_UZ',
                  ),
                  720 =>
                  array (
                    'key' => 'Uzbek (Uzbekistan)',
                    'value' => 'uz_Cyrl_UZ',
                  ),
                  721 =>
                  array (
                    'key' => 'Vai',
                    'value' => 'vai_Vaii',
                  ),
                  722 =>
                  array (
                    'key' => 'Vai',
                    'value' => 'vai',
                  ),
                  723 =>
                  array (
                    'key' => 'Vai',
                    'value' => 'vai_Latn',
                  ),
                  724 =>
                  array (
                    'key' => 'Vai (Liberia)',
                    'value' => 'vai_Vaii_LR',
                  ),
                  725 =>
                  array (
                    'key' => 'Vai (Liberia)',
                    'value' => 'vai_Latn_LR',
                  ),
                  726 =>
                  array (
                    'key' => 'Vietnamese',
                    'value' => 'vi',
                  ),
                  727 =>
                  array (
                    'key' => 'Vietnamese (Vietnam)',
                    'value' => 'vi_VN',
                  ),
                  728 =>
                  array (
                    'key' => 'Vunjo',
                    'value' => 'vun',
                  ),
                  729 =>
                  array (
                    'key' => 'Vunjo (Tanzania)',
                    'value' => 'vun_TZ',
                  ),
                  730 =>
                  array (
                    'key' => 'Walser',
                    'value' => 'wae',
                  ),
                  731 =>
                  array (
                    'key' => 'Walser (Switzerland)',
                    'value' => 'wae_CH',
                  ),
                  732 =>
                  array (
                    'key' => 'Welsh',
                    'value' => 'cy',
                  ),
                  733 =>
                  array (
                    'key' => 'Welsh (United Kingdom)',
                    'value' => 'cy_GB',
                  ),
                  734 =>
                  array (
                    'key' => 'Western Frisian',
                    'value' => 'fy',
                  ),
                  735 =>
                  array (
                    'key' => 'Western Frisian (Netherlands)',
                    'value' => 'fy_NL',
                  ),
                  736 =>
                  array (
                    'key' => 'Wolof',
                    'value' => 'wo',
                  ),
                  737 =>
                  array (
                    'key' => 'Wolof (Senegal)',
                    'value' => 'wo_SN',
                  ),
                  738 =>
                  array (
                    'key' => 'Xhosa',
                    'value' => 'xh',
                  ),
                  739 =>
                  array (
                    'key' => 'Xhosa (South Africa)',
                    'value' => 'xh_ZA',
                  ),
                  740 =>
                  array (
                    'key' => 'Yangben',
                    'value' => 'yav',
                  ),
                  741 =>
                  array (
                    'key' => 'Yangben (Cameroon)',
                    'value' => 'yav_CM',
                  ),
                  742 =>
                  array (
                    'key' => 'Yiddish',
                    'value' => 'yi',
                  ),
                  743 =>
                  array (
                    'key' => 'Yiddish (World)',
                    'value' => 'yi_001',
                  ),
                  744 =>
                  array (
                    'key' => 'Yoruba',
                    'value' => 'yo',
                  ),
                  745 =>
                  array (
                    'key' => 'Yoruba (Benin)',
                    'value' => 'yo_BJ',
                  ),
                  746 =>
                  array (
                    'key' => 'Yoruba (Nigeria)',
                    'value' => 'yo_NG',
                  ),
                  747 =>
                  array (
                    'key' => 'Zarma',
                    'value' => 'dje',
                  ),
                  748 =>
                  array (
                    'key' => 'Zarma (Niger)',
                    'value' => 'dje_NE',
                  ),
                  749 =>
                  array (
                    'key' => 'Zulu',
                    'value' => 'zu',
                  ),
                  750 =>
                  array (
                    'key' => 'Zulu (South Africa)',
                    'value' => 'zu_ZA',
                  ),
                ),
                 'width' => '',
                 'defaultValue' => NULL,
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'customerLanguage',
                 'title' => 'Language',
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
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              13 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                 'fieldtype' => 'fieldset',
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Permissions',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Consent::__set_state(array(
                     'fieldtype' => 'consent',
                     'defaultValue' => 0,
                     'width' => NULL,
                     'name' => 'newsletter',
                     'title' => 'Newsletter',
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
                     'blockedVarsForExport' =>
                    array (
                    ),
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\NewsletterConfirmed::__set_state(array(
                     'fieldtype' => 'newsletterConfirmed',
                     'defaultValue' => NULL,
                     'name' => 'newsletterConfirmed',
                     'title' => 'Newsletter Confirmed',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValueGenerator' => '',
                  )),
                  2 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => NULL,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => false,
                     'name' => 'newsletterConfirmToken',
                     'title' => 'Newsletter Confirm Token',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => true,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValueGenerator' => '',
                  )),
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Consent::__set_state(array(
                     'fieldtype' => 'consent',
                     'defaultValue' => 0,
                     'width' => NULL,
                     'name' => 'profiling',
                     'title' => 'Profiling',
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
                     'blockedVarsForExport' =>
                    array (
                    ),
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'icon' => NULL,
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => 'CustomerSegment',
                 'visibleFields' => 'id,fullpath',
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
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => 'CustomerManagementFrameworkBundle\\PathFormatter\\CustomerSegmentFormatter',
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation::__set_state(array(
                 'allowedClassId' => 'CustomerSegment',
                 'visibleFields' => 'id,fullpath',
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
                 'enableBatchEdit' => false,
                 'allowMultipleAssignments' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'classes' =>
                array (
                ),
                 'pathFormatterClass' => 'CustomerManagementFrameworkBundle\\PathFormatter\\CustomerSegmentFormatter',
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'icon' => NULL,
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Password::__set_state(array(
                 'fieldtype' => 'password',
                 'width' => '',
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' => NULL,
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
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
                 'blockedVarsForExport' =>
                array (
                ),
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'passwordRecoveryToken',
                 'title' => 'Password Recovery Token',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
                 'fieldtype' => 'datetime',
                 'defaultValue' => NULL,
                 'useCurrentDate' => false,
                 'name' => 'passwordRecoveryTokenDate',
                 'title' => 'Password Recovery Token Date',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'defaultValueGenerator' => '',
              )),
            ),
             'locked' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'icon' => NULL,
             'labelWidth' => 100,
             'labelAlign' => 'left',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' =>
        array (
        ),
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcorecustomermanagementframework/icons/customer.svg',
   'previewUrl' => '',
   'group' => 'CustomerManagement',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '',
   'compositeIndices' =>
  array (
  ),
   'generateTypeDeclarations' => true,
   'showFieldLookup' => false,
   'propertyVisibility' =>
  array (
    'grid' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
    'search' =>
    array (
      'id' => true,
      'key' => false,
      'path' => true,
      'published' => true,
      'modificationDate' => false,
      'creationDate' => false,
    ),
  ),
   'enableGridLocking' => false,
   'dao' => NULL,
   'blockedVarsForExport' =>
  array (
  ),
));
