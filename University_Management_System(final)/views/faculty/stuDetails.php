<?php
     session_start();
     if(isset($_SESSION['flag'])){
    require_once('../../models/studentDB.php');
	$result = show();
    
?>
   
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet"  href="../../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Students</h1>
</header>
<nav>
    <ul>
    <li><a href="facultyDashboard.php">Dashboard</a></li>
        <li><a href="offerCourse.php">Courses</a></li>
        <li><a href="stuDetails.php">Students</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>

                
                <table>
            
                    <tr>
                    <td>
                        <h3><u>Student List:</u></h3></td>
                        </tr>
                        <table>
                            
                                <tr align="center" >
                                    <th >Student Id</th>
                                    <th>Student Name</th>
                                    <th >Gender</th>
                                    <th >Email</th>
                                    <th >Contact No</th>
                                    <th >Address</th>
                                    <th>CGPA</th>
    
                                </tr>
                                <tr>
                                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['contactNo']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $row['cgpa']; ?></td>
                                    
                                        
                                    </tr>
                                  
                                        <?php } ?>
                                </tr> 
                                
                        
                            
                        </table>
                    </tr>
                </table>
<footer>
    <p>2023 University Management System</p>
</footer>  
</body>
</html>

<?php 
    }else{
        header('location: ../login.php'); 
    }
?>