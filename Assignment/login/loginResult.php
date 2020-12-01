<meta charset="utf-8" />
<?php	
	include "../openDB/openDB.php";

	// Go back to previous page if username and password empty
	if($_POST["username"] == "" || $_POST["password"] == ""){
		echo '<script> alert("Please Enter Your Username or Password"); history.back(); </script>';
	}else{

	// save Value of POST password and search POST username with sql
	$password = $_POST['password'];
	$sql = mq("select * from userinfo where username='".$_POST['username']."'");
	$member = $sql->fetch_array();
	$hash_pw = $member['password']; //Save password in username row $hash_pw receive POST 
	// if password and hash_pw are same save session and go to index.php after alert
	if(password_verify($password, $hash_pw)) 
	{
		$_SESSION['username'] = $member["username"];
		$_SESSION['password'] = $member["password"];

		echo "<script>alert('Succeed Login.'); location.href='../index.php';</script>";
	}else{ // if password is not same go back to previous page with alert
		echo "<script>alert('Login Failed! Check your username or password again!'); history.back();</script>";
	}
}