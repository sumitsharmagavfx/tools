@extends('layouts.app')

@section('title', Lang::get('robot.meta-title'))

@section('meta-desc', Lang::get('robot.meta-desc'))

@section('meta-keyword', Lang::get('robot.meta-keyword'))

@section('conical','/en/robotstxt-generator')

@section('en-link','/en/robotstxt-generator')

@section('id-link','/id/robotstxt-generator')

@section('content')
@push('style')
<style media="screen">
  @media only screen and (max-width: 1200px) and (min-width: 992px) {
    #copy {
      height: 50px;
    }

    #test {
      height: 50px;
    }
  }
  @media only screen and ( max-width: 768px ) {
      .access-directive, .user-agent, .directory {
          margin-bottom: 10px;
      }
  }
</style>
@endpush
<div class="row">
  <div class="col-lg-12">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">ROBOTS TXT GENERATOR <small>@lang('robot.subtitle')</small></h3>
        </div>
      </div>
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
                <div class="col-lg-3">
                    <select class="form-control access-directive" name="" data-id="0">
                        <option value="">@lang('robot.drop1.1')</option>
                        <option value="Allow">@lang('robot.drop1.2')</option>
                        <option value="Disallow">@lang('robot.drop1.3')</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select class="form-control user-agent" name="" data-id="0">
                        <option value="">@lang('robot.drop4.1')</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control directory" name="" placeholder="@lang('robot.drop4.2')" data-id="0"/>
                </div>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-info btn-block" id="add-directive">@lang('robot.btn add')</button>
                </div>
            </div>
        </div>
      </div>
      <div class="card-footer">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <button type="button" class="btn btn-success btn-lg" id="create-robot">@lang('robot.btn create')</button>
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
                  <h3 class="card-label">@lang('robot.result')</h3>
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
          <h3 class="card-label">@lang('robot.title')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc1')</p>
        <p>@lang('robot.desc1-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">@lang('robot.title-2')</h3>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc2')</p>
        <p>@lang('robot.desc2-2')</p>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <div class="col-lg-4 col-12">
    <div class="card card-custom sticky" data-sticky="true" data-sticky-wrap="true" data-margin-top="100" data-sticky-for="991">
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
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

@push('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal', function(e) {
      var image = $(e.relatedTarget).attr('src');
      $(".img-responsive").attr("src", image);
    });
  });
</script>
@endpush

@push('script')
<script src="{{asset('js/logic/robotgenerator.js')}}"></script>
@endpush
@section('robotstxt-generator')
active
@endsection
