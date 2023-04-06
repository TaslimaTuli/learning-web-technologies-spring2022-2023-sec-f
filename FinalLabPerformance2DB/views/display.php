<html>
    <head>
        <title>display Product</title>
    </head>
    <body>
        <form method="POST" action="../controllers/addProductCheck.php" enctype="">
            <fieldset>
                <legend>DISPLAY</legend>
               <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <th></th> 
                    <th></th>
                </tr>
                <tr>
                <?php
                require_once('../models/userModel.php');
                $result = show();
			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo  "</td><td>" . $row["name"]. "</td><td>" . $row["profit"]. "</td><td>". '<a href="delete.php">delete</a>'. "</td><td>". '<a href="edit.php">edit</a>'."<tr></tr>";

				}
			}
			
		?>
                    

                </tr>
               </table>
            </fieldset>
        </form>
    </body>
</html>