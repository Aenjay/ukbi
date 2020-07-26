<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-13 05:31:45 --> Severity: error --> Exception: Unable to locate the model you have specified: Baterai_model C:\xampp\htdocs\ukbi\system\core\Loader.php 348
ERROR - 2020-07-13 05:36:42 --> Severity: Notice --> Undefined variable: listBaterai C:\xampp\htdocs\ukbi\application\modules\mapping_soal\views\mapping-soal-data.php 52
ERROR - 2020-07-13 05:36:42 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\modules\mapping_soal\views\mapping-soal-data.php 52
ERROR - 2020-07-13 05:36:44 --> Severity: Notice --> Undefined variable: listBaterai C:\xampp\htdocs\ukbi\application\modules\mapping_soal\views\mapping-soal-data.php 52
ERROR - 2020-07-13 05:36:44 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\modules\mapping_soal\views\mapping-soal-data.php 52
ERROR - 2020-07-13 05:38:01 --> Query error: Table 'ukbi.baterai_soals' doesn't exist - Invalid query: SELECT `this`.`id`, `nomor_soal`, `b`.`nis`, `b`.`soal`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `baterai_soals` `this`
LEFT JOIN `banksoal` `b` ON `b`.`id` = `this`.`banksoal_id`
WHERE `this`.`baterai_id` IS NULL
AND `this`.`is_deleted` = 0
ORDER BY `nomor_soal` asc
 LIMIT 10
ERROR - 2020-07-13 05:38:03 --> Query error: Table 'ukbi.baterai_soals' doesn't exist - Invalid query: SELECT `this`.`id`, `nomor_soal`, `b`.`nis`, `b`.`soal`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `baterai_soals` `this`
LEFT JOIN `banksoal` `b` ON `b`.`id` = `this`.`banksoal_id`
WHERE `this`.`baterai_id` IS NULL
AND `this`.`is_deleted` = 0
ORDER BY `nomor_soal` asc
 LIMIT 10
ERROR - 2020-07-13 05:40:36 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 135
ERROR - 2020-07-13 05:44:58 --> Query error: Unknown column 'this.dimensi_tingkat_id' in 'on clause' - Invalid query: SELECT `this`.*, `d`.`nama_dimensi`, `t`.`nama_tingkat`
FROM `baterai_soal` `this`
LEFT JOIN `dimensi_tingkat` `dt` ON `dt`.`id` = `this`.`dimensi_tingkat_id`
LEFT JOIN `dimensi` `d` ON `d`.`id` = `dt`.`dimensi_id`
LEFT JOIN `tingkat` `t` ON `t`.`id` = `dt`.`tingkat_id`
WHERE `this`.`id` = '1'
AND `this`.`is_deleted` = 0
AND `dt`.`is_deleted` = 0
AND `d`.`is_deleted` = 0
AND `t`.`is_deleted` = 0
ERROR - 2020-07-13 06:25:19 --> Severity: Notice --> Undefined variable: nis C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 139
ERROR - 2020-07-13 06:25:19 --> Severity: Notice --> Undefined variable: nis C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 139
ERROR - 2020-07-13 06:25:19 --> Severity: Notice --> Undefined variable: nis C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 139
ERROR - 2020-07-13 06:25:19 --> Severity: Notice --> Undefined variable: nis C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 139
ERROR - 2020-07-13 06:25:19 --> Severity: Notice --> Undefined variable: nis C:\xampp\htdocs\ukbi\application\modules\mapping_soal\controllers\Mapping_soal.php 139
ERROR - 2020-07-13 06:25:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ukbi\system\core\Exceptions.php:271) C:\xampp\htdocs\ukbi\system\core\Common.php 570
ERROR - 2020-07-13 06:30:39 --> Query error: Unknown column 'updated_by' in 'field list' - Invalid query: INSERT INTO `baterai_soal` (`id`, `baterai_id`, `banksoal_id`, `updated_by`, `updated_date`) VALUES ('1', '1', 'JSHm5ETNxqs3jrfcFvd1OL7UQAVC9uP4', 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '2020-07-13 06:30:39')
ERROR - 2020-07-13 06:31:05 --> Query error: Duplicate entry '1' for key 'PRIMARY' - Invalid query: INSERT INTO `baterai_soal` (`id`, `baterai_id`, `banksoal_id`, `last_modified_by`, `last_modified_date`) VALUES ('1', '1', 'JSHm5ETNxqs3jrfcFvd1OL7UQAVC9uP4', 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '2020-07-13 06:31:05')
ERROR - 2020-07-13 06:33:36 --> Query error: Table 'ukbi.baterai_soals' doesn't exist - Invalid query: UPDATE `baterai_soals` SET `id` = '1', `baterai_id` = '1', `banksoal_id` = 'JSHm5ETNxqs3jrfcFvd1OL7UQAVC9uP4', `last_modified_by` = 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', `last_modified_date` = '2020-07-13 06:33:36'
WHERE `id` = '1'
ERROR - 2020-07-13 06:34:40 --> Query error: Table 'ukbi.baterai_soals' doesn't exist - Invalid query: UPDATE `baterai_soals` SET `id` = '1', `baterai_id` = '1', `banksoal_id` = 'JSHm5ETNxqs3jrfcFvd1OL7UQAVC9uP4', `last_modified_by` = 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', `last_modified_date` = '2020-07-13 06:34:40'
WHERE `id` = '1'
ERROR - 2020-07-13 08:05:58 --> Severity: error --> Exception: syntax error, unexpected '$i' (T_VARIABLE) C:\xampp\htdocs\ukbi\application\modules\mapping_soal\models\Mapping_soal_model.php 19
