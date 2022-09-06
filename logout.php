<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['email']);
unset($_SESSION['password']);
session_destroy(); 
setcookie("PHPSESSID","",time()-3600,"/"); 
header("location: login.php");
?>