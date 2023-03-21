<?php
 session_start();
 if(isset($_COOKIE['flag'])){
?>
<html>
<head>
    <title>Delete Specification</title>
</head>
<body>
    <form method="POST" action="" >
        <fieldset>
            <legend>Delete Specification</legend>
       
        <table>
            
            <!-- <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId"></td>
            </tr> -->
            <tr>
                <td>Enter Specification Name to Delete</td>
                <td><input type="text" name="sName"></td>
            </tr>
             
            </tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
        <?php
	if (isset($_POST['submit'])) {

		$speName = $_POST['sName'];
        if($speName == null){
            echo"Can not be null!"; 
            die;
        }

		$spe = file('specification.txt');
		$newSpe = array();

		foreach ($spe as $s) {
			$sp = explode('|', $s);
			if ($sp[0] != $speName) {
				$newSpe[] = $s;
			}
		}
       

		$file = fopen("specification.txt", "w");
		fwrite($file, implode("", $newSpe));
		fclose($file);

		echo "Deleted successfully!". '<a href="dashboard.php">Dashboard</a>'; 
        die;
        
	}
    
	?>

        </fieldset>
    </form>



        
    
    
			
</body>
</html>
<?php 
    }else{
        header('location: login.php'); 
    }
?>