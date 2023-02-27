<html>
    <head>
        <title>Blood Group</title>
    </head>
    <body>
        <form method="post" action="bg.php">
            <fieldset>
               <legend>Blood Group</legend>
                <select name="bloodGroup">
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    <option value="O-">O-</option>
                </select> <br>
                <hr>
                    <input type="submit" name="" value="Submit">
            </fieldset>
        </form>
    </body>

<?php
    if (isset($_POST["bloodGroup"])) {
        echo "Your blood group is ". $_POST["bloodGroup"]. " ve";
        }

?>
</html>