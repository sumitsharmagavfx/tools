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

@section('content')
<div class="container container-tools mb-10">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <h1 class="text-darkgrey font-weight-normal">@lang('pagespeed.title')</h1>
            <span class="text-darkgrey h4 font-weight-normal">@lang('pagespeed.sub-title')</span>

            <div class="header-blue mt-10 mb-5 px-5 py-1">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-9 col-md-10 col-lg-9 col-xl-10 d-flex align-items-center py-1">
                        <i id="noCrawl" class='bx bxs-shield text-white bx-md mr-3 '></i>
                        <i id="crawlHttps" class='bx bxs-check-shield text-white bx-md mr-3' style="display: none;"></i>
                        <i id="crawlHttp" class='bx bxs-shield-x text-white bx-md mr-3' style="display: none;"></i>
                        <input type="url" id="url" class="form-control pagespeed-url" name="" value="" autocomplete="off" placeholder="INPUT / PASTE YOUR DOMAIN">
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
                        <button id="analysis-button" type="button" class="btn btn-crawl" name="button">@lang('pagespeed.generate-btn')</button>
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
                            <div class="row justify-content-center px-4" id="pagespeed-tab">
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                    <div class="circleProgressBar active" id="performancePB">
                                        <div class="progress progress-red performance" data-percentage="0">
                                            <span class="progress-left">
                                                <span class="progress-bar progress-bar-performance"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar progress-bar-performance"></span>
                                            </span>
                                            <div class="progress-value" style="width:100%">
                                                <div class="value-performance value-red">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bold text-center mb-4 h6 text-black">Peformance</h2>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                    <div class="circleProgressBar" id="accessibilityPB">
                                        <div class="progress progress-red accessibility" data-percentage="0">
                                            <span class="progress-left">
                                                <span class="progress-bar progress-bar-accessibility"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar progress-bar-accessibility"></span>
                                            </span>
                                            <div class="progress-value" style="width:100%">
                                                <div class="value-accessibility value-red">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="font-weight-bold text-center mb-4 h6 text-black">Accesibility</h2>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                    <div class="circleProgressBar" id="practicePB">
                                        <div class="progress progress-red best-practices" data-percentage="0">
                                            <span class="progress-left">
                                                <span class="progress-bar progress-bar-best-practices"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar progress-bar-best-practices"></span>
                                            </span>
                                            <div class="progress-value" style="width:100%">
                                                <div class="value-best-practices value-red">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class=" font-weight-bold text-center mb-4 h6 text-black">Best Practies</h2>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                    <div class="circleProgressBar" id="seoPB">
                                        <div class="progress progress-red seo" data-percentage="0">
                                            <span class="progress-left">
                                                <span class="progress-bar progress-bar-seo"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar progress-bar-seo"></span>
                                            </span>
                                            <div class="progress-value" style="width:100%">
                                                <div class="value-seo value-red">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class=" font-weight-bold text-center mb-4 h6 text-black">SEO</h2>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl">
                                    <div class="circleProgressBar" id="pwaPB">
                                        <div class="progress progress-red pwa" data-percentage="0">
                                            <span class="progress-left">
                                                <span class="progress-bar progress-bar-pwa"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar progress-bar-pwa"></span>
                                            </span>
                                            <div class="progress-value" style="width:100%">
                                                <div class="value-pwa value-red">
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class=" font-weight-bold text-center mb-4 h6 text-black">PWA</h2>
                                    </div>
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
                                            <div class="progress progress-red performance result" data-percentage="0">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-performance"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-performance"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-performance value-red">
                                                        0
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
                                            <div class="progress progress-red accessibility result" data-percentage="0">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-accessibility"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-accessibility"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-accessibility value-red">
                                                        0
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
                                            <div class="progress progress-red practices result" data-percentage="0">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-best-practices"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-best-practices"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-best-practices value-red">
                                                        0
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
                                            <div class="progress progress-red seo result" data-percentage="0">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-seo"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-seo"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-seo value-red">
                                                        0
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
                                            <div class="progress progress-red pwa result" data-percentage="0">
                                                <span class="progress-left">
                                                    <span class="progress-bar progress-bar-pwa"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar progress-bar-pwa"></span>
                                                </span>
                                                <div class="progress-value" style="width:100%">
                                                    <div class="value-pwa value-red">
                                                        0
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
                    <div id="local-collection-desktop" class="local-collection">
                        <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                                <span class="text-black font-15px">@lang('layout.local-history')</span>
                            </div>
                            <div>
                                <span class="clear-all font-15px pointer mr-3" onclick="clearAll()">@lang('layout.clear-all')</span>
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
                                        <p>@lang('pagespeed.highlight')</p>
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
                <span class="clear-all font-15px pointer clear-history--btn">@lang('layout.clear-all')</span>
            </div>
        </div>
        <div class="local-collection-body mt-3 px-5" id="local-history-mobile">

        </div>
        <div id="mobile-version" class="px-5 accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
            <div class="card bg-transparent" style="">
                <div class="card-header" id="headingOne2">
                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                        @lang('layout.version') 2.3
                    </div>
                </div>
                <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                    <div class="card-body">
                        <p>@lang('pagespeed.highlight')</p>
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

<div class="" style="background:white">
    <div class="container container-description">
        <div class="row">
            <div class="col-md-9">
                <div class="" id="description-tab-1">
                    <h2 class="text-black">@lang('pagespeed.desc-1')</h2>
                    <p class="text-black">@lang('pagespeed.desc-1-1')</p>
                    <p class="text-black">@lang('pagespeed.desc-1-2')</p>
                </div>
                <div class="d-none" id="description-tab-2">
                    <h2 class="text-black">@lang('pagespeed.desc-2')</h2>
                    <p class="text-black">@lang('pagespeed.desc-2-1')</p>
                </div>
                <div class="d-none" id="description-tab-3">
                    <h2 class="text-black">@lang('pagespeed.desc-3')</h2>
                    <p class="text-black">@lang('pagespeed.desc-3-1')</p>
                </div>
                <div class="d-none" id="description-tab-4">
                    <h2 class="text-black">@lang('pagespeed.desc-4')</h2>
                    <p class="text-black">@lang('pagespeed.desc-4-1')</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>@lang('pagespeed.desc-4-2')</th>
                                <th>@lang('pagespeed.desc-4-3')</th>
                                <th>@lang('pagespeed.desc-4-4')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">FCP</td>
                                <td>[0, 1000ms]</td>
                                <td>(1000ms, 3000ms)</td>
                                <td>Over 3000ms</td>
                            </tr>
                            <tr>
                                <td scope="col">FID</td>
                                <td>[0, 100ms]</td>
                                <td>(100ms, 300ms)</td>
                                <td>Over 300ms</td>
                            </tr>
                            <tr>
                                <td scope="col">LCP</td>
                                <td>[0, 2500ms]</td>
                                <td>(2500ms, 4000ms)</td>
                                <td>Over from 4000ms</td>
                            </tr>
                            <tr>
                                <td scope="col">CLS</td>
                                <td>[0, 0,1]</td>
                                <td>(0,1, 0,25)</td>
                                <td>Over from 0,25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-none" id="description-tab-5">
                    <h2 class="text-black">@lang('pagespeed.desc-5')</h2>
                    <p class="text-black">@lang('pagespeed.desc-5-1')</p>
                    <p class="text-black">@lang('pagespeed.desc-5-2')</p>
                </div>
                <div class="d-none" id="description-tab-6">
                    <h2 class="text-black">@lang('pagespeed.desc-6')</h2>
                    <p class="text-black">@lang('pagespeed.desc-6-1')</p>
                </div>
                <div class="d-none" id="description-tab-7">
                    <h2 class="text-black">@lang('pagespeed.desc-7')</h2>
                    <p class="text-black">@lang('pagespeed.desc-7-1')</p>
                </div>
                <div class="d-none" id="description-tab-8">
                    <h2 class="text-black">@lang('pagespeed.desc-8')</h2>
                    <p class="text-black">@lang('pagespeed.desc-8-1')</p>
                    <p class="text-black">@lang('pagespeed.desc-8-2')</p>
                    <ul>
                        <li>@lang('pagespeed.desc-8-3')</li>
                        <li>@lang('pagespeed.desc-8-4')</li>
                        <li>@lang('pagespeed.desc-8-5')</li>
                    </ul>
                </div>
                <div class="d-none" id="description-tab-9">
                    <h2 class="text-black">@lang('pagespeed.desc-9')</h2>
                    <p class="text-black">@lang('pagespeed.desc-9-1')</p>
                    <ul>
                        <li>@lang('pagespeed.desc-9-2')</li>
                        <li>@lang('pagespeed.desc-9-3')</li>
                        <li>@lang('pagespeed.desc-9-4')</li>
                    </ul>
                </div>
                <div class="d-none" id="description-tab-10">
                    <h2 class="text-black">@lang('pagespeed.desc-10')</h2>
                    <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">
                        <div class="card">
                            <div class="card-header" id="headingOne2">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                                    @lang('pagespeed.desc-10-1')
                                </div>
                            </div>
                            <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-2')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
                                    @lang('pagespeed.desc-10-3')
                                </div>
                            </div>
                            <div id="collapseTwo2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-4')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2">
                                    @lang('pagespeed.desc-10-5')
                                </div>
                            </div>
                            <div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-6')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour2">
                                    @lang('pagespeed.desc-10-7')
                                </div>
                            </div>
                            <div id="collapseFour2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-8')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive2">
                                    @lang('pagespeed.desc-10-9')
                                </div>
                            </div>
                            <div id="collapseFive2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-10')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSix2">
                                    @lang('pagespeed.desc-10-11')
                                </div>
                            </div>
                            <div id="collapseSix2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-12')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSeven2">
                                    @lang('pagespeed.desc-10-13')
                                </div>
                            </div>
                            <div id="collapseSeven2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-14')
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight2">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseEight2">
                                    @lang('pagespeed.desc-10-15')
                                </div>
                            </div>
                            <div id="collapseEight2" class="collapse" data-parent="#accordionExample2">
                                <div class="card-body">
                                    @lang('pagespeed.desc-10-16')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-1">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description active" id="nav-label-tab-1">1</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-1')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-2">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-2">2</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-2')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-3">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-3">3</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-3')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-4">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-4">4</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-4')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-5">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-5">5</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-5')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-6">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-6">6</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-6')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-7">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-7">7</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-7')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-8">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-8">8</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-8')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-9">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-9">9</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-9')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-10">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-10">10</span>
                    </div>
                    <a class="">@lang('pagespeed.desc-10')</a>
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
                <p class="text-black" style="font-size:1.5rem">@lang('layout.feature-sub-title') @lang('pagespeed.title')</p>
                <p class="text-black">@lang('pagespeed.feature-desc')</p>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <span class="text-primaryblue">cmlabs Page Speed Test</span>
                    <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
                    <small class="text-grey">@lang('layout.updated') 25 Dec, 2020</small>
                </div>
                <p class="font-weight-bold mt-3">@lang('pagespeed.feature-sub-title')</p>
                <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes12" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-1')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes13" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-2')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-3')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-4')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-5')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-6')</bdi></label>
                <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>@lang('pagespeed.feature-7')</bdi></label>
            </div>
        </div>
        <h2 class="text-black">@lang('layout.whats-new-title') @lang('pagespeed.title')</h2>
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
                    <span class="alert-features-text">@lang('pagespeed.whats-new-1')</span>
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
                    <span class="alert-features-text">@lang('pagespeed.whats-new-2')</span>
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
    $('#toggle_button_webmaster').click();
</script>
@endpush

@section('page-speed')
active
@endsection

@section('test-n-checker')
active
@endsection
