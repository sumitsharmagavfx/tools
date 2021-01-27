@extends('layouts.app')

@section('title', Lang::get('event.meta-title'))

@section('meta-desc', Lang::get('event.meta-desc'))

@section('meta-keyword', Lang::get('event.meta-keyword'))

@section('conical','/en/json-ld-event-schema-generator')

@section('en-link')
en/json-ld-event-schema-generator
@endsection

@section('id-link')
id/json-ld-event-schema-generator
@endsection

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
</style>
@endpush
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="event">
  <ol class="event" style="background-color:#EEF0F8 !important;">
    <li class="event-item"><a href="/{{$local}}" class="menu-event">@lang('home.homepage')</a></li>
    <li class="event-item active" style="color:#2F80ED"><b>JSON-LD event Schema Generator</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">JSON-LD event SCHEMA GENERATOR </h1>
      <small>@lang('event.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="formevent">
          <input type="text" name="" class="form-control mb-5 name" placeholder="@lang('event.name') :" value="" data-id="0">
          {{-- <input type="text" name="" class="form-control mb-5 imageUrl" placeholder="@lang('event.imageUrl') :" value="" data-id="0"> --}}
          <input type="text" name="" class="form-control mb-5 description" placeholder="@lang('event.description') :" value="" data-id="0">
          <input type="date" name="" class="form-control mb-5 startDate" placeholder="@lang('event.startDate') :" value="" data-id="0">
          <input type="time" name="" class="form-control mb-5 starttime" placeholder="@lang('event.starttime') :" value="" data-id="0">
          <input type="date" name="" class="form-control mb-5 endDate" placeholder="@lang('event.endDate') :" value="" data-id="0">
          <input type="time" name="" class="form-control mb-5 endtime" placeholder="@lang('event.endtime') :" value="" data-id="0">
          <select name="" id="" class="form-control mb-5 eventStatus" data-id="0">
            <option value="">Event Status</option>
            <option value="scheduled">Scheduled</option>
            <option value="postponed">postponed</option>
            <option value="cancelled">Cancelled</option>
          </select>

          <select name="" id="" class="form-control mb-5 attendance" data-id="0">
            <option value="">Attendance Mode</option>
            <option value="online">Online</option>
            <option value="offline">Offline</option>
            <option value="mixed">Mixed</option>
          </select>

          <select name="" id="" class="form-control mb-5 performer" data-id="0">
            <option value="">Performer @type</option>
            <option value="person">Person</option>
            <option value="musicgroup">Music Group</option>
            <option value="dancegroup">Dance Group</option>
          </select>
          <input type="text" name="" class="form-control mb-5 namePerformer" placeholder="@lang('event.namePerformer') :" value="" data-id="0">
          <select name="" id="" class="form-control mb-5 currency" data-id="0">
            <option value="">Currency</option>
            <option value="USD">United States Dollar</option>
            <option value="GBP">British Pound Sterling</option>
            <option value="CAD">Canadian Dollar</option>
          </select>
          <div id="formevent2"></div>
        </div>
        <button type="button" class="btn btn-primary" name="button" id="add-event">
        <i class="flaticon2-plus"></i> @lang('event.btn-add-ticket-type')
        </button>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <form class="" target="_blank" rel="nofollow noopener noreferrer" action="https://search.google.com/test/rich-results" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <button type="button" id="copy" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="far fa-copy"></i> @lang('event.btn-copy')
              </button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="test" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="fas fa-circle"></i> @lang('event.btn-test')</button>
            </div>
          </div>
          <textarea name="code_snippet" style="resize:none" rows="50" class="form-control" id="json-format"></textarea>
        </div>
      </form>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Card-->
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('event.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td style="width:60%;" class="align-middle">
                <p>@lang('event.desc-1-1')</p>
              </td>
              <td class="align-middle"> <img id="1" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-1-min-1024x898.png" class="form-control" style="height:auto" alt="json 1 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('event.desc-1-2')</p>
              </td>
              <td class="align-middle"> <img id="2" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-2-min-1024x509.png" class="form-control" style="height:auto" alt="json 2 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('event.desc-1-3')</p>
              </td>
              <td class="align-middle"> <img id="3" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-3-min-1024x502.png" class="form-control" style="height:auto" alt="json 3 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('event.desc-1-4')</p>
                <p>@lang('event.desc-1-5')</p>
              </td>
              <td class="align-middle"> <img id="4" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-4-min-1024x556.png" class="form-control" style="height:auto" alt="json 4 min"> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('event.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('event.desc-2-1')</p>
        <p>@lang('event.desc-2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('event.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('event.desc-3-1')</p>
        <p>@lang('event.desc-3-2')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td>@lang('event.desc-3-3')</td>
            </tr>
          </tbody>
        </table>
        <p>@lang('event.desc-3-4')</p>
        <ul>
          <li>@lang('event.li-1')</li>
          <li>@lang('event.li-2')</li>
          <li>@lang('event.li-3')</li>
        </ul>
        <p>@lang('event.desc-3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('event.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('event.desc-4-1')</p>
        <p>@lang('event.desc-4-2')</p>
        <p>@lang('event.desc-4-3')</p>
        <p>@lang('event.desc-4-4')</p>
        <p>@lang('event.desc-4-5')</p>
        <p>@lang('event.desc-4-6')</p>
        <p>@lang('event.desc-4-7')</p>
        <p>@lang('event.desc-4-8')</p>
        <p>@lang('event.desc-4-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('event.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('event.desc-5-1')</p>
        <p>@lang('event.desc-5-2')</p>
        <h3 class="font-weight-bold py-5">@lang('event.title-6')</h3>
        <p>@lang('event.desc-6-1')</p>
        <p>@lang('event.desc-6-2')</p>
        <p>@lang('event.desc-6-3')</p>
        <h3 class="font-weight-bold py-5">@lang('event.title-7')</h3>
        <p>@lang('event.desc-7-1')</p>
        <p>@lang('event.desc-7-2')</p>
        <p>@lang('event.desc-7-3')</p>
        <p>@lang('event.desc-7-4')</p>
        <h3 class="font-weight-bold py-5">@lang('event.title-8')</h3>
        <p>@lang('event.desc-8-1')</p>
        <p>@lang('event.desc-8-2')</p>
        <p>@lang('event.desc-8-3')</p>
        <p>@lang('event.desc-8-4')</p>
        <h3 class="font-weight-bold py-5">@lang('event.title-9')</h3>
        <p>@lang('event.desc-9-1')</p>
        <p>@lang('event.desc-9-2')</p>
        <p>@lang('event.desc-9-3')</p>
        <p>@lang('event.desc-9-4')</p>
        <p>@lang('event.desc-9-5')</p>
      </div>
    </div>
    <!--end::Card-->
  </div>
  @include('layouts/stickybar')
</div>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img class="img-responsive form-control" alt="image modal" style="height:auto;" src="" />
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
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "eventList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "@lang('home.homepage')",
      "item": "{{url('/')}}/{{$local}}"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "JSON-LD event Schema Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/event-json.js')}}"></script>
@endpush
@section('json-ld-event')
active
@endsection
