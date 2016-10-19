<?php
session_start();
 function saveData($target_file){
 	require '../config/config.php'; 
 	global $_FILES,$_POST;
 	$student = $_SESSION['username'];
 	$date = date("Y/m/d h:i:sa");
 	$title = $DB_CONNECTION->real_escape_string($_POST['title']);
 	$sql ="INSERT INTO `file_uploads` (`student_id`, `title`, `date`, `filelocation`)
 	VALUES ('".$student."','".$title."' ,'".$date."', '".$target_file."')";

 	$results = $DB_CONNECTION->query($sql);
 	if($results ==false ){
 		printf("Upload Failed:");
 	}else{
 		echo "Upload Successful";
 	}
 	$DB_CONNECTION->close();
 }
?>