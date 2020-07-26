<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-04 03:00:19 --> Could not find the language line "select "
ERROR - 2020-07-04 03:16:41 --> Could not find the language line "select "
ERROR - 2020-07-04 03:16:42 --> Severity: Compile Warning --> Unterminated comment starting line 424 C:\xampp\htdocs\Salesman\application\modules\public_holiday\controllers\Public_holiday.php 424
ERROR - 2020-07-04 03:17:01 --> Severity: Compile Warning --> Unterminated comment starting line 424 C:\xampp\htdocs\Salesman\application\modules\public_holiday\controllers\Public_holiday.php 424
ERROR - 2020-07-04 03:19:23 --> Could not find the language line "select "
ERROR - 2020-07-04 03:19:59 --> Could not find the language line "select "
ERROR - 2020-07-04 03:20:22 --> Could not find the language line "select "
ERROR - 2020-07-04 03:53:38 --> Query error: Unknown column 'this.holDescription' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`holYear`, `this`.`holDayName`, `this`.`holDescription`
FROM `ref_public_holiday` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `holYear` asc
 LIMIT 10
ERROR - 2020-07-04 03:55:05 --> Query error: Unknown column 'this.holDescription' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`holYear`, `this`.`holDayName`, `this`.`holDescription`
FROM `ref_public_holiday` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `holYear` asc
 LIMIT 10
ERROR - 2020-07-04 03:56:02 --> Query error: Unknown column 'this.holDescription' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`holYear`, `this`.`holDayName`, `this`.`holDescription`
FROM `ref_public_holiday` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `holYear` asc
 LIMIT 10
ERROR - 2020-07-04 04:00:10 --> Query error: Unknown column 'this.holDescription' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`holYear`, `this`.`holDescription`
FROM `ref_public_holiday` `this`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
GROUP BY `holYear`
ORDER BY `holYear` asc
 LIMIT 10
ERROR - 2020-07-04 04:00:25 --> Query error: Unknown column 'year' in 'where clause' - Invalid query: SELECT `holDayName`
FROM `ref_public_holiday`
WHERE `system` = 'WebApp_v1'
AND `companyId` = '1'
AND `year` = '2020'
ERROR - 2020-07-04 04:05:16 --> Severity: Notice --> Undefined property: stdClass::$holDate C:\xampp\htdocs\Salesman\application\modules\public_holiday\controllers\Public_holiday.php 116
ERROR - 2020-07-04 04:05:16 --> Severity: Notice --> Undefined property: stdClass::$holDate C:\xampp\htdocs\Salesman\application\modules\public_holiday\controllers\Public_holiday.php 116
ERROR - 2020-07-04 04:19:39 --> Query error: Table 'kasalesappv4.public_holiday' doesn't exist - Invalid query: SELECT `id`, `holDay`
FROM `public_holiday`
WHERE `system` = 'WebApp_v1' and `statusId` = 'A' and `companyId` = '1' order by holDay asc
ERROR - 2020-07-04 04:22:48 --> Severity: Notice --> Undefined variable: listRefHoliday C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\views\employee-leave-application-data.php 394
ERROR - 2020-07-04 04:22:48 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\views\employee-leave-application-data.php 394
ERROR - 2020-07-04 06:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 13 - Invalid query: 
		        SELECT * FROM 
		        (SELECT ADDDATE('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date FROM
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t0,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t1,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t2,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t3,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t4) v
		        WHERE 
		        selected_date BETWEEN '2020-07-10' 
		        AND '2020-07-13' 
		        AND DAYOFWEEK(DATE(selected_date) NOT IN (
		        	SELECT (holDay + 1) from ref_public_holiday where system = 'WebApp_v1' and companyId = '1'
		        )
		        
ERROR - 2020-07-04 06:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'from ref_public_holiday where system = 'WebApp_v1' and companyId = '1'
		      ' at line 12 - Invalid query: 
		        SELECT * FROM 
		        (SELECT ADDDATE('1970-01-01',t4.i*10000 + t3.i*1000 + t2.i*100 + t1.i*10 + t0.i) selected_date FROM
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t0,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t1,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t2,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t3,
		         (SELECT 0 i UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) t4) v
		        WHERE 
		        selected_date BETWEEN '2020-07-10' 
		        AND '2020-07-13' 
		        AND DAYOFWEEK(DATE(selected_date) NOT IN (
		        	SELECT (holDay + 1)) from ref_public_holiday where system = 'WebApp_v1' and companyId = '1'
		        )
		        
ERROR - 2020-07-04 06:25:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\models\Model.php 82
ERROR - 2020-07-04 06:25:36 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\Salesman\application\models\Model.php 83
ERROR - 2020-07-04 06:25:37 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 485
ERROR - 2020-07-04 06:26:04 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php 485
ERROR - 2020-07-04 10:46:48 --> Severity: error --> Exception: syntax error, unexpected ''statusId'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' C:\xampp\htdocs\Salesman\application\modules\employee_leave_entitle\controllers\Employee_leave_entitle.php 33
ERROR - 2020-07-04 18:41:54 --> Could not find the language line "select "
ERROR - 2020-07-04 18:44:19 --> Could not find the language line "select "
ERROR - 2020-07-04 18:46:45 --> Severity: Compile Error --> Cannot declare class Restserver\Libraries\REST_Controller, because the name is already in use C:\xampp\htdocs\Salesman\application\libraries\REST_Controller.php 2363
ERROR - 2020-07-04 18:51:53 --> Could not find the language line "select "
ERROR - 2020-07-04 19:34:28 --> Query error: Unknown column 'destination' in 'field list' - Invalid query: SELECT `this`.`id`, `la`.`approvalDesc` as `oustation_approver_name`, `startDate`, `endDate`, `duration`, `destination`, `reasonDesc`, `approvalStatus`
FROM `employee_outstation` `this`
LEFT JOIN `ref_outstation_approver` `la` ON `la`.`id` = `this`.`outstationApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND `this`.`employeeId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-07-04 19:34:33 --> Query error: Unknown column 'destination' in 'field list' - Invalid query: SELECT `this`.`id`, `la`.`approvalDesc` as `oustation_approver_name`, `startDate`, `endDate`, `duration`, `destination`, `reasonDesc`, `approvalStatus`
FROM `employee_outstation` `this`
LEFT JOIN `ref_outstation_approver` `la` ON `la`.`id` = `this`.`outstationApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
AND `this`.`employeeId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-07-04 19:35:20 --> Severity: Notice --> Undefined property: stdClass::$outstation_approver_name C:\xampp\htdocs\Salesman\application\modules\employee_outstation\controllers\Employee_outstation.php 282
ERROR - 2020-07-04 19:37:24 --> Severity: Notice --> Undefined property: stdClass::$clinicVisitDate C:\xampp\htdocs\Salesman\application\modules\employee_outstation\controllers\Employee_outstation.php 145
ERROR - 2020-07-04 19:37:30 --> Severity: Notice --> Undefined property: stdClass::$clinicVisitDate C:\xampp\htdocs\Salesman\application\modules\employee_outstation\controllers\Employee_outstation.php 145
ERROR - 2020-07-04 19:59:11 --> Could not find the language line "select "
ERROR - 2020-07-04 20:11:01 --> Severity: Notice --> Undefined property: stdClass::$destination C:\xampp\htdocs\Salesman\application\modules\approve_employee_outstation\controllers\Approve_employee_outstation.php 88
ERROR - 2020-07-04 20:11:07 --> Severity: Notice --> Undefined property: stdClass::$destination C:\xampp\htdocs\Salesman\application\modules\approve_employee_outstation\controllers\Approve_employee_outstation.php 88
ERROR - 2020-07-04 20:29:31 --> Query error: Unknown column 'lt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `outstation_type_name`, `la`.`approvalDesc` as `outstation_approver_name`, `startDate`, `endDate`, `duration`, `destination`, (CASE 
			        WHEN approval3Person != '' then approval3Status
			        WHEN approval2Person != '' THEN approval2Status
			        WHEN approval1Person != '' THEN approval1Status
			        ELSE approval1Status
			    END) as statusApproval, (CASE 
			        WHEN approval3Person != '' then 3
			        WHEN approval2Person != '' THEN 2
			        WHEN approval1Person != '' THEN 1
			        ELSE 1
			    END) as approverSequence
FROM `employee_outstation` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_outstation_approver` `la` ON `la`.`id` = `this`.`outstationApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-07-04 20:29:36 --> Query error: Unknown column 'lt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `e`.`name` as `employee_name`, `e`.`employeeCode`, `lt`.`name` as `outstation_type_name`, `la`.`approvalDesc` as `outstation_approver_name`, `startDate`, `endDate`, `duration`, `destination`, (CASE 
			        WHEN approval3Person != '' then approval3Status
			        WHEN approval2Person != '' THEN approval2Status
			        WHEN approval1Person != '' THEN approval1Status
			        ELSE approval1Status
			    END) as statusApproval, (CASE 
			        WHEN approval3Person != '' then 3
			        WHEN approval2Person != '' THEN 2
			        WHEN approval1Person != '' THEN 1
			        ELSE 1
			    END) as approverSequence
FROM `employee_outstation` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `ref_outstation_approver` `la` ON `la`.`id` = `this`.`outstationApprover`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `this`.`companyId` = '1'
ORDER BY `startDate` desc
 LIMIT 10
ERROR - 2020-07-04 20:30:00 --> Severity: Notice --> Undefined property: stdClass::$outstation_approver C:\xampp\htdocs\Salesman\application\modules\all_employee_outstation\controllers\All_employee_outstation.php 65
ERROR - 2020-07-04 20:38:45 --> Query error: Column 'name' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%a%' ESCAPE '!' 
OR  compRegNo  LIKE '%a%' ESCAPE '!' 
OR  name  LIKE '%a%' ESCAPE '!' 
OR  email  LIKE '%a%' ESCAPE '!' 
OR  r.name  LIKE '%a%' ESCAPE '!' 
OR  department_name  LIKE '%a%' ESCAPE '!' 
OR  job_title_name  LIKE '%a%' ESCAPE '!' 
 )
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-07-04 20:38:46 --> Query error: Column 'name' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%admin%' ESCAPE '!' 
OR  compRegNo  LIKE '%admin%' ESCAPE '!' 
OR  name  LIKE '%admin%' ESCAPE '!' 
OR  email  LIKE '%admin%' ESCAPE '!' 
OR  r.name  LIKE '%admin%' ESCAPE '!' 
OR  department_name  LIKE '%admin%' ESCAPE '!' 
OR  job_title_name  LIKE '%admin%' ESCAPE '!' 
 )
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-07-04 20:38:55 --> Query error: Column 'name' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%a%' ESCAPE '!' 
OR  compRegNo  LIKE '%a%' ESCAPE '!' 
OR  name  LIKE '%a%' ESCAPE '!' 
OR  email  LIKE '%a%' ESCAPE '!' 
OR  r.name  LIKE '%a%' ESCAPE '!' 
OR  department_name  LIKE '%a%' ESCAPE '!' 
OR  job_title_name  LIKE '%a%' ESCAPE '!' 
 )
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-07-04 20:38:55 --> Query error: Column 'name' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%admi%' ESCAPE '!' 
OR  compRegNo  LIKE '%admi%' ESCAPE '!' 
OR  name  LIKE '%admi%' ESCAPE '!' 
OR  email  LIKE '%admi%' ESCAPE '!' 
OR  r.name  LIKE '%admi%' ESCAPE '!' 
OR  department_name  LIKE '%admi%' ESCAPE '!' 
OR  job_title_name  LIKE '%admi%' ESCAPE '!' 
 )
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-07-04 20:39:21 --> Query error: Column 'email' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%a%' ESCAPE '!' 
OR  compRegNo  LIKE '%a%' ESCAPE '!' 
OR  this.name  LIKE '%a%' ESCAPE '!' 
OR  email  LIKE '%a%' ESCAPE '!' 
OR  r.name  LIKE '%a%' ESCAPE '!' 
OR  department_name  LIKE '%a%' ESCAPE '!' 
OR  job_title_name  LIKE '%a%' ESCAPE '!' 
 )
ORDER BY `this`.`name` asc
 LIMIT 10
ERROR - 2020-07-04 20:39:22 --> Query error: Column 'email' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `sc`.`companyName`, `sc`.`compRegNo`, `this`.`name`, `this`.`email`, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `rbac_user` `this`
LEFT JOIN `sys_company` `sc` ON `sc`.`companyId` = `this`.`companyId`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND   (
 companyName  LIKE '%admin%' ESCAPE '!' 
OR  compRegNo  LIKE '%admin%' ESCAPE '!' 
OR  this.name  LIKE '%admin%' ESCAPE '!' 
OR  email  LIKE '%admin%' ESCAPE '!' 
OR  r.name  LIKE '%admin%' ESCAPE '!' 
OR  department_name  LIKE '%admin%' ESCAPE '!' 
OR  job_title_name  LIKE '%admin%' ESCAPE '!' 
 )
ORDER BY `this`.`name` asc
 LIMIT 10
ERROR - 2020-07-04 21:20:13 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\Salesman\application\modules\job_title\controllers\Job_title.php 103
ERROR - 2020-07-04 22:13:37 --> 404 Page Not Found: 
ERROR - 2020-07-04 22:27:28 --> Severity: error --> Exception: Too few arguments to function Model::Auth(), 0 passed in C:\xampp\htdocs\Salesman\application\modules\employee_leave_application\controllers\Employee_leave_application.php on line 243 and exactly 1 expected C:\xampp\htdocs\Salesman\application\models\Model.php 407
ERROR - 2020-07-04 22:27:54 --> Query error: Unknown column 'this.jobTitle' in 'where clause' - Invalid query: SELECT `this`.`leaveType` as `id`, `lt`.`name`
FROM `employee_leave_entitle` `this`
LEFT JOIN `ref_job_title` `jt` ON `jt`.`id` = `this`.`jobTitle`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`jobTitle` = '6'
AND `this`.`statusId` != 'I'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
ORDER BY `lt`.`name` ASC
ERROR - 2020-07-04 22:28:52 --> Query error: Unknown column 'this.jobTitle' in 'where clause' - Invalid query: SELECT `this`.`leaveType` as `id`, `lt`.`name`
FROM `employee_leave_entitle` `this`
LEFT JOIN `ref_leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`jobTitle` = '6'
AND `this`.`statusId` != 'I'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
ORDER BY `lt`.`name` ASC
ERROR - 2020-07-04 22:31:17 --> Query error: Table 'kasalesappv4.leave_type' doesn't exist - Invalid query: SELECT `this`.*, `e`.`name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`employeeId` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND `this`.`companyId` = '1'
ERROR - 2020-07-04 22:31:25 --> Query error: Table 'kasalesappv4.leave_type' doesn't exist - Invalid query: SELECT `this`.*, `e`.`name`, `e`.`employeeCode`, `lt`.`name` as `leave_type_name`
FROM `employee_leave_entitle` `this`
LEFT JOIN `employee_master` `e` ON `e`.`id` = `this`.`employeeId`
LEFT JOIN `leave_type` `lt` ON `lt`.`id` = `this`.`leaveType`
WHERE `this`.`employeeId` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
AND `this`.`companyId` = '1'
ERROR - 2020-07-04 22:44:32 --> Severity: error --> Exception: syntax error, unexpected '=', expecting ',' or ')' C:\xampp\htdocs\Salesman\application\modules\approve_employee_leave\controllers\Approve_employee_leave.php 188
ERROR - 2020-07-04 22:45:12 --> Query error: Unknown column 'duration' in 'field list' - Invalid query: SELECT `this`.`id`, `duration`, `balance`, `taken`
FROM `employee_leave_entitle` `this`
WHERE `this`.`leaveType` = '1'
AND `this`.`employeeId` = '2'
AND `this`.`companyId` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
ERROR - 2020-07-04 22:51:27 --> Query error: Table 'kasalesappv4.employee_leave_entitles' doesn't exist - Invalid query: SELECT `this`.`id`, `balance`, `taken`
FROM `employee_leave_entitles` `this`
WHERE `this`.`leaveType` = '1'
AND `this`.`employeeId` = '2'
AND `this`.`companyId` = '1'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
ERROR - 2020-07-04 23:04:21 --> Could not find the language line "select "
