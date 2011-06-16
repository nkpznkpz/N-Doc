<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
			 include("../config.inc.php");
			$username = $_SESSION['username'];
			$comment = $_POST['comment'];
			$eid = $_POST['eid'];
			
			
			$timeval=time(); 
			$sql = "INSERT INTO comment (comment,commentdate,username,eid) values ";
			$sql.=" ('$comment','".date('Y-m-d H:i:s',$timeval)."','$username',$eid)";
			$result = mysql_query($sql);
		
			echo  "<script language=\"javascript\"> alert('เพิ่มคำติชมเรียบร้อยแล้ว'); </script>";
			echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
?>
