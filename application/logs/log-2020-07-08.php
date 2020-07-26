<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-08 07:49:27 --> Query error: Table 'ukbi.role_has_permissions' doesn't exist - Invalid query: SELECT `p`.`name_menu`, `p`.`code`, `p`.`url`, `p`.`parent`, `p`.`icon`
FROM `role_has_permissions` `this`
LEFT JOIN `permissions` `p` ON `p`.`id` = `this`.`permission_id`
WHERE `p`.`is_deleted` = 0
AND `p`.`guard_name` = 'web'
AND `p`.`name` = 'list'
AND `p`.`parent` = '0'
AND `this`.`role_id` IS NULL
ORDER BY `p`.`sequence` ASC, `p`.`code` ASC
ERROR - 2020-07-08 07:57:10 --> Severity: Notice --> Undefined variable: menu C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 31
ERROR - 2020-07-08 07:57:10 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 31
ERROR - 2020-07-08 07:58:11 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 3
ERROR - 2020-07-08 08:05:59 --> Severity: Notice --> Undefined variable: menu C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 3
ERROR - 2020-07-08 08:05:59 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 3
ERROR - 2020-07-08 08:11:31 --> Query error: Table 'ukbi.user_menu' doesn't exist - Invalid query: SELECT `um`.*, `ua`.`access`
FROM `users_access` `ua`
LEFT JOIN `user_menu` `um` ON `um`.`id` = `ua`.`users_menu_id`
WHERE `ua`.`users_level_id` = '35'
ORDER BY `um`.`sequence` ASC
ERROR - 2020-07-08 08:12:11 --> Query error: Unknown column 'ua.users_level_ids' in 'where clause' - Invalid query: SELECT `um`.*, `ua`.`access`
FROM `users_access` `ua`
LEFT JOIN `users_menu` `um` ON `um`.`id` = `ua`.`users_menu_id`
WHERE `ua`.`users_level_ids` = '35'
ORDER BY `um`.`sequence` ASC
ERROR - 2020-07-08 08:19:49 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 52
ERROR - 2020-07-08 08:19:49 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 52
ERROR - 2020-07-08 08:19:52 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 52
ERROR - 2020-07-08 08:19:52 --> Severity: Notice --> Undefined property: stdClass::$code C:\xampp\htdocs\ukbi\application\views\template\backend\sidebar.php 52
ERROR - 2020-07-08 09:26:39 --> Query error: Table 'ukbi.users_accesss' doesn't exist - Invalid query: SELECT `this`.`users_level_id`
FROM `users_accesss` `this`
LEFT JOIN `users_menu` `um` ON `um`.`id` = `this`.`users_menu_id`
WHERE `this`.`users_level_id` = '99999'
AND `um`.`kode_menu` = 'M999001'
AND `this`.`access` = 'show'
AND `this`.`is_deleted` = 0
AND `um`.`is_deleted` = 0
ERROR - 2020-07-08 09:27:32 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 124
ERROR - 2020-07-08 09:27:36 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccess() C:\xampp\htdocs\ukbi\application\modules\users\controllers\Users.php 124
ERROR - 2020-07-08 09:35:33 --> Severity: Notice --> Undefined variable: title C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 6
ERROR - 2020-07-08 09:35:34 --> Severity: Notice --> Undefined property: stdClass::$url C:\xampp\htdocs\ukbi\application\modules\users_level\controllers\Users_level.php 42
ERROR - 2020-07-08 09:36:38 --> Severity: Notice --> Undefined variable: title C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 6
ERROR - 2020-07-08 09:38:50 --> Severity: Notice --> Undefined variable: title C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 6
ERROR - 2020-07-08 09:39:55 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowPermission() C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 100
ERROR - 2020-07-08 09:39:59 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowPermission() C:\xampp\htdocs\ukbi\application\modules\users_access\controllers\Users_access.php 100
ERROR - 2020-07-08 11:29:07 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:29:11 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:29:19 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:29:27 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:29:31 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:29:46 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:30:22 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:30:24 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:31:26 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:31:33 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:31:41 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 70
ERROR - 2020-07-08 11:33:03 --> Severity: Notice --> Undefined variable: link_logout C:\xampp\htdocs\ukbi\application\views\template\backend\template.php 65
