<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
	include("../config.inc.php");
	$eid = $_POST['eid'];
	$topic = $_POST['topic'];
	$detail = $_POST['detail'];
	$etype = $_POST['etype'];
	if($_SESSION["status"]!="admin"){
		echo "<script>window.location = '../index.php?page=index';</script>";
	}else{
		$sql = "UPDATE elearning set etypeid=$etype,etopic='$topic',edetail='$detail' where eid=$eid";
		$result = mysql_query($sql);

		echo  "<script language=\"javascript\"> alert('แก้ไขสื่อการเรียนรู้นี้เรียบร้อยแล้วครับ'); </script>";
		echo "<script>window.location = '../viewelearning.php?eid=$eid';</script>";
	}

?>