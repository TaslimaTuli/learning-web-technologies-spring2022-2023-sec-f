<?php
    if(isset($_POST['degree'])){
        $degree = $_POST['degree'];
            echo"Your selected value: <br>";
            foreach($degree as $d){
                echo $d ." <br>";
            
            }
            
        }

?>