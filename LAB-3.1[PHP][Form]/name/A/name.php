<?php
   if (empty($_REQUEST['name'])) {
      echo "Enter value!";
    } else {
      echo"Hello " . $_REQUEST['name'];

    }
?>