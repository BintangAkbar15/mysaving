<?php 
session_start();
session_destroy();
setcookie("login", false, time()-3600);
header("location:index.php");
?>