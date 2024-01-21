<?php

require(_VENDOR_ . 'catfan/medoo/src/Medoo.php');

use Medoo\Medoo;

$database = new Medoo([
    'type' => DB_TYPE_MEDOO,
    'host' => DB_HOST,
    'database' => DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS,

    'command' => [
        //'SET search_path TO backup_referential'
        //'SET search_path TO public'
    ],

    // [optional]
    //'port' => DB_PORT,

    // [optional]
    // The driver_option for connection.
    // Read more from http://www.php.net/manual/en/pdo.setattribute.php.
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
