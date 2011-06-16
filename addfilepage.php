<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />

<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>
<?php
		include("config.inc.php");
		$topicname = $_POST['topicname'];
		$detail = $_POST['detail'];
		$cat =$_POST['cat'];
		
		if(!isset($topicname)||!isset($detail)||!isset($cat)){
				echo "<script>window.location = 'index.php?page=index';</script>";
		}
		
		
		
?>
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
<div align="center">
<?php
	$sql = "select * from elearningtype where etypeid=".$cat;
		
		$result = mysql_query($sql);

		while($row = mysql_fetch_array($result)){
				$ename = $row['etypename'] ;
		}
?>
  <form id="formupload" name="formupload" method="post" action="addelearning.php" enctype="multipart/form-data">
    <table width="100%" border="0">
      <tr>
        <td width="21%"><div align="right">ชื่อหัวข้อ</div></td>
        <td width="79%"><div align="left"><?php echo $topicname; ?></div></td>
        
      </tr>
      <tr>
        <td><div align="right">รายละเอียด</div></td>
        <td><div align="left"><?php echo $detail; ?></div></td>
      </tr>
      <tr>
        <td><div align="right">ประเภท</div></td>
        <td><div align="left"><?=$ename?></div></td>
      </tr>
    </table>
    <table width="100%" border="0">
      <tr>
        <td width="20%"><div align="right">ไฟล์ภาพ</div></td>
        <td width="80%"><input type="file" name="picfile" id="picfile" />
          .jpg.png.</td>
      </tr>
      <tr>
        <td><div align="right">ไฟล์ประกอบ</div></td>
        <td><input type="file" name="file1" id="file1" />
          .zip.rar.doc.swf.pdf</td>
      </tr>
      <tr>
        <td><div align="right">ไฟล์ประกอบ</div></td>
        <td><input type="file" name="file2" id="file2" />
          .zip.rar.doc.swf.pdf</td>
      </tr>
    </table>
    <div align="center">
      <input type="hidden" value='<?php echo $topicname; ?>' name="topicname">
      <input type="hidden" value="<?php echo $detail; ?>" name="detail">
      <input type="hidden" value="<?php echo $cat; ?>" name="cat">
    
      <input type="submit" name="btnadd" id="btnadd" value="เพิ่ม" />
      <input type="reset" name="btnreset" id="btnreset" value="ยกเลิก" />
    </div>
    </form>
  <br />
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