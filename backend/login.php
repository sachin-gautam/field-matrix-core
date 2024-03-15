<?php
require_once("./database/connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Extracting variables from $_POST
    extract($_POST);

    // Checking if both username and password are provided
    if (isset($username) && isset($password)) {
        // Sanitize input to prevent SQL injection
        // Query to fetch user with provided username from the database
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = $mysql->query($query);

        if ($result) {
            // Fetching user data
            $user = $result->fetch_assoc();

            // Verifying password
            if ($user && password_verify($password, $user['password'])) {
                // Successful login, redirect to dashboard or wherever you want
                session_start();
                $_SESSION['user_id'] = $user['userid']; // You might want to store more information in the session

                header("Location: /user_panel.php");
                exit();
            } else {
                // Incorrect username or password
                header("Location: /login.php?error=1");
                exit();
            }
        } else {
            // Error in executing the query
            header("Location: /login.php?error=2");
            exit();
        }
    } else {
        // Missing username or password
        header("Location: /login.php?error=3");
        exit();
    }
} else {
    // Redirecting to a 404 page if accessed via GET method
    header("Location: /404.php");
    exit();
}
