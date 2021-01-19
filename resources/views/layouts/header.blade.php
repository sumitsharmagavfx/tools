<div id="kt_header" class="header header-fixed custom-header">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!-- Header Menu Wrapper -->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!-- Header Menu -->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <div class="brand brand-header flex-column-auto justify-content-center pl-0 pr-0" id="kt_brand">
                    <a href="/{{ $local }}" class="brand-logo d-flex justify-content-start align-items-center">
                        <img alt="Logo" src="{{ asset('media/logos/new/new-logo-default.png') }}" class="max-h-45px"/>
                        <span class="h2 title-logo-1 font-weight-bolder ml-3 my-2">SEO Tools</span>&nbsp;&nbsp;
                        <span class="h2 title-logo-2 font-weight-light my-2">for Writers</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Topbar -->
        <div class="topbar">
            <div class="topbar-item">
                <div class="slick-navbar custom-slide-header d-none">
                    <div class="slick-navbar-content"><span class="h6 font-weight-light">Changing the way you receive insight through tools and analyitcs</span></div>
                    <div class="slick-navbar-content"><span class="h6 font-weight-light">Continues learning of on-going lifetime risk in keyword</span></div>
                    <div class="slick-navbar-content"><span class="h6 font-weight-light">Niche/market monitoring and prioritization</span></div>
                    <div class="slick-navbar-content"><span class="h6 font-weight-light">Early detection of anomalies of Google SERPs</span></div>
                </div>
                <div class="dropdown dropdown-inline ml-7">
                    <button type="button" class="btn font-weight-bold button-language dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><i class="bx bx-world"></i>English</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-language">
                        <ul class="navi flex-column navi-hover">
                            <li class="navi-item border-bottom">
                                <a href="{{ url('/en/version')}}" class="navi-link">English</a>
                            </li>
                            <li class="navi-item border-bottom">
                                <a href="{{ url('/id/version')}}" class="navi-link">Bahasa</a>
                            </li>
                            <li class="navi-item">
                                <a href="{{ url('/zh/version')}}" class="navi-link">中文</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
