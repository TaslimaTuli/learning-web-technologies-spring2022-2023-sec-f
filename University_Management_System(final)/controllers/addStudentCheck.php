<?php	
	
	require_once('../models/studentDB.php');
	if(isset($_REQUEST['submit'])){
		$id = $_POST['id'];
		$stuName = $_POST['stuName'];
        $stuGender = $_POST['stuGender'];
        $stuEmail = $_POST['stuEmail'];
        $stuContact = $_POST['stuContact'];
        $stuAddress = $_POST['stuAddress'];
		$stuCgpa = $_POST['stuCgpa'];
        
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		
		if($id != null && $stuName != null &&  $stuGender != null &&  $stuEmail != null &&  $stuContact != null &&  $stuAddress != null && $stuCgpa != null){
			
			$s = ['id'=>$id,'name'=>$stuName, 'gender'=>$stuGender, 'email'=>$stuEmail, 'contactNo'=>$stuContact, 'address'=>$stuAddress, 'cgpa'=>$stuCgpa];
			//var_dump($s);
			$status = addStudent($s);

			if($status){
				header('Location: ../views/Student.php');
				exit();
			}else{
				echo "Error!";
			}


		}else{
			echo "Fields can not be null";
		}
	}

?>