<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
				include("config.inc.php");	
					 $owner = $_SESSION["username"];
					 $topicname = $_POST["topicname"];
					 $detail = $_POST["detail"];
					 $cat = $_POST["cat"];
?>

<link rel="stylesheet" href="temcss.css" type="text/css" />
<title>�к����͡�����¹����͹�Ź�</title>
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
<div align="center"><img src="icon/generic_alt.png" width="60" height="60" /><br />
  <span class="style4">�������͡�����¹���</span><br>
</div>
<?php
//upload file
//����Ҿ
$errortext="";
$iserror=0;
$pathpic = "picupload/";
$pathfile = "otherupload/";
$type_img_check = array("image/gif","image/jpeg","image/png");
$type_file_check = array("text/plain","application/octet-stream","application/x-zip-compressed","application/zip","application/msword","application/x-shockwave-flash","application/pdf");
$picfile = true;
$file1=true;
$file2=true;
	//echo "llll".$_FILES['picfile']['type'];
	 if(!$_FILES['picfile']['name']){
				$picfile = false;
	 }else{
				if(!check_filetype($_FILES['picfile']['type'],$type_img_check)){
						$errortext = " ��� ".$_FILES['picfile']['name']."���������ٻ����˹����<br>";
						$iserror=1;
				}else if($_FILES['picfile']['size']>512000){
						$errortext .="  ��� ".$_FILES['picfile']['name']."��Ҵ�Թ��˹�<br>";		
						$iserror=1;
				}
				
	}
	//����͡���1
	
	if(!$_FILES['file1']['name']){
				$file1=false;
	 }else{
				if(!check_filetype($_FILES['file1']['type'],$type_file_check)){
						$errortext .= " ��� ".$_FILES['file1']['name']." ���������͡���<br>";
						$iserror=1;
				}else{
						
				}
			
				if($_FILES['file1']['size']>512000){
						$errortext .="  ��� ".$_FILES['file1']['name']."  ��Ҵ�Թ��˹�<br>";		
						$iserror=1;
				}else{
					
				}
				
	}
	//����͡���2
	if(!$_FILES['file2']['name']){
				$file2=false;
	 }else{
				if(!check_filetype($_FILES['file2']['type'],$type_file_check)){
						$errortext .= " ��� ".$_FILES['file2']['name']."���������͡���<br>";
						$iserror=1;
				}
				if($_FILES['file2']['size']>512000){
						$errortext .="  ��� ".$_FILES['file2']['name']."��Ҵ�Թ��˹�<br>";		
						$iserror=1;
				}
	}
	
			if($iserror==1){
					echo  $errortext;
					echo '<a href="javascript:back();">��Ѻ����</a>';
			}else{
				
						
				//save elearning
						$timeval=time(); 
						$addip = $_SERVER["REMOTE_ADDR"];
						$sql = "insert into elearning (eid,etypeid,etopic,edetail,eowner,eadddate,evote,estatus,eaddip)";
						$sql.= " values (".getmax_eid().",$cat,'$topicname','$detail','$owner','".date('Y-m-d H:i:s',$timeval)."',0,'noaccept','$addip')";
						$result = mysql_query($sql);
						
				//save file
						$nrundom = rand(1,99);
						$prefix = date("Y-m-d-His")."-".$nrundom;
						if($picfile==true){
							$filename = $_FILES['picfile']['name'];
							$filename = str_replace(" ","",$filename);
							
							$extenfile = substr($filename,strlen($filename)-3,strlen($filename));
							@copy($_FILES['picfile']['tmp_name'],$pathpic.$prefix.$filename);
							savepath($prefix.$filename,$extenfile,"pic");
						}
						if($file1==true){
							$filename = $_FILES['file1']['name'];
							$filename = str_replace(" ","",$filename);
							$extenfile = substr($filename,strlen($filename)-3,strlen($filename));
							@copy($_FILES['file1']['tmp_name'],$pathfile.$prefix.$filename);
							savepath($prefix.$filename,$extenfile,"fileother");
						}
						if($file2==true){
							$filename = $_FILES['file2']['name'];
							$filename = str_replace(" ","",$filename);
							$extenfile = substr($filename,strlen($filename)-3,strlen($filename));
							@copy($_FILES['file2']['tmp_name'],$pathfile.$prefix.$filename);
							savepath($prefix.$filename,$extenfile,"fileother");
						}
						echo "�س���������͡�����¹������º�������� ��س��͡���׹�ѹ���͡�����¹�����ҡ webmaster  ��Ѻ";
		}
			//check file
 			function check_filetype($filetype,$typecheck){
			   for($i=0; $i<count($typecheck);$i++){
						if($filetype==$typecheck[$i]){
								return true;
						}
				}
				return false;
			}
			//get max eid
			function getmax_eid(){
				$sql = "select max(eid) from elearning";
				$result = mysql_query($sql);
				if($row = mysql_fetch_row($result)){
					$eid = $row[0];
				}
				return $eid+1;
			}
 			//save file path
					function savepath($filename,$extenfile,$filetype){
						$sql = 	"insert into filedb (eid,filename,extenfile,filetype) values (".(getmax_eid()-1).",'$filename','$extenfile','$filetype')";
						
						$result = mysql_query($sql);
					}
 
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