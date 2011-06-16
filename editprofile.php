<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
		
		include("config.inc.php");
		
		$user = $_SESSION["username"];
	
		$sql = "SELECT * FROM  member WHERE  username = '" . $user . "'  ";
		$result = mysql_query($sql);
		
		while($row = mysql_fetch_array($result)){
			$name = $row["membername"];
			$last = $row["lastname"];
			$gender = $row["gender"];
			$address = $row["address"];
			$province = $row["province"];
			$email = $row["email"];
			$pass = $row["password"];
		}
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="36%" class="form"><div align="center"><a href="index.php?page=member">สื่อที่บันทึกไว้</a></div></td>
          <td width="36%" bgcolor="#8CBAFF"><div align="center">แก้ไขข้อมูลส่วนตัว</div></td>
          <td width="28%" class="form"><div align="center"><a href="index.php?page=message">จัดการข้อความ</a></div></td>
        </tr>
        <form name="fedit" action="webcontrol/updateprofile.php" method="post">
        <tr>
          <td colspan="3" valign="top" class="form"><table width="100%">
            <tr>
              <td width="37%" class="form"><div align="right">ขื่อ</div></td>
              <td width="63%" class="form"><input type="text" name="name" id="name"  value="<?php echo $name ?>"/></td>
            </tr>
            <tr>
              <td class="form"><div align="right">นามสกุล</div></td>
              <td class="form"><input type="text" name="last" id="last" value="<?php echo $last ?>"/></td>
            </tr>
            <tr><td class="form"><div align="right">เพศ</div></td>
            <td class="form">
            <?php
               if($gender == male){             
             $display = '<input name="gender" type="radio" id="radio" value="male" checked="checked" />  ชาย <input type="radio" name="gender" id="radio2" value="female" />
                หญิง';
               }  if($gender == female){
                $display ='<input name="gender" type="radio" id="radio" value="male"  />  ชาย <input type="radio" name="gender" id="radio2" value="female" checked="checked" />
                หญิง';
				 }
				echo $display;
               ?>
               </td></tr>
            <tr>
              <td class="form"><div align="right">ที่อยู่</div></td>
              <td class="form"><textarea name="address" id="address" cols="45" rows="5" ><?php echo $address ?></textarea></td>
            </tr>
             <tr>
             <td class="form"><div align="right">จังหวัด</div></td>
             <td class="form"><select name="province" id="province">
<?php  
			 $sql = "SELECT * FROM province";
			 $rs = mysql_query($sql);
			 while($row = mysql_fetch_array($rs)){
			 $pid = $row[id];
						if($province==$pid){
								$isselect="selected=\"selected\"";
						}else{
								$isselect="";
						}
			
?>
<option value="<?php echo $pid;?>" <?php echo " ".$isselect;?>><?php echo $row[provincename] ?></option> 
<? 
} 
?>  
              </select>      
			   </td></tr>
			
            <tr>
              <td class="form"><div align="right">อีเมล์</div></td>
              <td class="form"><input type="text" name="email" id="email"  value="<?php echo $email ?>"/></td>
            </tr>


            <tr>
              <td class="form"><div align="right">ยืนยัน password</div></td>
              <td class="form"><input type="password" name="pass" id="pass" value="<?php echo $pass ?>"/></td>
            </tr>
            <tr>
              <td class="form">&nbsp;</td>
              <td class="form"><input type="submit" name="button2" id="button2" value="แก้ไข" onclick="return checkedit(fedit)">
                  <input type="reset" name="button3" id="button3" value="ยกเลิก" /></td>
            </tr>
          </table></td>
        </tr>
        </form>
      </table>
      <script language="javascript">
	  		function checkedit(fedit){
					var name = fedit.name.value;
					var lastname = fedit.last.value;
					var address = fedit.address.value;
					var email =fedit.email.value;
					var confirmpass = fedit.pass.value;
					if(name==""||lastname==""||address==""||email==""||confirmpass==""){
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