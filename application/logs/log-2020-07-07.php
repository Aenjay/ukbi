<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> opendir(./assets/fonts/,./assets/fonts/): The system cannot find the file specified. (code: 2) C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 183
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> opendir(./assets/fonts/): failed to open dir: No error C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 183
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 143
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 143
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 143
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 143
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\ukbi\application\libraries\Antispam.php 143
ERROR - 2020-07-07 11:45:57 --> Query error: Table 'ukbi.captcha' doesn't exist - Invalid query: DELETE FROM `captcha`
WHERE `time` = ''
ERROR - 2020-07-07 11:45:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\ukbi\system\core\Exceptions.php:271) C:\xampp\htdocs\ukbi\system\core\Common.php 570
ERROR - 2020-07-07 11:48:18 --> Query error: Table 'ukbi.captcha' doesn't exist - Invalid query: DELETE FROM `captcha`
WHERE `time` = ''
ERROR - 2020-07-07 12:58:34 --> Query error: Unknown column 'ul.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name_user`, `email`, `this`.`users_level_id`, `ul`.`name` as `name_level`, `this`.`password`, `this`.`status`
FROM `users` `this`
LEFT JOIN `users_level` `ul` ON `ul`.`id` = `this`.`users_level_id`
WHERE `email` IS NULL
ERROR - 2020-07-07 12:59:22 --> Query error: Unknown column 'ul.name' in 'field list' - Invalid query: SELECT `this`.`id`, `this`.`name_user`, `email`, `this`.`users_level_id`, `ul`.`name` as `name_level`, `this`.`password`, `this`.`status`
FROM `users` `this`
LEFT JOIN `users_level` `ul` ON `ul`.`id` = `this`.`users_level_id`
WHERE `email` IS NULL
ERROR - 2020-07-07 13:02:44 --> Severity: Notice --> Undefined property: stdClass::$name C:\xampp\htdocs\ukbi\application\modules\login\controllers\Login.php 56
ERROR - 2020-07-07 13:21:46 --> Query error: Table 'ukbi.role_has_permissions' doesn't exist - Invalid query: SELECT `p`.`name_menu`, `p`.`code`, `p`.`url`, `p`.`parent`, `p`.`icon`
FROM `role_has_permissions` `this`
LEFT JOIN `permissions` `p` ON `p`.`id` = `this`.`permission_id`
WHERE `p`.`is_deleted` = 0
AND `p`.`guard_name` = 'web'
AND `p`.`name` = 'list'
AND `p`.`parent` = '0'
AND `this`.`role_id` IS NULL
ORDER BY `p`.`sequence` ASC, `p`.`code` ASC
