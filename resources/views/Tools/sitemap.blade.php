@extends('layouts.app')

@section('title', Lang::get('sitemap.meta-title'))

@section('meta-desc', Lang::get('sitemap.meta-desc'))

@section('meta-keyword', Lang::get('sitemap.meta-keyword'))

@section('conical','/en/sitemap-generator')

@section('en-link','/en/sitemap-generator')

@section('id-link','/id/sitemap-generator')

@section('content')
<div class="card card-custom gutter-b">
  <div class="card-header">
    <div class="card-title">
      <h3 class="card-label">@lang('sitemap.title')</h3>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-10 gutter-b">
        <div class="" id="spin">
          <input id="url" type="text" class="form-control" name="" value="" placeholder="@lang('sitemap.input-hint')">
        </div>
      </div>
      <div class="col-md-2 gutter-b">
        <button type="button" class="btn btn-success form-control" name="button" id="generate">@lang('sitemap.btn-generate')</button>
      </div>
    </div>
    <center>
      <div class="col-sm-12 col-md-6 col-lg-5" id="add" style="display:none">
        <img id="screenshot" src="https://cmlabs.co/wp-content/uploads/2020/06/mural-cmlabs.jpg" width="100%" class="gutter-b" alt="">
      </div>
    </center>
{{--    <div class="progress mb-2" style="height:20px">--}}
{{--      <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progress-bar">0%</div>--}}
{{--    </div>--}}
{{--    <center><span id="detail-progress">0 of 0 Pages Crawled</span></center>--}}
  </div>
</div>
<div class="card card-custom gutter-b" id="table" style="display:none">
  <div class="card-header">
    <div class="card-title">
      <h3 class="card-label">@lang('sitemap.result-title')</h3>
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
          <h3 class="card-label">@lang('sitemap.copy-title-1')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('sitemap.copy-1-1')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">@lang('sitemap.copy-title-2')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('sitemap.copy-2-1')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">@lang('sitemap.copy-title-3')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('sitemap.copy-3-1')</p>
        <p>@lang('sitemap.copy-3-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">@lang('sitemap.copy-title-4')</h3>
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
          <h3 class="card-label">@lang('sitemap.copy-title-5')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('sitemap.copy-5-1')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">@lang('sitemap.copy-title-6')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('sitemap.copy-6-1')</p>
        <p>@lang('sitemap.copy-6-2')</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card card-custom sticky" data-sticky="true" data-margin-top="100" data-sticky-for="991">
      <!--begin::List Widget 4-->
      <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder text-dark">cmlabs Blog</h3>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
          @for ($i = 0; $i < count($dataEN); $i++)
          @if($i == 0)
          <?php $color = "bg-success" ?>
          @elseif($i % 4 == 0)
          <?php $color = "bg-primary" ?>
          @elseif($i % 3 == 0)
          <?php $color = "bg-danger" ?>
          @elseif($i % 2 == 0)
          <?php $color = "bg-warning" ?>
          @elseif($i % 1 == 0)
          <?php $color = "bg-info" ?>
          @endif
          <!--begin::Item-->
          @if ($i == 0)
          <div class="d-flex align-items-center">
          @else
          <div class="d-flex align-items-center mt-10">
          @endif
              <span class="bullet bullet-bar {{$color}} align-self-stretch"></span>
              <div class="d-flex flex-column flex-grow-1 mx-4">
                @if($local == "en")
                <a href="{{$dataEN[$i]['link']}}" data-toggle="tooltip" title="{{$dataEN[$i]['title']}}" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{substr($dataEN[$i]['title'],0,strpos($dataEN[$i]['title'], ' ', 20))}} ...</a>
                <span class="text-muted font-weight-bold">{{$dataEN[$i]['date']}}</span>
                @else
                <a href="{{$dataID[$i]['link']}}" data-toggle="tooltip" title="{{$dataID[$i]['title']}}" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">{{substr($dataID[$i]['title'],0,strpos($dataID[$i]['title'], ' ', 20))}} ...</a>
                <span class="text-muted font-weight-bold">{{$dataID[$i]['date']}}</span>
                @endif
            </div>
          </div>
          <!--end:Item-->
          @endfor
        </div>
        <!--end::Body-->
      </div>
      <!--end:List Widget 4-->
    </div>
  </div>
</div>


@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/x2js/1.2.0/xml2json.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
<script>
  const token = "{{csrf_token()}}"
</script>
<script src="{{asset('js/logic/download.js')}}"></script>
<script src="{{asset('js/logic/vkbeautify.0.99.00.beta.js')}}"></script>
<script src="{{asset('js/logic/sitemap.js')}}"></script>
@endpush

@section('sitemap')
active
@endsection
