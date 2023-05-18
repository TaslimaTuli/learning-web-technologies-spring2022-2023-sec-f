<?php
session_start();
require_once('../models/noticeBoardDB.php');

if(isset($_POST['id'])) {
    $courseId = $_POST['id'];
    $result = deleteNotice($courseId);

    if($result) {
        //header('Location: ../views/NoticeList.php');
        $response = array('success' => true, 'message' => 'Notice deleted successfully');

    } else {
        //echo"Error!!";
        $response = array('success' => false, 'message' => 'Error deleting notice');

    }
} else {
    //echo"Connection Failed!";
    $response = array('success' => false, 'message' => 'Invalid request');

}
echo json_encode($response);

?>