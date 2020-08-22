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
@push('style')
<style media="screen">
@media only screen and (max-width: 600px) and (min-width: 425px) {
  .button {
    display: none;
  }
  .image{
    width: 20%;
  }
  .title{
    width: 80%;
  }
}

@media only screen and (max-width: 425px) {
  .button {
    display: none;
  }
  .image{
    width: 25%;
  }
  .title{
    width: 75%;
  }
}
</style>
@endpush
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
                        <a href="https://cmlabs.co" style="color: #0095EB"><b>Kunjungi Website</b></a>
                    </p>
                </div>
            </div>
            <div class="card card-custom gutter-b">
                <div class="card-header">
                  <div class="card-title">
                    <h2 class="card-label">
                     Features
                    </h3>
                   </div>
                  </div>
                <div class="card-body">
                    @foreach($data as $datum)
                    <table class="mb-10" width="100%">
                      <tr >
                        <th rowspan="2" width="13%" class="image"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px">
                            {!! $datum['img'] !!}
                        </span></th>
                        <td width="72%" class="title"><span class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$datum['title']}}</span></td>
                        <td rowspan="2" width="15%" class="button"><a href="{{'/'.$local.$datum['route']}}" class="btn btn-sm text-white font-weight-bolder text-uppercase form-control" style="background-color: #0095EB">Launch</a></td>
                      </tr>
                      <tr>
                        <td><a href="{{'/'.$local.$datum['route']}}" class="mr-lg-8 mr-5 mb-lg-0 mb-2" style="color:#0095EB">Lihat Detail</a></td>
                      </tr>
                    </table>
                    @endforeach
                </div>
            </div>
            <div class="card card-custom mb-5">
              <div class="card-header">
                <div class="card-title">
                  <h2 class="card-label">SEO From Contributor</h2>
                </div>
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="card card-custom mb-5">
              <div class="card-header">
                <div class="card-title">
                  <h2 class="card-label">Why Choose Us</h2>
                </div>
              </div>
              <div class="card-body">
                <table class="mb-10" width="100%">
                  <tr >
                    <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                        01
                    </span></th>
                    <td width="90%" class="title"><span class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Lorem Ipsum</span></td>
                  </tr>
                  <tr>
                    <td> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> </td>
                  </tr>
                </table>

                <table class="mb-10" width="100%">
                  <tr >
                    <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                        02
                    </span></th>
                    <td width="90%" class="title"><span class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Lorem Ipsum</span></td>
                  </tr>
                  <tr>
                    <td> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> </td>
                  </tr>
                </table>

                <table class="mb-10" width="100%">
                  <tr >
                    <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                        03
                    </span></th>
                    <td width="90%" class="title"><span class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">Lorem Ipsum</span></td>
                  </tr>
                  <tr>
                    <td> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card card-custom mb-5">
              <div class="card-header">
                <div class="card-title">
                  <h2 class="card-label">Lorem Ipsum</h2>
                </div>
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="card card-custom mb-5">
              <div class="card-header">
                <div class="card-title">
                  <h2 class="card-label">FAQ</h2>
                </div>
              </div>
              <div class="card-body">
                <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">
                 <div class="card">
                  <div class="card-header" id="headingOne2">
                   <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                    Apa itu CMLABS tools?
                   </div>
                  </div>
                  <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                   <div class="card-body">
                    CMLABS tools adalah lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   </div>
                  </div>
                 </div>
                 <div class="card">
                  <div class="card-header" id="headingTwo2">
                   <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
                    Apa saja yang tools yang sudah rilis?
                   </div>
                  </div>
                  <div id="collapseTwo2" class="collapse"  data-parent="#accordionExample2">
                   <div class="card-body">
                    CMLABS tools adalah lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   </div>
                  </div>
                 </div>
                 <div class="card">
                  <div class="card-header" id="headingThree2">
                   <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2">
                    Siapa yang butuh tools ini?
                   </div>
                  </div>
                  <div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
                   <div class="card-body">
                    CMLABS tools adalah lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
        </div>
        @include('layouts/stickybar')
    </div>
  </div>
</div>
@endsection
<!-- home -->
@section('home')
active
@endsection
