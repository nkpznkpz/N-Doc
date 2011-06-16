<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
	include("../config.inc.php");
	
			
	    	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }

	$eid = $_GET["eid"];
	$sql = "UPDATE elearning SET estatus ='accept'  WHERE eid =" . $eid  ;
	$result = mysql_query($sql);
	
	mysql_close();
	
	//echo  "<script language=\"javascript\"> alert('ทำการยืนยันเรียบร้อยแล้ว'); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= index.php?page=accept'>";
?>