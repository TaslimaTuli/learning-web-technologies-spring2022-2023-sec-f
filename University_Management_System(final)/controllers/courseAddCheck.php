<?php	
	session_start();
	require_once('../models/courseDB.php');
	if(isset($_POST['submit'])){
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		$courseId = $_POST['courseId'];
		$courseName = $_POST['courseName'];
		$section = $_POST['section'];
		if($courseId != null &&$courseName != null && $section != null){
			$course = ['id'=>$courseId, 'courseName'=>$courseName, 'section'=> $section];
			$status = addCourse($course);

			if($status){
				header('Location: ../views/Course.php');
				exit();
			}else{
				echo "Error!" ;
			}
		}else{
			echo "Fields can not be null";
		}
	}else{
		echo "Invalid request...";
	}

?>