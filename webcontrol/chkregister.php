<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<title>Untitled Document</title>
</head>

<body>
<?php   
       
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$province = $_POST['province'];
		$email = $_POST['email'];
		$username = $_POST['rusername'];
		$password = $_POST['rpassword'];
		
		include("../config.inc.php");
			$errortext="";
			$sql = "SELECT username FROM member WHERE username='$username'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num>0){
				echo  "<script language=\"javascript\"> alert('username นี้มีคนใช้แล้ว'); </script>";
				echo "<script>window.location = '../register.php';</script>";
			}else{
			$sql = "INSERT INTO Member (memberid,membername,lastname,gender,address,province,";
			$sql .="email,username,password,status)";
			$sql .=" VALUES ('$memberid','$name','$lastname','$gender','$address','$province'";
			$sql .=",'$email','$username','$password','1')";
		    $result = mysql_query($sql);
			echo  "<script language=\"javascript\"> alert('สมัครสมาชิกเรียบร้อยแล้ว'); </script>";
			echo "<script>window.location = '../index.php';</script>";
		}
?>
</body>
</html>
