<?php
	$hostname = "localhost";
	$database = "generative_lab";
	$username = "root";
	$password = "";
	
	$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

	mysql_select_db($database);	
?>