@extends('layouts.app')

@section('title', 'Hreflang Checker')

@section('meta-desc', 'Hreflang Checker')

@section('meta-keyword', 'Hreflang Checker')

@section('conical','/en/hreflang-checker')

@section('en-link')
    en/hreflang-checker
@endsection

@section('id-link')
    id/hreflang-checker
@endsection

@push('style')
    <style media="screen">
        .header-blue {
            background: var(--primaryblue);
            border-radius: 5px;
        }

        .hreflang-url {
            background: var(--primaryblue);
            border: none;
            color: white;
        }

        .hreflang-url::placeholder {
            color: white;
        }

        .hreflang-url:focus {
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

        .hreflang-url-result {
            color: var(--darkgrey);
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .btn-add-question {
                width: 100%;
            }
        }


        @media only screen and (min-width: 768px) {
            #local-collection-desktop .local-collection-title {
                max-width: 70%;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

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

        .btn-download-hreflang {
            line-height: 1;
            width: 137px;
            background: var(--darkgrey);
            color: white;
            border-radius: 20px;
        }

        .btn-download-hreflang:hover {
            background: var(--black);
            color: white;
        }

        .btn-download-hreflang-disabled {
            line-height: 1;
            width: 137px;
            background: var(--grey);
            color: white;
            border-radius: 20px;
            cursor: not-allowed;
        }

        .btn-download-hreflang-disabled:hover {
            background: var(--grey);
            color: white;
            cursor: not-allowed;
        }

        .label-hreflang {
            width: 25px;
            font-weight: 400;
            background: var(--lightgrey);
            color: var(--darkgrey);
        }

        .hreflang-show-more {
            color: var(--darkgrey);
        }


        .result-row:hover .label-hreflang {
            background: var(--primaryblue);
            color: white;
        }

        .result-row:hover .hreflang-url-result {
            color: var(--black);
        }

        .result-row-show-more {
            cursor: pointer;
        }

        .result-row-show-more:hover .label-hreflang {
            background: var(--primaryblue);
            color: white;
        }

        .result-row-show-more:hover .hreflang-url-result, .result-row-show-more:hover .hreflang-show-more {
            color: var(--black);
        }

        @media only screen and (max-width: 575px) {
            .number {
                min-width: 12%;
                width: 12%;
            }

            .url {
                min-width: 30%;
                width: 30%;
            }

            .hreflang {
                min-width: 20%;
                width: 20%;
            }

            .language {
                min-width: 22%;
                width: 22%;
            }

            .region {
                min-width: 16%;
                width: 16%;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .number {
                min-width: 8%;
                width: 8%;
            }

            .url {
                min-width: 50%;
                width: 50%;
            }

            .hreflang {
                min-width: 12%;
                width: 12%;
            }

            .language {
                min-width: 15%;
                width: 15%;
            }

            .region {
                min-width: 15%;
                width: 15%;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .number {
                min-width: 8%;
                width: 8%;
            }

            .url {
                min-width: 50%;
                width: 50%;
            }

            .hreflang {
                min-width: 12%;
                width: 12%;
            }

            .language {
                min-width: 15%;
                width: 15%;
            }

            .region {
                min-width: 15%;
                width: 15%;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .number {
                min-width: 8%;
                width: 8%;
            }

            .url {
                min-width: 49%;
                width: 49%;
            }

            .hreflang {
                min-width: 13%;
                width: 13;
            }

            .language {
                min-width: 15%;
                width: 15%;
            }

            .region {
                min-width: 15%;
                width: 15%;
            }
        }

        @media only screen and (min-width: 1200px) and (max-width: 1399px) {
            .number {
                min-width: 6%;
                width: 6%;
            }

            .url {
                min-width: 43%;
                width: 43%;
            }

            .hreflang {
                min-width: 11%;
                width: 11%;
            }

            .language {
                min-width: 15%;
                width: 15%;
            }

            .region {
                min-width: 25%;
                width: 25%;
            }
        }

        @media only screen and (min-width: 1400px) {
            .number {
                min-width: 6%;
                width: 6%;
            }

            .url {
                min-width: 45%;
                width: 45%;
            }

            .hreflang {
                min-width: 9%;
                width: 9%;
            }

            .language {
                min-width: 15%;
                width: 15%;
            }

            .region {
                min-width: 25%;
                width: 25%;
            }
        }

        .result-row .number p, .result-row .url p, .result-row .hreflang p, .result-row .language p, .result-row .region p {
            max-width: 99%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: var(--darkgrey);
        }

        .result-row:hover .number p, .result-row:hover .url p, .result-row:hover .hreflang p, .result-row:hover .language p, .result-row:hover .region p {
            color: var(--black);
            font-weight: bold
        }
    </style>
@endpush

@section('content')
    <div class="container container-tools mb-10">
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid px-0">
                <h1 class="text-darkgrey font-weight-normal">HREFLANG CHECKER</h1>
                <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

                <div class="header-blue mt-10 mb-5 px-5 py-1">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-9 col-md-10 col-lg-9 col-xl-10 d-flex align-items-center py-1">
                            <!-- BEFORE CRAWL -->
                            <i id="empty-url" class='bx bxs-shield text-white bx-md mr-3'></i>

                            <!-- HTTPS URL -->
                            <i id="secure-url" class='bx bxs-check-shield text-white bx-md mr-3'
                               style="display: none"></i>

                            <!-- HTTP URL -->
                            <i id="unsecure-url" class='bx bxs-shield-x text-white bx-md mr-3'
                               style="display: none"></i>
                            <input type="url" class="form-control hreflang-url" name="" value=""
                                   placeholder="http://example.com" id="input-url" autocomplete="off">
                        </div>
                        <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
                            <!-- CRAWL BUTTON -->
                            <button id="check-btn" type="button" class="btn btn-crawl" name="button">CHECK URL</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="px-2 mb-3">
                            <span class="text-black font-15px font-weight-bolder">Results</span>
                            <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
                        </div>
                        <div class="card card-custom mb-5">
                            <div class="card-body py-4 px-0">


                                <!-- RESULT CRAWL -->
                                <div class="" id=>
                                    <div class="d-flex mx-5 mb-5" id="hreflang-result-header" style="display: none !important;">
                                        <div class="number font-weight-bolder text-black">
                                            <p class="mb-0">No.</p>
                                        </div>
                                        <div class="url font-weight-bolder text-black">
                                            <p class="mb-0">URL</p>
                                        </div>
                                        <div class="hreflang font-weight-bolder text-black">
                                            <p class="mb-0">Hreflang</p>
                                        </div>
                                        <div class="language font-weight-bolder text-black">
                                            <p class="mb-0">Language</p>
                                        </div>
                                        <div class="region font-weight-bolder text-black">
                                            <p class="mb-0">Region</p>
                                        </div>
                                    </div>

                                    <div id="hreflang-result-list">
                                        <p class="text-center d-block">No URL checked, please input your domain
                                            above!</p>
                                    </div>

                                    <!-- SHOW MORE BUTTON START -->
                                {{--                <div class="d-flex align-items-center justify-content-between mx-5 result-row-show-more">--}}
                                {{--                  <div class="">--}}
                                {{--                    <span class="label label-square label-hreflang">...</span>--}}
                                {{--                    <span class="mx-3 hreflang-url-result">Show More</span>--}}
                                {{--                  </div>--}}
                                {{--                  <div class="d-flex align-items-center">--}}
                                {{--                    <i class='bx bxs-chevron-down hreflang-show-more'></i>--}}
                                {{--                  </div>--}}
                                {{--                </div>--}}
                                <!-- SHOW MORE BUTTON END -->

                                </div>

                                <!-- BEFORE CRAWL -->
                                <div class="" id="no-crawl-result">
                                    <div class="text-center">
                                        <a href="#" class="links">Learn how to use this tools?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-2 mb-3 d-flex align-items-center">
                            <span class="text-black font-15px font-weight-bolder">Progress</span>
                        </div>
                        <div class="card card-custom mb-5">
                            <div class="card-body py-4 px-5">
                                <div class="text-center">
                                    <p class="text-black font-weight-bold mb-0" id="progress-stop-message">Our robot is sleeping right now. Give
                                        him a task!</p>
                                    <p class="text-black font-weight-bold mb-0" id="progress-start-message" style="display: none">Our robot is excecuting your task..</p>
                                    <p class="text-black font-weight-bold mb-0" id="progress-finish-message" style="display: none">Our robot is already finished your
                                        task.</p>
                                    <div class="progress my-3">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                             id="progress-bar-loader">

                                        </div>
                                    </div>
                                    {{--                <p class="text-black font-weight-bold mb-3">10 from 40 pages</p>--}}
                                    <button type="button" class="btn btn-cancel-disabled" disabled name="button"
                                            id="cancel-request-btn">Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="local-collection-desktop" class="local-collection">
                            <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
                                <div class="d-flex flex-row align-items-center">
                                    <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                                    <span class="text-black font-15px">Your Local History</span>
                                </div>
                                <div>
                                    <span class="clear-all font-15px pointer mr-3 clear-history--btn">Clear All</span>
                                </div>
                            </div>
                            <div class="local-collection-body">
                                <ul class="list-group" id="local-history">
                                    <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                        <div class="d-flex justify-content-center text-center">
                                            <span>This is your first impressions, no history yet!</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="desktop-version">
                            <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion"
                                 id="accordionExample2">
                                <div class="card bg-transparent" style="">
                                    <div class="card-header" id="headingOne2">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                                            Version 2.3
                                        </div>
                                    </div>
                                    <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                                        <div class="card-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                id est laborum.</p>
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

    <div class="w-100">
        <div class="local-collection-mobile bg-white py-5">
            <div class="local-collection-header d-flex justify-content-between mb-3 w-100 px-5">
                <div class="d-flex flex-row align-items-center">
                    <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                    <span class="text-black font-15px">Your Local History</span>
                </div>
                <div>
                    <span class="clear-all font-15px pointer clear-history--btn">Clear All</span>
                </div>
            </div>
            <div class="local-collection-body mt-3 px-5" id="local-history-mobile">
                <div class="custom-card py-5 px-3">
                    <div class="d-flex justify-content-center text-center">
                        <span>This is your first impressions, no history yet!</span>
                    </div>
                </div>
            </div>
            <div id="mobile-version"
                 class="px-5 accordion accordion-light accordion-toggle-arrow custom-features-accordion"
                 id="accordionExample2">
                <div class="card bg-transparent" style="">
                    <div class="card-header" id="headingOne2">
                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                            Version 2.3
                        </div>
                    </div>
                    <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.</p>
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

    <div class="" style="background:white">
        <div class="container container-description">
            <h2 class="text-black">Advance your writing</h2>
            <div class="row">
                <div class="col-md-9">
                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                    <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-3">
                    <div class="d-flex align-items-center mb-5 tools-description-points">
                        <div class="mr-2" style="width:24px !important; height: 24px !important;">
                            <span class="label label-lg label-tools-description">1</span>
                        </div>
                        <a href="#" class="">Why does SEO important for writing?</a>
                    </div>
                    <div class="d-flex align-items-center mb-5 tools-description-points">
                        <div class="mr-2" style="width:24px !important; height: 24px !important;">
                            <span class="label label-lg label-tools-description">2</span>
                        </div>
                        <a href="#" class="">How search engine works?</a>
                    </div>
                    <div class="d-flex align-items-center mb-5 tools-description-points">
                        <div class="mr-2" style="width:24px !important; height: 24px !important;">
                            <span class="label label-lg label-tools-description">3</span>
                        </div>
                        <a href="#" class="">The basic of writing?</a>
                    </div>
                    <div class="d-flex align-items-center mb-5 tools-description-points">
                        <div class="mr-2" style="width:24px !important; height: 24px !important;">
                            <span class="label label-lg label-tools-description">4</span>
                        </div>
                        <a href="#" class="">Measuring your writing?</a>
                    </div>
                    <div class="d-flex align-items-center mb-5 tools-description-points">
                        <div class="mr-2" style="width:24px !important; height: 24px !important;">
                            <span class="label label-lg label-tools-description">5</span>
                        </div>
                        <a href="#" class="">Hiring profesional content strategy and consultant?</a>
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
                            <h2 class="text-white">Writing Starter Guide</h2>
                            <p class="text-white">The Search Engine Optimization (SEO) Starter Guide provides best
                                practices to make it easier for search engines to crawl, index, and understand your
                                content.</p>
                            <button type="button" class="btn btn-explore " name="button">Explore today?</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-md-6">
                    <h2 class="text-black">Available features</h2>
                    <p class="text-black" style="font-size:1.5rem">Explore the full features of cmlabs WORD COUNTER</p>
                    <p class="text-black">CMLABS will enhance your writing capabilities and incorporate strategical
                        thinking to provide technical advice from the our data.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <span class="text-primaryblue">cmlabs Words Counter</span>
                        <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
                        <small class="text-grey">Updated 25 Dec, 2020</small>
                    </div>
                    <p class="font-weight-bold mt-3">CMLABS Analytics opens many possible ways to access, organize, and
                        visualize your SERRPs data to suit your business needs.</p>
                    <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox"
                                                                                            disabled="disabled"
                                                                                            checked="checked"
                                                                                            name="Checkboxes12"/><span></span>&nbsp;&nbsp;<bdi>
                            Daily domain ranking on SERP. Version 1.0
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox"
                                                                                            disabled="disabled"
                                                                                            checked="checked"
                                                                                            name="Checkboxes13"/><span></span>&nbsp;&nbsp;<bdi>
                            Exact and average Google Search Volume. Version
                            1.3
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input
                            type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily
                            domain ranking on SERP. Version 0.1
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input
                            type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily
                            domain ranking on SERP. Version 0.1
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input
                            type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily
                            domain ranking on SERP. Version 0.1
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input
                            type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily
                            domain ranking on SERP. Version 0.1
                        </bdi>
                    </label>
                    <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input
                            type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily
                            domain ranking on SERP. Version 0.1
                        </bdi>
                    </label>
                </div>
            </div>
            <h2 class="text-black">What’s new on cmlabs Words Counter</h2>
            <div class="row my-5">
                <div class="col-md-6 mb-5">
                    <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch"
                         role="alert" style="background: var(--lightgrey); display:block">
                        <div class="alert-text mb-5">
                            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span
                                class="label label-dot label-alert-features"></span>
                            <br/>
                            <span class="font-weight-light">Last Update Dec 2, 2020</span>
                        </div>
                        <div class="alert-close pt-5 pr-5">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                            </button>
                        </div>
                        <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting
            from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives.</span>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch"
                         role="alert" style="background: var(--lightgrey); display:block">
                        <div class="alert-text mb-5">
                            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span
                                class="label label-dot label-alert-features"></span>
                            <br/>
                            <span class="font-weight-light">Last Update Dec 2, 2020</span>
                        </div>
                        <div class="alert-close pt-5 pr-5">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                            </button>
                        </div>
                        <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting
            from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives. </span>
                    </div>
                </div>
            </div>
            <p class="text-black view-all-release">View all web-release?</p>
        </div>
    </div>
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
      "name": "Hreflang Checker"
    }]
  }

    </script>
@endpush
@push('script')
    <script type="text/javascript">
        const HREFLANG_API_URL = '{{ route('api.analyze-hreflang') }}';
    </script>
    <script src="{{ asset('js/logic/hreflang-checker.js') }}"></script>
    <script>
        getHistories();
    </script>
@endpush

@section('hreflang-checker')
    active
@endsection

@section('test-n-checker')
active
@endsection
