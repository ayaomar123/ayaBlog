
<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar'? 'rtl' : 'ltr' }}">
	<!--begin::Head-->
	<head><base href="">
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title')</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
		alpha/css/bootstrap.css" rel="stylesheet">
	   
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
	   <link rel="stylesheet" type="text/css" 
		href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	   
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        @yield('style')
        <style>
            html[dir="rtl"] .aside {
                float: right;
                display: inline;
                margin-left: 90%;
                margin-right: 0px;
            }
            html[dir="ltr"] .aside {
                float: right;
                display: inline;
                left: 0px;
                margin-right: 150px;
            }
			html[dir="ltr"] body{
				float: left;
				width: 100%;
				text-align: left;
			}
			html[dir="rtl"] body{
				float: right;
				width: 100%;
				text-align: right;
			}
            html[dir="rtl"] .footer {
                margin-left:0px;
                padding-right: 10%;
            }
            html[dir="ltr"] .footer {
                padding-left:10%;
                margin-right: 0px;
            }
            html[dir="ltr"] #kt_header {
                padding-left:0%;
                margin-right: 0px;
            }
            html[dir="rtl"] #kt_header {
                margin-left:-150px;
                padding-right: 10%;
            }
            html[dir="ltr"] .mycontent {
                margin-left:150px;
            }
            html[dir="rtl"] .mycontent {
                margin-right: 150px;
            }

            </style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">
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
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
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
						<!--begin::Svg Icon | path:{{asset('assets/media/svg/icons/General/User.svg')}}-->
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
				@include('Admin.aside')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					@include('Admin.header')
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="mycontent container" style="margin-top:50px">
                                @include('dashboard.shared.msg')
                                @yield('content')
                            </div>

							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->

					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!-- begin::User Panel-->
        @include('Admin.userPanel')
        <!-- end::User Panel-->
    @include('Admin.panel')
    @yield('script')
    @include('Admin.footer')

