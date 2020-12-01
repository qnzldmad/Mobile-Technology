<?php include "../openDB/openDB.php"; 
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <form method="post" action="../modify/passwordOK.php">
       
        <fieldset class="updatePssField">
            <legend class="updatePssLegend">Change Your Password</legend>
                <p>
                    <label>Password:</label>
                    <input type="password" name="passwordModify" id="pass1" onchange="checkPass()" placeholder="Enter new password" class="info" required>
                </p>
                <p>
                    <label>Confirm Password:</label>
                    <input type="password" name="conPasswordModify" id="pass2" onchange="checkPass()" placeholder="Confirm new password" class="info" required>&nbsp;<span id="check"></span>
                </p>
                <input type="submit" value="Change Password" />
                <a href="cancel.php">Cancel Change Password</a>
        </fieldset>
    </form>
</div>
<?php } ?>
<script src="../script.js"></script>
</body>
</html>