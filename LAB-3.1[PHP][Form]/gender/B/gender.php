<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <form method="post" action="gender.php">
            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other <hr>

                <input type="submit" name="" value="Submit">
            </fieldset>
        </form>
    </body>

<?php
   if (isset($_POST["gender"])) {
        echo "You are a ". $_POST["gender"];
        
        }
?>
</html>