<?php

$id = $_POST['post_id'];
$comment = $_POST['comment'];
$date = date("Y/m/d");
$publish = $_POST['publish'];
$unpublish = $_POST['unpublish'];

if(isset($publish)){
   $status = $publish; 
}elseif(isset ($unpublish)){
    $status = $unpublish;
}else{
    header('location:../views/coordinator/business/business/edit_records/comments.php');
}

function comment($date,$id,$comment) {
    include '../config/config.php';
    $sql = "INSERT INTO `ugw_comments`(`comment_date`, `comment_post_id`, `comment`) VALUES 
    ('".$date."','".$id."','".$comment."')";

    $results = $DB_CONNECTION->query($sql);
    header("location:{$_SERVER["HTTP_REFERER"]}");
}
function updateArticlestatus($id,$status){
    include '../config/config.php';
    $sqlQuery="UPDATE file_uploads "
            . "SET post_status='".$status."', comment_status='closed' "
            . "WHERE id = '".$id ."' ";
    $result = $DB_CONNECTION->query($sqlQuery);
}
function getPostDate($id){
    require '../config/config.php';
    global $postdate;
    $sql = "SELECT id, post_author, post_title, post_date, filelocation, post_status, comment_status "
            . "FROM `file_uploads` WHERE id ='".$id."'";
    if (!$result = $DB_CONNECTION->query($sql)) {
        echo " " . $sql . "<br />" . "<span style='color:red;'>" . $DB_CONNECTION->error;
        "</span>";
        exit();
    }
    while ($row=$result->fetch_assoc()){
        
        $postdate = $row['post_date'];
    }
}
    getPostDate($id);
    //CALCULATE THE DATE DIFFERENCE
        $date2 = new DateTime("now");
        $date1 = new DateTime($postdate);

        $interval =$date1->diff($date2);
        $diff= $interval->format('%R%a');
        if ($diff > 14)
        {
            $_SESSION['date'] = 'failure';
            echo 'Article was submitted more than 14 days ago';
            //header("location:../views/student/index.php");
        }
        else
        {
        comment($date, $id, $comment);
        updateArticlestatus($id,$status);    
        
        echo 'Comment Added Successfully';
        } 

