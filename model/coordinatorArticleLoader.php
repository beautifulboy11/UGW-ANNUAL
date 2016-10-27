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
	
	$sql = "SELECT `ugw_user_faculty_map`.`faculty_id`, `ugw_users`.`name`AS 'name', `file_uploads`.`post_author`, `file_uploads`.`post_title`, `file_uploads`.`post_date`, `file_uploads`.`filelocation`, `file_uploads`.`post_status`, `file_uploads`.`comment_status`\n"
    . "FROM `file_uploads`\n"
    . "LEFT JOIN `ugw_users` ON `file_uploads`.`post_author` = `ugw_users`.`ID` \n"
    . "LEFT JOIN `ugw_user_faculty_map` ON `ugw_users`.`ID` = `ugw_user_faculty_map`.`user_id`"
    . "WHERE ugw_user_faculty_map.faculty_id = '".$_REQUEST['faculty']."'";
        
        if(!$results = $DB_CONNECTION->query($sql)){
            echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
            exit(); 
        }
        //show articles without
        
        
        $data = array();
         while($row=$results->fetch_assoc()){
            //$data []=$row;
             $data [] = array(
                 'title'=>$row['post_title'],
                 'download'=>$row['filelocation'],
                 'date'=>$row['post_date'],
                 'author'=>$row['name'],
                 'comment'=>$row['comment_status'],
                 'button'=>'<button>Comment</button>',                  
             );
         }
         
        header('Content-type: application/json');
	echo json_encode($data);
?>