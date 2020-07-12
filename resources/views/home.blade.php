@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<div class="d-flex flex-column-fluid mt-5">
  <div class="container">
    <div class="row">
      <?php $i = 1; ?>
      @foreach($data as $datas)
       @if($i % 3 == 0)
        <?php $model = 'success' ?>
       @elseif($i % 3 == 1)
       <?php $model = 'primary' ?>
       @else
       <?php $model = 'warning' ?>
       @endif
        <div class="col-lg-6 col-xl-4 mb-5">
          <div class="card card-custom wave wave-animate-slow wave-{{$model}} mb-8 mb-lg-0">
            <div class="card-body" style="max-height:300px;">
              <div class="d-flex align-items-center p-5">
                <div class="mr-6">
                  <span class="svg-icon svg-icon-success svg-icon-4x">
                  <img src="{{asset('media/svg/icons/Tools/'.$datas['img'].'.svg')}}" alt="">
                  </span>
                </div>
                <div class="d-flex flex-column">
                  <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                  {{$datas['title']}}
                  </a>
                  <div class="text-dark-75">
                   {{substr($datas['description'],0,240)}} ...
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                <a href="#" class="btn font-weight-bolder text-uppercase btn-{{$model}} py-4 px-6">GO TO TOOL</a>
              </div>
            </div>
          </div>
        </div>
        <?php $i++; ?>
      @endforeach
    </div>
  </div>
</div>
@endsection
