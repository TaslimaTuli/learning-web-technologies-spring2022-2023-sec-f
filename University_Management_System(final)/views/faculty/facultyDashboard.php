<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet"  href="../../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Dashboard</h1>
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
        <h2>Welcome, <?php if(isset($_SESSION['username'])){
            echo($_SESSION['username']);}?></h2>
        </td>
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

