<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar'? 'rtl' : 'ltr' }}">
	<!--begin::Head-->
	<head>
        <base href="">
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Mange | @yield('mtitle') </title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!--begin::Fonts-->
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->

		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

		<!--begin::Global Theme Styles(used by all pages)-->
				<link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/my.css')}}" rel="stylesheet" type="text/css" />
        <style>
            html[dir="rtl"] .aside {
                float: right;
                display: inline;
                margin-left: 150px;
                margin-right: 0px;
            }
            html[dir="ltr"] .aside {
                float: right;
                display: inline;
                left: 0px;
                margin-right: 150px;
            }
            html[dir="rtl"] .mycontent {
                float: right;
                display: inline;
                margin-left: 0px;
                margin-right: 150px;
                margin-top: -15%;
            }
            html[dir="ltr"] .mycontent{
                float: left;
                display: inline;
                margin-left: 150px;
                margin-right: 0px;
                margin-top: -5%;

            }


            </style>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
	   <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


	   <link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-fixed page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" class="w-45px" src="{{asset('assets/media/logos/logo-letter-13.png')}}" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside   d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="{{url(' ')}}" class="brand-logo">
							<img alt="Logo" class="w-65px" src="{{asset('assets/media/logos/logo-letter-13.png')}}" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item menu-item-active" aria-haspopup="true">
									<a href="{{asset('users')}}" class="menu-link">
										<i class="menu-icon flaticon2-architecture-and-city"></i>
										<span class="menu-text">{{ __('lang.users') }}</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{asset('roles')}}" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-telegram-logo"></i>
										<span class="menu-text">{{ __('lang.roles') }}</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{url('Endpage')}}" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-laptop"></i>
										<span class="menu-text">{{ __('lang.pages') }}</span>
									</a>
								</li>
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
										<i class="menu-icon flaticon2-telegram-logo"></i>
										<span class="menu-text">{{ __('lang.category') }}</span>
										<i class="menu-arrow"></i>
									</a>
									<div class="menu-submenu" kt-hidden-height="160" style="">
										<i class="menu-arrow"></i>
										<ul class="menu-subnav">
											<li class="menu-item menu-item-parent" aria-haspopup="true">
												<span class="menu-link">
													<span class="menu-text">Categories</span>
												</span>
											</li>
											<li class="menu-item" aria-haspopup="true">
                                                @can('category-create')
												<a href="{{url('categories/create')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">{{ __('lang.create') }}</span>
                                                </a>
                                                @endcan
											</li>
											<li class="menu-item" aria-haspopup="true">
											<a href="{{route('categories.index')}}" class="menu-link">
													<i class="menu-bullet menu-bullet-line">
														<span></span>
													</i>
													<span class="menu-text">{{ __('lang.show') }}</span>
												</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="{{url('articles')}}" class="menu-link">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">{{ __('lang.articles') }}</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="{{url('slider')}}" class="menu-link">
										<i class="menu-icon flaticon2-console"></i>
										<span class="menu-text">{{ __('lang.slider') }}</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="{{url('ads')}}" class="menu-link">
										<i class="menu-icon flaticon2-graph-1"></i>
										<span class="menu-text">{{ __('lang.ads') }}</span>
									</a>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
			</div>
		</div>
				<!--end::Aside-->

    </body>
