<?php 
session_start();
session_destroy();
session_start();
$_SESSION['status'] = 'logout';
header("location:../index.php?alert=Berhasil Logout");
?>