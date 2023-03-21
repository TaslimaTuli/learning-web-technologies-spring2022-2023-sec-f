
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1">
        <tr height="100px">
            <th width=20% colspan="3">
               <h3> PRD Management System </h3>
            </th>
        </tr>
        
        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="regiCheck.php">
                    <fieldset>
                        <legend>Registration</legend>
                        <table align="center" >
                            <tr height=40px>
                                <td width=50%>
                                    Name : 
                                    <input type="text" name="name" value="">
                                </td>
                            </tr> 
                            <tr height=40px>
                                <td>
                                    Email : 
                                    <input type="email" name="email" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Username : 
                                    <input type="text" name="username" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Password : 
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                    <input type="password" name="confirmPassword" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender"  value="Male"/> Male
                                            <input type="radio" name="gender" value="Female"/> Female
                                            <input type="radio" name="gender"  value="Other"/> Other <br>
                                        </fieldset>
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value=""/>
                                        </fieldset>
                                </td>
                            </tr>
                            <!-- <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Role</legend>
                                            <input type="radio" name="role"  value="admin"/> Admin
                                            <input type="radio" name="role" value="student"/> Student
                                            <input type="radio" name="role"  value="faculty"/> Faculty
                                            <input type="radio" name="role"  value="staff"/> Staff <br>
                                        </fieldset>
                                </td>
                            </tr> -->

                            <tr height=40px>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">            
                                <input type="reset" name="reset" value="Reset">
                                <a href="login.php">Login Page</a>
                                </td>              
                            </tr>

                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
    </table>
</body>
</html>