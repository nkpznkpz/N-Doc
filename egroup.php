<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<style type="text/css">
<!--
.style1 {	color: #0099cb;
	font-size: 14px;
}
.style2 {font-size: 14px}
-->
</style>
<div align="center"><span class="style1">
<table width="100%" border="0" cellspacing="1" class="form">
  <tr>
    <td><div align="center"><span class="style1"><img src="icon/portafolio.png" alt="��Ǵ����" width="60" height="60" /><br />
              <strong>��Ǵ����</strong></span></div></td>
  </tr>
  <?php
	include('config.inc.php');
	$sql = "SELECT * FROM elearningtype";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
   				$ename = $row["etypename"];
				$etypeid = $row["etypeid"];
   				$show = '<tr>';
    			$show.= '<td  class="form"><div align="lett"><img src="images/news.gif"> :: <a href="index.php?page=viewgroup&group='.$etypeid.'">'.$ename.'</a></div></td>';
  				$show.= '</tr>';				
				echo $show;
				}	
   		 ?>
</table>
<br />
</span>
</div>
<form name="fsearch" id="fsearch" method="get" action="search.php">
<table width="100%" border="0" cellspacing="1" class="form">
  <tr>
    <td ><div align="center">
      
        <span class="style2"><span class="style1"><strong>�������͡�����¹���</strong><br />
        <img src="icon/Search.png" alt="��Ǵ����" width="30" height="30" /></span>��͡�Ӥ���</span>
        <input name="txtsearch" type="text" id="txtsearch" size="15">
      
      </div></td>
  </tr>
  <tr>
    <td ><div align="center">
      <input name="Submit" type="submit" value="����">
    </div></td>
  </tr>
</table>
</form>
