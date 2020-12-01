<?php include "./openDB/openDB.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the UHDB</title>
    <link rel="stylesheet" type="text/css" href="./style.css?after">    
</head>
<body>
    <!-- HTML for Register Page -->
    <div class="navigation">
        <ul>
            <li><a0>UHDB</a0></li>
            <li><a href="./login/login.php">Login/Register&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./location/location.php">Location&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./aboutUs/aboutUs.php">About Us&nbsp;&nbsp;&nbsp;</a></li>
            <li><a href="./index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
        </ul>

        <br><br>

        <form method="post" action="./registerOk/registerOk.php" name="memform">
            <div class="register">
                <img src="./image/register.png">
            </div>
            <div class="reFieldset">
                <fieldset>
                    <legend>Register</legend>
                    <p>For Login</p>
                    <table id="lineBefore">
                        <tr>
                            <td>
                                <label>Username:</label>
                            </td>
                            <td>
                                <input type="text" name="usernameRegister" placeholder="Enter Your Username for Login" id="userNameRe" class="info" required>
                                <input type="button" value="Check Overlap" onclick="checkid();" required/>
                                <a>Please Check Overlap Before Sign Up!</a>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Password:</label>
                            </td>
                            <td>
                                <input type="password" name="passRegister" placeholder="Enter Your Password" id="pass1" onchange="checkPass()" class="info" required>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Confirm Password:</label>
                            </td>
                            <td>
                                <input type="password" name="conPassRegister" placeholder="Enter Your Password Again" id="pass2" onchange="checkPass()" class="info" required>&nbsp;<span id="check"></span>
                            </td>  
                        </tr>    
                    </table>
                    <p>Personal Information</p>
                    <table id="lineNext">
                        <tr>
                            <td>
                                <label>Name:</label>
                            </td>
                            <td>
                                <input type="text" name="nameRegister" placeholder="Enter Your Full Name" class="info" required>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Phone Number:</label>
                            </td>
                            <td>
                                <input type="number" name="phoneRegister" placeholder="Enter Your Phone Number" class="info" required>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Email:</label>
                            </td>
                            <td>
                            <input type="email" name="emailRegister" placeholder="Enter Your Full Email" class="info" id="emailRe" required>
                            <input type="button" value="Check Overlap" onclick="checkEm();" required/>
                            <a>Please Check Overlap Before Sign Up!</a>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Address:</label>
                            </td>
                            <td>
                                <input type="text" name="addressRegister" placeholder="Enter Your Address" class="info" required>
                            </td>  
                        </tr>    
                        <tr>
                            <td>
                                <label>City:</label>
                            </td>
                            <td>
                                <input type="text" name="cityRegister" placeholder="Enter Your City" class="info" required>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>State:</label>
                            </td>
                            <td>
                                <input type="text" name="stateRegister" placeholder="Enter Your State" class="info" required>
                            </td>  
                        </tr>
                        <tr>
                            <td>
                                <label>Zip Code:</label>
                            </td>
                            <td>
                                <input type="number" name="zipRegister" placeholder="Enter Your Zip Code" class="info" require>
                            </td>  
                        </tr>
                    </table>
                </fieldset>
                <input type="submit" value="Sign UP" class="reSubmit">
            </div>
        </form>
        <script src="./script.js"></script>
</body>
</html>