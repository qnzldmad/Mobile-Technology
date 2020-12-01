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
            <li><a href="../login/login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>

        <br><br>
        <div class="banner">
            <img src="../image/banner.jpg">
            <img src="../image/find.png">
        </div>
        <div class="find">
        <h1 style="text-align: center">FIND ACCOUNT</h1>
            <div>
                <form method="post" action="./findUsername.php">
                    <fieldset class="findField">
                    <legend class="findLegend">Find Username</legend>
                        <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" size="35" name="nameFind" placeholder="Name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" size="35" name="emailFind" placeholder="Email"></td>
                        </tr>
                        </table>
                    <input type="submit" value="Find Username" />
                </fieldset>
                </form>
            </div>
            <div>
                <form method="post" action="./findPassword.php">
                    <fieldset class="findField">
                    <legend class="findLegend">Find Password</legend>
                        <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" size="35" name="usernameFind" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" size="35" name="nameFind" placeholder="Name"></td>
                        </tr>
                        </table>
                    <input type="submit" value="Find Password" />
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>