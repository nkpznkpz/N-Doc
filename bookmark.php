<?php
	
	 include('config.inc.php');
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">

<?php
					if(!isset($_SESSION["memberid"] )){
					echo "<script>window.location = 'index.php?page=index';</script>";

					 }else{}
					 $username = $_SESSION['username'];
?>
<?php                     
				/* $sql = "SELECT  memberid FROM member WHERE username = '".$_SESSION["username"] . "' and password = '" . $_SESSION["password"]"'";
				echo $sql ;
				$rs = mysql_query($sql);
				while($row = mysql_fetch_array($rs)){	
				$memberid = $row["memberid"];
				}  */
				$sql = "SELECT  eid FROM bookmark WHERE memberid =$memberid";
				$rs = mysql_query($sql);			
?>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="36%" bgcolor="#8CBAFF"><div align="center">สื่อที่บันทึกไว้</div></td>
          <td width="36%" class="form"><div align="center"><a href="index.php?page=editprofile">แก้ไขข้อมูลส่วนตัว</a></div></td>
          <td width="28%" class="form"><div align="center"><a href="index.php?page=message">จัดการข้อความ</a></div></td>
        </tr>
        <tr>
          <td colspan="3" class="form"><table width="100%" border="0">
<?php
			$num = mysql_num_rows($rs);
            if($num==0){
						echo '<div align="center"><b>ไม่มีข้อความ</b></div>';
				}else{
 ?>
            <tr>
              <td width="93%" bgcolor="#FFE888"><div align="center">ชื่อ</div></td>
              <td width="7%" bgcolor="#FFE888"><div align="center">ลบ</div></td>
            </tr>
            
     <?php
	 			
				
				
	 			while($row = mysql_fetch_array($rs)){
				$eID = $row["eid"];
	 			$sql = "SELECT etopic FROM elearning WHERE eid = " . $eID;
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result)){ 
	    		$eTopic = $row["etopic"];
			}
				$show = '<tr>';
				$show .= '<td><img src="images/arrow.gif"><a href="viewelearning.php?eid='.$eID.'">  '.$eTopic.'</a></td>';
    			$show .= ' <td><div align="center"><a  href="webcontrol/deleteBookmark.php?eid='.$eID.'"><img src="icon/iconerror.gif" alt="ลบ" width="25" height="25" /></a></div></td>';
  				$show.= '</tr>';
				echo $show;	
				}
	}
	
?>       
    
          </table>
          <p>&nbsp;</p></td>
        </tr>
       </table> 