<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul_halaman ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <!-- Favicon -->
    <link href="<?= base_url('assets/aini/')?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/aini/')?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/aini/')?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/aini/')?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/aini/')?>css/style.css" rel="stylesheet">
</head>

<body>
<?= $judul_halaman ?>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?=base_url(); ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url('assets/aini/')?>img/REJA.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Reza</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?= site_url('home')?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?= site_url('caraousel')?>" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Caraousel</a>
                    <a href="<?= site_url('kategori')?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Kategori konten</a>
                    <a href="<?= site_url('konten')?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>konten</a>
                    
                    <?php if($this->session->userdata('level')=='Admin'){ ?>
					<a href="<?= site_url('user')?>" class="nav-item nav-link"><i class="fa fa-user-edit me-2"></i>User</a>
                    <a href="<?= site_url('konfigurasi')?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Konfigurasi</a>
                    <?php } ?>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    </div>
                    <?= $judul_halaman ?>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= base_url('assets/aini/')?>img/REJA.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= $this->session->userdata('nama')?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0"> 
                            <span class="dropdown-item"><?= $this->session->userdata('level')?></span>
                            <a class="dropdown-item" href=" <?= base_url('auth/logout') ?>">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Footer Start -->
			<div class="content-wrap">
		<div class="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 p-r-0 title-margin-right">
						<div class="page-header">
							<div class="page-title">
			 <?= $contents ?>
			 </div>
				</div>
					</div>

                    
            <div class=" pt-6 px-6 center">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site</a>, Reja
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">japut</a>
                             
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/chart/chart.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url('assets/aini/')?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
    <script>
        $('#jawir').delay('slow').slideDown('slow').delay(1000).slideUp(600);
    </script>
</body>

</html>