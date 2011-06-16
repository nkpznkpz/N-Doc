<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
			@session_start();
	    	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }
?>

<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="../AjaxFramework.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #0099cb;
	font-size: 14px;
}
.style2 {color: #FF6600}
-->
</style>
</head>

<body>
<div id="wrap"><!-- wrap starts here -->
	<?php 
		include('header.php');
	?>
 
<div id="main">
<?php
			
			if($page=="accept"){
						$pageurl="accept.php";
						
			}else if($page=="editmember"){
						$pageurl="editmember.php";
						
			}else{
						$pageurl="accept.php";
			}
			include($pageurl);
?>
</div>

</div>
<!-- wrap ends here -->	
	
<!-- footer starts here -->
<?php
	include('footer.php');
?>
<!-- footer ends here -->
</body>
</html>
