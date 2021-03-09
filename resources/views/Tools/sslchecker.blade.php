@extends('layouts.app')

@section('title', Lang::get('sslchecker.meta-title'))

@section('meta-desc', Lang::get('sslchecker.meta-desc'))

@section('conical','/en/ssl-checker')

@section('en-link')
en/ssl-checker
@endsection

@section('id-link')
id/ssl-checker
@endsection

@section('content')
<div class="container container-tools mb-10">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <h1 class="text-darkgrey font-weight-normal">@lang('sslchecker.title')</h1>
            <span class="text-darkgrey h4 font-weight-normal">@lang('sslchecker.subtitle')</span>
            <div class="header-blue mt-10 mb-5 px-5 py-1">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-9 col-md-10 col-lg-9 col-xl-10 d-flex align-items-center py-1">
                        <i id="noCrawl" class='bx bxs-shield text-white bx-md mr-3'></i>
                        <i id="crawlHttps" style="display: none;" class='bx bxs-check-shield text-white bx-md mr-3'></i>
                        <i id="crawlHttp" style="display: none;" class='bx bxs-shield-x text-white bx-md mr-3'></i>
                        <input id="url" type="url" class="form-control lookup-url" name="" value="" autocomplete="off" placeholder="{{ Lang::get('layout.input-hint') }}">
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
                        <button id="crawlButton" type="button" class="btn btn-crawl" name="button">@lang('sslchecker.btn-check')</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="px-2 mb-3">
                        <span class="text-black font-15px font-weight-bolder">@lang('layout.result')</span>
                        <span class="font-15px what-is-this" style="color:#9A99A2">(@lang('layout.what-is-this'))</span>
                    </div>
                    <div class="card card-custom">
                        <div class="card-body py-4 px-0">
                            <div class="" id="noCrawlResult">
                                <div class="text-center">
                                    <p class="d-block">@lang('sslchecker.no-test-result')</p>
                                    <a href="#" class="links">@lang('layout.learn-how-to-use')</a>
                                </div>
                            </div>
                            <div class="" id=result>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="local-collection-desktop" class="local-collection">
                        <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                                <span class="text-black font-15px">@lang('layout.local-history')</span>
                            </div>
                            <div>
                                <span class="clear-all font-15px pointer mr-3">@lang('layout.clear-all')</span>
                            </div>
                        </div>
                        <div class="local-collection-body">
                            <ul class="list-group" id="localsavedesktop">
                            </ul>
                        </div>
                    </div>
                    <div class="desktop-version">
                        <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
                            <div class="card bg-transparent" style="">
                                <div class="card-header" id="headingOne2">
                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                                        @lang('layout.version') 2.3
                                    </div>
                                </div>
                                <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                                    <div class="card-body">
                                        <p>@lang('sslchecker.highlight')</p>
                                        <div class="d-flex align-items-center">
                                            <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
                                            <span class="text-darkgrey h6 mb-0">@lang('layout.updated') 8 Jan, 2021</span>
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
<div class="w-100">
    <div class="local-collection-mobile bg-white py-5">
        <div class="local-collection-header d-flex justify-content-between mb-3 w-100 px-5">
            <div class="d-flex flex-row align-items-center">
                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                <span class="text-black font-15px">@lang('layout.local-history')</span>
            </div>
            <div>
                <span class="clear-all font-15px pointer">@lang('layout.clear-all')</span>
            </div>
        </div>
        <div class="local-collection-body mt-3 px-5" id="localsavemobile">
        </div>
    </div>
</div>
<div class="" style="background:white">
    <div class="container container-description">
        <div class="row">
            <div class="col-md-9">
                <div class="" id="description-tab-1">
                    <h2>@lang('sslchecker.desc-1')</h2>
                    <p>@lang('sslchecker.desc-1-1')</p>
                    <p>@lang('sslchecker.desc-1-2')</p>
                </div>
                <div class="d-none" id="description-tab-2">
                    <h2>@lang('sslchecker.desc-2')</h2>
                    <p>@lang('sslchecker.desc-2-1')</p>
                    <p>@lang('sslchecker.desc-2-2')</p>
                </div>
                <div class="d-none" id="description-tab-3">
                    <h2>@lang('sslchecker.desc-3')</h2>
                    <p>@lang('sslchecker.desc-3-1')</p>
                    <p>@lang('sslchecker.desc-3-2')</p>
                    <p>@lang('sslchecker.desc-3-3')</p>
                    <p>@lang('sslchecker.desc-3-4')</p>
                    <ul>
                        <li>
                            <p>@lang('sslchecker.desc-3-4-1')</p>
                            <p>@lang('sslchecker.desc-3-4-1-1')</p>
                            <p>@lang('sslchecker.desc-3-4-1-2')</p>
                        </li>
                        <li>
                            <p>@lang('sslchecker.desc-3-4-2')</p>
                            <p>@lang('sslchecker.desc-3-4-2-1')</p>
                            <p>@lang('sslchecker.desc-3-4-2-2')</p>
                        </li>
                        <li>
                            <p>@lang('sslchecker.desc-3-4-3')</p>
                            <p>@lang('sslchecker.desc-3-4-3-1')</p>
                            <p>@lang('sslchecker.desc-3-4-3-2')</p>
                        </li>
                    </ul>
                </div>
                <div class="d-none" id="description-tab-4">
                    <h2>@lang('sslchecker.desc-4')</h2>
                </div>
                <div class="d-none" id="description-tab-5">
                    <h2>@lang('sslchecker.desc-5')</h2>
                </div>
                <div class="d-none" id="description-tab-6">
                    <h2>@lang('sslchecker.desc-6')</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-1">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description active" id="nav-label-tab-1">1</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-1')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-2">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-2">2</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-2')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-3">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-3">3</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-3')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-4">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-4">4</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-4')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-5">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-5">5</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-5')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-6">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-5">6</span>
                    </div>
                    <a class="">@lang('sslchecker.desc-6')</a>
                </div>
            </div>
        </div>
        <div class="my-10" style="background:var(--darkgrey); border-radius:20px">
            <div class="row">
                <div class="col-md-6 py-5">
                    <div class="robo-container">
                        <img src="{{asset('/media/images/robo-footer.png')}}" alt="" class="robo-img">
                    </div>
                </div>
                <div class="col-md-6 py-10 pr-10">
                    <div class="robo-text-container">
                        <h2 class="text-white">@lang('layout.banner-robo-title')</h2>
                        <p class="text-white">@lang('layout.banner-robo-desc')</p>
                        <button type="button" class="btn btn-explore " name="button">@lang('layout.banner-robo-btn')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <h2 class="text-black">@lang('layout.feature-title')</h2>
                <p class="text-black" style="font-size:1.5rem">@lang('layout.feature-sub-title') @lang('sslchecker.title')</p>
                <p class="text-black">@lang('layout.feature-desc')</p>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <span class="text-primaryblue">cmlabs SSL Checker Tool</span>
                    <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
                    <small class="text-grey">@lang('layout.updated') 25 Dec, 2020</small>
                </div>
                <p class="font-weight-bold mt-3">CMLABS Analytics opens many possible ways to access, organize, and visualize your SERRPs data to suit your business needs.</p>
                <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes12" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 1.0</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes13" /><span></span>&nbsp;&nbsp;<bdi>Exact and average Google Search Volume. Version
                        1.3</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
            </div>
        </div>
        <h2 class="text-black">@lang('layout.whats-new-title') @lang('sslchecker.title')</h2>
        <div class="row my-5">
            <div class="col-md-6 mb-5">
                <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
                    <div class="alert-text mb-5">
                        <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
                        <br />
                        <span class="font-weight-light">@lang('layout.whats-new-update') Dec 2, 2020</span>
                    </div>
                    <div class="alert-close pt-5 pr-5">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                        </button>
                    </div>
                    <span class="alert-features-text">@lang('sslchecker.whats-new-1')</span>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
                    <div class="alert-text mb-5">
                        <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
                        <br />
                        <span class="font-weight-light">@lang('layout.whats-new-update') Dec 2, 2020</span>
                    </div>
                    <div class="alert-close pt-5 pr-5">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                        </button>
                    </div>
                    <span class="alert-features-text">@lang('sslchecker.whats-new-2')</span>
                </div>
            </div>
        </div>
        <p class="text-black view-all-release">@lang('layout.view-web-release')</p>
    </div>
</div>

{{--
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
<li class="breadcrumb-item active" style="color:#2F80ED"><b>SSL Checker</b></li>
</ol>
</nav>
<div class="card card-custom mb-5">
    <div class="card-header">
        <div class="card-title">
            <h1 class="card-label">@lang('sslchecker.title')</h1>
            <small>@lang('sslchecker.subtitle')</small>
        </div>
    </div>
</div>
<div class="card card-custom mb-5">

    <div class="card-body">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <div id="input">
                    <input id="url" type="text" name="" class="form-control" value="" placeholder="@lang('sslchecker.placeholder')">
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-xxl-2 mb-5">
                <button id="btn-ssl" type="button" class="btn btn-primary form-control" name="button">
                    <i class="flaticon2-heart-rate-monitor"></i> @lang('sslchecker.copy-check')
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row" data-sticky-container>
    <div class="col-lg-8">
        <div class="card card-custom mb-5" id="result" style="display: none">
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-check')</h2>
                </div>
            </div>
            <div class="card-body">
                <h3 id="nothing" style="display: none"><i class="fa fa-times-circle text-danger mr-5"></i>@lang('sslchecker.not-ssl')</h3>
                <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample5">
                    <div class="card">
                        <div class="card-header" id="headingTwo5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo5">
                                <i class="fas fa-check text-success"></i> TLS Certificate
                            </div>
                        </div>
                        <div id="collapseTwo5" class="collapse show" data-parent="#accordionExample5">
                            <div class="card-body" id="tls-certificate">
                                <p>Common Name = tools.cmlabs.co</p>
                                <p>Subject Alternative Names = tools.cmlabs.co</p>
                                <p>Issuer = Let's Encrypt Authority X3</p>
                                <p>Serial Number = 4676161E51F10CE0193E8DD10CB359879F9</p>
                                <p>SHA1 Thumbprint = DDBF7706688D098176F8242B3842845C1890CE21</p>
                                <p>Key Length = 2048</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour5">
                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour5">
                                <i id="date-ex" class=""></i> TLS Certificate expiration
                            </div>
                        </div>
                        <div id="collapseFour5" class="collapse" data-parent="#accordionExample5">
                            <div class="card-body">
                                <p id="date">The certificate expires October 21, 2020 (77 days from today)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix5">
                            <div class="card-title collapsed" data-toggle="collapse" id="correct" data-target="#collapseSix5">

                            </div>
                        </div>
                        <div id="collapseSix5" class="collapse" data-parent="#accordionExample5">
                            <div class="card-body">
                                <p id="congrats">Congratulations! This certificate is correctly installed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-custom mb-5">
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-title-1')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('sslchecker.copy-desc-1-1')</p>
                <p>@lang('sslchecker.copy-desc-1-2')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-title-2')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('sslchecker.copy-desc-2-1')</p>
                <p>@lang('sslchecker.copy-desc-2-2')</p>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-title-3')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('sslchecker.copy-desc-3-1')</p>
                <p>@lang('sslchecker.copy-desc-3-2')</p>
                <p>@lang('sslchecker.copy-desc-3-3')</p>
                <p>@lang('sslchecker.copy-desc-3-4')</p>
                <ol>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-3-1')</p>
                        <p>@lang('sslchecker.list-desc-3-1-1')</p>
                        <p>@lang('sslchecker.list-desc-3-1-2')</p>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-3-2')</p>
                        <p>@lang('sslchecker.list-desc-3-2-1')</p>
                        <p>@lang('sslchecker.list-desc-3-2-2')</p>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-3-3')</p>
                        <p>@lang('sslchecker.list-desc-3-3-1')</p>
                        <p>@lang('sslchecker.list-desc-3-3-2')</p>
                    </li>
                </ol>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-title-4')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('sslchecker.copy-desc-4-1')</p>
                <p>@lang('sslchecker.copy-desc-4-2')</p>
                <ol>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-4-1')</p>
                        <p>@lang('sslchecker.list-desc-4-1')</p>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-4-2')</p>
                        <p>@lang('sslchecker.list-desc-4-2')</p>
                    </li>
                </ol>
                <p>@lang('sslchecker.copy-desc-4-3')</p>
                <ol>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-4-2-1')</p>
                        <p>@lang('sslchecker.list-desc-4-2-1')</p>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-4-2-2')</p>
                        <p>@lang('sslchecker.list-desc-4-2-2')</p>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.list-title-4-2-3')</p>
                        <p>@lang('sslchecker.list-desc-4-2-3')</p>
                    </li>
                </ol>
            </div>
            <div class="card-header">
                <div class="card-title">
                    <h2 class="card-label">@lang('sslchecker.copy-title-5')</h2>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('sslchecker.copy-desc-5-1')</p>
                <p>@lang('sslchecker.copy-desc-5-2')</p>
                <ol>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.ssl-type-1')</p>
                        <p>@lang('sslchecker.ssl-type-desc-1')</p>
                        <ol type="a">
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-1-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-1-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-1-2')</p>
                            </li>
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-1-2')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-2-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-2-2')</p>
                            </li>
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-1-3')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-3-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-1-3-2')</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p class="font-weight-bold">@lang('sslchecker.ssl-type-2')</p>
                        <p>@lang('sslchecker.ssl-type-desc-2')</p>
                        <ol type="a">
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-2-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-1-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-1-2')</p>
                            </li>
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-2-2')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-2-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-2-2')</p>
                            </li>
                            <li>
                                <p class="font-weight-bolder">@lang('sslchecker.ssl-type-list-title-2-3')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-3-1')</p>
                                <p>@lang('sslchecker.ssl-type-list-desc-2-3-2')</p>
                            </li>
                        </ol>
                    </li>
                </ol>
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
            "name": "SSL Checker"
        }]
    }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/trigerEnterButton.js')}}"></script>
<script src="{{asset('js/logic/sslchecker.js')}}"></script>
<script type="text/javascript">
    $('#toggle_button_webmaster').click();
</script>
@endpush
@section('ssl-checker')
active
@endsection

@section('test-n-checker')
active
@endsection
