<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
		include("../config.inc.php");

		$etypename = $_POST['type'];
		if(!$etypename == "" || $etypename == null){
				$sql = "SELECT * FROM elearningtype WHERE etypename='$etypename' ";
				$result = mysql_query($sql);
				$num = mysql_num_rows($result);
						if($num==0){
						$sql = "INSERT INTO elearningtype (etypename) VALUES ( '$etypename')";
						$result = mysql_query($sql);
						echo  "<script language=\"javascript\"> alert('������Ǵ�������º�������Ǥ�Ѻ'); </script>";		
							mysql_close();
						}else{
						echo  "<script language=\"javascript\"> alert('��Ǵ����������������㹰ҹ�����š�سҡ�͡����������������Ѻ'); </script>";		
						}
	
	
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= managegroup.php'>";
		
		}
?>
