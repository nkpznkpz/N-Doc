<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
	include("../config.inc.php");
	
	$etypename = $_POST["newname"];
	$etypeid = $_POST["etype2"];
	
	$sql = "SELECT * FROM elearningtype WHERE etypename='$etypename' and etypeid != $etypeid ";

				$result = mysql_query($sql);
				$num = mysql_num_rows($result);
						if($num==0){
							$sql = "UPDATE elearningtype SET etypename = '" . $etypename  . "' WHERE etypeid = " . $etypeid; 
							$result = mysql_query($sql);
							echo  "<script language=\"javascript\"> alert('แก้ไขชื่อหมวดหมู่เรียบร้อยแล้วครับ'); </script>";		
						}else{
							echo  "<script language=\"javascript\"> alert('หมวดหมู่นี้มีอยู่แล้วในฐานข้อมูลกรุณากรอกชื่อหมดหมู่ใหม่ครับ'); </script>";		
						}
	mysql_close();
	
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=editgrouppage.php'>";
?>


