<?php include 'php/head.php'; ?>
<?php include 'php/admin-header.php'; ?>

    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Selamat Datang Admin, Silahkan Login</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 m-5 p-4 bg-light">
                            <h3>Masuk</h3>
                            <form action="php/login-admin.php" method="post">
                                <div class="cfield">
                                    <input type="text" placeholder="Username" name="username" />
                                </div>
                                <div class="cfield">
                                    <input type="password" placeholder="********" name="password" />
                                </div>
                                <button type="submit">Login</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'php/footer.php'; ?>