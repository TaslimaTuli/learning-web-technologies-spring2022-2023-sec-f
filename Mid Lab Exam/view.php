<?php
    session_start();
    
    if(isset($_COOKIE['flag']) ){

        
?>

<html>
<head>
    <title>Profile</title>
</head>
<body>
    <table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
        
            </th>
            <th align="middle">
                <h3>Your Profile</h3>
            </th>
            <th width=20%>
                Logged in as <a href="view.php"><?php if(isset($_SESSION['username'])){
                echo($_SESSION['username']);}  ?></a> |
                    <a href="logout.php">Logout</a> 
            </th>
        </tr>

        <tr >
            <td width=20%>
                <table width=100%>
                    <!-- <tr>
                        <th><h2>Account</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="view.php">View Profile</a></li>
                                <li><a href="NoticeList.php">Notice</li>
                                <li><a href="Course.php">Course</a></li>
                                <li><a href="Faculty.php">Faculty</a></li>
                                <li><a href="Student.php">Student</a></li>
    
                            </ul>
                        </td>
                    </tr> -->
                </table>
            </td>
            <td  align="center">
                
                <fieldset>
                    <legend><h3>PROFILE</h3></legend>
                    <table border="0" width=100%>
                        <tr>
                            
                            <td>Name</td>
                            <td>
                            <?php $file = fopen('regiUser.txt', 'r');
            
                                while(!feof($file)){
                                    $data = fgets($file);
                                    $user = explode('|', $data) ;
                                    
                                    if($_SESSION['username'] ===$user[0]){
                                        echo $user[3];
                                    }
                    
                                    }?>
                            </td>
                            
                           
                        </tr>
                        <tr>
                        <td>Username:</td>
                            <td><?php echo $_SESSION['username']?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><?php echo $_SESSION['password']?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><?php $file = fopen('regiUser.txt', 'r');
            
                                        while(!feof($file)){
                                            $data = fgets($file);
                                            $user = explode('|', $data) ;
                                            
                                            if($_SESSION['username'] ===$user[0]){
                                                echo $user[1];
                                            }

                                            }?></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>Gender:</td>
                            <td><?php $file = fopen('regiUser.txt', 'r');
            
                                        while(!feof($file)){
                                            $data = fgets($file);
                                            $user = explode('|', $data) ;
                                            
                                            if($_SESSION['username'] ===$user[0]){
                                                echo $user[4];
                                            }

                                            }?> </td>
                
                            <td></td>
                        </tr>
                       
                        <tr >
                            <td>Date of Birth: </td>
                            <td><?php $file = fopen('regiUser.txt', 'r');
            
                                        while(!feof($file)){
                                            $data = fgets($file);
                                            $user = explode('|', $data) ;
                                            if($_SESSION['username'] ===$user[0]){
                                                echo $user[5];
                                            }
                                        

                                            }?> </td>
                            <td></td>
                        </tr>
                        <!-- <tr>
                            <td>Role:</td>
                            <td><?php $file = fopen('regiUser.txt', 'r');
            
                                            while(!feof($file)){
                                                $data = fgets($file);
                                                $user = explode('|', $data) ;
                                                if($_SESSION['username'] ===$user[0]){
                                                    echo $user[6];
                                                }
                                                   

                                                }?></td> 
                            <td></td>
                        </tr>  -->
                       
                        <!-- <tr>
                            <td><a href="edit.php">Edit Profile</a></td>
                            
                        </tr>                 -->

                    </table>
                </fieldset>
            
            </td>
            <td width=20%></td>
        </tr>
    </table>
</body>
</html>
<?php 
    }else{
        header('location: login.php'); 
    }
?>