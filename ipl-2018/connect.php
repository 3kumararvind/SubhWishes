<?php
	define("DB_NAME","******");
	define("DB_USER","*******");
	define("DB_PASS","***");
	define("DB_HOST","localhost");
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if ($con->connect_error) {
	   die("Connection failed: " . $con->connect_error);
	}
	

?>