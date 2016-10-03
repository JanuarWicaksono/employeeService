<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$db_name = "db_country";

	mysql_connect($hostname, $username, $password);
	mysql_select_db($db_name) or die (mysql_error(). "Database not found");
?>