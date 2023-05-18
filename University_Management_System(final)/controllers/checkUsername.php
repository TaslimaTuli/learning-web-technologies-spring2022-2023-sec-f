<?php
    require_once('../models/userModel.php');
    $username = $_POST['username'];
    $result = UserNameQuery($username);
    if ($result) {
        $response = array(
            "status" => "error",
            "message" => "Username already exists!!"
        );
    } else {
        $response = array(
            "status" => "success"
        );
    }
    echo json_encode($response);
?>
