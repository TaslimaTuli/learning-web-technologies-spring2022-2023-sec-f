<?php
session_start();
require_once('../models/studentDB.php');

if(isset($_POST['id'])) {
    $s = $_POST['id'];
    $result = deleteStudent($s);

    if($result) {
        //header('Location: ../views/Student.php');
        $response = array('success' => true, 'message' => 'Student deleted successfully');

    } else {
        //echo"Error!!!";
        $response = array('success' => false, 'message' => 'Error deleting student');

    }
} else {
    //echo"Connection Failed!";
    $response = array('success' => false, 'message' => 'Invalid request');

}
echo json_encode($response);

?>