<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-10 09:27:51 --> Severity: error --> Exception: Call to undefined method Model::CheckIsAjax() C:\xampp\htdocs\ukbi\application\modules\dashboard\controllers\Dashboard.php 14
ERROR - 2020-07-10 10:29:29 --> Severity: error --> Exception: Class 'Dimensi_model' not found C:\xampp\htdocs\ukbi\application\third_party\MX\Loader.php 228
ERROR - 2020-07-10 10:51:01 --> Severity: Notice --> Undefined property: Dimensi::$module C:\xampp\htdocs\ukbi\application\modules\dimensi\controllers\Dimensi.php 200
ERROR - 2020-07-10 10:51:01 --> Query error: Unknown column 'users_level_id' in 'field list' - Invalid query: INSERT INTO `users_log` (`user_id`, `users_level_id`, `created_date`, `module`, `description`) VALUES ('BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '99999', '2020-07-10 10:51:01', '', 'Tambah data pada id = 2')
ERROR - 2020-07-10 10:51:53 --> Query error: Unknown column 'users_level_id' in 'field list' - Invalid query: INSERT INTO `users_log` (`user_id`, `users_level_id`, `created_date`, `module`, `description`) VALUES ('BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '99999', '2020-07-10 10:51:53', 'Dimensi', 'Tambah data pada id = 1')
ERROR - 2020-07-10 11:08:28 --> Query error: Unknown column 'nama_tingkat' in 'field list' - Invalid query: SELECT `id`, `nama_tingkat`, `allow_detail`, `allow_edit`, `allow_delete`
FROM `dimensi` `this`
WHERE `this`.`is_deleted` = 0
ORDER BY `this`.`sequence` asc
 LIMIT 10
ERROR - 2020-07-10 11:08:35 --> Query error: Unknown column 'nama_tingkat' in 'field list' - Invalid query: SELECT `id`, `nama_tingkat`, `allow_detail`, `allow_edit`, `allow_delete`
FROM `dimensi` `this`
WHERE `this`.`is_deleted` = 0
ORDER BY `this`.`sequence` asc
 LIMIT 10
ERROR - 2020-07-10 11:12:08 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\ukbi\system\database\DB_driver.php 1477
ERROR - 2020-07-10 11:12:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' 5, 'Dimensi 1 Sulit Banget', 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '2020-07-10 11' at line 1 - Invalid query: INSERT INTO `dimensi_tingkat` (`dimensi_id`, `tingkat_id`, `nama_dimensi_tingkat`, `created_by`, `created_date`) VALUES (, 5, 'Dimensi 1 Sulit Banget', 'BVQw1I6zFgW5K3lOU0tdCSELMpvZ7oaG', '2020-07-10 11:12:07')
ERROR - 2020-07-10 11:19:38 --> Query error: Table 'ukbi.nama_dimensi_tingkat' doesn't exist - Invalid query: UPDATE `nama_dimensi_tingkat` SET `nama_dimensi_tingkat` = 'Dimensi 1 Sulit Banget'
WHERE `id` = '5'
ERROR - 2020-07-10 14:28:36 --> Query error: Unknown column 'teslet' in 'field list' - Invalid query: SELECT `this`.`id`, `d`.`nama_dimensi`, `t`.`nama_tingkat`, `this`.`nama_baterai`, `karakter_butir`, `teslet`, `jumlah_soal`, `nomor_awal_soal`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `baterai` `this`
LEFT JOIN `dimensi_tingkat` `dt` ON `dt`.`id` = `this`.`dimensi_tingkat_id`
LEFT JOIN `dimensi` `d` ON `d`.`id` = `dt`.`dimensi_id`
LEFT JOIN `tingkat` `t` ON `t`.`id` = `dt`.`tingkat_id`
WHERE `this`.`is_deleted` = 0
AND `dt`.`is_deleted` = 0
AND `d`.`is_deleted` = 0
AND `t`.`is_deleted` = 0
ORDER BY `this`.`sequence` asc
 LIMIT 10
ERROR - 2020-07-10 14:28:40 --> Query error: Unknown column 'teslet' in 'field list' - Invalid query: SELECT `this`.`id`, `d`.`nama_dimensi`, `t`.`nama_tingkat`, `this`.`nama_baterai`, `karakter_butir`, `teslet`, `jumlah_soal`, `nomor_awal_soal`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `baterai` `this`
LEFT JOIN `dimensi_tingkat` `dt` ON `dt`.`id` = `this`.`dimensi_tingkat_id`
LEFT JOIN `dimensi` `d` ON `d`.`id` = `dt`.`dimensi_id`
LEFT JOIN `tingkat` `t` ON `t`.`id` = `dt`.`tingkat_id`
WHERE `this`.`is_deleted` = 0
AND `dt`.`is_deleted` = 0
AND `d`.`is_deleted` = 0
AND `t`.`is_deleted` = 0
ORDER BY `this`.`sequence` asc
 LIMIT 10
