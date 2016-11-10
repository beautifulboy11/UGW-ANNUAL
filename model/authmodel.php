<?php
//start the session
session_start();
function Redirect($Role){
    if ($Role == 1) {
        $_SESSION['admin'] = $Role;        
        header('location:../views/Admin/index.php');
    } else if ($Role == 2) {
        $_SESSION['manager'] = $Role;
        header('location:../views/manager/index.php');
    } else if ($Role == 3 AND $_SESSION['faculty'] == 1) {
        $_SESSION['coordinator'] = $Role;
<<<<<<< HEAD
        header('location:../views/coordinator/index.php');
=======

        header('location:../views/coordinator/business/article.php');

        header('location:../views/coordinator/business/index.php');

>>>>>>> 6f8b89084916f3359902921288a17f10768b8233
    } else if ($Role == 3 AND $_SESSION['faculty'] == 2) {
        $_SESSION['coordinator'] = $Role;
        header('location:../views/coordinator/index.php');
    } else if ($Role == 3 && $_SESSION['faculty'] == 3) {
        $_SESSION['coordinator'] = $Role;
        header('location:../views/coordinator/index.php');
    }else if($Role == 4 ){
        $_SESSION['student'] = $Role;
        header('location:../views/student/index.php');
    }
}
function authenticate($username, $password) {
    //include database configuration file
    require '../config/config.php';        
    $query = "SELECT u.ID As username, u.name,u.block, ugm.group_id As role, ufm.faculty_id AS faculty FROM ugw_users AS u "
            . "INNER JOIN ugw_user_usergroup_map AS ugm ON u.ID = ugm.user_id "
            . "INNER JOIN ugw_user_faculty_map AS ufm ON ufm.user_id = u.ID "
            . "WHERE ufm.user_id = '".$username."' AND password ='".$password."' ";    
    //if something is wrong with query, throw Exception
    if(!$results = $DB_CONNECTION->query($query)){
        echo " " . $query . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
        exit();  
    }    
    //if the user does not exists 
    if ($results->num_rows == 0) {
        
        $_SESSION['login_failure'] = "failure";        
        header('location:../index.php');           
    } 
    else 
    {
        //when user record exits, read data from database
        $_SESSION['username'] = $username;
        
        while ($row=$results->fetch_assoc()) {

            $Role = $row['role'];
            $active = $row['block'];
            if($active == 1)
            {
               $_SESSION['login_failure'] = "failure";        
               header('location:../index.php');  
            }
            else
            {
                $_SESSION['name'] = $row['name'];
                $_SESSION['faculty']=$row['faculty'];
                //function that handles redirection
                Redirect($Role);
            }                    

            
        }
        $results->free();
    }
    $DB_CONNECTION->close();
}
