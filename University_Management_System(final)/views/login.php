<?php
    session_start();
?>

<html>
<head>
    <title>login</title>
    <script type="text/javascript" src="../controllers/js/login_validate.js"></script>
    <link rel="stylesheet"  href="../asset/css/loginn.css">
</head>
<body>
<header><h1> University Management System </h1></header>
<nav>
	<ul>
		<li><a href="../index.php">Home</a></li>
        
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Signup</a></li>
		<!-- <li><a href="">About Us</a></li>
		<li><a href="">Contact Us</a></li> -->
	</ul>
</nav>

<form method="post" onsubmit="return validateLogin()" action="../controllers/loginCheck.php">
                    <fieldset>
                        <!-- <legend>Login</legend> -->
                        <table align="center" >
                            
                            <tr>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text"  id="username" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>">
                                    <span id="usernameError" style="color:red"></span><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>">
                                    <span id="passwordError" style="color:red"></span><br>
                                </td>
                            </tr>
                
                            <tr>
                                <td><input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me</td> 
                            </tr>
                            <tr >
                                <td colspan="2">
                                <input type="submit" name="submit" value="Login"> 
                                
                                <!-- <a href="forgetPass.php"><i>Forgot Password?</i></a>            -->
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                <?php
                    
                                    if(isset($_REQUEST['msg'])){
                                            if($_REQUEST['msg'] == "error"){
                                                echo "Invalid username or password! " .'<br>';
                                                echo"Don't have an account?". '<a href="registration.php">Register Now!</a>';
                                            }else{
                                                header('location: login.php');
                                            }
                                        }
                                        if(isset($_REQUEST['nullVal'])){
                                            if($_REQUEST['nullVal'] == "e"){
                                                echo "Null Value! Enter username and password!" .'<br>';
                                            }else{
                                                header('location: login.php');
                                            }
                                        }
            
                                ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

          
    <footer>
		<p>2023 University Management System</p>
	</footer>
</body>
</html>
