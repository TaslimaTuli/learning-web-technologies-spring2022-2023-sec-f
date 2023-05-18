<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../../models/courseDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Course</title>
    <link rel="stylesheet"  href="../../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Courses</h1>
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
        <h3><u>Courses:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
                <th >Course Id</th>
                <th >Course Name</th>
                <th >Total Section</th>
               
                
            </tr>
            <tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['courseName']; ?></td>
                <td><?php echo $row['section']; ?></td>
        
            </tr>
            <?php } ?>
            </tr>
        </table>
                            
                               
                                  
</table>
<footer>
    <p>2023 University Management System</p>
</footer>  
</body>
</html>

<?php 
    }else{
        header('location: ../views/login.php'); 
    }
?>