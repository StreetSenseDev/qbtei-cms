<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableView' => '1',
  '_filenameFields' => '',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_tableName' => 'ge_homepage',
  'listPageFields' => '',
  'listPageOrder' => '',
  'listPageSearchFields' => '_all_',
  'menuName' => 'Homepage',
  'menuOrder' => '0000000369',
  'menuType' => 'single',
  'num' => array(
    'order' => '1',
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => '2',
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => '3',
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => '4',
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => '5',
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'title' => array(
    'order' => '7',
    'label' => 'Title',
    'type' => 'textfield',
    'defaultValue' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'banner' => array(
    'order' => '1422654368',
    'label' => 'Banner',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '1',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '1600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '300',
    'maxThumbnailWidth' => '300',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'featured_page' => array(
    'order' => '1422654422',
    'label' => 'Featured Page',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'ge_pages',
    'optionsValueField' => 'num',
    'optionsLabelField' => 'title',
  ),
  'featured_page_2' => array(
    'order' => '1422654540',
    'label' => 'Featured Page 2',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'ge_pages',
    'optionsValueField' => 'num',
    'optionsLabelField' => 'title',
  ),
);
?>