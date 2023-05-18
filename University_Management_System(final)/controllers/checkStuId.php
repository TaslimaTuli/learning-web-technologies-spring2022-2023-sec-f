<?php
    require_once('../models/studentDB.php');
    $id = $_POST['id'];
    $result = findById($id);
    if ($result) {
        $response = array(
            "status" => "error",
            "message" => "Student already exists!!"
        );
    } else {
        $response = array(
            "status" => "success"
        );
    }
    echo json_encode($response);
?>
