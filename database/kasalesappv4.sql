/*
SQLyog Professional
MySQL - 10.1.37-MariaDB : Database - kasalesappv4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `captcha` */

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` decimal(18,4) DEFAULT NULL,
  `word` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

/*Data for the table `captcha` */

insert  into `captcha`(`id`,`time`,`word`) values 
(92,1592497221.7890,'AX5LG'),
(129,1592667614.6521,'TUB44'),
(131,1592667849.4172,'5UFT9'),
(137,1592696937.5465,'DM4VG'),
(140,1592697098.7482,'NWHNQ'),
(148,1592697823.3671,'WY6JR'),
(149,1592698509.5253,'KJBLA'),
(150,1592706350.1637,'TCFGR'),
(151,1592706475.6610,'EMAW4'),
(157,1592706663.4538,'ZRSLD'),
(158,1592706677.8670,'UAPAR'),
(159,1592706703.8514,'F5CAD'),
(160,1592717735.0989,'SUFVH'),
(161,1592780746.1578,'AUVC6'),
(162,1592824839.7364,'2M8MZ'),
(163,1592866167.2745,'293FG'),
(164,1592915935.4858,'UETTZ'),
(165,1592994777.7117,'2V3A3'),
(167,1593038557.5220,'CYLB8'),
(168,1593096326.7574,'KQF64'),
(171,1593101737.2590,'2NQWU'),
(172,1593101821.9189,'BMMPD'),
(173,1593106451.1217,'R8TXZ'),
(174,1593165937.8899,'GUUPQ'),
(175,1593180507.8329,'AL63Y'),
(176,1593180593.9129,'M8NPR'),
(180,1593180696.4166,'XP9NJ'),
(181,1593181162.1871,'T5NCY'),
(183,1593182492.4178,'FBRZ9'),
(184,1593210461.0672,'HEG5Z'),
(186,1593211558.6034,'SWSF5'),
(187,1593211606.3569,'8ZKQQ'),
(188,1593215307.0010,'D3XSV'),
(189,1593240969.7729,'4PP9M'),
(190,1593241003.4996,'TEALQ'),
(191,1593241045.7136,'59M3U'),
(192,1593241514.5931,'S9NLL'),
(193,1593250013.7717,'BLS9K'),
(194,1593251604.7848,'CDZS8'),
(195,1593251673.9573,'83BEH'),
(197,1593252410.3969,'QVHKS'),
(198,1593252952.2787,'F565J'),
(199,1593253623.9904,'PT5TS'),
(200,1593257984.6130,'QEUXT'),
(201,1593258313.8841,'DSP6D'),
(203,1593261794.1409,'RU5FH');

/*Table structure for table `customer_contact_person` */

DROP TABLE IF EXISTS `customer_contact_person`;

CREATE TABLE `customer_contact_person` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT ' ',
  `contactPersonName` varchar(100) NOT NULL COMMENT ' ',
  `jobTitle` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `phoneNo` varchar(20) DEFAULT NULL,
  `mobileNo` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_contact_person_id` (`id`) USING BTREE,
  KEY `FK_customer_contact_person_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_contact_person_customerid` (`customerId`) USING BTREE,
  CONSTRAINT `FK_customer_contact_person_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_contact_person_customerid` FOREIGN KEY (`customerId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_contact_person` */

insert  into `customer_contact_person`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`customerId`,`contactPersonName`,`jobTitle`,`department`,`phoneNo`,`mobileNo`,`email`,`remark`) values 
(1,'2020-06-07 14:25:43','','2020-06-27 14:23:30','Fajar Puji','A','WebApp_v1',1,1,'Mr Wong','Production Manager','Warehouse','603-0239432343','6012-3204239432','wong@company.com','...');

/*Table structure for table `customer_follow_up` */

DROP TABLE IF EXISTS `customer_follow_up`;

CREATE TABLE `customer_follow_up` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT ' ',
  `followupDate` date NOT NULL,
  `followupTime` time NOT NULL,
  `assignTo` bigint(20) DEFAULT NULL COMMENT 'Assign to which employee/salesman',
  `issueTask` varchar(200) NOT NULL COMMENT 'Task title / issue title',
  `notes` varchar(200) DEFAULT NULL COMMENT 'Task description',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_follow_up_id` (`id`) USING BTREE,
  KEY `FK_customer_follow_up_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_follow_up_customerid` (`customerId`) USING BTREE,
  KEY `FK_customer_follow_up_assignto` (`assignTo`) USING BTREE,
  CONSTRAINT `FK_customer_follow_up_assignto` FOREIGN KEY (`assignTo`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_customer_follow_up_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_follow_up_customerid` FOREIGN KEY (`customerId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_follow_up` */

/*Table structure for table `customer_issue_doc` */

DROP TABLE IF EXISTS `customer_issue_doc`;

CREATE TABLE `customer_issue_doc` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerid` bigint(20) NOT NULL,
  `customerIssueId` bigint(20) NOT NULL,
  `contentType` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `size` bigint(20) NOT NULL,
  `token_upload` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_issue_doc_id` (`id`) USING BTREE,
  KEY `FK_customer_issue_doc_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_issue_doc_customerid` (`customerid`) USING BTREE,
  KEY `FK_customer_issue_doc_customerissueid` (`customerIssueId`) USING BTREE,
  CONSTRAINT `FK_customer_issue_doc_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_issue_doc_customerid` FOREIGN KEY (`customerid`) REFERENCES `customer_master` (`id`),
  CONSTRAINT `FK_customer_issue_doc_customerissueid` FOREIGN KEY (`customerIssueId`) REFERENCES `customer_issue_report` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_issue_doc` */

insert  into `customer_issue_doc`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`customerid`,`customerIssueId`,`contentType`,`description`,`displayName`,`filename`,`size`,`token_upload`) values 
(6,'2020-06-27 17:43:40','Fajar Puji',NULL,NULL,'A','WebApp_v1',1,1,1,'jpeg','','','baik.jpeg',13843,'0.3315614076565174'),
(7,'2020-06-27 17:43:54','Fajar Puji',NULL,NULL,'A','WebApp_v1',1,1,1,'jpeg','','','buruk.jpeg',15854,'0.8568491732749997');

/*Table structure for table `customer_issue_report` */

DROP TABLE IF EXISTS `customer_issue_report`;

CREATE TABLE `customer_issue_report` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT ' ',
  `productName` varchar(100) NOT NULL COMMENT ' ',
  `productCode` varchar(50) DEFAULT NULL,
  `productType` varchar(50) DEFAULT NULL,
  `issueType` bigint(20) DEFAULT NULL,
  `issueDesc` varchar(20) DEFAULT NULL,
  `reportByCustomerName` varchar(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_issue_id` (`id`) USING BTREE,
  KEY `FK_customer_issue_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_issue_customerid` (`customerId`) USING BTREE,
  KEY `FK_customer_issue_issuetype` (`issueType`) USING BTREE,
  CONSTRAINT `FK_customer_issue_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_issue_customerid` FOREIGN KEY (`customerId`) REFERENCES `customer_master` (`id`),
  CONSTRAINT `FK_customer_issue_issuetype` FOREIGN KEY (`issueType`) REFERENCES `ref_issue_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_issue_report` */

insert  into `customer_issue_report`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`customerId`,`productName`,`productCode`,`productType`,`issueType`,`issueDesc`,`reportByCustomerName`,`remark`) values 
(1,'2020-06-07 14:32:38','Testuser','2020-06-27 16:49:24','Fajar Puji','A','WebApp_v1',1,1,'Door lock','D01231391029','slider',1,'Seriou Daamage of th','Chong (Warehouse manager)','Delivery defect');

/*Table structure for table `customer_master` */

DROP TABLE IF EXISTS `customer_master`;

CREATE TABLE `customer_master` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL COMMENT 'N = New Lead , O = Open Deal  C = Confirmed Customer',
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `companyName` varchar(100) NOT NULL COMMENT ' ',
  `companyROC` varchar(100) DEFAULT NULL,
  `companyGSTNo` varchar(100) DEFAULT NULL,
  `yearEstablised` int(50) DEFAULT NULL COMMENT 'which year company establised',
  `annualRevenue` double(10,2) DEFAULT NULL COMMENT 'estimate company annual revenue',
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `postCode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `countryCode` varchar(2) DEFAULT NULL,
  `googlemaplocation` varchar(255) DEFAULT NULL,
  `longitude` float(12,6) DEFAULT NULL COMMENT 'google map address',
  `latitude` varchar(12) DEFAULT NULL COMMENT 'google map address',
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL COMMENT 'company website',
  `phoneNo` varchar(20) DEFAULT NULL,
  `companyGrade` varchar(1) DEFAULT NULL COMMENT 'A = grade A , B = grade B , C = grade C ,  ',
  `businessIndustry` bigint(20) NOT NULL,
  `businessPartner` bigint(20) NOT NULL,
  `opStartHour` time DEFAULT NULL COMMENT 'Operation Start Hour',
  `opEndHour` time DEFAULT NULL COMMENT 'Operation End Hour',
  `competitor` varchar(200) DEFAULT NULL,
  `employeeSize` int(5) DEFAULT NULL COMMENT 'Estimate no. of employees ',
  `projectItem` varchar(200) DEFAULT NULL,
  `requiredProduct` varchar(200) DEFAULT NULL,
  `requiredDuration` varchar(10) DEFAULT NULL,
  `requiredQuantity` varchar(100) DEFAULT NULL,
  `requiredManpower` varchar(100) DEFAULT NULL,
  `guarantor` varchar(100) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL COMMENT 'more information',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_master_id` (`id`) USING BTREE,
  KEY `FK_customer_master_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_master_businessindustry` (`businessIndustry`) USING BTREE,
  KEY `FK_customer_master_businesspartner` (`businessPartner`) USING BTREE,
  CONSTRAINT `FK_customer_master_businessindustry` FOREIGN KEY (`businessIndustry`) REFERENCES `ref_business_industry` (`id`),
  CONSTRAINT `FK_customer_master_businesspartner` FOREIGN KEY (`businessPartner`) REFERENCES `ref_business_partnership` (`id`),
  CONSTRAINT `FK_customer_master_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_master` */

insert  into `customer_master`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`companyName`,`companyROC`,`companyGSTNo`,`yearEstablised`,`annualRevenue`,`address1`,`address2`,`postCode`,`city`,`state`,`countryCode`,`googlemaplocation`,`longitude`,`latitude`,`email`,`website`,`phoneNo`,`companyGrade`,`businessIndustry`,`businessPartner`,`opStartHour`,`opEndHour`,`competitor`,`employeeSize`,`projectItem`,`requiredProduct`,`requiredDuration`,`requiredQuantity`,`requiredManpower`,`guarantor`,`remark`) values 
(1,'2020-06-07 14:02:12','Testuser','2020-06-27 06:43:11','Fajar Puji','A','WebApp_v1',1,'Kardex Malaysia Sdn Bhd','A-102913','8023049234',2015,99999999.99,'customer address 1','customer address 2','1002','Sri Petaling','Selangor','MY','',0.000000,'','karde@company.com.my','kardexcompany.com.my','603-120319','A',1,1,'08:00:00','06:00:00','Malim Trading',100,'Door lock','Door lock for condo','5 Months s','500 Units','20','...','Good customer, must take care');

/*Table structure for table `customer_visit` */

DROP TABLE IF EXISTS `customer_visit`;

CREATE TABLE `customer_visit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT ' ',
  `visitType` varchar(1) NOT NULL COMMENT 'S = Schedule Visit ,  A = Ad-hoc Visit',
  `visitDate` date NOT NULL,
  `visitDesc` varchar(255) NOT NULL COMMENT 'Visit Desc',
  `startDateTime` datetime DEFAULT NULL COMMENT 'Visitor Clock in time',
  `stopDateTime` datetime DEFAULT NULL COMMENT 'Visitor Clock out time',
  `reminderDuration` int(5) DEFAULT NULL COMMENT '15 min, 30 min, 1 hour, 2 hours, 1 day',
  `productName` varchar(100) NOT NULL COMMENT ' ',
  `productCode` varchar(50) DEFAULT NULL,
  `productType` varchar(50) DEFAULT NULL,
  `issueType` varchar(20) DEFAULT NULL COMMENT 'If customer report issue',
  `issueDesc` varchar(20) DEFAULT NULL COMMENT 'If customer report issue',
  `reportByCustomerName` varchar(50) DEFAULT NULL COMMENT 'If customer report issue',
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_visit_id` (`id`) USING BTREE,
  KEY `FK_customer_visit_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_visit_customerid` (`customerId`) USING BTREE,
  CONSTRAINT `FK_customer_visit_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_visit_customerid` FOREIGN KEY (`customerId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_visit` */

insert  into `customer_visit`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`customerId`,`visitType`,`visitDate`,`visitDesc`,`startDateTime`,`stopDateTime`,`reminderDuration`,`productName`,`productCode`,`productType`,`issueType`,`issueDesc`,`reportByCustomerName`,`remark`) values 
(1,'2020-06-07 15:14:26','Testuser',NULL,NULL,1,'BA',1,1,'P','2020-06-07','','2020-06-07 15:14:58','2020-06-07 18:15:02',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `customer_visit_route_tracking` */

DROP TABLE IF EXISTS `customer_visit_route_tracking`;

CREATE TABLE `customer_visit_route_tracking` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `customerId` bigint(20) NOT NULL COMMENT ' ',
  `address1` varchar(255) DEFAULT NULL COMMENT 'Long address',
  `address2` varchar(255) DEFAULT NULL COMMENT 'Long address',
  `shortAddressDesc` varchar(255) DEFAULT NULL,
  `latitude` float(12,6) DEFAULT NULL COMMENT ' customer address',
  `longtitude` float(12,6) DEFAULT NULL COMMENT ' customer address',
  `type` varchar(100) DEFAULT NULL COMMENT 'google map location type',
  `startDateTime` datetime DEFAULT NULL,
  `startGPSLocation` varchar(200) DEFAULT NULL,
  `endtDateTime` datetime DEFAULT NULL,
  `endGPSLocation` varchar(200) DEFAULT NULL,
  `distance` double(20,0) DEFAULT NULL COMMENT 'distance between start and end GPS Locatiob',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_customer_visit_route_tracking_id` (`id`) USING BTREE,
  KEY `FK_customer_visit_route_tracking_companyid` (`companyId`) USING BTREE,
  KEY `FK_customer_visit_route_tracking_customerid` (`customerId`) USING BTREE,
  CONSTRAINT `FK_customer_visit_route_tracking_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_customer_visit_route_tracking_customerid` FOREIGN KEY (`customerId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `customer_visit_route_tracking` */

/*Table structure for table `employee_attendance` */

DROP TABLE IF EXISTS `employee_attendance`;

CREATE TABLE `employee_attendance` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `employeeId` bigint(20) NOT NULL,
  `eventDate` date NOT NULL,
  `eventDay` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `eventStartTime` datetime NOT NULL,
  `eventEndTime` datetime NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `FK_employee_attendance_companyid` (`companyId`) USING BTREE,
  KEY `FK_employee_attendance_employeeid` (`employeeId`) USING BTREE,
  CONSTRAINT `FK_employee_attendance_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_employee_attendance_employeeid` FOREIGN KEY (`employeeId`) REFERENCES `employee_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_attendance` */

insert  into `employee_attendance`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`employeeId`,`eventDate`,`eventDay`,`eventStartTime`,`eventEndTime`) values 
(1,'2020-06-07 14:13:15','Testuser',NULL,NULL,1,'BA',1,1,'2020-06-08','Monday','2020-06-08 14:14:20','2020-06-08 14:14:26');

/*Table structure for table `employee_leave_application` */

DROP TABLE IF EXISTS `employee_leave_application`;

CREATE TABLE `employee_leave_application` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `employeeId` bigint(20) NOT NULL,
  `leaveType` bigint(20) NOT NULL,
  `leaveApprover` bigint(20) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `duration` int(5) DEFAULT NULL,
  `reasonDesc` varchar(255) DEFAULT NULL,
  `clinicName` varchar(200) DEFAULT NULL COMMENT 'Clinic / Hospital Name for MC',
  `clinicVisitDate` date DEFAULT NULL COMMENT 'Clinic / Hospital Visit Date for MC',
  `approval1Status` varchar(1) DEFAULT NULL COMMENT 'A = Approved , R = Rejected',
  `approval2Status` varchar(2) DEFAULT NULL,
  `approval3Status` varchar(3) DEFAULT NULL,
  `approval1Person` bigint(20) DEFAULT NULL,
  `approval2Person` bigint(20) DEFAULT NULL,
  `approval3Person` bigint(20) DEFAULT NULL,
  `approval1Date` datetime DEFAULT NULL,
  `approval2Date` datetime DEFAULT NULL,
  `approval3Date` datetime DEFAULT NULL,
  `approval1Comment` varchar(255) DEFAULT NULL,
  `approval2Comment` varchar(255) DEFAULT NULL,
  `approval3Comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`,`employeeId`) USING BTREE,
  KEY `FK_leave_application_comapnyid` (`companyId`),
  KEY `FK_leave_application_leavetype` (`leaveType`),
  KEY `FK_leave_application_employeeid` (`employeeId`),
  KEY `FK_leave_application_approval1person` (`approval1Person`),
  KEY `FK_leave_application_approval2person` (`approval2Person`),
  KEY `FK_leave_application_approval3person` (`approval3Person`),
  KEY `FK_leave_application_leaveapprover` (`leaveApprover`),
  CONSTRAINT `FK_leave_application_approval1person` FOREIGN KEY (`approval1Person`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_application_approval2person` FOREIGN KEY (`approval2Person`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_application_approval3person` FOREIGN KEY (`approval3Person`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_application_comapnyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_leave_application_employeeid` FOREIGN KEY (`employeeId`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_application_leaveapprover` FOREIGN KEY (`leaveApprover`) REFERENCES `ref_leave_approver` (`id`),
  CONSTRAINT `FK_leave_application_leavetype` FOREIGN KEY (`leaveType`) REFERENCES `ref_leave_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_leave_application` */

insert  into `employee_leave_application`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`employeeId`,`leaveType`,`leaveApprover`,`startDate`,`endDate`,`duration`,`reasonDesc`,`clinicName`,`clinicVisitDate`,`approval1Status`,`approval2Status`,`approval3Status`,`approval1Person`,`approval2Person`,`approval3Person`,`approval1Date`,`approval2Date`,`approval3Date`,`approval1Comment`,`approval2Comment`,`approval3Comment`) values 
(1,'2020-06-07 14:45:29','Testuser','2020-06-27 19:07:17','Abul','A','WebApp_v1',1,1,1,7,'2020-06-09','2020-06-10',2,'Go back hometown','',NULL,'A',NULL,NULL,1,NULL,NULL,'2020-06-07 14:55:37',NULL,NULL,'Approve',NULL,NULL),
(2,'2020-06-26 00:16:00','Abul','2020-06-27 05:46:27','Abul','A','WebApp_v1',1,1,2,1,'2020-06-26','2020-06-28',1,'MC','Rahmayani','2020-06-27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `employee_leave_application_approval` */

DROP TABLE IF EXISTS `employee_leave_application_approval`;

CREATE TABLE `employee_leave_application_approval` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `approveLeaveAppId` bigint(20) NOT NULL,
  `approverId` bigint(20) NOT NULL,
  `approvalDate` datetime DEFAULT NULL COMMENT 'Update approved or rejected date',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `IX_employee_leave_application_id` (`id`) USING BTREE,
  KEY `FK_employee_leave_application_leaveappid` (`approveLeaveAppId`) USING BTREE,
  KEY `FK_employee_leave_application_approverid` (`approverId`) USING BTREE,
  CONSTRAINT `FK_employee_leave_application_approverid` FOREIGN KEY (`approverId`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_employee_leave_application_leaveappid` FOREIGN KEY (`approveLeaveAppId`) REFERENCES `employee_leave_application` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_leave_application_approval` */

/*Table structure for table `employee_leave_doc` */

DROP TABLE IF EXISTS `employee_leave_doc`;

CREATE TABLE `employee_leave_doc` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `leaveApplicationId` bigint(20) NOT NULL,
  `contentType` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `size` bigint(20) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `FK_leave_doc_companyid` (`companyId`) USING BTREE,
  KEY `FK_leave_doc_applicationid` (`leaveApplicationId`) USING BTREE,
  CONSTRAINT `FK_leave_doc_applicationid` FOREIGN KEY (`leaveApplicationId`) REFERENCES `employee_leave_application` (`id`),
  CONSTRAINT `FK_leave_doc_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_leave_doc` */

/*Table structure for table `employee_leave_entitle` */

DROP TABLE IF EXISTS `employee_leave_entitle`;

CREATE TABLE `employee_leave_entitle` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `employeeId` bigint(20) NOT NULL,
  `leaveTypeId` bigint(20) NOT NULL,
  `adjustment` double NOT NULL,
  `balance` double NOT NULL,
  `pending` double NOT NULL,
  `taken` double NOT NULL,
  `broughtForward` double NOT NULL,
  `entitlement` double NOT NULL,
  `bufferEntitlement` double DEFAULT '0',
  PRIMARY KEY (`id`,`companyId`,`employeeId`,`leaveTypeId`) USING BTREE,
  KEY `FK_leave_entitle_companyid` (`companyId`),
  KEY `FK_leave_entitle_employeeid` (`employeeId`),
  KEY `FK_leave_entitle_leavetype` (`leaveTypeId`),
  CONSTRAINT `FK_leave_entitle_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_leave_entitle_employeeid` FOREIGN KEY (`employeeId`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_entitle_leavetype` FOREIGN KEY (`leaveTypeId`) REFERENCES `ref_leave_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_leave_entitle` */

insert  into `employee_leave_entitle`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`employeeId`,`leaveTypeId`,`adjustment`,`balance`,`pending`,`taken`,`broughtForward`,`entitlement`,`bufferEntitlement`) values 
(1,'2020-06-07 15:12:22','Testuser','2020-06-25 22:47:15','Aenjay','A','WebApp_v1',1,1,1,0,14,1,2,0,14,0),
(2,'2020-06-25 22:32:32','Aenjay',NULL,NULL,'A','WebApp_v1',1,3,2,10,10,10,10,10,10,10),
(3,'2020-06-25 22:47:43','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,3,10,10,10,10,10,10,10);

/*Table structure for table `employee_master` */

DROP TABLE IF EXISTS `employee_master`;

CREATE TABLE `employee_master` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Full name',
  `employeeCode` varchar(100) DEFAULT NULL COMMENT 'Employee No.',
  `idCardNum` varchar(50) DEFAULT NULL COMMENT 'Employee Access Card No.',
  `jobTitle` bigint(20) DEFAULT NULL,
  `roleId` bigint(20) DEFAULT NULL,
  `department` bigint(20) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `postCode` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `countryCode` varchar(2) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `mobileNo` varchar(20) DEFAULT NULL,
  `race` varchar(50) DEFAULT NULL,
  `religion` bigint(20) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `profilePhoto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_comployee_id` (`id`) USING BTREE,
  KEY `FK_comployee_companyid` (`companyId`) USING BTREE,
  KEY `FK_comployee_jobtitle` (`jobTitle`) USING BTREE,
  KEY `FK_comployee_department` (`department`) USING BTREE,
  CONSTRAINT `FK_comployee_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_comployee_department` FOREIGN KEY (`department`) REFERENCES `ref_department` (`id`),
  CONSTRAINT `FK_comployee_jobtitle` FOREIGN KEY (`jobTitle`) REFERENCES `ref_job_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `employee_master` */

insert  into `employee_master`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`name`,`employeeCode`,`idCardNum`,`jobTitle`,`roleId`,`department`,`address1`,`address2`,`postCode`,`city`,`state`,`countryCode`,`dateOfBirth`,`email`,`password`,`gender`,`mobileNo`,`race`,`religion`,`remark`,`profilePhoto`) values 
(1,'2020-06-07 13:55:33','Testuser','2020-06-27 05:47:25','Fajar Puji','A','WebApp_v1',1,'Abul','A100092','890222-10-7868',1,7,2,'Address 1 sample','Address 2 sample','52200','Petaling Jaya','Selangor','MY','2019-06-17','abul@company.com','$2y$10$tuKi3Th6LSRCCtSNXHxBdeX.hacBfyHV3ixKCKRNiyB7W.5u5ceYq','M','012-034940380','Malay',1,NULL,'e5b83c44508daadd7c56e15870fddda6.jpeg'),
(2,'2020-06-07 13:58:06','Testuser','2020-06-27 05:44:07','Fajar Puji','A','WebApp_v1',1,'Tan Mei Ling','A0920100','800715-70-1029',2,1,3,'1 address','2 address','5300','Sri Petaling','Kuala Lumpur','MY','2020-03-08','wong@company.com','$2y$10$yH3zKdSVGKOL9kgzJFQy5uwpIeSRFHIRCJzv7ngm1z5Fdgo13/7p2','F','0120943049','Chinese',1,NULL,NULL),
(3,'2020-06-23 20:36:33','Aenjay','2020-06-25 05:47:22','Aenjay','I','WebApp_v1',1,'aklsjdlk','lkajsdlka','lkjasldkas',3,NULL,3,'askldjalsd','lkasjlasd','lkjasldka','lkajsdlas','lkajsdlaks','ID','2020-06-22','aasjd@gmail.com','$2y$10$eDAcwcF6SvCFhXC6X1FYNer9lGlEfbQhAlB/oHHH7jxX6xxzXTJkG','M','aksldad','lkajsldkas',1,'askdasdlasd','ed5dfbc9150851de04c88046317f4275.jpeg');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyId` bigint(20) NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `FK_failedjob_companyid` (`companyId`),
  CONSTRAINT `FK_failedjob_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(6,'2016_06_01_000004_create_oauth_clients_table',1),
(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2020_05_30_092027_create_permission_tables',1);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` bigint(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `oauth_access_tokens_user_id_index` (`user_id`),
  KEY `FK_oauthaccesstoken_companyid` (`companyId`),
  CONSTRAINT `FK_oauthaccesstoken_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` bigint(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `oauth_auth_codes_user_id_index` (`user_id`),
  KEY `FK_oauthauthcode_companyid` (`companyId`),
  CONSTRAINT `FK_oauthauthcode_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyId` bigint(20) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `oauth_clients_user_id_index` (`user_id`),
  KEY `FK_oauthclients_companyid` (`companyId`),
  CONSTRAINT `FK_oauthclients_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyid` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_oauthpersonalaccess_companyid` (`companyid`),
  CONSTRAINT `FK_oauthpersonalaccess_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` bigint(20) NOT NULL,
  `companyid` bigint(20) DEFAULT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_oauthrefreshtokens_companyid` (`companyid`),
  CONSTRAINT `FK_oauthrefreshtokens_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyId` bigint(20) DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_menu_ch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sequence` bigint(20) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_permission_companyid` (`companyId`),
  CONSTRAINT `FK_permission_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`companyId`,`code`,`name`,`name_menu`,`name_menu_ch`,`parent`,`url`,`sequence`,`icon`,`guard_name`,`created_at`,`updated_at`,`is_deleted`) values 
(11,1,'M999001','create','Permissions','权限','M999','permissions',1,'bars','web','2020-06-06 12:25:54','2020-06-20 09:27:52',0),
(12,1,'M999001','list','Permissions','权限','M999','permissions',1,'bars','web','2020-06-06 12:25:54','2020-06-20 09:27:52',0),
(13,1,'M999001','detail','Permissions','权限','M999','permissions',1,'bars','web','2020-06-06 12:25:54','2020-06-20 09:27:52',0),
(14,1,'M999001','edit','Permissions','权限','M999','permissions',1,'bars','web','2020-06-06 12:25:54','2020-06-20 09:27:52',0),
(15,1,'M999001','delete','Permissions','权限','M999','permissions',1,'bars','web','2020-06-06 12:25:54','2020-06-20 09:27:52',0),
(24,1,'M999002','create','Roles','的角色','M999','roles',2,'cog','web','2020-06-20 09:30:30',NULL,0),
(25,1,'M999002','list','Roles','的角色','M999','roles',2,'cog','web','2020-06-20 09:30:30',NULL,0),
(26,1,'M999002','detail','Roles','的角色','M999','roles',2,'cog','web','2020-06-20 09:30:30',NULL,0),
(27,1,'M999002','edit','Roles','的角色','M999','roles',2,'cog','web','2020-06-20 09:30:30',NULL,0),
(28,1,'M999002','delete','Roles','的角色','M999','roles',2,'cog','web','2020-06-20 09:30:30',NULL,0),
(29,1,'M999003','create','Role Permissions','角色权限','M999','role-permissions',3,'navicon','web','2020-06-20 14:45:46',NULL,0),
(30,1,'M999003','list','Role Permissions','角色权限','M999','role-permissions',3,'navicon','web','2020-06-20 14:45:46',NULL,0),
(31,1,'M999003','detail','Role Permissions','角色权限','M999','role-permissions',3,'navicon','web','2020-06-20 14:45:46',NULL,0),
(32,1,'M999003','edit','Role Permissions','角色权限','M999','role-permissions',3,'navicon','web','2020-06-20 14:45:46',NULL,0),
(33,1,'M999003','delete','Role Permissions','角色权限','M999','role-permissions',3,'navicon','web','2020-06-20 14:45:46',NULL,0),
(34,1,'M999','create','User Management','用户管理','0','#',999,'cogs','web','2020-06-20 18:30:58','2020-06-21 07:11:10',0),
(35,1,'M999','list','User Management','用户管理','0','#',999,'cogs','web','2020-06-20 18:30:58','2020-06-21 07:11:10',0),
(36,1,'M999','detail','User Management','用户管理','0','#',999,'cogs','web','2020-06-20 18:30:58','2020-06-21 07:11:10',0),
(37,1,'M999','edit','User Management','用户管理','0','#',999,'cogs','web','2020-06-20 18:30:58','2020-06-21 07:11:10',0),
(38,1,'M999','delete','User Management','用户管理','0','#',999,'cogs','web','2020-06-20 18:30:58','2020-06-21 07:11:10',0),
(39,1,'M001','create','Dashboard','仪表板','0','dashboard',1,'dashboard','web','2020-06-20 22:04:01','2020-06-21 07:12:03',0),
(40,1,'M001','list','Dashboard','仪表板','0','dashboard',1,'dashboard','web','2020-06-20 22:04:01','2020-06-21 07:12:03',0),
(41,1,'M001','detail','Dashboard','仪表板','0','dashboard',1,'dashboard','web','2020-06-20 22:04:01','2020-06-21 07:12:03',0),
(42,1,'M001','edit','Dashboard','仪表板','0','dashboard',1,'dashboard','web','2020-06-20 22:04:01','2020-06-21 07:12:03',0),
(43,1,'M001','delete','Dashboard','仪表板','0','dashboard',1,'dashboard','web','2020-06-20 22:04:01','2020-06-21 07:12:03',0),
(44,1,'M999004','create','Users','users','0','users',4,'user','web','2020-06-21 07:07:37','2020-06-21 07:07:45',1),
(45,1,'M999004','list','Users','users','0','users',4,'user','web','2020-06-21 07:07:37','2020-06-21 07:07:45',1),
(46,1,'M999004','detail','Users','users','0','users',4,'user','web','2020-06-21 07:07:37','2020-06-21 07:07:45',1),
(47,1,'M999004','edit','Users','users','0','users',4,'user','web','2020-06-21 07:07:37','2020-06-21 07:07:45',1),
(48,1,'M999004','delete','Users','users','0','users',4,'user','web','2020-06-21 07:07:37','2020-06-21 07:07:45',1),
(49,1,'M999004','create','Users','用户数','M999','users',4,'user','web','2020-06-21 09:33:44',NULL,0),
(50,1,'M999004','list','Users','用户数','M999','users',4,'user','web','2020-06-21 09:33:44',NULL,0),
(51,1,'M999004','detail','Users','用户数','M999','users',4,'user','web','2020-06-21 09:33:44',NULL,0),
(52,1,'M999004','edit','Users','用户数','M999','users',4,'user','web','2020-06-21 09:33:44',NULL,0),
(53,1,'M999004','delete','Users','用户数','M999','users',4,'user','web','2020-06-21 09:33:44',NULL,0),
(54,1,'M002','create','Setup Data','设定数据','0','#',2,'bars','web','2020-06-21 10:42:16','2020-06-25 06:09:24',0),
(55,1,'M002','list','Setup Data','设定数据','0','#',2,'bars','web','2020-06-21 10:42:16','2020-06-25 06:09:24',0),
(56,1,'M002','detail','Setup Data','设定数据','0','#',2,'bars','web','2020-06-21 10:42:16','2020-06-25 06:09:24',0),
(57,1,'M002','edit','Setup Data','设定数据','0','#',2,'bars','web','2020-06-21 10:42:16','2020-06-25 06:09:24',0),
(58,1,'M002','delete','Setup Data','设定数据','0','#',2,'bars','web','2020-06-21 10:42:16','2020-06-25 06:09:24',0),
(59,1,'M002001','create','Department','部门','M002','department',1,'building','web','2020-06-21 10:43:45','2020-06-21 16:32:46',0),
(60,1,'M002001','list','Department','部门','M002','department',1,'building','web','2020-06-21 10:43:45','2020-06-21 16:32:46',0),
(61,1,'M002001','detail','Department','部门','M002','department',1,'building','web','2020-06-21 10:43:45','2020-06-21 16:32:46',0),
(62,1,'M002001','edit','Department','部门','M002','department',1,'building','web','2020-06-21 10:43:45','2020-06-21 16:32:46',0),
(63,1,'M002001','delete','Department','部门','M002','department',1,'building','web','2020-06-21 10:43:45','2020-06-21 16:32:46',0),
(64,1,'M002002','create','Job Title','职称','M002','job-title',2,'street-view','web','2020-06-21 10:45:51','2020-06-21 10:46:02',0),
(65,1,'M002002','list','Job Title','职称','M002','job-title',2,'street-view','web','2020-06-21 10:45:51','2020-06-21 10:46:02',0),
(66,1,'M002002','detail','Job Title','职称','M002','job-title',2,'street-view','web','2020-06-21 10:45:51','2020-06-21 10:46:02',0),
(67,1,'M002002','edit','Job Title','职称','M002','job-title',2,'street-view','web','2020-06-21 10:45:51','2020-06-21 10:46:02',0),
(68,1,'M002002','delete','Job Title','职称','M002','job-title',2,'street-view','web','2020-06-21 10:45:51','2020-06-21 10:46:02',0),
(69,1,'M002003','create','Business Industry','商业行业','M002','business-industry',3,'building-o','web','2020-06-21 14:47:31',NULL,0),
(70,1,'M002003','list','Business Industry','商业行业','M002','business-industry',3,'building-o','web','2020-06-21 14:47:31',NULL,0),
(71,1,'M002003','detail','Business Industry','商业行业','M002','business-industry',3,'building-o','web','2020-06-21 14:47:31',NULL,0),
(72,1,'M002003','edit','Business Industry','商业行业','M002','business-industry',3,'building-o','web','2020-06-21 14:47:31',NULL,0),
(73,1,'M002003','delete','Business Industry','商业行业','M002','business-industry',3,'building-o','web','2020-06-21 14:47:31',NULL,0),
(74,1,'M002004','create','Business Partnership','商业伙伴关系','M002','business-partnership',4,'asl-interpreting','web','2020-06-21 14:48:36',NULL,0),
(75,1,'M002004','list','Business Partnership','商业伙伴关系','M002','business-partnership',4,'asl-interpreting','web','2020-06-21 14:48:36',NULL,0),
(76,1,'M002004','detail','Business Partnership','商业伙伴关系','M002','business-partnership',4,'asl-interpreting','web','2020-06-21 14:48:36',NULL,0),
(77,1,'M002004','edit','Business Partnership','商业伙伴关系','M002','business-partnership',4,'asl-interpreting','web','2020-06-21 14:48:36',NULL,0),
(78,1,'M002004','delete','Business Partnership','商业伙伴关系','M002','business-partnership',4,'asl-interpreting','web','2020-06-21 14:48:36',NULL,0),
(79,1,'M002005','create','Issue Type','发行类型','M002','issue-type',5,'qrcode','web','2020-06-21 15:04:22',NULL,0),
(80,1,'M002005','list','Issue Type','发行类型','M002','issue-type',5,'qrcode','web','2020-06-21 15:04:22',NULL,0),
(81,1,'M002005','detail','Issue Type','发行类型','M002','issue-type',5,'qrcode','web','2020-06-21 15:04:22',NULL,0),
(82,1,'M002005','edit','Issue Type','发行类型','M002','issue-type',5,'qrcode','web','2020-06-21 15:04:22',NULL,0),
(83,1,'M002005','delete','Issue Type','发行类型','M002','issue-type',5,'qrcode','web','2020-06-21 15:04:22',NULL,0),
(84,1,'M002006','create','Leave Type','休假类型','M002','leave-type',6,'reply','web','2020-06-21 15:05:39',NULL,0),
(85,1,'M002006','list','Leave Type','休假类型','M002','leave-type',6,'reply','web','2020-06-21 15:05:39',NULL,0),
(86,1,'M002006','detail','Leave Type','休假类型','M002','leave-type',6,'reply','web','2020-06-21 15:05:39',NULL,0),
(87,1,'M002006','edit','Leave Type','休假类型','M002','leave-type',6,'reply','web','2020-06-21 15:05:39',NULL,0),
(88,1,'M002006','delete','Leave Type','休假类型','M002','leave-type',6,'reply','web','2020-06-21 15:05:39',NULL,0),
(89,1,'M002007','create','Product Category','产品分类','M002','product-category',7,'bars','web','2020-06-21 15:06:52',NULL,0),
(90,1,'M002007','list','Product Category','产品分类','M002','product-category',7,'bars','web','2020-06-21 15:06:52',NULL,0),
(91,1,'M002007','detail','Product Category','产品分类','M002','product-category',7,'bars','web','2020-06-21 15:06:52',NULL,0),
(92,1,'M002007','edit','Product Category','产品分类','M002','product-category',7,'bars','web','2020-06-21 15:06:52',NULL,0),
(93,1,'M002007','delete','Product Category','产品分类','M002','product-category',7,'bars','web','2020-06-21 15:06:52',NULL,0),
(94,1,'M002008','create','Product OUM','产品计量单位','M002','product-uom',8,'balance-scale','web','2020-06-21 15:08:12',NULL,0),
(95,1,'M002008','list','Product OUM','产品计量单位','M002','product-uom',8,'balance-scale','web','2020-06-21 15:08:12',NULL,0),
(96,1,'M002008','detail','Product OUM','产品计量单位','M002','product-uom',8,'balance-scale','web','2020-06-21 15:08:12',NULL,0),
(97,1,'M002008','edit','Product OUM','产品计量单位','M002','product-uom',8,'balance-scale','web','2020-06-21 15:08:12',NULL,0),
(98,1,'M002008','delete','Product OUM','产品计量单位','M002','product-uom',8,'balance-scale','web','2020-06-21 15:08:12',NULL,0),
(99,1,'M002009','create','Notice Announcement','公告公告','M002','notice-announcement',9,'bell','web','2020-06-21 16:39:21',NULL,0),
(100,1,'M002009','list','Notice Announcement','公告公告','M002','notice-announcement',9,'bell','web','2020-06-21 16:39:21',NULL,0),
(101,1,'M002009','detail','Notice Announcement','公告公告','M002','notice-announcement',9,'bell','web','2020-06-21 16:39:21',NULL,0),
(102,1,'M002009','edit','Notice Announcement','公告公告','M002','notice-announcement',9,'bell','web','2020-06-21 16:39:21',NULL,0),
(103,1,'M002009','delete','Notice Announcement','公告公告','M002','notice-announcement',9,'bell','web','2020-06-21 16:39:21',NULL,0),
(104,1,'M002010','create','Email Template Type','电子邮件模板类型','M002','email-template-type',10,'envelope-square','web','2020-06-21 19:03:22',NULL,0),
(105,1,'M002010','list','Email Template Type','电子邮件模板类型','M002','email-template-type',10,'envelope-square','web','2020-06-21 19:03:22',NULL,0),
(106,1,'M002010','detail','Email Template Type','电子邮件模板类型','M002','email-template-type',10,'envelope-square','web','2020-06-21 19:03:22',NULL,0),
(107,1,'M002010','edit','Email Template Type','电子邮件模板类型','M002','email-template-type',10,'envelope-square','web','2020-06-21 19:03:22',NULL,0),
(108,1,'M002010','delete','Email Template Type','电子邮件模板类型','M002','email-template-type',10,'envelope-square','web','2020-06-21 19:03:22',NULL,0),
(109,1,'M002011','create','Email Template Settings','电子邮件模板设置','M002','email-template-settings',11,'map-o','web','2020-06-22 06:07:55',NULL,0),
(110,1,'M002011','list','Email Template Settings','电子邮件模板设置','M002','email-template-settings',11,'map-o','web','2020-06-22 06:07:55',NULL,0),
(111,1,'M002011','detail','Email Template Settings','电子邮件模板设置','M002','email-template-settings',11,'map-o','web','2020-06-22 06:07:55',NULL,0),
(112,1,'M002011','edit','Email Template Settings','电子邮件模板设置','M002','email-template-settings',11,'map-o','web','2020-06-22 06:07:55',NULL,0),
(113,1,'M002011','delete','Email Template Settings','电子邮件模板设置','M002','email-template-settings',11,'map-o','web','2020-06-22 06:07:55',NULL,0),
(114,1,'M002012','create','Country','国家','M002','country',12,'institution','web','2020-06-22 07:27:59','2020-06-23 06:09:06',0),
(115,1,'M002012','list','Country','国家','M002','country',12,'institution','web','2020-06-22 07:27:59','2020-06-23 06:09:06',0),
(116,1,'M002012','detail','Country','国家','M002','country',12,'institution','web','2020-06-22 07:27:59','2020-06-23 06:09:06',0),
(117,1,'M002012','edit','Country','国家','M002','country',12,'institution','web','2020-06-22 07:27:59','2020-06-23 06:09:06',0),
(118,1,'M002012','delete','Country','国家','M002','country',12,'institution','web','2020-06-22 07:27:59','2020-06-23 06:09:06',0),
(119,1,'M002013','create','Holiday','假日','M002','holiday',13,'calendar','web','2020-06-22 08:20:03',NULL,0),
(120,1,'M002013','list','Holiday','假日','M002','holiday',13,'calendar','web','2020-06-22 08:20:03',NULL,0),
(121,1,'M002013','detail','Holiday','假日','M002','holiday',13,'calendar','web','2020-06-22 08:20:03',NULL,0),
(122,1,'M002013','edit','Holiday','假日','M002','holiday',13,'calendar','web','2020-06-22 08:20:03',NULL,0),
(123,1,'M002013','delete','Holiday','假日','M002','holiday',13,'calendar','web','2020-06-22 08:20:03',NULL,0),
(124,1,'M002014','create','Leave Approver','离开批准人','M002','leave-approver',14,'check-square-o','web','2020-06-22 18:52:44',NULL,0),
(125,1,'M002014','list','Leave Approver','离开批准人','M002','leave-approver',14,'check-square-o','web','2020-06-22 18:52:44',NULL,0),
(126,1,'M002014','detail','Leave Approver','离开批准人','M002','leave-approver',14,'check-square-o','web','2020-06-22 18:52:44',NULL,0),
(127,1,'M002014','edit','Leave Approver','离开批准人','M002','leave-approver',14,'check-square-o','web','2020-06-22 18:52:44',NULL,0),
(128,1,'M002014','delete','Leave Approver','离开批准人','M002','leave-approver',14,'check-square-o','web','2020-06-22 18:52:44',NULL,0),
(134,1,'M003001','create','Employee','雇员','0','employee',3,'child','web','2020-06-23 07:40:36','2020-06-27 14:03:48',0),
(135,1,'M003001','list','Employee','雇员','0','employee',3,'child','web','2020-06-23 07:40:36','2020-06-27 14:03:48',0),
(136,1,'M003001','detail','Employee','雇员','0','employee',3,'child','web','2020-06-23 07:40:36','2020-06-27 14:03:48',0),
(137,1,'M003001','edit','Employee','雇员','0','employee',3,'child','web','2020-06-23 07:40:36','2020-06-27 14:03:48',0),
(138,1,'M003001','delete','Employee','雇员','0','employee',3,'child','web','2020-06-23 07:40:36','2020-06-27 14:03:48',0),
(139,1,'M004001','create','Product','产品','0','product',4,'cubes','web','2020-06-24 18:35:05','2020-06-27 14:03:01',0),
(140,1,'M004001','list','Product','产品','0','product',4,'cubes','web','2020-06-24 18:35:05','2020-06-27 14:03:01',0),
(141,1,'M004001','detail','Product','产品','0','product',4,'cubes','web','2020-06-24 18:35:05','2020-06-27 14:03:01',0),
(142,1,'M004001','edit','Product','产品','0','product',4,'cubes','web','2020-06-24 18:35:05','2020-06-27 14:03:01',0),
(143,1,'M004001','delete','Product','产品','0','product',4,'cubes','web','2020-06-24 18:35:05','2020-06-27 14:03:01',0),
(144,1,'M004002','create','Product Brochure','产品手册','0','product-brochure',4,'file-image-o','web','2020-06-24 23:01:31','2020-06-26 20:39:51',0),
(145,1,'M004002','list','Product Brochure','产品手册','0','product-brochure',4,'file-image-o','web','2020-06-24 23:01:31','2020-06-26 20:39:51',0),
(146,1,'M004002','detail','Product Brochure','产品手册','0','product-brochure',4,'file-image-o','web','2020-06-24 23:01:31','2020-06-26 20:39:51',0),
(147,1,'M004002','edit','Product Brochure','产品手册','0','product-brochure',4,'file-image-o','web','2020-06-24 23:01:31','2020-06-26 20:39:51',0),
(148,1,'M004002','delete','Product Brochure','产品手册','0','product-brochure',4,'file-image-o','web','2020-06-24 23:01:31','2020-06-26 20:39:51',0),
(149,1,'M003','create','HR User','人力资源使用者','0','#',4,'child','web','2020-06-25 06:06:53','2020-06-25 22:57:01',1),
(150,1,'M003','list','HR User','人力资源使用者','0','#',4,'child','web','2020-06-25 06:06:53','2020-06-25 22:57:01',1),
(151,1,'M003','detail','HR User','人力资源使用者','0','#',4,'child','web','2020-06-25 06:06:53','2020-06-25 22:57:01',1),
(152,1,'M003','edit','HR User','人力资源使用者','0','#',4,'child','web','2020-06-25 06:06:53','2020-06-25 22:57:01',1),
(153,1,'M003','delete','HR User','人力资源使用者','0','#',4,'child','web','2020-06-25 06:06:53','2020-06-25 22:57:01',1),
(154,1,'M004','create','Manage Product','管理产品','0','#',3,'cubes','web','2020-06-25 06:11:22','2020-06-25 22:57:11',1),
(155,1,'M004','list','Manage Product','管理产品','0','#',3,'cubes','web','2020-06-25 06:11:22','2020-06-25 22:57:11',1),
(156,1,'M004','detail','Manage Product','管理产品','0','#',3,'cubes','web','2020-06-25 06:11:22','2020-06-25 22:57:11',1),
(157,1,'M004','edit','Manage Product','管理产品','0','#',3,'cubes','web','2020-06-25 06:11:22','2020-06-25 22:57:11',1),
(158,1,'M004','delete','Manage Product','管理产品','0','#',3,'cubes','web','2020-06-25 06:11:22','2020-06-25 22:57:11',1),
(159,1,'M003002','create','Employee Leave Entitle','员工休假权利','0','employee-leave-entitle',3,'external-link-square','web','2020-06-25 06:15:43','2020-06-27 14:04:09',0),
(160,1,'M003002','list','Employee Leave Entitle','员工休假权利','0','employee-leave-entitle',3,'external-link-square','web','2020-06-25 06:15:43','2020-06-27 14:04:09',0),
(161,1,'M003002','detail','Employee Leave Entitle','员工休假权利','0','employee-leave-entitle',3,'external-link-square','web','2020-06-25 06:15:43','2020-06-27 14:04:09',0),
(162,1,'M003002','edit','Employee Leave Entitle','员工休假权利','0','employee-leave-entitle',3,'external-link-square','web','2020-06-25 06:15:43','2020-06-27 14:04:09',0),
(163,1,'M003002','delete','Employee Leave Entitle','员工休假权利','0','employee-leave-entitle',3,'external-link-square','web','2020-06-25 06:15:43','2020-06-27 14:04:09',0),
(164,1,'M006','create','Employee','雇员','0','#',6,'child','web','2020-06-25 23:00:42',NULL,0),
(165,1,'M006','list','Employee','雇员','0','#',6,'child','web','2020-06-25 23:00:42',NULL,0),
(166,1,'M006','detail','Employee','雇员','0','#',6,'child','web','2020-06-25 23:00:42',NULL,0),
(167,1,'M006','edit','Employee','雇员','0','#',6,'child','web','2020-06-25 23:00:42',NULL,0),
(168,1,'M006','delete','Employee','雇员','0','#',6,'child','web','2020-06-25 23:00:42',NULL,0),
(169,1,'M006001','create','Apply Leave','申请请假','M006','apply-leave',1,'envelope-o','web','2020-06-25 23:01:33','2020-06-25 23:02:28',0),
(170,1,'M006001','list','Apply Leave','申请请假','M006','apply-leave',1,'envelope-o','web','2020-06-25 23:01:33','2020-06-25 23:02:28',0),
(171,1,'M006001','detail','Apply Leave','申请请假','M006','apply-leave',1,'envelope-o','web','2020-06-25 23:01:33','2020-06-25 23:02:28',0),
(172,1,'M006001','edit','Apply Leave','申请请假','M006','apply-leave',1,'envelope-o','web','2020-06-25 23:01:33','2020-06-25 23:02:28',0),
(173,1,'M006001','delete','Apply Leave','申请请假','M006','apply-leave',1,'envelope-o','web','2020-06-25 23:01:33','2020-06-25 23:02:28',0),
(174,1,'M006002','create','Take Daily Attendance','每天参加','M006','take-daily-attendance',2,'calendar','web','2020-06-25 23:02:15','2020-06-25 23:19:52',0),
(175,1,'M006002','list','Take Daily Attendance','每天参加','M006','take-daily-attendance',2,'calendar','web','2020-06-25 23:02:15','2020-06-25 23:19:52',0),
(176,1,'M006002','detail','Take Daily Attendance','每天参加','M006','take-daily-attendance',2,'calendar','web','2020-06-25 23:02:15','2020-06-25 23:19:52',0),
(177,1,'M006002','edit','Take Daily Attendance','每天参加','M006','take-daily-attendance',2,'calendar','web','2020-06-25 23:02:15','2020-06-25 23:19:52',0),
(178,1,'M006002','delete','Take Daily Attendance','每天参加','M006','take-daily-attendance',2,'calendar','web','2020-06-25 23:02:15','2020-06-25 23:19:52',0),
(179,1,'M006003','create','Apply Task for Approval','申请任务进行批准','M006','apply-task',3,'envelope-square','web','2020-06-25 23:03:37',NULL,0),
(180,1,'M006003','list','Apply Task for Approval','申请任务进行批准','M006','apply-task',3,'envelope-square','web','2020-06-25 23:03:37',NULL,0),
(181,1,'M006003','detail','Apply Task for Approval','申请任务进行批准','M006','apply-task',3,'envelope-square','web','2020-06-25 23:03:37',NULL,0),
(182,1,'M006003','edit','Apply Task for Approval','申请任务进行批准','M006','apply-task',3,'envelope-square','web','2020-06-25 23:03:37',NULL,0),
(183,1,'M006003','delete','Apply Task for Approval','申请任务进行批准','M006','apply-task',3,'envelope-square','web','2020-06-25 23:03:37',NULL,0),
(184,1,'M006004','create','Submit Daily Work Journal','提交日常工作日志','M006','submit-daily',4,'check-square-o','web','2020-06-25 23:04:29',NULL,0),
(185,1,'M006004','list','Submit Daily Work Journal','提交日常工作日志','M006','submit-daily',4,'check-square-o','web','2020-06-25 23:04:29',NULL,0),
(186,1,'M006004','detail','Submit Daily Work Journal','提交日常工作日志','M006','submit-daily',4,'check-square-o','web','2020-06-25 23:04:29',NULL,0),
(187,1,'M006004','edit','Submit Daily Work Journal','提交日常工作日志','M006','submit-daily',4,'check-square-o','web','2020-06-25 23:04:29',NULL,0),
(188,1,'M006004','delete','Submit Daily Work Journal','提交日常工作日志','M006','submit-daily',4,'check-square-o','web','2020-06-25 23:04:29',NULL,0),
(189,1,'M005001','create','Customer','顾客','0','customer',5,'child','web','2020-06-26 17:10:40','2020-06-27 06:49:26',0),
(190,1,'M005001','list','Customer','顾客','0','customer',5,'child','web','2020-06-26 17:10:40','2020-06-27 06:49:26',0),
(191,1,'M005001','detail','Customer','顾客','0','customer',5,'child','web','2020-06-26 17:10:40','2020-06-27 06:49:26',0),
(192,1,'M005001','edit','Customer','顾客','0','customer',5,'child','web','2020-06-26 17:10:40','2020-06-27 06:49:26',0),
(193,1,'M005001','delete','Customer','顾客','0','customer',5,'child','web','2020-06-26 17:10:40','2020-06-27 06:49:26',0),
(194,1,'M002015','create','Company','公司','M002','company',15,'building-o','web','2020-06-26 18:59:19',NULL,0),
(195,1,'M002015','list','Company','公司','M002','company',15,'building-o','web','2020-06-26 18:59:19',NULL,0),
(196,1,'M002015','detail','Company','公司','M002','company',15,'building-o','web','2020-06-26 18:59:19',NULL,0),
(197,1,'M002015','edit','Company','公司','M002','company',15,'building-o','web','2020-06-26 18:59:19',NULL,0),
(198,1,'M002015','delete','Company','公司','M002','company',15,'building-o','web','2020-06-26 18:59:19',NULL,0),
(199,1,'M998','create','Company','公司','0','sys-company',998,'institution','web','2020-06-26 19:30:39',NULL,0),
(200,1,'M998','list','Company','公司','0','sys-company',998,'institution','web','2020-06-26 19:30:39',NULL,0),
(201,1,'M998','detail','Company','公司','0','sys-company',998,'institution','web','2020-06-26 19:30:39',NULL,0),
(202,1,'M998','edit','Company','公司','0','sys-company',998,'institution','web','2020-06-26 19:30:39',NULL,0),
(203,1,'M998','delete','Company','公司','0','sys-company',998,'institution','web','2020-06-26 19:30:39',NULL,0),
(204,1,'M005003','create','Customer Issue Report','客户问题报告','0','customer-issue-report',5,'file-text','web','2020-06-27 06:51:03','2020-06-27 07:31:11',0),
(205,1,'M005003','list','Customer Issue Report','客户问题报告','0','customer-issue-report',5,'file-text','web','2020-06-27 06:51:03','2020-06-27 07:31:11',0),
(206,1,'M005003','detail','Customer Issue Report','客户问题报告','0','customer-issue-report',5,'file-text','web','2020-06-27 06:51:03','2020-06-27 07:31:11',0),
(207,1,'M005003','edit','Customer Issue Report','客户问题报告','0','customer-issue-report',5,'file-text','web','2020-06-27 06:51:03','2020-06-27 07:31:11',0),
(208,1,'M005003','delete','Customer Issue Report','客户问题报告','0','customer-issue-report',5,'file-text','web','2020-06-27 06:51:03','2020-06-27 07:31:11',0),
(209,1,'M005002','create','Customer Contact Person','客户联络人','0','customer-contact-person',5,'male','web','2020-06-27 07:33:20',NULL,0),
(210,1,'M005002','list','Customer Contact Person','客户联络人','0','customer-contact-person',5,'male','web','2020-06-27 07:33:20',NULL,0),
(211,1,'M005002','detail','Customer Contact Person','客户联络人','0','customer-contact-person',5,'male','web','2020-06-27 07:33:20',NULL,0),
(212,1,'M005002','edit','Customer Contact Person','客户联络人','0','customer-contact-person',5,'male','web','2020-06-27 07:33:20',NULL,0),
(213,1,'M005002','delete','Customer Contact Person','客户联络人','0','customer-contact-person',5,'male','web','2020-06-27 07:33:20',NULL,0);

/*Table structure for table `product_brochure` */

DROP TABLE IF EXISTS `product_brochure`;

CREATE TABLE `product_brochure` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `publishDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`companyid`) USING BTREE,
  KEY `IX_product_brochure_id` (`id`) USING BTREE,
  KEY `FK_product_brochure_companyid` (`companyid`) USING BTREE,
  CONSTRAINT `FK_product_brochure_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `product_brochure` */

insert  into `product_brochure`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyid`,`title`,`description`,`notes`,`publishDate`) values 
(1,'2020-06-24 23:24:14','Aenjay','2020-06-24 23:24:28','Aenjay','I','WebApp_v1',1,'laksd','lkjasd','lkasd','2020-06-16 23:24:00');

/*Table structure for table `product_brochure_doc` */

DROP TABLE IF EXISTS `product_brochure_doc`;

CREATE TABLE `product_brochure_doc` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `productBrochureId` bigint(20) NOT NULL,
  `contentType` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `size` bigint(20) NOT NULL,
  `token_upload` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_productbrochuredoc_id` (`id`) USING BTREE,
  KEY `FK_productbrochuredoc_company_id` (`companyId`) USING BTREE,
  CONSTRAINT `FK_productbrochuredoc_company_id` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `product_brochure_doc` */

insert  into `product_brochure_doc`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`productBrochureId`,`contentType`,`description`,`displayName`,`filename`,`size`,`token_upload`) values 
(1,'2020-06-24 23:37:25','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'jpeg','','','baik.jpeg',13843,'0.259248993441173');

/*Table structure for table `product_master` */

DROP TABLE IF EXISTS `product_master`;

CREATE TABLE `product_master` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `productCode` varchar(100) NOT NULL COMMENT ' ',
  `productName` varchar(100) NOT NULL,
  `detailProductDesc` varchar(200) DEFAULT NULL,
  `brandName` varchar(200) DEFAULT NULL,
  `productCategory` bigint(20) DEFAULT NULL,
  `uom` bigint(20) DEFAULT NULL,
  `unitPrice` double(10,2) DEFAULT NULL,
  `retailPrice` double(10,2) DEFAULT NULL,
  `reorderLevel` int(10) DEFAULT NULL COMMENT 'Qty reach min for re-order',
  `storageLocation` varchar(50) DEFAULT NULL COMMENT 'Warehouse Storage Bin Code',
  `remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_product_master_id` (`id`) USING BTREE,
  KEY `FK_product_master_companyid` (`companyId`) USING BTREE,
  KEY `FK_product_master_productcategory` (`productCategory`) USING BTREE,
  KEY `FK_product_master_uom` (`uom`) USING BTREE,
  CONSTRAINT `FK_product_master_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_product_master_productcategory` FOREIGN KEY (`productCategory`) REFERENCES `ref_product_category` (`id`),
  CONSTRAINT `FK_product_master_uom` FOREIGN KEY (`uom`) REFERENCES `ref_product_uom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `product_master` */

insert  into `product_master`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`productCode`,`productName`,`detailProductDesc`,`brandName`,`productCategory`,`uom`,`unitPrice`,`retailPrice`,`reorderLevel`,`storageLocation`,`remark`) values 
(1,'2020-06-07 14:56:01','',NULL,NULL,'A','WebApp_v1',1,'D-020101910','Door lock for slider door','Door lock-039420','Momo',1,3,10209.00,20100.00,10,'AB-1020-10',NULL),
(2,'2020-06-24 22:34:37','Aenjay','2020-06-24 22:55:19','Aenjay','A','WebApp_v1',1,'LKJaksljd','AKLSJDLAKSDJ','lkjasldkajsd','lkjasldkaj',1,3,10000.00,1000.00,10,'kajslda alsd','lakjsdasd');

/*Table structure for table `product_master_doc` */

DROP TABLE IF EXISTS `product_master_doc`;

CREATE TABLE `product_master_doc` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `productId` bigint(20) NOT NULL,
  `contentType` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `size` bigint(20) NOT NULL,
  `token_upload` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_product_master_doc_id` (`id`) USING BTREE,
  KEY `FK_product_master_doc_companyid` (`companyId`) USING BTREE,
  KEY `FK_product_master_doc_productid` (`productId`) USING BTREE,
  CONSTRAINT `FK_product_master_doc_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_product_master_doc_productid` FOREIGN KEY (`productId`) REFERENCES `product_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `product_master_doc` */

insert  into `product_master_doc`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`productId`,`contentType`,`description`,`displayName`,`filename`,`size`,`token_upload`) values 
(29,'2020-06-24 22:57:15','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'jpeg','','','buruk.jpeg',15854,'0.44221769026023616'),
(31,'2020-06-24 23:27:27','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'jpeg','','','cukup.jpeg',6717,'0.35232861125453785'),
(32,'2020-06-24 23:28:04','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'png','','','china.png',767,'0.8543319984271112'),
(33,'2020-06-24 23:28:19','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'png','','','baik.png',371463,'0.4132088956679105'),
(34,'2020-06-24 23:35:18','Aenjay',NULL,NULL,'A','WebApp_v1',1,1,'jpeg','','','baik.jpeg',13843,'0.14176260032686216');

/*Table structure for table `rbac_user` */

DROP TABLE IF EXISTS `rbac_user`;

CREATE TABLE `rbac_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT 'User Full Name',
  `userType` varchar(1) DEFAULT NULL,
  `departmentId` bigint(20) DEFAULT NULL,
  `positionId` bigint(20) DEFAULT NULL,
  `mobileNo` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(255) DEFAULT NULL COMMENT 'Office no.',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fingerPrintBiometric` bit(1) DEFAULT NULL,
  `forgotPasswordToken` varchar(255) DEFAULT NULL,
  `forgotPasswordTokenTime` datetime DEFAULT NULL,
  `isLockout` tinyint(1) DEFAULT '0',
  `lastFailedLoginCount` int(11) DEFAULT '0',
  `lockoutTime` datetime DEFAULT NULL,
  `passwordChanged` bit(1) DEFAULT NULL,
  `prefLanguageCode` varchar(255) DEFAULT NULL,
  `restrictedAccessEndTime` time DEFAULT NULL,
  `restrictedAccessStartTime` time DEFAULT NULL,
  `passwordPolicyId` int(11) DEFAULT NULL,
  `file_photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `rbac_user` */

insert  into `rbac_user`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`name`,`userType`,`departmentId`,`positionId`,`mobileNo`,`contactNumber`,`email`,`password`,`fingerPrintBiometric`,`forgotPasswordToken`,`forgotPasswordTokenTime`,`isLockout`,`lastFailedLoginCount`,`lockoutTime`,`passwordChanged`,`prefLanguageCode`,`restrictedAccessEndTime`,`restrictedAccessStartTime`,`passwordPolicyId`,`file_photo`) values 
(1,'2020-06-21 11:47:45','','2020-06-26 21:17:38','Aenjay','A','WebApp_v1',1,'Aenjay','4',2,2,'085280141700','087817231210','aenjay09@gmail.com','$2y$10$auWtMqJxN9B/XUcLbvd1GOi1RFsFj5jfcnHplHm0gORDzUAY4vwtW',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'b0553ca959fc9e369b96f0df29a134fa.jpeg'),
(2,'2020-06-21 11:47:45','Aenjay','2020-06-21 14:07:41','Aenjay','I','WebApp_v1',1,'Fajar Puji','1',1,3,'085280141700','087817231210','fajarmuhamad997@gmail.com','$2y$10$TfwrMVznbEe7fQ3/r1APFu0.ZUa7QFbGC1lHZnjT.W/UYXPgwldk2',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'66a6ac205b230bfc81a16bc7597655af.png'),
(3,'2020-06-26 00:46:25','Aenjay',NULL,NULL,'A','WebApp_v1',1,'Fajar Puji','3',2,2,'08123121211','08781723121','admin@company.com','$2y$10$bwTqf6hlhje2hjVV0vwWbe2enpbKpcr7IDdrgB9Z1.TzapslZATzi',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'ddb54b4fc646579c53f53517e02d5fab.jpeg'),
(4,'2020-06-26 00:52:24','Aenjay',NULL,NULL,'A','WebApp_v1',1,'Handoko','8',3,2,'08787129128','09892812','handoko@gmail.com','$2y$10$RlvEF7RJ.a0H7JUh9ifSauqtZOxXQv.IXzyFCy3esNA0J71byixO.',NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'b8b91acce64b0341948ea3defbd0c238.jpeg');

/*Table structure for table `ref_business_industry` */

DROP TABLE IF EXISTS `ref_business_industry`;

CREATE TABLE `ref_business_industry` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_business_industry_id` (`id`) USING BTREE,
  KEY `FK_business_industry_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_business_industry_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_business_industry` */

insert  into `ref_business_industry`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`) values 
(1,'2020-06-07 14:07:11','',NULL,NULL,'A','WebApp_v1',1,'Manufacturing','Metal Manufacturing'),
(2,'2020-06-07 14:07:42','',NULL,NULL,'A','WebApp_v1',1,'Tourist','Tourist'),
(3,'2020-06-07 14:08:05','','2020-06-21 14:56:31','Aenjay','A','WebApp_v1',1,'Construction','Condo Developer');

/*Table structure for table `ref_business_partnership` */

DROP TABLE IF EXISTS `ref_business_partnership`;

CREATE TABLE `ref_business_partnership` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_business_partnership_id` (`id`) USING BTREE,
  KEY `FK_business_partnership_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_business_partnership_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_business_partnership` */

insert  into `ref_business_partnership`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`) values 
(1,'2020-06-07 14:08:50','','2020-06-21 14:58:35','Aenjay','A','WebApp_v1',1,'Sole Propietary','Sole partnership'),
(2,'2020-06-07 14:09:28','',NULL,NULL,'A','WebApp_v1',1,'Corporate','Tier 1 company'),
(3,'2020-06-07 14:09:44','',NULL,NULL,'A','WebApp_v1',1,'Retail','Consumer product');

/*Table structure for table `ref_country` */

DROP TABLE IF EXISTS `ref_country`;

CREATE TABLE `ref_country` (
  `countryCode` varchar(2) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`countryCode`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_country` */

insert  into `ref_country`(`countryCode`,`description`) values 
('ID','Indonesia'),
('MY','Malaysia'),
('SG','Singapore');

/*Table structure for table `ref_department` */

DROP TABLE IF EXISTS `ref_department`;

CREATE TABLE `ref_department` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_department_id` (`id`) USING BTREE,
  KEY `FK_department_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_department_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_department` */

insert  into `ref_department`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`) values 
(1,'2020-06-07 13:51:15','Testuser',NULL,NULL,'A','WebApp_v1',1,'Sales','Sales & Marketing'),
(2,'2020-06-07 13:52:01','Testuser',NULL,NULL,'A','WebApp_v1',1,'IT','Information Technology'),
(3,'2020-06-07 13:52:28','Testuser','2020-06-21 16:33:06','Aenjay','A','WebApp_v1',1,'HR','Human Resource'),
(5,'2020-06-21 11:04:50','Aenjay','2020-06-21 11:09:34','Aenjay','I','WebApp_v1',1,'MG','Manager'),
(6,'2020-06-21 18:33:32','Aenjay',NULL,NULL,'I','WebApp_v1',1,'lkjasda','kljlaksd');

/*Table structure for table `ref_email_template_settings` */

DROP TABLE IF EXISTS `ref_email_template_settings`;

CREATE TABLE `ref_email_template_settings` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) CHARACTER SET utf8 NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) CHARACTER SET utf8 NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bcc` varchar(255) DEFAULT NULL,
  `cc` varchar(255) DEFAULT NULL,
  `content` longtext,
  `fromSender` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_email_template_settings` */

insert  into `ref_email_template_settings`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`name`,`bcc`,`cc`,`content`,`fromSender`,`subject`) values 
(1,'2020-06-22 06:59:19','Aenjay','2020-06-22 07:02:33','Aenjay',0,'WebApp_v1',1,'asdlkjasdlkj','lkajsda@gmail.com','lkjasdk@gmail.com','lkajsdlkasd','kljaskd@gmail.com','klajsdl@gmail.com');

/*Table structure for table `ref_email_template_type` */

DROP TABLE IF EXISTS `ref_email_template_type`;

CREATE TABLE `ref_email_template_type` (
  `id` bigint(4) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `messageType` varchar(20) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `IX_email_template_type_id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_email_template_type` */

insert  into `ref_email_template_type`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`name`,`messageType`) values 
(1,'2020-06-21 19:05:54','Aenjay','2020-06-21 19:05:57','Aenjay','I','WebApp_v1',1,'askdjaks','kajsdasd');

/*Table structure for table `ref_holiday` */

DROP TABLE IF EXISTS `ref_holiday`;

CREATE TABLE `ref_holiday` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `holDate` date NOT NULL,
  `holDescription` varchar(50) CHARACTER SET latin1 NOT NULL,
  `holYear` varchar(4) CHARACTER SET latin1 NOT NULL,
  `mandatoryLeaveApply` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`,`companyid`) USING BTREE,
  KEY `IX_ref_holiday_id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_holiday` */

insert  into `ref_holiday`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyid`,`holDate`,`holDescription`,`holYear`,`mandatoryLeaveApply`) values 
(1,'2020-06-07 13:53:43','Testuser',NULL,NULL,'I','WebApp_v1',1,'2020-05-25','Hari Raya','2020',1),
(2,'2020-06-07 13:54:31','Testuser','2020-06-22 18:46:46','Aenjay','A','WebApp_v1',1,'2020-06-08','Agong Birthday','2020',1),
(3,'2020-06-22 18:28:53','Aenjay',NULL,NULL,'I','WebApp_v1',1,'2020-06-22','jalksjd askdja ','2020',1),
(4,'2020-06-22 18:29:34','Aenjay','2020-06-22 18:44:33','Aenjay','I','WebApp_v1',1,'2020-06-22','alksdalk','2020',1);

/*Table structure for table `ref_issue_type` */

DROP TABLE IF EXISTS `ref_issue_type`;

CREATE TABLE `ref_issue_type` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_issue_type` (`id`) USING BTREE,
  KEY `ID_issue_type_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `ID_issue_type_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_issue_type` */

insert  into `ref_issue_type`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`) values 
(1,'2020-06-07 13:39:05','','2020-06-21 15:17:34','Aenjay','A','WebApp_v1',1,'Manufacturer Defects'),
(2,'2020-06-07 13:39:41','',NULL,NULL,'A','WebApp_v1',1,'Product Damage'),
(3,'2020-06-07 13:40:33','',NULL,NULL,'A','WebApp_v1',1,'Rejected Product'),
(4,'2020-06-21 15:17:39','Aenjay',NULL,NULL,'I','WebApp_v1',1,'asdasd'),
(5,'2020-06-21 18:32:18','Aenjay',NULL,NULL,'I','WebApp_v1',1,'asdasd');

/*Table structure for table `ref_job_title` */

DROP TABLE IF EXISTS `ref_job_title`;

CREATE TABLE `ref_job_title` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_job_title_id` (`id`) USING BTREE,
  KEY `Fk_job_title_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `Fk_job_title_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_job_title` */

insert  into `ref_job_title`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`,`role_id`) values 
(1,'2020-06-07 13:41:17','Testuser','2020-06-25 21:53:14','Aenjay','A','WebApp_v1',1,'Manager','Senior Manager',7),
(2,'2020-06-07 13:42:03','Testuser','2020-06-25 21:52:44','Aenjay','A','WebApp_v1',1,'Executive','Junior Executive',7),
(3,'2020-06-07 14:00:11','Testuser','2020-06-27 05:32:41','Fajar Puji','A','WebApp_v1',1,'Director','Director Wong',7),
(4,'2020-06-21 11:16:35','Aenjay',NULL,NULL,'I','WebApp_v1',1,'LAKSDASD','KLASJDAS',NULL);

/*Table structure for table `ref_leave_approver` */

DROP TABLE IF EXISTS `ref_leave_approver`;

CREATE TABLE `ref_leave_approver` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `approvalDesc` varchar(100) NOT NULL COMMENT 'Type of Approval (for what purpose)',
  `approver1` bigint(20) NOT NULL COMMENT 'Supervisor Approver 1',
  `approver2` bigint(20) DEFAULT NULL COMMENT 'Supervisor Approver 1',
  `approver3` bigint(20) DEFAULT NULL COMMENT 'Supervisor Approver 1',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_leave_approver` (`id`) USING BTREE,
  KEY `FK_leave_approver_companyid` (`companyId`) USING BTREE,
  KEY `FK_leave_approver_approver1` (`approver1`) USING BTREE,
  KEY `FK_leave_approver_approver2` (`approver2`) USING BTREE,
  KEY `FK_leave_approver_approver3` (`approver3`) USING BTREE,
  CONSTRAINT `FK_leave_approver_approver1` FOREIGN KEY (`approver1`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_approver_approver2` FOREIGN KEY (`approver2`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_approver_approver3` FOREIGN KEY (`approver3`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_leave_approver_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_leave_approver` */

insert  into `ref_leave_approver`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`approvalDesc`,`approver1`,`approver2`,`approver3`) values 
(1,'2020-06-07 14:01:16','',NULL,NULL,'A','WebApp_v1',1,'Salesman Leave Approval',2,NULL,NULL),
(7,'2020-06-22 19:49:25','Aenjay','2020-06-22 19:49:45','Aenjay','A','WebApp_v1',1,'alsdlaksjd',1,2,NULL),
(8,'2020-06-23 06:33:52','Aenjay',NULL,NULL,'A','WebApp_v1',1,'askldjalksd',2,1,NULL);

/*Table structure for table `ref_leave_type` */

DROP TABLE IF EXISTS `ref_leave_type`;

CREATE TABLE `ref_leave_type` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_leave_type_id` (`id`) USING BTREE,
  KEY `FK_leave_type_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_leave_type_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_leave_type` */

insert  into `ref_leave_type`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`) values 
(1,'2020-06-07 13:43:55','','2020-06-21 15:16:50','Aenjay','A','WebApp_v1',1,'Annual Leave','ASDA'),
(2,'2020-06-07 13:43:05','','2020-06-21 15:16:40','Aenjay','A','WebApp_v1',1,'MC leave','MC leave'),
(3,'2020-06-07 13:43:26','',NULL,NULL,'A','WebApp_v1',1,'Maternity leave','2 months leave');

/*Table structure for table `ref_notice_announcement` */

DROP TABLE IF EXISTS `ref_notice_announcement`;

CREATE TABLE `ref_notice_announcement` (
  `id` bigint(5) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `publishDateTime` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `messages` varchar(255) NOT NULL COMMENT 'message content',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_notice_announcement_id` (`id`) USING BTREE,
  KEY `FK_notice_announcement_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_notice_announcement_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_notice_announcement` */

insert  into `ref_notice_announcement`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`publishDateTime`,`title`,`messages`) values 
(1,'2020-06-07 13:44:16','','2020-06-21 18:28:18','Aenjay','A','WebApp_v1',1,'2020-06-20 19:15:00','MCO Period','MCO Covid xxxxxxxxxxxxxxxxxxxxxxxx'),
(2,'2020-06-21 16:58:46','Aenjay','2020-06-21 17:51:01','Aenjay','I','WebApp_v1',1,'2020-06-24 18:15:00','With data labels','asdasdasd'),
(3,'2020-06-21 18:16:40','Aenjay','2020-06-21 18:28:04','Aenjay','I','WebApp_v1',1,'2020-06-21 06:19:00','asdasd','asdasd'),
(4,'2020-06-21 18:30:06','Aenjay','2020-06-21 18:30:10','Aenjay','A','WebApp_v1',1,'2020-06-21 18:30:00','asldkas;ld',';lkasdasd');

/*Table structure for table `ref_product_category` */

DROP TABLE IF EXISTS `ref_product_category`;

CREATE TABLE `ref_product_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_product_category_id` (`id`) USING BTREE,
  KEY `FK_product_category_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_product_category_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_product_category` */

insert  into `ref_product_category`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`description`,`name`) values 
(1,'2020-06-07 13:46:43','Testuser','2020-06-21 17:52:17','Aenjay','A','WebApp_v1',1,'Door lock','Door lock for apartment'),
(2,'2020-06-07 13:47:23','Testuser',NULL,NULL,'A','WebApp_v1',1,'Gate accessories','Outdor gate'),
(3,'2020-06-21 15:51:54','Aenjay','2020-06-21 15:51:57','Aenjay','I','WebApp_v1',1,'asdasd','askdjalsd');

/*Table structure for table `ref_product_uom` */

DROP TABLE IF EXISTS `ref_product_uom`;

CREATE TABLE `ref_product_uom` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `uomCode` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL COMMENT 'UOM desc',
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_product_uom_id` (`id`) USING BTREE,
  KEY `FK_product_uom_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_product_uom_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_product_uom` */

insert  into `ref_product_uom`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`uomCode`,`description`) values 
(1,'2020-06-07 13:45:09','',NULL,NULL,'A','WebApp_v1',1,'kg','kilo gram'),
(2,'2020-06-07 13:45:36','',NULL,NULL,'A','WebApp_v1',1,'pieces','unit'),
(3,'2020-06-07 13:45:54','','2020-06-22 07:37:49','Aenjay','A','WebApp_v1',1,'g','gram'),
(4,'2020-06-21 16:01:47','Aenjay',NULL,NULL,'I','WebApp_v1',1,'CM','Cente');

/*Table structure for table `ref_religions` */

DROP TABLE IF EXISTS `ref_religions`;

CREATE TABLE `ref_religions` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ref_religions` */

insert  into `ref_religions`(`id`,`name`) values 
(1,'Moslem'),
(2,'Christian'),
(3,'Buddhist'),
(4,'Catholic'),
(5,'Protestant'),
(6,'Hindu');

/*Table structure for table `ref_smtp_auth_type` */

DROP TABLE IF EXISTS `ref_smtp_auth_type`;

CREATE TABLE `ref_smtp_auth_type` (
  `code` varchar(20) NOT NULL,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `ref_smtp_auth_type` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(11,4),
(12,4),
(13,4),
(14,4),
(15,4),
(24,4),
(25,4),
(26,4),
(27,4),
(28,4),
(29,4),
(30,4),
(31,4),
(32,4),
(33,4),
(34,4),
(35,4),
(36,4),
(37,4),
(38,4),
(39,1),
(39,2),
(39,3),
(39,4),
(39,6),
(39,7),
(39,8),
(40,1),
(40,2),
(40,3),
(40,4),
(40,6),
(40,7),
(40,8),
(41,1),
(41,2),
(41,3),
(41,4),
(41,6),
(41,7),
(41,8),
(42,1),
(42,2),
(42,3),
(42,4),
(42,6),
(42,7),
(42,8),
(43,1),
(43,2),
(43,3),
(43,4),
(43,6),
(43,7),
(43,8),
(49,4),
(50,4),
(51,4),
(52,4),
(53,4),
(54,3),
(55,3),
(56,3),
(57,3),
(58,3),
(59,3),
(60,3),
(61,3),
(62,3),
(63,3),
(64,3),
(65,3),
(66,3),
(67,3),
(68,3),
(69,3),
(70,3),
(71,3),
(72,3),
(73,3),
(74,3),
(75,3),
(76,3),
(77,3),
(78,3),
(79,3),
(80,3),
(81,3),
(82,3),
(83,3),
(84,3),
(85,3),
(86,3),
(87,3),
(88,3),
(89,3),
(90,3),
(91,3),
(92,3),
(93,3),
(94,3),
(95,3),
(96,3),
(97,3),
(98,3),
(99,3),
(100,3),
(101,3),
(102,3),
(103,3),
(104,3),
(105,3),
(106,3),
(107,3),
(108,3),
(109,3),
(110,3),
(111,3),
(112,3),
(113,3),
(114,3),
(115,3),
(116,3),
(117,3),
(118,3),
(119,3),
(120,3),
(121,3),
(122,3),
(123,3),
(124,3),
(125,3),
(126,3),
(127,3),
(128,3),
(134,3),
(134,8),
(135,3),
(135,8),
(136,3),
(136,8),
(137,3),
(137,8),
(138,3),
(138,8),
(139,3),
(140,3),
(141,3),
(142,3),
(143,3),
(144,3),
(145,3),
(146,3),
(147,3),
(148,3),
(149,4),
(149,8),
(150,4),
(150,8),
(151,4),
(151,8),
(152,4),
(152,8),
(153,4),
(153,8),
(154,3),
(154,4),
(155,3),
(155,4),
(156,3),
(156,4),
(157,3),
(157,4),
(158,3),
(158,4),
(159,8),
(160,8),
(161,8),
(162,8),
(163,8),
(164,7),
(165,7),
(166,7),
(167,7),
(168,7),
(169,7),
(170,7),
(171,7),
(172,7),
(173,7),
(174,7),
(175,7),
(176,7),
(177,7),
(178,7),
(179,7),
(180,7),
(181,7),
(182,7),
(183,7),
(184,7),
(185,7),
(186,7),
(187,7),
(188,7),
(189,3),
(190,3),
(191,3),
(192,3),
(193,3),
(194,3),
(195,3),
(196,3),
(197,3),
(198,3),
(199,4),
(200,4),
(201,4),
(202,4),
(203,4),
(204,3),
(205,3),
(206,3),
(207,3),
(208,3),
(209,3),
(210,3),
(211,3),
(212,3),
(213,3);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyId` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_roles_companyid` (`companyId`),
  CONSTRAINT `FK_roles_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`companyId`,`name`,`name_ch`,`guard_name`,`created_at`,`updated_at`,`is_deleted`) values 
(1,1,'Salesman','营业额','web','2020-06-06 12:25:54','2020-06-25 21:49:30',0),
(2,1,'HR Manager','经理','web','2020-06-06 12:25:54','2020-06-25 21:49:17',0),
(3,1,'Admin','管理员','web','2020-06-06 12:25:54','2020-06-21 12:38:47',0),
(4,1,'Super Admin','超级管理员','web','2020-06-06 12:25:55','2020-06-20 14:21:42',0),
(5,1,'Users','添加数据','web','2020-06-20 14:10:43','2020-06-20 14:12:59',1),
(6,1,'Sale Manager','销售经理','web','2020-06-25 21:48:44','2020-06-25 21:53:27',0),
(7,1,'Employee','雇员','web','2020-06-25 21:50:12',NULL,0),
(8,1,'HR User','人力资源使用者','web','2020-06-26 00:50:36',NULL,0);

/*Table structure for table `salesman_quota` */

DROP TABLE IF EXISTS `salesman_quota`;

CREATE TABLE `salesman_quota` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `employeeId` bigint(20) NOT NULL COMMENT 'refer to salesman employee',
  `startDate` date DEFAULT NULL,
  `endtDate` date DEFAULT NULL,
  `quaterCode` varchar(20) DEFAULT NULL COMMENT ' Q1, Q2, Q3, Q4',
  `salesQuotaAmount` double(12,2) DEFAULT NULL COMMENT 'Sales Quota Set by Sales Manager',
  `actualSalesAmount` double(12,2) DEFAULT NULL COMMENT 'Sales Target Amount',
  `variancePercentage` double(100,2) DEFAULT NULL,
  `targetDateHit` date DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_salesman_quoate_id` (`id`) USING BTREE,
  KEY `FK_salesman_quoate_companyid` (`companyId`) USING BTREE,
  KEY `FK_salesman_quoate_employeeid` (`employeeId`) USING BTREE,
  CONSTRAINT `FK_salesman_quoate_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_salesman_quoate_employeeid` FOREIGN KEY (`employeeId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `salesman_quota` */

insert  into `salesman_quota`(`id`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyId`,`employeeId`,`startDate`,`endtDate`,`quaterCode`,`salesQuotaAmount`,`actualSalesAmount`,`variancePercentage`,`targetDateHit`) values 
(1,'2020-06-07 21:56:58','TestUser',NULL,NULL,0,'',1,1,'2020-04-05','2020-06-08','Q1',500000.00,NULL,NULL,'2020-06-10');

/*Table structure for table `sys_application_parameter` */

DROP TABLE IF EXISTS `sys_application_parameter`;

CREATE TABLE `sys_application_parameter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `parmCode` varchar(20) DEFAULT NULL,
  `parmDescription` varchar(255) DEFAULT NULL,
  `parmKey` varchar(100) DEFAULT NULL,
  `parmOption` varchar(255) DEFAULT NULL,
  `parmType` varchar(50) DEFAULT NULL,
  `parmValue` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `UK_qnqmokd4996b9a9epsndmkpdx` (`parmCode`) USING BTREE,
  UNIQUE KEY `UK_a9timw8qn0agbxhqp9bd6719u` (`parmKey`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_application_parameter` */

/*Table structure for table `sys_audit_trail` */

DROP TABLE IF EXISTS `sys_audit_trail`;

CREATE TABLE `sys_audit_trail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `affectedPrimaryKey` varchar(255) DEFAULT NULL,
  `newContent` longtext,
  `oldContent` longtext,
  `table_name` varchar(50) DEFAULT NULL,
  `tableColumn` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `FK_audit_trail_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_audit_trail_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_audit_trail` */

/*Table structure for table `sys_company` */

DROP TABLE IF EXISTS `sys_company`;

CREATE TABLE `sys_company` (
  `companyId` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'System Assing unique Company Code',
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` varchar(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `compRegNo` varchar(100) DEFAULT NULL,
  `gstRegNo` varchar(100) DEFAULT NULL,
  `bankName` varchar(100) DEFAULT NULL,
  `bankAcctNo` varchar(100) DEFAULT NULL,
  `billingAddress1` varchar(255) DEFAULT NULL,
  `billingAddress2` varchar(255) DEFAULT NULL,
  `billingAddress3` varchar(255) DEFAULT NULL,
  `billingPostcode` varchar(100) DEFAULT NULL,
  `billingState` varchar(100) DEFAULT NULL,
  `billingCountry` varchar(2) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `contactTelephone` varchar(100) DEFAULT NULL,
  `contactPerson` varchar(100) DEFAULT NULL,
  `defaultLanguage` varchar(100) DEFAULT NULL,
  `defaultTaxCode` bigint(20) DEFAULT NULL,
  `currencyId` bigint(20) DEFAULT NULL,
  `currentFinancialYear` year(4) DEFAULT '0000',
  `startFinancialPeriod` date DEFAULT NULL,
  `endFinancialPeriod` date DEFAULT NULL,
  `compLogoImagePath` varchar(255) DEFAULT NULL,
  `natureOfBusiness` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`companyId`) USING BTREE,
  KEY `IX_company_id` (`companyId`) USING BTREE,
  KEY `IX_company_name` (`companyName`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_company` */

insert  into `sys_company`(`companyId`,`creationTime`,`createdBy`,`updateTime`,`updatedBy`,`statusId`,`system`,`companyName`,`compRegNo`,`gstRegNo`,`bankName`,`bankAcctNo`,`billingAddress1`,`billingAddress2`,`billingAddress3`,`billingPostcode`,`billingState`,`billingCountry`,`website`,`email`,`fax`,`contactTelephone`,`contactPerson`,`defaultLanguage`,`defaultTaxCode`,`currencyId`,`currentFinancialYear`,`startFinancialPeriod`,`endFinancialPeriod`,`compLogoImagePath`,`natureOfBusiness`,`notes`) values 
(1,'2020-06-07 13:38:01','Testuser','2020-06-27 05:29:00','Fajar Puji','A','WebApp_v1','Top Notch Trading Sn Bhd','H-1023019','039400009','Maybank Berhad','asdjlak','asj alksjda','lkajs asidal askldj','alksjda asldkjas','as011','klajsda','MY','askdjaksa.com','asdasd@gmail.com','129831902','08192380192','10923810923','English',2901,20,2001,'2020-06-26','2020-06-26','100d6da8cc8afd928818f00a66953f42.png','sjdalksjd','Testing Company');

/*Table structure for table `sys_company_doc` */

DROP TABLE IF EXISTS `sys_company_doc`;

CREATE TABLE `sys_company_doc` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyId` bigint(20) NOT NULL,
  `contentType` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `displayName` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `size` bigint(20) NOT NULL,
  PRIMARY KEY (`id`,`companyId`) USING BTREE,
  KEY `IX_sys_company_doc_id` (`id`) USING BTREE,
  KEY `FK_sys_company_doc_companyid` (`companyId`) USING BTREE,
  CONSTRAINT `FK_sys_company_doc_companyid` FOREIGN KEY (`companyId`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_company_doc` */

/*Table structure for table `sys_doc_number` */

DROP TABLE IF EXISTS `sys_doc_number`;

CREATE TABLE `sys_doc_number` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `docType` varchar(5) DEFAULT NULL,
  `lastNumber` bigint(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_doc_number` */

/*Table structure for table `sys_job_scheduler_setting` */

DROP TABLE IF EXISTS `sys_job_scheduler_setting`;

CREATE TABLE `sys_job_scheduler_setting` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) DEFAULT NULL,
  `cronJobScheduleCode` varchar(255) DEFAULT NULL,
  `cronJobScheduleDesc` varchar(255) DEFAULT NULL,
  `scheduleJobCode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_sys_job_scheduler_setting_companyid` (`companyid`) USING BTREE,
  CONSTRAINT `FK_sys_job_scheduler_setting_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_job_scheduler_setting` */

/*Table structure for table `sys_parameter_setting` */

DROP TABLE IF EXISTS `sys_parameter_setting`;

CREATE TABLE `sys_parameter_setting` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `parmCode` varchar(20) DEFAULT NULL,
  `parmKey` varchar(100) DEFAULT NULL,
  `parmValue` varchar(255) DEFAULT NULL,
  `valueType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyid`) USING BTREE,
  KEY `FK_sys_parameter_setting_companyid` (`companyid`) USING BTREE,
  CONSTRAINT `FK_sys_parameter_setting_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_parameter_setting` */

/*Table structure for table `sys_scheduler_status` */

DROP TABLE IF EXISTS `sys_scheduler_status`;

CREATE TABLE `sys_scheduler_status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `log` longtext,
  `process_id` varchar(255) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_scheduler_status` */

/*Table structure for table `sys_smtp_server_settings` */

DROP TABLE IF EXISTS `sys_smtp_server_settings`;

CREATE TABLE `sys_smtp_server_settings` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `is_changed` bit(1) DEFAULT NULL,
  `server` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `port` smallint(6) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `authentication_type_code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `sys_smtp_server_settings` */

/*Table structure for table `work_journal_trans` */

DROP TABLE IF EXISTS `work_journal_trans`;

CREATE TABLE `work_journal_trans` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `tranDateTime` datetime NOT NULL,
  `reportType` varchar(10) NOT NULL COMMENT 'D = Daily , W = Weeky,  M = Monthly',
  `journalTask` varchar(255) DEFAULT NULL,
  `journalDesc` varchar(255) DEFAULT NULL,
  `completedTask` varchar(255) DEFAULT NULL,
  `uncompletedTask` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`companyid`) USING BTREE,
  KEY `IX_work_journal_trans_id` (`id`) USING BTREE,
  KEY `FK_work_journal_trans_companyid` (`companyid`) USING BTREE,
  CONSTRAINT `FK_work_journal_trans_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `work_journal_trans` */

/*Table structure for table `work_task_trans` */

DROP TABLE IF EXISTS `work_task_trans`;

CREATE TABLE `work_task_trans` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `creationTime` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL,
  `updateTime` datetime DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `statusId` int(10) NOT NULL,
  `system` varchar(20) NOT NULL,
  `companyid` bigint(20) NOT NULL,
  `tranDateTime` datetime NOT NULL,
  `tasklType` varchar(10) NOT NULL COMMENT 'K=Task, M=Meeting, T=Training',
  `taskDesc` varchar(255) NOT NULL,
  `taskDuration` varchar(255) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `startDateTime` datetime DEFAULT NULL,
  `endtDateTime` datetime DEFAULT NULL,
  `relatedCustomerId` bigint(20) DEFAULT NULL,
  `reminderDuration` int(10) DEFAULT NULL COMMENT '15 min, 30 min, 1 hour, 2 hours, 1 day',
  `notes` varchar(255) DEFAULT NULL,
  `approvalPerson` bigint(20) DEFAULT NULL COMMENT 'for task of meeting/training and etc outside',
  PRIMARY KEY (`id`,`companyid`) USING BTREE,
  KEY `IX_work_task_trans_id` (`id`) USING BTREE,
  KEY `FK_work_task_trans_companyid` (`companyid`) USING BTREE,
  KEY `FK_work_task_trans_approvalPerson` (`approvalPerson`) USING BTREE,
  KEY `FK_work_task_trans_relatedcustomer` (`relatedCustomerId`) USING BTREE,
  CONSTRAINT `FK_work_task_trans_approvalPerson` FOREIGN KEY (`approvalPerson`) REFERENCES `employee_master` (`id`),
  CONSTRAINT `FK_work_task_trans_companyid` FOREIGN KEY (`companyid`) REFERENCES `sys_company` (`companyId`),
  CONSTRAINT `FK_work_task_trans_relatedcustomer` FOREIGN KEY (`relatedCustomerId`) REFERENCES `customer_master` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

/*Data for the table `work_task_trans` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
