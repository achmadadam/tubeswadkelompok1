<?php 
    session_start();
    if(isset($_SESSION['status'])){
        if($_SESSION['status']=="login"){
         include 'php/head.php'; 
         include 'php/header-user.php'; 
        } else{
            header('location:index.php');
        }
    } else{
            header('location:index.php');
        } ?>
    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Daftarkan Perusahaanmu Sekarang!</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 m-5 p-4 bg-light">
                            <h3>Mendaftar Perusahaan</h3>
                            <form method="post" action="php/daftar-perusahaan.php" enctype="multipart/form-data">
                                <div class="cfield">
                                    <input type="text" placeholder="Nama Perusahaan" name="nama" />
                                </div>
                                <div class="cfield">
                                    <input type="text" placeholder="Industri" name="industri" />
                                </div>
                                <div class="cfield">
                                    <input type="text" placeholder="Jenis" name="jenis" />
                                </div>
                                <div class="cfield">
                                    <input type="text" placeholder="Kota" name="kota" />
                                </div>
                                <div class="cfield mb-2">
                                    <textarea name="tentang" rows="2" placeholder="Tentang Perusahaan"></textarea>                                    
                                </div>
                                <div class="cfield my-2">
                                    Foto Profil Perusahaan
                                    <input type="file" placeholder="Foto" name="foto" />
                                </div>
                                <div class="cfield">
                                    <input type="number" placeholder="Tahun Berdiri" name="berdiri" />
                                </div>
                                <div class="cfield">
                                    <input type="text" placeholder="URL Link website" name="link" />
                                </div>
                                <div class="dropdown-field">
                                    Ukuran Perusahaan
                                    <select data-placeholder="Ukuran Perusahaan" class="chosen" name="ukuran">
                                        <option value="PT">PT</option>
                                        <option value="CV">CV</option>
                                        <option value="Firma">Firma</option>
                                        <option value="UD">UD</option>
                                    </select>
                                </div>
                                <button type="submit">Daftarkan Perusahaan</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'php/footer.php'; ?>