<?php
session_start();
require_once('../models/teacherDB.php');

if(isset($_POST['id'])) {
    $s = $_POST['id'];
    $result = deleteFaculty($s);

    if($result) {
        //header('Location: ../views/Faculty.php');
        $response = array('success' => true, 'message' => 'Faculty deleted successfully');

    } else {
        //echo"Error!!!";
        $response = array('success' => false, 'message' => 'Error deleting faculty');

    }
} else {
    //echo"Connection Failed!";
    $response = array('success' => false, 'message' => 'Invalid request');

}
echo json_encode($response);

?>