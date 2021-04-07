<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- taxEntryCombinationType [select]
- taxEntries [fieldcollections]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'EF_OSTC',
   'name' => 'OnlineShopTaxClass',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805434,
   'userOwner' => 0,
   'userModification' => 1,
   'parentClass' => '',
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
             'fieldtype' => 'text',
             'html' => '<div><font size="2"><b>OnlineShopTaxClass </b>as definition for tax calculation within ecommerce frameworks price systems. Products price system decides which TaxClass to take and does the tax calculation based on it.&nbsp;<br></font></div><div><font size="2"><b><br></b></font></div><div><font size="2"><b>Tax Entry Combination Type</b> defines how tax entry rates are combined:&nbsp;</font></div><div><ul><li><font size="2"><b>Combine:</b> Sum up all tax rates and calculates tax amount afterwards.<br></font></li><li><font size="2"><b>One After Another:</b> For each tax rate calculate tax amount, add it to total sum and then calculate tax amount for next tax rate based on new total sum. </font><b style="font-size: 13px;">&nbsp;</b><br></li></ul></div>',
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
                'key' => 'Combine',
                'value' => 'combine',
              ),
              1 =>
              array (
                'key' => 'One After Another',
                'value' => 'oneAfterAnother',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'columnLength' => '190',
             'dynamicOptions' => false,
             'name' => 'taxEntryCombinationType',
             'title' => 'Tax Entry Combination Type',
             'tooltip' => '',
             'mandatory' => true,
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
             'fieldtype' => 'fieldcollections',
             'allowedTypes' =>
            array (
              0 => 'TaxEntry',
            ),
             'lazyLoading' => false,
             'maxItems' => '',
             'disallowAddRemove' => false,
             'disallowReorder' => false,
             'collapsed' => false,
             'collapsible' => false,
             'border' => false,
             'name' => 'taxEntries',
             'title' => 'Tax Entries',
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
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'icon' => '/bundles/pimcoreadmin/img/twemoji/1f4b6.svg',
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
