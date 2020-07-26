<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-03 18:50:25 --> Severity: Notice --> Undefined variable: auth_id C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 208
ERROR - 2020-07-03 18:50:25 --> Severity: Notice --> Undefined variable: auth_id C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 208
ERROR - 2020-07-03 18:50:25 --> Severity: Notice --> Undefined variable: auth_id C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 208
ERROR - 2020-07-03 18:50:25 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 210
ERROR - 2020-07-03 18:50:56 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 213
ERROR - 2020-07-03 18:54:54 --> 404 Page Not Found: 
ERROR - 2020-07-03 19:13:46 --> Could not find the language line "form_validation_max-length"
ERROR - 2020-07-03 19:13:53 --> Could not find the language line "form_validation_max-length"
ERROR - 2020-07-03 19:40:53 --> Could not find the language line "form_validation_max-length"
ERROR - 2020-07-03 19:41:20 --> Query error: Unknown column 'lt.name' in 'field list' - Invalid query: SELECT `this`.*, `lt`.`name` as `leave_type_name`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
WHERE `this`.`employeeId` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND `this`.`companyId` = '1'
ERROR - 2020-07-03 19:58:34 --> Could not find the language line "select "
ERROR - 2020-07-03 19:58:44 --> Could not find the language line "select "
ERROR - 2020-07-03 19:58:59 --> Could not find the language line "select "
ERROR - 2020-07-03 19:59:01 --> Could not find the language line "select "
ERROR - 2020-07-03 19:59:02 --> Could not find the language line "select "
ERROR - 2020-07-03 19:59:04 --> Could not find the language line "select "
ERROR - 2020-07-03 19:59:12 --> Could not find the language line "select "
ERROR - 2020-07-03 20:04:45 --> Could not find the language line "select "
ERROR - 2020-07-03 20:10:25 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`employee_leave_entitle`, CONSTRAINT `FK_leave_entitle_leavetype` FOREIGN KEY (`leaveTypeId`) REFERENCES `ref_leave_type` (`id`)) - Invalid query: INSERT INTO `employee_leave_entitle` (`employeeId`, `entitlement`, `companyId`, `system`, `creationTime`, `createdBy`, `statusId`) VALUES ('1', '12', '1', 'WebApp_v1', '2020-07-03 20:10:25', 'Ahmad Rahmadi', 'A')
ERROR - 2020-07-03 20:10:29 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`employee_leave_entitle`, CONSTRAINT `FK_leave_entitle_leavetype` FOREIGN KEY (`leaveTypeId`) REFERENCES `ref_leave_type` (`id`)) - Invalid query: INSERT INTO `employee_leave_entitle` (`employeeId`, `entitlement`, `companyId`, `system`, `creationTime`, `createdBy`, `statusId`) VALUES ('1', '12', '1', 'WebApp_v1', '2020-07-03 20:10:29', 'Ahmad Rahmadi', 'A')
