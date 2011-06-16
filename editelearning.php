<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
		function checkedit(fedit){
				var etopic = fedit.topic.value;
				var edetail  = fedit.detail.value;
				if(etopic==""||edetail==""){
						alert("กรุณากรอกข้อมูลให้ครบด้วยครับ");
						return false;
				}
				return true;
		}
</script>

<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>แก้ไขสื่อการเรียนรู้</title>
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
<?php
	include("config.inc.php");
	$eid = $_GET['eid'];
	
	if($_SESSION["status"]!="admin"){
		echo "<script>window.location = 'index.php?page=index';</script>";
		}
?>
<div  class="lastvisit"></div>
</div>
<div id="main">
  <table width="508" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#B9D5FF">
    <tr>
      <td><div align="center">แก้ไขสื่อการเรียนรู้</div></td>
    </tr>
  </table>
  <?php		
			  $sql = "SELECT * FROM elearning WHERE eid=$eid";
			  $result = mysql_query($sql);
	          $num = mysql_num_rows($result);
			 while($row = mysql_fetch_array($result)){
					 $typeid = $row['etypeid'];
					 $topic = $row['etopic'];
					 $detail = $row['edetail'];
			
					 }
  ?>
  <form id="fedit" name="fedit" method="post" action="webcontrol/editelearning.php">
    <table width="508" border="0" align="center">
      <tr>
        <td width="157"><div align="right">หัวข้อสื่อหาเรียนรู้</div></td>
        <td width="341"><input type="text" name="topic" id="topic" value="<?php echo $topic;?>"></td>
      </tr>
      <tr>
        <td><div align="right">รายละเอียด</div></td>
        <td><textarea name="detail" id="detail" cols="45" rows="5"><?php echo $detail;?></textarea>
        <input type="hidden" name="eid" value="<?php echo $eid;?>" /></td>
      </tr>
      <tr>
        <td><div align="right">หมวดหมู่</div></td>
        <td><select name="etype" id="etype">
        		<?php
						$sql = "SELECT * FROM elearningtype";
						$result = mysql_query($sql);
						while($rtype = mysql_fetch_array($result)){
							$etypeid = $rtype['etypeid'];
							$etypename = $rtype['etypename'];
							if($etypeid==$typeid){
									$isselect = " selected=\"selected\"";
							}else{
									$isselect = "";
							}
							echo "<option value=\"$etypeid\" $isselect>$etypename</option>";
						}
				?>
          </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="แก้ไข" onclick="return checkedit(fedit)">
        		
            <input type="reset" name="button2" id="button2" value="ยกเลิก" /></td>
      </tr>
    </table>
    </form>
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
