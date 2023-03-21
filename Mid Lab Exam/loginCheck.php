<?php	
		
	//session_start();


	session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        
        $flag = false;
        if($username == "" && $password == "") {
            echo "Null value ..";
        }else{
            $file = fopen('regiUser.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                
                if($username == trim($user[0]) && $password == trim($user[2])){
                    $flag = true;
                    header('location: dashboard.php');
                }
                //elseif($username == trim($user[0]) && $password == trim($user[2])&& trim($user[6]) == 'student'){
                //     $flag = true; 
                //     header('location: stuDashboard.php');
                // }
                // elseif($username == trim($user[0]) && $password == trim($user[2])&& trim($user[6]) == 'faculty'){
                //     $flag = true; 
                //     header('location: facultyDashboard.php');
                // }
                // elseif($username == trim($user[0]) && $password == trim($user[2])&& trim($user[6]) == 'staff'){
                //     $flag = true; 
                //     header('location: staffDashboard.php');
                // }
                
            }

            if($flag){
                setcookie('flag', 'abc', time()+300, '/');
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                //header('location: dashboard.php');
                $flag = false; 
            }else{
                header('location: login.php?msg=error');
            }
            

           
        }
        
    }else{
        echo "invalid request...";
    }

?>

	
