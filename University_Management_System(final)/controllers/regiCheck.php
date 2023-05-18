<?php
    
    session_start();
    require_once('../models/userModel.php');
    if(isset($_REQUEST['submit']))
    {
        
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $confirmPassword = $_REQUEST['confirmPassword']; 
        $email = $_REQUEST['email']; 
        $name = $_REQUEST['name']; 
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob']; 
        $role = $_REQUEST['role']; 

        $count = UserNameQuery($username);
        $emailCount = UserEmailQuery($email);

        if($count>0){
            echo "Username Already Exits!";
        }
        elseif($emailCount>0){
            echo "Email Already Exits!";
        }
            
        else{

        if(empty($username) || empty($password) || empty($email) || empty($name) || empty($gender) || empty($dob) || empty($role)) {
            //echo "All fields are required!";
        } 
        else 
        {
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
            //var_dump($user);

            $user = ['username'=>$username, 'password'=> $password,'name'=>$name, 'email'=> $email, 'gender'=> $gender, 'dob'=> $dob,'role'=>$role];
            
            $status = addUser($user);
          
            if($status){
                header('location: ../views/login.php');
            }else{
                echo "DB error, please try again";
            }
        
           

        }
    
    }
    }

?>