
<html>
<head>
    <title>Registration</title>
    <script type="text/javascript" src="../controllers/js/regi_check.js"></script>
    <link rel="stylesheet"  href="../asset/css/regi.css">
</head>
<body>
<header><h1> University Management System </h1></header>
                <form method="post" onsubmit="return validateRegi()"  action="../controllers/regiCheck.php"> 
                    <fieldset>
                        
                        <table align="center">
                            <tr>
                                <td>
                                    Name: <br>
                                <input type="text" name="name" value="">
                                <span id="nameError"></span><br>
                                </td>
                            </tr> 
                            <tr >
                                <td>
                                    Email: 
                                    <input type="email" name="email" value="">
                                    <span id="emailError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Username : 
                                    <input type="text" name="username" id="typedText" value="" onkeyup="ajax()">
                                    <span id="usernameError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password : 
                                    <input type="password" name="password" value="">
                                    <span id="passwordError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password : 
                                    <input type="password" name="confirmPassword" value="">
                                    <span id="confirmPasswordError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender"  value="Male"/> Male
                                            <input type="radio" name="gender" value="Female"/> Female
                                            <input type="radio" name="gender"  value="Other"/> Other <br>
                                        </fieldset>
                                        <span id="genderError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" min="1960-12-31" max="2008-12-31" value=""/>
                                        </fieldset>
                                        <span id="dobError"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Role</legend>
                                            <input type="radio" name="role"  value="admin"/> Admin
                                            <input type="radio" name="role" value="student"/> Student
                                            <input type="radio" name="role"  value="faculty"/> Faculty
                                            <input type="radio" name="role"  value="staff"/> Staff <br>
                                        </fieldset>
                                        <span id="roleError"></span><br> 
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit" >            
                            
                                <!-- <a href="login.php">Login Page</a> -->
                                </td>              
                            </tr>
                            <tr>
                                <td>
                                <div class="log">Already have an account? <a href="login.php">Login now!</a></div>
                                </td>
                            </tr>
                            <script>
                                function ajax() {
                                    var username = document.getElementById("typedText").value.trim();
                                    var xhttp = new XMLHttpRequest();
                                    xhttp.onreadystatechange = function() {
                                        if (this.readyState == 4 && this.status == 200) {
                                            var response = JSON.parse(this.responseText);
                                            if (response.status == "error") {
                                                document.getElementById("usernameError").innerHTML = response.message;
                                            } else {
                                                document.getElementById("usernameError").innerHTML = "";
                                            }
                                        }
                                    };
                                    xhttp.open("POST", "../controllers/checkUsername.php", true);
                                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    xhttp.send("username=" + username);
                                }
                            </script>
                        </table>


                    </fieldset>

                </form>
    <footer>
		<p>2023 University Management System</p>
	</footer>
</body>
</html>