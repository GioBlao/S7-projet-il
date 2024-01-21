<?php

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

define('DB_TYPE_MEDOO', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'projet');
define('DB_USER', 'root');
define('DB_PASS', '');
//define('DB_PORT', 'projet');

require('defines.inc.php');

require(_PATH_ . 'config/config_medoo_backup_parameters.php');

require(_PATH_ . 'vendor/smarty/smarty/libs/Smarty.class.php');
// Initialisation Smarty
$smarty = new Smarty();
