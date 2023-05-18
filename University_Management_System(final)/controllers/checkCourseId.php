<?php
    require_once('../models/courseDB.php');
    $courseId = $_POST['courseId'];
    $result = findById($courseId);
    if ($result) {
        $response = array(
            "status" => "error",
            "message" => "Course ID already exists!!"
        );
    } else {
        $response = array(
            "status" => "success"
        );
    }
    echo json_encode($response);
?>
