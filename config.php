<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("db4free.net", "cooperaj", "09cooperA", "astonevents1997");

	if (!$conn) {
		die("Error connecting to database I hate myself much: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'www.db4free.net');
?>
