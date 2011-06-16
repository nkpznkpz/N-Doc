<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
	function condelete(){
				if(confirm("คุณต้องการลบสื่อการเรียนรู้นี้หรือไม่")){
						return true;
				}
				return false;
			}
</script>

<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>

<style type="text/css">
<!--
.style1 {	color: #0000FF;
	font-size: 24px;
}
.style2 {	color: #999999
}
-->
</style>
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
<div id="main"><?php
					include("config.inc.php");
					if(!isset($_SESSION["username"] )){
					echo "<script>window.location = 'index.php?page=index';</script>";

					 }else{}
					
					  $textsearch = $_GET['txtsearch'];
					  $sql = "SELECT * FROM elearning where estatus='accept' and etopic like '%$txtsearch%'";
					  $result = mysql_query($sql);
					  $num = mysql_num_rows($result);
					if($num==0){
							echo "<div align='center'>ไม่พบสื่อการเรียนรู้ที่ต้องการ</div>";
					  }else{
					  if(!isset($start)){
					  $start = 0;
					  }
					  $limit = 5; // แสดงผลหน้าละกี่หัวข้อ					 
					 $sql = "SELECT * FROM elearning where estatus='accept' and etopic like '%$txtsearch%' order by eid DESC limit $start,$limit";
					 
					 $result = mysql_query($sql);
					 
	?>
   

<title>ดูสื่อการเรียนรู้</title>
<table width="100%" border="0">
  <tr>
    <td width="89%" bgcolor="#B0D0FF" class="form"><div align="center">หัวข้อ</div></td>
  </tr>
  <?php
					 while($row = mysql_fetch_array($result)){
					 $eid = $row['eid'];
					 $etopic = $row['etopic'];
					 $edetail = $row['edetail'];
					 $etopic = $row['etopic'];
					 $eowner = $row['eowner'];
					 $eadddate = $row['eadddate'];
					 $evote = $row['evote'];
					 if(strlen($edetail)>100){
					 $edetail = substr($edetail,0,100)."...";
					 }
		//show edit delete for admin
		if($_SESSION['status']=="admin"){
				$linkmanageelearning = "<a href=\"editelearning.php?eid=$eid\"><img src=\"icon/accept.gif\" width=\"16\" height=\"16\" />[แก้ไขสื่อการเรียนรู้นี้]</a> <a href=\"webcontrol/deleteelearning.php?eid=$eid\"  onclick=\"return condelete()\"><img src=\"icon/delete.gif\" width=\"12\" height=\"12\" />[ลบสื่อการเรียนรู้นี้ !!]</a>";
		}
?>
  <tr>
    <td height="96" valign="top" class="form style1"><table width="100%" border="0">
      <tr>
        <td width="6%" height="90"><?php 
				$sql="SELECT * FROM filedb WHERE  filetype='pic' and eid=$eid";
				$result2 = mysql_query($sql);
				$numfile = mysql_num_rows($result2);
				if($numfile==0){
					$showpicfile = "nopic.jpg";
				}else{
					$tmp = mysql_fetch_array($result2);
					$showpicfile = $tmp['filename'];
				}
		?>
              <img src="picupload/<?php echo $showpicfile; ?>" alt="ภาพสื่อการเรียนรู้" width="60" height="70" /></td>
        <td width="94%" valign="top"><p><a href="viewelearning.php?eid=<?php echo $eid; ?>"><?php echo $etopic; ?></a></p>
              <p class="style2"><?php echo $edetail; ?><br />
                  <?php echo $linkmanageelearning; ?></p></td>
      </tr>
    </table></td>
  </tr>
  <?php
	}
?>
</table>
<p align="center">

<?php

	$prev = $start-5;
	$next = $start+5;
	if($start!=0){
	echo "<a href=\"search.php?txtsearch=$txtsearch&start= ".$prev."\" class=\"style3\"><img src=\"icon/back1.gif\"></a>";
	}
	echo "<img src=\"icon/blank.jpg\" width='50'>";
	//echo $start.sss.$num;
	if($start < $num-5){
	echo "<a href=\"search.php?txtsearch=$txtsearch&start= ".$next."\" class=\"style3\"><img src=\"icon/next1.gif\"></a>";
	}
	}
?></div>
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