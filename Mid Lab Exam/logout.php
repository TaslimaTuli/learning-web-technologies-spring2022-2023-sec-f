<?php 

session_start();
unset($_SESSION['flag']);
setcookie('flag', 'abc', time()-10, '/');
header('location: login.php');
?>