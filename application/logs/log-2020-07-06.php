<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-06 07:37:32 --> Severity: Notice --> Undefined property: Dashboard::$menu C:\xampp\htdocs\ukbi\application\modules\dashboard\controllers\Dashboard.php 24
ERROR - 2020-07-06 07:37:32 --> Severity: Notice --> Trying to get property 'name_menu' of non-object C:\xampp\htdocs\ukbi\application\modules\dashboard\controllers\Dashboard.php 24
ERROR - 2020-07-06 07:37:32 --> Severity: Notice --> Undefined property: Dashboard::$menu C:\xampp\htdocs\ukbi\application\modules\dashboard\controllers\Dashboard.php 25
ERROR - 2020-07-06 07:37:32 --> Severity: Notice --> Trying to get property 'name_menu' of non-object C:\xampp\htdocs\ukbi\application\modules\dashboard\controllers\Dashboard.php 25
ERROR - 2020-07-06 09:20:43 --> Query error: Column 'allow_detail' in field list is ambiguous - Invalid query: SELECT `this`.`id`, `name_user`, `email`, `ul`.`name_level`, `status`, `allow_detail`, `allow_edit`, `allow_delete`
FROM `users` `this`
LEFT JOIN `users_level` `ul` ON `ul`.`id` = `this`.`users_level_id`
WHERE `this`.`is_deleted` =0
ORDER BY `b`.`sequence` desc
 LIMIT 10
ERROR - 2020-07-06 09:20:56 --> Query error: Unknown column 'b.sequence' in 'order clause' - Invalid query: SELECT `this`.`id`, `name_user`, `email`, `ul`.`name_level`, `status`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `users` `this`
LEFT JOIN `users_level` `ul` ON `ul`.`id` = `this`.`users_level_id`
WHERE `this`.`is_deleted` =0
ORDER BY `b`.`sequence` desc
 LIMIT 10
ERROR - 2020-07-06 09:21:03 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 106
ERROR - 2020-07-06 10:28:01 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 162
ERROR - 2020-07-06 10:32:29 --> Severity: error --> Exception: Call to undefined method Model::Simpan() C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 239
ERROR - 2020-07-06 11:21:11 --> Severity: Notice --> Undefined property: Users::$module C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 354
ERROR - 2020-07-06 11:21:11 --> Query error: Unknown column 'users_level_id' in 'field list' - Invalid query: INSERT INTO `users_log` (`user_id`, `users_level_id`, `created_date`, `module`, `description`) VALUES (NULL, NULL, '2020-07-06 11:21:11', '', 'Update data pada id = 1hvpsYlxeWGfNSbXVuo72FadO6KDmJg5')
ERROR - 2020-07-06 11:21:16 --> Severity: Notice --> Undefined property: Users::$module C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 354
ERROR - 2020-07-06 11:21:16 --> Query error: Unknown column 'users_level_id' in 'field list' - Invalid query: INSERT INTO `users_log` (`user_id`, `users_level_id`, `created_date`, `module`, `description`) VALUES (NULL, NULL, '2020-07-06 11:21:16', '', 'Update data pada id = 1hvpsYlxeWGfNSbXVuo72FadO6KDmJg5')
ERROR - 2020-07-06 12:46:32 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccessShow() C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 33
ERROR - 2020-07-06 12:46:37 --> Severity: Notice --> Undefined property: Users_menu::$url C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 45
ERROR - 2020-07-06 12:46:37 --> Severity: Notice --> Undefined property: Users_menu::$module C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 46
ERROR - 2020-07-06 12:46:50 --> Severity: Notice --> Undefined property: Users_menu::$module C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 47
ERROR - 2020-07-06 12:48:28 --> Severity: Notice --> Undefined variable: opsi C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 179
ERROR - 2020-07-06 14:00:02 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 412
ERROR - 2020-07-06 14:02:04 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 307
ERROR - 2020-07-06 14:02:08 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users_menu\controllers\Users_menu.php 307
ERROR - 2020-07-06 14:03:37 --> Query error: Column 'is_deleted' in where clause is ambiguous - Invalid query: SELECT `this`.*, `p`.`name_menu` as `parent_name`
FROM `users_menu` `this`
LEFT JOIN `users_menu` `p` ON `p`.`id` = `this`.`rel`
WHERE `this`.`id` = '99'
AND `is_deleted` = 0
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ukbi\system\core\Exceptions.php:271) C:\xampp\htdocs\ukbi\system\core\Common.php 570
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:48 --> Severity: Notice --> Undefined property: stdClass::$sequence C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 138
ERROR - 2020-07-06 14:35:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ukbi\system\core\Exceptions.php:271) C:\xampp\htdocs\ukbi\system\core\Common.php 570
ERROR - 2020-07-06 14:38:10 --> Query error: Unknown column 'idS' in 'where clause' - Invalid query: UPDATE `users` SET `is_deleted` = 1, `deleted_by` = NULL, `deleted_date` = '2020-07-06 14:38:10'
WHERE `idS` = '31' and `is_deleted` = '0'
ERROR - 2020-07-06 14:41:04 --> Severity: Notice --> Undefined property: stdClass::$file C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 255
ERROR - 2020-07-06 15:15:10 --> Severity: error --> Exception: Unable to locate the model you have specified: Users_menu_model C:\xampp\htdocs\ukbi\system\core\Loader.php 348
ERROR - 2020-07-06 15:17:21 --> Query error: Table 'ukbi.users_menus' doesn't exist - Invalid query: SELECT `um`.`id`, `um`.`kode_menu`, `um`.`name_menu`, `um`.`url`, `um`.`sequence`, `um`.`icon`, COUNT(CASE WHEN `access` = 'show' AND this.`users_level_id` = '' THEN 1 END) AS xshow, COUNT(CASE WHEN `access` = 'add' AND this.`users_level_id` = '' THEN 1 END) AS xadd, COUNT(CASE WHEN `access` = 'edit' AND this.`users_level_id` = '' THEN 1 END) AS xedit, COUNT(CASE WHEN `access` = 'detail' AND this.`users_level_id` = '' THEN 1 END) AS xdetail, COUNT(CASE WHEN `access` = 'delete' AND this.`users_level_id` = '' THEN 1 END) AS xdelete
FROM `users_menus` `um`
LEFT JOIN `users_access` `this` ON `this`.`users_menu_id` = `um`.`id`
WHERE `um`.`rel` = '0'
AND `um`.`is_deleted` = 0
AND `um`.`id` = ''
GROUP BY `um`.`id`
ORDER BY `um`.`sequence` asc
ERROR - 2020-07-06 15:18:47 --> Query error: Table 'ukbi.users_menus' doesn't exist - Invalid query: SELECT `um`.`id`, `um`.`kode_menu`, `um`.`name_menu`, `um`.`url`, `um`.`sequence`, `um`.`icon`, COUNT(CASE WHEN `access` = 'show' AND this.`users_level_id` = '' THEN 1 END) AS xshow, COUNT(CASE WHEN `access` = 'add' AND this.`users_level_id` = '' THEN 1 END) AS xadd, COUNT(CASE WHEN `access` = 'edit' AND this.`users_level_id` = '' THEN 1 END) AS xedit, COUNT(CASE WHEN `access` = 'detail' AND this.`users_level_id` = '' THEN 1 END) AS xdetail, COUNT(CASE WHEN `access` = 'delete' AND this.`users_level_id` = '' THEN 1 END) AS xdelete
FROM `users_menus` `um`
LEFT JOIN `users_access` `this` ON `this`.`users_menu_id` = `um`.`id`
WHERE `um`.`rel` = '0'
AND `um`.`is_deleted` = 0
AND `um`.`id` = ''
GROUP BY `um`.`id`
ORDER BY `um`.`sequence` asc
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:18:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ukbi\system\core\Exceptions.php:271) C:\xampp\htdocs\ukbi\system\core\Common.php 570
ERROR - 2020-07-06 15:19:48 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:19:48 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:19:48 --> Severity: Notice --> Undefined variable: usersL_level_id C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 53
ERROR - 2020-07-06 15:45:27 --> Query error: Table 'ukbi.role_has_permissions' doesn't exist - Invalid query: SELECT `this`.`role_id`
FROM `role_has_permissions` `this`
LEFT JOIN `permissions` `p` ON `p`.`id` = `this`.`permission_id`
WHERE `role_id` IS NULL
AND `p`.`code` = 'M999004'
AND `p`.`name` = 'edit'
AND `p`.`companyId` IS NULL
AND `p`.`is_deleted` = 0
ERROR - 2020-07-06 15:45:31 --> Query error: Table 'ukbi.role_has_permissions' doesn't exist - Invalid query: SELECT `this`.`role_id`
FROM `role_has_permissions` `this`
LEFT JOIN `permissions` `p` ON `p`.`id` = `this`.`permission_id`
WHERE `role_id` IS NULL
AND `p`.`code` = 'M999004'
AND `p`.`name` = 'edit'
AND `p`.`companyId` IS NULL
AND `p`.`is_deleted` = 0
ERROR - 2020-07-06 15:46:22 --> Query error: Table 'ukbi.permissions' doesn't exist - Invalid query: SELECT `id`
FROM `permissions`
WHERE `is_deleted` = 0
AND `guard_name` = 'web'
AND `name` = 'list'
AND `companyId` IS NULL
