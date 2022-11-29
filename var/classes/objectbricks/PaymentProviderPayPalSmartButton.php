<?php

/**
 * Fields Summary:
 * - configurationKey [input]
 * - auth_orderID [input]
 * - auth_payerID [input]
 * - auth_email_address [input]
 * - auth_given_name [input]
 * - auth_surname [input]
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'PaymentProviderPayPalSmartButton',
   'parentClass' => '',
   'implementsInterfaces' => NULL,
   'title' => '',
   'group' => 'PaymentProvider',
   'layoutDefinitions' =>
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
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
     'children' =>
    array (
      0 =>
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
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
         'children' =>
        array (
          0 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'configurationKey',
             'title' => 'Configuration Key',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => NULL,
             'defaultValue' => NULL,
             'columnLength' => 190,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'auth_orderID',
             'title' => 'OrderID',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'auth_payerID',
             'title' => 'PayerID',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          3 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'auth_email_address',
             'title' => 'Email Address',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          4 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'auth_given_name',
             'title' => 'Given Name',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
          5 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'auth_surname',
             'title' => 'Surname',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'input',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 400,
             'defaultValue' => NULL,
             'columnLength' => 255,
             'regex' => '',
             'regexFlags' =>
            array (
            ),
             'unique' => false,
             'showCharCount' => false,
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' =>
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => NULL,
         'labelWidth' => 150,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' =>
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => false,
   'blockedVarsForExport' =>
  array (
  ),
   'classDefinitions' =>
  array (
    0 =>
    array (
      'classname' => 'OnlineShopOrder',
      'fieldname' => 'paymentProvider',
    ),
  ),
));
