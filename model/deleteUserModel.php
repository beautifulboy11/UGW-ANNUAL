<?php

function deleteFacultyAssoc($user){
    require_once '../config/config.php';
    $sql = "DELETE FROM `ugw_user_faculty_map` WHERE user_id = '".$user."'";
    $DB_CONNECTION->query($sql);    
}
function deleteUserGroupAssoc($user){
    require_once '../config/config.php';
    $sql = "DELETE FROM `ugw_user_usergroup_map` WHERE user_id = '".$user."'";
   $DB_CONNECTION->query($sql);
}

function deleteUserRecord($user){
    require_once '../config/config.php';
   $sql= "DELETE FROM `ugw_users` WHERE ID ='".$user."'";
   $DB_CONNECTION->query($sql);
}

function deleteUSer($user){
    deleteFacultyAssoc($user);
    deleteUserGroupAssoc($user);
    deleteUserRecord($user);
}



