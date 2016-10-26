<?php
    require_once '../model/registerModel.php';

    $id = $_POST['user_id'];    
    $name = $_POST['name'];   
    $role= $_POST['role'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];
    $registeration_date = date("Y/m/d h:i:sa");
    $block = 1;

    CreateUser($id,$name,$password,$email,$registeration_date,$block);
    AssociateFaculty($id,$faculty);
    AssociateGroup($id,$role);