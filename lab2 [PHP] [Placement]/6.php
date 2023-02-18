<?php
$value=array("A","B","C","D","E");
$flag=0;
for($i = 0; $i < $value[$i]; $i++){
    if($value[$i] == "C"){
        $flag=1;
    }
}
if($flag == 1)
		{
			echo "Data found in index $i";
		}
		else
			echo "Data not found";

?>