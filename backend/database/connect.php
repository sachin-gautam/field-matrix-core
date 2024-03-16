<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'fmc';


$mysql = mysqli_connect($host, $user, $pass, $db);

if (!$mysql) {
    die('Could not connect to db server');
}
