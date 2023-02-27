<?php
    $num1=80;
    $num2=70;
    $num3=10;
    if($num1>$num2 and $num1>$num3)
    {
        echo "The largest number from $num1 , $num2 and $num3 is $num1";
    }
    else if($num2>$num3)
    {
        echo "The largest number from $num1 , $num2 and $num3 is $num2";
    }
    else
    {
        echo "The largest number from $num1 , $num2 and $num3 is $num3";
    }
?>