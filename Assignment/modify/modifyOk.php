<?php

include "../openDB/openDB.php";


$email = $_POST['emailModify'];
$phone = $_POST['phoneModify'];
$address = $_POST['addressModify'];
$zip = $_POST['zipModify'];


$sql = mq("update userinfo set email='".$email."', phone='".$phone."', address='".$address."',zipCode='".$zip."' where username='".$_SESSION['username']."'");
echo "<script>alert('Scceed Modify Information'); history.back();</script>";

?>