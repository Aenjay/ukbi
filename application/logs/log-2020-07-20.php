<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-20 11:58:44 --> Severity: Notice --> Undefined variable: listCountry C:\xampp\htdocs\ukbi\application\modules\front\views\front-pendaftaran-data.php 229
ERROR - 2020-07-20 11:58:44 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\modules\front\views\front-pendaftaran-data.php 229
ERROR - 2020-07-20 12:00:07 --> Severity: Notice --> Undefined variable: listCountry C:\xampp\htdocs\ukbi\application\modules\front\views\front-pendaftaran-data.php 229
ERROR - 2020-07-20 12:00:07 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\ukbi\application\modules\front\views\front-pendaftaran-data.php 229
ERROR - 2020-07-20 16:40:53 --> 404 Page Not Found: 
ERROR - 2020-07-20 16:49:02 --> Query error: Unknown column 'this.id' in 'field list' - Invalid query: SELECT `this`.`id`, `nama_lokasi_ujian`
FROM `country` `this`
WHERE `this`.`is_deleted` = 0
ORDER BY `name` ASC
ERROR - 2020-07-20 16:49:21 --> Query error: Unknown column 'nama_lokasi_ujian' in 'field list' - Invalid query: SELECT `this`.`country_id`, `nama_lokasi_ujian`
FROM `country` `this`
WHERE `this`.`is_deleted` = 0
ORDER BY `name` ASC
ERROR - 2020-07-20 16:49:29 --> Query error: Unknown column 'this.is_deleted' in 'where clause' - Invalid query: SELECT `this`.`country_id`, `name`
FROM `country` `this`
WHERE `this`.`is_deleted` = 0
ORDER BY `name` ASC
