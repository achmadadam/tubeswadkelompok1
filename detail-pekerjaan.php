<?php 
	session_start();

    if(isset($_SESSION['status'])){
		if($_SESSION['status']=="login"){
		 include 'php/head.php'; 
		 include 'php/header-user.php'; 
		} else{
			 include 'php/head.php'; 
			 include 'php/header.php';
		}
	} else{
			 include 'php/head.php'; 
			 include 'php/header.php';
		} ?>


<?php 
$getid = $_GET['id'];
include 'php/koneksi.php';
$username = $_SESSION['username']; 
$data = mysqli_query($koneksi,"SELECT * FROM tb_lowongan a, tb_perusahaan b where a.id_perusahaan = b.id_perusahaan and a.id_lowongan = $getid");

while ($a=mysqli_fetch_array($data)) {
?>

	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3><?=$a['judul']?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<section>
		<div class="block">
			<div class="container">
				<div class="row">
				 	<div class="col-lg-8 column">
				 		<div class="job-single-sec">
				 			<div class="job-single-head2">
				 				<div class="job-title2"><h3><?=$a['judul']?></h3><span class="job-is ft"><?=$a['jenis_pekerjaan']?></span><i class="la la-heart-o"></i></div>
				 				<ul class="tags-jobs">
				 					<li><i class="la la-map-marker"></i> <?=$a['kota']?></li>
				 					<li><i class="la la-money"></i> Gaji : <span><?=$a['gaji']?></span></li>
				 					<li><i class="la la-calendar-o"></i> Diposting: <?=$a['tanggal_buka']?></li>
				 				</ul>
				 				<span><strong>Roles</strong> : <?=$a['judul']?></span>
				 			</div><!-- Job Head -->
				 			<div class="job-details">
				 				<h3>Deskripsi Pekerjaan</h3>
				 				<p><?=$a['deskripsi']?></p>

				 				<h3>Kebutuhan Keahlian</h3>
				 				<?=$a['keahlian']?>

				 			</div>
				 			<div class="share-bar">
				 				<span>Share</span><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
				 			</div>
				 		</div>
				 	</div>
				 	<div class="col-lg-4 column">
				 		<div class="job-single-head style2">
			 				<div class="job-thumb"> <img src="gambar/<?=$a['foto']?>" alt="" /> </div>
			 				<div class="job-head-info">
			 					<h4><?=$a['nama']?></h4>
			 					<span><?=$a['kota']?></span>
			 					<p><i class="la la-unlink"></i><a href="<?=$a['website']?>" title=""><?=$a['website']?></a></p>
			 				</div>
			 				<a href="lamar.php?id=<?=$a['id_lowongan']?>" title="" class="apply-job-btn"><i class="la la-paper-plane"></i>Apply for job</a>
			 				<a href="https://www.linkedin.com/" title="" class="apply-job-linkedin"><i class="fa fa-linkedin"></i>Apply with Linkedin</a>
			 				<a href="list-pekerjaan.php" title="" class="viewall-jobs">View all Jobs</a>
			 			</div><!-- Job Head -->
				 	</div>
				</div>
			</div>
		</div>
	</section>

<?php } ?>
						

<?php include 'php/footer.php'; ?>