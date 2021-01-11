<body>
<div class="page-loading">
    <img src="images/loader.gif" alt="" />
    <span>Skip Loader</span>
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
                    <li class="signup-popup"><a title=""><i class="la la-key"></i> Daftar</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Masuk</a></li>
                </ul>
            </div>
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name" />
                <button type="submit"><i class="la la-search"></i></button>
            </form>
        </div>
    </div>
    
    <header class="stick-top">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="index.php" title=""><img src="images/resource/logo.png" alt="" /></a>
                </div><!-- Logo -->
                <div class="btns-profiles-sec">
                    <span><img style="max-height: 50px; max-width: 50px;" src="gambar/<?=$a['foto']?>" alt="" /> <?=$a['nama']?> <i class="la la-angle-down"></i></span>
                    <ul>
                        <li><a href="employer_profile.html" title=""><i class="la la-file-text"></i>Profil Perusahaan</a></li>
                        <li><a href="employer_manage_jobs.html" title=""><i class="la la-briefcase"></i>Kelola Pekerjaan</a></li>
                        <li><a href="employer_transactions.html" title=""><i class="la la-money"></i>Transaksi</a></li>
                        <li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resume</a></li>
                        <li><a href="employer_packages.html" title=""><i class="la la-user"></i>Paket</a></li>
                        <li><a href="employer_post_new.html" title=""><i class="la la-file-text"></i>Posting Pekerjaan Baru</a></li>
                        <li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Notifikasi Pekerjaan</a></li>
                        <li><a href="employer_change_password.html" title=""><i class="la la-lock"></i>Ubah Password</a></li>
                        <li><a href="php/logout.php" title=""><i class="la la-unlink"></i>Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>