<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("www.db4free.net", "cooperaj", "09cooperA", "astonevents1997");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/astonevents1997/');
?>