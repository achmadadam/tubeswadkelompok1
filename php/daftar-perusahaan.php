<?php 
    include 'koneksi.php';
session_start();
$username=$_SESSION['username'];
$id_user = mysqli_query($koneksi,"select id_user from tb_user where username='$username'");
    $rand = rand();
    $nama           = $_POST["nama"];
    $industri       = $_POST["industri"];
    $jenis          = $_POST["jenis"];
    $kota           = $_POST["kota"];
    $tentang        = $_POST["tentang"];
    $tahun_berdiri  = $_POST["berdiri"];
    $website        = $_POST["link"];
    $ukuran         = $_POST["ukuran"];

    $ekstensi   =  array('png','jpg','jpeg','gif');
    $filename   = $_FILES['foto']['name'];
    $ukuran     = $_FILES['foto']['size'];
    $ext        = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:perusahaan-daftar.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){      
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/'.$rand.'_'.$filename);

            mysqli_query($koneksi, "INSERT INTO tb_perusahaan VALUES('', '$id_user', '$nama', '$industri', '$jenis', '$kota', '$tentang', '$xx', '$tahun_berdiri', '$website', '$ukuran')");
            header("location:../perusahaan-dashboard.php?alert=Berhasil mendaftar, silahkan login");
        }else{
            header("location:../perusahaan-daftar.php?alert=gagal_ukuran");
        }
    }