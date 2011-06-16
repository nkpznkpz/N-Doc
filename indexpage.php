<?php
	include("config.inc.php");
	$sql = "SELECT * FROM elearning where estatus='accept' order by eid DESC limit 0,5";
	$result = mysql_query($sql);
?>	    
        <meta http-equiv=Content-Type content="text/html; charset=tis-620">
    			    <blockquote>
		  <h1><img src="icon/generic_alt.png" width="42" height="42" />ระบบสื่อการเรียนรู้ออนไลน์</h1>
<p class="quote">ระบบสื่อการเรียนรู้ออนไลน์</p>
<table width="100%" height="117" border="0">
  <tr>
    <td height="82" class="form"><div align="center" class="style1"><strong><img src="icon/generic_alt.png" width="60" height="60" /><br />
      ตัวอย่างสื่อการเรียนรู้</strong></div></td>
  </tr>
   <?php
			 while($row = mysql_fetch_array($result)){
					 $eid = $row['eid'];
					 $etopic = $row['etopic'];
					 $edetail = $row['edetail'];
					 $etopic = $row['etopic'];
					 $eowner = $row['eowner'];
					 $eadddate = $row['eadddate'];
					 $evote = $row['evote'];
					
					 if(strlen($edetail)>100){
					 $edetail = substr($edetail,0,100)."...";
					 }
	?>
  <tr>
    <td height="29" class="form">
        <table width="100%" border="0">
          <tr>
            <td width="14%"><?php 
				$sql="SELECT * FROM filedb WHERE  filetype='pic' and eid=$eid";
				$result2 = mysql_query($sql);
				$numfile = mysql_num_rows($result2);
				if($numfile==0){
					$showpicfile = "nopic.jpg";
				}else{
					$tmp = mysql_fetch_array($result2);
					$showpicfile = $tmp['filename'];
				}
		?>
                <img src="picupload/<?php echo $showpicfile; ?>" alt="ภาพสื่อการเรียนรู้" width="81" height="103" /></td>
            <td width="86%"><font color="#0066FF" size="3px"><b><?php echo $etopic; ?></b></font><br />
              <br />
            <font color="#FF6600"><?php echo $edetail; ?></font></td>
          </tr>
        </table>
        </td>
  </tr>
  <?php 
  		}
  ?>
</table>
 </h1>
	  </blockquote>