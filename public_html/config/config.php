<?php
	ob_start(); //Turns on output buffering 
	session_start();

	$timezone = date_default_timezone_set("Australia/Melbourne");

	$db_host = "localhost"; // Database host
	$db_user = "socialnet_db"; // Database user
	$db_pass = "u1XKbkcfj"; // Database password
	$db_name = "socialnet_db"; // Database name
	$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name); //Connection variable

	if(mysqli_connect_errno()) 
	{
		echo "Failed to connect: " . mysqli_connect_errno();
	}

?>