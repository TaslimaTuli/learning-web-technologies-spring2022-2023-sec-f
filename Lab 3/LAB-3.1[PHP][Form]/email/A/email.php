<?php
     if (empty($_REQUEST['email'])) {
          echo "Enter value!";
        } else {
          echo"Your email is " . $_REQUEST['email']; 
        }
?>