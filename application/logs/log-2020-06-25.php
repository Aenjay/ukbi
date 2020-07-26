<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-25 05:46:29 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 05:46:37 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 05:47:12 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 05:47:22 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 05:47:31 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 06:08:16 --> Could not find the language line "select "
ERROR - 2020-06-25 06:08:32 --> Could not find the language line "select "
ERROR - 2020-06-25 06:11:25 --> Could not find the language line "select "
ERROR - 2020-06-25 06:12:03 --> Could not find the language line "select "
ERROR - 2020-06-25 06:12:07 --> Could not find the language line "select "
ERROR - 2020-06-25 06:12:21 --> Could not find the language line "select "
ERROR - 2020-06-25 06:15:49 --> Could not find the language line "select "
ERROR - 2020-06-25 06:15:56 --> Could not find the language line "select "
ERROR - 2020-06-25 06:16:08 --> Could not find the language line "select "
ERROR - 2020-06-25 06:40:21 --> Query error: Table 'kasalesappv4.leave_type' doesn't exist - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `adjustment`, `balance`, `pending`, `taken`, `broughtForward`, `entitlement`, `bufferEntitlement`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-25 06:40:59 --> Query error: Table 'kasalesappv4.leave_type' doesn't exist - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `adjustment`, `balance`, `pending`, `taken`, `broughtForward`, `entitlement`, `bufferEntitlement`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-25 06:41:41 --> Query error: Table 'kasalesappv4.leave_type' doesn't exist - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `adjustment`, `balance`, `pending`, `taken`, `broughtForward`, `entitlement`, `bufferEntitlement`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-25 06:41:59 --> Query error: Column 'companyId' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `adjustment`, `balance`, `pending`, `taken`, `broughtForward`, `entitlement`, `bufferEntitlement`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-25 06:42:19 --> Query error: Column 'name' in order clause is ambiguous - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`, `adjustment`, `balance`, `pending`, `taken`, `broughtForward`, `entitlement`, `bufferEntitlement`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveTypeId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-25 22:05:10 --> Query error: Column 'statusId' in where clause is ambiguous - Invalid query: SELECT `this`.*, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`, `rc`.`description` as `country_name`, `rr`.`name` as `religion_name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`jobTitle`
LEFT JOIN `ref_country` `rc` ON `rc`.`countryCode` = `this`.`countryCode`
LEFT JOIN `ref_religions` `rr` ON `rr`.`id` = `this`.`religion`
WHERE `this`.`system` = 'WebApp_v1'
AND `statusId` = 'A'
AND `this`.`companyId` = '1'
ERROR - 2020-06-25 22:44:42 --> Query error: Duplicate entry '1-1-1-1' for key 'PRIMARY' - Invalid query: UPDATE `employee_leave_entitle` SET `employeeId` = '1', `leaveTypeId` = '1', `adjustment` = '0', `balance` = '14', `pending` = '1', `taken` = '2', `broughtForward` = '0', `entitlement` = '14', `bufferEntitlement` = '0', `updateTime` = '2020-06-25 22:44:42', `updatedBy` = 'Aenjay'
WHERE `id` = '1'
ERROR - 2020-06-25 22:44:45 --> Query error: Duplicate entry '1-1-1-1' for key 'PRIMARY' - Invalid query: UPDATE `employee_leave_entitle` SET `employeeId` = '1', `leaveTypeId` = '1', `adjustment` = '0', `balance` = '14', `pending` = '1', `taken` = '2', `broughtForward` = '0', `entitlement` = '14', `bufferEntitlement` = '0', `updateTime` = '2020-06-25 22:44:45', `updatedBy` = 'Aenjay'
WHERE `id` = '1'
ERROR - 2020-06-25 22:56:43 --> Could not find the language line "select "
ERROR - 2020-06-25 22:57:22 --> Could not find the language line "select "
ERROR - 2020-06-25 22:57:23 --> Could not find the language line "select "
ERROR - 2020-06-25 23:04:31 --> Could not find the language line "select "
ERROR - 2020-06-25 23:05:49 --> Could not find the language line "employeeCode"
ERROR - 2020-06-25 23:15:10 --> Could not find the language line "select "
ERROR - 2020-06-25 23:15:31 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `jt`.`role_id`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `jt`.`role_id`
ERROR - 2020-06-25 23:15:37 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `this`.`id`, `this`.`name`, `email`, `jt`.`role_id`, `r`.`name` as `role_name`, `this`.`password`, `this`.`statusId`, `this`.`companyId`
FROM `employee` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `jt`.`role_id`
ERROR - 2020-06-25 23:52:50 --> Query error: Unknown column 'clinicVisiDate' in 'field list' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisiDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:06 --> Severity: Notice --> Undefined property: stdClass::$durasi C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 139
ERROR - 2020-06-25 23:54:43 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%a%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:43 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%as%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:46 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%as%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:46 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%as%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:46 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%as%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:49 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%asda%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-06-25 23:54:49 --> Query error: Unknown column 'leave_type_name' in 'where clause' - Invalid query: SELECT `this`.`id`, `lt`.`name` as `leave_type_name`, `startDate`, `endDate`, `duration`, `reasonDesc`, `clinicName`, `clinicVisitDate`
FROM `employee_leave_application` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND  leave_type_name  LIKE '%asda%' ESCAPE '!' 
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
