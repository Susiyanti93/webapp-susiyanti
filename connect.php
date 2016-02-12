<?php 
$hostname = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "b06c9bbd64d7ba";
$password = "bae066a8";
$database = "db_webapp_susiyanti";

$conn = mysql_connect($hostname, $username, $password) or die ("Error host database");
$db = mysql_select_db($database) or die ("Error database");
 ?>