<?php
	include("../config.inc.php");
	$receive = $_SESSION["username"];
	$msgid = $_GET["messageid"];
	$sql = "DELETE FROM privatemessage WHERE messageid=" . $msgid ;
	$rs = mysql_query($sql);
	//echo $sql;
	mysql_close();
	
	echo  "<script language=\"javascript\"> alert('ź��ͤ������º�������Ǥ�Ѻ'); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= ../index.php?page=" .$msg ."'>";
?>