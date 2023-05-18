<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Course</title>
    <script src="../controllers/js/add_course.js"></script>
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
    <form method="POST" onsubmit="return validateCourseAdd()" action="../controllers/courseAddCheck.php" id="addCourseForm">
        <table>

            <tr>
                <td>
                Course Id 
                <input type="number" name="courseId" id="typedText" value="" onkeyup="ajax()">
                <span id="idError"style="color:red"></span>
                </td>
                
                <td>
                Course Name
                <input type="text" name="courseName">
                <span id="nameError"style="color:red"></span>
                </td>

                <td>Total Section 
                <input type="number" name="section" min="1" max="20">
                <span id="secError"style="color:red"></span>
                </td>

				<td>
               
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr> 

        <script>
            function ajax() {
                var courseId = document.getElementById("typedText").value.trim();
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var response = JSON.parse(this.responseText);
                        if (response.status == "error") {
                            document.getElementById("idError").innerHTML = response.message;
                        } else {
                            document.getElementById("idError").innerHTML = "";
                        }
                    }
                };
                xhttp.open("POST", "../controllers/checkCourseId.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("courseId=" + courseId);
            }
        </script>
        
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