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
$lw = mysqli_query($koneksi,"SELECT * FROM tb_lamar a, tb_lowongan b, tb_user c where a.id_lowongan = b.id_lowongan and a.id_user = c.id");
$cek = mysqli_num_rows($data);
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
                            <h3>Resume Pekerjaan di <?=$a['nama']?></h3>
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
                                <h3>Resume Pelamar Perusahaan</h3>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Foto</td>
                                            <td>Nama Pelamar</td>
                                            <td>Posisi yang Dilamar</td>
                                            <td>email</td>
                                            <td>Resume</td>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php                              


while ($a=mysqli_fetch_array($lw)) {
        ?>
                                        <tr>
                                            <td>
                                                <div class="table-list-title">
                                                    <img src="gambar/<?=$a['foto']?>" style="max-height: 70px;" alt="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="#" title=""><?=$a['nama']?></a></h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="#" title=""><?=$a['judul']?></a></h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a href="#" title=""><?=$a['email']?></a></h3>
                                                </div>
                                            </td>
                                            <td>
                                            	<a href="lampiran/<?=$a['file_lampiran']?>" download class="btn btn-success" title="">Download CV</a>
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