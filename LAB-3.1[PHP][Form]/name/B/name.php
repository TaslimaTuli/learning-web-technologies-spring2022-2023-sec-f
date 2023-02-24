<html>
    <head>
        <title>Name</title>
    </head>
    <body>
    <form method="post" action="name.php">
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value=""> <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
    </form>
    </body>
<?php 
   if (empty($_REQUEST['name'])) {
      echo "Enter value!";
    } else {
      echo"Hello " . $_REQUEST['name']; 
    }
?>
</html>