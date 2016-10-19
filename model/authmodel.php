<?php
//start the session
session_start();
function Redirect($userlevel){
    if ($userlevel == 0) {
        $_SESSION['admin'] = $userlevel;
        header('location:../views/Admin/index.php');
    } else if ($userlevel == 1) {
        $_SESSION['coordinator'] = $userlevel;
        header('location:../views/coordinator/index.php');
    } else if ($userlevel == 2) {
        $_SESSION['manager'] = $userlevel;
        header('location:../views/manager/index.php');
    }
}

function authenticate($username, $password) {
    //include config file
    require '../config/config.php';
    //query
    $query = "SELECT * FROM user WHERE username = '$username' AND password ='$password' ";
    $results = $DB_CONNECTION->query($query);
    //if the user does not exists check in student table
    if ($results->num_rows == 0) {
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
    } else {
        $_SESSION['username'] = $username; //when user record exits, read data from database
        while ($row = mysqli_fetch_array($results)) {
            $userlevel = $row['userlevel'];
            $_SESSION['name'] = $row['name'];
            //function that handles redirection
            Redirect($userlevel);
        }
        $results->free();
    }
    $DB_CONNECTION->close();
}

?>