<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_disableView' => '1',
  '_tableName' => 'accounts',
  'listPageFields' => 'fullname, username, email, isAdmin',
  'listPageOrder' => 'fullname, username',
  'listPageSearchFields' => 'fullname, username, email',
  'menuHidden' => '0',
  'menuName' => 'User Accounts',
  'menuOrder' => '0000000001',
  'menuType' => 'multi',
  'tableHidden' => '0',
  'num' => array(
    'order' => '1',
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
  'fullname' => array(
    'order' => 16,
    'label' => 'Full Name',
    'type' => 'textfield',
    'isSystemField' => '0',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'myAccountField' => '1',
  ),
  'email' => array(
    'order' => 17,
    'label' => 'Email',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '1',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  'username' => array(
    'order' => 18,
    'label' => 'Username',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '1',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  '__separator001__' => array(
    'order' => 19,
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'myAccountField' => '1',
  ),
  'password' => array(
    'order' => 20,
    'label' => 'Password',
    'type' => 'textfield',
    'defaultValue' => '',
    'isPasswordField' => '1',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
    'isSystemField' => '1',
    'myAccountField' => '1',
  ),
  '__separator002__' => array(
    'order' => 21,
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
    'myAccountField' => '1',
  ),
  'lastLoginDate' => array(
    'order' => 22,
    'label' => 'Last Login',
    'type' => 'date',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'defaultDate' => 'none',
    'defaultDateString' => '2011-01-01 00:00:00',
    'showTime' => '1',
    'showSeconds' => '1',
    'use24HourFormat' => '0',
    'yearRangeStart' => '2010',
    'yearRangeEnd' => '2020',
  ),
  'expiresDate' => array(
    'order' => 23,
    'label' => 'Account Expires',
    'type' => 'date',
    'isUnique' => '0',
    'showTime' => '0',
    'showSeconds' => '0',
    'use24HourFormat' => '0',
    'yearRangeStart' => '2008',
    'yearRangeEnd' => '2016',
    'isSystemField' => '1',
  ),
  'neverExpires' => array(
    'order' => 24,
    'label' => 'Never Expires',
    'type' => 'checkbox',
    'checkedByDefault' => '1',
    'description' => 'Ignore Account Expiry (account never expires)',
    'isSystemField' => '1',
  ),
  '__separator004__' => array(
    'order' => 25,
    'type' => 'separator',
    'isSystemField' => '0',
    'separatorType' => 'blank line',
  ),
  'isAdmin' => array(
    'order' => 26,
    'label' => 'Admin Access',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => 'Allow access to Admin menus (including this section)',
    'adminOnly' => '2',
    'isSystemField' => '1',
    'checkedValue' => 'Yes',
    'uncheckedValue' => '-',
  ),
  'disabled' => array(
    'order' => 27,
    'label' => 'Disable Access',
    'type' => 'checkbox',
    'checkedByDefault' => '0',
    'description' => 'Disable account (user won\'t be able to login)',
    'isSystemField' => '1',
  ),
  '__separator005__' => array(
    'order' => 28,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
  'accessList' => array(
    'order' => 29,
    'label' => 'Section Access',
    'type' => 'accessList',
    'isSystemField' => 1,
  ),
  '__separator006__' => array(
    'order' => 30,
    'label' => '',
    'type' => 'separator',
    'separatorType' => 'blank line',
    'separatorHeader' => '',
    'separatorHTML' => '<tr>
 <td colspan=\'2\'>
 </td>
</tr>',
  ),
);
?>