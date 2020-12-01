<?php include "../openDB/openDB.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <!-- HTML for Login Page -->
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="./login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>

        <br><br>

        <div class="login">
            <img src="../image/login.jpg">
        </div>
        <form action="./loginResult.php" method="post">
            <div class="loginText">
                <p>Log In</p>
            </div>
            <div class="inputIdPw">
                <input type="text" name="username" placeholder="User Name" class="id">
                <br>
                <input type="password" name="password" placeholder="Password" class="pw">
                <br>
                <input type="submit" class="inputLogin" value = "Log In">
                <button type="button" class="btnSignup" onclick="window.location.href='../register.php';">Sign Up</button>
                <button type="button" class="findUnPss" onclick="window.location.href='../findAccount/findUsernamePassword.php';">Forgot Your Username and Password?</button>
            </div>        
        </form>
    </div>
</body>
</html>