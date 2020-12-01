<?php
include "../openDB/openDB.php";
$usernameChck = $_POST["usernameRegister"];
$emailChck = $_POST['emailRegister'];
/* echo "<pre>"; print_r($_POST); echo"</pre>";
exit; */

$sql = mq("select * from userinfo where username='".$usernameChck."' || email = '".$emailChck."'");
$result = $sql->fetch_array();
/* echo "<pre>"; print_r($result); echo"</pre>";
exit; */

if($result["username"] == $usernameChck || $result["email"] == $emailChck){
            echo "<script>alert('Please Check Overlap username and email'); history.back();</script>";
        }else{
                $username = $_POST['usernameRegister'];
                $userpw = password_hash($_POST['passRegister'], PASSWORD_DEFAULT);
                $name = $_POST['nameRegister'];
                $phone = $_POST['phoneRegister'];
                $email = $_POST['emailRegister'];
                $adress = $_POST['addressRegister'].','.$_POST['cityRegister'].','.$_POST['stateRegister'];
                $zip = $_POST['zipRegister'];

                $sql = mq("insert into userinfo (username,password,name,email,phone,address,zipCode) values('".$username."','".$userpw."','".$name."','".$email."','".$phone."','".$adress."','".$zip."')");
                echo "<script>alert('Completed Sign Up'); location.href='../index.php';</script>";
            }   
?>
