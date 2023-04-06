<?php
	session_start();
	//require_once('../models/db.php');
    require_once('../models/userModel.php');
	if(isset($_POST['submit'])){
		$name = $_POST['newName'];
		$buy = $_POST['newBuy'];
        $sell = $_POST['newSell'];
		if( $name != null && $buy != null && $sell != null){
			$profit = $sell - $buy;
            $p = ['name'=>$name, 'buy'=> $buy,'sell'=>$sell, 'profit'=>$profit];
            
            $status = add($p);
            
            if($status){
                header('location: ../views/display.php');
            }else{
                echo "DB error, please try again";
            }
		}else{
			echo "Fields can not be null";
		}
	}else{
		echo "Invalid request...";
	}

?>