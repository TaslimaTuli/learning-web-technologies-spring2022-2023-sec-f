<?php
    session_start();
    if(isset($_SESSION['flag'])){
    require_once('../models/teacherDB.php');
	$result = show();
?>

<html>
<head>
    <title>Teacher</title>
    <link rel="stylesheet"  href="../asset/css/dashB.css">
</head>
<body>
<header>
    <h1>Teacher</h1>
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
                        <td><a href="facultyAdd.php">Add New Faculty</a>
                        <h3><u>Teacher List: </u></h3></td>
                        
                        <table>
                
                            <tr  >
                                <th>Id</th>
                                <th >Faculty Name</th>
                                <th >Email</th>
                                <th >Gender</th>
                                <th >Contact No</th>
                                <th >Salary</th>
                                <th>Operations</th>
                                
                            </tr>
                            <tr>
                                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['contactNo']; ?></td>
                                        <td><?php echo $row['salary']; ?></td>
                                    
                                        <td>
                                        <!-- <a href="../controllers/facultyDeleteCheck.php?id=<?php echo $row['id']; ?>">Delete</a> -->
                                        <!-- <a href="edit_course.php?id=<?php echo $row['id']; ?>">Update</a> -->
                                        <button class="delete-btn" data-course-id="<?php echo $row['id']; ?>">Delete</button>

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
                    xhttp.open('POST', '../controllers/facultyDeleteCheck.php', true);
                    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            const response = JSON.parse(this.responseText);
                            if (response.success) {
                                alert(response.message);
                                location.reload();
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
                    </tr>
                </table>
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


