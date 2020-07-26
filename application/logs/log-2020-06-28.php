<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-28 08:49:07 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' C:\xampp\htdocs\Salesman\application\modules\sys_company\controllers\Sys_company.php 206
ERROR - 2020-06-28 09:27:07 --> Severity: error --> Exception: syntax error, unexpected ',' C:\xampp\htdocs\Salesman\application\modules\sys_company\controllers\Sys_company.php 714
ERROR - 2020-06-28 09:32:46 --> The upload path does not appear to be valid.
ERROR - 2020-06-28 09:33:03 --> Query error: Unknown column 'displayName' in 'field list' - Invalid query: INSERT INTO `sys_company` (`companyId`, `displayName`, `description`, `filename`, `contentType`, `size`, `system`, `creationTime`, `createdBy`, `statusId`) VALUES ('1', 'ads', 'lkajsd', 'f3410ed18cb22fb29d084cd26e488c52.jpg', 'jpg', 38949, 'WebApp_v1', '2020-06-28 09:33:03', 'Aenjay', 'A')
ERROR - 2020-06-28 09:42:46 --> Severity: Notice --> Undefined property: stdClass::$filename C:\xampp\htdocs\Salesman\application\modules\sys_company\controllers\Sys_company.php 732
ERROR - 2020-06-28 10:11:16 --> Query error: Unknown column 'd.description' in 'on clause' - Invalid query: SELECT `this`.*, `c`.`description` as `country_name`
FROM `sys_company` `this`
LEFT JOIN `ref_country` `c` ON `d`.`description` = `this`.`billingCountry`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
AND `this`.`statusId` != 'I'
ERROR - 2020-06-28 10:46:22 --> Could not find the language line "select "
ERROR - 2020-06-28 10:53:18 --> Could not find the language line "select "
ERROR - 2020-06-28 11:18:33 --> Could not find the language line "select "
ERROR - 2020-06-28 11:21:15 --> Could not find the language line "select "
ERROR - 2020-06-28 12:29:17 --> Could not find the language line "select "
ERROR - 2020-06-28 12:42:43 --> Severity: error --> Exception: Unable to locate the model you have specified: Employee_attendance_model C:\xampp\htdocs\Salesman\system\core\Loader.php 348
ERROR - 2020-06-28 12:43:32 --> Query error: Unknown column 'this.leaveTypeId' in 'on clause' - Invalid query: SELECT `this`.*, `lt`.`name` as `leave_type_name`
FROM `employee_attendance` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`id` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND `this`.`companyId` = '1'
ERROR - 2020-06-28 13:18:35 --> 404 Page Not Found: 
ERROR - 2020-06-28 14:32:17 --> Severity: error --> Exception: Unable to locate the model you have specified: Department_model C:\xampp\htdocs\Salesman\system\core\Loader.php 348
ERROR - 2020-06-28 14:32:58 --> Severity: Notice --> Undefined variable: listLeaveType C:\xampp\htdocs\Salesman\application\modules\approve_employee_leave\views\approve-employee-leave-data.php 79
ERROR - 2020-06-28 14:32:58 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\approve_employee_leave\views\approve-employee-leave-data.php 79
ERROR - 2020-06-28 14:33:13 --> Severity: Notice --> Undefined variable: listLeaveType C:\xampp\htdocs\Salesman\application\modules\approve_employee_leave\views\approve-employee-leave-data.php 79
ERROR - 2020-06-28 14:33:13 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\approve_employee_leave\views\approve-employee-leave-data.php 79
ERROR - 2020-06-28 14:41:39 --> Query error: Table 'kasalesappv4.employee_leave_applications' doesn't exist - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`
FROM `employee_leave_applications` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND this.leaveType IN (SELECT id FROM ref_leave_approver where (approver1 = '2' or `approver2` = '2' or `approver3` = '2') and `statusId` != 'I' and `system` = 'WebApp_v1')
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 14:42:58 --> Query error: Table 'kasalesappv4.employee_leave_applications' doesn't exist - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`
FROM `employee_leave_applications` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND this.leaveApprover IN (SELECT id FROM ref_leave_approver where (approver1 = '2' or `approver2` = '2' or `approver3` = '2') and `statusId` != 'I' and `system` = 'WebApp_v1')
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 15:06:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_maste' at line 9 - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (SELECT 
				CASE 
			        WHEN approver1 = '2' THEN 'approver1'
			        WHEN approver2 = '2' THEN 'approver2'
			        WHEN approver3 = '2' then 'approver3'
			        ELSE ''
			    END)
			    from ref_leave_approver where statusId != 'I' and system = 'WebApp_v1'
			) as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND this.leaveApprover IN (SELECT id FROM ref_leave_approver where (approver1 = '2' or `approver2` = '2' or `approver3` = '2') and `statusId` != 'I' and `system` = 'WebApp_v1')
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 15:06:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_maste' at line 9 - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (SELECT 
				CASE 
			        WHEN approver1 = '2' THEN 'approver1'
			        WHEN approver2 = '2' THEN 'approver2'
			        WHEN approver3 = '2' then 'approver3'
			        ELSE ''
			    END)
			    from ref_leave_approver where statusId != 'I' and system = 'WebApp_v1'
			) as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND this.leaveApprover IN (SELECT id FROM ref_leave_approver where (approver1 = '2' or `approver2` = '2' or `approver3` = '2') and `statusId` != 'I' and `system` = 'WebApp_v1')
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 15:07:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_maste' at line 9 - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (SELECT 
				CASE 
			        WHEN approver1 = '2' THEN 'approver1'
			        WHEN approver2 = '2' THEN 'approver2'
			        WHEN approver3 = '2' then 'approver3'
			        ELSE ''
			    END)
			    from ref_leave_approver where statusId != 'I' and system = 'WebApp_v1' and this.leaveApprover = id
			) as approver
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND this.leaveApprover IN (SELECT id FROM ref_leave_approver where (approver1 = '2' or `approver2` = '2' or `approver3` = '2') and `statusId` != 'I' and `system` = 'WebApp_v1')
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 15:22:21 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 'P'
ERROR - 2020-06-28 15:22:23 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 'W'
ERROR - 2020-06-28 15:22:27 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 'P'
ERROR - 2020-06-28 15:22:42 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 1
ERROR - 2020-06-28 15:27:26 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 1
ERROR - 2020-06-28 15:27:30 --> Query error: Unknown column 'statusApproval' in 'having clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApproval` = 1
ERROR - 2020-06-28 16:27:25 --> Severity: Notice --> Undefined variable: approval2Status C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 112
ERROR - 2020-06-28 17:18:02 --> Query error: Unknown column 'updateBy' in 'field list' - Invalid query: UPDATE `employee_leave_application` SET `approval1Person` = '2', `approval1Status` = 'A', `approval1Comment` = 'Ok', `approval1Date` = '2020-06-28 17:18:02', `updateTime` = '2020-06-28 17:18:02', `updateBy` = 'Israf'
WHERE `id` = '2'
ERROR - 2020-06-28 17:51:34 --> Query error: Unknown column 'this.approveLeaveAppId' in 'where clause' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (SELECT approvalStatus
			    from employee_leave_application_approval where statusId != 'I' and system = 'WebApp_v1' and this.approveLeaveAppId = id order by id desc limit 1
			) as statusApproval, (SELECT approverSequence
			    from employee_leave_application_approval where statusId != 'I' and system = 'WebApp_v1' and this.approveLeaveAppId = id order by id desc limit 1
			) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 17:51:39 --> Query error: Unknown column 'this.approveLeaveAppId' in 'where clause' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (SELECT approvalStatus
			    from employee_leave_application_approval where statusId != 'I' and system = 'WebApp_v1' and this.approveLeaveAppId = id order by id desc limit 1
			) as statusApproval, (SELECT approverSequence
			    from employee_leave_application_approval where statusId != 'I' and system = 'WebApp_v1' and this.approveLeaveAppId = id order by id desc limit 1
			) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 17:52:22 --> Severity: Notice --> Undefined property: stdClass::$asApprover C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 72
ERROR - 2020-06-28 17:52:22 --> Severity: Notice --> Undefined property: stdClass::$asApprover C:\xampp\htdocs\Salesman\application\modules\all_employee_leave\controllers\All_employee_leave.php 72
ERROR - 2020-06-28 18:34:12 --> Query error: Unknown column 'approver3Person' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (CASE 
			        WHEN approver3Person != '' Then approval3Status
			        WHEN approver2Person != '' THEN approval2Status
			        WHEN approver1Person != '' THEN approval1Status
			        ELSE ''
			    END) as statusApproval, (CASE 
			        WHEN approver1 != '' THEN approval1Status
			        WHEN approver2 != '' THEN approval2Status
			        WHEN approver3 != '' then approval3Status
			        ELSE ''
			    END) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 18:34:29 --> Query error: Unknown column 'approver3Person' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (CASE 
			        WHEN approver3Person != '' Then approval3Status
			        WHEN approver2Person != '' THEN approval2Status
			        WHEN approver1Person != '' THEN approval1Status
			        ELSE ''
			    END) as statusApproval, (CASE 
			        WHEN approver1 != '' THEN approval1Status
			        WHEN approver2 != '' THEN approval2Status
			        WHEN approver3 != '' then approval3Status
			        ELSE ''
			    END) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 18:54:42 --> Query error: Unknown column 'statusApprovalS' in 'having clause' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (CASE 
			        WHEN approval3Person != '' Then approval3Status
			        WHEN approval2Person != '' THEN approval2Status
			        WHEN approval1Person != '' THEN approval1Status
			        ELSE approval1Person
			    END) as statusApproval, (CASE 
			        WHEN approval3Person != '' Then 3
			        WHEN approval2Person != '' THEN 2
			        WHEN approval1Person != '' THEN 1
			        ELSE 1
			    END) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
HAVING `statusApprovalS` = 'W'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 18:56:30 --> Query error: Unknown column 'approvar3Person' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (CASE 
			        WHEN approvar3Person != '' Then approval3Status
			        WHEN approver2Person != '' THEN approval2Status
			        WHEN approver1Person != '' THEN approval1Status
			        ELSE ''
			    END) as statusApproval, (CASE 
			        WHEN approver1 != '' THEN approval1Status
			        WHEN approver2 != '' THEN approval2Status
			        WHEN approver3 != '' then approval3Status
			        ELSE ''
			    END) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 18:57:33 --> Query error: Unknown column 'approver1Person' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `la`.`approvalDesc` as `leave_approver_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, (CASE 
			        WHEN approval3Person != '' then approval3Status
			        WHEN approval2Person != '' THEN approval2Status
			        WHEN approver1Person != '' THEN approval1Status
			        ELSE approval1Status
			    END) as statusApproval, (CASE 
			        WHEN approver1 != '' THEN approval1Status
			        WHEN approver2 != '' THEN approval2Status
			        WHEN approver3 != '' then approval3Status
			        ELSE ''
			    END) as approverSequence
FROM `employee_leave_application` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
LEFT JOIN `ref_leave_approver` `la` ON `la`.`id` = `this`.`leaveApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-28 19:42:58 --> Query error: Unknown column 'passwords' in 'field list' - Invalid query: UPDATE `employee_master` SET `name` = 'Abul', `employeeCode` = 'A100092', `idCardNum` = '890222-10-7868', `department` = '2', `jobTitle` = '6', `roleId` = '7', `address1` = 'Address 1 sample', `address2` = 'Address 2 sample', `postCode` = '52200', `city` = 'Petaling Jaya', `state` = 'Selangor', `countryCode` = 'MY', `dateOfBirth` = '2019-06-17', `email` = 'employee@company.com', `gender` = 'M', `mobileNo` = '012-034940380', `race` = 'Malay', `religion` = '1', `remark` = NULL, `password` = 'sewdaq', `passwords` = '$2y$10$rYHu.3wt5HvO7IeqeXaUO.zDSov.XTU.ErjFhk0VXS.War./rsHfy', `updateTime` = '2020-06-28 19:42:58', `updatedBy` = 'Fajar Puji'
WHERE `id` = '1'
