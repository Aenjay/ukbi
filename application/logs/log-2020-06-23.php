<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-23 05:49:56 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 05:53:29 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 05:54:07 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 05:54:31 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 05:59:13 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 05:59:49 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:01:57 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:02:02 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:05:45 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:17:30 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:17:38 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:20:08 --> Severity: error --> Exception: syntax error, unexpected ';', expecting :: (T_PAAMAYIM_NEKUDOTAYIM) C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 228
ERROR - 2020-06-23 06:20:47 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:21:20 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:21:35 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:21:43 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:27:22 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:27:22 --> Severity: Warning --> array_count_values(): Can only count STRING and INTEGER values! C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 226
ERROR - 2020-06-23 06:27:22 --> Severity: Warning --> array_count_values(): Can only count STRING and INTEGER values! C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 226
ERROR - 2020-06-23 06:28:10 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:28:10 --> Severity: 4096 --> Object of class Model could not be converted to string C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 226
ERROR - 2020-06-23 06:28:10 --> Severity: 4096 --> Object of class Model could not be converted to string C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 227
ERROR - 2020-06-23 06:28:10 --> Severity: 4096 --> Object of class Model could not be converted to string C:\xampp\htdocs\Salesman\application\modules\leave_approver\controllers\Leave_approver.php 228
ERROR - 2020-06-23 06:29:06 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:30:04 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:30:16 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:30:21 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:30:27 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:30:59 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:32:09 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:32:31 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:32:51 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:32:57 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:33:02 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:33:14 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:33:37 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:33:46 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:33:52 --> Could not find the language line "approvalDesc"
ERROR - 2020-06-23 06:40:45 --> Could not find the language line "select "
ERROR - 2020-06-23 07:39:56 --> Could not find the language line "select "
ERROR - 2020-06-23 07:40:42 --> Could not find the language line "select "
ERROR - 2020-06-23 07:41:03 --> Could not find the language line "select "
ERROR - 2020-06-23 20:27:32 --> Query error: Unknown column 'rjt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`employeeCode`, `this`.`email`, `rjt`.`name` as `job_title_name`, `rd`.`name` as `department_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `jt` ON `rjt`.`id` = `this`.`jobTitle`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
AND `this`.`statusId` = 'A'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-23 20:27:36 --> Query error: Unknown column 'rjt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`employeeCode`, `this`.`email`, `rjt`.`name` as `job_title_name`, `rd`.`name` as `department_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `jt` ON `rjt`.`id` = `this`.`jobTitle`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
AND `this`.`statusId` = 'A'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-23 20:27:51 --> Query error: Unknown column 'rjt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`employeeCode`, `this`.`email`, `rjt`.`name` as `job_title_name`, `rd`.`name` as `department_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `jt` ON `rjt`.`id` = `this`.`jobTitle`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
AND `this`.`statusId` = 'A'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-23 20:28:19 --> Query error: Table 'kasalesappv4.ref_employee' doesn't exist - Invalid query: SELECT `this`.*
FROM `ref_employee` `this`
WHERE `this`.`id` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
ERROR - 2020-06-23 20:34:28 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 20:34:28 --> Query error: Table 'kasalesappv4.ref_employee' doesn't exist - Invalid query: SELECT `id`
FROM `ref_employee`
WHERE `companyId` = '1'
AND `employeeCode` = 'lkajsdlkasd' and `system` = 'WebApp_v1' and `statusId` = 'A'
ERROR - 2020-06-23 20:34:46 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 20:35:48 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 20:35:48 --> Query error: Unknown column 'idCardNum' in 'field list' - Invalid query: INSERT INTO `employee_master` (`name`, `employeeCode`, `idCardNum`, `jobTitle`, `department`, `address1`, `address2`, `postCode`, `city`, `state`, `countryCode`, `dateOfBirth`, `email`, `gender`, `mobileNo`, `race`, `religion`, `remark`, `companyId`, `system`, `creationTime`, `createdBy`, `statusId`) VALUES ('aklsjdlk', 'lkajsdlka', 'lkjasldkas', '3', '3', 'askldjalsd', 'lkasjlasd', 'lkjasldka', 'lkajsdlas', 'lkajsdlaks', 'ID', '06/23/2020', 'aasjd@gmail.com', 'M', 'aksldad', 'lkajsldkas', '3', 'askdasdlasd', '1', 'WebApp_v1', '2020-06-23 20:35:48', 'Aenjay', 'A')
ERROR - 2020-06-23 20:36:33 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 20:39:08 --> 404 Page Not Found: 
ERROR - 2020-06-23 20:47:30 --> Severity: Notice --> Undefined property: stdClass::$gender C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 160
ERROR - 2020-06-23 20:47:30 --> Severity: Notice --> Undefined property: stdClass::$gender C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 160
ERROR - 2020-06-23 20:47:30 --> Severity: Notice --> Undefined property: stdClass::$gender C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 160
ERROR - 2020-06-23 20:55:49 --> Could not find the language line "form_validation_name_check"
ERROR - 2020-06-23 20:55:49 --> Could not find the language line "form_validation_name_check"
ERROR - 2020-06-23 20:56:38 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 20:59:49 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:01:42 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:01:42 --> The upload path does not appear to be valid.
ERROR - 2020-06-23 21:02:05 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:02:15 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:02:19 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:02:22 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:03:13 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 21:03:13 --> Severity: Notice --> Undefined variable: file_unlink C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 408
ERROR - 2020-06-23 21:03:47 --> Could not find the language line "employeeCode"
ERROR - 2020-06-23 22:46:26 --> Could not find the language line "select "
ERROR - 2020-06-23 23:10:49 --> Could not find the language line "select "
