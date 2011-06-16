<?php
	include("config.inc.php");
	
   $showusername = $_GET['user'];
	$sql = "SELECT * FROM  member WHERE  username = '" . $showusername . "'  ";
	
	$rs = mysql_query($sql);	
	$num = mysql_num_rows($rs);

			while($row = mysql_fetch_array($rs)){
					$name = $row["membername"];
					$last = $row["lastname"];
					$gender = $row["gender"];
					$address = $row["address"];
					$province = $row["province"];
				}
		
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
<?php
	if($num==0){
			echo "<div align=\"center\">ไม่พบสมาชิกที่ต้องการ</div>";
	}else{
	
	?>
<div align="center">

<img src="icon/messenger.png" width="60" height="60" /><br />
รายละเอียดของ <?php echo $showusername?><br>
</div>
<table width="100%" border="0">
  <tr>
    <td width="24%" bgcolor="#D2EDFF"><div align="right">ชื่อ : </div></td>
    <td width="76%" bgcolor="#D2EDFF"><?php echo $name?></td>
  </tr>
  <tr>
    <td><div align="right">นามสกุล : </div></td>
    <td><?php echo $last?></td>
  </tr>
  <tr>
    <td bgcolor="#D2EDFF"><div align="right">เพศ :</div></td>
    <td bgcolor="#D2EDFF"><?php echo $gender?></td>
  </tr>
  <tr>
    <td><div align="right">ที่อยู่ :</div></td>
    <td> <?php echo $address?></td>
  </tr>
  <?php
  		$sql = "SELECT * FROM province WHERE id=" . $province;
		$rs2 = mysql_query($sql);
		
		while($row = mysql_fetch_array($rs2)){
				$province2 = $row["provincename"];
		}
  ?>
  <tr>
    <td bgcolor="#D2EDFF"><div align="right">จังหวัด :</div></td>
    <td bgcolor="#D2EDFF"><?php echo $province2?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<form id="form1" name="fmsg" method="post" action="webcontrol/sendmsg.php">
  <table width="100%" border="0">
    <tr>
      <td colspan="2" bgcolor="#D2EDFF"><div align="center">ส่งข้อความหาสมาชิกท่านนี้</div></td>
    </tr>
    <tr>
      <td width="24%"><div align="right"> ข้อความ: </div></td>
      <td width="76%"><textarea name="msg" id="msg" cols="45" rows="5"></textarea></td>
      <input type="hidden" name="user2" id="user2"  value="<?php echo $_GET['user']; ?>">
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button2" id="button2" value="ส่ง" onclick="return checkmsg(fmsg)"></td>
    </tr>
  </table>
</form>
<?php } ?>
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
<script language="javascript">
		function checkmsg(fmsg){
		var  msg = fmsg.msg.value;
			if(msg==""){
					alert("กรุณากรอกข้อความที่ต้องการส่ง");
					 return false;
			}
			return true;
		}
</script>