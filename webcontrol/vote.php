<?php
		header("content-type: text/html; charset=tis-620");
		include('../config.inc.php');
		$eid = $_GET['eid'];
		$user = $_GET['user'];
		//setcookie("aa",1);
		if($vote=="voted$eid$user") {
				echo  "<script language=\"javascript\"> alert('�س����ǵ����� ��سҡ�Ѻ����ǵ�����ա����� 1 ���������ҧ˹�Ҥ�Ѻ'); </script>";		
				echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
				
	    }else{
				setcookie("vote","voted$eid$user",time()+3600);
				$sql = "UPDATE elearning set evote=evote+1 where eid=$eid";
				$result = mysql_query($sql);
				echo  "<script language=\"javascript\"> alert('������ṹ���º��������'); </script>";		
				echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
		}
?>