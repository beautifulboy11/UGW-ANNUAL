<?php
function CreateDate($opening_date,$closing_date,$year){
include '../config/config.php';

$dateSql= "INSERT INTO `ugw_dates`(academic_year,`open_date`, `close_date`) VALUES ('".$year."','".$opening_date."','".$closing_date."')";

if(!$result = $DB_CONNECTION->query($dateSql)){
    echo " " . $dateSql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}

if($results == false ){
            //echo 'Query Failed: ' .$DB_CONNECTION->error;
            $_SESSION['insert_failure'] = 'true';
            header('location:../views/Admin/setDate.php');
 	}else{
            //echo "Query is okay: ";
            $_SESSION['insert_sucess'] = 'true';
            header('location:../views/Admin/setDate.php');
 	}
 	$DB_CONNECTION->close(); 
             
}