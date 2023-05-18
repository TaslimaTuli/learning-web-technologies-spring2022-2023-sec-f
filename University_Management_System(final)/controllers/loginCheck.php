<?php	
	session_start();
    require_once('../models/userModel.php');
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
       // $role = role($username, $password);
        
        $flag = false;
        if($username == "" && $password == "") {
            header('location: ../views/login.php?nullVal=e');
        }else{
            $status = auth($username, $password);
            if($status){
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                
                if(isset($_POST['remember'])) {
                    setcookie('username', $username, time()+2592000, "/");  //expire time 30 days
                    setcookie('password', $password, time()+2592000, "/");
                }
                $data = getUserById($username);
                $_SESSION['current_user']=$data;



                if($data['role']=="student"){
                    header('location: ../views/student/stuDashboard.php');


                }else if($data['role']=="admin"){
                    header('location: ../views/dashboard.php');


                }elseif($data['role']=="faculty"){
                    header('location: ../views/faculty/facultyDashboard.php');

                }else{
                    echo "please correct your user type ?";
                }

                //header('location: ../views/dashboard.php');
            }else{
                header('location: ../views/login.php?msg=error');
        
            }

            // if($flag){
            //     setcookie('flag', 'abc', time()+300, '/');
            //     $_SESSION['username'] = $username;
            //     $_SESSION['password'] = $password;
            //     //header('location: dashboard.php');
            //     $flag = false; 
            // }else{
            //     header('location: login.php?msg=error');
            // }
            

           
        }
        
    }else{
        echo "invalid request...";
    }

?>

	
