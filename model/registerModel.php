<?php
    function CreateUser($id,$name,$password,$email,$registeration_date,$block){
        include '../config/config.php';
        $sqlQuery = "INSERT INTO `ugw_users`(`ID`, `name`, `password`, `email`, `registerDate`, `block`)
                VALUES ('".$id."','".$name."','".$password."','".$email."','".$registeration_date."','".$block."')";
        
        $results = $DB_CONNECTION->query($sqlQuery);
              
 	if($results == false ){
            echo 'Query Failed: ' .$DB_CONNECTION->error;
 	}else{
            echo "Query is okay: ";
 	}
 	$DB_CONNECTION->close();
                
    }
    function AssociateFaculty($id,$faculty){
        include '../config/config.php';
        
        $sqlQuery = "INSERT INTO `ugw_user_faculty_map`(`faculty_id`, `user_id`) "
                . " VALUES ('".$faculty."','".$id."')";
        
        $results = $DB_CONNECTION->query($sqlQuery);
              
 	if($results == false ){
            echo 'Query Failed: ' .$DB_CONNECTION->error;
 	}else{
            echo "Query is okay: ";
 	}
 	$DB_CONNECTION->close();
                
    }
    function AssociateGroup($id,$role){
        include '../config/config.php';
        
        $sqlQuery = "INSERT INTO `ugw_user_usergroup_map`(`user_id`, `group_id`) "
                . " VALUES ('".$id."','".$role."')";
        
        $results = $DB_CONNECTION->query($sqlQuery);
              
 	if($results == false ){
            //echo 'Query Failed: ' .$DB_CONNECTION->error;
            $_SESSION['insert_failure'] = 'true';
            header('location:../../views/registration/index.php');
 	}else{
            //echo "Query is okay: ";
            $_SESSION['insert_sucess'] = 'true';
            header('location:../views/registration/index.php');
 	}
 	$DB_CONNECTION->close();                
    }

