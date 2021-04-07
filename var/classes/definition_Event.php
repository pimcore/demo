<?php

/**
* Inheritance: no
* Variants: no


Fields Summary:
- localizedfields [localizedfields]
-- title [input]
-- description [wysiwyg]
- tags [multiselect]
- locationAddress [textarea]
- locationMap [geopoint]
- fromDate [datetime]
- toDate [datetime]
- cars [manyToManyObjectRelation]
- mainImage [image]
- video [video]
- images [imageGallery]
- contactName [input]
- contactPhone [input]
- contactEmail [input]
- contactAddress [textarea]
*/


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'id' => 'EV',
   'name' => 'Event',
   'description' => '',
   'creationDate' => 0,
   'modificationDate' => 1617805490,
   'userOwner' => 2,
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
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'border' => false,
         'tabPosition' => NULL,
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
          Pimcore\Model\DataObject\ClassDefinition\Layout\Region::__set_state(array(
             'fieldtype' => 'region',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Base',
                 'type' => NULL,
                 'region' => 'center',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Localizedfields::__set_state(array(
                     'fieldtype' => 'localizedfields',
                     'childs' =>
                    array (
                      0 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                         'fieldtype' => 'input',
                         'width' => 540,
                         'defaultValue' => NULL,
                         'columnLength' => 255,
                         'regex' => '',
                         'unique' => false,
                         'showCharCount' => false,
                         'name' => 'title',
                         'title' => 'title',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                         'fieldtype' => 'wysiwyg',
                         'width' => 640,
                         'height' => 250,
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
                         'visibleGridView' => true,
                         'visibleSearch' => true,
                         'blockedVarsForExport' =>
                        array (
                        ),
                      )),
                    ),
                     'name' => 'localizedfields',
                     'region' => NULL,
                     'layout' => NULL,
                     'title' => '',
                     'width' => '',
                     'height' => '',
                     'maxTabs' => NULL,
                     'border' => false,
                     'provideSplitView' => false,
                     'tabPosition' => NULL,
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
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
                     'fieldtype' => 'multiselect',
                     'options' =>
                    array (
                      0 =>
                      array (
                        'key' => 'Trade Show',
                        'value' => 'Trade Show',
                      ),
                      1 =>
                      array (
                        'key' => 'Salzburg',
                        'value' => 'Salzburg',
                      ),
                      2 =>
                      array (
                        'key' => 'Vienna',
                        'value' => 'Vienna',
                      ),
                      3 =>
                      array (
                        'key' => 'Wels',
                        'value' => 'Wels',
                      ),
                      4 =>
                      array (
                        'key' => 'Retro',
                        'value' => 'Retro',
                      ),
                      5 =>
                      array (
                        'key' => 'International',
                        'value' => 'International',
                      ),
                      6 =>
                      array (
                        'key' => '1950',
                        'value' => '1950',
                      ),
                      7 =>
                      array (
                        'key' => '1960',
                        'value' => '1960',
                      ),
                      8 =>
                      array (
                        'key' => '1970',
                        'value' => '1970',
                      ),
                    ),
                     'width' => 500,
                     'height' => '',
                     'maxItems' => '',
                     'renderType' => 'tags',
                     'optionsProviderClass' => '',
                     'optionsProviderData' => '',
                     'dynamicOptions' => false,
                     'name' => 'tags',
                     'title' => 'Tags',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => 'margin-left:50px',
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
                  2 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                     'fieldtype' => 'textarea',
                     'width' => 550,
                     'height' => 70,
                     'maxLength' => NULL,
                     'showCharCount' => false,
                     'excludeFromSearchIndex' => false,
                     'name' => 'locationAddress',
                     'title' => 'Location Address',
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
                  3 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Geopoint::__set_state(array(
                     'fieldtype' => 'geopoint',
                     'lat' => 0.0,
                     'lng' => 0.0,
                     'zoom' => 1,
                     'width' => 0,
                     'height' => 0,
                     'mapType' => 'roadmap',
                     'name' => 'locationMap',
                     'title' => 'Location Map',
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
              1 =>
              Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
                 'fieldtype' => 'panel',
                 'layout' => NULL,
                 'border' => false,
                 'name' => 'Date Time',
                 'type' => NULL,
                 'region' => 'east',
                 'title' => '',
                 'width' => 400,
                 'height' => NULL,
                 'collapsible' => false,
                 'collapsed' => false,
                 'bodyStyle' => '',
                 'datatype' => 'layout',
                 'permissions' => NULL,
                 'childs' =>
                array (
                  0 =>
                  Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldset::__set_state(array(
                     'fieldtype' => 'fieldset',
                     'name' => 'Dates',
                     'type' => NULL,
                     'region' => NULL,
                     'title' => 'Dates & Timings',
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
                      Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
                         'fieldtype' => 'datetime',
                         'defaultValue' => NULL,
                         'useCurrentDate' => false,
                         'name' => 'fromDate',
                         'title' => 'Start',
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
                      1 =>
                      Pimcore\Model\DataObject\ClassDefinition\Data\Datetime::__set_state(array(
                         'fieldtype' => 'datetime',
                         'defaultValue' => NULL,
                         'useCurrentDate' => false,
                         'name' => 'toDate',
                         'title' => 'End',
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
          )),
          1 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'Cars',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Cars',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation::__set_state(array(
                 'fieldtype' => 'manyToManyObjectRelation',
                 'width' => '',
                 'height' => '',
                 'maxItems' => '',
                 'relationType' => true,
                 'visibleFields' =>
                array (
                ),
                 'allowToCreateNewObject' => true,
                 'optimizedAdminLoading' => false,
                 'visibleFieldDefinitions' =>
                array (
                ),
                 'classes' =>
                array (
                  0 =>
                  array (
                    'classes' => 'Car',
                  ),
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
          2 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Text::__set_state(array(
                 'fieldtype' => 'text',
                 'html' => 'Add Image or Video for header on event details page. If video is provided, then image will hidden.',
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
              Pimcore\Model\DataObject\ClassDefinition\Layout\Fieldcontainer::__set_state(array(
                 'fieldtype' => 'fieldcontainer',
                 'layout' => 'hbox',
                 'fieldLabel' => '',
                 'name' => 'Field Container',
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
                  Pimcore\Model\DataObject\ClassDefinition\Data\Image::__set_state(array(
                     'fieldtype' => 'image',
                     'name' => 'mainImage',
                     'title' => 'Image',
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
                     'width' => 500,
                     'height' => 350,
                     'uploadPath' => '',
                  )),
                  1 =>
                  Pimcore\Model\DataObject\ClassDefinition\Data\Video::__set_state(array(
                     'fieldtype' => 'video',
                     'width' => 500,
                     'height' => 350,
                     'name' => 'video',
                     'title' => 'Video',
                     'tooltip' => '',
                     'mandatory' => false,
                     'noteditable' => false,
                     'index' => false,
                     'locked' => false,
                     'style' => 'margin-left:20px',
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
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\ImageGallery::__set_state(array(
                 'fieldtype' => 'imageGallery',
                 'width' => 300,
                 'height' => 200,
                 'uploadPath' => '',
                 'ratioX' => NULL,
                 'ratioY' => NULL,
                 'predefinedDataTemplates' => '',
                 'name' => 'images',
                 'title' => 'Additional Images',
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
          3 =>
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'layout' => NULL,
             'border' => false,
             'name' => 'Contact Info',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Contact Info',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 250,
                 'defaultValue' => NULL,
                 'columnLength' => 255,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'contactName',
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
                 'width' => 250,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'contactPhone',
                 'title' => 'Phone',
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
              2 =>
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => 350,
                 'defaultValue' => NULL,
                 'columnLength' => 190,
                 'regex' => '',
                 'unique' => false,
                 'showCharCount' => false,
                 'name' => 'contactEmail',
                 'title' => 'Email',
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
              Pimcore\Model\DataObject\ClassDefinition\Data\Textarea::__set_state(array(
                 'fieldtype' => 'textarea',
                 'width' => 550,
                 'height' => 100,
                 'maxLength' => NULL,
                 'showCharCount' => false,
                 'excludeFromSearchIndex' => false,
                 'name' => 'contactAddress',
                 'title' => 'Address',
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
   'icon' => '/bundles/pimcoreadmin/img/flat-color-icons/vip.svg',
   'previewUrl' => '',
   'group' => '',
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
