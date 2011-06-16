<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
			@session_start();
	    	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }
?>
 <p align="center"><img src="../icon/varios.png" width="60" height="60" /><br /> 
      แก้ไขข้อมูลสมาชิก
</p>
<form id="search" name="search" method="GET" action="editmemberform.php">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="form">
        <tr>
          <td width="24%"><div align="right">กรอก username</div></td>
          <td width="76%"><input type="text" name="mem" id="mem" /><input type="submit" name="button" id="button" value="ค้นหา" >
          </td>
        </tr>
           <td>
          <div id="showresultmem"></div>
          </td>
        </tr>
      </table>
      <br><br><br><br><br><br>
        </form>
        
   