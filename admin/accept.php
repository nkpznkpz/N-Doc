<?php
	include("../config.inc.php");
	
?>
<?php
			
	    	if($_SESSION["status"]=="admin"){
					
			}else{
					echo "<script>window.location = '../index.php?page=index';</script>";
			 }
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">

  <blockquote>
		  <h1 align="center"><img src="../icon/Email.png" width="92" height="90" /><br />
		    �׹�ѹ��������͡�����¹���</h1>
   <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#8FCDDA">
  <tr>
    <td width="36%">
      <div align="center">��Ǣ��</div></td>
    <td width="12%"><div align="center">�����������</div></td>
    <td width="20%"><div align="center">���������</div></td>
    <td width="16%"><div align="center">IP Address</div></td>
    <td width="8%"><div align="center">�׹�ѹ</div></td>
    <td width="8%"><div align="center">ź</div></td>
  </tr>
 <?php
 		$sql = "SELECT * FROM elearning 	WHERE estatus= 'noaccept' order by eid DESC";
		$rs = mysql_query($sql);
		//$num = mysql_num_rows($rs);
		while($row = mysql_fetch_array($rs)){
			$eid = $row["eid"];
			$etopic = $row["etopic"];
			$eowner = $row["eowner"];
			$eadddate = $row["eadddate"];
			$eaddip = $row["eaddip"];
				
			if(strlen($etopic)>50){
				$etopic=substr($etopic,0,50);
			}
		        $show='<tr>';
				$show.='<td class="form"><img src="../images/news.gif" width="10" height="15" ><a href="../adminviewelearning.php?eid='.$eid.'" target="_blank"> ' . $etopic . '</a></td>';
				$show.='<td class="form"><div align="center">'.$eowner.'</div></td>';
				$show.='<td class="form"><div align="center">'.$eadddate.'</div></td>';
				$show.='<td class="form"><div align="center">'.$eaddip.'</div></td>';
				$show.='<td class="form"><div align="center"><a href="acceptcontrol.php?eid=' . $eid . '"><img src="../icon/accept.gif" alt="�׹�ѹ" width="16" height="16">�׹�ѹ</a></div></td>';
				$show.='<td class="form"><div align="center"><a href="deleteelearning.php?eid=' . $eid . '" ><img src="../icon/delete.gif" width="16" height="16">ź</a></div></td>';
			    $show.='</tr>';
		
		
		
		

			echo $show;
		}
 ?>
 </table>

�</h1>
    </blockquote>
    