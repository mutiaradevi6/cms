<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?=base_url('assets/tiny')?>favicon.ico">
	<title>Registrasi</title>
	<!-- Simple bar CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/tiny')?>css/simplebar.css">
	<!-- Fonts CSS -->
	<link
		href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/tiny')?>/css/feather.css">
	<!-- Date Range Picker CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/tiny')?>/css/daterangepicker.css">
	<!-- App CSS -->
	<link rel="stylesheet" href="<?=base_url('assets/tiny')?>/css/app-light.css" id="lightTheme" disabled>
	<link rel="stylesheet" href="<?=base_url('assets/tiny')?>/css/app-dark.css" id="darkTheme">
</head>

<body class="dark ">
	<div class="wrapper vh-100">
		<div class="row align-items-center h-100">
			<form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="<?=base_url('regis/registrasi')?>"
				method="post">
				<a class="navbar-brand mx-auto mt-2 flex-fill text-center"
					href="<?=base_url('assets/tiny')?>/index.html">
				</a>
				<h1 class="h3 mb-4">Registrasi </h1>
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Nama</label>
					<input type="text" class="form-control " placeholder="Enter your Name" name="nama">
				</div>
				<div class="form-group">
					<label for="inputEmail" class="sr-only">Username</label>
					<input type="text" class="form-control " placeholder="Enter your username" name="username">
				</div>
				<div class="form-group">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" class="form-control " name="password" placeholder="Password" required="">
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Registrasi</button>
				<span>Sudah punya akun?</span>
				<a href="<?=base_url('auth/login')?>"><br>
					<span>Login disini !</span>
				</a>
				<?=$this->session->flashdata('alert') ?>
				<!-- <p class="mt-5 mb-3 text-muted">© 2020</p> -->
			</form>
		</div>
	</div>
	<script src="<?=base_url('assets/tiny')?>/js/jquery.min.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/popper.min.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/moment.min.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/bootstrap.min.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/simplebar.min.js"></script>
	<script src='<?=base_url('assets/tiny')?>/js/daterangepicker.js'></script>
	<script src='<?=base_url('assets/tiny')?>/js/jquery.stickOnScroll.js'></script>
	<script src="<?=base_url('assets/tiny')?>/js/tinycolor-min.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/config.js"></script>
	<script src="<?=base_url('assets/tiny')?>/js/apps.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-56159088-1');

	</script>
</body>

</html>
</body>

</html>
