<?php
include '../../../config/config.php';

    $sql = "SELECT `ugw_users`.`ID` AS 'user_id', `ugw_users`.`name` AS 'name', `ugw_user_faculty_map`.`faculty_id`, `file_uploads`.`post_author`, `file_uploads`.`post_title`, `file_uploads`.`post_date`, `file_uploads`.`filelocation`, `file_uploads`.`post_status`, `file_uploads`.`comment_status`\n"
    . "FROM `ugw_users`\n"
    . "LEFT JOIN `file_uploads` ON `ugw_users`.`ID` = `file_uploads`.`post_author` \n"
    . "LEFT JOIN `ugw_user_faculty_map` ON `ugw_users`.`ID` = `ugw_user_faculty_map`.`user_id`"
    . "WHERE ugw_user_faculty_map.faculty_id = '".$_SESSION['faculty']."'";


if(!$result = $DB_CONNECTION->query($sql)){
    echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}
$data = array();