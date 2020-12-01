<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <!-- HTML for Location Page Before Login -->
    <?php
        header("Conten-Type:text/html; charset=UTF-8");
        session_start();
    ?>
    <?php if(!isset($_SESSION['username'])){?>
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="../login/login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } else{?>
        <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="../login/logOut.php">Sign Out&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../modify/userProfile.php">User Profile&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } ?>

        <br><br>

        <div class="banner">
            <img src="../image/location.jpg">
            <img src="../image/banner.jpg">
        </div>

        <div class="selectLocation">
            <button type="button" id="btnCom" onclick="showCom();">UHDB</button>
            <button type="button" id="btnInst" onclick="showKl();">Installed</button>
        </div>

        <div id="location">
            <div id="company"></div>
            <div id="addCom"><h2>UHDB Compnay Address Details</h2><p>60, Jalan Sri Hartamas 1, Taman Sri Hartamas, 50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p></div>
            <div id="stateMenu" style="display:none">
                <button type="button" id="btnKl" onclick="showKl();">Kuala Lumpur</button>
                <button type="button" id="btnJohor" onclick="showKl();">Johor Bahru</button>
                <button type="button" id="btnSabah" onclick="showKl();">Sabah</button>
                <button type="button" id="btnSarawak" onclick="showKl();">Sarawak</button>
            </div>
            <div id="installed" style="display:none"></div>
        </div>

<script src="../script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbB67XdJxRUApNURaliKE9cqEe-ZWlO-0&callback=myMap"></script>
    </div>
</body>
</html>