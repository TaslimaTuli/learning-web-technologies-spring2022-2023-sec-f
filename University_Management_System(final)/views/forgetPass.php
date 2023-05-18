<?php
session_start();

?>
<html>
<head>
    <title>Forget Password</title>
</head>
<body>
    <table border="1" width=60%>
        <tr height="100px">
            <th>
            </th>
            <th></th>
            <th width=30%>
                <a href="noticeBoard.php">Notice Board</a> |
                <a href="registration.php">Registration</a>
            </th>
        </tr>

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="chngPass.php">
                    <fieldset>
                        <legend>Forgot Password</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td width=90px>
                                    Enter Email : 
                                
                                </td>
                                <td>
                                    <input type="email" name="email">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="" value="Submit"> 
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php
                    
                                    if(isset($_REQUEST['msg'])){
                                            if($_REQUEST['msg'] == "error"){
                                                echo "Enter your email!" .'<br>';
                                                echo"Don't have an account?". '<a href="registration.php">Register Now!</a>';
                                            }else{
                                                header('location: forgetPass.php');
                                            }
                                        }
            
                                ?>
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
