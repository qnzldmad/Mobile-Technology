<?php
include "../openDB/openDB.php";

if($_POST["usernameFind"] == "" || $_POST["nameFind"] == ""){
    echo '<script> alert("Please Insert Username"); history.back(); </script>';
	}else{
		$username = $_POST['usernameFind'];
		$name = $_POST['nameFind'];
		
		$sql = mq("select * from userinfo where username='{$username}' && name = '{$name}'");
		$result = $sql->fetch_array();

	if($result["username"] == $username){
		$_SESSION['username'] = $username;
		echo "<script>alert('Change Your Password'); location.href='./updatePassword.php';</script>";

	}else{
		echo "<script>alert('No Account'); history.back();</script>";
	}
}
?>