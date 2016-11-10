<?php
include '../../config/config.php';

    $sql = "SELECT `ugw_user_faculty_map`.`faculty_id`, `ugw_users`.`name`AS 'name', `file_uploads`.`post_author`, `file_uploads`.`post_title`, `file_uploads`.`post_date`, `file_uploads`.`id`, `file_uploads`.`filelocation`, `file_uploads`.`post_status`, `file_uploads`.`comment_status`\n"
    . "FROM `file_uploads`\n"
    . "LEFT JOIN `ugw_users` ON `file_uploads`.`post_author` = `ugw_users`.`ID` \n"
    . "LEFT JOIN `ugw_user_faculty_map` ON `ugw_users`.`ID` = `ugw_user_faculty_map`.`user_id`"
    . "WHERE ugw_user_faculty_map.faculty_id = '".$_SESSION['faculty']."'";


if(!$result = $DB_CONNECTION->query($sql)){
    echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}
$data = array();