<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-24 17:42:22 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\job_title\views\job-title-data.php 74
ERROR - 2020-06-24 17:42:22 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\job_title\views\job-title-data.php 74
ERROR - 2020-06-24 17:42:22 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\job_title\views\job-title-data.php 74
ERROR - 2020-06-24 17:42:22 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\Salesman\application\modules\job_title\views\job-title-data.php 74
ERROR - 2020-06-24 17:51:13 --> Could not find the language line "employeeCode"
ERROR - 2020-06-24 17:51:18 --> Could not find the language line "employeeCode"
ERROR - 2020-06-24 17:51:33 --> Could not find the language line "employeeCode"
ERROR - 2020-06-24 17:51:51 --> Could not find the language line "employeeCode"
ERROR - 2020-06-24 18:33:37 --> Could not find the language line "select "
ERROR - 2020-06-24 18:35:09 --> Could not find the language line "select "
ERROR - 2020-06-24 18:35:57 --> Could not find the language line "select "
ERROR - 2020-06-24 18:55:25 --> Could not find the language line "select "
ERROR - 2020-06-24 18:55:31 --> Query error: Table 'kasalesappv4.product' doesn't exist - Invalid query: SELECT `this`.`id`, `productName`, `productCode`, `brandName`, `pc`.`name` as `product_category_name`, `pu`.`name` as `product_uom_name`, `unitPrice`, `retailPrice`
FROM `product` `this`
LEFT JOIN `product_category` `pc` ON `pc`.`id` = `this`.`productCategory`
LEFT JOIN `product_uom` `pu` ON `pu`.`id` = `this`.`uom`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `productName` asc
 LIMIT 10
ERROR - 2020-06-24 18:55:58 --> Query error: Table 'kasalesappv4.product_category' doesn't exist - Invalid query: SELECT `this`.`id`, `productName`, `productCode`, `brandName`, `pc`.`name` as `product_category_name`, `pu`.`name` as `product_uom_name`, `unitPrice`, `retailPrice`
FROM `product_master` `this`
LEFT JOIN `product_category` `pc` ON `pc`.`id` = `this`.`productCategory`
LEFT JOIN `product_uom` `pu` ON `pu`.`id` = `this`.`uom`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `productName` asc
 LIMIT 10
ERROR - 2020-06-24 18:56:44 --> Query error: Unknown column 'pu.name' in 'field list' - Invalid query: SELECT `this`.`id`, `productName`, `productCode`, `brandName`, `pc`.`name` as `product_category_name`, `pu`.`name` as `product_uom_name`, `unitPrice`, `retailPrice`
FROM `product_master` `this`
LEFT JOIN `ref_product_category` `pc` ON `pc`.`id` = `this`.`productCategory`
LEFT JOIN `ref_product_uom` `pu` ON `pu`.`id` = `this`.`uom`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `productName` asc
 LIMIT 10
ERROR - 2020-06-24 18:57:27 --> Query error: Column 'companyId' in where clause is ambiguous - Invalid query: SELECT `this`.`id`, `productName`, `productCode`, `brandName`, `pc`.`name` as `product_category_name`, `pu`.`description` as `product_uom_name`, `unitPrice`, `retailPrice`
FROM `product_master` `this`
LEFT JOIN `ref_product_category` `pc` ON `pc`.`id` = `this`.`productCategory`
LEFT JOIN `ref_product_uom` `pu` ON `pu`.`id` = `this`.`uom`
WHERE `this`.`system` = 'WebApp_v1'
AND `this`.`statusId` = 'A'
AND `companyId` = '1'
ORDER BY `productName` asc
 LIMIT 10
ERROR - 2020-06-24 19:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'order by description asc' at line 3 - Invalid query: SELECT `id`, `name`
FROM `ref_product_category`
WHERE `system` = 'WebApp_v1' and `statusId` = 'A' and `companyId` = '1' and order by description asc
ERROR - 2020-06-24 20:07:07 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\Salesman\application\modules\product\controllers\Product.php 142
ERROR - 2020-06-24 21:08:50 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\Salesman\application\modules\product\controllers\Product.php 192
ERROR - 2020-06-24 21:09:02 --> Severity: Notice --> Undefined index: file C:\xampp\htdocs\Salesman\application\modules\product\controllers\Product.php 196
ERROR - 2020-06-24 21:17:30 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ')' C:\xampp\htdocs\Salesman\application\modules\product\controllers\Product.php 210
ERROR - 2020-06-24 21:41:19 --> Could not find the language line "form_validation_"
ERROR - 2020-06-24 21:41:22 --> Could not find the language line "form_validation_"
ERROR - 2020-06-24 22:33:10 --> Could not find the language line "productCode"
ERROR - 2020-06-24 22:33:47 --> Could not find the language line "productCode"
ERROR - 2020-06-24 22:34:37 --> Could not find the language line "productCode"
ERROR - 2020-06-24 22:55:19 --> Could not find the language line "productCode"
ERROR - 2020-06-24 22:57:23 --> Query error: Duplicate entry '28-1' for key 'PRIMARY' - Invalid query: UPDATE `product_master_doc` SET `id` = '28'
ERROR - 2020-06-24 22:57:28 --> Query error: Duplicate entry '28-1' for key 'PRIMARY' - Invalid query: UPDATE `product_master_doc` SET `id` = '28'
ERROR - 2020-06-24 23:00:07 --> Could not find the language line "select "
ERROR - 2020-06-24 23:01:34 --> Could not find the language line "select "
ERROR - 2020-06-24 23:01:46 --> Could not find the language line "select "
ERROR - 2020-06-24 23:23:18 --> Severity: error --> Exception: Unable to locate the model you have specified: Product_model C:\xampp\htdocs\Salesman\system\core\Loader.php 348
ERROR - 2020-06-24 23:29:19 --> Query error: Unknown column 'this.productBrochureId' in 'where clause' - Invalid query: SELECT `this`.*
FROM `product_master_doc` `this`
WHERE `this`.`productBrochureId` = '1'
AND `this`.`statusId` = 'A'
AND `this`.`system` = 'WebApp_v1'
AND `this`.`companyId` = '1'
ERROR - 2020-06-24 23:29:54 --> Query error: Column 'productId' cannot be null - Invalid query: INSERT INTO `product_master_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `productId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Aenjay', '2020-06-24 23:29:54', '1', NULL, 'baik1.png', '0.3153562638726788', 'png', 371463)
ERROR - 2020-06-24 23:30:25 --> Query error: Column 'productId' cannot be null - Invalid query: INSERT INTO `product_master_doc` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `productId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Aenjay', '2020-06-24 23:30:25', '1', NULL, 'baik2.png', '0.7808139929787132', 'png', 371463)
ERROR - 2020-06-24 23:31:28 --> The upload path does not appear to be valid.
ERROR - 2020-06-24 23:32:52 --> The upload path does not appear to be valid.
ERROR - 2020-06-24 23:33:15 --> The upload path does not appear to be valid.
ERROR - 2020-06-24 23:34:17 --> The upload path does not appear to be valid.
ERROR - 2020-06-24 23:36:24 --> The upload path does not appear to be valid.
ERROR - 2020-06-24 23:36:55 --> Query error: Table 'kasalesappv4.product_brochure_docs' doesn't exist - Invalid query: INSERT INTO `product_brochure_docs` (`system`, `statusId`, `createdBy`, `creationTime`, `companyId`, `productBrochureId`, `filename`, `token_upload`, `contentType`, `size`) VALUES ('WebApp_v1', 'A', 'Aenjay', '2020-06-24 23:36:55', '1', '1', 'buruk.jpeg', '0.9209205662343842', 'jpeg', 15854)
