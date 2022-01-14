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
		<title>Nyamancurhat.id - <?= @$title ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Nyamancurhat - <?= @$title ?>" />
		<meta property="og:url" content="https://nyamancurhat.id" />
		<meta property="og:site_name" content="Nyamancurhat.id" />
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
					<?php $this->load->view('layout/header') ?>
					<!--end::Header-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Hero Section-->

			<!--begin::Contents-->
            <?php 
                if(@$contents)
                    foreach($contents as $cts):
                        $this->load->view('landing/' . $cts);
                    endforeach;
            ?>
			<!--end::Contents Section-->

			<!--begin::Footer Section-->
			<?php $this->load->view('layout/footer') ?>
			<!--end::Footer Section-->

			<!--begin::Scrolltop-->
			<?php $this->load->view('layout/scrolltop') ?>
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