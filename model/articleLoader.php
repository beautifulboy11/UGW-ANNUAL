<?php
	//require '../config/config.php'; 
	$_HOST = "localhost";
	$_DBUSERNAME = "root";
	$_DBPASSWORD = "";
	$DATABASE = "ugw_annual_magazine";

	// Create connection
	$DB_CONNECTION = new mysqli($_HOST, $_DBUSERNAME, $_DBPASSWORD,$DATABASE);

	// Check connection status
	if ($DB_CONNECTION->connect_error) {
	    die("Connection failed: " . $DB_CONNECTION->connect_error);
	} 
	
	$sql = "SELECT `id`, `student_id`, `title`, `date`, `filelocation` FROM `file_uploads` ";
	$results = $DB_CONNECTION->query($sql);
?>