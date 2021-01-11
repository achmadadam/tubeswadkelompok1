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


	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header wform">
							<div class="job-search-sec">
								<div class="job-search">
									<h4>Jelajahi Ribuan Pekerjaan Hanya Dengan Pencarian Sederhana ...</h4>
									<form>
										<div class="row">
											<div class="col-lg-7">
												<div class="job-field">
													<input type="text" placeholder="Job title, keywords or company name" />
													<i class="la la-keyboard-o"></i>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="job-field">
													<select data-placeholder="City, province or region" class="chosen-city">
														<option>Jakarta</option>
														<option>Bandung</option>
														<option>Semarang</option>
														<option>Bali</option>
													</select>
													<i class="la la-map-marker"></i>
												</div>
											</div>
											<div class="col-lg-1">
												<button type="submit"><i class="la la-search"></i></button>
											</div>
										</div>
									</form>
								</div>
							</div>
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
				 	<div class="col-lg-12">
				 		<span class="emlthis"><a href="https://grandetest.com/cdn-cgi/l/email-protection#d9bca1b8b4a9b5bcf7bab6b4" title=""><i class="la la-envelope-o"></i> Email saya Pekerjaan Seperti Inie</a></span>
				 		<div class="filterbar">
				 			<h5>98 Pekerjaan & Vacancies</h5>
				 			<div class="sortby-sec">
				 				<span>Sort by</span>
				 				<select data-placeholder="Most Recent" class="chosen">
									<option>Most Recent</option>
									<option>Most Recent</option>
									<option>Most Recent</option>
									<option>Most Recent</option>
								</select>
								<select data-placeholder="20 Per Page" class="chosen">
									<option>30 Per Page</option>
									<option>40 Per Page</option>
									<option>50 Per Page</option>
									<option>60 Per Page</option>
								</select>
				 			</div>
				 		</div>
				 		<div class="job-grid-sec">
							<div class="row">

<?php 
include 'php/koneksi.php';
$username = $_SESSION['username']; 
$data = mysqli_query($koneksi,"SELECT * FROM tb_lowongan a, tb_perusahaan b where a.id_perusahaan = b.id_perusahaan");

while ($a=mysqli_fetch_array($data)) {
?>
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid border">
										<div class="job-title-sec">
											<div class="c-logo"> <img src="gambar/<?=$a['foto']?>" alt="" /> </div>
											<h3><a href="detail-pekerjaan.php?id=<?=$a['id_lowongan']?>" title=""><?=$a['judul']?></a></h3>
											<span><?=$a['nama']?></span>
											<span class="fav-job"><i class="la la-heart-o"></i></span>
										</div>
										<span class="job-lctn"><i class="la la-map-marker"></i><?=$a['kota']?></span>
										<a  href="detail-pekerjaan.php?id=<?=$a['id_lowongan']?>" title="">LAMAR</a>
									</div>
								</div>
<?php } ?>
							</div>
						</div>
						<div class="pagination">
							<ul>
								<li class="prev"><a href="#"><i class="la la-long-arrow-left"></i> Prev</a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><span class="delimeter">...</span></li>
								<li><a href="#">14</a></li>
								<li class="next"><a href="#">Next <i class="la la-long-arrow-right"></i></a></li>
							</ul>
						</div><!-- Pagination -->
				 	</div>
				 </div>
			</div>
		</div>
	</section>

<?php include 'php/footer.php'; ?>