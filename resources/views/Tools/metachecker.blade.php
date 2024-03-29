@extends('layouts.app')

@section('title', Lang::get('metachecker.meta-title'))

@section('meta-desc', Lang::get('metachecker.meta-desc'))

@section('meta-keyword', Lang::get('metachecker.meta-keyword'))

@section('conical','/en/page-title-meta-description-checker')

@section('en-link')
en/page-title-meta-description-checker
@endsection

@section('id-link')
id/page-title-meta-description-checker
@endsection

@section('content')
@push('style')
<style media="screen">
  #mobile {
    display: none;
  }

  #resulturlmobile {
    font-size: 13px;
    line-height: 16px;
    text-decoration: none solid rgb(0,102,33);
    color: #006621;
  }

  #resulttitlemobile {
      font-size: 20px;
      color: #1A0DAB;
      line-height: 26px;
      word-spacing: 0px;
      text-decoration: none solid rgb(26,13,171);
    }

  #resultdescmobile {
    font-size: 14px;
    color: #3C4043;
    line-height: 22.12px;
    word-spacing: 0px;
    text-decoration: none solid rgb(60,64,67);
  }

  table.table {
    width: 100%;
  }
  table tr th.meta-desktop,
  table tr td.meta-desktop {
    width: 60%;
    /* background: red; */
  }
  table tr th.meta-mobile,
  table tr td.meta-mobile {
    width: 40%;
    /* background: pink; */
  }
  .custom-wrapper-desktop {
    background-color: white;
    border: 1px solid #dadce6;
    width: 44em;
    height: 100%;
    margin: 1.5rem 0 1.5rem 3rem;
  }

  .custom-wrapper-mobile {
    border:1px solid #dadce6;
    width: 19em;
    height:100%;
    background: white;
    margin: 1.5rem 1rem 1.5rem 1rem;
  }

  .custom-fixed-size {
    text-align: left;
    width: 570px;
    height: 100px;
  }
  .custom-fixed-size-1 {
    text-align: left;
    height: 200px;
    width: 253px;
  }

  @media only screen and (min-width: 1400px) {
    .custom-fixed-size {
      width: 580px;
    }

    .custom-fixed-size-1 {
      transform: scale(0.9);
    }
  }

  /* zoom 110% */
  @media only screen and (max-width: 1300px) {
    .custom-fixed-size {
      width: 580px;
      transform: scale(0.9);
      margin-left: -27px;
    }

    .custom-wrapper-desktop { 
      width: 40em;
    }

    .custom-fixed-size-1 {
      margin-top: -18px;
      margin-left: -18px;
      transform: scale(0.85);
    }

    .custom-wrapper-mobile {
      width: 16em;
      height: 13em;
    }
  }

  /* zoom 125% */
  @media only screen and (max-width: 1200px) {
    .custom-fixed-size {
      transform: scale(0.68);
      margin-left: -90px;
      margin-top: -13px;
    }

    .custom-wrapper-desktop { 
      width: 30em;
      height: 6em;
    }

    .custom-fixed-size-1 {
      transform: scale(0.65);
      margin-top: -36px;
      margin-left: -43px;
    }

    .custom-wrapper-mobile {
      width: 13em;
      height: 10em;
    }
  }

  @media only screen and (max-width: 768px) {
      #desktop {
        display: none;
      }

      #mobile {
        display: block;
        width: 100%;
      }

      .custom-wrapper-mobile {
      border: 1px solid #dadce6;
      background: white;
      height: 100%;
      margin: 0;
      width: auto;
      }

      .custom-fixed-size-1 {
        transform: scale(0.9);
        margin: 0;
        width: 280px;      
      }
    }

    @media only screen and (max-width: 400px) {
      .custom-fixed-size-1 {
        transform: scale(0.8);
        margin-left: -15px;
      }
    }

    @media only screen and (max-width: 320px) {
      .custom-fixed-size-1 {
        transform: scale(0.72);
        margin-left: -35px;
        width: 280px;      
      }
    }

  }
</style>
@endpush
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>Title & Meta Description Checker</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5" id="kt_page_stretched_card">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">@lang('metachecker.title') </h1>
      <small>@lang('metachecker.sub-title')</small>
    </div>
  </div>
</div>
<div class="row" id="desktop">
  <div class="col-lg-12 mb-5">
    <div class="card card-custom card-stretch">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="meta-desktop text-center"><i class="fas fa-laptop icon-3x"></i></th>
            <th scope="col" class="meta-mobile text-center"><i class="fas fa-mobile icon-3x"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="meta-desktop"> 
              <center>
                <div class="custom-wrapper-desktop">
                  <div class="p-5 custom-fixed-size">
                    <span id="resulttitle">CMLABS / Content Marketing Labs Indonesia</span><br>
                    <span id="resulturl">https://cmlabs.co</span> <br>
                    <span id="resultdesc">@lang('metachecker.desc-result')</span>
                  </div>
                </div>
              </center>
            </td>
            <td class="meta-mobile">
              <center>
                <div class="custom-wrapper-mobile">
                  <div class="p-5 custom-fixed-size-1">
                    <span id="resulturlmobile">https://cmlabs.co</span><br>
                    <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
                    <span id="resultdescmobile">@lang('metachecker.desc-result')</span>
                  </div>
                </div>
              </center>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 mb-5" id="mobile">
    <div class="card card-custom card-stretch">
      <div class="card-header justify-content-center">
        <div class="card-title">
          <i class="fas fa-mobile-alt icon-3x"></i>
        </div>
      </div>
      <div class="card-body">
        <div class="custom-wrapper-mobile">
          <center>
            <div class="p-5 custom-fixed-size-1">
              <span id="resulturlmobile">https://cmlabs.co</span><br>
              <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
              <span id="resultdescmobile">@lang('metachecker.desc-result')</span>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row " data-sticky-container>
  <div class="col-lg-8 mb-5">
    <div class="card card-custom mb-5">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">URLs</h2>
        </div>
      </div>
      <div class="card-body">
        <input type="text" name="" class="form-control" value="https://cmlabs.co" id="url">
        <button type="button" class="btn btn-primary mt-5" name="button" id="execute">@lang('metachecker.btn-get')
        </button>
        <br> <br>
        <a onclick="copy('url')" style="cursor:pointer;"> <small>@lang('metachecker.copy')</small></a>
          <small id="alerturl"></small><br>
        <small id="urlcheck">eg. https://cmlabs.co/en/</small>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.page-title')</h2>
        </div>
      </div>
      <div class="card-body">
        <input id="title" type="text" name="" class="form-control" value="CMLABS / Content Marketing Labs Indonesia"> <br>
        <a onclick="copy('title')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small> </a>
          <small id="alerttitle"></small><br>
        <small id="titlecount"></small>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-8')</h2>
        </div>
      </div>
      <div class="card-body">
        <textarea id="desc" type="text" name="" rows="3" class="form-control">@lang('metachecker.desc-result')</textarea><br>
        <a onclick="copy('desc')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small></a>
          <small id="alertdesc"></small><br>
        <small id="desccount"></small>
      </div>
    </div>

    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-1')</h2>
        </div>
      </div>
      <div class="card-body">
        <p><a href="https://cmlabs.co/kamus-seo/apa-itu-serp/" target="_blank" style="color:blue" class="font-weight-bold">@lang('metachecker.copy-desc-1')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle" style="text-align:center"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td class="align-middle">
                <p class="font-weight-bold">@lang('metachecker.copy-subtitle-1')</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">URL</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>@lang('metachecker.copy-list-3-1')</li>
          <li>@lang('metachecker.copy-list-3-2')</li>
          <li>@lang('metachecker.copy-list-3-3')</li>
          <li>@lang('metachecker.copy-list-3-4')</li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-4-1')</p>
            <p>@lang('metachecker.copy-list-desc-4-1')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-4-2')</p>
            <p>@lang('metachecker.copy-list-desc-4-2')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-6')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-1-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-1-2')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-2')</p>
            <p>@lang('metachecker.copy-list-desc-6-2-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-2-2')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-3')</p>
            <p?>@lang('metachecker.copy-list-desc-6-3')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-4')</p>
            <p?>@lang('metachecker.copy-list-desc-6-4')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-7')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-7')</p>
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-7-1')</p>
            <p>@lang('metachecker.copy-list-desc-7-1')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-7-2')</p>
            <p>@lang('metachecker.copy-list-desc-7-2')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-8')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-8')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-9')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-10')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-10')</p>
          <ol>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-1')</p>
              <p>@lang('metachecker.copy-list-desc-10-1')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-2')</p>
              <p>@lang('metachecker.copy-list-desc-10-2')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-3')</p>
              <p>@lang('metachecker.copy-list-desc-10-3')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-4')</p>
              <p>@lang('metachecker.copy-list-desc-10-4')</p>
            </li>
          </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-8')</h2>
        </div>
      </div>
      <div class="card-body">
        <center>
          <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/serp-google-cmlabs-1024x820.png" width="100%" alt="serp google cmlabs">
          </div>
        </center>

        <p>@lang('metachecker.copy-9')</p>

        <h3 class="py-5">@lang('metachecker.copy-10')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-11')</th>
              <td>@lang('metachecker.copy-12')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-13')</th>
              <td>@lang('metachecker.copy-14')</td>
            </tr>
          </tbody>
        </table>

        <h3 class="py-5">@lang('metachecker.copy-15')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-16')</th>
              <td>@lang('metachecker.copy-17')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-18')</th>
              <td>@lang('metachecker.copy-19')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-20')</th>
              <td>@lang('metachecker.copy-21')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-22')</th>
              <td>@lang('metachecker.copy-23')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-24')</th>
              <td>@lang('metachecker.copy-25')</td>
            </tr>
          </tbody>
        </table>

        <h3 class="py-5">@lang('metachecker.copy-26')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-27')</th>
              <td>@lang('metachecker.copy-28')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-29')</th>
              <td>@lang('metachecker.copy-30')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-31')</th>
              <td>@lang('metachecker.copy-32')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-33')</th>
              <td>@lang('metachecker.copy-34')</td>
            </tr>
            <tr>
              <th scope="row">*@lang('metachecker.copy-35')</th>
              <td>@lang('metachecker.copy-36')</td>
            </tr>
          </tbody>
        </table>
        <center>
          <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/galaxy-note-10-cmlabs.png" width="100%" alt="galaxy note 10 cmlabs">
          </div>
        </center>
      </div>

    </div>
  </div>

  @include('layouts/stickybar')
</div>

</div>
</div>
<br>
<span id="titlesizer" class="pd-0"></span>
<span id="titlesizertemp"></span>
<span id="descsizer"></span>
<span id="descsizertemp"></span>

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
      "name": "Title & Meta Description Checker"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/metachecker.js')}}"></script>
@endpush
@section('title-checker')
menu-item-active
@endsection
