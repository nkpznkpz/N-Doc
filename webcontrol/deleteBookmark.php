
<?php
	include("../config.inc.php");
	$memberid = $_SESSION["memberid"];
	$eid = $_GET["eid"];
	$sql = "DELETE FROM bookmark WHERE eid= " . $eid." and memberid=".$memberid;
	$result = mysql_query($sql);
	
	mysql_close();
	
	//header('Location: index.php');
	
	/*echo "<script>window.location = 'index.php?page=member'; </script>";*/
	echo  "<script language=\"javascript\"> alert('ź���͡�����¹�������ʹ����º�������Ǥ�Ѻ'); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= ../index.php?page=member'>";
?>
