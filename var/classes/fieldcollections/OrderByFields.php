<?php 

/** 
* Generated at: 2019-08-16T12:48:46+02:00
* IP: 192.168.9.96


Fields Summary: 
 - field [indexFieldSelectionCombo]
 - direction [select]
*/ 


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'key' => 'OrderByFields',
   'parentClass' => '',
   'title' => '',
   'group' => 'Filter Definition',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'name' => NULL,
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
         'layout' => '',
         'border' => false,
         'icon' => NULL,
         'name' => 'Layout',
         'type' => '',
         'region' => '',
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => '',
         'childs' => 
        array (
          0 => 
          Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ClassDefinition\IndexFieldSelectionCombo::__set_state(array(
             'fieldtype' => 'indexFieldSelectionCombo',
             'specificPriceField' => false,
             'showAllFields' => false,
             'considerTenants' => true,
             'options' => 
            array (
              0 => 
              array (
                'key' => 'categoryIds',
                'value' => 'categoryIds',
              ),
              1 => 
              array (
                'key' => 'name',
                'value' => 'name',
              ),
              2 => 
              array (
                'key' => 'seoname',
                'value' => 'seoname',
              ),
              3 => 
              array (
                'key' => 'description',
                'value' => 'description',
              ),
              4 => 
              array (
                'key' => 'ean',
                'value' => 'ean',
              ),
              5 => 
              array (
                'key' => 'artno',
                'value' => 'artno',
              ),
              6 => 
              array (
                'key' => 'gender',
                'value' => 'gender',
              ),
              7 => 
              array (
                'key' => 'color',
                'value' => 'color',
              ),
              8 => 
              array (
                'key' => 'size',
                'value' => 'size',
              ),
              9 => 
              array (
                'key' => 'price',
                'value' => 'price',
              ),
              10 => 
              array (
                'key' => 'foottype',
                'value' => 'foottype',
              ),
              11 => 
              array (
                'key' => 'gaittype',
                'value' => 'gaittype',
              ),
              12 => 
              array (
                'key' => 'fittings',
                'value' => 'fittings',
              ),
              13 => 
              array (
                'key' => 'zips',
                'value' => 'zips',
              ),
              14 => 
              array (
                'key' => 'approvals',
                'value' => 'approvals',
              ),
              15 => 
              array (
                'key' => 'rating',
                'value' => 'rating',
              ),
              16 => 
              array (
                'key' => 'features',
                'value' => 'features',
              ),
              17 => 
              array (
                'key' => 'attributes',
                'value' => 'attributes',
              ),
              18 => 
              array (
                'key' => 'technologies',
                'value' => 'technologies',
              ),
            ),
             'width' => 300,
             'defaultValue' => NULL,
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar(255)',
             'columnType' => 'varchar(255)',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'field',
             'title' => 'Field',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'asc',
                'value' => 'asc',
              ),
              1 => 
              array (
                'key' => 'desc',
                'value' => 'desc',
              ),
            ),
             'width' => 500,
             'defaultValue' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'queryColumnType' => 'varchar(255)',
             'columnType' => 'varchar(255)',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'direction',
             'title' => 'Direction',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => '',
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
   'dao' => NULL,
));
