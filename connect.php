<?php
$hostname = "localhost";
$database = "welyxsql4";
$username = "welyxsql4";
$password = "Stead1029!";

$connect = @mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

if(!$connect){
	echo "Not Connected";
	exit;
}
mysql_select_db($database, $connect);
?>