<?php
	include("../config.inc.php");
	   	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
		 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>จัดการหมวดหมู่สื่อการเรียนรู้</title>
<script type = "text/javascript" src="../AjaxFramework.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #0099cb;
	font-size: 14px;
}
.style3 {color: #FF0000}
-->
</style>
</head>

<body>
<div id="wrap"><!-- wrap starts here -->
	<?php 
		include('header.php');
	?>
 
<div id="main">
  <table width="100%" border="0">
    <tr>
      <td width="22%" valign="top"><table width="100%" border="0" class="form">
        <tr>
          <td bgcolor="#B3D1FF"><div align="center"><a href="managegroup.php">เพิ่มหมวดหมู่</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><a href="editgrouppage.php">แก้ไขหมวดหมู่</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><a href="deletegrouppage.php">ลบหมวดหมู่</a></div></td>
        </tr>
      </table></td>
      <td width="78%">
      <form id="fadd" name="fadd" method="post" action="insertgroup.php">
        <table width="500" border="จ" cellpadding="0" cellspacing="0" class="form">
          <tr>
            <td width="554" bgcolor="#B3D1FF"><div align="center">เพิ่มหมวดหมู่</div></td>
          </tr>
          <tr>
            <td><table width="100%" border="0">
                <tr>
                  <td width="49%"><div align="right">กรุณากรอกชื่อหมวดหมู่สื่อการเรียน</div></td>
                  <td width="51%"><input type="text" name="type" id="type" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="button" id="button" value="เพิ่มหมวดหมู่"  onclick="return checkadd(fadd)"/>
                      <input type="reset" name="button2" id="button2" value="ยกเลิก" /></td>
                </tr>
            </table></td>
          </tr>
        </table>
      </form></td>
    </tr>
  </table><br><br><br>
  </div>

</div>
<!-- wrap ends here -->	
	
<!-- footer starts here -->
<?php
	include('footer.php');
?>
<!-- footer ends here -->
</body>
</html>
<script language="javascript">
function checkadd(fadd){
	var etype = fadd.type.value;
	
	if(etype == "" ){
		 alert("กรุณา กรอกชื่อหมวดหมู่ด้วยครับ");
		 return false;
	}
		return true;
}
function checkedit(fedit){
	var newname = fedit.newname.value;
	
	if(newname == "" ){
			 alert("กรุณา กรอกชื่อหมวดหมู่ใหม่ด้วยครับ");
		 return false;
	}
		return true;
}
</script>