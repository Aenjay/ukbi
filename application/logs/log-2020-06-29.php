<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-29 19:46:50 --> Could not find the language line "select "
ERROR - 2020-06-29 19:49:52 --> Could not find the language line "select "
ERROR - 2020-06-29 19:50:13 --> Could not find the language line "select "
ERROR - 2020-06-29 20:11:33 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 492
ERROR - 2020-06-29 20:11:33 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 492
ERROR - 2020-06-29 20:11:41 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 492
ERROR - 2020-06-29 20:11:41 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 492
ERROR - 2020-06-29 20:13:17 --> Could not find the language line "department"
ERROR - 2020-06-29 20:37:38 --> Severity: Notice --> Undefined variable: email C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 535
ERROR - 2020-06-29 20:37:50 --> Severity: Notice --> Undefined property: stdClass::$id_old C:\xampp\htdocs\Salesman\application\modules\users\controllers\Users.php 546
ERROR - 2020-06-29 20:44:50 --> 404 Page Not Found: 
ERROR - 2020-06-29 20:56:05 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `this`.`roleId`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee_master` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
WHERE `id` = '2'
AND `this`.`system` = 'WebApp_v1'
ERROR - 2020-06-29 20:56:09 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `this`.`roleId`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee_master` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
WHERE `id` = '2'
AND `this`.`system` = 'WebApp_v1'
ERROR - 2020-06-29 20:56:31 --> Severity: Notice --> Undefined variable: myData C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 601
ERROR - 2020-06-29 20:56:31 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 601
ERROR - 2020-06-29 20:56:59 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 647
ERROR - 2020-06-29 21:02:00 --> Query error: Unknown column 'this.ids' in 'where clause' - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `this`.`roleId`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee_master` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
WHERE `this`.`ids` = '3'
AND `this`.`system` = 'WebApp_v1'
ERROR - 2020-06-29 21:02:09 --> Query error: Unknown column 'this.ids' in 'where clause' - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `this`.`roleId`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee_master` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
WHERE `this`.`ids` = '3'
AND `this`.`system` = 'WebApp_v1'
ERROR - 2020-06-29 21:04:28 --> Severity: Notice --> Undefined variable: ses_ses C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 618
ERROR - 2020-06-29 22:10:57 --> Could not find the language line "department"
