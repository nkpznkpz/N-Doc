<?php
	@session_start();
	 include('config.inc.php');
	
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">

<?php
					if(!isset($_SESSION["username"] )){
					echo "<script>window.location = 'index.php?page=index';</script>";

				 }else{
			 		$username = $_SESSION["username"];
					
?>

            
     <?php
	 			$sql = "SELECT  messageid,message,sender FROM  privatemessage  WHERE  receiver = '" . $username . "'";
				
				$rs = mysql_query($sql);		
				$num = mysql_num_rows($rs);
				if($num==0){
				$show = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
        		$show .= '<tr>';
			 	$show .= '<td width="36%"  class="form"><div align="center"><a href="index.php?page=member">���ͷ��ѹ�֡���</a></div></td>';
			  	$show .= '<td width="36%" class="form"><div align="center"><a href="index.php?page=editprofile">��䢢�������ǹ���</a></div></td>';
			  	$show .= '<td width="28%" bgcolor="#8CBAFF"><div align="center">�Ѵ��â�ͤ���</div></td>';
				$show .= '</tr>';
					echo $show;
					echo '<tr><td colspan="3" class="form"><br><br><div align="center"><b>����բ�ͤ���</b></div><br><br></td></tr></table>';
					
				}else{
				
				$show = '<table width="100%" border="0" cellpadding="0" cellspacing="0">';
        		$show .= '<tr>';
			 	$show .= '<td width="36%" class="form"><div align="center"><a href="index.php?page=member">���ͷ��ѹ�֡���</a></div></td>';
			  	$show .= '<td width="36%" class="form"><div align="center"><a href="index.php?page=editprofile">��䢢�������ǹ���</a></div></td>';
			  	$show .= '<td width="28%" bgcolor="#8CBAFF"><div align="center">�Ѵ��â�ͤ���</div></td>';
				$show .= '</tr>';
				$show .= '<tr>';
          		$show .= '<td colspan="3" class="form"><table width="100%" border="0">';
            	$show .= '<tr>';
              	$show .= '<td width="66%" bgcolor="#FFE888" align="center">��ͤ���</td>';
              	$show .= '<td width="27%" bgcolor="#FFE888"><div align="center">�����</div></td>';
              	$show .= '<td width="7%" bgcolor="#FFE888"><div align="center">ź</div></td>';
            	$show .= '</tr>';
				
	 			while($row = mysql_fetch_array($rs)){
				$messageid = $row["messageid"];
				$message = $row["message"];
				$sender = $row["sender"];
			
				$show .= '<tr>';
				$show .= '<td  width="66%"><div align="center">' . $message .'</div></td>';
				$show .= '<td  width="27%"><div align="center">' . $sender. '</div></td>';
    			$show .= ' <td width="7%"><div align="center"><a  href="webcontrol/deleteMessage?messageid=' . $messageid .'">';
				$show .='<img src="icon/iconerror.gif" alt="ź" width="25" height="25" /></a></div></td>';
  				$show.= '</tr>';
				
				}
				echo $show;	
				
				}
	}
?>       
    
          </table>
          <p>&nbsp;</p></td>
        </tr>
       </table> 