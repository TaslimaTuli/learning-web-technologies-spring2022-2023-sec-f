<?php
    require_once('../models/noticeBoardDB.php');
    $id = $_POST['id'];
    $result = findById($id);
    if ($result) {
        $response = array(
            "status" => "error",
            "message" => "Notice Id already exists!!"
        );
    } else {
        $response = array(
            "status" => "success"
        );
    }
    echo json_encode($response);
?>
