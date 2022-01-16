
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
		<title>Nyamancurhat - <?= @$title ?></title>
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
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed" style="background-image: url(<?= base_url('assets/img/background/pattern.svg') ?>); object-fit: cover; width: 100%">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" style="background-color: #13263C!important; height: 70px">
						<!--begin::Header top-->
						<div class="header-top d-flex align-items-stretch flex-grow-1">
							<!--begin::Container-->
							<div class="d-flex container-xxl w-100">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack align-items-stretch w-100">
									<!--begin::Brand-->
									<div class="d-flex align-items-center align-items-lg-stretch me-5">
										<!--begin::Heaeder navs toggle-->
										<button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2" id="kt_header_navs_toggle">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
													<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
										<!--end::Heaeder navs toggle-->
										<div class="align-self-end" id="kt_brand_tabs">
											<!--begin::Header tabs-->
											<div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
												<ul class="nav flex-nowrap">
													<li class="nav-item">
														<a class="nav-link h-100 <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : 'text-hover-inverse-white' ?>" href="<?= site_url('dashboard') ?>">
                                                            <?php if($this->uri->segment(1) == 'dashboard'): ?>
                                                                <img alt="Logo" src="<?= base_url('assets/img/logo.svg') ?>" class="h-25px h-lg-30px" />
                                                            <?php else: ?>
                                                                <img alt="Logo" src="<?= base_url('assets/img/logo_white.svg') ?>" class="h-25px h-lg-30px" />
                                                            <?php endif; ?>
                                                        </a>
													</li>
													<li class="nav-item">
														<a class="nav-link h-100 <?= ($this->uri->segment(1) == 'chat') ? 'active' : 'text-hover-inverse-white' ?>" href="<?= site_url('chat') ?>">Chat</a>
													</li>
													<li class="nav-item">
														<a class="nav-link h-100 <?= ($this->uri->segment(1) == 'account') ? 'active' : 'text-hover-inverse-white' ?>" href="#">Account</a>
													</li>
												</ul>
											</div>
											<!--end::Header tabs-->
										</div>
									</div>
									<!--end::Brand-->
									<!--begin::Topbar-->
									<div class="d-flex align-items-center flex-shrink-0">
										<!--begin::User-->
										<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
											<!--begin::User info-->
											<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
												<!--begin::Name-->
												<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
													<span class="text-white opacity-75 fs-8 fw-bold lh-1 mb-1"><?= $user->f_name." ".$user->l_name ?></span>
													<span class="text-white fs-8 fw-bolder lh-1"><?= $user->role_name ?></span>
												</div>
												<!--end::Name-->
												<!--begin::Symbol-->
												<div class="symbol symbol-30px symbol-md-40px">
													<img src="assets/media/avatars/300-1.jpg" alt="image" />
												</div>
												<!--end::Symbol-->
											</div>
											<!--end::User info-->
											<!--begin::User account menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px me-5">
															<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Username-->
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-start fs-5">
                                                                <?= $user->f_name." ".$user->l_name ?>
                                                                <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><?= $user->role_name ?></span>
															</div>
															<span class="fw-bold text-muted fs-7"><?= $user->email ?></span>
														</div>
														<!--end::Username-->
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link px-5">My Profile</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="<?= site_url('logout') ?>" class="menu-link px-5">Sign Out</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::User account menu-->
										</div>
										<!--end::User -->
									</div>
									<!--end::Topbar-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header top-->
						<!--begin::Header navs-->
						<div class="header-navs d-flex align-items-stretch flex-stack w-100 py-5 d-block d-lg-none" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
							<!--begin::Container-->
							<div class="d-lg-flex container-xxl w-100">
								<div class="tab-pane fade active show">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <img alt="Logo" src="<?= base_url('assets/img/logo.svg') ?>" class="h-25px mb-3 mt-3" />
                                        </div>
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn-light-primary fw-bolder" href="<?= site_url('chat') ?>">Chat</a>
                                            <a class="btn btn-sm btn-light-info fw-bolder" href="#">Account</a>
                                        </div>
                                        <div class="d-flex flex-column flex-lg-row gap-2 mt-10">
                                            <a class="btn btn-sm btn-light-danger fw-bolder" href="<?= site_url('logout') ?>">Sign Out</a>
                                        </div>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Header navs-->
					</div>
					<!--end::Header-->

					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                        <!--begin::Container-->
                        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2 mt-10 mt-lg-n10">
                            <!--begin::Contents-->
                            <?php 
                                if(@$contents)
                                    foreach($contents as $cts):
                                        $this->load->view('templates/' . $cts);
                                    endforeach;
                            ?>
                            <!--end::Contents Section-->
                        </div>
                        <!--end::Container-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--end::Main-->
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

		<!--begin::Javascript-->
		<script>var hostUrl = "<?= base_url('assets/') ?>";</script>
		<script>var baseUrl = "<?= site_url('') ?>";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?= base_url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/plugins/custom/datatables/datatables.bundle.js') ?>"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= base_url('assets/js/widgets.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/widgets.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/upgrade-plan.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/create-campaign.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/create-app.js') ?>"></script>
		<script src="<?= base_url('assets/js/custom/utilities/modals/users-search.js') ?>"></script>
		<?php if($this->session->userdata('role') == 2): ?>
			<script src="<?= base_url('assets/js/chat.js') ?>"></script>
		<?php elseif($this->session->userdata('role') == 3): ?>
			<script src="<?= base_url('assets/js/clients/chat.js') ?>"></script>
		<?php endif; ?>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>