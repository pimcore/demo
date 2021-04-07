<?php

/**
* Inheritance: yes
* Variants: no


Fields Summary:
- localizedfields [localizedfields]
-- name [input]
-- productNamePart [input]
- filterDefinition [manyToOneRelation]
- cars [reverseObjectRelation]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'CA',
   'name' => 'Category',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805414,
   'userOwner' => 2,
   'userModification' => 1,
   'parentClass' => '\\Pimcore\\Bundle\\EcommerceFrameworkBundle\\Model\\AbstractCategory',
   'implementsInterfaces' => '',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                 'fieldtype' => 'localizedfields',
                 'childs' =>
                array (
                  0 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => NULL,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
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
                     'blockedVarsForExport' =>
                    array (
                    ),
                     'defaultValueGenerator' => '',
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                     'fieldtype' => 'input',
                     'width' => NULL,
                     'defaultValue' => NULL,
                     'columnLength' => 190,
                     'regex' => '',
                     'unique' => false,
                     'showCharCount' => false,
                     'name' => 'productNamePart',
                     'title' => 'Product Name Part',
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
                 'name' => 'localizedfields',
                 'region' => NULL,
                 'layout' => NULL,
                 'title' => 'Texts',
                 'width' => '',
                 'height' => '',
                 'maxTabs' => NULL,
                 'border' => false,
                 'provideSplitView' => true,
                 'tabPosition' => 'top',
                 'hideLabelsWhenTabsReached' => NULL,
                 'referencedFields' =>
                array (
                ),
                 'fieldDefinitionsCache' => NULL,
                 'permissionView' =>
                array (
                ),
                 'permissionEdit' =>
                array (
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
             'name' => 'Relations',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Relations',
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
                 'width' => 800,
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
                  0 =>
                  array (
                    'classes' => 'FilterDefinition',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'filterDefinition',
                 'title' => 'Filter Definition',
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
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ReverseObjectRelation::__set_state(array(
                 'fieldtype' => 'reverseObjectRelation',
                 'ownerClassName' => 'Car',
                 'ownerClassId' => NULL,
                 'ownerFieldName' => 'categories',
                 'lazyLoading' => true,
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
                ),
                 'pathFormatterClass' => '',
                 'name' => 'cars',
                 'title' => 'Cars',
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
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/genealogy.svg',
   'previewUrl' => '',
   'group' => 'Product Data',
   'showAppLoggerTab' => false,
   'linkGeneratorReference' => '@App\\Website\\LinkGenerator\\CategoryLinkGenerator',
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
