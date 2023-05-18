<?php	

             function getAllNotice(){
                $file = fopen('notice.txt', 'r');
                while(!feof($file)){
                    $notice = fgets($file);
                    $noticeArray = explode('|', $notice);
                    return $noticeArray;
                }
            }


?>