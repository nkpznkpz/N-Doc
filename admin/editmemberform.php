<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="../AjaxFramework.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #0099cb;
	font-size: 14px;
}
.style2 {color: #FF6600}
-->
</style>
</head>

<body>
<div id="wrap"><!-- wrap starts here -->
	<?php 
		include('header.php');
	?>
 
<div id="main">
<?php
		include("../config.inc.php");
		 	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }
		$member = $_GET["mem"];
	
		$sql = "SELECT * FROM  member WHERE  username = '" . $member . "'  ";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if($num == 0){
				$show = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
        		$show .= '<tr>';
				$show .= '<td width="36%" ><div align="center"> </div></td>';
        		$show .= '</tr>';
        		$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> ไม่มีข้อมูล กรุณากรอกข้อมูลอีกครั้ง </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp; </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
				$show .= '<tr>';
				$show .= '<td width="36%"><div align="center"> &nbsp;  </div></td>';
        		$show .= '</tr>';
			
				$show .= '</table>';
				
				echo $show ;
				echo "<META HTTP-EQUIV='Refresh' CONTENT='2; URL= index.php?page=editmember'>";
		} else {
		
		while($row = mysql_fetch_array($result)){
			
			$name = $row["membername"];
			$last = $row["lastname"];
			$gender = $row["gender"];
			$address = $row["address"];
			$province = $row["province"];
			$email = $row["email"];
			$showusername = $row['username'];
			$pass = $row["password"];
		}
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="36%" bgcolor="#8CBAFF"><div align="center">แก้ไขข้อมูลสมาชิก</div></td>
        </tr>
        <form name="fedit" action="updatemem.php" method="POST">
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
              <input type="hidden" name="user" value="<?php echo $showusername; ?>" >
                  <input type="reset" name="button3" id="button3" value="ยกเลิก" /></td>
            </tr>
          </table></td>
        </tr>
      
        </form><?php } ?>
      </table>
       
</div>

</div>

<!-- wrap ends here -->	
	
<!-- footer starts here -->
<?php
	
	include('footer.php');
	
?>
<!-- footer ends here -->
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
</body>
</html>
