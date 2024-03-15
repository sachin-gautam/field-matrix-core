<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect unauthorized users to the login page
    header("location: /login.php");
    exit();
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="user_panel.css">
</head>

<body>
    <div class="container">
        <!-- side bar -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>FMC</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="user_panel.php" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="user_messages.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="user_devices.php">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Devices</h3>
                </a>
                <a href="login.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>
                </a>
            </div>
        </aside>
        <!-- end of side bar -->
        <main>
            <h1>User Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <!-- messages -->
                <div class="messages">
                    <span class="material-icons-sharp">mail_outline</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Messages</h3>
                            <h1>50</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>75%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Messages-->

                <!-- devices -->
                <div class="devices">
                    <span class="material-icons-sharp">inventory</span>
                    <div class="middle">
                        <div class="left">
                            <h3 onclick="toggleDevice()">Devices</h3>
                            <h1>2</h1>
                        </div>
                    </div>
                </div>
                <!--End of Devices-->
            </div>
            <!--End of Analytics-->

        </main>
        <!--End of Main-->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>User123</b></p>
                        <small class="text-muted">User</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                </div>
            </div>
            <!--End of Top-->
        </div>
    </div>

    <script src="./user_panel.js"></script>
</body>

</html>