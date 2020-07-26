<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-15 09:57:08 --> The upload path does not appear to be valid.
ERROR - 2020-07-15 09:58:05 --> Severity: Notice --> Undefined variable: file_suara_last C:\xampp\htdocs\ukbi\application\modules\baterai\controllers\Baterai.php 415
ERROR - 2020-07-15 09:58:05 --> Severity: Notice --> Undefined variable: file_suara_last C:\xampp\htdocs\ukbi\application\modules\baterai\controllers\Baterai.php 415
ERROR - 2020-07-15 11:50:03 --> Query error: Unknown column 'this.sequence' in 'order clause' - Invalid query: SELECT `this`.*, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `ej`.`jumlah_soal`, `ej`.`jumlah`, `ej`.`sequence`
FROM `baterai_estimasi_jawaban` `this`
LEFT JOIN `baterai` `b` ON `b`.`id` = `this`.`baterai_id`
LEFT JOIN `estimasi_jawaban` `ej` ON `ej`.`id` = `this`.`estimasi_jawaban_id`
WHERE `this`.`is_deleted` = 0
AND `b`.`is_deleted` = 0
AND `ej`.`is_deleted` = 0
ORDER BY `this`.`sequence` ASC
ERROR - 2020-07-15 11:51:32 --> Query error: Table 'ukbi.baterai_estimasi_jawabans' doesn't exist - Invalid query: SELECT `this`.*, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `ej`.`jumlah_soal`, `ej`.`jumlah`, `ej`.`sequence`
FROM `baterai_estimasi_jawabans` `this`
LEFT JOIN `baterai` `b` ON `b`.`id` = `this`.`baterai_id`
LEFT JOIN `estimasi_jawaban` `ej` ON `ej`.`id` = `this`.`estimasi_jawaban_id`
WHERE `this`.`is_deleted` = 0
AND `b`.`is_deleted` = 0
AND `ej`.`is_deleted` = 0
ORDER BY `ej`.`sequence` ASC
ERROR - 2020-07-15 11:51:36 --> Query error: Table 'ukbi.baterai_estimasi_jawabans' doesn't exist - Invalid query: SELECT `this`.*, `no1`, `no2`, `no3`, `no4`, `no5`, `no6`, `no7`, `ej`.`jumlah_soal`, `ej`.`jumlah`, `ej`.`sequence`
FROM `baterai_estimasi_jawabans` `this`
LEFT JOIN `baterai` `b` ON `b`.`id` = `this`.`baterai_id`
LEFT JOIN `estimasi_jawaban` `ej` ON `ej`.`id` = `this`.`estimasi_jawaban_id`
WHERE `this`.`is_deleted` = 0
AND `b`.`is_deleted` = 0
AND `ej`.`is_deleted` = 0
ORDER BY `ej`.`sequence` ASC
