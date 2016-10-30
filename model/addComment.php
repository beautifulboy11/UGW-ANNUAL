<?php
include '../config/config.php';

    $date = date("Y/m/d h:i:sa");
    $sql = "INSERT INTO `ugw_comments`(`comment_date`, `comment_post_id`, `comment`) VALUES 
    ('".$date."','".$_POST['post_id']."','".$_POST['comment']."')";
    
 	$results = $DB_CONNECTION->query($sql);
 	if(!$result = $DB_CONNECTION->query($sql)){
    echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}
?>
