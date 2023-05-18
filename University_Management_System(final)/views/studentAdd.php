<?php
session_start();
if(isset($_SESSION['flag'])){
?>
<html>
<head>
    <title>Add Student</title>
    <script src="../controllers/js/add_student.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Add Student</h1>
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
    <form method="POST" onsubmit="return validateStudentAdd()" action="../controllers/addStudentCheck.php" >
        <table>
           
            <tr>
            <td> Student Id : 
                <input type="number" name="id" id="typedText" value="" onkeyup="ajax()"> <br><br>
                <span id="idError"style="color:red"></span>
            </td>
            <td> Name : 
                <input type="text" name="stuName"> <br><br>
                <span id="nameError"style="color:red"></span>
            </td>
          
                <td>
                Gender : 
                
                <input type="radio" name="stuGender"  value="Male"/> Male
                <input type="radio" name="stuGender" value="Female"/> Female
                <input type="radio" name="stuGender"  value="Other"/> Other <br> <br>
                <span id="genderError"style="color:red"></span>
                </td>
            
                <td>Email :
                <input type="email" name="stuEmail"> <br><br>
                <span id="emailError"style="color:red"></span>
                </td>
                
                <td>Contact No :
                <input type="tel" name="stuContact" minlength="11" maxlength="11" pattern="[0]{1}[1-9]{10}" placeholder="e.g. 01234567890"> <br><br>
                <span id="contactError"style="color:red"></span>
                </td>
          
                <td>Address :
                <input type="text" name="stuAddress" ><br><br>
                <span id="addressError"style="color:red"></span>
                </td>
            
                <td>CGPA :
                <input type="number" name="stuCgpa" min="1.00" max="4.00" step="0.01"><br><br>
                <span id="cgpaError"style="color:red"></span>
                </td>
        
				<td>
                <input type="submit" name="submit" value="Submit">
    
                </td>
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
                xhttp.open("POST", "../controllers/checkStuId.php", true);
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