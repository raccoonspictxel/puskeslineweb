<?php 
session_start();
$_SESSION['access_token'] = "";
$_SESSION['access_profile'] = "";
session_destroy();
header("location: index.php");
?>