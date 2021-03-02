@extends('layouts.app')

@section('title', Lang::get('pagespeed.meta-title'))

@section('meta-desc', Lang::get('pagespeed.meta-desc'))

@section('meta-keyword', Lang::get('pagespeed.meta-keyword'))

@section('conical','/en/pagespeed-test')

@section('en-link')
en/pagespeed-test
@endsection

@section('id-link')
id/pagespeed-test
@endsection

@push('style')
<style media="screen">

    .header-blue {
        background: var(--primaryblue);
        border-radius: 5px;
    }

    .sitemap-url {
        background: var(--primaryblue);
        border: none;
        color: white;
    }

    .sitemap-url::placeholder {
        color: white;
    }

    .sitemap-url:focus {
        background: var(--primaryblue);
        border: none;
        color: white;
    }

    .what-is-this {
        cursor: pointer;
    }

    .what-is-this:hover {
        text-decoration: underline;
    }

    .links {
        color: var(--primaryblue);
        cursor: pointer;
    }

    .links:hover {
        color: #037BCB;
        cursor: pointer;
        text-decoration: underline !important;
    }

    .label-primary-version {
        background: var(--lightgrey);
        color: var(--darkgrey);
    }

    .clear-all:hover {
        text-decoration: underline;
    }

    .sitemap-url-result {
        color: var(--darkgrey);
        font-weight: bold;
    }

    .btn-cancel {
        line-height: 1;
        width: 100px;
        background: #FF5656;
        color: white;
        border-radius: 20px;
    }

    .btn-cancel:hover {
        background: #FB1818;
        color: white;
        border-radius: 20px;
    }

    .btn-cancel-disabled {
        line-height: 1;
        width: 100px;
        background: var(--grey);
        color: white;
        border-radius: 20px;
        cursor: not-allowed;
    }

    .btn-cancel-disabled:hover {
        line-height: 1;
        width: 100px;
        background: var(--grey);
        color: white;
        border-radius: 20px;
        cursor: not-allowed;
    }

    @media only screen and (min-width: 768px) {
        #local-collection-desktop .local-collection-title {
            max-width: 70%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    }

    .circleProgressBar {
        border-bottom: 4px solid var(--white);
        cursor: pointer
    }

    .circleProgressBar.active {
        border-bottom: 4px solid var(--primaryblue);
    }

    .circleProgressBar:hover {
        border-bottom: 4px solid var(--primaryblue);
        cursor: pointer
    }

    @media only screen and (max-width:1200px) {
        .circleProgressBar {
            margin-bottom: 1.5rem;
        }
    }
</style>
@endpush

@section('content')

<div class="container container-tools mb-10">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <h1 class="text-darkgrey font-weight-normal">PAGE SPEED TEST</h1>
            <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

            <div class="header-blue mt-10 mb-5 px-5 py-1">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-9 col-md-10 col-lg-9 col-xl-10 d-flex align-items-center py-1">
                        <!-- BEFORE CRAWL -->
                        <i id="noCrawl" class='bx bxs-shield text-white bx-md mr-3'></i>

                        <!-- HTTPS URL -->
                        <i id="crawlHttps" class='bx bxs-check-shield text-white bx-md mr-3'></i>

                        <!-- HTTP URL -->
                        <i id="crawlHttp" class='bx bxs-shield-x text-white bx-md mr-3'></i>
                        <input type="url" id="url" class="form-control sitemap-url" name="" value="" placeholder="INPUT / PASTE YOUR DOMAIN">
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
                        <!-- CRAWL BUTTON -->
                        <button id="analysis-button" type="button" class="btn btn-crawl" name="button">GENERATE</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="px-2 mb-3">
                        <span class="text-black font-15px font-weight-bolder">Results</span>
                        <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
                    </div>
                    <div class="card card-custom">
                        <div class="card-body py-4 px-0">
                                    <div class="row justify-content-center px-4" id="pagespeed-tab">


                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                            <!-- <a href="#performance"> -->
                                            <div class="circleProgressBar active" id="performancePB" data-toggle="tab" href="#internal-link-tab" role="tab" aria-controls="nav-home" aria-selected="true" id="internal-links-value-tab">
                                                <div class="progress progress-red performance" data-percentage="30">
                                                    <span class="progress-left">
                                                        <span class="progress-bar progress-bar-performance"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar progress-bar-performance"></span>
                                                    </span>
                                                    <div class="progress-value" style="width:100%">
                                                        <div class="value-performance value-red">
                                                            30
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="font-weight-bold text-center mb-4 h6 text-black">Peformance</h2>
                                            </div>
                                            <!-- </a> -->
                                        </div>



                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                            <!-- <a href="#accessibility"> -->
                                            <div class="circleProgressBar" id="accessibilityPB">
                                                <div class="progress progress-orange accessibility" data-percentage="75">
                                                    <span class="progress-left">
                                                        <span class="progress-bar progress-bar-accessibility"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar progress-bar-accessibility"></span>
                                                    </span>
                                                    <div class="progress-value" style="width:100%">
                                                        <div class="value-accessibility value-orange">
                                                            75
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="font-weight-bold text-center mb-4 h6 text-black">Accesibility</h2>
                                            </div>
                                            <!-- </a> -->
                                        </div>



                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                            <!-- <a href="#best-practice" id="nav-best-practices"> -->
                                            <div class="circleProgressBar" id="practicePB">
                                                <div class="progress progress-green best-practices" data-percentage="80">
                                                    <span class="progress-left">
                                                        <span class="progress-bar progress-bar-best-practices"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar progress-bar-best-practices"></span>
                                                    </span>
                                                    <div class="progress-value" style="width:100%">
                                                        <div class="value-best-practices value-green">
                                                            80
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class=" font-weight-bold text-center mb-4 h6 text-black">Best Practies</h2>
                                            </div>
                                            <!-- </a> -->
                                        </div>



                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                            <!-- <a href="#seo"> -->
                                            <div class="circleProgressBar" id="seoPB">
                                                <div class="progress progress-red seo" data-percentage="4">
                                                    <span class="progress-left">
                                                        <span class="progress-bar progress-bar-seo"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar progress-bar-seo"></span>
                                                    </span>
                                                    <div class="progress-value" style="width:100%">
                                                        <div class="value-seo value-red">
                                                            4
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class=" font-weight-bold text-center mb-4 h6 text-black">SEO</h2>
                                            </div>
                                            <!-- </a> -->
                                        </div>



                                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                            <!-- <a href="#pwa"> -->
                                            <div class="circleProgressBar" id="pwaPB">
                                                <div class="progress progress-green pwa" data-percentage="100">
                                                    <span class="progress-left">
                                                        <span class="progress-bar progress-bar-pwa"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar progress-bar-pwa"></span>
                                                    </span>
                                                    <div class="progress-value" style="width:100%">
                                                        <div class="value-pwa value-green">
                                                            100
                                                        </div>
                                                    </div>

                                                </div>
                                                <h2 class=" font-weight-bold text-center mb-4 h6 text-black">PWA</h2>
                                            </div>
                                            <!-- </a> -->
                                        </div>

                                    </div>

                            <hr class="mt-0">
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="d-flex align-items-center mr-2">
                                    <i class='bx bx-minus bx-md' style="color:#FF5656"></i>
                                    <span>0-49</span>
                                </div>
                                <div class="d-flex align-items-center mr-2">
                                    <i class='bx bx-minus bx-md' style="color:#FBC918"></i>
                                    <span>50-89</span>
                                </div>
                                <div class="d-flex align-items-center mr-2">
                                    <i class='bx bx-minus bx-md' style="color:#84DB15"></i>
                                    <span>90-100</span>
                                </div>
                            </div>
                            <hr>
                            <div class="" id="performance">
                                <div class="mx-5">
                                    <p class="h4">Performance</p>
                                    <div class="col">
                                        <div class="">
                                            <div class="progress progress-red performance result" data-percentage="30">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-performance"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-performance"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-performance value-red">
                                                        30
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="accordion accordion-light accordion-toggle-arrow performance-audit" id="performance-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow pass-performance-audit" id="pass-performance-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow not-app-performance-audit" id="not-app-performance-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow manual-performance-audit" id="manual-performance-audit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="accessibility">
                                <div class="mx-5">
                                    <p class="h4">Accesibility</p>
                                    <div class="col">
                                        <div class="">
                                            <div class="progress progress-orange accessibility result" data-percentage="75">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-accessibility"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-accessibility"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-accessibility value-orange">
                                                        75
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="accordion accordion-light accordion-toggle-arrow accessibility-audit" id="accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow pass-accessibility-audit" id="pass-accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow not-app-accessibility-audit" id="not-app-accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow manual-accessibility-audit" id="manual-accessibility-audit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="best-practices">
                                <div class="mx-5">
                                    <p class="h4">Best Practies</p>
                                    <div class="col">
                                        <div class="">
                                            <div class="progress progress-green practices result" data-percentage="80">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-practices"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-practices"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-practices value-green">
                                                        80
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="accordion accordion-light accordion-toggle-arrow best-practices-audit" id="best-practices-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow pass-best-practices-audit" id="pass-best-practices-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow not-app-best-practices-audit" id="not-app-best-practices-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow manual-best-practices-audit" id="manual-best-practices-audit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="seo">
                                <div class="mx-5">
                                    <p class="h4">SEO</p>
                                    <div class="col">
                                        <div class="">
                                            <div class="progress progress-red seo result" data-percentage="4">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-seo"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-seo"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-seo value-red">
                                                        4
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="accordion accordion-light accordion-toggle-arrow seo-audit" id="seo-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-seo-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-seo-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-seo-audit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none" id="pwa">
                                <div class="mx-5">
                                    <p class="h4">PWA</p>
                                    <div class="col">
                                        <div class="">
                                            <div class="progress progress-green pwa result" data-percentage="100">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-pwa"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-pwa"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-pwa value-green">
                                                        100
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="accordion accordion-light accordion-toggle-arrow accessibility-audit" id="accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow pass-accessibility-audit" id="pass-accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow not-app-accessibility-audit" id="not-app-accessibility-audit"></div>
                                        <div class="accordion accordion-light accordion-toggle-arrow manual-accessibility-audit" id="manual-accessibility-audit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">




                    <!-- <div class="px-2 mb-3 d-flex align-items-center">
            <span class="text-black font-15px font-weight-bolder">Progress</span>
          </div>
          <div class="card card-custom mb-5">
            <div class="card-body py-4 px-5">
              <div class="text-center">
                <p class="text-black font-weight-bold mb-0">Our robot is sleeping right now. Give him a task!</p>
                <p class="text-black font-weight-bold mb-0">Our robot is excecuting your task..</p>
                <p class="text-black font-weight-bold mb-0">Our robot is already finished your task.</p>
                <div class="progress my-3">
                  <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <p class="text-black font-weight-bold mb-3">10 from 40 pages</p>
                <button type="button" class="btn btn-cancel" name="button">Cancel</button>
                <button type="button" class="btn btn-cancel-disabled" disabled name="button">Cancel</button>
              </div>
            </div>
          </div> -->
                    <div id="local-collection-desktop" class="local-collection">
                        <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                                <span class="text-black font-15px">Your Local History</span>
                            </div>
                            <div>
                                <span class="clear-all font-15px pointer mr-3">Clear All</span>
                            </div>
                        </div>
                        <div class="local-collection-body">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-center text-center">
                                        <span>This is your first impressions, no history yet!</span>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-between">
                                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
                                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-between">
                                        <div class="local-collection-title">https://cmlabs.co/karir</div>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
                                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-between">
                                        <div class="local-collection-title">https://cmlabs.co/tentang-kami</div>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
                                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-between">
                                        <div class="local-collection-title">https://cmlabs.co/blog</div>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
                                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                    <div class="d-flex justify-content-between">
                                        <div class="local-collection-title">https://cmlabs.co/en/about-us</div>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
                                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="desktop-version">
                        <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
                            <div class="card bg-transparent" style="">
                                <div class="card-header" id="headingOne2">
                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                                        Version 2.3
                                    </div>
                                </div>
                                <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                            anim id est laborum.</p>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
                                            <span class="text-darkgrey h6 mb-0">Updated 8 Jan, 2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{--
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
<li class="breadcrumb-item active" style="color:#2F80ED"><b>Pagespeed Test & Insight</b></li>
</ol>
</nav>
<div class="card card-custom mb-5">
    <div class="card-header">
        <div class="card-title">
            <h1 class="card-label">@lang('pagespeed.title') </h1>
            <small>@lang('pagespeed.subtitle')</small>
        </div>
    </div>
</div>
<div class="card card-custom gutter-b">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <div id="spinner">
                    <input type="text" name="" class="form-control" value="" id="url" placeholder="@lang('pagespeed.input-hint')">
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-xxl-2 mb-5">
                <button type="button" class="btn btn-primary form-control" name="button" id="analysis-button">
                    <i class="flaticon2-heart-rate-monitor"></i> @lang('pagespeed.btn-analysis')</button>
            </div>
        </div>
    </div>
</div>
<div class="card card-custom gutter-b">
    <div class="card-header p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl">
                    <a href="#result" id="nav-performance">
                        <div class="progress performance" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar progress-bar-performance"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar progress-bar-performance"></span>
                            </span>
                            <div class="progress-value" style="width:100%">
                                <div class="value-performance">
                                    0%
                                </div>
                            </div>
                        </div>
                        <h2 class="font-weight-bold text-center mb-4 h6">@lang('pagespeed.performance')</h2>
                    </a>
                </div>



                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl">
                    <a href="#result" id="nav-accessibility">
                        <div class="progress accessibility" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar progress-bar-accessibility"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar progress-bar-accessibility"></span>
                            </span>
                            <div class="progress-value" style="width:100%">
                                <div class="value-accessibility">
                                    0%
                                </div>
                            </div>
                        </div>
                        <h2 class=" font-weight-bold text-center mb-4 h6">@lang('pagespeed.accessibility')</h2>
                    </a>
                </div>



                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl">
                    <a href="#result" id="nav-best-practices">
                        <div class="progress best-practices" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar progress-bar-best-practices"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar progress-bar-best-practices"></span>
                            </span>
                            <div class="progress-value" style="width:100%">
                                <div class="value-best-practices">
                                    0%
                                </div>
                            </div>
                        </div>
                        <h2 class=" font-weight-bold text-center mb-4 h6">@lang('pagespeed.practice')</h2>
                    </a>
                </div>



                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl">
                    <a href="#result" id="nav-seo">
                        <div class="progress seo" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar progress-bar-seo"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar progress-bar-seo"></span>
                            </span>
                            <div class="progress-value" style="width:100%">
                                <div class="value-seo">
                                    0%
                                </div>
                            </div>
                        </div>
                        <h2 class=" font-weight-bold text-center mb-4 h6">@lang('pagespeed.seo')</h2>
                    </a>
                </div>



                <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl">
                    <a href="#result" id="nav-pwa">
                        <div class="progress pwa" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar progress-bar-pwa"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar progress-bar-pwa"></span>
                            </span>
                            <div class="progress-value" style="width:100%">
                                <div class="value-pwa">
                                    0%
                                </div>
                            </div>

                        </div>
                        <h2 class=" font-weight-bold text-center mb-4 h6">@lang('pagespeed.pwa')</h2>
                    </a>
                </div>


            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="row justify-content-center mb-5">
            <table class="border border-secondary-5">
                <tbody id="result">
                    <tr>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #F64E60; text-align:center"></span>
                            0-49
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #FFA800; text-align:center"></span>
                            50-89
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #1BC5BD; text-align:center"></span>
                            90-100
                        </td>
                        <td style="width:20px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Performance -->
<div class="card card-custom gutter-b " id="performance">
    <div class="ribbon ribbon-top">
        <div class="ribbon-target" id="ribbon-performance" style="top: -2px; right: 20px;">PERFORMANCE</div>
    </div>
    <div class="card-body pt-25">
        <div class="col">
            <div class="progress performance" data-percentage="0">
                <span class="progress-left">
                    <span class="progress-bar progress-bar-performance"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar progress-bar-performance"></span>
                </span>
                <div class="progress-value" style="width:100%">
                    <div class="value-performance">
                        0%
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="accordion accordion-light accordion-toggle-arrow performance-audit" id="performance-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow pass-performance-audit" id="pass-performance-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow not-app-performance-audit" id="not-app-performance-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow manual-performance-audit" id="manual-performance-audit"></div>
        </div>
    </div>
</div>

<!-- accessibility -->
<div class="card card-custom gutter-b " id="accessibility" style="display:none">
    <div class="ribbon ribbon-top">
        <div class="ribbon-target" id="ribbon-accessibility" style="top: -2px; right: 20px;">ACCESSIBILITY</div>
    </div>
    <div class="card-body pt-25">
        <div class="col">
            <div class="progress accessibility" data-percentage="0">
                <span class="progress-left">
                    <span class="progress-bar progress-bar-accessibility"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar progress-bar-accessibility"></span>
                </span>
                <div class="progress-value" style="width:100%">
                    <div class="value-accessibility">
                        0%
                    </div>
                </div>
            </div>
            <!-- END -->
            <!-- <h6 class=" font-weight-bold text-center mb-4">ACCESIBILITY</h6> -->
        </div>
        <div class="">
            <div class="accordion accordion-light accordion-toggle-arrow accessibility-audit" id="accessibility-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow pass-accessibility-audit" id="pass-accessibility-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow not-app-accessibility-audit" id="not-app-accessibility-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow manual-accessibility-audit" id="manual-accessibility-audit"></div>
        </div>
    </div>
</div>

<!-- best practice -->
<div class="card card-custom gutter-b " id="best-practices" style="display:none">
    <div class="ribbon ribbon-top">
        <div class="ribbon-target" id="ribbon-best-practices" style="top: -2px; right: 20px;">BEST PRACTICES</div>
    </div>
    <div class="card-body pt-25">
        <div class="col">
            <div class="progress best-practices" data-percentage="0">
                <span class="progress-left">
                    <span class="progress-bar progress-bar-best-practices"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar progress-bar-best-practices"></span>
                </span>
                <div class="progress-value" style="width:100%">
                    <div class="value-best-practices">
                        60%
                    </div>
                </div>
            </div>
            <!-- END -->
            <!-- <h6 class=" font-weight-bold text-center mb-4">BEST PRACTICES</h6> -->
        </div>
        <div class="">
            <div class="accordion accordion-light accordion-toggle-arrow best-practices-audit" id="best-practices-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow pass-best-practices-audit" id="pass-best-practices-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow not-app-best-practices-audit" id="not-app-best-practices-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow manual-best-practices-audit" id="manual-best-practices-audit"></div>
        </div>
    </div>
</div>

<!-- seo -->
<div class="card card-custom gutter-b " id="seo" style="display:none">
    <div class="ribbon ribbon-top">
        <div class="ribbon-target" id="ribbon-seo" style="top: -2px; right: 20px;">SEO</div>
    </div>
    <div class="card-body pt-25">
        <div class="col">
            <div class="progress seo" data-percentage="0">
                <span class="progress-left">
                    <span class="progress-bar progress-bar-seo"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar progress-bar-seo"></span>
                </span>
                <div class="progress-value" style="width:100%">
                    <div class="value-seo">
                        0%
                    </div>
                </div>
            </div>
            <!-- END -->
            <!-- <h6 class=" font-weight-bold text-center mb-4">SEO</h6> -->
        </div>
        <div class="">
            <div class="accordion accordion-light accordion-toggle-arrow seo-audit" id="seo-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-seo-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-seo-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-seo-audit"></div>
        </div>
    </div>
</div>

<!-- pwa -->
<div class="card card-custom gutter-b " id="pwa" style="display:none">
    <div class="ribbon ribbon-top">
        <div class="ribbon-target" id="ribbon-pwa" style="top: -2px; right: 20px;">PWA</div>
    </div>
    <div class="card-body pt-25">
        <div class="col">
            <div class="progress pwa" data-percentage="0">
                <span class="progress-left">
                    <span class="progress-bar progress-bar-pwa"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar progress-bar-pwa"></span>
                </span>
                <div class="progress-value" style="width:100%">
                    <div class="value-pwa">
                        0%
                    </div>
                </div>
            </div>
            <!-- <h6 class=" font-weight-bold text-center mb-4">PWA</h6> -->
        </div>
        <div class="">
            <div class="accordion accordion-light accordion-toggle-arrow pwa-audit" id="pwa-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-pwa-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-pwa-audit"></div>
            <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-pwa-audit"></div>
        </div>
    </div>
</div>




<div class="row" data-sticky-container>
    <div class="col-lg-8 mb-5">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-0')</h2>
                </div>
            </div>
            <div class="card-body">
                @lang('pagespeed.copy-1')
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-2')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-3')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-4')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-5')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-6')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-7')</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">@lang('pagespeed.copy-8')</th>
                            <th scope="col">@lang('pagespeed.copy-9')</th>
                            <th scope="col">@lang('pagespeed.copy-10')</th>
                        </tr>
                        <tr>
                            <th scope="row">@lang('pagespeed.copy-11')</th>
                            <td>@lang('pagespeed.copy-12')</td>
                            <td>@lang('pagespeed.copy-13')</td>
                            <td>@lang('pagespeed.copy-14')</td>
                        </tr>
                        <tr>
                            <th scope="row">@lang('pagespeed.copy-15')</th>
                            <td>@lang('pagespeed.copy-16')</td>
                            <td>@lang('pagespeed.copy-17')</td>
                            <td>@lang('pagespeed.copy-18')</td>
                        </tr>
                        <tr>
                            <th scope="row">@lang('pagespeed.copy-19')</th>
                            <td>@lang('pagespeed.copy-20')</td>
                            <td>@lang('pagespeed.copy-21')</td>
                            <td>@lang('pagespeed.copy-22')</td>
                        </tr>
                        <tr>
                            <th scope="row">@lang('pagespeed.copy-23')</th>
                            <td>@lang('pagespeed.copy-24')</td>
                            <td>@lang('pagespeed.copy-25')</td>
                            <td>@lang('pagespeed.copy-26')</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-27')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-28')</p>
                <p>@lang('pagespeed.copy-29')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-33')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-34')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-35')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-36')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-61')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('pagespeed.copy-37')</p>
                <p>@lang('pagespeed.copy-38')</p>
                <ul>
                    <li>@lang('pagespeed.copy-39')
                        <div class="btn btn-icon btn-circle bg-success" style="height:15px; width:15px">
                        </div>
                    </li>
                    <li>@lang('pagespeed.copy-40')
                        <div class="btn btn-icon btn-circle bg-warning" style="height:15px; width:15px">
                        </div>
                    </li>
                    <li>@lang('pagespeed.copy-41')
                        <div class="btn btn-icon btn-circle bg-danger" style="height:15px; width:15px">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-42')</h2>
                </div>
            </div>
            <div class="card-body">
                @lang('pagespeed.copy-43')
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('pagespeed.copy-44')</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                                @lang('pagespeed.copy-45')
                            </div>
                        </div>
                        <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-46')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                                @lang('pagespeed.copy-47')
                            </div>
                        </div>
                        <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-48')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                                @lang('pagespeed.copy-49')
                            </div>
                        </div>
                        <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-50')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1">
                                @lang('pagespeed.copy-51')
                            </div>
                        </div>
                        <div id="collapseFour1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-52')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive1">
                                @lang('pagespeed.copy-53')
                            </div>
                        </div>
                        <div id="collapseFive1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-54')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSix1">
                                @lang('pagespeed.copy-55')
                            </div>
                        </div>
                        <div id="collapseSix1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-56')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSeven1">
                                @lang('pagespeed.copy-57')
                            </div>
                        </div>
                        <div id="collapseSeven1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-58')
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseEight1">
                                @lang('pagespeed.copy-59')
                            </div>
                        </div>
                        <div id="collapseEight1" class="collapse" data-parent="#accordionExample1">
                            <div class="card-body">
                                @lang('pagespeed.copy-60')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts/stickybar')
</div>
</div>
</div>
--}}
@endsection
@push('script')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "@lang('home.homepage')",
            "item": "{{url('/')}}/{{$local}}"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Page Speed"
        }]
    }
</script>
@endpush
@push('style')
<link rel="stylesheet" href="{{asset('css/pagespeed.css')}}">
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.1/showdown.min.js"></script>
@endpush

@push('script')
<script src="{{asset('js/logic/trigerEnterButton.js')}}"></script>
<script src="{{asset('js/logic/pagespeed.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#performancePB").click(function () {
        $("#performance").fadeIn().removeClass("d-none").addClass("d-block");
        $("#accessibility").removeClass("d-block").addClass("d-none").fadeOut();
        $("#best-practices").removeClass("d-block").addClass("d-none").fadeOut();
        $("#seo").removeClass("d-block").addClass("d-none").fadeOut();
        $("#pwa").removeClass("d-block").addClass("d-none").fadeOut();

        $("#performancePB").addClass("active");
        $("#accessibilityPB").removeClass("active");
        $("#practicePB").removeClass("active");
        $("#seoPB").removeClass("active");
        $("#pwaPB").removeClass("active");
    });

    $("#accessibilityPB").click(function () {
        $("#performance").removeClass("d-block").addClass("d-none").fadeOut();
        $("#accessibility").fadeIn().removeClass("d-none").addClass("d-block");
        $("#best-practices").removeClass("d-block").addClass("d-none").fadeOut();
        $("#seo").removeClass("d-block").addClass("d-none").fadeOut();
        $("#pwa").removeClass("d-block").addClass("d-none").fadeOut();

        $("#performancePB").removeClass("active");
        $("#accessibilityPB").addClass("active");
        $("#practicePB").removeClass("active");
        $("#seoPB").removeClass("active");
        $("#pwaPB").removeClass("active");
    });

    $("#practicePB").click(function () {
        $("#performance").removeClass("d-block").addClass("d-none").fadeOut();
        $("#accessibility").removeClass("d-block").addClass("d-none").fadeOut();
        $("#best-practices").fadeIn().removeClass("d-none").addClass("d-block");
        $("#seo").removeClass("d-block").addClass("d-none").fadeOut();
        $("#pwa").removeClass("d-block").addClass("d-none").fadeOut();

        $("#performancePB").removeClass("active");
        $("#accessibilityPB").removeClass("active");
        $("#practicePB").addClass("active");
        $("#seoPB").removeClass("active");
        $("#pwaPB").removeClass("active");
    });

    $("#seoPB").click(function () {

        $("#performance").removeClass("d-block").addClass("d-none").fadeOut();
        $("#accessibility").removeClass("d-block").addClass("d-none").fadeOut();
        $("#best-practices").removeClass("d-block").addClass("d-none").fadeOut();
        $("#seo").fadeIn().removeClass("d-none").addClass("d-block");
        $("#pwa").removeClass("d-block").addClass("d-none").fadeOut();

        $("#performancePB").removeClass("active");
        $("#accessibilityPB").removeClass("active");
        $("#practicePB").removeClass("active");
        $("#seoPB").addClass("active");
        $("#pwaPB").removeClass("active");
    });

    $("#pwaPB").click(function () {
        $("#performance").removeClass("d-block").addClass("d-none").fadeOut();
        $("#accessibility").removeClass("d-block").addClass("d-none").fadeOut();
        $("#best-practices").removeClass("d-block").addClass("d-none").fadeOut();
        $("#seo").removeClass("d-block").addClass("d-none").fadeOut();
        $("#pwa").fadeIn().removeClass("d-none").addClass("d-block");

        $("#performancePB").removeClass("active");
        $("#accessibilityPB").removeClass("active");
        $("#practicePB").removeClass("active");
        $("#seoPB").removeClass("active");
        $("#pwaPB").addClass("active");
    });
});
</script>
@endpush

@section('page-speed')
active
@endsection

@section('test-n-checker')
active
@endsection
