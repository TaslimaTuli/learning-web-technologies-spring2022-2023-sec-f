<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/courseDB.php');
	$result = show(); 
    
?>
<html>
<head>
    <title>Course</title>
    <link rel="stylesheet"  href="../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Courses</h1>
</header>
<nav>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="Course.php">Courses</a></li>
        <li><a href="Student.php">Students</a></li>
        <li><a href="NoticeList.php">Notice</a></li>
        <li><a href="Faculty.php">Teachers</a></li>
        <li><a href="view.php">Profile</a></li>
        <li> <a href="../controllers/logout.php">Logout</a> </li> 
    </ul>
</nav>
<table>
                        
    <tr>
        <td><a href="AddNewCourse.php">Add New Course</a><br>
        <h3><u>Courses:</u></h3></td>
    </tr>
    <tr>
        <table>
                    
            <tr align="center" >
                <th >Course Id</th>
                <th >Course Name</th>
                <th >Total Section</th>
                <th>Operations</th>
                
            </tr>
            <tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['courseName']; ?></td>
                <td><?php echo $row['section']; ?></td>
            
                <td>
                <!-- <a href="../controllers/deleteCheck.php?id=<?php echo $row['id'];?>"> Delete</a> -->
                <button class="delete-btn" data-course-id="<?php echo $row['id']; ?>">Delete</button>
                <!-- <a href="../controllers/courseEditCheck.php?php echo $row['id']; ?>">Update</a> -->
                </td>
            </tr>
            <?php } ?>
            </tr>
            <script>
                const deleteButtons = document.querySelectorAll('.delete-btn');
                deleteButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    const courseId = this.dataset.courseId;
                    const xhttp = new XMLHttpRequest();
                    xhttp.open('POST', '../controllers/deleteCheck.php', true);
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            const response = JSON.parse(this.responseText);
                            if (response.success) {
                                alert(response.message);
                                location.reload(); // reload the page after successful delete
                                
                            } else {
                                alert(response.message);
                            }
                        }
                    };
                    xhttp.send('id=' + courseId);
                });
            });
        </script>
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