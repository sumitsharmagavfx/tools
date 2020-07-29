@extends('layouts.app')

@section('title', Lang::get('mobiletest.meta-title'))

@section('meta-desc', Lang::get('mobiletest.meta-desc'))

@section('meta-keyword', Lang::get('mobiletest.meta-keyword'))

@section('content')
@push('style')
<style media="screen">
  @media only screen and (max-width: 1200px) and (min-width: 992px)  {
    #copy {
      height: 50px;
    }
    #test{
      height: 50px;
    }
}
</style>
@endpush
<div id="loader" class="center"></div>
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">MOBILE FRIENDLY</h3>
                </div>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-lg-12 mb-5">
                      <h1 class="mb-4">@lang('mobiletest.title') </h1>
                      <p>@lang('mobiletest.subtitle')</p>
                  </div>
                      <div class="col-lg-10 mb-5">
                          <div id="spinner">
                              <input type="text" name="" class="form-control" value="" id="url" placeholder="@lang('mobiletest.question')">
                          </div>
                      </div>
                      <div class="col-lg-2 mb-5">
                          <button type="button" class="btn btn-success form-control" name="button" id="btn-check">@lang('mobiletest.btn-add')</button>
                      </div>
              </div>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Card-->
</div>
<div class="row row-success" id="result-section">
    <div class="col-lg-7">
        <div class="card card-custom card-stretch gutter-b mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">@lang('mobiletest.result-title')</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-custom mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xs-6 col-md-8">
                                <p class="mb-3 text-secondary" id="date-now"></p>
                                <h1 id="result-title"></h1>
                                <p class="mt-3 text-black" id="result-subtitle"></p>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="success-icon">
                                    <?xml version="1.0"?>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" width="100%" height="100%">
                                        <g><g><g><g>
                                            <circle cx="150.001" cy="226.085" r="11.718" data-original="#000000" class="active-path" data-old_color="#000000" fill="#36D153"/>
                                            <path d="M182.691,68.248h-65.382c-3.665,0-6.647,2.843-6.647,6.331v123.592c0,3.491,2.98,6.331,6.647,6.331h65.382     c3.665,0,6.647-2.843,6.647-6.331V74.579C189.336,71.088,186.356,68.248,182.691,68.248z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#36D153"/>
                                            <path d="M149.996,0C67.157,0,0.001,67.161,0.001,149.997S67.157,300,149.996,300s150.003-67.163,150.003-150.003     S232.835,0,149.996,0z M208.354,224.021c0,11.458-9.29,20.749-20.749,20.749h-75.214c-11.458,0-20.749-9.29-20.749-20.749V75.323     c0-11.458,9.29-20.749,20.749-20.749h75.214c11.458,0,20.749,9.29,20.749,20.749V224.021z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#36D153"/>
                                        </g></g></g></g>
                                    </svg>
                                </div>
                                <div class="error-icon">
                                    <?xml version="1.0"?>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 510 510" height="100%" viewBox="0 0 510 510" width="100%">
                                        <g><g>
                                            <path d="m326.671 315h3.329v-135h-137.737z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/>
                                            <path d="m317.763 120h-125.525c-6.748 0-12.238 5.49-12.238 12.238v17.762h150v-17.762c0-6.748-5.489-12.238-12.237-12.238z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/>
                                            <path d="m150 137.551v-5.313c0-23.29 18.948-42.238 42.238-42.238h125.525c23.29 0 42.237 18.948 42.237 42.238v216.238l80.802 81.158c44.678-47.462 69.198-109.161 69.198-174.634 0-68.113-26.524-132.149-74.688-180.312-48.163-48.164-112.199-74.688-180.312-74.688-65.098 0-126.461 24.244-173.813 68.435z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/>
                                            <path d="m284.337 315-104.337-104.796v104.796z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/><path d="m358.369 389.357c-5.053 17.668-21.338 30.643-40.606 30.643h-125.525c-23.29 0-42.238-18.948-42.238-42.238v-197.69l-89.541-89.936c-39.123 46.013-60.459 103.795-60.459 164.864 0 68.113 26.524 132.149 74.688 180.312 48.163 48.164 112.199 74.688 180.312 74.688 60.691 0 118.135-21.075 164.007-59.737z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/>
                                            <path d="m192.238 390h125.525c6.748 0 12.237-5.49 12.237-12.238v-16.898l-15.794-15.864h-134.206v32.762c0 6.748 5.49 12.238 12.238 12.238z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#E82525"/>
                                        </g></g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mobile-issues"></div>
                <div id="resource-issues"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card card-custom card-stretch gutter-b mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">@lang('mobiletest.result-screenshot')</h3>
                </div>
            </div>
            <div class="card-body">
                <img class="img-fluid img-result" id="result-image" style="border : 10px solid grey; border-radius : 50px"/>
            </div>
        </div>
    </div>
</div>
<div class="row row-error" id="error-section">
    <div class="col-lg-12">
        <div class="card card-custom card-stretch gutter-b mb-4">
            <div class="card-body text-center">
                <h3 id="error-msg" class="display-5"></h3>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-custom mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">@lang('mobiletest.title-2')</h3>
                </div>
            </div>
            <div class="card-body">
              <p>@lang('mobiletest.desc-2-1')</p>
              <p>@lang('mobiletest.desc-2-2')</p>
            </div>
        </div>
        <div class="card card-custom mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">@lang('mobiletest.title-3')</h3>
                </div>
            </div>
            <div class="card-body">
                <p>@lang('mobiletest.desc-3-1')</p>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-body">
                <img class="img-responsive form-control" style="height:auto;" src="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @push('script')
<script type="text/javascript">
$(document).ready(function () {
      $('#myModal').on('show.bs.modal', function (e) {
          var image = $(e.relatedTarget).attr('src');
          $(".img-responsive").attr("src", image);
      });
});
</script>
@endpush --}}

@push('script')
    <script src="{{asset('js/logic/mobiletest.js')}}"></script>
@endpush
@section('mobile-test')
    active
@endsection
