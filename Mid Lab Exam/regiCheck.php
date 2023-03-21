<?php
    
    session_start();
    if(isset($_REQUEST['submit'])){
        
        $userName = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $confirmPassword = $_REQUEST['confirmPassword']; 
        $email = $_REQUEST['email']; 
        $name = $_REQUEST['name']; 
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob']; 
        $role = $_REQUEST['role']; 
        $finduser = false;

    if(empty($userName) || empty($password) || empty($email) || empty($name) || empty($gender) || empty($dob || empty($role))) {
            echo "All fields are required!";
         } else {
            if (strlen($password) < 4)
            {
                echo "Password should be at least 4";
                return;
            }
            
            if ($password !== $confirmPassword)
            {

                echo "Passwords did not matched!";
                return;
            }
            
           
            
            $file = fopen('regiUser.txt', 'r');
            //fclose($file);
            while(!feof($file))
            {
                $line = fgets($file);
                $array = explode('|',$line);
                if(trim($array[0]) == $userName)
                {
                    $finduser=true;
                    break;
                }
            }
            fclose($file);

            if( $finduser )
            {
                //echo $_POST["username"];
                echo "Username  $userName already exist! Try another username!";
                //header('location: registration.php');
            }

            else{
                $user = $userName . "|" . $email . "|" . $password . "|" .$name."|".$gender."|".$dob."|".$role."\r\n";
                $file = fopen('regiUser.txt', 'a+');
                fwrite($file, "$user");
                echo "Registration Complete! ". '<a href="login.php">Login Now!</a>';
            //header('location: login.php');

            }
           

        }
    
    }


?>