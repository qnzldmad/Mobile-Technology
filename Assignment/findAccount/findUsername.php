<?php
include "../openDB/openDB.php";

if($_POST["nameFind"] == "" || $_POST["emailFind"] == ""){
	echo '<script> alert("Please Fill Up"); history.back(); </script>';
	}else{

		$name = $_POST['nameFind'];
		$email = $_POST['emailFind'];


		$sql = mq("select * from userinfo where name = '{$name}' && email = '{$email}'");
		$result = $sql->fetch_array();

	if($result["name"] == $name){
		echo "<script>alert('Your Username is ".$result['username'].".'); history.back();</script>";
	}else{
	echo "<script>alert('No Account'); history.back();</script>";
	}
}
?>