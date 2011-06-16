<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
	include("../config.inc.php");
	$eid = $_GET['eid'];
	if($_SESSION["status"]!="admin"){
		echo "<script>window.location = '../index.php?page=index';</script>";
	}else{
		
		$sql = "DELETE FROM elearning where eid=$eid";
		$result = mysql_query($sql);
		$sql= "DELETE FROM comment where eid=$eid";
		$result = mysql_query($sql);
		$sql = "SELECT * FROM filedb where eid=$eid";
		$result = mysql_query($sql);
		$dir1 = "../picupload/";
		$dir2 = "../otherupload/";
		while($row = mysql_fetch_array($result)){
				$filename = $row['filename'];
				@unlink($dir1.$filename);
				@unlink($dir2.$filename);
		}
		$sql = "DELETE FROM filedb where eid=$eid";
		$result = mysql_query($sql);
		echo  "<script language=\"javascript\"> alert('ลบสื่อการเรียนรู้นี้เรียบร้อยแล้วครับ'); </script>";
		echo "<script>window.location = 'index.php?page=accept';</script>";
	}

?>