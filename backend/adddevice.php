<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect unauthorized users to the login page
    header("location: /login.php");
    exit();
} else {
    require_once("./database/connect.php");
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        extract($_POST);
        if (isset($did) && isset($mac)) {
            $userid = $_SESSION['user_id'];
            $sql = "INSERT into userdevice(userid,did,mac) values('{$userid}','{$did}','{$mac}')";
            if ($mysql->query($sql)) {
                header("location: /user_devices.php");
            }
        } else {
            echo "Invalid request!";
            http_response_code(404);
        }
    } else {
        echo "Unknown request!";
        http_response_code(404);
    }
}
