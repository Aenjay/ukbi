<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-27 19:54:38 --> Query error: Table 'pmb_polbangtan.ruang' doesn't exist - Invalid query: SELECT count(this.id) as x
FROM `ujian_list_siswa` `this`
LEFT JOIN `siswa` `s` ON `s`.`id` = `this`.`siswa_id`
LEFT JOIN `ujian_list_ruang` `ulr` ON `ulr`.`id` = `this`.`ujian_list_ruang_id`
LEFT JOIN `ruang` `r` ON `r`.`id` = `ulr`.`ruang_id`
LEFT JOIN `ujian` `u` ON `u`.`id` = `this`.`ujian_id`
WHERE `this`.`is_deleted` = 0
AND `s`.`is_deleted` = 0
AND `ulr`.`is_deleted` = 0
AND `r`.`is_deleted` = 0
AND `u`.`is_deleted` = 0
AND `u`.`tahun_ajaran_id` = '4'
ERROR - 2020-05-27 19:56:20 --> Query error: Table 'pmb_polbangtan.mapel' doesn't exist - Invalid query: SELECT count(this.id) as x
FROM `mapel` `this`
LEFT JOIN `tahun_ajaran` `t` ON `t`.`id` = `this`.`tahun_ajaran_id`
WHERE `this`.`is_deleted` = 0
AND `tahun_ajaran_id` = '4'
ORDER BY `this`.`kode_mapel` ASC
ERROR - 2020-05-27 20:06:31 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `s`.`id`, `register_status`, `jenjang`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `enumeration` `ej` ON `ej`.`id` = `s`.`enum_jenis_penerimaan_siswa_id`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri')
AND `s`.`tahun_ajaran_id` = '4'
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:06:41 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `s`.`id`, `register_status`, `jenjang`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `enumeration` `ej` ON `ej`.`id` = `s`.`enum_jenis_penerimaan_siswa_id`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri')
AND `s`.`tahun_ajaran_id` = '4'
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:10:01 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `s`.`id`, `register_status`, `jenjang`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `enumeration` `ej` ON `ej`.`id` = `s`.`enum_jenis_penerimaan_siswa_id`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri')
AND `s`.`tahun_ajaran_id` = '4'
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:10:20 --> Query error: Unknown column 's.enum_jenis_penerimaan_siswa_id' in 'on clause' - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `enumeration` `ej` ON `ej`.`id` = `s`.`enum_jenis_penerimaan_siswa_id`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri')
AND `s`.`tahun_ajaran_id` = '4'
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:10:20 --> Query error: Unknown column 's.enum_jenis_penerimaan_siswa_id' in 'on clause' - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `enumeration` `ej` ON `ej`.`id` = `s`.`enum_jenis_penerimaan_siswa_id`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri')
AND `s`.`tahun_ajaran_id` = '4'
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:10:39 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:39 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\peserta\controllers\Peserta.php 54
ERROR - 2020-05-27 20:10:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-27 20:17:00 --> Query error: Unknown column 'this.jalur_pendaftaran_id' in 'where clause' - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri', 'Pindah Jalur Pendaftaran')
AND `s`.`tahun_ajaran_id` = '4'
AND jalur_pendaftaran_id IN (SELECT jalur_pendaftaran_id from jalur_pendaftaran_test where jalur_pendaftaran_id = `this`.`jalur_pendaftaran_id` and `test_id` = '1')
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:17:01 --> Query error: Unknown column 'this.jalur_pendaftaran_id' in 'where clause' - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri', 'Pindah Jalur Pendaftaran')
AND `s`.`tahun_ajaran_id` = '4'
AND jalur_pendaftaran_id IN (SELECT jalur_pendaftaran_id from jalur_pendaftaran_test where jalur_pendaftaran_id = `this`.`jalur_pendaftaran_id` and `test_id` = '1')
ORDER BY `st`.`nama_semester`, `s`.`nama_siswa` asc
 LIMIT 10
ERROR - 2020-05-27 20:17:41 --> Query error: Table 'pmb_polbangtan.ruang' doesn't exist - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri', 'Pindah Jalur Pendaftaran')
AND `s`.`tahun_ajaran_id` = '4'
AND jalur_pendaftaran_id IN (SELECT jalur_pendaftaran_id from jalur_pendaftaran_test where jalur_pendaftaran_id = `s`.`jalur_pendaftaran_id` and `test_id` = '1')
AND s.id NOT IN (
				SELECT siswa_id from ujian_list_siswa uls 
				left join ujian_list_ruang ulr on ulr.id = uls.ujian_list_ruang_id
				left join ruang r on r.id = ulr.ruang_id
				left join ujian u on u.id = uls.ujian_id
				where uls.is_deleted = '0' and `ulr`.`is_deleted` = '0' and `r`.`is_deleted` = '0' and u.is_deleted = '0'
			)
ORDER BY `nama_jalur_pendaftaran` ASC
 LIMIT 10
ERROR - 2020-05-27 20:19:41 --> Query error: Table 'pmb_polbangtan.ruang' doesn't exist - Invalid query: SELECT `s`.`id`, `register_status`, `nama_jalur_pendaftaran`, `no_pendaftaran`, `s`.`nama_siswa`, `s`.`jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `s`.`allow_detail`, `s`.`allow_edit`, `s`.`allow_delete`, `st`.`nama_semester`, TIMESTAMPDIFF(YEAR, `tanggal_lahir`, DATE('2020-05-27')) as umur, `register_allow_edit`
FROM `siswa` `s`
LEFT JOIN `semester` `st` ON `st`.`id` = `s`.`semester_id`
LEFT JOIN `jalur_pendaftaran` `jp` ON `jp`.`id` = `s`.`jalur_pendaftaran_id`
WHERE `s`.`is_deleted` = 0
AND `register_status` NOT IN('Draft', 'Mengundurkan Diri', 'Pindah Jalur Pendaftaran')
AND `s`.`tahun_ajaran_id` = '4'
AND jalur_pendaftaran_id IN (SELECT jalur_pendaftaran_id from jalur_pendaftaran_test where jalur_pendaftaran_id = `s`.`jalur_pendaftaran_id` and `test_id` = '1')
AND s.id NOT IN (
					SELECT siswa_id from ujian_list_siswa uls 
					left join ujian_list_ruang ulr on ulr.id = uls.ujian_list_ruang_id
					left join ruang r on r.id = ulr.ruang_id
					left join ujian u on u.id = uls.ujian_id
					where uls.is_deleted = '0' and `ulr`.`is_deleted` = '0' and `r`.`is_deleted` = '0' and u.is_deleted = '0'
				)
ORDER BY `nama_jalur_pendaftaran` ASC
 LIMIT 10
ERROR - 2020-05-27 20:35:45 --> Query error: Table 'pmb_polbangtan.mapel' doesn't exist - Invalid query: SELECT `id`, `kode_mapel`, `nama_mapel`, `allow_detail`, `allow_edit`, `allow_delete`
FROM `mapel`
WHERE `is_deleted` = 0
AND `tahun_ajaran_id` = '4'
ORDER BY `kode_mapel` asc
 LIMIT 10
ERROR - 2020-05-27 20:35:49 --> Query error: Table 'pmb_polbangtan.mapel' doesn't exist - Invalid query: SELECT `id`, `kode_mapel`, `nama_mapel`, `allow_detail`, `allow_edit`, `allow_delete`
FROM `mapel`
WHERE `is_deleted` = 0
AND `tahun_ajaran_id` = '4'
ORDER BY `kode_mapel` asc
 LIMIT 10
ERROR - 2020-05-27 20:50:17 --> Query error: Unknown column 'jenjang' in 'field list' - Invalid query: SELECT `this`.`id`, `m`.`nama_mapel`, `jenjang`, `u`.`name_user` as `pembuat_name`, `ul`.`name_level` as `pembuat_level`, `jumlah_opsi`, `soal`, `this`.`allow_detail`, `this`.`allow_edit`, `this`.`allow_delete`
FROM `banksoal` `this`
LEFT JOIN `mapel` `m` ON `m`.`id` = `this`.`mapel_id`
LEFT JOIN `users` `u` ON `u`.`id` = `this`.`pembuat_id`
LEFT JOIN `users_level` `ul` ON `ul`.`id` = `u`.`users_level_id`
WHERE `this`.`is_deleted` = 0
AND `m`.`is_deleted` = 0
AND `this`.`tahun_ajaran_id` = '4'
ORDER BY `nama_mapel` asc
 LIMIT 10
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Notice --> Undefined property: stdClass::$jenjang C:\xampp\htdocs\polbangtan-pmb-cbt\application\modules\banksoal\controllers\Banksoal.php 249
ERROR - 2020-05-27 20:50:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Exceptions.php:271) C:\xampp\htdocs\polbangtan-pmb-cbt\system\core\Common.php 570
