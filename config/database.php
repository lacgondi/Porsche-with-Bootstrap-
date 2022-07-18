<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'lac');
define('DB_PASS', '123456');
define('DB_NAME', 'porsche_database');

$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connect->connect_error) {
    die('Connection failed' . $connect->connect_error);
}
