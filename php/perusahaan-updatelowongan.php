<?php 
    include 'koneksi.php';
    $id_lowongan        = $_POST["id_lowongan"];
    $judul              = $_POST["judul"];
    $deskripsi          = $_POST["deskripsi"];
    $tanggal_buka       = $_POST["tanggal_buka"];
    $tanggal_tutup      = $_POST["tanggal_tutup"];
    $keahlian           = $_POST["keahlian"];
    $jenis_pekerjaan    = $_POST["jenis_pekerjaan"];
    $gaji               = $_POST["gaji"];

    mysqli_query($koneksi, "INSERT INTO tb_lowongan VALUES('', '$id_perusahaan', '$judul', '$deskripsi', '$tanggal_buka', '$tanggal_tutup', '$keahlian', '$jenis_pekerjaan', '$gaji')");

    mysqli_query($koneksi,"update tb_lowongan set judul='$judul', deskripsi='$deskripsi', tanggal_buka='$tanggal_buka', tanggal_tutup='$tanggal_tutup', keahlian='$keahlian', jenis_pekerjaan = '$jenis_pekerjaan', gaji = '$gaji' where id_lowongan='$id_lowongan'");
 

    header("location:../perusahaan-dashboard.php?alert=Berhasil Input Lowongan Pekerjaan Baru");    
    ?>