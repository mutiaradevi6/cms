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
					<div class="navbar-nav ms-auto py-0">
						<a href="<?= base_url()?>" class="nav-item nav-link active">Home</a>
						<?php foreach ($kategori as $kate){?>
						<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
							<?= $kate['nama_kategori']?>
						</a>
						<?php } ?>
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
					<h1 class="display-1 text-capitalize text-white mb-4">Temukan Tempat Wisata Menarik di Karanganyar
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
				<h1 class="display-4">A place to go Karanganyar</h1>
			</div>
			<br>
			<form action="<?= base_url('home/cari') ?>" method="post" autocomplete="on" class="d-flex">
				<input id="searchInput" name="judul" type="text" aria-label="Search">
				<button type="submit" class="btn btn-primary">Search</button>
			</form>
		</br>
			<style>
				form {
					display: flex;
					justify-content: center;
					align-items: center;
					width: 100	%;
					margin: 0 auto;
				}

			</style>
			<div class="row g-4 justify-content-center">
				<?php foreach ($konten as $uu): ?>
				<div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
					<div class="blog-item bg-light rounded p-4 d-flex flex-column"
						style="background-image: url(img/bg.png);">
						<div class="project-img" style="height: 250px; overflow: hidden;">
							<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
								class="img-fluid w-100 rounded">
						</div>
						<div class="p-4 mt-2 flex-grow-1">
							<h5 class="searchable mb-3"><?= $uu['judul'] ?></h5>
							<div class="d-flex mb-3">
								<small class="border-end me-3 pe-3"><i
										class="fa fa-user text-primary me-2"></i><?= $uu['nama'] ?></small>
								<small class="border-end me-3 pe-3"><i
										class="fa fa-folder text-primary me-2"></i><?= $uu['nama_kategori'] ?></small>
							</div>
							<div class="d-flex justify-content-between">
								<a class="btn btn-sm btn-primary rounded py-2 px-4"
									href="<?= base_url('home/artikel/'.$uu['id_konten'].'/'.$uu['slug']) ?>">Baca
									Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			<style>
				.blog-item {
					display: flex;
					flex-direction: column;
					height: 100%;
				}

				.project-img {
					height: 250px;
					overflow: hidden;
				}

				.project-img img {
					object-fit: cover;
					width: 100%;
					height: 100%;
				}

				.p-4 {
					flex-grow: 1;
				}

				.blog-item .searchable {
					font-size: 1.25rem;
					font-weight: bold;
				}

				.btn-primary {
					background-color: #007bff;
					border-color: #007bff;
				}

				.btn-primary:hover {
					background-color: #0056b3;
					border-color: #0056b3;
				}

			</style>

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
						<a href="<?= $konfig->alamat?>"><i class="fa fa-map-marker-alt me-2"></i>Daerah Istimewa
							Yogyakarta</a>
						<a><i class="fas fa-envelope me-2"></i> visitingjogjadiy@gmail.com</a>
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
	<script>
		const searchInput = document.getElementById('searchInput');
		const searchableItems = document.querySelectorAll('.searchable');
		const noResultsMessage = document.createElement('div');
		noResultsMessage.textContent = 'Wisata tidak ditemukan.';
		noResultsMessage.style.display = 'none';
		noResultsMessage.style.color = 'red';
		noResultsMessage.style.textAlign = 'center';
		noResultsMessage.style.marginTop = '20px';
		searchInput.parentNode.appendChild(noResultsMessage);

		searchInput.addEventListener('input', function () {
			const filter = searchInput.value.toLowerCase();
			let hasResults = false;

			searchableItems.forEach(item => {
				const text = item.textContent.toLowerCase();
				const parentBox = item.closest('.room-item');
				if (text.includes(filter)) {
					parentBox.style.display = '';
					hasResults = true;
				} else {
					parentBox.style.display = 'none';
				}
			});

			noResultsMessage.style.display = hasResults ? 'none' : 'block';
		});

		// Check if searchable items are being selected properly
		console.log(searchableItems);

	</script>
</body>

</html>
