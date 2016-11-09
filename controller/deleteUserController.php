<?php
$user = $_REQUEST['user'];
require_once '../model/deleteUserModel.php';
deleteUSer($user);
