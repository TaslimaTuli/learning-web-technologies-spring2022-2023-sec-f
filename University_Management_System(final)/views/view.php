<?php
    session_start();
    if(isset($_SESSION['flag']) ){
require_once('../models/userModel.php');
$username = $_SESSION['username'];
$row= profile($username);        
?>

<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Profile</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Course.php">Courses</a></li>
        <li><a href="Student.php">Students</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Faculty.php">Teachers</a></li>
        <li><a href="view.php">Profile</a></li>
        <!-- <li><a href="editProfile.php">Edit Profile</a></li> -->
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
                    <table >
                        <tr align="left">
                            <td align="center"><img src="../asset/propic.png" alt="" height="200px" width="200px"></td>
                    
                            <td>Name : <?php echo $row['name']; ?> </td>
                            
                        
                            <td>Username: <?php echo $_SESSION['username']; ?></td>
                            
                       
                            <td>Password: <?php echo $row['password']; ?></td>
                            
                       
                            <td>Email: <?php echo $row['email']; ?></td>
                            
                           
                            <td>Gender: <?php echo $row['gender']; ?></td>
                            
                            <td>Date of Birth: <?php echo $row['dob']; ?></td>
                        
                            <td>Role: <?php echo $row['role']; ?></td>
                            

                            <!-- <td><a href="edit.php">Edit Profile</a></td> -->
                            
                        </tr>      
                        <tr>
                            
                        </tr>

                    </table>
             
            
<footer>
    <p>2023 University Management System</p>
</footer>  
</body>
</html>
<?php 
    }else{
        header('location: login.php'); 
    }
?>