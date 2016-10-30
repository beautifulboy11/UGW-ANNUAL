<?php
include '../config/config.php';

    $date = date("Y/m/d h:i:sa");
    $sql = "INSERT INTO `ugw_comments`(`comment_date`, `user_id`, `comment`) VALUES 
    ('".$date."','".$_POST['user_id']."','".$_POST['comment']."')";
 	$results = $DB_CONNECTION->query($sql);
 	echo $results;
?>
