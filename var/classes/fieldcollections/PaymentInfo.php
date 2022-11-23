<?php

/**
 * Fields Summary:
 * - paymentStart [datetime]
 * - paymentFinish [datetime]
 * - paymentReference [input]
 * - paymentState [select]
 * - internalPaymentId [input]
 * - message [textarea]
 * - providerData [textarea]
 * - provider_paypal_amount [input]
 * - provider_paypal_PaymentType [input]
 */

return Pimcore\Model\DataObject\Fieldcollection\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'PaymentInfo',
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractPaymentInformation',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'Order Details',
   'layoutDefinitions' =>
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
             'name' => 'paymentStart',
             'title' => 'Payment Start',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'datetime',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'queryColumnType' => 'bigint(20)',
             'columnType' => 'bigint(20)',
             'defaultValue' => NULL,
             'useCurrentDate' => false,
             'defaultValueGenerator' => '',
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
             'name' => 'paymentFinish',
             'title' => 'Payment Finish',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'datetime',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'queryColumnType' => 'bigint(20)',
             'columnType' => 'bigint(20)',
             'defaultValue' => NULL,
             'useCurrentDate' => false,
             'defaultValueGenerator' => '',
          )),
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'paymentReference',
             'title' => 'Payment Reference',
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
             'width' => 500,
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'paymentState',
             'title' => 'Payment State',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
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
              2 =>
              array (
                'key' => 'Payment Init',
                'value' => 'paymentInit',
              ),
              3 =>
              array (
                'key' => 'Payment Pending',
                'value' => 'paymentPending',
              ),
              4 =>
              array (
                'key' => 'Payment Authorized',
                'value' => 'paymentAuthorized',
              ),
              5 =>
              array (
                'key' => 'Aborted',
                'value' => 'aborted',
              ),
              6 =>
              array (
                'key' => 'Aborted but Response Received',
                'value' => 'abortedButResponseReceived',
              ),
            ),
             'width' => 500,
             'defaultValue' => '',
             'optionsProviderClass' => NULL,
             'optionsProviderData' => NULL,
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          4 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
             'name' => 'internalPaymentId',
             'title' => 'Internal Payment ID',
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
             'width' => 500,
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
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'name' => 'message',
             'title' => 'Message',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'textarea',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 500,
             'height' => 100,
             'maxLength' => NULL,
             'showCharCount' => false,
             'excludeFromSearchIndex' => false,
          )),
          6 =>
          Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
             'name' => 'providerData',
             'title' => 'Provider Data',
             'tooltip' => 'JSON',
             'mandatory' => false,
             'noteditable' => true,
             'index' => null,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'textarea',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' =>
            array (
            ),
             'width' => 500,
             'height' => 200,
             'maxLength' => NULL,
             'showCharCount' => false,
             'excludeFromSearchIndex' => false,
          )),
          7 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
             'name' => 'additionalDataPaypal',
             'type' => NULL,
             'region' => '',
             'title' => 'Additional Paypal Data',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => true,
             'collapsed' => true,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'children' =>
            array (
              0 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'provider_paypal_amount',
                 'title' => 'Amount',
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
                 'width' => NULL,
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
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'name' => 'provider_paypal_PaymentType',
                 'title' => 'Payment Type',
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
                 'width' => 500,
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
             'fieldtype' => 'fieldset',
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
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' =>
  array (
  ),
));
