<?php
 session_start();
 if(isset($_SESSION['flag'])){
?>
<html>
<head>
    <title>Add Notice</title>
    <script src="../controllers/js/add_notice.js"></script>
    <link rel="stylesheet"  href="../asset/css/add.css">
</head>
<body>
<header>
    <h1>Add Notice</h1>
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
    <form method="POST" onsubmit="return validateNoticeAdd()" action="../controllers/noticeAddCheck.php">
        <table>
            
            <tr>
                <td>Notice Id :
                <input type="number" name="id" id="typedText" value="" onkeyup="ajax()"> <br> <br>
                <span id="idError"style="color:red"></span>
                </td>

                <td>Notice Title :
                <input type="text" name="noticeTitle"> <br> <br>
                <span id="titleError"style="color:red"></span>
                </td>
            
                <td>Notice Description :
                <input type="text" name="noticeDescription" > <br> <br>
                <span id="desError"style="color:red"></span>
                </td>
           
                <td>Date :
                    <input type="date" name="time"> <br> <br>
                    <span id="timeError"style="color:red"></span>
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
                xhttp.open("POST", "../controllers/checkNoticeId.php", true);
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
        header('location: login.php'); 
    }
?>