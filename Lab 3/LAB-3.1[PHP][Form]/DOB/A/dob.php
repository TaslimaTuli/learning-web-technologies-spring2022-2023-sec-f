<?php
 if (empty($_REQUEST["date"]) || empty($_REQUEST["month"]) || empty($_REQUEST["year"])) {
    echo "Enter value!";
  } else {
    echo"Your date of birth is " . $_REQUEST['date']."/". $_REQUEST['month']."/". $_REQUEST['year']; 

  }     
?>