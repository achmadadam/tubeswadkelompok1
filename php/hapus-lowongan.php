<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from tb_lowongan where id_lowongan='$id'");
header("location:../perusahaan-dashboard.php");
?>