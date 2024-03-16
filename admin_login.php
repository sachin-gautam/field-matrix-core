<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_login_styles.css">
    <title>Login/Signup Page</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="/backend/register.php">
                <h1>Create Account</h1>
                <span>Use your email for registration</span>
                <input type="text" placeholder="First Name" name="firstname">
                <input type="text" placeholder="Last Name" name="lastname">
                <input type="text" placeholder="Username" name="username">
                <input type="number" placeholder="Phone Number" name="phone">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Sign up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="/backend/login.php" method="post">
                <h1>Sign In</h1>
                <span>Use your email & password</span>
                <input placeholder="Email/Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <a href="#">Forgot Your Password ?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Not an Admin ?</h1>
                    <p>Click here to login as an user</p>
                    <a href="/login.php"><button class="hidden" id="register">User Login</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="admin_login_scripts.js"></script>
</body>

</html>