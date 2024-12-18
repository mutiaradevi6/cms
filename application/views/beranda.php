<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?=$judul_halaman;?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link href="<?= base_url('assets/investa/'); ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/investa/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/investa/'); ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">


	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/investa/'); ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/investa/'); ?>css/style.css" rel="stylesheet">
</head>

<body>


	<!-- Topbar Start -->
	<div class="container-fluid topbar px-0 d-none d-lg-block">
		<div class="container px-0">
			<div class="row gx-0 align-items-center" style="height: 45px;">
				<div class="col-lg-8 text-center text-lg-start mb-lg-0">
					<div class="d-flex flex-wrap">

					</div>
				</div>
				<div class="col-lg-4 text-center text-lg-end">
					<div class="d-flex align-items-center justify-content-end">
						<!-- <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
								class="fab fa-facebook-f text-white"></i></a>
						<a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
								class="fab fa-twitter text-white"></i></a>
						<a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i
								class="fab fa-instagram text-white"></i></a>
						<a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i
								class="fab fa-linkedin-in text-white"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar End -->


	<!-- Navbar & Hero Start -->
	<div class="container-fluid sticky-top px-0">
		<div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
		</div>
		<div class="container px-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
				<a href="<?= base_url() ?>" class="navbar-brand p-0">
					<h1 class="text-primary m-0"><i class=""></i><?= $konfig->judul_website;?></h1>
					<!-- <img src="img/logo.png" alt="Logo"> -->
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav py-0">
						<a href="<?= base_url()?>" class="nav-item nav-link">Home</a>
						<?php foreach ($kategori as $kate){?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
							<?= $kate['nama_kategori']?>
						</a>
						<?php } ?>
					</div>

					<a href="<?= base_url('auth')?>"
						class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Login</a>
				</div>
		</div>
		</nav>
	</div>
	</div>
	<!-- Navbar & Hero End -->

	<!-- Carousel Start -->
	<div class="header-carousel owl-carousel">
		<?php foreach ($caraousel as $aa){ ?>
		<div class="header-carousel-item">
			<div class="header-carousel-item-img">
				<img src="<?php echo base_url('assets/upload/konten/caraousel/' . $aa['foto']) ?>"
					class="img-fluid w-100" alt="">
			</div>
			<div class="carousel-caption">
				<div class="carousel-caption-inner text-center p-3">
					<h1 class="display-1 text-capitalize text-white mb-4">Temukan Tempat Wisata Menarik di Yogyakarta
					</h1>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<!-- Carousel End -->

	<!-- Blog Start -->
	<div class="container-fluid blog pb-5">
		<div class="container pb-5">
			<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
				<h4 class="text-primary"></h4>
				<h1 class="display-4">A place to go Yogyakarta</h1>
			</div>
			<div class="room-item row g-4 justify-content-center">
				<?php 
						// Batasi hanya 3 konten yang ditampilkan
						$konten_terbatas = array_slice($konten, 0, 3);
						foreach ($konten_terbatas as $uu){?>
				<div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog-item bg-light rounded p-4" style="background-image: url(img/bg.png);">
					<div class="project-img" style="height: 250px; overflow: hidden;">
                    <img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" class="img-fluid w-100 rounded">
                </div>
                <div class="p-4 mt-2 flex-grow-1">
                    <h5 class="searchable mb-3"><?= $uu['judul'] ?></h5>
                    <div class="d-flex mb-3">
                        <small class="border-end me-3 pe-3"><i class="fa fa-user text-primary me-2"></i><?= $uu['nama'] ?></small>
                        <small class="border-end me-3 pe-3"><i class="fa fa-folder text-primary me-2"></i><?= $uu['nama_kategori'] ?></small>
                    </div>
                </div>

						<a class="btn btn-primary rounded-pill py-2 px-4"
							href="<?= base_url('home/artikel/'.$uu['id_konten'])?>">
							Baca Selengkapnya
						</a>
					</div>
				</div>
				<?php } ?>
				<style>
					.project-img {
						display: flex;
						justify-content: center;
						align-items: center;
						height: 250px;
						width: 100%;
						overflow: hidden;
					}

					.project-img img {
						width: auto;
						height: 100%;
						/* Atur agar gambar memenuhi tinggi div */
					}

				</style>
			</div>
			<div class="d-flex justify-content-center" style="margin-top:20px;">
				<p>
					<a href="<?= base_url('home/blog/')?>" class="btn btn-primary text-white py-3 px-4">Menu
						Selengkapnya</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Blog End -->

	<!-- Footer Start -->
	<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-4">
					<div class="footer-item d-flex flex-column">
						<div class="footer-item">
							<h4 class="text-white mb-4"><?= $konfig->judul_website;?></h4>
							<p class="mb-3"><?= $konfig->profil_website;?></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-4">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Explore</h4>
						<?php foreach ($kategori as $kate){ ?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"
							class="fas fa-angle-right me-2"><?= $kate['nama_kategori'] ?></a>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-4">
					<div class="footer-item d-flex flex-column">
						<h4 class="text-white mb-4">Contact Info</h4>
						<a href="<?= $konfig->alamat?>"><i class="fa fa-map-marker-alt me-2"></i>Daerah Istimewa Yogyakarta</a>
						<a ><i class="fas fa-envelope me-2"></i> visitingjogjadiy@gmail.com</a>
						<a href="https://wa.me/+6282329399940?text=Haloo,silahkan kirim pesan disini!!"><i
								class="fas fa-phone me-2"></i>Kirim Pesan Disini!</a>
						<div class="d-flex align-items-center">
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig->facebook?>"><i
									class="fab fa-facebook-f"></i></a>
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig->instagram?>"><i
									class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->


	<!-- Copyright Start -->
	<div class="container-fluid copyright py-4">
		<div class="container">
			<div class="row g-4 align-items-center">
				<div class="col-md-6 text-center text-md-start mb-md-0">
					<span class="text-body"><a href="#" class="border-bottom text-primary"><i
								class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
						reserved.</span>
				</div>
				<div class="col-md-6 text-center text-md-end text-body">
					<!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
					<!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
					<!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
					Designed By <a class="border-bottom text-primary" href="https://htmlcodex.com">HTML Codex</a>
					Distributed By <a class="border-bottom text-primary" href="https://themewagon.com">ThemeWagon</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright End -->


	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/investa/')?>lib/lightbox/js/lightbox.min.js"></script>


	<!-- Template Javascript -->
	<script src="<?= base_url('assets/investa/')?>js/main.js"></script>

	

</body>

</html>
