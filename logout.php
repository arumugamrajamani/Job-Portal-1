<?php
session_start();
unset($_SESSION['user_id']);
session_start(); 
session_destroy(); 
setcookie("PHPSESSID","",time()-3600,"/"); 
header("location: login.php");
?>