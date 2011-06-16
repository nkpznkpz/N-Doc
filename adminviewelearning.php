<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("config.inc.php");
	$eid = $_GET["eid"];
	
?>
<?php
					if($_SESSION["status"]!="admin"){
					       echo "<script>window.location = 'index.php?page=index';</script>";

					 }else{}
					
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">


<link rel="stylesheet" href="temcss.css" type="text/css" />
	
<title>ระบบสื่อการเรียนรู้ออนไลน์</title>
<script type = "text/javascript" src="AjaxFramework.js"></script>
<style type="text/css">
<!--
.style1 {
	color: #0099cb;
	font-size: 14px;
}
.style2 {color: #FF6600}
.style3 {color: #FFFFFF}
.style4 {font-size: 70px}
.style5 {font-size: 18px}
-->
</style>
</head>

<body>
<div id="wrap"><!-- wrap starts here -->
	<?php 
		include('header.php');
	?>		
				
	
  <div id="sidebar" >
    <?php
  		include('egroup.php');
	?>
    <p>&nbsp;</p>
	<div class="lastvisit"></div>
  </div>
		
<div id="main">

<?php
			
			if(!isset($eid)){
					echo '<br><br><div align="center">ไม่พบสื่อการเรียนรู้ที่ต้องการ  หรือสื่อการเรียนรู้นี้ถูกลบไปแล้ว</div>';
			}else{
					$sql = "select * from elearning where eid=$eid";
					$result = mysql_query($sql);
					$num = mysql_num_rows($result);	
			}
			if($num==0){
								echo '<br><br><div align="center">ไม่พบสื่อการเรียนรู้ที่ต้องการ  หรือสื่อการเรียนรู้นี้ถูกลบไปแล้ว</div>';
			}else{
								if($row = mysql_fetch_array($result)){
									 $eid = $row['eid'];
									 $etopic = $row['etopic'];
									 $edetail = $row['edetail'];
									 $etopic = $row['etopic'];
									 $eowner = $row['eowner'];
									 $eadddate = $row['eadddate'];
									 $evote = $row['evote'];
									 
									
?>
    <blockquote><table width="100%" height="221" border="0">
<tr>
              <td height="24" class="form"><div align="center" class="style1">
              <strong><?php echo $etopic;  ?></strong></div></td>
        </tr>
            
            <tr>
              <td class="form"><div align="left" class="style3">
                <table width="460" border="0">
                  <tr>
                    <td width="117">
                    <?php 
					 //query   pic
									 $sql = "SELECT * FROM filedb where eid=$eid and filetype='pic' ";
									 $result = mysql_query($sql);
									 $row = mysql_fetch_array($result);
									 
									 $filename = $row['filename'];
					?>
                    <img src="picupload/<?php echo $filename; ?>" width="117" height="124" /></td>
                    <td width="333"><font color="#000000"><?php echo $edetail;  ?></font></td>
                  </tr>
                </table>
                </div></td>
        </tr>
            <tr><td><?php 
					 //query file download
									 $sql = "SELECT * FROM filedb where eid=$eid and filetype='fileother' ";
							
								     $result1 = mysql_query($sql);
									 $num = mysql_num_rows($result1);
									
									 if($num==0){
									      		 echo  "<img src=\"icon/DriveDownloads.png\" alt=\"ดาวโหลด\" width=\"20\" height=\"20\" > ไม่มีไฟล์ดาวโหลด";
									  }else{
							
										  while($row = mysql_fetch_array($result1)){
											     $filename = $row['filename'];										
											     $filenameshow = substr($filename,13,strlen($filename));
											   	 echo  "file : <img src=\"icon/DriveDownloads.png\" alt=\"ดาวโหลด\" width=\"20\" height=\"20\" >";
												 echo "<a href=\"otherupload/$filename\"> $filenameshow </a><br> ";
										   }									 		
									  }
									
					?> </td></tr>
            <tr>
              <td height="21" class="form"><div align="right">ผู้เพิ่ม :<a href="viewuser.php?user=<?php echo $eowner; ?>" target="_blank"><?php echo $eowner; ?></a></div>
              </td>
        </tr>
          </table>
      <p align="right"><a href="addbookmark.php?eid=<?php echo $eid;?>">เก็บเข้าเป็นสื่อของฉัน<img src="icon/NotePad.png" alt="เก็บเข้าเป็นสื่อการเรียนรู้ของฉัน" width="50" height="50" /></a></p>
      <p align="center"><span class="style5">คะแนน <?php echo $evote; ?> point<br />
      </span> <a href="webcontrol/vote.php?eid=<?php echo $eid; ?>"><img src="icon/vote.gif" alt="ให้คะแนน" width="120" height="80" /></a>
      
      </p>
      <p align="left" class="style5"><img src="icon/MyDocuments2.png" width="50" height="50" />ความคิดเห็น</p>
   <?php
					}
			
	?>                   
                <div align="center">
<?php
					//query comment
					
					  $sql = "SELECT * FROM comment where eid=$eid ";
					  $result = mysql_query($sql);
					  $num = mysql_num_rows($result);
					  
					  if(!isset($start)){
					  $start = 0;
					  }
					  $limit = 5; // แสดงผลหน้าละกี่หัวข้อ	 
					 $sql = "SELECT * FROM comment where eid=$eid order by commentid DESC limit $start,$limit ";
					 
					 $result = mysql_query($sql);
?>                
<?php
					 while($row = mysql_fetch_array($result)){
					 $commentid = $row['commentid'];
					 $comment = $row['comment'];
					 $commentdate = $row['commentdate'];
					 $showusername = $row['username'];
					
					 //show link  delete comment for admin
					if($_SESSION['status']=="admin"){
							$linkdeletecomment = "<a href=\"webcontrol/deletecomment.php?cid=$commentid&eid=$eid\"><img src=\"icon/delete.gif\">[ลบ]</a>";
					}
					 
?>     
                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="53" class="form"><div align="left">ข้อความ :<?php echo $comment;?></div></td>
                  </tr>
                  <tr>
                    <td class="form">ผู้ตอบ : <a href="viewuser.php?user=<?php echo $showusername;?>" target="_blank"><?php echo $showusername;?></a> เมื่อวันที่ : <?php echo $commentdate;?> <?php echo $linkdeletecomment; ?></td>
                  </tr>
                </table><br>
<?php
					}
					 //show link  delete elearning for admin
					if($_SESSION['status']=="admin"){
						$linkmanageelearning = "<a href=\"editelearning.php?eid=$eid\"><img src=\"icon/accept.gif\" width=\"16\" height=\"16\" />[แก้ไขสื่อการเรียนรู้นี้]</a> <a href=\"webcontrol/deleteelearning.php?eid=$eid\" onclick=\"return condelete()\"><img src=\"icon/delete.gif\" width=\"12\" height=\"12\" />[ลบสื่อการเรียนรู้นี้ !!]</a>";
					}
?>
                <div align="center">
<?php

	$prev = $start-5;
	$next = $start+5;
	if($start!=0){
	echo "<font color=\"#000000\"><a href=\"viewelearning.php?eid=$eid&start=".$prev."\" >&lt;&lt;Prev</a></font>";
	}
	echo "<img src=\"icon/blank.jpg\" width='50'>";
	//echo $start.sss.$num;
	if($start < $num-5){
	echo "<font color=\"#000000\"><a href=\"viewelearning.php?eid=$eid&start=".$next."\" >Next&gt;&gt;</a></font>";
	}
	
?>
                  <br />
                </div>
      <form id="addcomment" name="addcomment" method="post" action="webcontrol/addcomment.php">
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td class="form"><div align="center">เพิ่มความคิดเห็น</div></td>
    </tr>
    <tr>
      <td class="form"><div align="center">
      <input type="hidden" name="eid" value="<?php echo $eid;?>" >
          <textarea name="comment" cols="45" rows="5" class="textbox" id="comment"></textarea>
      </div></td>
    </tr>
    <tr>
      <td class="form"><div align="center">
          <input type="submit" name="button2" id="button2" value="เพิ่มความคิดเห็น" onclick="return chkcomment(addcomment)">
          <input type="reset" name="button3" id="button3" value="ยกเลิก" />
      </div></td>
    </tr>
  </table>
        <br />
      </form><p align="center"><?php echo $linkmanageelearning; ?></p>
    </blockquote>
<?php }?>	
</div>

<div id="rightbar">
<?php
	include('loginmenu.php');
?>
<?php
	include('topeleaning.php');
?>  
  </div>
</div><!-- wrap ends here -->	
	
<!-- footer starts here -->
<?php
	include('footer.php');
?>
<!-- footer ends here -->
</body>
</html>
<script language="javascript">
	  	
			function chkcomment(addcomment){
				var comment  = addcomment.comment.value;
				if(comment==""){
						alert("กรุณากรอกข้อความติชมด้วยครับ");
						return false;
				}
				return true;
			}
			function condelete(){
				if(confirm("คุณต้องการลบสื่อการเรียนรู้นี้หรือไม่")){
						return true;
				}
				return false;
			}
	  </script>