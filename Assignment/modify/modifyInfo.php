<?php include "../openDB/openDB.php"; 
?>
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
        <form method="post" action="./modifyOk.php">
            <?php
				$sql = mq("select * from userinfo where username='{$_SESSION['username']}'");
				while($member = $sql->fetch_array()){
			?>
            <div class="moField">
                <fieldset class="modifyField">
                    <legend class="modifyLegend">Modify Userprofile</legend>
                    <p>Username:&nbsp; <?php echo $_SESSION['username'];?></p>
                    <p>Name:&nbsp; <?php echo $member['name'];?></p>
                    <p>
                        <label>Email:</label>
                        <input type="email" name="emailModify" value="<?php echo $member['email'];?>" class="info">
                    </p>
                    <p>
                        <label>Phone Number:</label>
                        <input type="number" name="phoneModify" value="<?php echo $member['phone'];?>" class="info">
                    </p>
                    <p>
                        <label>Address:</label>
                        <input type="text" name="addressModify" value="<?php echo $member['address'];?>" class="info">
                    </p>                                 
                    <p>
                        <label>Zip Code:</label>
                        <input type="number" name="zipModify" value="<?php echo $member['zipCode'];?>" class="info">
                    </p>
                    <input type="submit" value="Modify Profile">
                </fieldset>
            </div>
            <?php } ?>
        </form>
    </div>
    <?php } ?>
</body>
</html>