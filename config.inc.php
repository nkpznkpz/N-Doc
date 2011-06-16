<?php
$DBServer = "localhost";
$DBUsername = "root";
$DBPassword = "1234";
$DBName="elearning";
$conn = @mysql_connect($DBServer, $DBUsername , $DBPassword ) or die("Could not connect to dbserver");
 mysql_select_db($DBName,$conn);
 mysql_query('SET CHARACTER SET tis620');
//mysql_query("SET NAMES UTF8");
/*mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
*/
@session_start();
?>
