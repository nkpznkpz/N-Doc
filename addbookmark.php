<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
				include("config.inc.php");	
					 $owner = $_SESSION["username"];
					 $topicname = $_POST["topicname"];
					 $detail = $_POST["detail"];
					 $cat = $_POST["cat"];
?>

<link rel="stylesheet" href="temcss.css" type="text/css" />
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>

</head>

<body>
<div id="wrap">
<?php 
	include('header.php');
	
?>
<div id="sidebar">
<?php
  	include('egroup.php');
?>

<div  class="lastvisit"></div>
</div>
<div id="main">
<div align="center"><?php
		$eid = $_GET['eid'];
		$memberid = $_SESSION['memberid'];

		$sql = "SELECT  * FROM bookmark WHERE memberid=$memberid and eid=$eid";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if($num!='0'){
				echo "<font color=\"red\">สื่อการเรียนรู้นี้อยู่ในสื่อของฉันอยู่แล้ว</font>";
		}else{
				$sql = "INSERT INTO bookmark (memberid,eid) VALUES ($memberid,$eid)";
				$result = mysql_query($sql);
				echo "<font color=\"ิblack\">บันทึกเป็นสื่อการเรียนรู้ของฉันเรียบร้อยแล้ว</font>";
				
		}

?><br>
</div>
</div>
<div id="rightbar">
   <?php
	include('loginmenu.php');
	include('topeleaning.php');
?>
</div>
<?php
	include('footer.php');
?>
</div>
<!-- wrap ends here -->
<!-- footer starts here -->

<!-- footer ends here -->
</body>

</html>
