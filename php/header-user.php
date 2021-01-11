<body>

<div class="page-loading">
    <img src="images/loader.gif" alt="" />
</div>
<div class="theme-layout" id="scrollup">
    
    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="index.php" title=""><img src="images/resource/logo.png" alt="" /></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="images/icon.png" alt="" /> Menu
                </div>
                <div class="res-closemenu">
                    <img src="images/icon2.png" alt="" /> Close
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            <div class="btn-extars">
                <a href="#" title="" class="post-job-btn">Perusahaan</a>
                <ul class="account-btns">
                        <li class="signup-popup"><a title="Profil saya" href="profil.php"><i class="la la-user"></i> <?php echo $_SESSION['username']; ?></a></li>
                        <li class="signin-popup"><a title="Logout" href="php/logout.php"><i class="la la-external-link-square"></i> Logout</a></li>
                </ul>
            </div><!-- Btn Extras -->
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name" />
                <button type="submit"><i class="la la-search"></i></button>
            </form>
            <div class="responsivemenu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Cari Lowongan Kerja</a>
                        <ul>
                            <li><a href="#" title="">Semua Lowongan</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Berdasarkan Kota</a>
                                <ul>
                                    <li><a href="#">Jakarta</a></li>
                                    <li><a href="#">Bandung</a></li>
                                    <li><a href="#">Semarang</a></li>
                                    <li><a href="#">Yogyakarta</a></li>
                                    <li><a href="#">Bali</a></li>
                                    <li><a href="#">Makassar</a></li>
                                    <li><a href="#">Papua</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="">Lowongan Startup</a></li>
                            <li><a href="#" title="">Freelance</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Pengembangan Diri</a>
                        <ul>
                            <li><a href="#" title="">Tes Inggris</a></li>
                            <li><a href="#" title="">Inpirasi Karir</a></li>
                            <li><a href="#" title="">Cek Gaji</a></li>
                            <li><a href="#" title="">Tes Minat</a></li>
                            <li><a href="#" title="">Tes Gaya Komunikasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <header class="stick-top forsticky">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="index.php" title=""><img class="hidesticky" src="images/resource/logo.png" alt="" /><img class="showsticky" src="images/resource/logo10.png" alt="" /></a>
                </div><!-- Logo -->
                <div class="btn-extars">
                    <a href="perusahaan-dashboard.php" title="" class="post-job-btn">Perusahaan</a>
                    <ul class="account-btns">
                        <li class="signup-popup"><a title="Profil saya" href="profil.php"><i class="la la-user"></i> <?php echo $_SESSION['username']; ?></a></li>
                        <li class="signin-popup"><a title="Logout" href="php/logout.php"><i class="la la-external-link-square"></i> Logout</a></li>
                    </ul>
                </div><!-- Btn Extras -->
                <nav>
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#" title="">Cari Lowongan Kerja</a>
                            <ul>
                                <li><a href="#" title="">Semua Lowongan</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">Berdasarkan Kota</a>
                                    <ul>
                                        <li><a href="#">Jakarta</a></li>
                                        <li><a href="#">Bandung</a></li>
                                        <li><a href="#">Semarang</a></li>
                                        <li><a href="#">Yogyakarta</a></li>
                                        <li><a href="#">Bali</a></li>
                                        <li><a href="#">Makassar</a></li>
                                        <li><a href="#">Papua</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="">Lowongan Startup</a></li>
                                <li><a href="#" title="">Freelance</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" title="">Pengembangan Diri</a>
                            <ul>
                                <li><a href="#" title="">Tes Inggris</a></li>
                                <li><a href="#" title="">Inpirasi Karir</a></li>
                                <li><a href="#" title="">Cek Gaji</a></li>
                                <li><a href="#" title="">Tes Minat</a></li>
                                <li><a href="#" title="">Tes Gaya Komunikasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- Menus -->
            </div>
        </div>
    </header>

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>  

<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Masuk</h3>
        <form action="php/cek_login.php" method="post">
            <div class="cfield">
                <input type="text" placeholder="Username" name="username" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" name="password" />
                <i class="la la-key"></i>
            </div>
            <p class="remember-label">
                <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
            </p>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Login</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Sign Up</h3>
        <form method="post" action="">
            <div class="cfield">
                <input type="text" placeholder="Username" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="la la-envelope-o"></i>
            </div>
            <div class="dropdown-field">
                <select data-placeholder="Please Select Specialism" class="chosen">
                    <option>Web Development</option>
                    <option>Web Designing</option>
                    <option>Art & Culture</option>
                    <option>Reading & Writing</option>
                </select>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Phone Number" />
                <i class="la la-phone"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->
