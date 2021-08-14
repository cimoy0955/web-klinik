<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
	<link href="assets/images/favicon/favicon.png" rel="icon">
	<title>Medcity - Medical Healthcare HTML5 Template</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/libraries.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
	<div class="wrapper">
		<div class="preloader">
			<p> <img src="<?= base_url('assets/uploads/' . get_site_setting('site_icon')) ?>" class="logo-dark" alt="logo"></p>
			<div class="loading">




				<span></span><span></span><span></span><span></span>
			</div>

		</div><!-- /.preloader -->

		<!-- =========================
        Header
    =========================== -->
		<header class="header header-layout1">
			<div class="header-topbar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="d-flex align-items-center justify-content-between">
								<ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
									<li>
										<button class="miniPopup-emergency-trigger" type="button"><?= get_site_setting('site_open') ?> Emergency</button>
										<div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
											<div class="emergency__icon">
												<i class="icon-call3"></i>
											</div>
											<a href="tel:+201061245741" class="phone__number">
												<i class="icon-phone"></i> <span><?= get_site_setting('site_contact') ?></span>
											</a>
											<p>Please feel free to contact our friendly reception staff with any general or medical enquiry.
											</p>
											<a href="appointment.html" class="btn btn__secondary btn__link btn__block">
												<span>Make Appointment</span> <i class="icon-arrow-right"></i>
											</a>
										</div><!-- /.miniPopup-emergency -->
									</li>
									<li>
										<i class="icon-phone"></i><a href="tel:<?= get_site_setting('site_contact') ?>">Telfon: <?= get_site_setting('site_contact') ?></a>
									</li>
									<li>
										<i class="icon-location"></i><a href="#"> <?= substr(strip_tags(get_site_setting('site_address')), 0, 50) ?></a>
									</li>
									<li>
										<i class="icon-email"></i><a href="#"><?= get_site_setting('site_email') ?></a>
									</li>
								</ul><!-- /.contact__list -->
								<div class="d-flex">
									<ul class="social-icons list-unstyled mb-0 mr-30">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									</ul><!-- /.social-icons -->
									<form class="header-topbar__search">
										<input type="text" class="form-control" placeholder="Search...">
										<button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
						</div><!-- /.col-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header-top -->
			<nav class="navbar navbar-expand-lg sticky-navbar">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?= base_url() ?>">
						<img src="<?= base_url('assets/uploads/' . get_site_setting('site_icon')) ?>" class="logo-light" alt="logo">
						<img src="<?= base_url('assets/uploads/' . get_site_setting('site_icon')) ?>" class="logo-dark" alt="logo">
					</a>
					<button class="navbar-toggler" type="button">
						<span class="menu-lines"><span></span></span>
					</button>
					<div class="collapse navbar-collapse" id="mainNavigation">
						<ul class="navbar-nav ml-auto">
							<?= get_site_menus() ?>
						</ul><!-- /.navbar-nav -->





						<button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
					</div><!-- /.navbar-collapse -->
					<div class="d-none d-xl-flex align-items-center position-relative ml-30">

						<a href="appointment.html" class="btn btn__primary btn__rounded ml-30">
							<i class="icon-calendar"></i>
							<span>Pendaftaran Online</span>
						</a>
					</div>
				</div><!-- /.container -->
			</nav><!-- /.navabr -->
		</header><!-- /.Header -->