<?php 

/** 
* Generated at: 2019-08-28T14:52:33+02:00
* Changed by: system (0)
* IP: 192.168.9.95
*/ 


return Pimcore\Model\DataObject\ClassDefinition\CustomLayout::__set_state(array(
   'id' => 'CarTodo',
   'name' => 'Todo',
   'description' => '',
   'creationDate' => 1566996476,
   'modificationDate' => 1566996753,
   'userOwner' => 2,
   'userModification' => 0,
   'classId' => 'CAR',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'name' => 'pimcore_root',
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
         'icon' => NULL,
         'name' => 'Basedata',
         'type' => NULL,
         'region' => NULL,
         'title' => 'Basedata',
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
             'phpdocType' => '\\Pimcore\\Model\\DataObject\\Localizedfield',
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Input::__set_state(array(
                 'fieldtype' => 'input',
                 'width' => NULL,
                 'queryColumnType' => 'varchar',
                 'columnType' => 'varchar',
                 'columnLength' => 190,
                 'phpdocType' => 'string',
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
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Wysiwyg::__set_state(array(
                 'fieldtype' => 'wysiwyg',
                 'width' => '',
                 'height' => '',
                 'queryColumnType' => 'longtext',
                 'columnType' => 'longtext',
                 'phpdocType' => 'string',
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
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'name' => 'localizedfields',
             'region' => NULL,
             'layout' => NULL,
             'title' => '',
             'width' => '',
             'height' => '',
             'maxTabs' => NULL,
             'labelWidth' => NULL,
             'border' => false,
             'provideSplitView' => false,
             'tabPosition' => 'top',
             'hideLabelsWhenTabsReached' => NULL,
             'referencedFields' => 
            array (
            ),
             'fieldDefinitionsCache' => NULL,
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
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
             'fieldtype' => 'manyToOneRelation',
             'width' => 400,
             'assetUploadPath' => '',
             'relationType' => true,
             'queryColumnType' => 
            array (
              'id' => 'int(11)',
              'type' => 'enum(\'document\',\'asset\',\'object\')',
            ),
             'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'lazyLoading' => true,
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'Manufacturer',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'manufacturer',
             'title' => 'Manufacturer',
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
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\ManyToOneRelation::__set_state(array(
             'fieldtype' => 'manyToOneRelation',
             'width' => 400,
             'assetUploadPath' => '',
             'relationType' => true,
             'queryColumnType' => 
            array (
              'id' => 'int(11)',
              'type' => 'enum(\'document\',\'asset\',\'object\')',
            ),
             'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
             'objectsAllowed' => true,
             'assetsAllowed' => false,
             'assetTypes' => 
            array (
            ),
             'documentsAllowed' => false,
             'documentTypes' => 
            array (
            ),
             'lazyLoading' => true,
             'classes' => 
            array (
              0 => 
              array (
                'classes' => 'BodyStyle',
              ),
            ),
             'pathFormatterClass' => '',
             'name' => 'bodyStyle',
             'title' => 'Body Style',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'invisible' => false,
             'visibleGridView' => true,
             'visibleSearch' => true,
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'Full-size luxury car',
                'value' => 'Full-size luxury car',
              ),
              1 => 
              array (
                'key' => 'Grand tourer',
                'value' => 'Grand tourer',
              ),
              2 => 
              array (
                'key' => 'Light commercial vehicle',
                'value' => 'Light commercial vehicle',
              ),
              3 => 
              array (
                'key' => 'Muscle Car',
                'value' => 'Muscle Car',
              ),
              4 => 
              array (
                'key' => 'City Car',
                'value' => 'City Car',
              ),
              5 => 
              array (
                'key' => 'Executive car',
                'value' => 'Executive car',
              ),
              6 => 
              array (
                'key' => 'Economy car',
                'value' => 'Economy car',
              ),
              7 => 
              array (
                'key' => 'Personal luxury car',
                'value' => 'Personal luxury car',
              ),
              8 => 
              array (
                'key' => 'Full-Size',
                'value' => 'Full-Size',
              ),
              9 => 
              array (
                'key' => 'Family car',
                'value' => 'Family car',
              ),
              10 => 
              array (
                'key' => 'Mid-size luxury',
                'value' => 'Mid-size luxury',
              ),
              11 => 
              array (
                'key' => 'sports car',
                'value' => 'sports car',
              ),
            ),
             'width' => 300,
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'queryColumnType' => 'varchar',
             'columnType' => 'varchar',
             'columnLength' => 190,
             'phpdocType' => 'string',
             'dynamicOptions' => false,
             'name' => 'carClass',
             'title' => 'Class',
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
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'default' => 0,
   'dao' => NULL,
));
