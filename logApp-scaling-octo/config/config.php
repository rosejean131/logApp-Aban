<?php
	define('ROOT_URL', '');
	define('DB_HOST', 'sql6.freesqldatabase.com');
	define('DB_USER', 'sql6525651');
	define('DB_PASS', 'APxDDFicZL');
	define('DB_NAME', 'sql6525651');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if($link === false){
			die("ERROR: could not connect.". mysqli_connect_error());}
			else {
				echo "Connected!";
		}