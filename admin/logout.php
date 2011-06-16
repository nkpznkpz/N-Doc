<?php
	include("config.inc.php");
	
	unset($_SESSION["username"]);
	unset($_SESSION["memberid"]);
	unset($_SESSION["status"]);
	session_destroy();
	echo "<script>window.location = '../index.php?page=index';</script>";
?>