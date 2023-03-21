<?php	
//session_start();
	if(isset($_REQUEST['submit'])){
	
		$sName = $_POST['sName'];
        $sRole = $_POST['sRole'];
        $sd = $_POST['sd'];
        $uStory = $_POST['uStory'];
        $ac = $_POST['ac'];
        $ui = $_POST['ui'];    
        $tag= $_POST['tag'];
        
		if( $sName != null &&  $sRole != null &&  $sd != null &&  $uStory!= null &&  $ac!= null && $ui!= null  && $tag!= null ){
			
			
			$s=  $sName."|" . $sRole."|" . $sd."|" . $uStory."|" . $ac."|" .$ui."|" . $tag ."\r\n";

			$file = fopen('specification.txt', 'a+');
			fwrite($file, "$s");
			fclose($file);
			header('location: dashboard.php');


		}else{
			echo "Fields can not be null";
		}
	}

?>
