<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- HTML for Main Page Before Login -->
    <?php
        header("Conten-Type:text/html; charset=UTF-8");
        session_start();
    ?>
    <?php if(!isset($_SESSION['username'])){?>
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="./login/login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } else{?>
        <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="./login/logOut.php">Sign Out&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./modify/userProfile.php">User Profile&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } ?>

        <br><br>
        
        <div class="mainImage">
            <img src="image/main.png">
        </div>
        
        <div class="imageText">
            <p>MAKE MORE <br>CONVENIENCE YOUR <br> OREDER LIFE<br><a1>Try UHDB</a1></p>
        </div>
    </div>
</body>
</html>