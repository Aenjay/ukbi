<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-21 06:44:16 --> Severity: error --> Exception: syntax error, unexpected 'this' (T_STRING), expecting variable (T_VARIABLE) or '{' or '$' C:\xampp\htdocs\Salesman\application\modules\login\views\login-data.php 122
ERROR - 2020-06-21 07:14:54 --> Could not find the language line "select "
ERROR - 2020-06-21 09:27:27 --> Could not find the language line "auth/logout"
ERROR - 2020-06-21 09:27:29 --> Could not find the language line "auth/logout"
ERROR - 2020-06-21 09:27:41 --> Could not find the language line "auth/logout"
ERROR - 2020-06-21 09:33:58 --> Could not find the language line "select "
ERROR - 2020-06-21 09:34:02 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT `name_menu`, COUNT(CASE WHEN `name` = 'list' AND this.`role_id` = '4' THEN 1 END) AS xlist, COUNT(CASE WHEN `name` = 'create' AND this.`role_id` = '4' THEN 1 END) AS xadd, COUNT(CASE WHEN `name` = 'edit' AND this.`role_id` = '4' THEN 1 END) AS xedit, COUNT(CASE WHEN `name` = 'detail' AND this.`role_id` = '4' THEN 1 END) AS xdetail, COUNT(CASE WHEN `name` = 'delete' AND this.`role_id` = '4' THEN 1 END) AS xdelete, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'list') AS listid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'create') AS addid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'edit') AS editid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'detail') AS detailid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'delete') AS deleteid, `p`.`id`, `p`.`code`, `p`.`url`, `p`.`icon`
FROM `permissions` `p`
LEFT JOIN `role_has_permissions` `this` ON `this`.`permission_id` = `p`.`id`
WHERE `guard_name` = 'web'
AND `is_deleted` = 0
AND `parent` = 'M999'
GROUP BY `p`.`code`
ERROR - 2020-06-21 09:34:06 --> Could not find the language line "select "
ERROR - 2020-06-21 09:34:11 --> Query error: Subquery returns more than 1 row - Invalid query: SELECT `name_menu`, COUNT(CASE WHEN `name` = 'list' AND this.`role_id` = '4' THEN 1 END) AS xlist, COUNT(CASE WHEN `name` = 'create' AND this.`role_id` = '4' THEN 1 END) AS xadd, COUNT(CASE WHEN `name` = 'edit' AND this.`role_id` = '4' THEN 1 END) AS xedit, COUNT(CASE WHEN `name` = 'detail' AND this.`role_id` = '4' THEN 1 END) AS xdetail, COUNT(CASE WHEN `name` = 'delete' AND this.`role_id` = '4' THEN 1 END) AS xdelete, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'list') AS listid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'create') AS addid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'edit') AS editid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'detail') AS detailid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'delete') AS deleteid, `p`.`id`, `p`.`code`, `p`.`url`, `p`.`icon`
FROM `permissions` `p`
LEFT JOIN `role_has_permissions` `this` ON `this`.`permission_id` = `p`.`id`
WHERE `guard_name` = 'web'
AND `is_deleted` = 0
AND `parent` = 'M999'
GROUP BY `p`.`code`
ERROR - 2020-06-21 09:35:08 --> Could not find the language line "select "
ERROR - 2020-06-21 09:35:20 --> Could not find the language line "select "
ERROR - 2020-06-21 10:34:03 --> Query error: Unknown column 'this.email' in 'field list' - Invalid query: SELECT `this`.`name`, `this`.`email`, `r`.`name` as `role_name`
FROM `roles` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:37:35 --> Query error: Unknown column 'this.email' in 'field list' - Invalid query: SELECT `this`.`name`, `this`.`email`, `r`.`name` as `role_name`
FROM `roles` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:38:18 --> Query error: Unknown column 'systems' in 'where clause' - Invalid query: SELECT `this`.`name`, `this`.`email`, `r`.`name` as `role_name`
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
WHERE `systems` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:40:07 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 122
ERROR - 2020-06-21 10:40:07 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 127
ERROR - 2020-06-21 10:40:07 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 131
ERROR - 2020-06-21 10:40:07 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 132
ERROR - 2020-06-21 10:40:15 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 131
ERROR - 2020-06-21 10:40:15 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 132
ERROR - 2020-06-21 10:46:21 --> Could not find the language line "select "
ERROR - 2020-06-21 10:46:34 --> Could not find the language line "select "
ERROR - 2020-06-21 10:54:50 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:08 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:10 --> Query error: Unknown column 'this.description' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`description`
FROM `roles` `this`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:55:19 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:21 --> Query error: Unknown column 'this.description' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`description`
FROM `roles` `this`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:55:39 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:41 --> Query error: Table 'kasalesappv4.departement' doesn't exist - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`description`
FROM `departement` `this`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:55:47 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:47 --> Could not find the language line "description"
ERROR - 2020-06-21 10:55:50 --> Query error: Table 'kasalesappv4.ref_departement' doesn't exist - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`description`
FROM `ref_departement` `this`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 10:57:04 --> Could not find the language line "description"
ERROR - 2020-06-21 10:58:14 --> Could not find the language line "description"
ERROR - 2020-06-21 11:04:29 --> Query error: Unknown column 'createdTime' in 'field list' - Invalid query: INSERT INTO `ref_department` (`name`, `description`, `companyId`, `system`, `createdTime`, `createdBy`) VALUES ('Manager', 'MG', 1, 'WebApp_v1', '2020-06-21 11:04:29', 'Aenjay')
ERROR - 2020-06-21 11:09:16 --> Query error: Unknown column 'updatedTime' in 'field list' - Invalid query: UPDATE `ref_department` SET `name` = 'Manager', `description` = 'MG', `updatedTime` = '2020-06-21 11:09:16', `updatedBy` = 'Aenjay'
WHERE `id` = '5'
ERROR - 2020-06-21 11:09:42 --> Query error: Unknown column 'guard_name' in 'where clause' - Invalid query: SELECT `id`
FROM `ref_department`
WHERE `id` = '5' and `guard_name` = 'web' and `statusId` = 'A'
ERROR - 2020-06-21 11:36:37 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 134
ERROR - 2020-06-21 11:36:37 --> Severity: Notice --> Undefined property: stdClass::$job_tittle_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 135
ERROR - 2020-06-21 11:36:43 --> Severity: Notice --> Undefined property: stdClass::$department_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 134
ERROR - 2020-06-21 11:36:43 --> Severity: Notice --> Undefined property: stdClass::$job_tittle_name C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 135
ERROR - 2020-06-21 11:40:19 --> Query error: Column 'system' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_tittle_name`
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `system` = 'WebApp_v1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-21 11:46:20 --> Could not find the language line "department"
ERROR - 2020-06-21 11:47:20 --> Could not find the language line "department"
ERROR - 2020-06-21 11:47:45 --> Could not find the language line "department"
ERROR - 2020-06-21 11:51:55 --> Query error: Unknown column 'td.id' in 'on clause' - Invalid query: SELECT `this`.*, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_tittle_name`
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `r`.`is_deleted` = 0
AND `this`.`system` = 'WebApp_v1'
AND `this`.`id` = '2'
ERROR - 2020-06-21 12:38:52 --> Could not find the language line "select "
ERROR - 2020-06-21 12:39:06 --> Could not find the language line "select "
ERROR - 2020-06-21 12:59:01 --> Severity: error --> Exception: syntax error, unexpected ']', expecting ',' or ')' C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 352
ERROR - 2020-06-21 13:03:10 --> Could not find the language line "department"
ERROR - 2020-06-21 13:03:10 --> Severity: Notice --> Undefined variable: users C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 302
ERROR - 2020-06-21 13:03:10 --> Severity: error --> Exception: Call to a member function row() on null C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 302
ERROR - 2020-06-21 13:03:34 --> Could not find the language line "department"
ERROR - 2020-06-21 13:03:34 --> Could not find the language line "form_validation_name_check"
ERROR - 2020-06-21 13:03:35 --> Could not find the language line "form_validation_name_check"
ERROR - 2020-06-21 13:04:07 --> Could not find the language line "department"
ERROR - 2020-06-21 13:04:24 --> Could not find the language line "department"
ERROR - 2020-06-21 13:04:24 --> Query error: Unknown column 'updated_at' in 'field list' - Invalid query: UPDATE `rbac_user` SET `name` = 'Aenjay', `userType` = '4', `departmentId` = '2', `positionId` = '2', `mobileNo` = '085280141700', `contactNumber` = '087817231210', `email` = 'aenjay09@gmail.com', `password` = '', `updated_at` = '2020-06-21 13:04:24'
WHERE `id` = '1'
ERROR - 2020-06-21 13:04:48 --> Could not find the language line "department"
ERROR - 2020-06-21 13:04:48 --> Query error: Unknown column 'updatedTime' in 'field list' - Invalid query: UPDATE `rbac_user` SET `name` = 'Aenjay', `userType` = '4', `departmentId` = '2', `positionId` = '2', `mobileNo` = '085280141700', `contactNumber` = '087817231210', `email` = 'aenjay09@gmail.com', `password` = '', `updatedTime` = '2020-06-21 13:04:48', `updatedBy` = 'Aenjay'
WHERE `id` = '1'
ERROR - 2020-06-21 13:04:57 --> Could not find the language line "department"
ERROR - 2020-06-21 13:12:48 --> Could not find the language line "department"
ERROR - 2020-06-21 13:16:58 --> Query error: Unknown column 'this.ids' in 'where clause' - Invalid query: SELECT `this`.*, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_tittle_name`, `this`.`file_photo` as `foto`
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `r`.`is_deleted` = 0
AND `this`.`system` = 'WebApp_v1'
AND `this`.`ids` = '1'
AND `this`.`companyId` = '1'
ERROR - 2020-06-21 13:17:42 --> Could not find the language line "department"
ERROR - 2020-06-21 13:17:42 --> Severity: Warning --> unlink(./assets/upload/file-user/c9cbe91ae5147d3a8aeb576dcf005ccc.jpg): No such file or directory C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 353
ERROR - 2020-06-21 13:18:07 --> Could not find the language line "department"
ERROR - 2020-06-21 14:07:41 --> Could not find the language line "department"
ERROR - 2020-06-21 14:08:11 --> Could not find the language line "department"
ERROR - 2020-06-21 14:08:27 --> Query error: Unknown column 'guard_name' in 'where clause' - Invalid query: SELECT `id`
FROM `rbac_user`
WHERE `id` = '2' and `guard_name` = 'web' and `is_deleted` = '0'
ERROR - 2020-06-21 14:10:00 --> Query error: Unknown column 'is_deleted' in 'field list' - Invalid query: UPDATE `rbac_user` SET `is_deleted` = 1
WHERE `id` = '2'
ERROR - 2020-06-21 14:11:53 --> Could not find the language line "select "
ERROR - 2020-06-21 14:12:00 --> Could not find the language line "select "
ERROR - 2020-06-21 14:24:53 --> Severity: error --> Exception: syntax error, unexpected '$result' (T_VARIABLE) C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 176
ERROR - 2020-06-21 14:25:00 --> Severity: error --> Exception: syntax error, unexpected '$result' (T_VARIABLE) C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 276
ERROR - 2020-06-21 14:25:01 --> Severity: error --> Exception: syntax error, unexpected '$result' (T_VARIABLE) C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 276
ERROR - 2020-06-21 14:25:07 --> Severity: error --> Exception: syntax error, unexpected '$result' (T_VARIABLE) C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 389
ERROR - 2020-06-21 14:25:13 --> Severity: error --> Exception: syntax error, unexpected '$result' (T_VARIABLE) C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 430
ERROR - 2020-06-21 14:25:25 --> Could not find the language line "select "
ERROR - 2020-06-21 14:25:46 --> Could not find the language line "select "
ERROR - 2020-06-21 14:25:56 --> Could not find the language line "select "
ERROR - 2020-06-21 14:31:26 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:31:32 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:31:57 --> 404 Page Not Found: 
ERROR - 2020-06-21 14:32:12 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:32:42 --> 404 Page Not Found: 
ERROR - 2020-06-21 14:32:47 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:33:26 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:33:47 --> Query error: Table 'kasalesappv4.role' doesn't exist - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `role` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 14:34:14 --> 404 Page Not Found: 
ERROR - 2020-06-21 14:34:16 --> 404 Page Not Found: 
ERROR - 2020-06-21 14:34:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 8 - Invalid query: SELECT `id`
FROM `permissions`
WHERE `id` != '55'
AND `guard_name` = 'web'
AND `name` = 'list'
AND `is_deleted` = '0'
AND `companyId` = '1'
AND `code` = 'M002' and `guard_name` = 'web' and `name` = 'list' and `is_deleted` = '0' and 
ERROR - 2020-06-21 14:35:44 --> Severity: error --> Exception: Call to undefined method Model::CheckAllowAccessShow() C:\xampp\htdocs\Salesman\application\modules\role_permissions\controllers\Role_permissions.php 24
ERROR - 2020-06-21 14:35:50 --> Could not find the language line "select "
ERROR - 2020-06-21 14:36:18 --> Could not find the language line "select "
ERROR - 2020-06-21 14:37:52 --> Could not find the language line "select "
ERROR - 2020-06-21 14:45:38 --> Could not find the language line "select "
ERROR - 2020-06-21 14:48:42 --> Could not find the language line "select "
ERROR - 2020-06-21 14:49:07 --> Could not find the language line "select "
ERROR - 2020-06-21 14:52:33 --> Severity: error --> Exception: Unable to locate the model you have specified: Job_tittle_model C:\xampp\htdocs\Salesman\system\core\Loader.php 348
ERROR - 2020-06-21 15:08:14 --> Could not find the language line "select "
ERROR - 2020-06-21 15:08:27 --> Could not find the language line "select "
ERROR - 2020-06-21 15:08:35 --> Could not find the language line "select "
ERROR - 2020-06-21 15:17:34 --> Could not find the language line "description"
ERROR - 2020-06-21 15:17:39 --> Could not find the language line "description"
ERROR - 2020-06-21 16:02:05 --> 404 Page Not Found: 
ERROR - 2020-06-21 16:02:07 --> 404 Page Not Found: 
ERROR - 2020-06-21 16:32:52 --> Severity: error --> Exception: Class 'Department_model' not found C:\xampp\htdocs\Salesman\application\third_party\MX\Loader.php 228
ERROR - 2020-06-21 16:39:23 --> Could not find the language line "select "
ERROR - 2020-06-21 16:39:48 --> Could not find the language line "select "
ERROR - 2020-06-21 16:42:58 --> Could not find the language line "select "
ERROR - 2020-06-21 16:53:22 --> Query error: Unknown column 'this.tittle' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`tittle`, `this`.`name`, `this`.`messages`
FROM `ref_notice_announcement` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `publishDateTime` asc
 LIMIT 10
ERROR - 2020-06-21 16:53:26 --> Query error: Unknown column 'this.tittle' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`tittle`, `this`.`name`, `this`.`messages`
FROM `ref_notice_announcement` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `publishDateTime` asc
 LIMIT 10
ERROR - 2020-06-21 16:54:27 --> Query error: Unknown column 'this.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`title`, `this`.`name`, `this`.`messages`
FROM `ref_notice_announcement` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `publishDateTime` asc
 LIMIT 10
ERROR - 2020-06-21 16:54:41 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\notice_announcement\controllers\Notice_announcement.php 132
ERROR - 2020-06-21 16:54:41 --> Severity: Notice --> Undefined property: stdClass::$description C:\xampp\htdocs\Salesman\application\modules\notice_announcement\controllers\Notice_announcement.php 133
ERROR - 2020-06-21 17:19:13 --> Could not find the language line "select "
ERROR - 2020-06-21 18:32:18 --> Could not find the language line "description"
ERROR - 2020-06-21 18:51:11 --> Severity: error --> Exception: Too few arguments to function Model::Auth(), 0 passed in C:\xampp\htdocs\Salesman\application\views\template\backend\sidebar.php on line 3 and exactly 1 expected C:\xampp\htdocs\Salesman\application\models\Model.php 364
ERROR - 2020-06-21 18:51:22 --> Query error: Column 'system' in where clause is ambiguous - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `system` = 'WebApp_v1'
ERROR - 2020-06-21 18:51:34 --> Query error: Unknown column 'td.id' in 'on clause' - Invalid query: SELECT `this`.*
FROM `rbac_user` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `td`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`id` = '1'
AND `this`.`system` = 'WebApp_v1'
ERROR - 2020-06-21 18:51:41 --> Severity: Notice --> Trying to get property 'file_photo' of non-object C:\xampp\htdocs\Salesman\application\views\template\backend\sidebar.php 3
ERROR - 2020-06-21 18:51:44 --> Severity: Notice --> Trying to get property 'file_photo' of non-object C:\xampp\htdocs\Salesman\application\views\template\backend\sidebar.php 3
ERROR - 2020-06-21 19:03:34 --> Could not find the language line "select "
ERROR - 2020-06-21 19:03:48 --> Could not find the language line "select "
ERROR - 2020-06-21 19:51:18 --> Severity: Notice --> Undefined variable: file_photo C:\xampp\htdocs\Salesman\application\modules\auth\views\auth-profile.php 16
