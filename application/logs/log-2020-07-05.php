<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-05 08:29:22 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\Salesman\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-07-05 08:29:22 --> Unable to connect to the database
ERROR - 2020-07-05 09:50:40 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\employee\views\employee-data.php 121
ERROR - 2020-07-05 09:50:40 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\employee\views\employee-data.php 121
ERROR - 2020-07-05 10:04:18 --> Query error: Unknown column 'ou.approvalDesc' in 'field list' - Invalid query: SELECT `this`.*, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`, `rc`.`description` as `country_name`, `rr`.`name` as `religion_name`, `r`.`name` as `role_name`, `la`.`approvalDesc` as `leave_approver_name`, `ou`.`approvalDesc` as `outstation_approver_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`jobTitle`
LEFT JOIN `ref_country` `rc` ON `rc`.`countryCode` = `this`.`countryCode`
LEFT JOIN `ref_religions` `rr` ON `rr`.`id` = `this`.`religion`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
LEFT JOIN `ref_outstation_approver` `oa` ON `oa`.`id` = `this`.`outstationApprover`
WHERE `this`.`id` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ERROR - 2020-07-05 10:04:22 --> Query error: Unknown column 'ou.approvalDesc' in 'field list' - Invalid query: SELECT `this`.*, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`, `rc`.`description` as `country_name`, `rr`.`name` as `religion_name`, `r`.`name` as `role_name`, `la`.`approvalDesc` as `leave_approver_name`, `ou`.`approvalDesc` as `outstation_approver_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`jobTitle`
LEFT JOIN `ref_country` `rc` ON `rc`.`countryCode` = `this`.`countryCode`
LEFT JOIN `ref_religions` `rr` ON `rr`.`id` = `this`.`religion`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
LEFT JOIN `ref_outstation_approver` `oa` ON `oa`.`id` = `this`.`outstationApprover`
WHERE `this`.`id` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ERROR - 2020-07-05 10:24:20 --> Could not find the language line "select "
ERROR - 2020-07-05 10:24:20 --> Severity: Notice --> Undefined variable: roles C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\views\employee-leave-entitle-data.php 233
ERROR - 2020-07-05 10:24:20 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\views\employee-leave-entitle-data.php 233
ERROR - 2020-07-05 10:24:59 --> Could not find the language line "select "
ERROR - 2020-07-05 10:25:20 --> Could not find the language line "select "
ERROR - 2020-07-05 11:38:48 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`employee_leave_entitle`, CONSTRAINT `FK_leave_entitle_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)) - Invalid query: INSERT INTO `employee_leave_entitle` (`employeeId`, `leaveType`, `entitlement`) VALUES ('1', '4', '10')
ERROR - 2020-07-05 13:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''1'
AND `companyId` = '1'
AND `leaveType` = '2' and `system` = 'WebApp_v1'' at line 3 - Invalid query: SELECT `id`
FROM `employee_leave_entitle`
WHERE `employeeId` = `=` '1'
AND `companyId` = '1'
AND `leaveType` = '2' and `system` = 'WebApp_v1'
ERROR - 2020-07-05 13:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''1'
AND `companyId` = '1'
AND `leaveType` = '2' and `system` = 'WebApp_v1'' at line 3 - Invalid query: SELECT `id`
FROM `employee_leave_entitle`
WHERE `employeeId` = `=` '1'
AND `companyId` = '1'
AND `leaveType` = '2' and `system` = 'WebApp_v1'
ERROR - 2020-07-05 13:07:17 --> Severity: error --> Exception: Too few arguments to function Employee_leave_entitle::leaveType_check(), 2 passed in C:\xampp\htdocs\Salesman\system\libraries\Form_validation.php on line 723 and exactly 3 expected C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\controllers\Employee_leave_entitle.php 22
ERROR - 2020-07-05 13:07:46 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\controllers\Employee_leave_entitle.php 26
ERROR - 2020-07-05 13:07:46 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\controllers\Employee_leave_entitle.php 26
ERROR - 2020-07-05 13:08:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '!+ '2'
AND `employeeId` = '1, 2'
AND `companyId` = '1'
AND `leaveType` = '1' and' at line 3 - Invalid query: SELECT `id`
FROM `employee_leave_entitle`
WHERE id !+ '2'
AND `employeeId` = '1, 2'
AND `companyId` = '1'
AND `leaveType` = '1' and `system` = 'WebApp_v1'
ERROR - 2020-07-05 13:08:19 --> Query error: Unknown column 'balances' in 'field list' - Invalid query: UPDATE `employee_leave_entitle` SET `employeeId` = '1', `leaveType` = '1', `entitlement` = '22', `updateTime` = '2020-07-05 13:08:19', `updatedBy` = 'Fajar Puji', `balances` = 21
WHERE `id` = '2'
ERROR - 2020-07-05 13:30:32 --> Severity: Notice --> Trying to get property 'companyId' of non-object C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 407
ERROR - 2020-07-05 13:30:32 --> Severity: Notice --> Trying to get property 'pending' of non-object C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 410
ERROR - 2020-07-05 13:38:29 --> Severity: Notice --> Undefined property: stdClass::$pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 507
ERROR - 2020-07-05 13:38:29 --> Severity: Notice --> Undefined property: stdClass::$pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 508
ERROR - 2020-07-05 13:38:29 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 508
ERROR - 2020-07-05 13:39:22 --> Severity: Notice --> Undefined property: stdClass::$pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 508
ERROR - 2020-07-05 13:39:23 --> Severity: Notice --> Undefined property: stdClass::$pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 508
ERROR - 2020-07-05 13:41:58 --> Severity: Notice --> Undefined variable: pending C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 511
ERROR - 2020-07-05 13:44:15 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 511
ERROR - 2020-07-05 13:54:54 --> Severity: Notice --> Undefined property: stdClass::$statusApproval C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 71
ERROR - 2020-07-05 13:54:54 --> Severity: Notice --> Undefined property: stdClass::$statusApproval C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 71
ERROR - 2020-07-05 13:54:59 --> Severity: Notice --> Undefined property: stdClass::$statusApproval C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 71
ERROR - 2020-07-05 13:54:59 --> Severity: Notice --> Undefined property: stdClass::$statusApproval C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 71
ERROR - 2020-07-05 14:11:42 --> Could not find the language line "select "
ERROR - 2020-07-05 14:20:11 --> Could not find the language line "select "
ERROR - 2020-07-05 14:21:52 --> Could not find the language line "select "
ERROR - 2020-07-05 17:20:43 --> Query error: Unknown column 'publishDate' in 'field list' - Invalid query: INSERT INTO `work_journal_trans` (`tranDateTime`, `reportType`, `journalTask`, `journalDesc`, `completedTask`, `uncompletedTask`, `notes`, `publishDate`, `companyId`, `system`, `creationTime`, `createdBy`, `statusId`) VALUES ('07/05/2020 5:20 PM', 'D', 'klajsdlka', 'lkjasldka', 'lkjasd', 'lkajsdla', 'lkjasdas', '1970-01-01 07:00:00', '1', 'WebApp_v1', '2020-07-05 17:20:43', 'Abul', 'A')
ERROR - 2020-07-05 19:55:56 --> Could not find the language line "select "
ERROR - 2020-07-05 19:56:05 --> Could not find the language line "select "
ERROR - 2020-07-05 19:58:56 --> Severity: error --> Exception: Class 'Attendance_model' not found C:\xampp\htdocs\Salesman\application\third_party\MX\Loader.php 228
ERROR - 2020-07-05 20:45:33 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`employee_attendance`, CONSTRAINT `FK_employee_attendance_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)) - Invalid query: INSERT INTO `employee_attendance` (`employeeId`, `title`, `description`, `eventStartTime`, `eventDay`) VALUES ('1', 'lkasdka;sld', 'alksd;asd', '2020-07-05 20:45:33', 'Sunday')
ERROR - 2020-07-05 20:46:16 --> Severity: Notice --> Undefined variable: data_insert C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 96
ERROR - 2020-07-05 21:05:42 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 168
ERROR - 2020-07-05 21:11:20 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 195
ERROR - 2020-07-05 21:11:20 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 195
ERROR - 2020-07-05 21:18:21 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 195
ERROR - 2020-07-05 21:18:22 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 195
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 200
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 201
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 202
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 200
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 201
ERROR - 2020-07-05 21:20:52 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 202
ERROR - 2020-07-05 21:20:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\Salesman\system\core\Exceptions.php:271) C:\xampp\htdocs\Salesman\system\core\Common.php 570
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 200
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 201
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 202
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 200
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 201
ERROR - 2020-07-05 21:20:58 --> Severity: Notice --> Undefined variable: init C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 202
ERROR - 2020-07-05 21:20:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\Salesman\system\core\Exceptions.php:271) C:\xampp\htdocs\Salesman\system\core\Common.php 570
ERROR - 2020-07-05 21:36:43 --> Severity: error --> Exception: syntax error, unexpected '"0"' (T_CONSTANT_ENCAPSED_STRING) C:\xampp\htdocs\Salesman\application\modules\attendance\controllers\Attendance.php 205
