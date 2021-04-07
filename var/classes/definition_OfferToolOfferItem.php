<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- product [manyToOneRelation]
- productNumber [input]
- productName [input]
- amount [numeric]
- originalTotalPrice [numeric]
- DiscountType [select]
- discount [numeric]
- finalTotalPrice [numeric]
- subItems [manyToManyObjectRelation]
- comment [textarea]
- cartItemKey [input]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'EF_OTOI',
   'name' => 'OfferToolOfferItem',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805448,
   'userOwner' => 0,
   'userModification' => 1,
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\OfferTool\\AbstractOfferItem',
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => '',
         'border' => false,
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
             'fieldtype' => 'text',
             'html' => '<b>OfferToolItem</b>s for items of offers.&nbsp;<div>​May be extended for specific use case.&nbsp;</div>',
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
             'blockedVarsForExport' =>
            array (
            ),
          )),
          1 =>
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
                 'pathFormatterClass' => NULL,
                 'name' => 'product',
                 'title' => 'Produkt',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => false,
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
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'name' => 'productNumber',
                 'title' => 'Produktnummer',
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
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'name' => 'productName',
                 'title' => 'Produktname',
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
          2 =>
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
                 'unique' => NULL,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'name' => 'amount',
                 'title' => 'Amount',
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
                 'unique' => NULL,
                 'decimalSize' => 19,
                 'decimalPrecision' => 4,
                 'name' => 'originalTotalPrice',
                 'title' => 'Original Total Price',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
                 'fieldtype' => 'select',
                 'options' =>
                array (
                  0 =>
                  array (
                    'key' => 'Percent',
                    'value' => 'percent',
                  ),
                  1 =>
                  array (
                    'key' => 'Amount',
                    'value' => 'amount',
                  ),
                ),
                 'width' => 400,
                 'defaultValue' => '',
                 'optionsProviderClass' => NULL,
                 'optionsProviderData' => NULL,
                 'columnLength' => 190,
                 'dynamicOptions' => false,
                 'name' => 'DiscountType',
                 'title' => 'Discount Type',
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
              3 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => NULL,
                 'decimalSize' => 19,
                 'decimalPrecision' => 4,
                 'name' => 'discount',
                 'title' => 'Discount',
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
              4 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => NULL,
                 'decimalSize' => 19,
                 'decimalPrecision' => 4,
                 'name' => 'finalTotalPrice',
                 'title' => 'Preis',
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
             'pathFormatterClass' => NULL,
             'name' => 'subItems',
             'title' => 'Subitems',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
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
          5 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
             'fieldtype' => 'fieldset',
             'name' => 'System Informations',
             'type' => NULL,
             'region' => NULL,
             'title' => 'System Informations',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => true,
             'collapsed' => true,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 400,
                 'defaultValue' => NULL,
                 'columnLength' => 255,
                 'regex' => '',
                 'unique' => NULL,
                 'showCharCount' => NULL,
                 'name' => 'cartItemKey',
                 'title' => 'CartItemKey',
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
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '',
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
   'enableGridLocking' => false,
   'dao' => NULL,
   'blockedVarsForExport' =>
  array (
  ),
));
