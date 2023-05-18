<?php
session_start();
if(isset($_SESSION['flag'])){

?>
<html>
<head>
    <title>Add Teacher</title>
    <script src="../controllers/js/add_faculty.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Add Teacher</h1>
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
    <form method="POST" onsubmit="return validateFaculty()" action="../controllers/facultyAddCheck.php" >
        <table>
           
            
            <tr>
                <td>Faculty ID
                <input type="text" name="id"id="typedText" value="" onkeyup="ajax()"> <br><br>
                <span id="idError"style="color:red"></span>
                </td>
        
                <td>Name :
                    <input type="text" name="facultyName"><br><br>
                    <span id="nameError"style="color:red"></span>
                </td>
            
                <td>Email :
                    <input type="email" name="facultyEmail"><br><br>
                    <span id="emailError"style="color:red"></span>
                </td>
           
                <td>
                Gender :
                <input type="radio" name="facultyGender"  value="Male"/> Male
                <input type="radio" name="facultyGender" value="Female"/> Female
                <input type="radio" name="facultyGender"  value="Other"/> Other <br><br>
                <span id="genderError"style="color:red"></span>
                </td>   
                
                <td>Contact No :
                    <input type="tel" name="facultyContact" minlength="11" maxlength="11" pattern="[0]{1}[1-9]{10}" placeholder="e.g. 01234567890"><br><br>
                    <span id="phoneError"style="color:red"></span>
                </td>
          
                <td>Salary :
                    <input type="number" name="salary" min="10000"><br><br>
                    <span id="salaryError"style="color:red"></span>

                </td>
            
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>

            <script>
            function ajax() {
                var id = document.getElementById("typedText").value.trim();
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
                xhttp.open("POST", "../controllers/checkFacultyId.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("id=" + id);
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