<?php

include "../openDB/openDB.php";


$password = password_hash($_POST['passwordModify'], PASSWORD_DEFAULT);


$sql = mq("update userinfo set password='".$password."' where username='".$_SESSION['username']."'");
echo "<script>alert('Scceed Change Password'); location.href='../index.php';</script>";

?>