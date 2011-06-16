<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
	include("../config.inc.php");
	$cid = $_GET['cid'];	
	$eid = $_GET['eid'];
	if($_SESSION["status"]!="admin"){
		echo "<script>window.location = '../index.php?page=index';</script>";
	}else{
		$sql = "DELETE FROM comment where commentid=$cid";
		$result = mysql_query($sql);
		echo  "<script language=\"javascript\"> alert('ลบคำติชมเรียบร้อยแล้ว'); </script>";
		echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
	}
	
	
?>
