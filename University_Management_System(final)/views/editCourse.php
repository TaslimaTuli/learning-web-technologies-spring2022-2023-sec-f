<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Edit Course</title>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Add Courses</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Course.php">Courses</a></li>
        <li><a href="Student.php">Students</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Faculty.php">Faculty</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
    </ul>
</nav>
    <form method="POST" action="../controllers/courseEditCheck.php" >
        <table>
            
            
            <tr>
                <td>
                Course Id 
                <input type="number" name="NcourseId"></td>
                <td>
                Course Name
                <input type="text" name="NcourseName"></td>
                <td>Total Section 
                <input type="number" name="Nsection" min="1" max="10"></td>

				<td><input type="submit" name="submit" value="Submit"></td>
            </tr> 
        
        </table>
    </form>
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