<?php
//start the session
session_start();
function Redirect($Role){
    if ($Role == 1) {
        $_SESSION['admin'] = $Role;
        
        header('location:../views/Admin/index.php');
    } else if ($Role == 2) {
        $_SESSION['coordinator'] = $Role;
        header('location:../views/coordinator/index.php');
    } else if ($Role == 3) {
        $_SESSION['manager'] = $Role;
        header('location:../views/manager/index.php');
    }
}
function AuthenticateStudent($username,$password,$DB_CONNECTION ){
    $Sql = "SELECT * FROM ugw_student WHERE student_id = '$username' AND password='$password'";
        $results = $DB_CONNECTION->query($Sql);
        if ($results->num_rows == 0) {
            $_SESSION['login_failure'] = "failure";
            //throw new Exception('Dude something is wrong');
            header('location:../index.php');
        } else {
            while ($row = mysqli_fetch_array($results)) {
                //login as student
                $_SESSION['username'] = $username;
                $_SESSION['student'] = $row['first_name'];
                $_SESSION['name'] = $row['first_name'] . " " . $row['last_name'];
            }
            header('location:../views/student/index.php');
        }
}

function authenticate($username, $password) {
    //include config file
    require '../config/config.php';    
    //query
    $query = "SELECT u.ID As username, u.name, ugm.group_id As role, ufm.faculty_id AS faculty FROM ugw_users AS u "
            . "INNER JOIN ugw_user_usergroup_map AS ugm ON u.ID = ugm.user_id "
            . "INNER JOIN ugw_user_faculty_map AS ufm ON u.ID = ugm.user_id "
            . "WHERE u.ID = '".$username."' AND password ='".$password."' ";
    
    if(!$results = $DB_CONNECTION->query($query)){
        echo " " . $query . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
        exit();  
    }
    
    //if the user does not exists check in student table
    if ($results->num_rows == 0) {
        
        AuthenticateStudent($username,$password,$DB_CONNECTION );
    } else {
        $_SESSION['username'] = $username; //when user record exits, read data from database
        while ($row=$results->fetch_assoc()) {
            $Role = $row['role'];
            $Faculty = $row['faculty'];
            $_SESSION['name'] = $row['name'];
            //function that handles redirection
            Redirect($Role);
        }
        $results->free();
    }
    $DB_CONNECTION->close();
}
