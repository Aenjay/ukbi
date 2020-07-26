<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-27 05:27:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\Salesman\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-06-27 05:27:15 --> Unable to connect to the database
ERROR - 2020-06-27 05:27:29 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\Salesman\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-06-27 05:27:29 --> Unable to connect to the database
ERROR - 2020-06-27 05:42:48 --> Query error: Column 'name' in order clause is ambiguous - Invalid query: SELECT `this`.`id`, `this`.`name`, `this`.`employeeCode`, `this`.`email`, `gender`, `rjt`.`name` as `job_title_name`, `rd`.`name` as `department_name`, `r`.`name`
FROM `employee_master` `this`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`department`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`jobTitle`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`roleId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
AND `this`.`statusId` = 'A'
ORDER BY `name` asc
 LIMIT 10
ERROR - 2020-06-27 05:43:12 --> Severity: Notice --> Undefined property: stdClass::$role_name C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 174
ERROR - 2020-06-27 05:43:12 --> Severity: Notice --> Undefined property: stdClass::$role_name C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 174
ERROR - 2020-06-27 05:43:17 --> Severity: Notice --> Undefined property: stdClass::$role_name C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 174
ERROR - 2020-06-27 05:43:17 --> Severity: Notice --> Undefined property: stdClass::$role_name C:\xampp\htdocs\Salesman\application\modules\employee\controllers\Employee.php 174
ERROR - 2020-06-27 06:48:47 --> Could not find the language line "select "
ERROR - 2020-06-27 13:57:37 --> Could not find the language line "select "
ERROR - 2020-06-27 13:59:55 --> Could not find the language line "select "
ERROR - 2020-06-27 14:00:32 --> Could not find the language line "select "
ERROR - 2020-06-27 14:00:34 --> Query error: Unknown column 'kode_menu' in 'order clause' - Invalid query: SELECT `name_menu`, COUNT(CASE WHEN `name` = 'list' AND this.`role_id` = '3' THEN 1 END) AS xlist, COUNT(CASE WHEN `name` = 'create' AND this.`role_id` = '3' THEN 1 END) AS xadd, COUNT(CASE WHEN `name` = 'edit' AND this.`role_id` = '3' THEN 1 END) AS xedit, COUNT(CASE WHEN `name` = 'detail' AND this.`role_id` = '3' THEN 1 END) AS xdetail, COUNT(CASE WHEN `name` = 'delete' AND this.`role_id` = '3' THEN 1 END) AS xdelete, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'list' and is_deleted = '0') AS listid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'create' and is_deleted = '0') AS addid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'edit' and is_deleted = '0') AS editid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'detail' and is_deleted = '0') AS detailid, (SELECT id FROM permissions WHERE `code` = p.code AND `name` = 'delete' and is_deleted = '0') AS deleteid, `p`.`id`, `p`.`code`, `p`.`url`, `p`.`icon`
FROM `permissions` `p`
LEFT JOIN `role_has_permissions` `this` ON `this`.`permission_id` = `p`.`id`
WHERE `guard_name` = 'web'
AND `is_deleted` = 0
AND `parent` = 'M001'
AND `p`.`companyId` = '1'
GROUP BY `p`.`code`
ORDER BY `p`.`sequence` ASC, `kode_menu` ASC
ERROR - 2020-06-27 14:00:38 --> Could not find the language line "select "
ERROR - 2020-06-27 14:01:48 --> Could not find the language line "select "
ERROR - 2020-06-27 14:04:18 --> Could not find the language line "select "
ERROR - 2020-06-27 14:08:26 --> Severity: Notice --> Undefined variable: listCompany C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:08:26 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:08:31 --> Severity: Notice --> Undefined variable: listCompany C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:08:31 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:09:02 --> Severity: Notice --> Undefined variable: listCompany C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:09:02 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:09:22 --> Severity: Notice --> Undefined variable: listCompany C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:09:22 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\users\views\users-data.php 75
ERROR - 2020-06-27 14:10:00 --> Severity: Notice --> Undefined variable: listCustomer C:\xampp\htdocs\Salesman\application\modules\customer_contact_person\views\customer-contact-person-data.php 73
ERROR - 2020-06-27 14:10:00 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\customer_contact_person\views\customer-contact-person-data.php 73
ERROR - 2020-06-27 14:10:01 --> Severity: Notice --> Undefined variable: listCustomer C:\xampp\htdocs\Salesman\application\modules\customer_contact_person\views\customer-contact-person-data.php 73
ERROR - 2020-06-27 14:10:01 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\Salesman\application\modules\customer_contact_person\views\customer-contact-person-data.php 73
ERROR - 2020-06-27 14:11:11 --> Query error: Table 'kasalesappv4.customer' doesn't exist - Invalid query: SELECT `id`, `companyName`, `companyROC`
FROM `customer`
WHERE `system` = 'WebApp_v1' and `statusId` != 'I'
ERROR - 2020-06-27 14:18:52 --> Query error: Table 'kasalesappv4.customer' doesn't exist - Invalid query: SELECT `this`.`id`, `c`.`companyName`, `companyROC`, `this`.`contactPersonNameame`, `department`, `rjt`.`name` as `jobTitle`, `this`.`email`
FROM `customer_contact_person` `this`
LEFT JOIN `customer` `c` ON `c`.`id` = `this`.`customerId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
ORDER BY `companyName`, `contactPersonName` asc
 LIMIT 10
ERROR - 2020-06-27 14:19:34 --> Query error: Unknown column 'this.contactPersonNameame' in 'field list' - Invalid query: SELECT `this`.`id`, `c`.`companyName`, `companyROC`, `this`.`contactPersonNameame`, `department`, `rjt`.`name` as `jobTitle`, `this`.`email`
FROM `customer_contact_person` `this`
LEFT JOIN `customer_master` `c` ON `c`.`id` = `this`.`customerId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
ORDER BY `companyName`, `contactPersonName` asc
 LIMIT 10
ERROR - 2020-06-27 14:19:45 --> Query error: Unknown column 'rjt.name' in 'field list' - Invalid query: SELECT `this`.`id`, `c`.`companyName`, `companyROC`, `this`.`contactPersonName`, `department`, `rjt`.`name` as `jobTitle`, `this`.`email`
FROM `customer_contact_person` `this`
LEFT JOIN `customer_master` `c` ON `c`.`id` = `this`.`customerId`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'I'
ORDER BY `companyName`, `contactPersonName` asc
 LIMIT 10
ERROR - 2020-06-27 14:19:57 --> Query error: Unknown column 'this.userType' in 'on clause' - Invalid query: SELECT `this`.*, `r`.`name` as `role_name`, `rd`.`name` as `department_name`, `rjt`.`name` as `job_title_name`
FROM `customer_contact_person` `this`
LEFT JOIN `roles` `r` ON `r`.`id` = `this`.`userType`
LEFT JOIN `ref_department` `rd` ON `rd`.`id` = `this`.`departmentId`
LEFT JOIN `ref_job_title` `rjt` ON `rjt`.`id` = `this`.`positionId`
WHERE `r`.`is_deleted` = 0
AND `this`.`system` = 'WebApp_v1'
AND `this`.`id` = '1'
AND `this`.`companyId` = '1'
ERROR - 2020-06-27 14:20:38 --> Query error: Unknown column 'r.is_deleted' in 'where clause' - Invalid query: SELECT `this`.*, `c`.`companyName`, `c`.`companyROC`
FROM `customer_contact_person` `this`
LEFT JOIN `customer_master` `c` ON `c`.`id` = `this`.`customerId`
WHERE `r`.`is_deleted` = 0
AND `this`.`system` = 'WebApp_v1'
AND `this`.`id` = '1'
AND `this`.`companyId` = '1'
ERROR - 2020-06-27 14:22:42 --> Could not find the language line "department"
ERROR - 2020-06-27 14:23:06 --> Could not find the language line "department"
ERROR - 2020-06-27 14:23:18 --> Could not find the language line "department"
ERROR - 2020-06-27 14:23:26 --> Could not find the language line "department"
ERROR - 2020-06-27 14:23:30 --> Could not find the language line "department"
ERROR - 2020-06-27 14:23:34 --> Severity: error --> Exception: Unable to locate the model you have specified: Customer_issue_report_model C:\xampp\htdocs\Salesman\system\core\Loader.php 348
ERROR - 2020-06-27 16:27:27 --> 404 Page Not Found: 
ERROR - 2020-06-27 16:27:43 --> Query error: Unknown column 'c.status' in 'where clause' - Invalid query: SELECT `this`.*, `c`.`companyName`, `c`.`companyROC`, `it`.`description` as `issue_type_name`
FROM `customer_issue_report` `this`
LEFT JOIN `customer_master` `c` ON `c`.`id` = `this`.`customerId`
LEFT JOIN `ref_issue_type` `it` ON `it`.`id` = `this`.`issueType`
WHERE `this`.`system` = 'WebApp_v1'
AND `c`.`status` != 'I'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` != 'A'
AND `this`.`companyId` = '1'
ERROR - 2020-06-27 16:55:27 --> Could not find the language line "select "
ERROR - 2020-06-27 17:28:28 --> The upload path does not appear to be valid.
ERROR - 2020-06-27 17:30:48 --> Query error: Column 'customerIssueId' cannot be null - Invalid query: INSERT INTO `customer_issue_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `customerIssueId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Fajar Puji', '2020-06-27 17:30:48', '1', NULL, 'baik.jpeg', '0.5703172875874896', 'jpeg', 13843)
ERROR - 2020-06-27 17:32:42 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`customer_issue_doc`, CONSTRAINT `FK_customer_issue_doc_customerid` FOREIGN KEY (`customerid`) REFERENCES `customer_master` (`id`)) - Invalid query: INSERT INTO `customer_issue_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `customerIssueId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Fajar Puji', '2020-06-27 17:32:42', '1', '1', 'baik.jpeg', '0.547051528135684', 'jpeg', 13843)
ERROR - 2020-06-27 17:33:56 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`customer_issue_doc`, CONSTRAINT `FK_customer_issue_doc_customerid` FOREIGN KEY (`customerid`) REFERENCES `customer_master` (`id`)) - Invalid query: INSERT INTO `customer_issue_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `customerIssueId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Fajar Puji', '2020-06-27 17:33:56', '1', '1', 'baik1.jpeg', '0.5692790653202446', 'jpeg', 13843)
ERROR - 2020-06-27 17:38:26 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`kasalesappv4`.`customer_issue_doc`, CONSTRAINT `FK_customer_issue_doc_customerid` FOREIGN KEY (`customerid`) REFERENCES `customer_master` (`id`)) - Invalid query: INSERT INTO `customer_issue_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `customerIssueId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Fajar Puji', '2020-06-27 17:38:26', '1', '1', 'baik.jpeg', '0.8835441818614544', 'jpeg', 13843)
ERROR - 2020-06-27 18:40:50 --> Could not find the language line "select "
ERROR - 2020-06-27 18:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`order by nama` `asc`' at line 3 - Invalid query: SELECT `id`, `name`
FROM `roles`
WHERE `is_deleted` = '0' and `guard_name` = 'web' and `name` IN ('Salesman', 'Employee', 'HR Manager') `order by nama` `asc`
ERROR - 2020-06-27 18:43:06 --> Could not find the language line "select "
ERROR - 2020-06-27 18:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`order by name` `asc`' at line 3 - Invalid query: SELECT `id`, `name`
FROM `roles`
WHERE `is_deleted` = '0' and `guard_name` = 'web' and `name` IN ('Salesman', 'Employee', 'HR Manager') `order by name` `asc`
ERROR - 2020-06-27 18:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`order by name` `asc`' at line 3 - Invalid query: SELECT `id`, `name`
FROM `roles`
WHERE `is_deleted` = '0' and `guard_name` = 'web' and `name` IN ('Salesman', 'Employee', 'HR Manager') `order by name` `asc`
ERROR - 2020-06-27 18:43:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`order by name` `asc`' at line 3 - Invalid query: SELECT `id`, `name`
FROM `roles`
WHERE `is_deleted` = '0' and `guard_name` = 'web' and `name` IN ('Salesman', 'Employee', 'HR Manager') `order by name` `asc`
ERROR - 2020-06-27 18:50:57 --> Query error: Unknown column 'name' in 'field list' - Invalid query: SELECT `id`, `name`
FROM `ref_leave_approver`
WHERE `system` = 'WebApp_v1' and `statusId` = 'A' and `companyId` = '1' order by approvalDesc asc
ERROR - 2020-06-27 18:51:10 --> Query error: Unknown column 'description' in 'field list' - Invalid query: SELECT `id`, `description`
FROM `ref_leave_approver`
WHERE `system` = 'WebApp_v1' and `statusId` = 'A' and `companyId` = '1' order by approvalDesc asc
ERROR - 2020-06-27 19:40:50 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:40:50 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\Salesman\application\modules\auth\controllers\Auth.php 73
ERROR - 2020-06-27 19:40:50 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `id`, `password`
FROM `employee`
WHERE `companyId` = '1'
AND `id` = '1' and `system` = 'WebApp_v1'
ERROR - 2020-06-27 19:40:53 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:40:53 --> Severity: Notice --> Undefined variable: id C:\xampp\htdocs\Salesman\application\modules\auth\controllers\Auth.php 73
ERROR - 2020-06-27 19:40:53 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `id`, `password`
FROM `employee`
WHERE `companyId` = '1'
AND `id` = '1' and `system` = 'WebApp_v1'
ERROR - 2020-06-27 19:41:09 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:41:09 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `id`, `password`
FROM `employee`
WHERE `companyId` = '1'
AND `id` = '1' and `system` = 'WebApp_v1'
ERROR - 2020-06-27 19:41:45 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:41:45 --> Severity: error --> Exception: Call to a member function row() on integer C:\xampp\htdocs\Salesman\application\modules\auth\controllers\Auth.php 80
ERROR - 2020-06-27 19:42:03 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:42:04 --> Query error: Table 'kasalesappv4.employee' doesn't exist - Invalid query: SELECT `id`, `password`
FROM `employee`
WHERE `id` = '1' and `system` = 'WebApp_v1'
ERROR - 2020-06-27 19:42:23 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:42:23 --> Severity: error --> Exception: Call to a member function num_rows() on integer C:\xampp\htdocs\Salesman\application\modules\auth\controllers\Auth.php 132
ERROR - 2020-06-27 19:42:32 --> Could not find the language line "old_password"
ERROR - 2020-06-27 19:49:12 --> Could not find the language line "old_password"
