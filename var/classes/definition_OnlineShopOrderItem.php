<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- orderState [select]
- product [manyToOneRelation]
- productNumber [input]
- productName [input]
- amount [numeric]
- totalNetPrice [numeric]
- totalPrice [numeric]
- taxInfo [table]
- pricingRules [fieldcollections]
- comment [textarea]
- subItems [manyToManyObjectRelation]
- customized [objectbricks]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'EF_OSOI',
   'name' => 'OnlineShopOrderItem',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805438,
   'userOwner' => 0,
   'userModification' => 1,
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractOrderItem',
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
             'layout' => '',
             'border' => false,
             'name' => 'general',
             'type' => NULL,
             'region' => NULL,
             'title' => 'General Information',
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
                 'html' => '<b>OnlineShopOrderItem </b>for storage of order items.&nbsp;<div>​May be extended for specific use case.&nbsp;<br></div>',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' =>
                array (
                  0 =>
                  array (
                    'key' => 'Committed',
                    'value' => 'committed',
                  ),
                  1 =>
                  array (
                    'key' => 'Cancelled',
                    'value' => 'cancelled',
                  ),
                ),
                 'width' => 400,
                 'defaultValue' => '',
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'orderState',
                 'title' => 'Order Item State',
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
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                 'fieldtype' => 'fieldset',
                 'name' => 'Product Information',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Product Information',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
                     'fieldtype' => 'manyToOneRelation',
                     'width' => 400,
                     'assetUploadPath' => '',
                     'relationType' => true,
                     'objectsAllowed' => true,
                     'assetsAllowed' => false,
                     'assetTypes' =>
                    array (
                    ),
                     'documentsAllowed' => false,
                     'documentTypes' =>
                    array (
                    ),
                     'classes' =>
                    array (
                    ),
                     'pathFormatterClass' => '',
                     'name' => 'product',
                     'title' => 'Produkt',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
                     'datatype' => 'data',
                     'invisible' => false,
                     'visibleGridView' => false,
                     'visibleSearch' => false,
                     'blockedVarsForExport' =>
                    array (
                    ),
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => 400,
                     'defaultValue' => NULL,
                     'columnLength' => 255,
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => false,
                     'name' => 'productNumber',
                     'title' => 'Produktnummer',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => 400,
                     'defaultValue' => NULL,
                     'columnLength' => 255,
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => false,
                     'name' => 'productName',
                     'title' => 'Produktname',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
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
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
              )),
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                 'fieldtype' => 'fieldset',
                 'name' => 'Price Information',
                 'type' => NULL,
                 'region' => NULL,
                 'title' => 'Price Information',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'fieldtype' => 'numeric',
                     'width' => 400,
                     'defaultValue' => NULL,
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => NULL,
                     'decimalPrecision' => NULL,
                     'name' => 'amount',
                     'title' => 'Amount',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
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
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'fieldtype' => 'numeric',
                     'width' => 400,
                     'defaultValue' => NULL,
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => 19,
                     'decimalPrecision' => 4,
                     'name' => 'totalNetPrice',
                     'title' => 'NetPrice',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                     'fieldtype' => 'numeric',
                     'width' => 400,
                     'defaultValue' => NULL,
                     'integer' => false,
                     'unsigned' => false,
                     'minValue' => NULL,
                     'maxValue' => NULL,
                     'unique' => false,
                     'decimalSize' => 19,
                     'decimalPrecision' => 4,
                     'name' => 'totalPrice',
                     'title' => 'Price',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => true,
                     'index' => false,
                     'locked' => false,
                     'style' => '',
                     'permissions' => '',
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
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Table::__set_state(array(
                     'fieldtype' => 'table',
                     'width' => '',
                     'height' => '',
                     'cols' => '',
                     'colsFixed' => false,
                     'rows' => '',
                     'rowsFixed' => false,
                     'data' => '',
                     'columnConfigActivated' => false,
                     'columnConfig' =>
                    array (
                    ),
                     'name' => 'taxInfo',
                     'title' => 'Tax Information',
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
                  )),
                  4 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                     'fieldtype' => 'fieldcollections',
                     'allowedTypes' =>
                    array (
                      0 => 'PricingRule',
                    ),
                     'lazyLoading' => true,
                     'maxItems' => '',
                     'disallowAddRemove' => false,
                     'disallowReorder' => false,
                     'collapsed' => false,
                     'collapsible' => false,
                     'border' => false,
                     'name' => 'pricingRules',
                     'title' => 'Pricing Rules',
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
                  )),
                ),
                 'locked' => false,
                 'blockedVarsForExport' =>
                array (
                ),
                 'labelWidth' => 100,
                 'labelAlign' => 'left',
              )),
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'fieldtype' => 'textarea',
                 'width' => 400,
                 'height' => '',
                 'maxLength' => NULL,
                 'showCharCount' => NULL,
                 'excludeFromSearchIndex' => false,
                 'name' => 'comment',
                 'title' => 'Comment',
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
              )),
              5 =>
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
                    'classes' => 'OnlineShopOrderItem',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'subItems',
                 'title' => 'Subitems',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => '',
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
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'customizations',
             'type' => NULL,
             'region' => '',
             'title' => 'Customizations',
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
                 'html' => '<b>Customized</b>&nbsp;gives you the possibility to add object bricks with&nbsp;additional data to your order items.',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks::__set_state(array(
                 'fieldtype' => 'objectbricks',
                 'allowedTypes' =>
                array (
                ),
                 'maxItems' => '',
                 'border' => false,
                 'name' => 'customized',
                 'title' => 'Customized',
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
   'icon' => '/bundles/pimcoreadmin/img/twemoji/1f4e6.svg',
   'previewUrl' => '',
   'group' => 'E-Commerce',
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
