<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
                <a href="admin.php" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>   
                </a>
                <a href="admin_users.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Users</h3>   
                </a>
                <a href="admin_messages.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>   
                </a>
                <a href="admin_devices.php">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Devices</h3>   
                </a>
                <a href="admin_add_device.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Device</h3>   
                </a>
                <a href="login.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Log Out</h3>   
                </a>
            </div>
        </aside>
        <!-- end of side bar -->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <!-- users -->
                <div class="users">
                    <span class="material-icons-sharp">account_box</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Users</h3>
                            <h1>25</h1>
                        </div>
                    </div>
                </div>
                <!-- devices -->
                <div class="devices">
                    <span class="material-icons-sharp">wifi_tethering</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Devices</h3>
                            <h1>50</h1>
                        </div>
                    </div>
                </div>
                <!--End of Devices-->
            </div>
            <!--End of Analytics-->

            <div class="recent-devices">
                <h2>Recent Devices</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Device Name</th>
                            <th>Device Number</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Raspberry Pi</td>
                            <td class="primary">89789</td>
                            <td class="warning">Off</td>
                        </tr>
                        <tr>
                            <td>ESP 32</td>
                            <td class="primary">63589</td>
                            <td class="warning">Off</td>
                        </tr>
                        <tr>
                            <td>Raspberry Pi</td>
                            <td class="primary">69789</td>
                            <td class="warning">Off</td>
                        </tr>
                        <tr>
                            <td>Raspberry Pi</td>
                            <td class="primary">45789</td>
                            <td class="warning">Off</td>
                        </tr>
                        <tr>
                            <td>ESP 32</td>
                            <td class="primary">23743</td>
                            <td class="warning">Off</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>

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
                        <p>Hey, <b>Lunar</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                </div>
            </div>
            <!--End of Top-->

            <div class="recent-updates">
                <h2>Recent Updates</h2>
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
        </div>
    </div>

    <script src="./scripts.js"></script>
</body>
</html>