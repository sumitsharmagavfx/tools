@extends('layouts.app')

@section('title', Lang::get('sitemap.meta-title'))

@section('meta-desc', Lang::get('sitemap.meta-desc'))

@section('meta-keyword', Lang::get('sitemap.meta-keyword'))

@section('conical','/en/sitemap-generator')

@section('en-link')
    en/sitemap-generator
@endsection

@section('id-link')
    id/sitemap-generator
@endsection

@push('style')
<style media="screen">
  .btn-crawl {
    height: 60%;
    width: 100%;
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

  .btn-crawl:hover {
    background: var(--lightgrey);
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

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


  @media (max-width:767px) {
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

  .btn-download-sitemap {
    line-height: 1;
    width: 137px;
    background: var(--darkgrey);
    color: white;
    border-radius: 20px;
  }

  .btn-download-sitemap:hover {
    background: var(--black);
    color: white;
  }

  .btn-download-sitemap-disabled {
    line-height: 1;
    width: 137px;
    background: var(--grey);
    color: white;
    border-radius: 20px;
    cursor: not-allowed;
  }

  .btn-download-sitemap-disabled:hover {
    background: var(--grey);
    color: white;
    cursor: not-allowed;
  }

  .label-sitemap {
    width: 40px;
    font-weight: 400;
    background: var(--lightgrey);
    color: var(--darkgrey);
  }

  .sitemap-show-more {
    color:var(--darkgrey);
  }

  .result-row:hover .label-sitemap {
    background: var(--primaryblue);
    color: white;
  }

  .result-row:hover .sitemap-url-result {
    color: var(--black);
  }

  .result-row-show-more {
    cursor: pointer;
  }

  .result-row-show-more:hover .label-sitemap {
    background: var(--primaryblue);
    color: white;
  }

  .result-row-show-more:hover .sitemap-url-result, .result-row-show-more:hover .sitemap-show-more {
    color: var(--black);
  }

  /* DESCRIPTION TOOLS */
  @media only screen and (max-width: 767px) {
    .desktop-version {
      display: none;
    }
  }
  .local-collection-mobile .local-collection-body .custom-card {
    border-radius: 5px;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover {
    background: var(--primaryblue);
    cursor: pointer;
    color: white;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover .date-created {
    color: white !important;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover i {
    color: #1d7ebf !important;
  }
  .local-collection-mobile .local-collection-body .custom-card i:hover {
    color: #66757f !important;
  }
  @media only screen and (min-width: 701px) {
    .local-collection-mobile .local-collection-title {
      max-width: 70%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 700px) {
    .local-collection-mobile .local-collection-title {
      max-width: 65%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 600px) {
    .local-collection-mobile .local-collection-title {
      max-width: 60%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 526px) {
    .local-collection-mobile .local-collection-title {
      max-width: 55%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 470px) {
    .local-collection-mobile .local-collection-title {
      max-width: 50%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 420px) {
    .local-collection-mobile .local-collection-title {
      max-width: 45%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 390px) {
    .local-collection-mobile .local-collection-title {
      max-width: 40%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen and (max-width: 370px) {
    .local-collection-mobile .local-collection-title {
      max-width: 35%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media only screen adn (max-width: 346px) {
    .local-collection-mobile .local-collection-title {
      max-width: 30%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }
  @media (max-width:767px) {
    .container-description {
      padding-top: 1.25rem !important;
      padding-bottom: 1.25rem !important;
    }
  }
  .alert-features-new .alert-text .alert-title {
    color: var(--darkblue);
  }
  .alert-features-new .alert-text .label-alert-features {
    background: #0FBC0C;
    margin-bottom: 2px;
  }
  .alert-features-new .alert-close {
    position: absolute;
    top: 0;
    right: 0;
  }
  .alert-features-new .alert-close>button {
    opacity: 1;
  }
  .alert-features-new .alert-close>button>span>.icon-alert-close {
    color: var(--darkgrey) !important;
    font-weight: bolder;
  }
  .list-group-item-action:hover,
  .list-group-item-action:focus {
    background: var(--primaryblue);
    color: var(--white);
    cursor: pointer;
  }
  .list-group-item-action:hover .date-created {
    color: var(--white) !important;
  }
  .list-group-item-action:hover i {
    color: rgba(42, 47, 51, 0.3) !important;
  }
  .list-group-item-action:hover i:hover {
    color: var(--black) !important;
  }
  .list-group-item-action i {
    color: var(--grey) !important;
  }
  .btn-explore {
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }
  .btn-explore:hover {
    background: var(--lightgrey);
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }
  .robo-img {
    width: 60%;
    vertical-align: middle;
  }
  @media (min-width: 280px) and (max-width: 767px) {
    .robo-container {
      display: flex;
      justify-content: center;
      vertical-align: middle;
    }
    .robo-text-container {
      text-align: center;
    }
  }
  @media (min-width: 576px) and (max-width: 767px) {
    .robo-img {
      width: 40%;
      vertical-align: middle;
    }
    .robo-text-container {
      padding: 0 50px;
      text-align: center;
    }
  }
  @media (min-width: 768px) {
    .robo-container {
      display: flex;
      justify-content: flex-end;
      vertical-align: middle;
    }
  }

  .card-whats-new {
    background: var(--lightgrey);
    border-radius: 5px;
  }
  .label-tools-description {
    background: var(--lightgrey);
    color: var(--black);
    font-weight: bold;
  }
  .tools-description-points:hover .label-tools-description {
    background: var(--darkgrey);
    color: var(--white);
    font-weight: bold;
    text-decoration: none !important;
  }
  .tools-description-points {
    color: var(--primaryblue);
    cursor: pointer;
  }
  .tools-description-points:hover a {
    text-decoration: underline !important;
    color: #0F90E7 !important;
  }
  .checkbox-features {
    cursor: auto !important;
    opacity: 1 !important;
    margin-bottom: 10px !important;
  }
  .checkbox-features>span::after {
    width: 5px !important;
    height: 10px !important;
  }
  .checkbox-features>input:checked~span {
    background: var(--black);
  }
  .checkbox-features.features-disabled bdi {
    opacity: 0.6;
  }
  .label-whats-new {
    background: #0FBC0C;
  }
  .button-close-whats-new {
    color: var(--darkgrey);
    cursor: pointer;
  }
  .button-close-whats-new:hover {
    color: var(--black);
  }
  .view-all-release {
    cursor: pointer;
  }
  .view-all-release:hover {
    text-decoration: underline;
  }
  .container-description {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }
  .custom-features-accordion .card .card-header .card-title.collapsed,
  .custom-features-accordion .card .card-header .card-title::after {
    color: var(--darkgrey) !important;
  }
  .custom-features-accordion .card .card-header .card-title,
  .custom-features-accordion .card .card-header .card-title.collapsed::after {
    color: var(--darkgrey) !important;
  }
  .custom-features-accordion .card .card-header .card-title small {
    color: var(--darkgrey) !important;
  }
  .custom-features-accordion .card .card-header .card-title.collapsed span,
  .custom-features-accordion .card .card-header .card-title.collapsed small {
    color: var(--darkgrey) !important;
  }
  .local-collection-mobile .local-collection-body .custom-card {
    border-radius: 5px;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover {
    background: var(--primaryblue);
    cursor: pointer;
    color: white;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover .date-created {
    color: white !important;
  }
  .local-collection-mobile .local-collection-body .custom-card:hover i {
    color: #1d7ebf !important;
  }
  .local-collection-mobile .local-collection-body .custom-card i:hover {
    color: #66757f !important;
  }
  .local-collection-mobile {
    display: none !important;
  }
  @media only screen and (max-width: 767px) {
    .local-collection-mobile {
      display: block !important;
    }
    .local-collection-mobile .local-collection-title {
      max-width: 70%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .local-collection {
      display: none !important;
    }
  }
  .clear-all:hover {
    text-decoration: underline;
  }
  /* END DESCRIPTION TOOLS */
</style>
@endpush

@section('content')
    <div class="container container-tools mb-10">
        <div class="d-flex flex-column-fluid">
            <div class="container-fluid px-0">
                <h1 class="text-darkgrey font-weight-normal">SITEMAP GENERATOR</h1>
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
                            <input id="url" type="url" class="form-control sitemap-url" name="" value=""
                                   placeholder="INPUT / PASTE YOUR DOMAIN">
                        </div>
                        <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
                            <!-- CRAWL BUTTON -->
                            <button id="generate" type="button" class="btn btn-crawl" name="button">GENERATE</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="px-2 mb-3">
                                <span class="text-black font-15px font-weight-bolder">Results</span>
                                <span id="length-result" class="font-15px font-weight-bolder"
                                      style="color:#9A99A2">(0)</span>
                                <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
                            </div>
                            <div id="download-button" class="mb-3">
                            </div>
                        </div>
                        <div class="card card-custom mb-5">
                            <div class="card-body py-4 px-0">

                                <!-- BEFORE CRAWL -->
                                <div class="" id="noCrawlResult">
                                    <div class="text-center">
                                        <p class="d-block">No sitemap generated, please input your domain above!</p>
                                        <a href="#" class="links">Learn how to use this tools?</a>
                                    </div>
                                </div>

                                <!-- WHEN CRAWL -->
                                <div class="" id="generateCrawlResult">
                                    <div class="text-center">
                                        <p class="d-block">Generating your sitemap...</p>
                                    </div>
                                </div>

                                <!-- RESULT CRAWL -->
                                <div class="" id=result></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="px-2 mb-3 d-flex align-items-center" style="height:31.88px">
                            <span class="text-black font-15px font-weight-bolder">Progress</span>
                        </div>
                        <div class="card card-custom mb-5">
                            <div class="card-body py-4 px-5">
                                <div class="text-center">
                                    <p id="info" class="text-black font-weight-bold mb-0">Our robot is sleeping right
                                        now. Give him a task!</p>
                                    {{-- <p class="text-black font-weight-bold mb-0">Our robot is excecuting your task..</p>
                                    <p class="text-black font-weight-bold mb-0">Our robot is already finished your task.</p> --}}
                                    {{-- <div class="progress my-3">
                                      <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                    </div> --}}
                                    {{-- <div class="">
                                      <div class="spinner spinner-primary spinner-lg "></div>
                                    </div> --}}
                                    <p id="detail-progress" class="text-black font-weight-bold mb-3"></p>
                                    <span id="cancel-button"></span>
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
                                    <span class="clear-all font-15px pointer mr-3">Clear All</span>
                                </div>
                            </div>
                            <div class="local-collection-body">
                                <ul class="list-group" id="localsavedesktop"></ul>
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
                    <span class="clear-all font-15px pointer">Clear All</span>
                </div>
            </div>
            <div class="local-collection-body mt-3 px-5" id="localsavemobile">
                <div class="custom-card py-5 px-3">
                    <div class="d-flex justify-content-center text-center">
                        <span>This is your first impressions, no history yet!</span>
                    </div>
                </div>
                <div class="custom-card py-5 px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="Created at 09.17 | 8, JAN 2021"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                        </div>
                    </div>
                </div>
                <div class="custom-card py-5 px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="Created at 09.17 | 8, JAN 2021"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                        </div>
                    </div>
                </div>
                <div class="custom-card py-5 px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="Created at 09.17 | 8, JAN 2021"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                        </div>
                    </div>
                </div>
                <div class="custom-card py-5 px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="Created at 09.17 | 8, JAN 2021"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                        </div>
                    </div>
                </div>
                <div class="custom-card py-5 px-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management
                        </div>
                        <div class="d-flex align-items-center">
                            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark"
                               title="Created at 09.17 | 8, JAN 2021"></i>
                            <i class='bx bxs-x-circle bx-sm text-grey'></i>
                        </div>
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
    {{--
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
        <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>Sitemap Generator</b></li>
    </ol>
    </nav>
    <div class="card card-custom mb-5">
      <div class="card-header">
        <div class="card-title">
          <h1 class="card-label">SITEMAP GENERATOR </h1>
          <small>@lang('sitemap.sub-title')</small>
        </div>
      </div>
    </div>
    <div class="card card-custom gutter-b">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-5 gutter-b">
            <div class="" id="spin">
              <input id="url" type="text" class="form-control" name="" value="" placeholder="@lang('sitemap.input-hint')">
            </div>
          </div>
          <div class="col-lg-4 col-xl-3 col-xxl-2 gutter-b">
            <button type="button" class="btn btn-primary  form-control" name="button" id="generate">
              <i class="flaticon2-heart-rate-monitor"></i> @lang('sitemap.btn-generate')</button>
          </div>
        </div>
        <center>
          <div class="col-sm-12 col-md-6 col-lg-5" id="add" style="display:none">
            <img id="screeshoot" src="https://cmlabs.co/wp-content/uploads/2020/06/mural-cmlabs.jpg" width="100%" class="gutter-b" alt="mural cmlabs">
          </div>
        </center>
      </div>
    </div>
    <div class="card card-custom gutter-b" id="table" style="display:none">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('sitemap.result-title')</h2>
        </div>
      </div>
      <div class="card-body">
        <button id="download" type="button" class="btn btn-info" name="button">@lang('sitemap.btn-download')</button>
        <table class="table table-striped" id="url-table">
          <thead>
            <tr>
              <th scope="col" width="70px">Page #</th>
              <th scope="col">URL</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
    <div class="row" data-sticky-container>
      <div class="col-lg-8 mb-5">
        <div class="card card-custom">
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-1')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-1-1')</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-2')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-2-1')</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-3')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-3-1')</p>
            <p>@lang('sitemap.copy-3-2')</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-4')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-4-1')</p>
            <p>@lang('sitemap.copy-4-2')</p>
            <p>@lang('sitemap.copy-4-3')</p>
            <p>@lang('sitemap.copy-4-4')</p>
            <p>@lang('sitemap.copy-4-5')</p>
            <p>@lang('sitemap.copy-4-6')</p>
            <p>@lang('sitemap.copy-4-7')</p>
            <p>@lang('sitemap.copy-4-8')</p>
            <p>@lang('sitemap.copy-4-9')</p>
            <p>@lang('sitemap.copy-4-10')</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-5')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-5-1')</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h2 class="card-label">@lang('sitemap.copy-title-6')</h2>
            </div>
          </div>
          <div class="card-body">
            <p>@lang('sitemap.copy-6-1')</p>
            <p>@lang('sitemap.copy-6-2')</p>
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
      "name": "Sitemap Generator"
    }]
  }

    </script>
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x2js/1.2.0/xml2json.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script>
        const token = "{{csrf_token()}}"
        const URL_API = '{{env('URL_API')}}'
    </script>
    <script src="{{asset('js/logic/download.js')}}"></script>
    <script src="{{asset('js/logic/vkbeautify.0.99.00.beta.js')}}"></script>
    <script src="{{asset('js/logic/trigerEnterButton.js')}}"></script>
    <script src="{{asset('js/logic/sitemap.js')}}"></script>
@endpush

@section('sitemap')
    active
@endsection

@section('generator')
active
@endsection
