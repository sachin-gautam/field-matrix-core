<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="user_messages_styles.css">
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
                <a href="user_panel.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>   
                </a>
                <a href="user_messages.php" class="active">
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
        <div class="recent-updates">
            <div class="updates">
                <div class="update">
                    <div class="profile-photo">
                        <img src="./images/profile-2.jpg">
                    </div>
                    <div class="message">
                        <p><b>Hari Bahadur</b> added a new Raspberry Pi</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./images/profile-3.jpg">
                    </div>
                    <div class="message">
                        <p><b>Hari Bahadur</b> added a new Raspberry Pi</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./images/profile-4.jpg">
                    </div>
                    <div class="message">
                        <p><b>Hari Bahadur</b> added a new Raspberry Pi</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./images/profile-4.jpg">
                    </div>
                    <div class="message">
                        <p><b>Hari Bahadur</b> added a new Raspberry Pi</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
                <div class="update">
                    <div class="profile-photo">
                        <img src="./images/profile-4.jpg">
                    </div>
                    <div class="message">
                        <p><b>Hari Bahadur</b> added a new Raspberry Pi</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                </div>
            </div>
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
                        <img src="./images/profile-user.jpg">
                    </div>
                </div>
            </div>
            <!--End of Top-->
            <div class="request-deivce">
                <h2>Request Device</h2>
                <div class="form">
                    <form>
                        <input type="text" placeholder="Device Name">
                        <textarea rows="6" placeholder="Description"></textarea>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./user_messages_scripts.js"></script>
</body>
</html>
