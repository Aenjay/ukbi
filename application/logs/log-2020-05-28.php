<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Ujian.php 183
ERROR - 2020-05-28 05:55:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:07:19 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jumlah_opsi`, `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:07:19 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jumlah_opsi`, `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:07:25 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jumlah_opsi`, `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:07:25 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jumlah_opsi`, `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:07:47 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jumlah_opsi`, `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:16:44 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:17:58 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:18:37 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `jenjang`
FROM `ujian`
WHERE `id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
ERROR - 2020-05-28 06:22:16 --> Query error: Unknown column 'sesi' in 'field list' - Invalid query: SELECT `this`.`id`, `no_pendaftaran`, `register_status`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `sesi`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `u`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 06:23:00 --> Query error: Unknown column 'ulr.ruang_id' in 'on clause' - Invalid query: SELECT `this`.`id`, `no_pendaftaran`, `register_status`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `u`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 06:24:59 --> Query error: Unknown column 'ulr.ruang_id' in 'on clause' - Invalid query: SELECT `this`.`id`, `no_pendaftaran`, `register_status`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `u`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 06:25:18 --> Query error: Unknown column 'r.is_deleted' in 'where clause' - Invalid query: SELECT `this`.`id`, `no_pendaftaran`, `register_status`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `u`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 06:26:43 --> Query error: Unknown column 's.jalur_pendaftaran_id' in 'where clause' - Invalid query: SELECT `this`.`id`, `no_pendaftaran`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `this`.`allow_detail`
FROM `siswa` `this`
WHERE `this`.`tahun_ajaran_id` = '4'
AND `register_status` IN('Lulus Verifikasi', 'Lulus Verifikasi 2')
AND jalur_pendaftaran_id IN (SELECT jalur_pendaftaran_id from jalur_pendaftaran_test where jalur_pendaftaran_id = `s`.`jalur_pendaftaran_id` and `test_id` = '1')
AND this.id NOT IN (
			SELECT siswa_id from ujian_list_siswa a 
			LEFT JOIN ujian_list_ruang b ON b.id = a.ujian_list_ruang_id 
			where a.ujian_id = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN' and `a`.`is_deleted` = '0' and b.is_deleted = '0')
			
ORDER BY `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:36:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Notice --> Undefined property: stdClass::$nama_jalur_pendaftaran C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta.php 194
ERROR - 2020-05-28 06:37:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-28 06:38:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 11 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = '1'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 10 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 13 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor_praktek` IS NOT NULL
AND `skor_praktek` != 0
AND `skor_praktek` != 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 12 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor` > 0
AND `skor_praktek` > 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 10 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 11 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = '1'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 13 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor_praktek` IS NOT NULL
AND `skor_praktek` != 0
AND `skor_praktek` != 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 12 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor` > 0
AND `skor_praktek` > 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 11 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = '1'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 13 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor_praktek` IS NOT NULL
AND `skor_praktek` != 0
AND `skor_praktek` != 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 10 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 12 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `skor` > 0
AND `skor_praktek` > 0
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:39:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '`asc` asc' at line 10 - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `tahun_ajaran` `ta` ON `ta`.`id` = `u`.`tahun_ajaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `u`.`start_time` `asc` asc
ERROR - 2020-05-28 06:40:16 --> Query error: Unknown column 'this.jenjang' in 'field list' - Invalid query: SELECT `uls`.`id`, `siswa_id`, `no_pendaftaran`, `this`.`jenjang`, `register_status`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `nama_ruang`, `sesi`, `nilai_teori`, `nilai_praktek`, `create_point`
FROM `siswa` `this`
LEFT JOIN `ujian_list_siswa` `uls` ON `uls`.`siswa_id` = `this`.`id` and `uls`.`is_deleted` = 0
LEFT JOIN `ujian` `u` ON `u`.`id` = `uls`.`ujian_id`
LEFT JOIN `ujian_list_ruang` `ulr` ON `ulr`.`id` = `uls`.`ujian_list_ruang_id` and `ulr`.`is_deleted` = 0
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id` and `r`.`is_deleted` = 0
WHERE `register_status` != 'Draft'
AND `this`.`is_deleted` = 0
AND `uls`.`is_deleted` = 0
AND `ulr`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 10:18:44 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `this`.`id`, `kode_ujian`, `nama_ujian`, `jenjang`, `start_time`, `end_time`, `status_ujian`
FROM `ujian` `this`
WHERE `this`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND this.id IN (
				SELECT uls.ujian_id from ujian_list_siswa uls
				left join ujian_list_ruang ulr on ulr.id = uls.ujian_list_ruang_id
				left join ujian u on u.id = uls.ujian_id
				where uls.is_deleted = 0 and `ulr`.`is_deleted` =0 and `u`.`is_deleted` =0 and uls.siswa_id = 'SLgyBai0IEvGqeftDFboQh6AWK7R5H8P'
			)
ORDER BY `start_time` asc
 LIMIT 10
ERROR - 2020-05-28 10:18:50 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `this`.`id`, `kode_ujian`, `nama_ujian`, `jenjang`, `start_time`, `end_time`, `status_ujian`
FROM `ujian` `this`
WHERE `this`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND this.id IN (
				SELECT uls.ujian_id from ujian_list_siswa uls
				left join ujian_list_ruang ulr on ulr.id = uls.ujian_list_ruang_id
				left join ujian u on u.id = uls.ujian_id
				where uls.is_deleted = 0 and `ulr`.`is_deleted` =0 and `u`.`is_deleted` =0 and uls.siswa_id = 'SLgyBai0IEvGqeftDFboQh6AWK7R5H8P'
			)
ORDER BY `start_time` asc
 LIMIT 10
ERROR - 2020-05-28 10:34:01 --> Query error: Table 'pmb_polbangtan.ujians' doesn't exist - Invalid query: SELECT `this`.`id`, `kode_ujian`, `nama_ujian`, `start_time`, `end_time`, `status_ujian`
FROM `ujians` `this`
WHERE `this`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND this.id IN (
				SELECT uls.ujian_id from ujian_list_siswa uls
				left join ujian u on u.id = uls.ujian_id
				where uls.is_deleted = 0 and `u`.`is_deleted` =0 and uls.siswa_id = 'SLgyBai0IEvGqeftDFboQh6AWK7R5H8P'
			)
ORDER BY `start_time` asc
 LIMIT 10
ERROR - 2020-05-28 10:43:51 --> Severity: Notice --> Undefined property: stdClass::$users_level_id C:\xampp\htdocs\polbangtan-pmb-cbt\application\models\Model.php 392
ERROR - 2020-05-28 10:43:53 --> Severity: Notice --> Undefined property: stdClass::$users_level_id C:\xampp\htdocs\polbangtan-pmb-cbt\application\models\Model.php 392
ERROR - 2020-05-28 10:45:22 --> Query error: Table 'pmb_polbangtan.ujians' doesn't exist - Invalid query: SELECT `this`.`id`, `kode_ujian`, `nama_ujian`, `start_time`, `end_time`, `status_ujian`
FROM `ujians` `this`
WHERE `this`.`tahun_ajaran_id` = '4'
AND `this`.`is_deleted` = 0
AND this.id IN (
				SELECT uls.ujian_id from ujian_list_siswa uls
				left join ujian u on u.id = uls.ujian_id
				where uls.is_deleted = 0 and `u`.`is_deleted` =0 and uls.siswa_id = 'Ei7kvLsWdXCKjfGAPqNJYT1c5I2tnuz8'
			)
ORDER BY `start_time` asc
 LIMIT 10
ERROR - 2020-05-28 11:22:49 --> 404 Page Not Found: 
ERROR - 2020-05-28 11:23:59 --> 404 Page Not Found: 
ERROR - 2020-05-28 11:34:57 --> Severity: Notice --> Undefined variable: ujian_id C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\controllers\Start.php 194
ERROR - 2020-05-28 11:37:16 --> Query error: Unknown column 'this.ujian_ids' in 'where clause' - Invalid query: SELECT `u`.*, `this`.`id` as `ujian_list_siswa_id`, `this`.`durasi_tersisa`, `this`.`last_bank_soal_id`, `this`.`token_in`, `this`.`create_point`, `this`.`is_finish`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`id` = '301'
AND `this`.`ujian_ids` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ERROR - 2020-05-28 11:37:43 --> Query error: Table 'pmb_polbangtan.ujian_list_siswas' doesn't exist - Invalid query: SELECT `u`.*, `this`.`id` as `ujian_list_siswa_id`, `this`.`durasi_tersisa`, `this`.`last_bank_soal_id`, `this`.`token_in`, `this`.`create_point`, `this`.`is_finish`
FROM `ujian_list_siswas` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`id` = '301'
AND `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ERROR - 2020-05-28 11:41:24 --> Query error: Table 'pmb_polbangtan.ujian_list_siswas' doesn't exist - Invalid query: SELECT `u`.*, `this`.`id` as `ujian_list_siswa_id`, `this`.`durasi_tersisa`, `this`.`last_bank_soal_id`, `this`.`token_in`, `this`.`create_point`, `this`.`is_finish`
FROM `ujian_list_siswas` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`id` = '301'
AND `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ERROR - 2020-05-28 11:44:29 --> Query error: Table 'pmb_polbangtan.ujian_list_siswsa' doesn't exist - Invalid query: SELECT `u`.*, `this`.`id` as `ujian_list_siswa_id`, `this`.`durasi_tersisa`, `this`.`last_bank_soal_id`, `this`.`token_in`, `this`.`create_point`, `this`.`is_finish`
FROM `ujian_list_siswsa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`id` IS NULL
AND `this`.`ujian_id` IS NULL
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ERROR - 2020-05-28 11:45:30 --> Query error: Table 'pmb_polbangtan.ujian_list_siswasa' doesn't exist - Invalid query: SELECT `u`.*, `this`.`id` as `ujian_list_siswa_id`, `this`.`durasi_tersisa`, `this`.`last_bank_soal_id`, `this`.`token_in`, `this`.`create_point`, `this`.`is_finish`
FROM `ujian_list_siswasa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`id` IS NULL
AND `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ERROR - 2020-05-28 11:50:14 --> Query error: Unknown column 'nama_ruang' in 'order clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 11:50:35 --> Query error: Unknown column 'nama_ruang' in 'order clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 11:50:35 --> Query error: Unknown column 'nama_ruang' in 'order clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 11:50:38 --> Query error: Unknown column 'nama_ruang' in 'order clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 11:50:39 --> Query error: Unknown column 'nama_ruang' in 'order clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 12:46:29 --> Severity: Notice --> Undefined variable: message C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\controllers\Start.php 46
ERROR - 2020-05-28 12:50:03 --> Severity: Notice --> Undefined variable: ujian C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-welcome.php 4
ERROR - 2020-05-28 12:50:03 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-welcome.php 4
ERROR - 2020-05-28 12:51:01 --> Severity: Notice --> Undefined variable: ujian C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-message.php 4
ERROR - 2020-05-28 12:51:01 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-message.php 4
ERROR - 2020-05-28 12:51:22 --> Severity: Notice --> Undefined variable: ujian C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-message.php 4
ERROR - 2020-05-28 12:51:22 --> Severity: Notice --> Trying to get property 'id' of non-object C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\start\views\start-message.php 4
ERROR - 2020-05-28 13:00:24 --> Query error: Unknown column 'this.jalur_pendaftaran_id' in 'on clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `nama_jalur_pendaftaran`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `this`.`jalur_pendaftaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 13:00:28 --> Query error: Unknown column 'this.jalur_pendaftaran_id' in 'on clause' - Invalid query: SELECT `this`.`id`, `this`.`siswa_id`, `no_pendaftaran`, `sw`.`nama_siswa`, `sw`.`jenis_kelamin`, `tanggal_lahir`, `nama_jalur_pendaftaran`, `start_time_test`, `this`.`is_finish`, `this`.`skor`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`, `u`.`status_ujian`
FROM `ujian_list_siswa` `this`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
LEFT JOIN `siswa` `sw` ON `sw`.`id` = `this`.`siswa_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `this`.`jalur_pendaftaran_id`
WHERE `this`.`ujian_id` = '5G4CLrBVOWlHoftjd7cEIgsxbz0nD9yN'
AND `this`.`create_point` = 1
AND `this`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `sw`.`is_deleted` = 0
ORDER BY `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 13:00:38 --> Severity: Notice --> Undefined property: stdClass::$register_status C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\ujian\controllers\Peserta_mengikuti.php 72
ERROR - 2020-05-28 13:27:09 --> Query error: Unknown column 'this.jenjang' in 'field list' - Invalid query: SELECT `uls`.`id`, `siswa_id`, `no_pendaftaran`, `this`.`jenjang`, `register_status`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `nama_ruang`, `sesi`, `nilai_teori`, `nilai_praktek`, `create_point`
FROM `siswa` `this`
LEFT JOIN `ujian_list_siswa` `uls` ON `uls`.`siswa_id` = `this`.`id` and `uls`.`is_deleted` = 0
LEFT JOIN `ujian` `u` ON `u`.`id` = `uls`.`ujian_id`
LEFT JOIN `ujian_list_ruang` `ulr` ON `ulr`.`id` = `uls`.`ujian_list_ruang_id` and `ulr`.`is_deleted` = 0
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id` and `r`.`is_deleted` = 0
WHERE `register_status` != 'Draft'
AND `this`.`is_deleted` = 0
AND `uls`.`is_deleted` = 0
AND `ulr`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 13:27:15 --> Query error: Unknown column 'this.jenjang' in 'field list' - Invalid query: SELECT `uls`.`id`, `siswa_id`, `no_pendaftaran`, `this`.`jenjang`, `register_status`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `nama_ruang`, `sesi`, `nilai_teori`, `nilai_praktek`, `create_point`
FROM `siswa` `this`
LEFT JOIN `ujian_list_siswa` `uls` ON `uls`.`siswa_id` = `this`.`id` and `uls`.`is_deleted` = 0
LEFT JOIN `ujian` `u` ON `u`.`id` = `uls`.`ujian_id`
LEFT JOIN `ujian_list_ruang` `ulr` ON `ulr`.`id` = `uls`.`ujian_list_ruang_id` and `ulr`.`is_deleted` = 0
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id` and `r`.`is_deleted` = 0
WHERE `register_status` != 'Draft'
AND `this`.`is_deleted` = 0
AND `uls`.`is_deleted` = 0
AND `ulr`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ORDER BY `nama_ruang`, `sesi`, `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 13:34:08 --> Query error: Unknown column 'nama_jalur_pendaftaran' in 'field list' - Invalid query: SELECT `uls`.`id`, `siswa_id`, `no_pendaftaran`, `register_status`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `nama_jalur_pendaftaran`, `is_finish`, `nilai_teori`, `create_point`
FROM `siswa` `this`
LEFT JOIN `ujian_list_siswa` `uls` ON `uls`.`siswa_id` = `this`.`id` and `uls`.`is_deleted` = 0
LEFT JOIN `ujian` `u` ON `u`.`id` = `uls`.`ujian_id`
WHERE `this`.`is_deleted` = 0
AND `uls`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
ORDER BY `nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-28 13:52:03 --> Query error: Table 'pmb_polbangtan.mapels' doesn't exist - Invalid query: SELECT count(id) as x
FROM `mapels`
WHERE `is_deleted` = '0'
ERROR - 2020-05-28 13:52:32 --> Query error: Table 'pmb_polbangtan.mapels' doesn't exist - Invalid query: SELECT count(id) as x
FROM `mapels`
WHERE `is_deleted` = '0'
ERROR - 2020-05-28 13:52:33 --> Query error: Table 'pmb_polbangtan.mapels' doesn't exist - Invalid query: SELECT count(id) as x
FROM `mapels`
WHERE `is_deleted` = '0'
ERROR - 2020-05-28 16:18:48 --> 404 Page Not Found: 
ERROR - 2020-05-28 16:20:27 --> Query error: Table 'pmb_polbangtan.users_list_mapel' doesn't exist - Invalid query: SELECT `this`.*, `t`.`nama_tahun_ajaran`
FROM `mapel` `this`
LEFT JOIN `tahun_ajaran` `t` ON `t`.`id` = `this`.`tahun_ajaran_id`
WHERE `this`.`is_deleted` = 0
AND `tahun_ajaran_id` = '4'
AND this.id IN (
				SELECT mapel_id from users_list_mapel where users_id = '9CWUwK8uTp4EQgBM2dmhNa1cYbA3l7Fk' and `tahun_ajaran_id` = '4' and is_deleted = '0'
				)
ORDER BY `this`.`kode_mapel` ASC
ERROR - 2020-05-28 16:20:39 --> Query error: Table 'pmb_polbangtan.users_list_mapel' doesn't exist - Invalid query: SELECT `this`.*, `t`.`nama_tahun_ajaran`
FROM `mapel` `this`
LEFT JOIN `tahun_ajaran` `t` ON `t`.`id` = `this`.`tahun_ajaran_id`
WHERE `this`.`is_deleted` = 0
AND `tahun_ajaran_id` = '4'
AND this.id IN (
				SELECT mapel_id from users_list_mapel where users_id = '9CWUwK8uTp4EQgBM2dmhNa1cYbA3l7Fk' and `tahun_ajaran_id` = '4' and is_deleted = '0'
				)
ORDER BY `this`.`kode_mapel` ASC
ERROR - 2020-05-28 16:20:46 --> Query error: Table 'pmb_polbangtan.users_list_mapel' doesn't exist - Invalid query: SELECT `this`.*, `t`.`nama_tahun_ajaran`
FROM `mapel` `this`
LEFT JOIN `tahun_ajaran` `t` ON `t`.`id` = `this`.`tahun_ajaran_id`
WHERE `this`.`is_deleted` = 0
AND `tahun_ajaran_id` = '4'
AND this.id IN (
				SELECT mapel_id from users_list_mapel where users_id = '9CWUwK8uTp4EQgBM2dmhNa1cYbA3l7Fk' and `tahun_ajaran_id` = '4' and is_deleted = '0'
				)
ORDER BY `this`.`kode_mapel` ASC
ERROR - 2020-05-28 16:21:19 --> Query error: Table 'pmb_polbangtan.users_list_mapel' doesn't exist - Invalid query: SELECT `this`.*, `t`.`nama_tahun_ajaran`
FROM `mapel` `this`
LEFT JOIN `tahun_ajaran` `t` ON `t`.`id` = `this`.`tahun_ajaran_id`
WHERE `this`.`is_deleted` = 0
AND `tahun_ajaran_id` = '4'
AND this.id IN (
				SELECT mapel_id from users_list_mapel where users_id = '9CWUwK8uTp4EQgBM2dmhNa1cYbA3l7Fk' and `tahun_ajaran_id` = '4' and is_deleted = '0'
				)
ORDER BY `this`.`kode_mapel` ASC
