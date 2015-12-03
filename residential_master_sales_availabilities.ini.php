<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'unit',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'residential_master_sales_availabilities',
  'listPageFields' => 'dragSortOrder, unit, property, archive',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Residential Master Sales Availabilities',
  'menuOrder' => '0000000189',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'Order',
    'type' => 'none',
  ),
  'archive' => array(
    'order' => 7,
    'label' => 'Archive',
    'type' => 'checkbox',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  'unit' => array(
    'order' => 8,
    'label' => 'Unit',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
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
  'address' => array(
    'order' => 9,
    'label' => 'Address',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'cross_street' => array(
    'order' => 10,
    'label' => 'Cross Street',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'city' => array(
    'order' => 11,
    'label' => 'City',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'state' => array(
    'order' => 12,
    'label' => 'State',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'neighborhood' => array(
    'order' => '13',
    'label' => 'Neighborhood',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '1',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'residential_master_neighborhoods',
    'optionsValueField' => 'neighborhood',
    'optionsLabelField' => 'neighborhood',
  ),
  'property' => array(
    'order' => '14',
    'label' => 'Property',
    'type' => 'list',
    'indexed' => '0',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '1',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'residential_master_properties',
    'optionsValueField' => 'street_address',
    'optionsLabelField' => 'street_address',
  ),
  'description' => array(
    'order' => 15,
    'label' => 'Description',
    'type' => 'textbox',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '300',
    'autoFormat' => '1',
  ),
  'type' => array(
    'order' => 16,
    'label' => 'Type',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => 'Condo
Co-op
Apartment
Need More',
  ),
  'under_contract' => array(
    'order' => 17,
    'label' => 'Under Contract',
    'type' => 'checkbox',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  'no_fee' => array(
    'order' => 18,
    'label' => 'No Fee',
    'type' => 'checkbox',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  'price' => array(
    'order' => 19,
    'label' => 'Price',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'bedrooms' => array(
    'order' => 20,
    'label' => 'Bedrooms',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'baths' => array(
    'order' => 21,
    'label' => 'Baths',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'sq_footage' => array(
    'order' => 22,
    'label' => 'Sq. Footage',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'common_charges' => array(
    'order' => 23,
    'label' => 'Common Charges',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'maintenance_fees' => array(
    'order' => 24,
    'label' => 'Maintenance Fees ',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'r_e_tax' => array(
    'order' => 25,
    'label' => 'R.E. Tax',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'unit_features' => array(
    'order' => 26,
    'label' => 'Unit Features',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'checkboxes',
    'optionsType' => 'table',
    'optionsTablename' => 'residential_master_apartment_features',
    'optionsValueField' => 'apt_feature',
    'optionsLabelField' => 'apt_feature',
  ),
  'contact' => array(
    'order' => 27,
    'label' => 'Contact',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'checkboxes',
    'optionsType' => 'table',
    'optionsTablename' => 'residential_master_agents',
    'optionsValueField' => 'num',
    'optionsLabelField' => 'agent_name',
  ),
  'open_house_date' => array(
    'order' => 28,
    'label' => 'Open House Date (Start)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => '',
    'defaultDateString' => '2013-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'open_house_date_end' => array(
    'order' => 29,
    'label' => 'Open House Date (End)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2014-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'open_house_date_2' => array(
    'order' => 30,
    'label' => 'Open House Date 2 (Start)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2014-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'open_house_date_2_end' => array(
    'order' => 31,
    'label' => 'Open House Date 2 (End)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2014-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'open_house_date_3' => array(
    'order' => 32,
    'label' => 'Open House Date 3 (Start)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2014-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'open_house_date_3_end' => array(
    'order' => 33,
    'label' => 'Open House Date 3 (End)',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2014-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'contact_notes' => array(
    'order' => 34,
    'label' => 'Contact Notes',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'date_available' => array(
    'order' => 35,
    'label' => 'Date Available',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => '',
    'defaultDateString' => '2013-01-01 00:00:00',
    'showTime' => '0',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '',
    'yearRangeEnd' => '',
  ),
  'floor_plan' => array(
    'order' => 36,
    'label' => 'Floor Plan',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '0',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '0',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '0',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
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
    'infoField1' => '',
    'infoField2' => '',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'image' => array(
    'order' => 37,
    'label' => 'Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '280',
    'maxThumbnailWidth' => '280',
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
  'building_website' => array(
    'order' => 38,
    'label' => 'Building Website ',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
);
?>