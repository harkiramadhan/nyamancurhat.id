<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.svg') ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" style="background-image: url(<?= base_url('assets/img/background/pattern.svg') ?>); object-fit: cover; width: 100%">
			<!--begin::Hero Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="<?= site_url('') ?>">
										<img alt="Logo" src="<?= base_url('assets/img/logo_texted_02.svg') ?>" class="logo-default h-25px h-lg-30px" />
										<img alt="Logo" src="<?= base_url('assets/img/logo_texted_02.svg') ?>" class="logo-sticky h-20px h-lg-25px" />
									</a>
									<!--end::Logo image-->

									<!-- begin::Menu wrapper -->
									<div class="d-inline d-lg-none" id="kt_header_nav_wrapper"><div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}" style="">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a href="<?= site_url('') ?>" class="btn btn-outline btn-outline-primary btn-active-light-primary mt-3">Cara Curhat</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a href="<?= site_url('') ?>" class="btn btn-primary mt-3">Coach Profile</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
									
								</div>
									<!-- end::Menu wrapper -->
								</div>
								<!--end::Logo-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="<?= site_url('') ?>" class="btn btn-outline btn-outline-primary btn-active-light-primary d-none d-lg-inline">Cara Curhat</a>
									<a href="<?= site_url('') ?>" class="btn btn-primary d-none d-lg-inline">Coach Profile</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<div class="container mb-5 mb-lg-10 py-10 py-lg-20">
							<div class="row">
								<div class="col-lg-6 order-2 order-sm-1">
									<img src="<?= base_url('assets/img/background/mendengar.svg') ?>" class="img-fluid mb-5 pt-15">
									<div class="text-gray-600 fw-bold fs-2 mt-5 mb-5"><strong><u>nyamancurhat.id</u></strong> adalah layanan curhat yang diasuh oleh coach profesional, dimana kamu bisa merasa nyaman cerita apapun tanpa perlu berbagi identitas apapun.</div>
									<div class="button-group mt-8">
										<a href="../../demo20/dist/index.html" class="btn btn-primary me-4">Book Session Now</a>
										<a href="../../demo20/dist/index.html" class="btn btn-outline btn-outline-primary btn-active-light-primary mt-5 mt-lg-0">Try Free Session!</a>
									</div>
								</div>
								<div class="col-lg-6 order-1 order-sm-2">
									<img src="<?= base_url('assets/img/hero.png') ?>" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Hero Section-->

			<!--begin::Keunggulan Section-->
			<div class="pb-10 z-index-2 mt-20 bg-white">
				<!--begin::Container-->
				<div class="container mt-20">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Keunggulan Curhat Di nyamancurhat.id</h3>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-md-20">
						<!--begin::Col-->
						<div class="col-md-3 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="<?= base_url('assets/img/keunggulan01.png') ?>" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-primary fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Lebih Privacy</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Kamu bisa curhat secara professional di kami tanpa harus memasukkan nomor handphone mu</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-3 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="<?= base_url('assets/img/keunggulan02.png') ?>" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-primary fw-bolder p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Waktu dan Tempat Fleksibel</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Curhat tanpa harus ribet catch up dengan konselor? 
									<br> Yuk curhat di nyamancurhat.id!</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-3 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="<?= base_url('assets/img/keunggulan03.png') ?>" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-primary fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Lebih Nyaman dan Spontan</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Bingung nyari tempat curhat online yang nyaman? kamu boleh enggak nunjukin wajah jika dirasa kurang nyaman.</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-3 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="<?= base_url('assets/img/keunggulan04.png') ?>" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-primary fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Bisa Berlanjut ke Tahap Coaching</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Selesai curhat, kamu bisa memperoleh solusi professional dari pakar dengan melanjutkan curhatmu ke tahap coaching loh!</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Keunggulan Section-->

			<!--begin::Cara Curhat Section-->
			<div class="pt-20 mb-n20 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container mt-20 mb-5 bg-white rounded text-center">
					<div class="row">
						<div class="col-lg-6 p-3 p-lg-10">
							<div class="card shadow" style="height: 100%">
								<div class="card-body">
									<img class="img-fluid mt-n75" src="<?= base_url('assets/img/caracurhat.png') ?>"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6 p-3 p-lg-10">
							<div class="card shadow" style="height: 100%">
								<div class="card-body">
									<img class="img-fluid" src="<?= base_url('assets/img/caracurhat_belll.png') ?>"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6 p-3 p-lg-10">
							<div class="card shadow" style="height: 100%">
								<div class="card-body">
									<img class="img-fluid" src="<?= base_url('assets/img/caracurhat_lock.png') ?>"/>
								</div>
							</div>
						</div>
						<div class="col-lg-6 p-3 p-lg-10">
							<div class="card shadow" style="height: 100%">
								<div class="card-body">
									<img class="img-fluid" src="<?= base_url('assets/img/caracurhat_web.png') ?>"/>
								</div>
							</div>
						</div>

						<div class="col-lg-12 mt-10 text-center mb-20">
							<div class="text-gray-520 fw-bold fs-4">Seluruh hasil curhatan di nyamancurhat.id akan selalu dijaga kerahasiaannya. </div>
						</div>
					</div>

					<button class="btn btn-primary btn-hover-rise mb-n7">Pelajari Lebih Lanjut</button>
				</div>
				<!--end::Container-->
			</div>
			<!--end::Cara Curhat Section-->

			<!--begin::Testimonials Section-->
			<div class="mt-20 mb-n20 position-relative z-index-1">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5 mt-15" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Testimoni</h3>
						<!--end::Title-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row g-lg-10 mb-10 mb-lg-20">
						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-bold fs-4">Saya pernah merasa stress di dalam pekerjaan karena sering mendapatkan tuntutan pekerjaan yang tidak masuk akal. Saat itulah saya curhat dengan Coach Akhlis. Dari curhat itu saya mendapat banyak inspirasi bagaimana bersikap di dalam pekerjaan. Alhamdulillah sekarang saya bisa menikmati pekerjaan. </div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Mukhlis</a>
										<span class="text-muted d-block fw-bold">Pegawai Swasta</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->

						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-bold fs-4">Saya senang berkegiatan sosial. Tapi entah kenapa karena hal ini, saya merasa ada orang-orang yang iri.  Perasaan ini sering muncul hingga menimbulkan rasa sakit fisik dan mental selama bertahun-tahun. Lalu saya minta di terapi oleh Coach Akhlis. Saat terapi saya merasa plong karena bisa curhat seluruh isi hati saya. Dari sini juga saya terinpirasi untuk Tahajud tiap malam. Alhamdulillah sekarang sakit yang dahulu muncul tidak pernah datang lagi.`</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Cantik</a>
										<span class="text-muted d-block fw-bold">Ibu Rumah Tangga</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->

						<!--begin::Col-->
						<div class="col-lg-4">
							<!--begin::Testimonial-->
							<div class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
								<!--begin::Wrapper-->
								<div class="mb-7">
									<!--begin::Feedback-->
									<div class="text-gray-500 fw-bold fs-4">Saya merasa nyaman curhat dengan Coach Akhlis. Dia bisa menggali lebih dalam apa yang benar-benar ingin saya sampaikan. Anehnya selama curhat bisa muncul ide-ide dari pikiran saya untuk menjawab permasalahan saya sendiri.</div>
									<!--end::Feedback-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Author-->
								<div class="d-flex align-items-center">
									<!--begin::Name-->
									<div class="flex-grow-1">
										<a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Elva</a>
										<span class="text-muted d-block fw-bold">Pengusaha</span>
									</div>
									<!--end::Name-->
								</div>
								<!--end::Author-->
							</div>
							<!--end::Testimonial-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Highlight-->
					<div class="card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #00A3FF 0%, #1976D2 100%);">
						<div class="row row justify-content-around">
							<div class="col-lg-7">
								<img src="<?= base_url('assets/img/logo_full_white.svg') ?>" alt="" class="img-fluid logo-fly">
							</div>
							<div class="col-lg-3 mt-4 mt-lg-0">
								<a href="#" class="btn btn-lg btn-outline border-2 btn-outline-white d-block">Book a session now</a>
							</div>
						</div>
					</div>
					<!--end::Highlight-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->

			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">Ingin hubungi kami lebih lanjut?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Email us to
									<a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">akhlis2000@gmail.com</a></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column me-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">More for nyamancurhat.id</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Coach Profile</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">How To Book</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Testimony</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Address</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
									<!--begin::Links-->
									<div class="d-flex fw-bold flex-column ms-lg-20">
										<!--begin::Subtitle-->
										<h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
										<!--end::Subtitle-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
										</a>
										<!--end::Link-->
										<!--begin::Link-->
										<a href="#" class="mb-6">
											<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
											<span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
										</a>
										<!--end::Link-->
									</div>
									<!--end::Links-->
								</div>
								<!--end::Navs-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="../../demo20/dist/landing.html">
									<img alt="Logo" src="<?= base_url('assets/img/logo_texted_01.svg') ?>" class="h-15px h-md-20px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">Copyright © nyamancurhat.id <?= date('Y') ?></span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->

			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "<?= base_url('assets/') ?>";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?= base_url('assets/plugins/custom/fslightbox/fslightbox.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/custom/typedjs/typedjs.bundle.js') ?>"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= base_url('assets/js/custom/landing.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/pages/pricing/general.js') ?>"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>