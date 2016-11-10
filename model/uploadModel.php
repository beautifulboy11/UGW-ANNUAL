<?php

session_start();
function getCoordinatorMail($faculty) {
    require '../config/config.php';
    global $email;
    $sql = "SELECT ufm.user_id, u.name, u.email, ugm.group_id FROM `ugw_user_faculty_map` AS ufm "
            . "INNER JOIN ugw_users AS u ON u.ID = ufm.user_id "
            . "INNER JOIN ugw_user_usergroup_map AS ugm ON u.ID = ugm.user_id "
            . "WHERE faculty_id = '" . $faculty . "' AND ugm.group_id = 3 ";
    if (!$result = $DB_CONNECTION->query($sql)) {
        echo " " . $sql . "<br />" . "<span style='color:red;'>" . $DB_CONNECTION->error;
        "</span>";
        exit();
    }
    while ($row=$result->fetch_assoc()){
        
        $email = $row['email'];
    }
    require("../sendgrid-php/sendgrid-php.php");
        $sender_name = "UGW-Admin";
        $sender_email = "ugw@ugw.com";
        $sender_message = "Student has uploaded a file";
        $send_to = $email;
        $from = new SendGrid\Email($sender_name, $sender_email);
        $subject = "New Upload Notification";
        $to = new SendGrid\Email("New Mail", $send_to);
        $content = new SendGrid\Content("text/plain", $sender_message);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        $apiKey = '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';
        $sg = new SendGrid($apiKey);
        $response = $sg->client->mail()->send()->post($mail);
        $_SESSION['notification'] = "Notification Sent Succesfully";
        echo "Query is okay: ";
}

function saveData($target_file) {
    require '../config/config.php';
    $faculty = $_SESSION['faculty'];
    global $_FILES, $_POST;
    $student = $_SESSION['username'];
    $date = date("Y/m/d h:i:sa");
    $title = $DB_CONNECTION->real_escape_string($_POST['title']);

    $sql = "INSERT INTO `file_uploads`(`post_author`, `post_title`, `post_date`, `filelocation`)"
            . " VALUES ('" . $student . "','" . $title . "','" . $date . "','" . $target_file . "')";

    $results = $DB_CONNECTION->query($sql);
    if ($results == false) {
        echo 'Query Failed: ' . $DB_CONNECTION->error;
    } else {
        getCoordinatorMail($faculty);
    }
    $DB_CONNECTION->close();
}

