@extends('layouts.app')

@section('title')
    PAGE SPEED
@endsection

@section('content')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">PAGE SPEED <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10 mb-5">
                    <div id="spinner">
                        <input type="text" name="" class="form-control" value="" id="url" placeholder="Input Your URL">
                    </div>
                </div>
                <div class="col-lg-2 mb-5">
                    <button type="button" class="btn btn-success form-control" name="button" id="analysis-button">Analysis!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-custom gutter-b">
        <div class="card-header p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <a href="#result" id="nav-performance">
                        <div class="col-12 col-sm-5 col-md-4 col-lg">
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
                            <h3 class="h6 font-weight-bold text-center mb-4">PERFORMANCE</h3>
                        </div>
                    </a>

                    <a href="#result" id="nav-accessibility">
                        <div class="col-12 col-sm-5 col-md-4 col-lg">
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
                            <h3 class="h6 font-weight-bold text-center mb-4">ACCESIBILITY</h3>
                        </div>
                    </a>

                    <a href="#result" id="nav-best-practices">
                        <div class="col-12 col-sm-5 col-md-4 col-lg">
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
                            <h3 class="h6 font-weight-bold text-center mb-4">BEST PRACTICES</h3>
                        </div>
                    </a>

                    <a href="#result" id="nav-seo">
                        <div class="col-12 col-sm-5 col-md-4 col-lg">
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
                            <h3 class="h6 font-weight-bold text-center mb-4">SEO</h3>
                        </div>
                    </a>

                    <a href="#result" id="nav-pwa">
                        <div class="col-12 col-sm-5 col-md-4 col-lg">
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
                            <h3 class="h6 font-weight-bold text-center mb-4">PWA</h3>
                        </div>
                    </a>

                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="row justify-content-center mb-5">
                <table style="border:5px solid #EEEEEE;">
                    <tbody id="result">
                    <tr>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #F64E60; text-align:center"></span>
                            0-49
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #FFA800; text-align:center"></span>
                            50-89
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #1BC5BD; text-align:center"></span>
                            90-100
                        </td>
                        <td style="width:20px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--Performance--}}
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

{{--accessibility--}}
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
                <!-- <h3 class="h6 font-weight-bold text-center mb-4">ACCESIBILITY</h3> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow accessibility-audit" id="accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-accessibility-audit" id="pass-accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-accessibility-audit" id="not-app-accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-accessibility-audit" id="manual-accessibility-audit"></div>
            </div>
        </div>
    </div>

{{--best practice--}}
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
                <!-- <h3 class="h6 font-weight-bold text-center mb-4">BEST PRACTICES</h3> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow best-practices-audit" id="best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-best-practices-audit" id="pass-best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-best-practices-audit" id="not-app-best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-best-practices-audit" id="manual-best-practices-audit"></div>
            </div>
        </div>
    </div>

{{--seo--}}
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
                <!-- <h3 class="h6 font-weight-bold text-center mb-4">SEO</h3> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow seo-audit" id="seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-seo-audit"></div>
            </div>
        </div>
    </div>

{{--pwa--}}
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
                <!-- <h3 class="h6 font-weight-bold text-center mb-4">PWA</h3> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow pwa-audit" id="pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-pwa-audit"></div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{asset('css/pagespeed.css')}}">
@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.1/showdown.min.js"></script>
@endpush

@push('script')
    <script src="{{asset('js/logic/pagespeed.js')}}"></script>
@endpush

@section('home')
    active
@endsection

