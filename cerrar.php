<?php 
session_start();
$_SESSION['id']=0;
$_SESSION['tipo']="";
$_SESSION['name']="";
session_cache_expire();
session_destroy();
ob_end_flush();
header('location:index.html');

?>