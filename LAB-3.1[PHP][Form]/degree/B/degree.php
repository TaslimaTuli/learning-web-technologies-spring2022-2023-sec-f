<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
        <form method="post" action="degree.php">
            <fieldset>
                <legend>Degree</legend>
                <input type="checkbox" name="degree[]" value="SSC"> SSC
                <input type="checkbox" name="degree[]" value="HSC"> HSC
                <input type="checkbox" name="degree[]" value="BSc"> BSc
                <input type="checkbox" name="degree[]" value="MSc"> MSc <hr>
                <input type="submit" name="" value="Submit">
            </fieldset>
        </form>
    </body>

    <?php
    if(isset($_POST['degree'])){
        $degree = $_POST['degree'];
            echo"Your selected value: <br>";
            foreach($degree as $d){
                echo $d ." <br>";
            
            }
            
        }

?>

</html>