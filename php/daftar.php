<?php 
    include 'koneksi.php';
    $rand = rand();
    $nama           = $_POST["nama"];
    $username       = $_POST["username"];
    $password       = $_POST["password"];
    $tanggal_lahir  = $_POST["tanggal_lahir"];
    $email          = $_POST["email"];
    $notelp         = $_POST["notelp"];
    $jk             = $_POST["jk"];

    $ekstensi   =  array('png','jpg','jpeg','gif');
    $filename   = $_FILES['foto']['name'];
    $ukuran     = $_FILES['foto']['size'];
    $ext        = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){      
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/'.$rand.'_'.$filename);

            mysqli_query($koneksi, "INSERT INTO tb_user VALUES('', '$nama', '$username', '$password', '$tanggal_lahir', '$email', '$notelp', '$jk', '$xx')");
            header("location:../index.php?alert=Berhasil mendaftar, silahkan login");
        }else{
            header("location:../index.php?alert=gagal_ukuran");
        }
    }