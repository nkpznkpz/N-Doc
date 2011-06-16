<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
		include("../config.inc.php");
		
		$sender = $_SESSION["username"];
		$msg = $_POST["msg"];
		$receive = $_POST["user2"];
		$timeval = time();
		$msg = $_POST["msg"];
		$sql = "INSERT INTO privatemessage (message,messagedate ,sender, receiver  ) values ";
		$sql.=" ('$msg','".date('Y-m-d H:i:s',$timeval)."','$sender','$receive')";
		$result = mysql_query($sql);

		mysql_close();
		echo  "<script language=\"javascript\"> alert('ส่งข้อความเรียบร้อยแล้วครับ'); </script>";
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= ../viewuser.php?user=$receive'>";
		
?>