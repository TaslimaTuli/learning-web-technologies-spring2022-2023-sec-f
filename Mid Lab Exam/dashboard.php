<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
        
            </th>
            <th align="middle">
                <h2>Dashboard</h2>
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
                   
                    <tr>
                        <td>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="add.php">Create Specification</a></li>
                                <li><a href="update.php">Update Specification</a></li>
                                <li><a href="delete.php">Delete Specification</a></li>
                                <li><a href="view.php">View Profile</a></li>
                               
    
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2" align="center">
                <table border="1" width="100%" height="90px">

                    <tr align="center" >
                    <h3>Specifications</h3>
                        <th >No.</th>
                        <th>Specification Name</th>
                        <th >Specification Role</th>
                        <th>Screen Defination</th>
                        <th >User Story</th>
                        <th >Acceptance Criterea</th>
                        <th >UI Screen/Wireframe</th>
                        <th >Tags</th>

                        <?php
                        $file = fopen('specification.txt', 'r');
                        $sr=1;
                        while(!feof($file)){
                            $data = fgets($file);
                            $user = explode('|', $data);
                            if(count($user) > 1){
                        ?>
                        <tr>

                            <td><?=$sr?></td>
                            <td><?=$user[0]?></td>
                            <td><?=$user[1]?></td>
                            <td><?=$user[2]?></td>
                            <td><?=$user[3]?></td>
                            <td><?=$user[4]?></td>
                            <td><?=$user[5]?></td>
                            <td><?=$user[6]?></td>
                            <td><?=$user[7]?></td>
                            
                            

                        </tr>

                        <?php 
                            }
                            $sr++; 
                        } ?>

                    </tr> 
                        
                </table>


            </td>
        </tr>
</table>
</body>
</html>
<?php 
    }else{
        header('location: login.php'); 
    }
?>

