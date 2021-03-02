@extends('layouts.app')

@section('title', 'Technology Lookup')

@section('meta-desc', 'Technology Lookup')

@section('meta-keyword', 'Technology Lookup')

@section('conical','/en/technology-lookup')

@section('en-link')
en/technology-lookup
@endsection

@section('id-link')
id/technology-lookup
@endsection

@section('content')
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

  .btn-crawl-disabled {
    height: 60%;
    width: 100%;
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
    cursor: not-allowed;
  }
  .btn-crawl-disabled:hover {
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
    cursor: not-allowed;
  }
  .header-blue {
    background: var(--primaryblue);
    border-radius: 5px;
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
  .technology-name {
    color: var(--darkgrey);
    font-weight: bold;
  }
  .technology-name:hover {
    color: var(--black);
  }
</style>
@endpush

<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">TECHNOLOGY LOOKUP</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

      <div class="header-blue mt-10 mb-5 px-5 py-1">
        <div class="row d-flex align-items-center">
          <div class="col-sm-8 col-md-9 col-lg-8 col-xl-9 d-flex align-items-center py-1">
            <!-- BEFORE CRAWL -->
            <i id="empty-url" class='bx bxs-shield text-white bx-md mr-3'></i>

            <!-- HTTPS URL -->
            <i id="secure-url" class='bx bxs-check-shield text-white bx-md mr-3' style="display: none"></i>

            <!-- HTTP URL -->
            <i id="unsecure-url" class='bx bxs-shield-x text-white bx-md mr-3' style="display: none"></i>
            <input type="url" class="form-control lookup-url" name="" value="" placeholder="http://example.com" id="input-url" autocomplete="off">
          </div>
          <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 d-flex justify-content-end py-1">
            <!-- CRAWL BUTTON -->
            <button id="crawl-btn" type="button" class="btn btn-crawl" name="button" data-toggle="tooltip" data-theme="dark" title="You can only search 5 times in 1 hour">LOOKUP URL</button>

            <!-- CRAWL BUTTON REACHED LIMIT -->
{{--            <button id="crawlButtonDisabled" type="button" class="btn btn-crawl-disabled" name="button" data-toggle="tooltip" data-theme="dark" title="Currently your are reached the limit!">PLEASE WAIT 59:12</button>--}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="px-2 mb-3">
            <span class="text-black font-15px font-weight-bolder">Technologies</span>
            <span class="font-15px font-weight-bolder" style="color:#9A99A2" id="technology-lookup-result-total"></span>
            <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
          </div>
          <div class="card card-custom" id="technology-lookup-result-container">
            <div class="card-body py-4 px-0">

              <!-- BEFORE CRAWL -->
              <div class="" id="technology-lookup-result-empty">
                <div class="text-center">
                  <p class="d-block">No technology detected, please input your domain above!</p>
                  <a href="#" class="links">Learn how to use this tools?</a>
                </div>
              </div>

              <!-- RESULT CRAWL -->
              <div class="" id="technology-lookup-result-list" style="display: none">
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <!-- TECHNOLOGY ICON -->
                    <img src="{{ asset('media/technologyLookup/icons/Google Analytics.svg') }}" alt="" width="20px">
                    <!-- TECHNOLOGY NAME -->
                    <span class="mx-3 technology-name">Google Analytics</span>
                  </div>
                  <div class="">
                    <!-- TECHNOLOGY CATEGORIES -->
                    <span>Analytics</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <!-- TECHNOLOGY ICON -->
                    <img src="{{ asset('media/technologyLookup/icons/Handlebars.png') }}" alt="" width="20px" class="">
                    <!-- TECHNOLOGY NAME -->
                    <span class="mx-3 technology-name">Handlebars</span>
                    <!-- TECHNOLOGY VERSION -->
                    <span class="label label-primary-version label-inline font-weight-normal px-2">4.1.0</span>
                  </div>
                  <div class="">
                    <!-- TECHNOLOGY CATEGORIES -->
                    <span>JavaScript frameworks</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Google Font API.png') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Google Font API</span>
                  </div>
                  <div class="">
                    <span>Font scripts</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Laravel.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Laravel</span>
                  </div>
                  <div class="">
                    <span>Web frameworks</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Prism.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Prism</span>
                  </div>
                  <div class="">
                    <span>Miscellaneous</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Apache.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Apache</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">2.4.29</span>
                  </div>
                  <div class="">
                    <span>Web servers</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Quill.png') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Quill</span>
                  </div>
                  <div class="">
                    <span>Rich text editors</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/PHP.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">PHP</span>
                  </div>
                  <div class="">
                    <span>Programming languages</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Ubuntu.png') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Ubuntu</span>
                  </div>
                  <div class="">
                    <span>Operating systems</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/jsdelivr-icon.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">jsDelivr</span>
                  </div>
                  <div class="">
                    <span>CDN</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Google Tag Manager.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Google Tag Manager</span>
                  </div>
                  <div class="">
                    <span>Tag managers</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/jQuery.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">jQuery Migrate</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">1.2.1</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/SweetAlert2.png') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">SweetAlert2</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">10</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Select2.png') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Select2</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Moment.js.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Moment.js</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">2.26.0</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/jQuery.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">jQuery</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">1.11.0</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/default.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Slick</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">1.8.1</span>
                  </div>
                  <div class="">
                    <span>JavaScript libraries</span>
                  </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center mx-5">
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('media/technologyLookup/icons/Bootstrap.svg') }}" alt="" width="20px">
                    <span class="mx-3 technology-name">Bootstrap</span>
                    <span class="label label-primary-version label-inline font-weight-normal px-2">4.5.0</span>
                  </div>
                  <div class="">
                    <span>UI frameworks</span>
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
        <span class="clear-all font-15px pointer clear-history--btn">Clear All</span>
      </div>
    </div>
    <div class="local-collection-body mt-3 px-5" id="local-history-mobile">

    </div>
    <div id="mobile-version" class="px-5 accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
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

@endsection

@push('script')
<script type="text/javascript">

</script>
@endpush
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
      "name": "Technology Lookup"
    }]
  }
</script>
@endpush
@push('script')
    <script>
        const LOOKUP_API_URL = '{{ route('api.analyze-technology') }}';
    </script>
    <script src="{{asset('js/logic/technology-lookup.js')}}"></script>

    <script>
        $(document).ready(function(){
            getHistories();
        })
    </script>
@endpush
@section('technology-lookup')
active
@endsection

@section('test-n-checker')
active
@endsection
