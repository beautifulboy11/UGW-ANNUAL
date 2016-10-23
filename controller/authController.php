<?php   
    require '../model/authmodel.php';

    $username = $_POST['username'];
    //$password = sha1($_POST['password']);
    $password = $_POST['password'];
    //call method
    authenticate($username, $password);
   