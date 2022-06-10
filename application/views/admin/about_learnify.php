<!--
@Project: Learnify
@Programmer: Syauqi Zaidan Khairan Khalaf
@Website: https://linktr.ee/syauqi
@Email : syaokay@gmail.com

@About-Learnify :
Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian
yang tersedia secara gratis. Learnify dibuat ditujukan agar para siswa dan
guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Tentang Developer - Learnify</title>
	<!-- General CSS Files -->
	<link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
	<script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
</head>

<body>

	<!-- Start Sidebar -->
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class=" navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
						</li>
					</ul>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" style="margin-bottom:4px !important;" src="../assets/stisla-assets/img/avatar/avatar-2.png" class="rounded-circle mr-1 my-auto border-white">
							<div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, <?php
																									$data['user'] = $this->db->get_where('admin', ['email' =>
																									$this->session->userdata('email')])->row_array();
																									echo $data['user']['username'];
																									?></div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="dropdown-title">Admin - Learnify</div>
							<a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand text-danger">
						<div>
							<a href="<?= base_url('admin') ?>" style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-success text-center"><i style="font-size: 30px;" class="fas fa-graduation-cap"></i> |
								Learnify <sup>3</sup> </a>
						</div>
					</div>
					<div class="sidebar-brand sidebar-brand-sm">
						<a href="<?= base_url('admin') ?>">LY</a>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header ">Dashboard</li>
						<li class="nav-item dropdown ">
							<a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
						</li>
						<li class="menu-header">Management Siswa</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
								<span>Siswa</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">Data Siswa</a></li>
							</ul>
						</li>
						<li class="menu-header">Management Guru</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
								<span>Guru</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Data Guru</a>
								</li>
								<li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Tambah Data Guru</a>
								</li>
							</ul>
						</li>
						<li class="menu-header">Management Materi</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
								<span>Materi</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Data Materi</a>
								</li>
								<li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Tambah Materi</a>
								</li>

							</ul>
						</li>
						<li class="menu-header">About Developer</li>
						<li class="nav-item dropdown active">
							<a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
								<span>Developer</span></a>
							<ul class="dropdown-menu">
								<li><a class="nav-link" href="<?= base_url('admin/about_developer') ?>">Tentang
										Pembuat</a>
								</li>
								<li><a class="nav-link" href="<?= base_url('admin/about_learnify') ?>">Tentang
										Learnify</a>
								</li>
							</ul>
						</li>
				</aside>
			</div>
			<!-- End Sidebar -->

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1 style="font-size: 27px; letter-spacing:-0.5px; color:black;">Tentang Project Learnify </h1>
					</div>
					<div class="">
						<video class="afterglow" autoplay id="myvideo" width="1280" height="720">
							<source type="video/mp4" src="<?= base_url('assets/videos/') ?>trailer.mp4" />
						</video>
					</div>
					<br>
					<div class="">
						<div class="card" style="width:100%;">
							<div class="card-body">
								<h2 class="card-title" style="color: black;">Tentang Learnify</h2>
								<hr>
								<p class="card-text">Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf. <br> Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian yang tersedia secara gratis. <br> Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja. </p>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- End Main Content -->

			<!-- Start Footer -->
			<footer class="main-footer">
				<div class="text-center">
					Copyright &copy; 2020 <div class="bullet"></div><a href="https://github.com/syauqi">Syauqi Zaidan Khairan Khalaf</a>
				</div>
			</footer>
			<!-- End Footer -->

		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
	<!-- Template JS File -->
	<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
	<script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
	<!-- Page Specific JS File -->
</body>

</html>
