<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <form method="post" action="">
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="email" value=""> <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
        </form>
    </body>

<?php
     if (empty($_REQUEST['email'])) {
          echo "Enter value!";
        } else {
          echo"Your email is " . $_REQUEST['email']; 

        }
?>

</html>