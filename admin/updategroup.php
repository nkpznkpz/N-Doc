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
							echo  "<script language=\"javascript\"> alert('��䢪�����Ǵ�������º�������Ǥ�Ѻ'); </script>";		
						}else{
							echo  "<script language=\"javascript\"> alert('��Ǵ����������������㹰ҹ�����š�سҡ�͡����������������Ѻ'); </script>";		
						}
	mysql_close();
	
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=editgrouppage.php'>";
?>


