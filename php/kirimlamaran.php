<?php 
    include 'koneksi.php';
    $rand = rand();
    $id_lowongan           = $_POST["id_lowongan"];
    $id_user       = $_POST["id_user"];

    $ekstensi   =  array('rar','zip','pdf','doc');
    $filename   = $_FILES['lampiran']['name'];
    $ukuran     = $_FILES['lampiran']['size'];
    $ext        = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:index.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 10440700){      
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['lampiran']['tmp_name'], '../lampiran/'.$rand.'_'.$filename);

            mysqli_query($koneksi, "INSERT INTO tb_lamar VALUES('', '$id_lowongan', '$id_user', '$xx', 'Menunggu Konfirmasi Perusahaan')");
            header("location:../index.php?alert=Berhasil melamar");
        }else{
            header("location:../index.php?alert=gagal_ukuran");
        }
    }