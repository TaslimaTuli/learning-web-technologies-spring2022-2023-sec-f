<html>
    <head>
        <title>Date of Birth</title>
    </head>
    <body>
        <form method="post" action="dob.php">
            <fieldset>
                <legend>Date of Birth</legend>
        <table>
            <tr>
                <td>
                dd <br>
                <input type="number" name="date" value="" min="1" max="31"> /
                </td> 
            
                <td>
                mm <br>
                <input type="number" name="month" value="" min="1" max="12"> /
                </td> 
        
                <td>
                yyyyy <br>
                <input type="number" name="year" value="" min="1700" max="2050"> 
                </td> 
            </tr>
        </table>
                <hr>
                <input type="submit" name="" value="Submit">
            </fieldset>
        
        </form>
    </body>

    <?php
        if (empty($_REQUEST["date"]) || empty($_REQUEST["month"]) || empty($_REQUEST["year"])) {
            echo "Enter value!";
          } else {
            echo"Your date of birth is " . $_REQUEST['date']."/". $_REQUEST['month']."/". $_REQUEST['year']; 

          }
    ?>


</html>