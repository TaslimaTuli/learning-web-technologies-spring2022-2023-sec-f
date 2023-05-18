<?php
    session_start();
    if(isset($_SESSION['flag'])){
    
?>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet"  href="../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Dashboard</h1>
</header>

<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Course.php">Courses</a></li>
        <li><a href="Student.php">Students</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Faculty.php">Teacher</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li>
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
        header('location: login.php'); 
    }
?>

