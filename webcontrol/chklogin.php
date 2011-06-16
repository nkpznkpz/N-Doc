<?php 
	/* $_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = $_POST["password"]; */
	include("../config.inc.php");

		$username = $_POST['user'];
		$password = $_POST['pass'];
		
		session_register("memberid"); //เป็นตัวแปรเดียวกับ $memberid
		session_register("username"); //เป็นตัวแปรเดียวกับ $memberid
		session_register("status"); //เป็นตัวแปรเดียวกับ $memberid
		$sql = "SELECT username,password,memberid,status FROM Member WHERE username='$username' and password='$password'";
		//$sql="Select * from member";
		$result = mysql_query($sql);// เอาไว้ query
		$n=mysql_num_rows($result); // เอาไว้นับจำนวนแถว
		$row=mysql_fetch_row($result);	//เอาไว้เอาข้อมูลที่คิวรี่ได้เก็บไว้ใน array
		if($n==0){
?>
<style type="text/css">
<!--
.style2 {color: #FF6600}
.style1 {color: #0099cb;
	font-size: 14px;
}
-->
</style>

<form id="login" name="login" method="post" action="">
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
          <p>
            <input type="submit" name="button2" id="button2" value="เข้าสู่ระบบ" onclick="return checklogin(login)" />
            <br>
username หรือ password ไม่ถูกต้อง</p>
          <div id="showerror2"></div>
      </div></td>
    </tr>
    <tr>
      <td class="form"><div align="center"><a href="register.php" class="style1">สมัครสมาชิก</a></div></td>
    </tr>
  </table>
</form>
<?php
	unset($_SESSION["username"]);
	unset($_SESSION["memberid"]);
	unset($_SESSION["status"]);
	session_destroy();
?>
<?php
		}else{
			
			$username = $row[0];
			$password = $row[1];
			$memberid = $row[2];
			$status = $row[3];
			$_SESSION["username"] = $username;
			$_SESSION["memberid"] = $memberid;
			$_SESSION["status"] = $status;
			
			
			if($_SESSION["status"]=="admin"){	
		
?>
                <form id="login" name="login" method="post" action="logout.php">
                  <table width="200" border="0">
                    
                    <tr>
                      <td class="form"><p align="center">ยินดีต้อนรับคุณ<br>
                      <?php
                            echo "$username";
                      ?>
                      <br />
                      <a href="admin/index.php">เข้าสู่หน้าผู้ดูแล</a></p>
                        <p align="center">
                        <input type="submit" name="button" id="button" value="Logout">
                      </p></td>
                    </tr>
                  </table>
                </form>

<?php
			  }else{
?>
                <form id="login" name="login" method="post" action="logout.php">
                  <table width="200" border="0">
                    
                    <tr>
                      <td class="form"><p align="center">ยินดีต้อนรับคุณ<br>
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
}
?>
