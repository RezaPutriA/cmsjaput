<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/frond/')?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/frond/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/frond/')?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/frond/')?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/frond/')?>css/style.css" rel="stylesheet">
</head>

<body>


	<!-- Navbar Start -->

	
	<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
		<a href="index.html" class="navbar-brand d-flex align-items-center">
			<h2 class="m-0 text-primary"><?= $konfig->judul_website; ?></h2>
		</a>
		<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-4 py-lg-0">
				<a href="<?= base_url()?>" class="nav-item nav-link ">Home</a>
				<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Artikel</a>
					<div class="dropdown-menu rounded-0 rounded-bottom m-0">
					<?php foreach($kategori as $kate) {?>
						<a href="<?= base_url('bernda/kategori/'.$kate['id_kategori']) ?>" class="dropdown-item"><?= $kate['nama_kategori'] ?></a>
						<?php }?>
						
					</div>
				</div>
				<a href="contact.html" class="nav-item nav-link">Contact</a>
				<a href="<?= base_url('auth')?>" class="nav-item nav-link">Login</a>
			</div>
			<div class="h-100 d-lg-inline-flex align-items-center d-none">
				<a class="btn btn-square rounded-circle bg-light text-primary me-2" href="<?= $konfig->facebook;?>"><i
						class="fab fa-facebook-f"></i></a>
				<a class="btn btn-square rounded-circle bg-light text-primary me-2" href="<?= $konfig->no_wa;?>"><i
						class="fab fa-whatsapp"></i></a>
				<a class="btn btn-square rounded-circle bg-light text-primary me-0" href="<?= $konfig->instagram;?>"><i
						class="fab fa-instagram"></i></a>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->


	<!-- Service Start -->
	<div class="container-xxl py-3">
		<div class="container">
			<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
				<div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
				<h1 class="display-5 mb-5"><?= $nama_kategori;?></h1>
			</div>
			<div class="row pb-3">
				<?php foreach ($konten as $uu) {?>
				<div class="col-lg-4 mb-4">
					<div class="card border-0 shadow-sm mb-2">
						<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>" />
						<div class="card-body bg-light text-center p-4">
							<h4 class=""><?= $uu['judul']?></h4>
							<div class="d-flex justify-content-center mb-3">
								<small class="mr-3"><i class="fa fa-user text-primary"></i><?= $uu['nama']?></small>
								<small class="mr-3"><i class="fa fa-comments text-primary"></i>
									<?= $uu['nama_kategori']?></small>
							</div>
							<a href="<?= base_url('bernda/artikel/'.$uu['slug'])?>"
								class="btn btn-primary px-4 mx-auto my-2">Baca Selengkapnya </a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<!-- Service End -->


		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="row g-5">
					<div class="col-lg-5 col-md-6">
						<h5 class="text-light mb-4">Contac Us</h5>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1<?= $konfig->alamat;?></p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 81226639348</p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email;?></p>
						<div class="d-flex pt-2">
							<a class="btn btn-square btn-outline-secondary rounded-circle me-2"
								href="<?= $konfig->facebook; ?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square btn-outline-secondary rounded-circle me-2"
								href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h5 class="text-light mb-4">Artikel</h5>
						<a class="btn btn-link" href="<?= base_url()?>">home</a>
						<?php foreach($kategori as $kate) {?>
						<a class="btn btn-link"
							href="<?= base_url('bernda/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
						<?php }?>
					</div>	
						<div class="col-lg-3 col-md-6">
							<h5 class="text-light mb-4"><?= $konfig->judul_website; ?></h5>
							<p><?= $konfig->profil_website; ?></p>
							
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->


			<!-- Copyright Start -->
			<div class="container-fluid py-4" style="background: #000000;">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
							&copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
						</div>
						<div class="col-md-6 text-center text-md-end">
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML
								Codex</a><br>Distributed By
							<a class="border-bottom" href="https://themewagon.com/">Themewagon</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright End -->


			<!-- Back to Top -->
			<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
					class="bi bi-arrow-up"></i></a>


			<!-- JavaScript Libraries -->
			<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/wow/wow.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/easing/easing.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/waypoints/waypoints.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/counterup/counterup.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/owlcarousel/owl.carousel.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/isotope/isotope.pkgd.min.js"></script>
			<script src="<?= base_url('assets/frond/')?>lib/lightbox/js/lightbox.min.js"></script>

			<!-- Template Javascript -->
			<script src="js/main.js"></script>
</body>

</html>
