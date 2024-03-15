<?php


$host = 'localhost';
$user = 'root';
$pass = 'subu19';
$db   = 'sachin';


$mysql = mysqli_connect($host, $user, $pass, $db);

if (!$mysql) {
    die('Could not connect to db server');
}
