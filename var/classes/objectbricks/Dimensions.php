<?php

/**
Fields Summary:
- length [quantityValue]
- width [quantityValue]
- wheelbase [quantityValue]
- weight [quantityValue]
*/


return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'classDefinitions' =>
  array (
    0 =>
    array (
      'classname' => 'Car',
      'fieldname' => 'attributes',
    ),
  ),
   'dao' => NULL,
   'key' => 'Dimensions',
   'parentClass' => '',
   'implementsInterfaces' => NULL,
   'title' => '',
   'group' => '',
   'generateTypeDeclarations' => true,
   'layoutDefinitions' =>
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
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
         'layout' => NULL,
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
          0 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'unitWidth' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' =>
            array (
              0 => '1',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'queryColumnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\QuantityValue',
             'name' => 'length',
             'title' => 'Length',
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
             'defaultValueGenerator' => '',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'unitWidth' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' =>
            array (
              0 => '1',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'queryColumnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\QuantityValue',
             'name' => 'width',
             'title' => 'Width',
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
             'defaultValueGenerator' => '',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'unitWidth' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '1',
             'validUnits' =>
            array (
              0 => '1',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'queryColumnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\QuantityValue',
             'name' => 'wheelbase',
             'title' => 'Wheelbase',
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
             'defaultValueGenerator' => '',
          )),
          3 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'unitWidth' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '3',
             'validUnits' =>
            array (
              0 => '3',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'queryColumnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'columnType' =>
            array (
              'value' => 'double',
              'unit' => 'bigint(20)',
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\QuantityValue',
             'name' => 'weight',
             'title' => 'Weight',
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
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'icon' => NULL,
      )),
    ),
     'locked' => false,
     'icon' => NULL,
  )),
));
