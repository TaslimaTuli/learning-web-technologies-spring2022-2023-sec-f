<?php
    require_once('../models/teacherDB.php');
    $id = $_POST['id'];
    $result = findById($id);
    if ($result) {
        $response = array(
            "status" => "error",
            "message" => "Faculty already exists!!"
        );
    } else {
        $response = array(
            "status" => "success"
        );
    }
    echo json_encode($response);
?>
