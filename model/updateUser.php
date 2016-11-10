<?php
include '../config/config.php';
$userid = $_POST['userid'];
$sql = "UPDATE `ugw_users` SET `name`='".$_POST['fullname']."', `email`='".$_POST['email']."',`block`='".$_POST['block']."' "
        . "WHERE id ='".$userid."'";
if(!$result = $DB_CONNECTION->query($sql)){
    echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}

if($results == false ){
            //echo 'Query Failed: ' .$DB_CONNECTION->error;
            $_SESSION['insert_failure'] = 'true';
            header('location:../views/Admin/edit_records/staff.php');
 	}else{
            //echo "Query is okay: ";
            $_SESSION['insert_sucess'] = 'true';
            header('location:../views/Admin/edit_records/staff.php');
 	}
 	$DB_CONNECTION->close(); 

