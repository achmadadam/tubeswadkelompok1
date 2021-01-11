<?php 
session_start();
session_destroy();
session_start();
$_SESSION['admin'] = 'logout';
header("location:../admin-login.php?alert=Berhasil Logout");
?>