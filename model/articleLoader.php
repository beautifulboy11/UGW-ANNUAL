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
	
	$sql = "SELECT `id`, `post_author`, `post_title`, `post_date`, `filelocation` FROM `file_uploads` ";
        
        if(!$results = $DB_CONNECTION->query($sql)){
            echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
            exit(); 
        }
?>