<?php	
	session_start();
	require_once('../models/noticeBoardDB.php');
	if(isset($_REQUEST['submit'])){
		//require_once('../models/noticeBoardDB.php');
		$id = $_POST['id'];
		$noticeTitle = $_POST['noticeTitle'];
		$noticeDescription = $_POST['noticeDescription'];
		$time = $_POST['time'];

		if( $noticeTitle != null &&  $noticeDescription != null  &&  $time != null && $id != null){
			
			// $con = getConnection();
			// $sql = "INSERT INTO notice (title, description, date) VALUES ('$noticeTitle', '$noticeDescription', '$time')";
			
			
			$n = ['title'=>$noticeTitle, 'description'=> $noticeDescription, 'date'=>$time, 'id'=>$id];
			$status = addNotice($n);
			if($status){
				header('Location: ../views/NoticeList.php');
				exit();
			}else{
				echo "Error!";
			}
			
			header('location:../views/NoticeList.php');


		}else{
			echo "Fields can not be null";
		}
	}


?>