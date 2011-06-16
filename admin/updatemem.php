<meta http-equiv=Content-Type content="text/html; charset=tis-620">

<?php

	include("../config.inc.php");

	    	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }

	$user = $_POST["user"];
	$name = $_POST["name"];
	$last = $_POST["last"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];
	$province = $_POST["province"];
	$email = $_POST["email"];
	$pass = $_POST["pass"]; 
	
	$sql = "UPDATE member SET membername = '" . $name . "',lastname ='" .$last ."',gender ='" . $gender . "',address = '" . $address . "',province = " . $province. ",email = '" . $email ."',password ='" . $pass ."' WHERE username ='" . $user . "'";
	$result = mysql_query($sql);
	
	mysql_close();
	
	echo  "<script language=\"javascript\"> alert('แก้ไขข้อมูลเรียบร้อยแล้ว'); </script>";
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL= editmemberform.php?mem=$user'>";
?>


