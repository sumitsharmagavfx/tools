@extends('layouts.app')

@section('title', Lang::get('home.meta-title'))

@section('meta-desc', Lang::get('home.meta-desc'))

@section('meta-keyword', Lang::get('home.meta-keyword'))

@section('en-link')
en
@endsection
@section('id-link')
id
@endsection

@section('content')
<div class="d-flex flex-column-fluid mt-5">
  <div class="container">
    <div class="row"  data-sticky-container>
        <div class="col-lg-8 mb-5">
            <div class="card card-custom mb-5">
                <div class="card-body">
                    <p>
                        PT CMLABS INDONESIA DIGITAL adalah sebuah perusahaan yang fokus pada jasa SEO, Marketing dan platform pendukung aktifitas SEO.
                        Umumnya kami menggunakan nama pendek yaitu CMLABS, yang merupakan singkatan dari Content Marketing Labs.
                        <a href="https://cmlabs.co" style="color: #0095EB">Kunjungi Website</a>
                    </p>
                </div>
            </div>
            <div class="card card-custom gutter-b">
                <div class="card-header">
                  <div class="card-title">
                    <h3 class="card-label">
                     Features
                    </h3>
                   </div>
                  </div>
                <div class="card-body">
                    @foreach($data as $datum)
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 mr-7">
                                    <div class="symbol symbol-50 symbol-lg-120">
                                        <span class="svg-icon svg-icon-3x">
                                        <!--begin::Svg Icon -->
                                            {!! $datum['img'] !!}
                                        <!--end::Svg Icon -->
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                        <div class="mr-3">
                                            <p class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$datum['title']}}</p>
                                            <div class="d-flex flex-wrap my-2">
                                                <a href="{{'/'.$local.$datum['route']}}" class="mr-lg-8 mr-5 mb-lg-0 mb-2" style="color:#0095EB">Lihat Detail</a>
                                            </div>
                                        </div>
                                        <div class="my-lg-0 my-1">
                                            <a href="{{'/'.$local.$datum['route']}}" class="btn btn-sm btn-success font-weight-bolder text-uppercase" style="background-color: #0095EB">Launch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('layouts/stickybar')
    </div>
  </div>
</div>
@endsection
<!-- home -->
