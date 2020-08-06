<div class="col-lg-4">
  <div class="card card-custom sticky" data-sticky="true" data-margin-top="100" data-sticky-for="991">
    <!--begin::List Widget 4-->
    <div class="card card-custom card-stretch">
      <!--begin::Header-->
      <div class="card-header border-0">
        <h2 class="card-title font-weight-bolder text-dark">cmlabs Blog</h2>
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
