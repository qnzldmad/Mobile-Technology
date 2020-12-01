<?php
	include "../openDB/openDB.php"; //Open database

	$username = $_GET["usernameRegister"];

	$sql = mq("select * from userinfo where username='".$username."'");
	$member = $sql->fetch_array();

	if($member==0)
	{
?>
 <!-- Open New page with print username Available -->
	<div style='font-family:"malgun gothic"';><?php echo $username; ?> is Available.</div>
<?php 
	}else{
?>
 <!-- Open New page with print username Overlap -->
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $username; ?> is already used!<div>
<?php
	}
?>
<button value="close" onclick="window.close()">Close</button>