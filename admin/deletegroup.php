<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
		include("../config.inc.php");
		
		$etypeid = $_POST["etype2"];
		$sql ="SELECT * FROM elearning WHERE etypeid=$etypeid";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if($num==0){
			$sql = "DELETE FROM elearningtype WHERE etypeid =" . $etypeid ;
		$result = mysql_query($sql);
		
		mysql_close();
			echo  "<script language=\"javascript\"> alert('ź��Ǵ�������͡���º�������Ǥ�Ѻ'); </script>";
		}else{
			echo  "<script language=\"javascript\"> alert('�������öź��Ǵ��������  ��س�ź���͡�����¹������������Ǵ����͡��͹��Ѻ'); </script>";
		}
		
		
		echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= deletegrouppage.php'>";
?>