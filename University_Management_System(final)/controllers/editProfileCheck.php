<?php
session_start();
require_once('../models/userModel.php');


if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['dob'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    var_dump('s');
    $result = updateProfile($username, $name, $password, $email, $gender, $dob);

    if ($result) {
        echo json_encode(array("status" => "success", "message" => "Profile updated successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to update profile"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request"));
}
?>
