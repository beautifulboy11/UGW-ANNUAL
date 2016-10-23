<?php
include '../../../config/config.php';

$sql= "SELECT u.ID AS username, u.name, u.email, u.registerDate, u.block, uf.faculty_name AS faculty, ug.title As role "
        . "FROM ugw_users AS u INNER JOIN ugw_user_faculty_map AS ufm ON u.ID = ufm.user_id "
        . "INNER JOIN ugw_faculty AS uf ON ufm.faculty_id = uf.id "
        . "INNER JOIN ugw_user_usergroup_map AS ugm ON u.ID = ugm.user_id "
        . "INNER JOIN ugw_usergroups AS ug ON ugm.group_id = ug.id ";

if(!$result = $DB_CONNECTION->query($sql)){
    echo " " . $sql . "<br />" ."<span style='color:red;'>". $DB_CONNECTION->error;"</span>";
    exit();
}
$data = array();

/*while ($row=$result->fetch_assoc()){
    $data[] = $row;
}

json_encode($data);*/
