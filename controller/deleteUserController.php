<?php
$user = $_REQUEST['user'];
require_once '../model/deleteUserModel.php';

deleteFacultyAssoc($user);
deleteUserGroupAssoc($user);
deleteUserRecord($user);
