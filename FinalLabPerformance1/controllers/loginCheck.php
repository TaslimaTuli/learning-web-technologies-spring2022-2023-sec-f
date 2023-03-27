<?php	

        session_start();
       
        require_once '../models/db.php';
        if(isset($_REQUEST['submit'])){
    
            //print_r($_GET);
            $username = $_REQUEST['username']; 
            $password = $_REQUEST['password']; 
            
    
            if($username == "" && $password == "") {
                echo "Null value ..";
                
            }else{
                $user = ['username' => $username, 'password' => $password];
                $status = auth($user);
    
                if($status){
                    $_SESSION['flag'] = "true";
                    $_SESSION['username'] = $username;
                    header('location: ../views/home.php');
                }else{
                    echo "invalid user!";
                }
            }
        }else{
            echo "invalid request...";
        }
           
?>

	