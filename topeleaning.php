<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<?php
		include('config.inc.php');
		$sql = "SELECT  etopic , evote, eid FROM   elearning  ORDER BY evote DESC LIMIT 5 ";
		$rs = mysql_query($sql);
?>


<table width="200" border="0">
  <tr>
    <td colspan="2" class="form"><div align="center"><img src="icon/Favourites.png" width="60" height="60" /><br />
            <span class="style1">สื่อการเรียนรู้ยอดนิยม</span><br />
    </div></td>
  </tr>

    <?php
			while($row = mysql_fetch_array($rs)){
     			$topic =  $row["etopic"] ;
				$vote =  $row["evote"] ;
				$eid = $row["eid"];
				if(strlen($topic)>20){
					$topic = substr($topic,0,20);
				}
				$show = '<tr>';
    			$show.= '<td width="141" class="form"><a href="viewelearning.php?eid='.$eid.'">'.$topic.'</a></td>';
    			$show.= '<td width="49" class="form"><div align="right">'.$vote.'</div></td>';
  				$show.= '</tr>';
				echo $show;
} 
?>
</table>
