@extends('layouts.app')

@section('title', Lang::get('sslchecker.meta-title'))

@section('meta-desc', Lang::get('sslchecker.meta-desc'))

@section('meta-keyword', Lang::get('sslchecker.meta-keyword'))

@section('conical','/en/ssl-checker')

@section('en-link')
en/ssl-checker
@endsection

@section('id-link')
id/ssl-checker
@endsection

@push('style')
<style media="screen">
@media only screen and (min-width: 768px) {
  #local-collection-desktop .local-collection-title {
    max-width: 70%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

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

.lookup-url {
  background: var(--primaryblue);
  border: none;
  color: white;
}
.lookup-url::placeholder {
  color: white;
}
.lookup-url:focus {
  background: var(--primaryblue);
  border: none;
  color: white;
}
</style>
@endpush

@section('content')

<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">SSL CHECKER</h1>
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
            <input id="url" type="url" class="form-control lookup-url" name="" value="" placeholder="INPUT / PASTE YOUR DOMAIN">
          </div>
          <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
            <!-- CRAWL BUTTON -->
            <button id="crawlButton" type="button" class="btn btn-crawl" name="button">CHECK URL</button>
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

              <!-- BEFORE CRAWL -->
              <div class="" id="noCrawlResult">
                <div class="text-center">
                  <p class="d-block">No SSL checked, please input your domain above!</p>
                  <a href="#" class="links">Learn how to use this tools?</a>
                </div>
              </div>

              <!-- RESULT CRAWL -->
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
                <span class="text-black font-15px">Your Local History</span>
              </div>
              <div>
                <span class="clear-all font-15px pointer mr-3">Clear All</span>
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
                    Version 2.3
                  </div>
                </div>
                <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
    </div>
  </div>
</div>
<div class="" style="background:white">
  <div class="container container-description">
    <h2 class="text-black">Advance your writing</h2>
    <div class="row">
      <div class="col-md-9">
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
            <p class="text-white">The Search Engine Optimization (SEO) Starter Guide provides best practices to make it easier for search engines to crawl, index, and understand your content.</p>
            <button type="button" class="btn btn-explore " name="button">Explore today?</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-10">
      <div class="col-md-6">
        <h2 class="text-black">Available features</h2>
        <p class="text-black" style="font-size:1.5rem">Explore the full features of cmlabs WORD COUNTER</p>
        <p class="text-black">CMLABS will enhance your writing capabilities and incorporate strategical thinking to provide technical advice from the our data.</p>
      </div>
      <div class="col-md-6">
        <div class="d-flex align-items-center">
          <span class="text-primaryblue">cmlabs Words Counter</span>
          <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
          <small class="text-grey">Updated 25 Dec, 2020</small>
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
    <h2 class="text-black">What’s new on cmlabs Words Counter</h2>
    <div class="row my-5">
      <div class="col-md-6 mb-5">
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
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
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
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
    },{
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
@endpush
@section('ssl-checker')
active
@endsection
