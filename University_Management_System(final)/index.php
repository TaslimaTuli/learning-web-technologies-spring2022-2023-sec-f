<?php
session_start();
require_once('models/db.php');
	$sql = "SELECT * FROM notice";
    $con = getConnection();
	$result = mysqli_query($con, $sql); 
?>

<html>
<head>
	<title>University Management System</title>
	<link rel="stylesheet"  href="asset/css/dashB.css">
</head>
<body>
	<header>
		<h1>Welcome to University Management System</h1>
		
	</header>
	<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
                
               <li><a href="views/login.php">Login</a></li>
                <li><a href="views/registration.php">Signup</a></li>
				<!-- <li><a href="">About Us</a></li>
				<li><a href="">Contact Us</a></li> -->
			</ul>
		</nav>
		<h2><u> NOTICE BOARD</u></h2>
                  
                        
                        <table >
                            <tr  >
                               <th>No.</th>
                                <th >Notice</th>
                                <th >Description</th>
                                <th>Date</th>
							</tr>
                                <tr >
									
								<?php while($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                        
                                    </tr>
                                  
                                        <?php } ?>   
                                
                                
                
                                </tr>
				
                        </table>
      

	<footer>
		<p>2023 University Management System</p>
	</footer>
</body>
</html>

