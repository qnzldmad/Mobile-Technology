<?php include "../openDB/openDB.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="../style.css?after"> 
</head>
<body>
    <?php
        header("Conten-Type:text/html; charset=UTF-8");
    ?>
    <?php if(isset($_SESSION['username'])){?>
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="../login/logOut.php">Sign Out&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./userProfile.php">User Profile&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="../index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>

        <br><br>

        <div class="banner">
            <img src="../image/banner.jpg">
            <img src="../image/banner1.jpg">
        </div>

        <div class="side">

                <table class="sideNav">
                    <tr class="sideTopBottom">
                        <td>
                            <a href="userProfile.php">Userprofile</a>
                        </td>
                    </tr>
                    <tr class="sideMiddle">
                        <td>
                            <a href="modifyInfo.php">Modify Profile</a>
                        </td>
                    </tr>
                    <tr class="sideTopBottom">
                        <td>
                            <a href="changePassword.php">Change Password</a>
                        </td>
                    </tr>
                </table>
        </div>
        <?php
			$sql = mq("select * from userinfo where username='{$_SESSION['username']}'");
			while($member = $sql->fetch_array()){
		?>
            <div class="moField">
                <fieldset class="modifyField">
                    <legend class="modifyLegend">User Profile</legend>
                    <p>Username:&nbsp;<?php echo $_SESSION['username'];?></p>
                    <p>Name:&nbsp;<?php echo $member['name'];?></p>
                    <p>Email Address:&nbsp;<?php echo $member['email'];?></p>
                    <p>Phone Number:&nbsp;0<?php echo $member['phone'];?></p>
                    <p>Address:&nbsp;<?php echo $member['address'];?></p>            
                    <p>Zip Code:&nbsp;<?php echo $member['zipCode'];?></p>
                </fieldset>
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</body>
</html>