<?php
	include "../openDB/openDB.php";
	session_destroy(); //destroy session
?>
<meta charset="utf-8">
<script>alert("Succeed logout!"); location.href="/"; </script>