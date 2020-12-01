<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="../style.css?after">
</head>
<body>
    <!-- HTML for About Us After Login -->
    <?php
        header("Conten-Type:text/html; charset=UTF-8");
        session_start();
    ?>
    <?php if(!isset($_SESSION['username'])){?>
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="../login/login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } else{?>
        <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="../login/logOut.php">Sign Out&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../modify/userProfile.php">User Profile&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        <?php } ?>

        <br><br>
        
        <div class="intro">
            <h1>About Us</h1>
            <p>Worry about order product from E-Commerce or Delivery Food when nobody in your house?
                <br><br><br>
                Do Not Worry Anymore!
                <br><br><br>
                Delivery Man will put Product/Food in your Parcel Locker from UDHB!
                <br><br><br>
                Our UDHB Parcel Locker installed convenience store such as 7-eleven, Family Mart 
                <br>or Apartment/Condominium instead post mailbox!
                <br><br><br>
                Your Product will storage Parcel Locker Near by your house. If your Apartment/Condominium installed Our Parcel
                <br>Locker instead post mailboxes, delivery man will put Product/Food into Parcel Locker follow your unit number
                <br>UDHB Parcel Locker.
            </p>
        </div>

        <div class="explain">
            <p id="explainDe">Storage Products<br>(Delivery Man)</p>
            <br>
            <div class="display">
                <div class="figureDe">
                    <img src="../image/deliveryMan1.png">
                    <figcaption>Deliver Man Select <br>One of Parcel Locker</figcaption>
                </div>
                <div class="figureDe">
                    <img src="../image/deliveryMan2.png">
                    <figcaption>When Parcel Locker opened, <br>Delivery Man put the product and close</figcaption>
                </div>
                <div class="figureDe">
                    <img src="../image/deliveryMan3.png">
                    <figcaption>Delivery Man input your Phone number, <br>Parcel Locker number and Invoice Number</figcaption>
                </div>
                <div class="figureDe">
                    <img src="../image/deliveryMan4.png">
                    <figcaption>Our Server Transmit <br>temporary password to your phone</figcaption>
                </div>
            </div>
            <br>
            <p id="explainCu">Take Your Product<br>(Customer)</p>
            <br>
            <div class="display">
                <div class="figureCu">
                    <img src="../image/customer1.png">
                    <figcaption>Receive temporary password,<br>go to the parcel locker</figcaption>
                </div>
                <div class="figureCu">
                    <img src="../image/customer2.png">
                    <figcaption>Input temporary password to <br>Parcel Locker Monitor</figcaption>
                </div>
                <div class="figureCu">
                    <img src="../image/customer4.png">
                    <figcaption>Parcel Locker will open and you can take your Product!</figcaption>
                </div>
            </div>
        </div>
    </div>
</body>
</html>