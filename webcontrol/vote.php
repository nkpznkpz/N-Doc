<?php
		header("content-type: text/html; charset=tis-620");
		include('../config.inc.php');
		$eid = $_GET['eid'];
		$user = $_GET['user'];
		//setcookie("aa",1);
		if($vote=="voted$eid$user") {
				echo  "<script language=\"javascript\"> alert('คุณได้โหวตไปแล้ว กรุณากลับมาโหวตใหม่อีกครั้งใน 1 ชั่วโมงข้างหน้าครับ'); </script>";		
				echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
				
	    }else{
				setcookie("vote","voted$eid$user",time()+3600);
				$sql = "UPDATE elearning set evote=evote+1 where eid=$eid";
				$result = mysql_query($sql);
				echo  "<script language=\"javascript\"> alert('เพิ่มคะแนนเรียบร้อยแล้ว'); </script>";		
				echo "<script>window.location = '../viewelearning.php?eid=".$eid."';</script>";
		}
?>