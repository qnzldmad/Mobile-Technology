<?php
	include "../openDB/openDB.php"; //Open database

	$email = $_GET['emailRegister'];

	$sql = mq("select * from userinfo where email='".$email."'");
	$member = $sql->fetch_array();

	if($member==0)
	{
?>
 <!-- Open New page with print email Available -->
	<div style='font-family:"malgun gothic"';><?php echo $email; ?> is Available.</div>
<?php 
	}else{
?>
 <!-- Open New page with print email Overlap -->
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $email; ?> is already used!<div>
<?php
	}
?>
<button value="close" onclick="window.close()">Close</button>