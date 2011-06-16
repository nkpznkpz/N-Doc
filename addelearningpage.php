<?php
	include('config.inc.php');
			if(!isset($_SESSION["username"] )){
					echo "<script>window.location = 'index.php?page=index';</script>";

			 }else{}
			  
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">

<div id="add1">
<form id="f1" name="f1" method="post" action="addfilepage.php">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="form">
    <tr>
      <td colspan="2"><div align="center">
          <p><img src="icon/generic_alt.png" width="60" height="60" /><br />
              <span class="style4">เพิ่มสื่อการเรียนรู้</span></p>
      </div></td>
    </tr>
    <tr>
      <td width="28%"><div align="right">ชื่อหัวข้อ</div></td>
      <td width="72%"><input name="topicname" type="text" id="topicname" size="50" maxlength="80"></td>
    </tr>
    <tr>
      <td><div align="right">รายละเอียด</div></td>
      <td><textarea name="detail" id="detail" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td><div align="right">กรุณาเลือกประเภท</div></td>
      <td><select name="cat" id="select">
      <?php 
	  			$sql = "SELECT  * FROM elearningtype";
				$result = mysql_query($sql);
				while($row=mysql_fetch_array($result)){
						$typeid = $row['etypeid'];
						$typename = $row['etypename'];
						echo '<option value='.$typeid.'>'.$typename.'</option>';
				}
				
	  ?>
              </select>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="btnadd" type="submit" id="button2" value="เพิ่มสื่อการเรียนรู้" onclick="return checkadd(f1)" ></td>
    </tr>
  </table>
</form>
</div>
<script language="javascript">
		function checkadd(formadd){
				var topicname =  formadd.topicname.value;
				var detail = formadd.detail.value;
				var cat = formadd.cat.value;
				if(topicname==""||detail==""||cat==""){
						alert("กรุณากรอกข้อมูลให้ครบถ้วน");
						return false;
				}
				return true;
		}
</script>
