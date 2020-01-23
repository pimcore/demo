<?php 

/** 
* Generated at: 2020-01-23T11:18:21+01:00
* Inheritance: yes
* Variants: no


Fields Summary: 
- localizedfields [localizedfields]
-- name [input]
-- description [wysiwyg]
-- textsAvailable [calculatedValue]
- series [input]
- manufacturer [manyToOneRelation]
- bodyStyle [manyToOneRelation]
- carClass [select]
- productionYear [numeric]
- color [multiselect]
- country [country]
- categories [manyToManyObjectRelation]
- gallery [imageGallery]
- genericImages [imageGallery]
- attributes [objectbricks]
- saleInformation [objectbricks]
- location [geopoint]
- attributesAvailable [calculatedValue]
- saleInformationAvailable [calculatedValue]
- imagesAvailable [calculatedValue]
- objectType [select]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'CAR',
   'name' => 'Car',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1579774701,
   'userOwner' => 2,
   'userModification' => 2,
   'parentClass' => '\\AppBundle\\Model\\Product\\AbstractProduct',
   'listingParentClass' => '',
   'useTraits' => '',
   'listingUseTraits' => '',
   'encryption' => false,
   'encryptedTables' => 
  array (
  ),
   'allowInherit' => true,
   'allowVariants' => NULL,
   'showVariants' => false,
   'cacheRawRelationData' => false,
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
         'title' => '',
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Basedata',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Basedata',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                 'fieldtype' => 'localizedfields',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => NULL,
                     'queryColumnType' => 'varchar',
                     'columnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => 'string',
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => false,
                     'name' => 'name',
                     'title' => 'Name',
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
                  1 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                     'fieldtype' => 'wysiwyg',
                     'width' => '',
                     'height' => '',
                     'queryColumnType' => 'longtext',
                     'columnType' => 'longtext',
                     'phpdocType' => 'string',
                     'toolbarConfig' => '',
                     'excludeFromSearchIndex' => false,
                     'name' => 'description',
                     'title' => 'Description',
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
                ),
                 'name' => 'localizedfields',
                 'region' => NULL,
                 'layout' => NULL,
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'maxTabs' => NULL,
                 'labelWidth' => NULL,
                 'border' => false,
                 'provideSplitView' => false,
                 'tabPosition' => 'top',
                 'hideLabelsWhenTabsReached' => NULL,
                 'referencedFields' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                     'fieldtype' => 'localizedfields',
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
                     'childs' => 
                    array (
                      0 => 
                      Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                         'fieldtype' => 'calculatedValue',
                         'elementType' => 'input',
                         'width' => 0,
                         'calculatorClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                         'queryColumnType' => 'varchar',
                         'columnLength' => 190,
                         'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                         'name' => 'textsAvailable',
                         'title' => 'Texts Available',
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
                    ),
                     'name' => 'localizedfields',
                     'region' => NULL,
                     'layout' => NULL,
                     'title' => '',
                     'width' => '',
                     'height' => '',
                     'maxTabs' => NULL,
                     'labelWidth' => 210,
                     'border' => false,
                     'provideSplitView' => false,
                     'tabPosition' => NULL,
                     'hideLabelsWhenTabsReached' => NULL,
                     'referencedFields' => 
                    array (
                    ),
                     'fieldDefinitionsCache' => NULL,
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => NULL,
                     'locked' => false,
                     'style' => '',
                     'permissions' => NULL,
                     'datatype' => 'data',
                     'relationType' => false,
                     'invisible' => false,
                     'visibleGridView' => true,
                     'visibleSearch' => true,
                  )),
                ),
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => NULL,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'series',
                 'title' => 'Series',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => true,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'fieldtype' => 'manyToOneRelation',
                 'width' => 400,
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Manufacturer',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'manufacturer',
                 'title' => 'Manufacturer',
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
              3 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                 'fieldtype' => 'manyToOneRelation',
                 'width' => 400,
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'BodyStyle',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'bodyStyle',
                 'title' => 'Body Style',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'invisible' => false,
                 'visibleGridView' => true,
                 'visibleSearch' => true,
              )),
              4 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Full-size luxury car',
                    'value' => 'Full-size luxury car',
                  ),
                  1 => 
                  array (
                    'key' => 'Grand tourer',
                    'value' => 'Grand tourer',
                  ),
                  2 => 
                  array (
                    'key' => 'Light commercial vehicle',
                    'value' => 'Light commercial vehicle',
                  ),
                  3 => 
                  array (
                    'key' => 'Muscle Car',
                    'value' => 'Muscle Car',
                  ),
                  4 => 
                  array (
                    'key' => 'City Car',
                    'value' => 'City Car',
                  ),
                  5 => 
                  array (
                    'key' => 'Executive car',
                    'value' => 'Executive car',
                  ),
                  6 => 
                  array (
                    'key' => 'Economy car',
                    'value' => 'Economy car',
                  ),
                  7 => 
                  array (
                    'key' => 'Personal luxury car',
                    'value' => 'Personal luxury car',
                  ),
                  8 => 
                  array (
                    'key' => 'Full-Size',
                    'value' => 'Full-Size',
                  ),
                  9 => 
                  array (
                    'key' => 'Family car',
                    'value' => 'Family car',
                  ),
                  10 => 
                  array (
                    'key' => 'Mid-size luxury',
                    'value' => 'Mid-size luxury',
                  ),
                  11 => 
                  array (
                    'key' => 'sports car',
                    'value' => 'sports car',
                  ),
                ),
                 'width' => 300,
                 'defaultValue' => '',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'carClass',
                 'title' => 'Class',
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
              5 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => 300,
                 'defaultValue' => NULL,
                 'queryColumnType' => 'double',
                 'columnType' => 'double',
                 'phpdocType' => 'float',
                 'integer' => true,
                 'unsigned' => true,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => false,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'name' => 'productionYear',
                 'title' => 'Production Year',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                 'fieldtype' => 'multiselect',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'grey',
                    'value' => 'grey',
                  ),
                  1 => 
                  array (
                    'key' => 'beige',
                    'value' => 'beige',
                  ),
                  2 => 
                  array (
                    'key' => 'silver',
                    'value' => 'silver',
                  ),
                  3 => 
                  array (
                    'key' => 'brown',
                    'value' => 'brown',
                  ),
                  4 => 
                  array (
                    'key' => 'orange',
                    'value' => 'orange',
                  ),
                  5 => 
                  array (
                    'key' => 'yellow',
                    'value' => 'yellow',
                  ),
                  6 => 
                  array (
                    'key' => 'blue',
                    'value' => 'blue',
                  ),
                  7 => 
                  array (
                    'key' => 'black',
                    'value' => 'black',
                  ),
                  8 => 
                  array (
                    'key' => 'green',
                    'value' => 'green',
                  ),
                  9 => 
                  array (
                    'key' => 'red',
                    'value' => 'red',
                  ),
                  10 => 
                  array (
                    'key' => 'white',
                    'value' => 'white',
                  ),
                ),
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'renderType' => 'list',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'text',
                 'columnType' => 'text',
                 'phpdocType' => 'array',
                 'dynamicOptions' => false,
                 'name' => 'color',
                 'title' => 'Color',
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
              7 => 
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
                    'key' => 'Antarctica',
                    'value' => 'AQ',
                  ),
                  8 => 
                  array (
                    'key' => 'Antigua & Barbuda',
                    'value' => 'AG',
                  ),
                  9 => 
                  array (
                    'key' => 'Argentina',
                    'value' => 'AR',
                  ),
                  10 => 
                  array (
                    'key' => 'Armenia',
                    'value' => 'AM',
                  ),
                  11 => 
                  array (
                    'key' => 'Aruba',
                    'value' => 'AW',
                  ),
                  12 => 
                  array (
                    'key' => 'Ascension Island',
                    'value' => 'AC',
                  ),
                  13 => 
                  array (
                    'key' => 'Australia',
                    'value' => 'AU',
                  ),
                  14 => 
                  array (
                    'key' => 'Austria',
                    'value' => 'AT',
                  ),
                  15 => 
                  array (
                    'key' => 'Azerbaijan',
                    'value' => 'AZ',
                  ),
                  16 => 
                  array (
                    'key' => 'Bahamas',
                    'value' => 'BS',
                  ),
                  17 => 
                  array (
                    'key' => 'Bahrain',
                    'value' => 'BH',
                  ),
                  18 => 
                  array (
                    'key' => 'Bangladesh',
                    'value' => 'BD',
                  ),
                  19 => 
                  array (
                    'key' => 'Barbados',
                    'value' => 'BB',
                  ),
                  20 => 
                  array (
                    'key' => 'Belarus',
                    'value' => 'BY',
                  ),
                  21 => 
                  array (
                    'key' => 'Belgium',
                    'value' => 'BE',
                  ),
                  22 => 
                  array (
                    'key' => 'Belize',
                    'value' => 'BZ',
                  ),
                  23 => 
                  array (
                    'key' => 'Benin',
                    'value' => 'BJ',
                  ),
                  24 => 
                  array (
                    'key' => 'Bermuda',
                    'value' => 'BM',
                  ),
                  25 => 
                  array (
                    'key' => 'Bhutan',
                    'value' => 'BT',
                  ),
                  26 => 
                  array (
                    'key' => 'Bolivia',
                    'value' => 'BO',
                  ),
                  27 => 
                  array (
                    'key' => 'Bosnia & Herzegovina',
                    'value' => 'BA',
                  ),
                  28 => 
                  array (
                    'key' => 'Botswana',
                    'value' => 'BW',
                  ),
                  29 => 
                  array (
                    'key' => 'Brazil',
                    'value' => 'BR',
                  ),
                  30 => 
                  array (
                    'key' => 'British Indian Ocean Territory',
                    'value' => 'IO',
                  ),
                  31 => 
                  array (
                    'key' => 'British Virgin Islands',
                    'value' => 'VG',
                  ),
                  32 => 
                  array (
                    'key' => 'Brunei',
                    'value' => 'BN',
                  ),
                  33 => 
                  array (
                    'key' => 'Bulgaria',
                    'value' => 'BG',
                  ),
                  34 => 
                  array (
                    'key' => 'Burkina Faso',
                    'value' => 'BF',
                  ),
                  35 => 
                  array (
                    'key' => 'Burundi',
                    'value' => 'BI',
                  ),
                  36 => 
                  array (
                    'key' => 'Cambodia',
                    'value' => 'KH',
                  ),
                  37 => 
                  array (
                    'key' => 'Cameroon',
                    'value' => 'CM',
                  ),
                  38 => 
                  array (
                    'key' => 'Canada',
                    'value' => 'CA',
                  ),
                  39 => 
                  array (
                    'key' => 'Canary Islands',
                    'value' => 'IC',
                  ),
                  40 => 
                  array (
                    'key' => 'Cape Verde',
                    'value' => 'CV',
                  ),
                  41 => 
                  array (
                    'key' => 'Caribbean Netherlands',
                    'value' => 'BQ',
                  ),
                  42 => 
                  array (
                    'key' => 'Cayman Islands',
                    'value' => 'KY',
                  ),
                  43 => 
                  array (
                    'key' => 'Central African Republic',
                    'value' => 'CF',
                  ),
                  44 => 
                  array (
                    'key' => 'Ceuta & Melilla',
                    'value' => 'EA',
                  ),
                  45 => 
                  array (
                    'key' => 'Chad',
                    'value' => 'TD',
                  ),
                  46 => 
                  array (
                    'key' => 'Chile',
                    'value' => 'CL',
                  ),
                  47 => 
                  array (
                    'key' => 'China',
                    'value' => 'CN',
                  ),
                  48 => 
                  array (
                    'key' => 'Christmas Island',
                    'value' => 'CX',
                  ),
                  49 => 
                  array (
                    'key' => 'Cocos (Keeling) Islands',
                    'value' => 'CC',
                  ),
                  50 => 
                  array (
                    'key' => 'Colombia',
                    'value' => 'CO',
                  ),
                  51 => 
                  array (
                    'key' => 'Comoros',
                    'value' => 'KM',
                  ),
                  52 => 
                  array (
                    'key' => 'Congo - Brazzaville',
                    'value' => 'CG',
                  ),
                  53 => 
                  array (
                    'key' => 'Congo - Kinshasa',
                    'value' => 'CD',
                  ),
                  54 => 
                  array (
                    'key' => 'Cook Islands',
                    'value' => 'CK',
                  ),
                  55 => 
                  array (
                    'key' => 'Costa Rica',
                    'value' => 'CR',
                  ),
                  56 => 
                  array (
                    'key' => 'Croatia',
                    'value' => 'HR',
                  ),
                  57 => 
                  array (
                    'key' => 'Cuba',
                    'value' => 'CU',
                  ),
                  58 => 
                  array (
                    'key' => 'Curaçao',
                    'value' => 'CW',
                  ),
                  59 => 
                  array (
                    'key' => 'Cyprus',
                    'value' => 'CY',
                  ),
                  60 => 
                  array (
                    'key' => 'Czechia',
                    'value' => 'CZ',
                  ),
                  61 => 
                  array (
                    'key' => 'Côte d’Ivoire',
                    'value' => 'CI',
                  ),
                  62 => 
                  array (
                    'key' => 'Denmark',
                    'value' => 'DK',
                  ),
                  63 => 
                  array (
                    'key' => 'Diego Garcia',
                    'value' => 'DG',
                  ),
                  64 => 
                  array (
                    'key' => 'Djibouti',
                    'value' => 'DJ',
                  ),
                  65 => 
                  array (
                    'key' => 'Dominica',
                    'value' => 'DM',
                  ),
                  66 => 
                  array (
                    'key' => 'Dominican Republic',
                    'value' => 'DO',
                  ),
                  67 => 
                  array (
                    'key' => 'Ecuador',
                    'value' => 'EC',
                  ),
                  68 => 
                  array (
                    'key' => 'Egypt',
                    'value' => 'EG',
                  ),
                  69 => 
                  array (
                    'key' => 'El Salvador',
                    'value' => 'SV',
                  ),
                  70 => 
                  array (
                    'key' => 'Equatorial Guinea',
                    'value' => 'GQ',
                  ),
                  71 => 
                  array (
                    'key' => 'Eritrea',
                    'value' => 'ER',
                  ),
                  72 => 
                  array (
                    'key' => 'Estonia',
                    'value' => 'EE',
                  ),
                  73 => 
                  array (
                    'key' => 'Ethiopia',
                    'value' => 'ET',
                  ),
                  74 => 
                  array (
                    'key' => 'Eurozone',
                    'value' => 'EZ',
                  ),
                  75 => 
                  array (
                    'key' => 'Falkland Islands',
                    'value' => 'FK',
                  ),
                  76 => 
                  array (
                    'key' => 'Faroe Islands',
                    'value' => 'FO',
                  ),
                  77 => 
                  array (
                    'key' => 'Fiji',
                    'value' => 'FJ',
                  ),
                  78 => 
                  array (
                    'key' => 'Finland',
                    'value' => 'FI',
                  ),
                  79 => 
                  array (
                    'key' => 'France',
                    'value' => 'FR',
                  ),
                  80 => 
                  array (
                    'key' => 'French Guiana',
                    'value' => 'GF',
                  ),
                  81 => 
                  array (
                    'key' => 'French Polynesia',
                    'value' => 'PF',
                  ),
                  82 => 
                  array (
                    'key' => 'French Southern Territories',
                    'value' => 'TF',
                  ),
                  83 => 
                  array (
                    'key' => 'Gabon',
                    'value' => 'GA',
                  ),
                  84 => 
                  array (
                    'key' => 'Gambia',
                    'value' => 'GM',
                  ),
                  85 => 
                  array (
                    'key' => 'Georgia',
                    'value' => 'GE',
                  ),
                  86 => 
                  array (
                    'key' => 'Germany',
                    'value' => 'DE',
                  ),
                  87 => 
                  array (
                    'key' => 'Ghana',
                    'value' => 'GH',
                  ),
                  88 => 
                  array (
                    'key' => 'Gibraltar',
                    'value' => 'GI',
                  ),
                  89 => 
                  array (
                    'key' => 'Greece',
                    'value' => 'GR',
                  ),
                  90 => 
                  array (
                    'key' => 'Greenland',
                    'value' => 'GL',
                  ),
                  91 => 
                  array (
                    'key' => 'Grenada',
                    'value' => 'GD',
                  ),
                  92 => 
                  array (
                    'key' => 'Guadeloupe',
                    'value' => 'GP',
                  ),
                  93 => 
                  array (
                    'key' => 'Guam',
                    'value' => 'GU',
                  ),
                  94 => 
                  array (
                    'key' => 'Guatemala',
                    'value' => 'GT',
                  ),
                  95 => 
                  array (
                    'key' => 'Guernsey',
                    'value' => 'GG',
                  ),
                  96 => 
                  array (
                    'key' => 'Guinea',
                    'value' => 'GN',
                  ),
                  97 => 
                  array (
                    'key' => 'Guinea-Bissau',
                    'value' => 'GW',
                  ),
                  98 => 
                  array (
                    'key' => 'Guyana',
                    'value' => 'GY',
                  ),
                  99 => 
                  array (
                    'key' => 'Haiti',
                    'value' => 'HT',
                  ),
                  100 => 
                  array (
                    'key' => 'Honduras',
                    'value' => 'HN',
                  ),
                  101 => 
                  array (
                    'key' => 'Hong Kong SAR China',
                    'value' => 'HK',
                  ),
                  102 => 
                  array (
                    'key' => 'Hungary',
                    'value' => 'HU',
                  ),
                  103 => 
                  array (
                    'key' => 'Iceland',
                    'value' => 'IS',
                  ),
                  104 => 
                  array (
                    'key' => 'India',
                    'value' => 'IN',
                  ),
                  105 => 
                  array (
                    'key' => 'Indonesia',
                    'value' => 'ID',
                  ),
                  106 => 
                  array (
                    'key' => 'Iran',
                    'value' => 'IR',
                  ),
                  107 => 
                  array (
                    'key' => 'Iraq',
                    'value' => 'IQ',
                  ),
                  108 => 
                  array (
                    'key' => 'Ireland',
                    'value' => 'IE',
                  ),
                  109 => 
                  array (
                    'key' => 'Isle of Man',
                    'value' => 'IM',
                  ),
                  110 => 
                  array (
                    'key' => 'Israel',
                    'value' => 'IL',
                  ),
                  111 => 
                  array (
                    'key' => 'Italy',
                    'value' => 'IT',
                  ),
                  112 => 
                  array (
                    'key' => 'Jamaica',
                    'value' => 'JM',
                  ),
                  113 => 
                  array (
                    'key' => 'Japan',
                    'value' => 'JP',
                  ),
                  114 => 
                  array (
                    'key' => 'Jersey',
                    'value' => 'JE',
                  ),
                  115 => 
                  array (
                    'key' => 'Jordan',
                    'value' => 'JO',
                  ),
                  116 => 
                  array (
                    'key' => 'Kazakhstan',
                    'value' => 'KZ',
                  ),
                  117 => 
                  array (
                    'key' => 'Kenya',
                    'value' => 'KE',
                  ),
                  118 => 
                  array (
                    'key' => 'Kiribati',
                    'value' => 'KI',
                  ),
                  119 => 
                  array (
                    'key' => 'Kosovo',
                    'value' => 'XK',
                  ),
                  120 => 
                  array (
                    'key' => 'Kuwait',
                    'value' => 'KW',
                  ),
                  121 => 
                  array (
                    'key' => 'Kyrgyzstan',
                    'value' => 'KG',
                  ),
                  122 => 
                  array (
                    'key' => 'Laos',
                    'value' => 'LA',
                  ),
                  123 => 
                  array (
                    'key' => 'Latvia',
                    'value' => 'LV',
                  ),
                  124 => 
                  array (
                    'key' => 'Lebanon',
                    'value' => 'LB',
                  ),
                  125 => 
                  array (
                    'key' => 'Lesotho',
                    'value' => 'LS',
                  ),
                  126 => 
                  array (
                    'key' => 'Liberia',
                    'value' => 'LR',
                  ),
                  127 => 
                  array (
                    'key' => 'Libya',
                    'value' => 'LY',
                  ),
                  128 => 
                  array (
                    'key' => 'Liechtenstein',
                    'value' => 'LI',
                  ),
                  129 => 
                  array (
                    'key' => 'Lithuania',
                    'value' => 'LT',
                  ),
                  130 => 
                  array (
                    'key' => 'Luxembourg',
                    'value' => 'LU',
                  ),
                  131 => 
                  array (
                    'key' => 'Macau SAR China',
                    'value' => 'MO',
                  ),
                  132 => 
                  array (
                    'key' => 'Macedonia',
                    'value' => 'MK',
                  ),
                  133 => 
                  array (
                    'key' => 'Madagascar',
                    'value' => 'MG',
                  ),
                  134 => 
                  array (
                    'key' => 'Malawi',
                    'value' => 'MW',
                  ),
                  135 => 
                  array (
                    'key' => 'Malaysia',
                    'value' => 'MY',
                  ),
                  136 => 
                  array (
                    'key' => 'Maldives',
                    'value' => 'MV',
                  ),
                  137 => 
                  array (
                    'key' => 'Mali',
                    'value' => 'ML',
                  ),
                  138 => 
                  array (
                    'key' => 'Malta',
                    'value' => 'MT',
                  ),
                  139 => 
                  array (
                    'key' => 'Marshall Islands',
                    'value' => 'MH',
                  ),
                  140 => 
                  array (
                    'key' => 'Martinique',
                    'value' => 'MQ',
                  ),
                  141 => 
                  array (
                    'key' => 'Mauritania',
                    'value' => 'MR',
                  ),
                  142 => 
                  array (
                    'key' => 'Mauritius',
                    'value' => 'MU',
                  ),
                  143 => 
                  array (
                    'key' => 'Mayotte',
                    'value' => 'YT',
                  ),
                  144 => 
                  array (
                    'key' => 'Mexico',
                    'value' => 'MX',
                  ),
                  145 => 
                  array (
                    'key' => 'Micronesia',
                    'value' => 'FM',
                  ),
                  146 => 
                  array (
                    'key' => 'Moldova',
                    'value' => 'MD',
                  ),
                  147 => 
                  array (
                    'key' => 'Monaco',
                    'value' => 'MC',
                  ),
                  148 => 
                  array (
                    'key' => 'Mongolia',
                    'value' => 'MN',
                  ),
                  149 => 
                  array (
                    'key' => 'Montenegro',
                    'value' => 'ME',
                  ),
                  150 => 
                  array (
                    'key' => 'Montserrat',
                    'value' => 'MS',
                  ),
                  151 => 
                  array (
                    'key' => 'Morocco',
                    'value' => 'MA',
                  ),
                  152 => 
                  array (
                    'key' => 'Mozambique',
                    'value' => 'MZ',
                  ),
                  153 => 
                  array (
                    'key' => 'Myanmar (Burma)',
                    'value' => 'MM',
                  ),
                  154 => 
                  array (
                    'key' => 'Namibia',
                    'value' => 'NA',
                  ),
                  155 => 
                  array (
                    'key' => 'Nauru',
                    'value' => 'NR',
                  ),
                  156 => 
                  array (
                    'key' => 'Nepal',
                    'value' => 'NP',
                  ),
                  157 => 
                  array (
                    'key' => 'Netherlands',
                    'value' => 'NL',
                  ),
                  158 => 
                  array (
                    'key' => 'New Caledonia',
                    'value' => 'NC',
                  ),
                  159 => 
                  array (
                    'key' => 'New Zealand',
                    'value' => 'NZ',
                  ),
                  160 => 
                  array (
                    'key' => 'Nicaragua',
                    'value' => 'NI',
                  ),
                  161 => 
                  array (
                    'key' => 'Niger',
                    'value' => 'NE',
                  ),
                  162 => 
                  array (
                    'key' => 'Nigeria',
                    'value' => 'NG',
                  ),
                  163 => 
                  array (
                    'key' => 'Niue',
                    'value' => 'NU',
                  ),
                  164 => 
                  array (
                    'key' => 'Norfolk Island',
                    'value' => 'NF',
                  ),
                  165 => 
                  array (
                    'key' => 'North Korea',
                    'value' => 'KP',
                  ),
                  166 => 
                  array (
                    'key' => 'Northern Mariana Islands',
                    'value' => 'MP',
                  ),
                  167 => 
                  array (
                    'key' => 'Norway',
                    'value' => 'NO',
                  ),
                  168 => 
                  array (
                    'key' => 'Oman',
                    'value' => 'OM',
                  ),
                  169 => 
                  array (
                    'key' => 'Pakistan',
                    'value' => 'PK',
                  ),
                  170 => 
                  array (
                    'key' => 'Palau',
                    'value' => 'PW',
                  ),
                  171 => 
                  array (
                    'key' => 'Palestinian Territories',
                    'value' => 'PS',
                  ),
                  172 => 
                  array (
                    'key' => 'Panama',
                    'value' => 'PA',
                  ),
                  173 => 
                  array (
                    'key' => 'Papua New Guinea',
                    'value' => 'PG',
                  ),
                  174 => 
                  array (
                    'key' => 'Paraguay',
                    'value' => 'PY',
                  ),
                  175 => 
                  array (
                    'key' => 'Peru',
                    'value' => 'PE',
                  ),
                  176 => 
                  array (
                    'key' => 'Philippines',
                    'value' => 'PH',
                  ),
                  177 => 
                  array (
                    'key' => 'Pitcairn Islands',
                    'value' => 'PN',
                  ),
                  178 => 
                  array (
                    'key' => 'Poland',
                    'value' => 'PL',
                  ),
                  179 => 
                  array (
                    'key' => 'Portugal',
                    'value' => 'PT',
                  ),
                  180 => 
                  array (
                    'key' => 'Puerto Rico',
                    'value' => 'PR',
                  ),
                  181 => 
                  array (
                    'key' => 'Qatar',
                    'value' => 'QA',
                  ),
                  182 => 
                  array (
                    'key' => 'Romania',
                    'value' => 'RO',
                  ),
                  183 => 
                  array (
                    'key' => 'Russia',
                    'value' => 'RU',
                  ),
                  184 => 
                  array (
                    'key' => 'Rwanda',
                    'value' => 'RW',
                  ),
                  185 => 
                  array (
                    'key' => 'Réunion',
                    'value' => 'RE',
                  ),
                  186 => 
                  array (
                    'key' => 'Samoa',
                    'value' => 'WS',
                  ),
                  187 => 
                  array (
                    'key' => 'San Marino',
                    'value' => 'SM',
                  ),
                  188 => 
                  array (
                    'key' => 'Saudi Arabia',
                    'value' => 'SA',
                  ),
                  189 => 
                  array (
                    'key' => 'Senegal',
                    'value' => 'SN',
                  ),
                  190 => 
                  array (
                    'key' => 'Serbia',
                    'value' => 'RS',
                  ),
                  191 => 
                  array (
                    'key' => 'Seychelles',
                    'value' => 'SC',
                  ),
                  192 => 
                  array (
                    'key' => 'Sierra Leone',
                    'value' => 'SL',
                  ),
                  193 => 
                  array (
                    'key' => 'Singapore',
                    'value' => 'SG',
                  ),
                  194 => 
                  array (
                    'key' => 'Sint Maarten',
                    'value' => 'SX',
                  ),
                  195 => 
                  array (
                    'key' => 'Slovakia',
                    'value' => 'SK',
                  ),
                  196 => 
                  array (
                    'key' => 'Slovenia',
                    'value' => 'SI',
                  ),
                  197 => 
                  array (
                    'key' => 'Solomon Islands',
                    'value' => 'SB',
                  ),
                  198 => 
                  array (
                    'key' => 'Somalia',
                    'value' => 'SO',
                  ),
                  199 => 
                  array (
                    'key' => 'South Africa',
                    'value' => 'ZA',
                  ),
                  200 => 
                  array (
                    'key' => 'South Georgia & South Sandwich Islands',
                    'value' => 'GS',
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
                    'key' => 'St. Barthélemy',
                    'value' => 'BL',
                  ),
                  206 => 
                  array (
                    'key' => 'St. Helena',
                    'value' => 'SH',
                  ),
                  207 => 
                  array (
                    'key' => 'St. Kitts & Nevis',
                    'value' => 'KN',
                  ),
                  208 => 
                  array (
                    'key' => 'St. Lucia',
                    'value' => 'LC',
                  ),
                  209 => 
                  array (
                    'key' => 'St. Martin',
                    'value' => 'MF',
                  ),
                  210 => 
                  array (
                    'key' => 'St. Pierre & Miquelon',
                    'value' => 'PM',
                  ),
                  211 => 
                  array (
                    'key' => 'St. Vincent & Grenadines',
                    'value' => 'VC',
                  ),
                  212 => 
                  array (
                    'key' => 'Sudan',
                    'value' => 'SD',
                  ),
                  213 => 
                  array (
                    'key' => 'Suriname',
                    'value' => 'SR',
                  ),
                  214 => 
                  array (
                    'key' => 'Svalbard & Jan Mayen',
                    'value' => 'SJ',
                  ),
                  215 => 
                  array (
                    'key' => 'Swaziland',
                    'value' => 'SZ',
                  ),
                  216 => 
                  array (
                    'key' => 'Sweden',
                    'value' => 'SE',
                  ),
                  217 => 
                  array (
                    'key' => 'Switzerland',
                    'value' => 'CH',
                  ),
                  218 => 
                  array (
                    'key' => 'Syria',
                    'value' => 'SY',
                  ),
                  219 => 
                  array (
                    'key' => 'São Tomé & Príncipe',
                    'value' => 'ST',
                  ),
                  220 => 
                  array (
                    'key' => 'Taiwan',
                    'value' => 'TW',
                  ),
                  221 => 
                  array (
                    'key' => 'Tajikistan',
                    'value' => 'TJ',
                  ),
                  222 => 
                  array (
                    'key' => 'Tanzania',
                    'value' => 'TZ',
                  ),
                  223 => 
                  array (
                    'key' => 'Thailand',
                    'value' => 'TH',
                  ),
                  224 => 
                  array (
                    'key' => 'Timor-Leste',
                    'value' => 'TL',
                  ),
                  225 => 
                  array (
                    'key' => 'Togo',
                    'value' => 'TG',
                  ),
                  226 => 
                  array (
                    'key' => 'Tokelau',
                    'value' => 'TK',
                  ),
                  227 => 
                  array (
                    'key' => 'Tonga',
                    'value' => 'TO',
                  ),
                  228 => 
                  array (
                    'key' => 'Trinidad & Tobago',
                    'value' => 'TT',
                  ),
                  229 => 
                  array (
                    'key' => 'Tristan da Cunha',
                    'value' => 'TA',
                  ),
                  230 => 
                  array (
                    'key' => 'Tunisia',
                    'value' => 'TN',
                  ),
                  231 => 
                  array (
                    'key' => 'Turkey',
                    'value' => 'TR',
                  ),
                  232 => 
                  array (
                    'key' => 'Turkmenistan',
                    'value' => 'TM',
                  ),
                  233 => 
                  array (
                    'key' => 'Turks & Caicos Islands',
                    'value' => 'TC',
                  ),
                  234 => 
                  array (
                    'key' => 'Tuvalu',
                    'value' => 'TV',
                  ),
                  235 => 
                  array (
                    'key' => 'U.S. Outlying Islands',
                    'value' => 'UM',
                  ),
                  236 => 
                  array (
                    'key' => 'U.S. Virgin Islands',
                    'value' => 'VI',
                  ),
                  237 => 
                  array (
                    'key' => 'Uganda',
                    'value' => 'UG',
                  ),
                  238 => 
                  array (
                    'key' => 'Ukraine',
                    'value' => 'UA',
                  ),
                  239 => 
                  array (
                    'key' => 'United Arab Emirates',
                    'value' => 'AE',
                  ),
                  240 => 
                  array (
                    'key' => 'United Kingdom',
                    'value' => 'GB',
                  ),
                  241 => 
                  array (
                    'key' => 'United Nations',
                    'value' => 'UN',
                  ),
                  242 => 
                  array (
                    'key' => 'United States',
                    'value' => 'US',
                  ),
                  243 => 
                  array (
                    'key' => 'Uruguay',
                    'value' => 'UY',
                  ),
                  244 => 
                  array (
                    'key' => 'Uzbekistan',
                    'value' => 'UZ',
                  ),
                  245 => 
                  array (
                    'key' => 'Vanuatu',
                    'value' => 'VU',
                  ),
                  246 => 
                  array (
                    'key' => 'Vatican City',
                    'value' => 'VA',
                  ),
                  247 => 
                  array (
                    'key' => 'Venezuela',
                    'value' => 'VE',
                  ),
                  248 => 
                  array (
                    'key' => 'Vietnam',
                    'value' => 'VN',
                  ),
                  249 => 
                  array (
                    'key' => 'Wallis & Futuna',
                    'value' => 'WF',
                  ),
                  250 => 
                  array (
                    'key' => 'Western Sahara',
                    'value' => 'EH',
                  ),
                  251 => 
                  array (
                    'key' => 'Yemen',
                    'value' => 'YE',
                  ),
                  252 => 
                  array (
                    'key' => 'Zambia',
                    'value' => 'ZM',
                  ),
                  253 => 
                  array (
                    'key' => 'Zimbabwe',
                    'value' => 'ZW',
                  ),
                  254 => 
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
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'country',
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
              8 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'queryColumnType' => 'text',
                 'phpdocType' => 'array',
                 'relationType' => true,
                 'visibleFields' => 'id,name,fullpath',
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' => 
                array (
                ),
                 'lazyLoading' => true,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'Category',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'categories',
                 'title' => 'Categories',
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
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Media',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Media',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
                 'fieldtype' => 'imageGallery',
                 'queryColumnType' => 
                array (
                  'images' => 'text',
                  'hotspots' => 'text',
                ),
                 'columnType' => 
                array (
                  'images' => 'text',
                  'hotspots' => 'text',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ImageGallery',
                 'width' => 300,
                 'height' => 300,
                 'uploadPath' => '',
                 'ratioX' => NULL,
                 'ratioY' => NULL,
                 'predefinedDataTemplates' => '',
                 'name' => 'gallery',
                 'title' => 'Gallery',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
                 'fieldtype' => 'imageGallery',
                 'queryColumnType' => 
                array (
                  'images' => 'text',
                  'hotspots' => 'text',
                ),
                 'columnType' => 
                array (
                  'images' => 'text',
                  'hotspots' => 'text',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\ImageGallery',
                 'width' => 300,
                 'height' => 300,
                 'uploadPath' => '',
                 'ratioX' => NULL,
                 'ratioY' => NULL,
                 'predefinedDataTemplates' => '',
                 'name' => 'genericImages',
                 'title' => 'Generic Images',
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
             'name' => 'Attributes',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Attributes',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Objectbrick',
                 'allowedTypes' => 
                array (
                  0 => 'Dimensions',
                  1 => 'Transmission',
                  2 => 'Bodywork',
                  3 => 'Engine',
                ),
                 'maxItems' => '',
                 'border' => false,
                 'name' => 'attributes',
                 'title' => 'Attributes',
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
            ),
             'locked' => false,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => NULL,
             'name' => 'Sale Information',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Sale Information',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Objectbrick',
                 'allowedTypes' => 
                array (
                  0 => 'SaleInformation',
                ),
                 'maxItems' => '',
                 'border' => false,
                 'name' => 'saleInformation',
                 'title' => 'Sale Information',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Geopoint::__set_state(array(
                 'fieldtype' => 'geopoint',
                 'queryColumnType' => 
                array (
                  'longitude' => 'double',
                  'latitude' => 'double',
                ),
                 'columnType' => 
                array (
                  'longitude' => 'double',
                  'latitude' => 'double',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\Geopoint',
                 'lat' => 0.0,
                 'lng' => 0.0,
                 'zoom' => 1,
                 'mapType' => 'roadmap',
                 'name' => 'location',
                 'title' => 'Location',
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
            ),
             'locked' => false,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 180,
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'name' => 'Data Quality',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Data Quality',
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
                 'html' => '',
                 'renderingClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                 'renderingData' => '',
                 'border' => false,
                 'name' => 'QualitySummary',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
                 'width' => NULL,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => 'padding: .75rem 1.25rem; color: #0c5460;     background-color: #d1ecf1; border-color: #bee5eb; border-radius: .25rem;',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                 'fieldtype' => 'localizedfields',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
                 'childs' => 
                array (
                  0 => 
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'elementType' => 'input',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'textsAvailable',
                     'title' => 'Texts Available',
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
                ),
                 'name' => 'localizedfields',
                 'region' => NULL,
                 'layout' => NULL,
                 'title' => '',
                 'width' => '',
                 'height' => '',
                 'maxTabs' => NULL,
                 'labelWidth' => 210,
                 'border' => false,
                 'provideSplitView' => false,
                 'tabPosition' => NULL,
                 'hideLabelsWhenTabsReached' => NULL,
                 'referencedFields' => 
                array (
                ),
                 'fieldDefinitionsCache' => NULL,
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
                 'index' => NULL,
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'labelWidth' => 210,
                 'layout' => NULL,
                 'border' => false,
                 'icon' => '',
                 'name' => 'Layout',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => '',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'elementType' => 'input',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'attributesAvailable',
                     'title' => 'Attributes Available',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'elementType' => 'input',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'saleInformationAvailable',
                     'title' => 'Sale Information Available',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\CalculatedValue::__set_state(array(
                     'fieldtype' => 'calculatedValue',
                     'elementType' => 'input',
                     'width' => 0,
                     'calculatorClass' => '\\AppBundle\\Model\\Product\\CalculatedValue\\QualityCalculator',
                     'queryColumnType' => 'varchar',
                     'columnLength' => 190,
                     'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\CalculatedValue',
                     'name' => 'imagesAvailable',
                     'title' => 'Images Available',
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
                ),
                 'locked' => false,
              )),
            ),
             'locked' => false,
          )),
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'border' => false,
             'icon' => '',
             'name' => 'System Data',
             'type' => NULL,
             'region' => NULL,
             'title' => 'System Data',
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
                 'html' => '<div class="alert alert-info">
Define type of Car object to manage, which elements should be visible in shop and which are only helper objects to take advantage of data inheritance. 
<ul>
<li><strong>actual-car</strong>: Actual cars that should be visible in shop. </li>
<li><strong>virtual-car</strong>: Virtual objects that are only helper objects for setting up data inheritance. Will not be visible in shop.</li></ul></div>',
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
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' => 
                array (
                ),
                 'locked' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' => 
                array (
                  0 => 
                  array (
                    'key' => 'Actual-Car',
                    'value' => 'actual-car',
                  ),
                  1 => 
                  array (
                    'key' => 'Virtual-Car',
                    'value' => 'virtual-car',
                  ),
                ),
                 'width' => 300,
                 'defaultValue' => 'actual-car',
                 'optionsProviderClass' => '',
                 'optionsProviderData' => '',
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
                 'dynamicOptions' => false,
                 'name' => 'objectType',
                 'title' => 'Object Type',
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
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'icon' => '/static/images/icons/car_gray.svg',
   'previewUrl' => '',
   'group' => 'Product Data',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '@AppBundle\\Website\\LinkGenerator\\ProductLinkGenerator',
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
   'dao' => NULL,
));
