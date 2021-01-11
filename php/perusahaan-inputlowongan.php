<?php 
    include 'koneksi.php';
    $id_perusahaan      = $_POST["id_perusahaan"];
    $judul              = $_POST["judul"];
    $deskripsi          = $_POST["deskripsi"];
    $tanggal_buka       = $_POST["tanggal_buka"];
    $tanggal_tutup      = $_POST["tanggal_tutup"];
    $keahlian           = $_POST["keahlian"];
    $jenis_pekerjaan    = $_POST["jenis_pekerjaan"];
    $gaji               = $_POST["gaji"];

    mysqli_query($koneksi, "INSERT INTO tb_lowongan VALUES('', '$id_perusahaan', '$judul', '$deskripsi', '$tanggal_buka', '$tanggal_tutup', '$keahlian', '$jenis_pekerjaan', '$gaji')");
    header("location:../perusahaan-dashboard.php?alert=Berhasil Input Lowongan Pekerjaan Baru");    
    ?>