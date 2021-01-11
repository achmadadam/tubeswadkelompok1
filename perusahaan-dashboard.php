<?php ob_start();
    session_start();

    if(isset($_SESSION['status'])){
        if($_SESSION['status']=="login"){
        } else{
            header('location:index.php');
        }
    } else{
            header('location:index.php');
        } ?>
<?php include 'php/head.php'; ?>
<?php 


include 'php/koneksi.php';

$username = $_SESSION['username'];
 
$data = mysqli_query($koneksi,"SELECT * FROM tb_user a, tb_perusahaan b where a.id = b.id_user and a.username='$username'");
$lw = mysqli_query($koneksi,"SELECT * FROM tb_lowongan a, tb_perusahaan b, tb_user c where a.id_perusahaan = b.id_perusahaan and b.id_user = c.id and c.username='$username'");
$cek = mysqli_num_rows($data);
$ceklw = mysqli_num_rows($lw);
if($cek > 0){
}else{
    header("Location:perusahaan-daftar.php");
}
while ($a=mysqli_fetch_array($data)) {
        ?>

<?php include 'php/perusahaan-header.php'; ?>


    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Selamat Datang <?=$a['nama']?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }  ?>
    <section>
        <div class="block no-padding">
            <div class="container">
                 <div class="row no-gape">
                    <aside class="col-lg-3 column border-right">
                        <div class="widget">
                            <div class="tree_widget-sec">
                                <ul>
                                    <li><a href="#" title=""><i class="la la-file-text"></i>Profil Perusahaan</a></li>
                                    <li><a href="perusahaan-dashboard.php" title=""><i class="la la-briefcase"></i>Kelola Pekerjaan</a></li>
                                    <li><a href="#" title=""><i class="la la-money"></i>Transaksi</a></li>
                                    <li><a href="perusahaan-resume.php" title=""><i class="la la-paper-plane"></i>Resume</a></li>
                                    <li><a href="#" title=""><i class="la la-user"></i>Paket</a></li>
                                    <li><a href="perusahaan-post.php" title=""><i class="la la-file-text"></i>Posting Pekerjaan Baru</a></li>
                                    <li><a href="#" title=""><i class="la la-flash"></i>Notifikasi Pekerjaan</a></li>
                                    <li><a href="#" title=""><i class="la la-lock"></i>Ubah Password</a></li>
                                    <li><a href="php/logout.php" title=""><i class="la la-unlink"></i>Keluar</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec">
                                <h3>Kelola Pekerjaan</h3>
                                <div class="extra-job-info">
                                    <span><i class="la la-clock-o"></i><strong><?php echo $ceklw; ?></strong> Pekerjaan dipost</span>
                                    <span><i class="la la-file-text"></i><strong>0</strong> Pendaftar</span>
                                    <span><i class="la la-users"></i><strong>0</strong> Pekerjaan Aktif</span>
                                </div>
                                <a href="perusahaan-post.php" title="Tambah Lowongan" class="btn btn-primary mt-3 float-right">+ Tambah Lowongan</a>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Judul</td>
                                            <td>Dibuat & Berakhir</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php                              


while ($a=mysqli_fetch_array($lw)) {
        ?>
                                        <tr>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="#" title=""><?=$a['judul']?></a></h3>
                                                    <span><i class="la la-map-marker"></i><?=$a['kota']?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <span><?=$a['tanggal_buka']?></span><br />
                                                <span><?=$a['tanggal_tutup']?></span>
                                            </td>
                                            <td>
                                                <ul class="action_job">
                                                    <li><span>Lihat</span><a href="#" title=""><i class="la la-eye"></i></a></li>
                                                    <li><span>Edit</span><a href="perusahaan-postedit.php?id=<?=$a['id_lowongan']?>" title="Edit"><i class="la la-pencil"></i></a></li>
                                                    <li><span>Hapus</span><a href="php/hapus-lowongan.php?id=<?=$a['id_lowongan']?>" title="Hapus"><i class="la la-trash-o"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

<?php include 'php/footer.php'; ?>