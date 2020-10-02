@extends('layouts.app')

@section('title', Lang::get('robot.meta-title'))

@section('meta-desc', Lang::get('robot.meta-desc'))

@section('meta-keyword', Lang::get('robot.meta-keyword'))

@section('conical','/en/robotstxt-generator')

@section('en-link','/en/robotstxt-generator')

@section('id-link','/id/robotstxt-generator')

@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>Robots.txt Generator</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">ROBOTS TXT GENERATOR </h1>
      <small>@lang('robot.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="form">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label><b>@lang('robot.drop1')</b></label>
                        <select class="form-control" id="defaultaccess">
                            <option value="">@lang('robot.drop1.1')</option>
                            <option value="Allow">@lang('robot.drop1.2')</option>
                            <option value="Disallow">@lang('robot.drop1.3')</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label><b>@lang('robot.drop2')</b></label>
                        <select class="form-control" id="crawldelay">
                            <option value="">@lang('robot.drop2.1')</option>
                            <option value="">@lang('robot.drop2.2')</option>
                            <option value="5">@lang('robot.drop2.3')</option>
                            <option value="10">@lang('robot.drop2.4')</option>
                            <option value="20">@lang('robot.drop2.5')</option>
                            <option value="60">@lang('robot.drop2.6')</option>
                            <option value="120">@lang('robot.drop2.7')>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label><b>@lang('robot.drop3')</b> @lang('robot.drop3.1')</label>
                        <input type="url" id="sitemapurl" class="form-control" placeholder="https://example.com/sitemap.xml"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><label><b>@lang('robot.drop4')</b></label></div>
            </div>
            <div class="row mb-5 directive" data-id="0">
                <div class="col-lg-3 mb-5">
                    <select class="form-control access-directive" name="" data-id="0">
                        <option value="">@lang('robot.drop1.1')</option>
                        <option value="Allow">@lang('robot.drop1.2')</option>
                        <option value="Disallow">@lang('robot.drop1.3')</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-5">
                    <select class="form-control user-agent" name="" data-id="0">
                        <option value="">@lang('robot.drop4.1')</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-5">
                    <input type="text" class="form-control directory" name="" placeholder="@lang('robot.drop4.2')" data-id="0"/>
                </div>
                <div class="col-lg-3 mb-5">
                    <button type="button" class="btn btn-success btn-block" id="add-directive">@lang('robot.btn add')</button>
                </div>
            </div>
        </div>
      </div>
      <div class="card-footer">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <button type="button" class="btn btn-primary" id="create-robot">@lang('robot.btn create')</button>
              </div>
          </div>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Card-->
</div>
<div class="row" id="result" style="display:none">
    <div class="col-lg-12">
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header">
                <div class="card-title">
                  <h2 class="card-label">@lang('robot.result')</h2>
                </div>
            </div>
            <div class="card-body">
                <textarea name="" id="robot-result" class="form-control" rows="20" readonly></textarea>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="button" class="btn btn-success" id="export">@lang('robot.export')</button>
                        <button type="button" class="btn btn-success" id="copy">@lang('robot.copy')</button>
                        <button type="button" class="btn btn-danger" id="reset">RESET</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc1')</p>
        <p>@lang('robot.desc1-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc2')</p>
        <p>@lang('robot.desc2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc3')</p>
        <p>@lang('robot.desc3-2')</p>
        <p>@lang('robot.desc3-3')</p>
        <p>@lang('robot.desc3-4')</p>
        <p>@lang('robot.desc3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc4')</p>
        <p>@lang('robot.desc4-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc5')</p>
        <table class="table border-0">
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Disallow: /admin/</td>
                  <td style="text-align: center;">=</td>
                  <td>@lang('robot.list-5-1')</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Disallow: /config/</td>
                  <td style="text-align: center;">=</td>
                  <td>@lang('robot.list-5-2')</td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>User-agent: *</td>
                  <td style="text-align: center;">=</td>
                  <td>@lang('robot.list-5-3')</td>
              </tr>
              <tr>
                  <td>4</td>
                  <td>Allow: /</td>
                  <td style="text-align: center;">=</td>
                  <td>@lang('robot.list-5-4')</td>
              </tr>
          </tbody>
      </table>
        <!-- <ol>
          <li>@lang('robot.list-5-1')</li>
          <li>@lang('robot.list-5-2')</li>
          <li>@lang('robot.list-5-3')</li>
          <li>@lang('robot.list-5-4')</li>
        </ol> -->
        <p>@lang('robot.desc5-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-6')</h2>
        </div>
      </div>
      <div class="card-body">
        <ul style="list-style-type:disc">
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-1')</p>
            <p>@lang('robot.sub-opt-1')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-2')</p>
                <p>@lang('robot.list-desc-6-1-2')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-3')</p>
                <p>@lang('robot.list-desc-6-1-3')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-4')</p>
                <p>@lang('robot.list-desc-6-1-4')</p>
              </li>
            </ol>
          </li>
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-2')</p>
            <p>@lang('robot.sub-opt-2')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-2-1')</p>
                <p>@lang('robot.list-desc-6-2-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-2-2')</p>
                <p>@lang('robot.list-desc-6-2-2')</p>
              </li>
            </ol>
          </li>
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-3')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-1')</p>
                <p>@lang('robot.list-desc-6-3-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-2')</p>
                <p>@lang('robot.list-desc-6-3-2')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-3')</p>
                <p>@lang('robot.list-desc-6-3-3')</p>
              </li>
            </ol>
          </li>
        </ul>
      </div>
    </div>
    <!--end::Card-->
  </div>
  @include('layouts/stickybar')
</div>
</div>
</div>

@endsection

<!-- @push('styles')
<style>
  .borderless td, .borderless th {
    border: 0 !important;
  }
</style>
@endpush -->

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
      "name": "Robot.txt Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/robotgenerator.js')}}"></script>
@endpush
@section('robotstxt-generator')
menu-item-active
@endsection
