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

  @media (min-width: 992px) {

    .container-description,
    .container-tools {
      padding: 0px 100px;
    }
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

  .result-row:hover .label-sitemap {
    background: var(--primaryblue);
    color: white;
  }

  .result-row:hover .sitemap-url-result {
    color: var(--black);
  }
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
            <input type="url" class="form-control sitemap-url" name="" value="" placeholder="INPUT / PASTE YOUR DOMAIN">
          </div>
          <div class="col-sm-3 col-md-2 col-lg-3 col-xl-2 d-flex justify-content-end py-1">
            <!-- CRAWL BUTTON -->
            <button id="generateButton" type="button" class="btn btn-crawl" name="button">GENERATE</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="d-flex justify-content-between align-items-center">
            <div class="px-2 mb-3">
              <span class="text-black font-15px font-weight-bolder">Results</span>
              <span class="font-15px font-weight-bolder" style="color:#9A99A2">(18)</span>
              <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-download-sitemap" name="button">Download Sitemap</button>
              <button type="button" class="btn btn-download-sitemap-disabled" disabled name="button">Download Sitemap</button>
            </div>
          </div>
          <div class="card card-custom">
            <div class="card-body py-4 px-0">

              <!-- BEFORE CRAWL -->
              <div class="" id="noCrawlResult">
                <div class="text-center">
                  <p class="d-block">No sitemap generated, please input your domain above!</p>
                  <a href="#" class="links">Learn how to use this tools?</a>
                </div>
              </div>

              <!-- RESULT CRAWL -->
              <div class="" id=result>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">1</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">2</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">3</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">4</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">5</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">6</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">7</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">8</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">9</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
                <div class="d-flex align-items-center mx-5 result-row">
                  <!-- TECHNOLOGY ICON -->
                  <span class="label label-square label-sitemap">10</span>
                  <!-- TECHNOLOGY NAME -->
                  <span class="mx-3 sitemap-url-result">https://cmlabs.co</span>
                </div>
                <hr>
              </div>
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
</script>
<script src="{{asset('js/logic/download.js')}}"></script>
<script src="{{asset('js/logic/vkbeautify.0.99.00.beta.js')}}"></script>
<script src="{{asset('js/logic/trigerEnterButton.js')}}"></script>
<script src="{{asset('js/logic/sitemap.js')}}"></script>
@endpush

@section('sitemap')
active
@endsection
