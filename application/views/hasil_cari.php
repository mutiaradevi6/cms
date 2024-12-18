<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul_halaman;?></title>
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
				<a href="index.html" class="navbar-brand p-0">
					<h1 class="text-primary m-0"><i class=""></i><?= $konfig1->judul_website;?></h1>
					<!-- <img src="img/logo.png" alt="Logo"> -->
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0">
						<a href="<?= base_url()?>" class="nav-item nav-link active">Home</a>

					</div>
					<div class="d-flex align-items-center flex-nowrap pt-xl-0">
						<a href="<?= base_url('auth')?>"
							class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Login</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Navbar & Hero End -->

	<!-- Header Start -->
	<div class="container-fluid bg-breadcrumb">
		<div class="bg-breadcrumb-single"></div>
		<div class="container text-center py-5" style="max-width: 900px;">
			<h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Single Blog</h4>
		</div>
	</div>
	<!-- Header End -->

	<!-- About Start -->
	<div class="container-fluid about bg-light py-5">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
					<div class="about-img">
						<img src="<?= base_url('assets/upload/konten/' . $konfig->foto) ?>"
							class="img-fluid w-100 rounded-bottom" alt="Image">
						<style>
							.about-img img {
								transform: scale(1.0);
								border-radius: 15px;
								/* Apply rounded corners */
								margin-top: -40px;
								/* Move the image slightly upwards */
								transition: transform 0.3s ease;
								/* Optional: smooth transition for hovering */
							}

							.about-img img:hover {
								transform: scale(1.04);
								/* Optional: adds a zoom effect on hover */
							}

						</style>
					</div>
				</div>

				<div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">

					<h1 class="display-5 mb-4"><?= $konfig->judul; 	?></h1>

					<p class="text ps-4 mb-4"><?= $konfig->keterangan;?></p>
					<style>
						.text {
							text-align: justify;
							/* Meratakan teks agar mengisi seluruh lebar */
							text-justify: inter-word;
							/* Menambahkan jarak antar kata untuk memperbaiki perataan */
						}

					</style>
					<style>
						.d-flex p {
							margin-right: 20px;
							/* Menambahkan jarak antar elemen p */
						}

					</style>
					<!-- <div class="row g-4 justify-content-between mb-5">
                            <div class="col-lg-6 col-xl-5">
                                <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Strategy & Consulting</p>
                                <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Business Process</p>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Marketing Rules</p>
                                <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Partnerships</p>
                            </div>
                        </div> -->
					<div class="row g-4 justify-content-between mb-5">
						<div class="col-xl-5"><a href="<?= base_url('home')?>"
								class="btn btn-primary rounded-pill py-3 px-5">Back to home</a></div>
						<div class="col-xl-7 mb-5">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->

	<!-- Footer Start -->
	<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-md-6 col-lg-6 col-xl-4">
					<div class="footer-item d-flex flex-column">
						<div class="footer-item">
							<h4 class="text-white mb-4"><?= $konfig1 ->judul_website;?></h4>
							<p class="mb-3"><?= $konfig1 ->profil_website;?></p>
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
						<a href="<?= $konfig1->alamat?>"><i class="fa fa-map-marker-alt me-2"></i>Daerah Istimewa Yogyakarta</a>
						<a ><i class="fas fa-envelope me-2"></i> visitingjogjadiy@gmail.com</a>
						<a href="https://wa.me/+6282329399940?text=Haloo,silahkan kirim pesan disini!!"><i
								class="fas fa-phone me-2"></i>Kirim Pesan Disini!</a>
						<div class="d-flex align-items-center">
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig1->facebook?>"><i
									class="fab fa-facebook-f"></i></a>
							<a class="btn btn-light btn-md-square me-2" href="<?= $konfig1->instagram?>"><i
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
