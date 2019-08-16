<?php 

/** 
* Generated at: 2019-08-14T16:41:12+02:00
* IP: 192.168.9.96


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - ranges [structuredTable]
 - preSelectFrom [numeric]
 - preSelectTo [numeric]
 - scriptPath [input]
 - unit [input]
*/ 


return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'key' => 'FilterNumberRangeSelection',
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractFilterDefinitionType',
   'title' => '',
   'group' => 'FilterTypes',
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
         'icon' => '',
         'name' => 'Layout',
         'type' => '',
         'region' => '',
         'title' => 'NumberRange Select',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => true,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => '',
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
             'fieldtype' => 'text',
             'html' => '<b>Filter Numberrange Selection</b><div><div>Filter for number ranges with predefined ranges.&nbsp;</div><div>- ranges: predefined ranges.&nbsp;</div></div><div>- unit: free textfield with is displayed in frontend if so implemented by view script.&nbsp;</div>',
             'renderingClass' => NULL,
             'renderingData' => NULL,
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 255,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'label',
             'title' => 'Label',
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
          2 => 
          Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ClassDefinition\IndexFieldSelection::__set_state(array(
             'fieldtype' => 'indexFieldSelection',
             'queryColumnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'columnType' => 
            array (
              'tenant' => 'varchar(100)',
              'field' => 'varchar(200)',
              'preSelect' => 'text',
            ),
             'phpdocType' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\CoreExtensions\\ObjectData\\IndexFieldSelection',
             'width' => 400,
             'considerTenants' => true,
             'multiPreSelect' => 'none',
             'filterGroups' => 
            array (
              0 => 'double',
            ),
             'predefinedPreSelectOptions' => 
            array (
            ),
             'name' => 'field',
             'title' => 'Field',
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
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\StructuredTable::__set_state(array(
             'fieldtype' => 'structuredTable',
             'width' => 650,
             'height' => 200,
             'labelWidth' => NULL,
             'labelFirstCell' => '',
             'cols' => 
            array (
              0 => 
              array (
                'position' => '1',
                'key' => 'from',
                'label' => 'from',
                'type' => 'number',
                'width' => 300,
                'id' => 'extModel3155-1',
                'length' => NULL,
              ),
              1 => 
              array (
                'position' => 2,
                'key' => 'to',
                'label' => 'to',
                'type' => 'number',
                'width' => 300,
                'id' => 'extModel3155-2',
              ),
            ),
             'rows' => 
            array (
              0 => 
              array (
                'position' => '1',
                'key' => 'range1',
                'label' => '1',
                'id' => 'extModel3131-1',
              ),
              1 => 
              array (
                'position' => '2',
                'key' => 'range2',
                'label' => '2',
                'id' => 'extModel3131-2',
              ),
              2 => 
              array (
                'position' => '3',
                'key' => 'range3',
                'label' => '3',
                'id' => 'extModel3131-3',
              ),
              3 => 
              array (
                'position' => '4',
                'key' => 'range4',
                'label' => '4',
                'id' => 'extModel3131-4',
              ),
            ),
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Data\\StructuredTable',
             'name' => 'ranges',
             'title' => 'Ranges',
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
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => 400,
             'defaultValue' => NULL,
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => NULL,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'name' => 'preSelectFrom',
             'title' => 'Pre Select From',
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
          5 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => 400,
             'defaultValue' => NULL,
             'queryColumnType' => 'double',
             'columnType' => 'double',
             'phpdocType' => 'float',
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => NULL,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'name' => 'preSelectTo',
             'title' => 'Pre Select To',
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
          6 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 255,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'scriptPath',
             'title' => 'Script Path',
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
          7 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'fieldtype' => 'input',
             'width' => 400,
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 255,
             'phpdocType' => 'string',
             'regex' => '',
             'unique' => NULL,
             'showCharCount' => NULL,
             'name' => 'unit',
             'title' => 'Unit',
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
