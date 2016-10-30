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
 		require("sendgrid-php/sendgrid-php.php");
			$sender_name = "UGW-Admin";
			$sender_email = "ugw@ugw.com";
			$sender_message = "Student has uploaded a file"];
			$send_to = "admin@admin.com";
			$from = new SendGrid\Email($sender_name,$sender_email);
			$subject = "New Upload Notification";
			$to = new SendGrid\Email("New Mail",$send_to);
			$content = new SendGrid\Content("text/plain", $sender_message);
			$mail = new SendGrid\Mail($from, $subject, $to, $content);
			$apiKey = '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';
			$sg = new SendGrid($apiKey);
			$response = $sg->client->mail()->send()->post($mail);
			$_SESSION['notification'] = "Notification Sent Succesfully";
            echo "Query is okay: ";
 	}
 	$DB_CONNECTION->close();
 }
?>