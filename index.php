<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>

</head>

<body>
<div id="wrap">
<?php 
	include('header.php');
	
?>
<div id="sidebar">
<?php
  	include('egroup.php');
?>

<div  class="lastvisit"></div>
</div>
<div id="main">

<?php

	if($page=="index"){
		$pageurl="indexpage.php";
		
	}else if($page=="member"){
		$pageurl="bookmark.php";
		
	}else if($page=="add"){
		$pageurl="addelearningpage.php";
		
	}else if($page=="view"){
		$pageurl="listelearning.php";
		
	}else if($page=="about"){
		$pageurl="about.php";
		
	}else if($page=="contact"){
		$pageurl="contact.php";
		
	}else if($page=="editprofile"){
		$pageurl="editprofile.php";
		
	}else if($page=="message"){
		$pageurl="managemessage.php";
		
	}else if($page=="test"){
		$pageurl="contact.php";
		
	}else if($page=="addfile"){
		$pageurl="webcontrol/addfile.php";
		
	}else if($page=="viewgroup"){
		$pageurl="viewgroup.php";
		
	}else{
		$pageurl="indexpage.php";
	}
	
	include($pageurl);
	
?>
</div>
<div id="rightbar">
   <?php
	include('loginmenu.php');
	include('topeleaning.php');
?>
</div>
<?php
	include('footer.php');
?>
</div>
<!-- wrap ends here -->
<!-- footer starts here -->

<!-- footer ends here -->
</body>

</html>