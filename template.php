
<?php

		$topicname = $_GET['topicname'];
		$detail = $_GET['detail'];
		$cat =$_GET['cat'];
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">


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
<div align="center"><img src="icon/FolderDownloads.png" width="60" height="60" /><br />
  <span class="style4">เพิ่มสื่อการเรียนรู้</span><br>
</div>
<table width="100%" border="0">
  <tr>
    <td width="21%"><div align="right">ชื่อหัวข้อ</div></td>
    <td width="79%"><div align="left"><?php echo $topicname ?></div></td>
  </tr>
  <tr>
    <td><div align="right">รายละเอียด</div></td>
    <td><div align="left"><?php echo $detail ?></div></td>
  </tr>
  <tr>
    <td><div align="right">ประเภท</div></td>
    <td><div align="left"><?php echo $cat ?></div></td>
  </tr>
</table>

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