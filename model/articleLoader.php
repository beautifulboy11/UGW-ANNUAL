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
	
	$sql = "SELECT fu.id, fu.post_author AS author, fu.post_title AS title, fu.post_date AS date, fu.filelocation, fu.post_status AS status, fu.comment_status,uc.comment "
                . "FROM file_uploads AS fu "
                . "INNER JOIN ugw_comments AS uc ON fu.id = uc.comment_post_ID "
                . "WHERE fu.post_author = '".$_REQUEST['student']."'";
        
        if(!$results = $DB_CONNECTION->query($sql)){
            echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
            exit(); 
        }
        $data = array();
         while($row=$results->fetch_assoc()){
             $data []=$row;
         }
         
        header('Content-type: application/json');
	echo json_encode($data);
?>