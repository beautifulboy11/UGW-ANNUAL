<?php
 require_once '../model/dateModel.php';

$opening_date = $_POST['opening_date'];
$closing_date = $_POST['closing_date'];

echo $opening_date;
echo $closing_date;
/*
$diff=date_diff($closing_date,$opening_date);
echo $diff->format("%R%a days");
exit();
if(date_diff($closing_date,$opening_date) > 0){
    CreateDate($opening_date,$closing_date);
}else{
     $_SESSION['insert_failure'] = 'true';
            //header('location:../views/Admin/setDate.php');
}
*/
CreateDate($opening_date,$closing_date);
