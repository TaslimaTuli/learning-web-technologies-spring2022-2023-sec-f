<?php
 session_start();

?>
<html>
<head>
    <title>Add Specification</title>
</head>
<body>
    <form method="POST" action="../controllers/addCheck.php" >
        <fieldset>
            <legend>Create Specification</legend>
       
        <table>
            
            <!-- <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId"></td>
            </tr> -->
            <tr>
                <td>Specification Name</td>
                <td><input type="text" name="sName"></td>
            </tr>
            <tr>
                <td>Specification Role</td>
                <td><input type="text" name="sRole" size=""></td>
            </tr>
            <tr>
                <td>Screen Defination</td>
                <td><input type="text" name="sd"></td>
            </tr>
            <tr>
                <td> User Story</td>
                <td><input type="text" name="uStory"></td>
            </tr>
            <tr>
                <td>Acceptance Criterea</td>
                <td><input type="text" name="ac"></td>
            </tr>
            <tr>
                <td>UI Screen / Wireframe</td>
                <td><input type="file" id="img" name="ui" accept="image/*"></td>
        
            </tr>
            <tr>
                <td>Tags</td>
                <td><input type="text" name="tag"></td>
            </tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
        </fieldset>
    </form>



        
    
    
			
</body>
</html>
<?php 
   
?>