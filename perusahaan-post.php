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
$cek = mysqli_num_rows($data);
if($cek > 0){
}else{
    header("Location:perusahaan-daftar.php");
}
while ($a=mysqli_fetch_array($data)) {
        ?>
<?php include 'php/perusahaan-header.php';?>


    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Posting Lowongan Pekerjaan Baru</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            <div class="profile-title">
                                <h3>Posting Lowongan Pekerjaan</h3>
                            </div>
                            <div class="profile-form-edit">
                                <form method="post" action="php/perusahaan-inputlowongan.php">
                                    <input type="hidden" name="id_perusahaan" value="<?=$a['id_perusahaan']?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Nama Pekerjaan</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Lead Social Media Campaigner" name="judul" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Deskripsi</span>
                                            <div class="pf-field">
                                                <textarea name="deskripsi"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Tanggal Buka</span>
                                            <div class="pf-field">
                                                <input type="date" name="tanggal_buka"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Tanggal Tutup</span>
                                            <div class="pf-field">
                                                <input type="date" name="tanggal_tutup"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Keahlian yang Dibutuhkan</span>
                                            <div class="pf-field">
                                                <input type="text" name="keahlian" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Jenis Pekerjaan</span>
                                            <div class="pf-field">
                                                <select data-placeholder="Jenis Pekerjaan" class="chosen" name="jenis_pekerjaan">
                                                    <option value="fulltime">Full-time</option>
                                                    <option value="freelance">Freelance</option>
                                                    <option value="parttime">Part-time</option>
                                                    <option value="temporary">Temporary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Gaji</span>
                                            <div class="pf-field">
                                                <input type="text" placeholder="Rentang gaji" name="gaji" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <button type="submit">Posting Lowongan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

<?php } ?>
<?php include 'php/footer.php'; ?>