<?php 
    require_once('db.php');

    function auth($username, $password){

        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into users(username, password, name, email, gender, dob, role) values('{$user['username']}', '{$user['password']}','{$user['name']}', '{$user['email']}', '{$user['gender']}', '{$user['dob']}', '{$user['role']}')";
        
        return $status = mysqli_query($con, $sql);
    }

    function UserNameQuery($username){

        $conn = getConnection();
        $sql = "select * from users where username='{$username}'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            // Output data of the first row
            $row = $result->fetch_assoc();
            return $row;
          } else {
            return null;
          }
        
          mysqli_close($conn); 
    }
    function UserEmailQuery($email){
        $conn = getConnection();
        $sql = "select * from users where email='{$email}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        return $row;
    }

    
    function profile($username){
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getUserById($username){

        $conn = getConnection();
        $sql = "select * from users where username='{$username}'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    

function updateUserProfile($username, $name, $password, $email, $gender, $dob) {
    $conn = getConnection();
    $sql = "UPDATE users SET name='$name', password='$password', email='$email', gender='$gender', dob='$dob' WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


    function updateProfile($username, $name, $password, $email, $gender, $dob){
        $con = getConnection(); var_dump('s');
        $sql = "UPDATE `users` SET `username`='{$username}',`password`='{$password}',`name`='{$name}',`email`='{$email}',`gender`='{$gender}',`dob`='{$dob}' WHERE username = '{$username}'";
        //$sql = "UPDATE users SET name='$name', password='$password', email='$email', gender='$gender', dob='$dob' WHERE username='$username'";
        return $status = mysqli_query($con, $sql);
    }




?>