<?php
session_start();
require_once('../models/courseDB.php');

if(isset($_POST['id'])) {
    $courseId = $_POST['id'];
    $result = deleteCourse($courseId);

    if($result) {
        //header('Location: ../views/Course.php');
        $response = array('success' => true, 'message' => 'Deleted successfully!');

    } else {
        //echo"Failed to delete course.";
        $response = array('success' => false, 'message' => 'Error deleting!');

    }
} else {
//echo"Connection Failed!";
$response = array('success' => false, 'message' => 'Invalid request');
}
echo json_encode($response);


?>