@extends('layouts.app')

@section('title', Lang::get('home.meta-title'))

@section('meta-desc', Lang::get('home.meta-desc'))

@section('meta-keyword', Lang::get('home.meta-keyword'))

@section('content')
<div class="d-flex flex-column-fluid mt-5">
  <div class="container">
    <div class="row">
      <?php $i = 1; ?>
      @foreach($data as $datum)
       @if($i % 3 == 0)
        <?php $model = 'success' ?>
       @elseif($i % 3 == 1)
       <?php $model = 'danger' ?>
       @else
       <?php $model = 'warning' ?>
       @endif
        <div class="col-lg-6 col-xl-4 mb-5">
          <div class="card card-custom wave wave-animate-slow wave-{{$model}} mb-8 mb-lg-0 card-stretch">
            <div class="card-body">
              <div class="d-flex align-items-center p-5">
                <div class="mr-6">
                  <span class="svg-icon svg-icon-{{$model}} svg-icon-3x">
                  <!--begin::Svg Icon -->
                      {!! $datum['img'] !!}
                  <!--end::Svg Icon -->
                  </span>
                </div>
                <div class="d-flex flex-column">
                  <span class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">{{$datum['title']}}</span>
                  <div class="text-dark-75">
                    @if(App::getLocale()=="id")
                   {{$datum['description']}}
                   @else
                   {{$datum['description-en']}}
                   @endif
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
              <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">
                <a href="{{'/'.$local.$datum['route']}}" class="btn font-weight-bolder text-uppercase btn-{{$model}} py-4 px-6">Launch</a>
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
