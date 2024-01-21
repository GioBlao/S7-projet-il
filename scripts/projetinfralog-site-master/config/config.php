<?php
if (basename(__FILE__) === basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Location: Erreur.html");
    exit;
}

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pwnd');
define('DB_PASSWORD', 'network');
define('DB_NAME', 'projet');
?>