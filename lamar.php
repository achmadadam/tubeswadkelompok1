<?php 
    session_start();

    if(isset($_SESSION['status'])){
        if($_SESSION['status']=="login"){
         include 'php/head.php'; 
         include 'php/header-user.php'; 
        } else{
             header('location: index.php');
             include 'php/head.php'; 
             include 'php/header.php';
        }
    } else{
            header('location: index.php');
             include 'php/head.php'; 
             include 'php/header.php';
        } ?>
    

<?php 


include 'php/koneksi.php';
$getid = $_GET['id'];
$username = $_SESSION['username'];
 $data = mysqli_query($koneksi,"SELECT * FROM tb_lowongan a, tb_perusahaan b, tb_user c where a.id_perusahaan = b.id_perusahaan and b.id_user = c.id and id_lowongan = '$getid'");
while ($a=mysqli_fetch_array($data)) {
        ?>

    <section>
        <div class="block no-padding  gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner2">
                            <div class="inner-title2">
                                <h3>Lamar Pekerjaan</h3>
                                <span>Kirim lamaranmu sekarang juga!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-popup-area signin-popup-box static">
                            <div class="account-popup">
                                <h4><?=$a['judul']?></h4>
                                <br>
                                Lampiran File CV
                                <form action="php/kirimlamaran.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_lowongan" value="<?php echo $getid; ?>">
                                    <input type="hidden" name="id_user" value="<?=$a['id']?>">
                                    <div class="cfield">
                                        <input type="file" name="lampiran" />
                                    </div>
                                    <button type="submit">Lamar</button>
                                </form>
                            </div>
                        </div><!-- LOGIN POPUP -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php include 'php/footer.php'; ?>