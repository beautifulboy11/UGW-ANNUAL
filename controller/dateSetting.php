<?php
 require_once '../model/dateModel.php';
$year = $_POST['academic'];
$opening_date = $_POST['opening_date'];
$closing_date = $_POST['closing_date'];


$date1 = new DateTime($opening_date);
$date2 = new DateTime($closing_date);

$interval =$date1->diff($date2);
$diff= $interval->format('%R%a');

//exit();
if($diff > 0){
    CreateDate($opening_date,$closing_date,$year);
}else{
     $_SESSION['insert_failure'] = 'true';
     header('location:../views/Admin/setDate.php');
}


