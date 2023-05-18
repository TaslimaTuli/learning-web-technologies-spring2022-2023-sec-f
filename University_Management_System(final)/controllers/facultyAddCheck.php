<?php	
	
	require_once('../models/teacherDB.php');
	if(isset($_REQUEST['submit'])){
		$id = $_POST['id'];
		$facultyName = $_POST['facultyName'];
        $facultyGender = $_POST['facultyGender'];
        $facultyEmail = $_POST['facultyEmail'];
        $facultyContact = $_POST['facultyContact'];
        $salary = $_POST['salary'];
        
		if($id != null && $facultyName != null &&  $facultyGender != null &&  $facultyEmail != null &&  $facultyContact != null &&  $salary != null){
			
			$s = ['name'=>$facultyName,'email'=>$facultyEmail, 'gender'=>$facultyGender, 'contactNo'=>$facultyContact, 'salary'=>$salary, 'id'=>$id];
			$status = addFaculty($s);
			//var_dump($status);
			if($status){
				header('Location: ../views/Faculty.php');
				
				exit();
			}else{
				echo "Error!";
			}


		}else{
			echo "Fields can not be null";
		}
	}

?>