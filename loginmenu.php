<?php
		include("config.inc.php");
?>
<meta http-equiv=Content-Type content="text/html; charset=tis-620">
<style type="text/css">
<!--
.style1 {	color: #0099cb;
	font-size: 14px;
}
.style2 {color: #FF6600}
-->
</style>
<table width="200" border="0">
  <tr>
    <td class="form"><div align="center" class="style1"><img src="icon/varios.png" alt="login" width="60" height="60" /><br />
        �������к�</div></td>
  </tr>
</table>
<div id="showlogin">
<?php
			if(!isset($_SESSION["username"])){
			
			
?>
<form id="login" name="login" method="post" action='webcontrol/chklogin.php' >
  <table width="200" border="0">
    <tr>
      <td class="form"><div align="left"> <span class="style2">username</span>
              <input type="text" name="username" id="username" />
      </div></td>
    </tr>
    <tr>
      <td class="form"><span class="style2">password</span>
          <input type="password" name="password" id="password" />      </td>
    </tr>
    <tr>
      <td class="form"><div align="center">
          <input type="submit" name="button" id="button" value="�������к�" onclick="return checklogin(login)" />
          <div id="showerror"></div>
      </div></td>
    </tr>
    <tr>
      <td class="form"><div align="center"><a href="register.php" class="style1">��Ѥ���Ҫԡ</a></div></td>
    </tr>
  </table>
</form>
<?php
		}else if($_SESSION["status"]=="admin"){
		$username = $_SESSION["username"];
?>
<form id="login" name="login" method="post" action="logout.php">
  <table width="200" border="0">
    
    <tr>
      <td class="form"><p align="center">�Թ�յ�͹�Ѻ�س<br>
      <?php
      		echo "$username";
	  ?>
	  <br />
      <a href="admin/index.php">������˹�Ҽ�����</a></p>
        <p align="center">
        <input type="submit" name="button" id="button" value="Logout">
      </p></td>
    </tr>
  </table>
</form>

<?php
}else{
			$username = $_SESSION["username"];
?>

<form id="login" name="login" method="post" action="logout.php">
  <table width="200" border="0">
    
    <tr>
      <td class="form"><p align="center">�Թ�յ�͹�Ѻ�س<br>
      <?php
      		echo "$username";
	  ?>
	  </p>
      <p align="center">
        <input type="submit" name="button" id="button" value="Logout">
      </p></td>
    </tr>
  </table>
</form>
<?php
		
}
?>
</div>

<script language="javascript">

	function checklogin(login){
	 
		var username = login.username.value;
		var password = login.password.value;
		var showl = getID("showlogin");
		
		if(password==""||username==""){
		alert('��سҡ�͡���������ú��ǹ');
		}else{
			addParamPost("user",username);
			addParamPost("pass",password);
			postDataReturnText("webcontrol/chklogin.php",showloginpage); //�觤�������������˹, return �ҷ��ѧ�ѹ�˹
			showl.innerHTML='<div align=\'center\'><img src="images/preloading.gif" /></div>';
		}
		return false;
	}
	function showloginpage(text){
			getID("showlogin").innerHTML = text;
		}
</script>
