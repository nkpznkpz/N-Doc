<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #0099cb;
	font-size: 14px;
}
.style2 {color: #FF6600}
.style3 {font-size: 80%}
-->
</style>
</head>

<body>
<div id="wrap"><!-- wrap starts here -->


	<?php 
		include('header.php');
	?>		
				
	
  <div id="sidebar" >
    <?php
  		include('egroup.php');
	?>
    <p>&nbsp;</p>
	<div class="lastvisit"></div>
  </div>
		
<div id="main">
				    <blockquote>
				      <table width="100%" height="121" border="0">
  <tr>
    <td height="117" class="form"><div align="center" class="style1"><strong><img src="icon/messenger.png" width="85" height="86" /><br />
      สมัครสมาชิก</strong></div></td>
  </tr>
</table>       
                      <form id="register" name="register" method="post" action="webcontrol/chkregister.php"  >
                        <table width="100%" class="form">
                          <tr>
                            <td width="37%"><div align="right">ขื่อ</div></td>
                            <td width="63%"><input type="text" name="name" id="name" /></td>
                          </tr>
                          <tr>
                            <td><div align="right">นามสกุล</div></td>
                            <td><input type="text" name="lastname" id="lastname" /></td>
                          </tr>
                          <tr>
                            <td><div align="right">เพศ</div></td>
                            <td><input name="gender" type="radio" id="gender" value="male" checked="checked" />
                              ชาย
                                <input type="radio" name="gender" id="gender" value="female">
                              หญิง</td>
                          </tr>
                          <tr>
                            <td><div align="right">ที่อยู่</div></td>
                            <td><textarea name="address" id="address" cols="30" rows="5"></textarea></td>
                          </tr>
                        
      
                    
                          <tr>
                            <td><div align="right">จังหวัด</div></td>
                            <td><select name="province"  id="province">
         <?php
		$sql = "SELECT * FROM province";
		$res = mysql_query($sql);	
		while($row=mysql_fetch_row($res))
		{
		print("<option value=$row[0]>$row[1]</option>");
		}
				
?>
                            </select></td>
                          </tr>
                        
                        
                        
                        
                          <tr>
                            <td><div align="right">อีเมล์</div></td>
                            <td><input type="text" name="email" id="email" /></td>
                          </tr>
                          <tr>
                            <td><div align="right">Username </div></td>
                            <td><input type="text" name="rusername" id="rusername"></td>
                          </tr>
                          <tr>
                            <td><div align="right">password </div></td>
                            <td><input type="password" name="rpassword" id="rpassword" /></td>
                          </tr>
                          <tr>
                            <td><div align="right">ยืนยัน password</div></td>
                            <td><input type="password" name="confpassword" id="confpassword" /></td>
                          </tr>
    
                          <tr>
                          
                            <td>&nbsp;</td>
                            <td><input type="submit" name="button2" id="button2" value="สมัครสมาชิก" onclick="return checkregister(register)"/>
                                <input type="reset" name="button3" id="button3" value="ยกเลิก" /></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><div id="showregister"></div></td>
                          </tr>
                        </table>
                        
                      </form>
 
      
    </blockquote>
  </div>
<div id="rightbar">

<?php
	include('loginmenu.php');
?>
<?php
	include('topeleaning.php');
?>  
  </div>
</div><!-- wrap ends here -->	
	
<!-- footer starts here -->
<?php
	include('footer.php');
?>

<!-- footer ends here -->
</body>
</html>
<script language="javascript">
	  
			
	

	function checkregister(re){
	
	    var name = re.name.value;
		var lastname = re.lastname.value;
		var gender ;
			for(var i=0;i<1;i++){
					if(re.gender[i].checked){
						gender = 	re.gender[i].value;
					}else{
						gender = 	"female";
					}
			}
		
		var address = re.address.value;
		var province = re.province.value;
		var email = re.email.value;
		var username = re.rusername.value;
		var password = re.rpassword.value;
		var confpassword = re.confpassword.value;
		
		if(password!=confpassword){
				alert("รหัสผ่านไม่ตรงกัน");
				return false;
		}else if(name==""||lastname==""||gender==""||address==""||email==""||password==""||username==""){
		alert("กรุณากรอกข้อมูลให้ครบถ้วน");
		return false;
		}else if(checkemail(email)){
		alert("กรุณากรอกอีเมลล์ให้ถูกต้อง");
		return false;
		}else{		
		    return true;
		}
		return true;
	}
	
	function checkemail(str){
	var emailFilter=/^.+@.+\..{2,3}$/;
		if (!(emailFilter.test(str))) { 
			   return true;
		}
   		 return  false;
}
</script>