<!DOCTYPE html>

<html lang="{{$local}}">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-desc')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keyword" content="@yield('meta-keyword')"/>
    <link rel="canonical" href="https://tools.cmlabs.co<?php echo $_SERVER['REQUEST_URI'];?>">
    <meta property="og:type" content="tools"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('meta-desc')"/>
    <meta property="og:url" content="https://tools.cmlabs.co<?php echo $_SERVER['REQUEST_URI'];?>"/>
    <meta property="og:image" content="{{asset('media/logos/new/new-logo-default.png')}}" />
    <meta property="og:image:width" content="1142" />
    <meta property="og:image:height" content="1142" />
    @if(env('APP_ENV')==='production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156389913-2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-156389913-2');
            </script>
        @endif
    @if(env('APP_ENV')==='development')
        <meta name="robots" content="noindex,nofollow">
    @endif
    @if(env('APP_ENV')==='production')
        <meta name="robots" content="index,follow">
    @endif
    <link rel="alternate" hreflang="en-ID" href="https://tools.cmlabs.co/@yield('en-link')" />
    <link rel="alternate" hreflang="id-ID" href="https://tools.cmlabs.co/@yield('id-link')" />
    <!--begin::Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css?v=7.0.9')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css?v=7.0.9')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.bundle.css?v=7.0.9')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/themes/layout/header/base/light.css?v=7.0.9')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/header/menu/light.css?v=7.0.9')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/aside/light.css?v=7.0.9')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/brand/light.css?v=7.0.9')}}" rel="stylesheet" type="text/css"/>

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.14/dist/css/splide.min.css">
    @stack('style')
    <style media="screen">
    :root {
        --white: #ffffff;
        --black: #000000;
        --darkgrey: #2D393D;
        --grey: #969c9e;
        --lightgrey: #f4f4f4;
        --primaryblue: #18a0fb;
        --seablue: #2D60FF;
        --darkblue: #2D3665;
    }
    html, body {
        font-family: 'Roboto', sans-serif !important;
    }
        /* Breadcrumb Style */
        .menu-breadcrumb {
          color: #ABABAB;
        }
        .menu-breadcrumb:hover {
          color: #2F80ED;
        }
        /* Custom a href colour */
        a:hover {
            color: #0095EB !important;
        }
        .logo-mobile {
            display: none;
        }
        .analytic-links, .resource-links, .dropdown-toggle, .contributor-title {
            color: black;
        }
        .analytic-links:hover, .resource-links:hover, .dropdown-toggle:hover, .dropdown-item:hover, .burger-icon:focus, .contributor-title:hover {
            color: #0095EB !important;
        }
        .analytic-icon:hover > .svg-icon.svg-menu-icon svg g [fill] {
            fill: #0095EB !important;
        }
        .menu-item.menu-item-active > .menu-link .menu-text, .menu-item:hover > .menu-link .menu-text {
            color: #0095EB !important;
        }
        .menu-item.menu-item-active > .menu-link .svg-icon.menu-icon svg g [fill], .menu-item:hover > .menu-link .svg-icon.menu-icon svg g [fill] {
            fill: #0095EB !important;
        }
        .menu-item.menu-item-active, .menu-item:hover {
            border-right: 3px solid #0095EB;
            background: rgba(0, 149, 235, 0.7);
        }
        .main-button, .main-button-icon {
            color: #ffffff !important;
            background-color: #0095eb !important;
        }
        .main-button:hover, .main-button:hover > .main-button-icon {
            color: #0095eb !important;
            background-color: #EBFAFF !important;
        }
        .second-button, .second-button-icon {
            color: #ffffff !important;
            background-color: #53f9ad !important;
        }
        .borderless td {
            border: 0 !important;
        }
        @media only screen and (max-width: 991px) {
            .logo-mobile {
                display: block;
            }
        }

        .title-logo-1 {
            color: var(--primaryblue);
        }
        .title-logo-2 {
            color: var(--grey);
        }

        .button-language, .button-language > span > i, .button-language-mobile, .button-language-mobile > span > i {
            color: var(--darkgrey);
        }
        .button-language:hover {
            background: #F4F4F4;
            color: var(--darkgrey) !important;
        }
        .button-language, .button-language-mobile {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .button-language {
            width: 140px;
        }
        .button-language-mobile {
            width: 100px;
        }
        .dropdown-language, .dropdown-language-mobile {
            background: #ffffff;
            border: 0.5px solid #D0D0D0;
            border-radius: 0px;
            box-shadow: 0 13px 16px 0 rgba(0, 0, 0, 0.1);
            padding: 0;
        }
        .dropdown-language .navi .navi-item .navi-link:hover,
        .dropdown-language-mobile .navi .navi-item .navi-link:hover {
            background: transparent !important;
            color: #2D60FF !important;
        }
        .dropdown-language {
            width: 140px !important;
        }
        .dropdown-language-mobile {
            width: 100px !important;
        }
        .slick-navbar {
            text-align: right;
            max-width: 450px !important;
            color: var(--darkgrey);
        }
        .custom-nav .nav-item .nav-link {
            padding: 15px 0px !important;
            font-weight: bold;
            color: var(--darkgrey);
            transition: .3s;
            border-bottom: 4px solid transparent;
        }
        .custom-nav .nav-item .nav-link.active {
            border-bottom: 4px solid rgba(45, 57, 61, 0.2);
        }
        .custom-nav .nav-item .nav-link:hover {
            color: var(--darkgrey) !important;
            border-bottom: 4px solid rgba(45, 57, 61, 0.2);
        }
        .custom-nav, .subheader-logo {
            transition: .3s;
        }
        .btn-custom-credit, .btn-custom-credit-1 {
            background: var(--primaryblue);
            color: var(--white) !important;
            padding: 5px 20px !important;
            border-radius: 50px;
            transition: .3s;
        }
        .btn-custom-credit:hover, .btn-custom-credit-1:hover {
            box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .btn-custom-login {
            background: var(--lightgrey);
            color: var(--darkgrey);
            padding: 5px 20px !important;
            border-radius: 50px;
            transition: .3s;
        }
        .btn-custom-login:hover {
            box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2);
        }
        @media (min-width: 992px) and (max-width: 1009px) {
            .btn-custom-credit {
                display: none;
            }
            .btn-custom-credit-1 {
                display: block !important;
            }
        }
        .custom-header, .custom-header-mobile {
            left: 0 !important;
            transition: top 0.3s;
        }
        .custom-header, .brand-header {
            border-bottom: 0.5px solid #cfcfcf;
        }
        .custom-subheader {
            left: 0 !important;
            transition: top 0.3s;
            box-shadow: 0px 1px 6px 0px rgba(33, 33, 33, 0.3) !important;
        }
        .subheader.custom-subheader-desktop {
            padding: 0px !important;
            border-top: 0px !important;
        }
        @media (max-width: 991px) {
            .custom-header, .custom-subheader-desktop {
                display: none !important;
            }
            .custom-header-mobile {
                box-shadow: none !important;
            }
            .custom-subheader-mobile {
                display: block !important;
                position: fixed;
                width: 100%;
                z-index: 1;
                box-shadow: 0px 1px 9px -3px rgba(0, 0, 0, 0.3);
            }
            .custom-aside-mobile {
                display: flex !important;
            }
            .custom-aside-menu {
                height: calc(100vh - (220px + 2rem + 20px)) !important;
            }
            .aside-overlay {
                background: rgba(0, 0, 0, 0.4);
            }
        }
        .section-freetools {
            padding: 100px 0px;
        }

        .card-freetools {
            border: 1px solid rgba(45, 54, 101, 0.25) !important;
            border-radius: 0px !important;
            box-shadow: none !important;
        }

        .btn-freetools {
            background: var(--primaryblue);
            color: var(--white);
            border-radius: 0px !important;
            transition: .3s;
        }
        .btn-freetools:hover {
            color: var(--white);
            box-shadow: 0 12px 25px 0 rgba(0, 0, 0, 0.3);
        }

      .container-provide, .container-insight, .container-footer {
            padding: 0px 100px;
        }

        .freetools-link i {
          color:#46b3fc;
        }

        .freetools-link span, .freetools-link:hover > i {
            color: #FFFFFF;
        }
        .freetools-link:hover span {
            text-decoration: underline !important;
        }
        .freetools-link, .freetools-link > i, .freetools-link:hover {
            font-weight: 500;
        }

        .section-insight {
            background: var(--darkgrey);
            padding: 100px 0px;
        }

        .custom-footer {
            background: var(--darkgrey);
            padding: 0px 0px 100px 0px;
            margin-top: -1px;
        }
        .section-provide {
            background: var(--primaryblue);
            padding: 20px 0px;
        }
        .footer-title, .footer-link, .footer-link > i {
            color: var(--white);
        }
        .footer-link {
            font-weight: normal;
            display: block;
            margin-bottom: 10px;
        }

        .link-footer-blog {
          color: white;
          text-decoration: underline !important;
        }
        .link-footer-blog:hover {
          color: white !important;
        }
        .footer-link:hover {
            color: var(--white) !important;
            text-decoration: underline !important;
        }

        .col-copyright {
            margin-top: 100px;
        }
        .custom-copyright, .copyright-link {
            color: rgba(255, 255, 255, 0.3);
        }
        .copyright-link:hover {
            color: rgba(255, 255, 255, 0.3) !important;
            text-decoration: underline !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('media/logos/new_logo_default.ico') }}"/>
    <meta name="google-site-verification" content="YCopEocQW4s_qTQ_Vqle_cfHtfpqK5__es6PHei4ooY" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
    <!--begin::Logo-->
    <a href="/">
        <img alt="Logo" src="{{asset('media/logos/new/new-logo-default.png')}}" class="logo-default max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <a href="/analytics" class="analytic-icon mr-5" target="_blank">
          <!-- <span id="countdown" class="text-dark text-hover-primary px-2 pt-1"></span> -->
          <span class="svg-icon svg-menu-icon svg-icon-xl">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24" />
                <path d="M20,12c-0.249,0-0.483,0.051-0.703,0.133l-2.398-1.963C16.958,9.956,17,9.734,17,9.5C17,8.114,15.886,7,14.5,7 S12,8.114,12,9.5c0,0.396,0.1,0.765,0.262,1.097l-2.909,3.438C9.237,14.015,9.121,14,9,14c-0.179,0-0.348,0.03-0.512,0.074 l-2.563-2.563C5.97,11.348,6,11.179,6,11c0-1.108-0.892-2-2-2s-2,0.892-2,2s0.892,2,2,2c0.179,0,0.348-0.03,0.512-0.074 l2.563,2.563C7.03,15.652,7,15.821,7,16c0,1.108,0.892,2,2,2s2-0.892,2-2c0-0.237-0.048-0.46-0.123-0.671l2.913-3.442 C14.017,11.953,14.252,12,14.5,12c0.411,0,0.792-0.107,1.133-0.281l2.399,1.963C18.016,13.786,18,13.891,18,14c0,1.108,0.892,2,2,2 s2-0.892,2-2S21.108,12,20,12z" fill="#727272"/>
              </g>
            </svg>
          </span>
        </a>
        <div class="dropdown mr-5">
            <button class="btn dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if($local == "id")
                ID
                @else
                EN
                @endif
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/en/version">
                 <span class="ml-1">English</span>
               </a>
              <a class="dropdown-item" href="/id/version">
                 <span class="ml-1">Indonesia</span>
              </a>
            </div>
        </div>
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>

        <!--end::Aside Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper custom-wrapper" id="kt_wrapper">
            <!--begin::Header-->
            @include('layouts.header')
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-row-fluid custom-data-content" id="kt_content">
              @include('layouts.subheader')
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container" style="padding-top: 20px;">
                        @yield('content')
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            @include('layouts.footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
</div>
<!--end::Scrolltop-->
<!--end::Demo Panel-->
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Roboto" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('plugins/global/plugins.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5')}}"></script>
<script src="{{asset('js/scripts.bundle.js?v=7.0.9')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.14/dist/js/splide.min.js"></script>

<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.5')}}"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM?v=7.0.5"></script>
<script src="{{asset('plugins/custom/gmaps/gmaps.js?v=7.0.5')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/pages/widgets.js?v=7.0.5')}}"></script>
<script>const lang = "{{\Illuminate\Support\Facades\App::getLocale()}}"</script>
<script type="text/javascript">
  var sticky = new Sticky('.sticky');
  sticky.update();
  window.onresize = function(e) {
    sticky.update();
  };
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script type="text/javascript">
  // var deadline = new Date("dec 1, 2020 12:00:00").getTime();
  // var x = setInterval(function() {
  //   var now = new Date().getTime();
  //   var t = deadline - now;
  //   var days = Math.floor(t / (1000 * 60 * 60 * 24));
  //   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
  //   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
  //   var seconds = Math.floor((t % (1000 * 60)) / 1000);
  //   @if($local == "id")
  //   document.getElementById("countdown").innerHTML = days + "h "
  //   + hours + "j " + minutes + "m " + seconds + "d ";
  //   @else
  //   document.getElementById("countdown").innerHTML = days + "d "
  //   + hours + "h " + minutes + "m " + seconds + "s ";
  //   @endif
  //       if (t < 0) {
  //           clearInterval(x);
  //           document.getElementById("countdown").innerHTML = "EXPIRED";
  //       }
  //   }, 1000);
</script>
@stack('script')
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
