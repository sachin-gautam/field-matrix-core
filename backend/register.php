<?php
require_once("./database/connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Extracting variables from $_POST
    extract($_POST);

    // Checking if all required fields are set
    if (isset($firstname) && isset($lastname) && isset($username) && isset($email) && isset($password)) {
        // Hashing the password
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        // Creating the SQL query
        $sql = "INSERT INTO user (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashPassword')";

        // Executing the query
        if ($mysql->query($sql)) {
            // Redirecting to a success page
            header("Location: /success.php");
            exit();
        } else {
            // Redirecting to an error page if the query fails
            header("Location: /error.php");
            exit();
        }
    } else {
        // Redirecting to a 404 page if any required field is missing
        header("Location: /404.php");
        exit();
    }
} else {
    // Redirecting to a 404 page if accessed via GET method
    header("Location: /404.php");
    exit();
}
