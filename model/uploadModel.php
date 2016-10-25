<?php
session_start();
 function saveData($target_file){
 	require '../config/config.php'; 
 	global $_FILES,$_POST;
 	$student = $_SESSION['username'];
 	$date = date("Y/m/d h:i:sa");
 	$title = $DB_CONNECTION->real_escape_string($_POST['title']);
 	
        $sql= "INSERT INTO `file_uploads`(`post_author`, `post_title`, `post_date`, `filelocation`)"
                . " VALUES ('".$student."','".$title."','".$date."','".$target_file."')";

 	$results = $DB_CONNECTION->query($sql);
 	if($results == false ){
            echo 'Query Failed: ' .$DB_CONNECTION->error;
 	}else{
            echo "Query is okay: ";
 	}
 	$DB_CONNECTION->close();
 }
?>