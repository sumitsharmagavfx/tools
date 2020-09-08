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
.tool-tab.active{
  border-bottom: 2px solid #0095EB !important;
  color: #0095EB !important;
}
.tool-tab:hover{
  color: #0095EB !important;
  border-bottom: 2px solid #0095EB !important;
}
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
@media only screen and (max-width: 600px) {
    .contributor-profile {
        display: none;
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

@media only screen and (max-width: 360px) {
  .button {
    display: none;
  }
  .image{
    width: 25%;
  }
  .title{
    width: 50%;
  }
  .title-1 {
    width: 50%;
  }
  .title-1-0 {
    width: 50%;
    background: lime;
  }
  .ol-content {
    background: red;
    width: 75%;
  }
}
</style>
@endpush
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
            <li class="breadcrumb-item active" style="color:#2F80ED"><b>@lang('home.homepage')</b></li>
          </ol>
        </nav>
          <div class="card card-custom mb-5">
            <div class="card-header">
              <div class="card-title">
                <h1 class="card-label">@lang('home.title-0')</h1>
                <small>@lang('home.sub-title-0')</small>
              </div>
            </div>
        </div>
        <div class="row"  data-sticky-container>
            <div class="col-lg-8">
                <div class="card card-custom mb-5">
                    <div class="card-body">
                        <p class="pt-4">@lang('home.desc-1')</p>
                        <p>@lang('home.desc-2')</p>
                        <p>@lang('home.desc-3')</p>
                        <p>@lang('home.desc-4')</p>
                    </div>
                </div>
                <div class="card card-custom mb-5">
                    <div class="card-header border-0">
                      <div class="card-title">
                         <h2 class="card-label pt-4">@lang('home.title-1')</h2>
                       </div>
                      </div>
                    <div class="card-body">
                        @foreach($data as $datum)
                        <table class="mb-10" width="100%">
                          <tr >
                            <th rowspan="2" width="13%" class="image"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px">
                                {!! $datum['img'] !!}
                            </span></th>
                            <td width="72%" class="title"><span class="d-flex align-items-center text-dark font-size-h5 font-weight-bold mr-3 tools-title">{{$datum['title']}}</span></td>
                            <td rowspan="2" width="15%"><a href="{{'/'.$local.$datum['route']}}"><button class="button btn btn-primary btn-sm font-weight-bolder text-uppercase text-white form-control">Launch</button></a></td>
                          </tr>
                          <tr>
                            <td>
                                <a
                                    href="#"
                                    class="mr-lg-8 mr-5 mb-lg-0 mb-2"
                                    data-toggle="modal"
                                    data-target="#modaldetail"
                                    data-title="{{$datum['title']}}"
                                    data-route="{{'/'.$local.$datum['route']}}"
                                    data-desc="@if(App::getLocale()=='id') {{$datum['description']}} @else {{$datum['description-en']}} @endif"
                                    style="color:#0095EB">
                                    @lang('home.detail-button')
                                </a>
                            </td>
                          </tr>
                        </table>
                        @endforeach
                    </div>
                </div>
                <div class="card card-custom mb-5">
                  <div class="card-header border-0">
                    <div class="card-title">
                      <h2 class="card-label pt-4">@lang('home.title-2')</h2>
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-lg-12">
                              <div id="contributor-slide" class="carousel slide" data-ride="carousel" data-interval="4000">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row mb-5">
                                             <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                                 <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                    <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/06/Andaru-Pramudito-Suhud-110x110.png')"></div>
                                                </div>
                                                <h3 class="font-weight-bold my-2">ANDARU SUHUD</h3>
                                                <div class="text-muted mb-2">DATA SCIENTIST</div>
                                             </div>
                                             <div class="col-lg-7 col-md-6 col-sm-12">
                                                 <div class="contributor-content">
                                                     <a href="@lang('home.url-1')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-1')</h4></a>
                                                     <p>
                                                         @lang('home.desc-2-1-1')
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mb-5">
                                           <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                               <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/06/m-ilman-akbar-110x110.png')"></div>
                                            </div>
                                            <h3 class="font-weight-bold my-2">ILMAN AKBAR</h3>
                                            <div class="text-muted mb-2">DIGITAL MARKETING</div>
                                           </div>
                                           <div class="col-lg-7 col-md-6 col-sm-12">
                                               <div class="contributor-content">
                                                   <a href="@lang('home.url-2')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-2')</h4></a>
                                                   <p>
                                                       @lang('home.desc-2-2-1')
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mb-5">
                                           <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                               <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/06/hangga-nuarta-2-110x110.jpeg')"></div>
                                            </div>
                                            <h3 class="font-weight-bold my-2">HANGGA NUARTA</h3>
                                            <div class="text-muted mb-2">SEO SPECIALIST</div>
                                           </div>
                                           <div class="col-lg-7 col-md-6 col-sm-12">
                                               <div class="contributor-content">
                                                   <a href="@lang('home.url-3')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-3')</h4></a>
                                                   <p>
                                                       @lang('home.desc-2-3-1')
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mb-5">
                                             <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                                 <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                    <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/06/udhi-vilanata-110x110.jpeg')"></div>
                                                </div>
                                                <h3 class="font-weight-bold my-2">UDHI S VILANATA</h3>
                                                <div class="text-muted mb-2">SEO SPECIALIST</div>
                                             </div>
                                             <div class="col-lg-7 col-md-6 col-sm-12">
                                                 <div class="contributor-content">
                                                     <a href="@lang('home.url-4')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-4')</h4></a>
                                                     <p>
                                                         @lang('home.desc-2-4-1')
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mb-5">
                                             <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                                 <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                    <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/06/foto-rochman-maarif-110x110.jpg')"></div>
                                                </div>
                                                <h3 class="font-weight-bold my-2">ROCHMAN</h3>
                                                <div class="text-muted mb-2">SEO SPECIALIST</div>
                                             </div>
                                             <div class="col-lg-7 col-md-6 col-sm-12">
                                                 <div class="contributor-content">
                                                     <a href="@lang('home.url-5')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-5')</h4></a>
                                                     <p>
                                                         @lang('home.desc-2-5-1')
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row mb-5">
                                             <div class="col-lg-5 col-md-6 col-sm-12 text-center mb-5 contributor-profile">
                                                 <div class="symbol symbol-60 symbol-circle symbol-xl-90 mb-5">
                                                    <div class="symbol-label" style="background-image: url('https://cmlabs.co/wp-content/uploads/2020/08/photo6145300840353737129-1-110x110.jpg')"></div>
                                                </div>
                                                <h3 class="font-weight-bold my-2">SELENA</h3>
                                                <div class="text-muted mb-2">SEO SPECIALIST</div>
                                             </div>
                                             <div class="col-lg-7 col-md-6 col-sm-12">
                                                 <div class="contributor-content">
                                                     <a href="@lang('home.url-6')" class="contributor-title" target="_blank"><h4 class="font-weight-bold my-2 mb-4">@lang('home.sub-title-2-6')</h4></a>
                                                     <p>
                                                         @lang('home.desc-2-6-1')
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-12 text-center">
                             <span>
                                 <a href="#contributor-slide" data-slide="prev">
                                     <button class="btn btn-prev btn-icon btn-circle flaticon2-back btn-light-twitter mr-3"></button>
                                 <a/>
                             </span>
                             <span>
                                 <a href="#contributor-slide" data-slide="next">
                                     <button class="btn btn-next btn-icon btn-circle flaticon2-next btn-light-twitter ml-3"></button>
                                 </a>
                             </span>
                         </div>
                      </div>
                  </div>
                </div>
                <div class="card card-custom mb-5">
                  <div class="card-header border-0">
                    <div class="card-title">
                      <h2 class="card-label pt-4">@lang('home.title-3')</h2>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="mb-10" width="100%">
                      <tr >
                        <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                            01
                        </span></th>
                        <td width="90%" class="title"><span class="d-flex align-items-center text-dark font-size-h5 font-weight-bold mr-3">@lang('home.sub-title-3-1')</span></td>
                      </tr>
                      <tr>
                        <td> <p>@lang('home.desc-3-1-1')</p> </td>
                      </tr>
                    </table>

                    <table class="mb-10" width="100%">
                      <tr >
                        <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                            02
                        </span></th>
                        <td width="90%" class="title"><span class="d-flex align-items-center text-dark font-size-h5 font-weight-bold mr-3">@lang('home.sub-title-3-2')</span></td>
                      </tr>
                      <tr>
                        <td> <p>@lang('home.desc-3-2-1')</p> </td>
                      </tr>
                    </table>

                    <table class="mb-10" width="100%">
                      <tr >
                        <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="svg-icon svg-icon-2x p-4" style="background-color:#EBFAFF; border-radius:5px; color:#0095EB">
                            03
                        </span></th>
                        <td width="90%" class="title"><span class="d-flex align-items-center text-dark font-size-h5 font-weight-bold mr-3">@lang('home.sub-title-3-3')</span></td>
                      </tr>
                      <tr>
                        <td> <p>@lang('home.desc-3-3-1')</p> </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="card card-custom mb-5">
                    <div class="card-header border-0">
                      <div class="card-title">
                        <h2 class="card-label pt-4">@lang('home.title-4')</h2>
                      </div>
                    </div>
                  <div class="card-body">
                      <ul class="nav nav-tabs nav-tabs-line nav-bolder nav-tabs-line-2x justify-content-center mb-5">
                         <li class="nav-item">
                             <a class="nav-link tool-tab mr-10 active" data-toggle="tab" href="#importantnotes">@lang('home.sub-title-4-1')</a>
                         </li>
                         <li class="nav-item ml-10">
                             <a class="nav-link tool-tab" data-toggle="tab" href="#howtouse">@lang('home.sub-title-4-2')</a>
                         </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="importantnotes" role="tabpanel" aria-labelledby="importantnotes">
                            <table width="100%" class="mb-5">
                              <tr valign="center">
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1" valign="center">
                                    <p>@lang('home.desc-4-1-1')</p>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" valign="center" class="title-1">
                                    <p>@lang('home.desc-4-1-2')</p>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" valign="center" class="title-1">
                                    <p>@lang('home.desc-4-1-3')</p>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="@if($local == 'id') pt-4 @else pt-1 @endif" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" valign="center" class="title-1">
                                    <p>@lang('home.desc-4-1-4')</p>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" valign="center" class="title-1">
                                    <p>@lang('home.desc-4-1-5')</p>
                                </td>
                              </tr>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="howtouse" role="tabpanel" aria-labelledby="howtouse">
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-1')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-1-1')</li>
                                      <li>@lang('home.desc-4-2-1-2')</li>
                                      <li>@lang('home.desc-4-2-1-3')</li>
                                      <li>@lang('home.desc-4-2-1-4')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-2')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-2-1')</li>
                                      <li>@lang('home.desc-4-2-2-2')</li>
                                      <li>@lang('home.desc-4-2-2-3')</li>
                                      <li>@lang('home.desc-4-2-2-4')</li>
                                      <li>@lang('home.desc-4-2-2-5')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-3')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-3-1')</li>
                                      <li>@lang('home.desc-4-2-3-2')</li>
                                      <li>@lang('home.desc-4-2-3-3')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-4')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-4-1')</li>
                                      <li>@lang('home.desc-4-2-4-2')</li>
                                      <li>@lang('home.desc-4-2-4-3')</li>
                                      <li>@lang('home.desc-4-2-4-4')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-5')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-5-1')</li>
                                      <li>@lang('home.desc-4-2-5-2')</li>
                                      <li>@lang('home.desc-4-2-5-3')</li>
                                      <li>@lang('home.desc-4-2-5-4')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-6')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-6-1')</li>
                                      <li>@lang('home.desc-4-2-6-2')</li>
                                      <li>@lang('home.desc-4-2-6-3')</li>
                                      <li>@lang('home.desc-4-2-6-4')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-7')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-7-1')</li>
                                      <li>@lang('home.desc-4-2-7-2')</li>
                                      <li>@lang('home.desc-4-2-7-3')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                            <table width="100%" class="mb-5">
                              <tr>
                                <th rowspan="2" class="pt-4" valign="top" width="10%"><span class="flaticon2-check-mark pr-4 pl-4 pt-3 pb-3" style="background-color:#EBFAFF; border-radius:50%; color:#0095EB"></span></th>
                                <td width="90%" class="title-1-0">
                                    <span class="text-dark font-size-h5 font-weight-bold">@lang('home.sub-sub-title-4-2-8')</span>
                                    <ol class="pl-5">
                                      <li>@lang('home.desc-4-2-8-1')</li>
                                      <li>@lang('home.desc-4-2-8-2')</li>
                                      <li>@lang('home.desc-4-2-8-3')</li>
                                      <li>@lang('home.desc-4-2-8-4')</li>
                                      <ul class="pl-5">
                                        <li>@lang('home.desc-4-2-8-5')</li>
                                        <li>@lang('home.desc-4-2-8-6')</li>
                                      </ul>
                                      <li>@lang('home.desc-4-2-8-7')</li>
                                    </ol>
                                </td>
                              </tr>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="card card-custom mb-5">
                  <div class="card-header border-0">
                    <div class="card-title">
                      <h2 class="card-label pt-4">@lang('home.title-5')</h2>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">
                     <div class="card">
                      <div class="card-header" id="headingOne2">
                       <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                        @lang('home.sub-title-5-1')
                       </div>
                      </div>
                      <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                       <div class="card-body">
                           @lang('home.desc-5-1-1')<br/><br/>
                           @lang('home.desc-5-1-2')<br/><br/>
                           @lang('home.desc-5-1-3')
                       </div>
                      </div>
                     </div>
                     <div class="card">
                      <div class="card-header" id="headingTwo2">
                       <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
                        @lang('home.sub-title-5-2')
                       </div>
                      </div>
                      <div id="collapseTwo2" class="collapse"  data-parent="#accordionExample2">
                       <div class="card-body">
                           <ul>
                               <li>@lang('home.desc-5-2-1')</li>
                               <li>@lang('home.desc-5-2-2')</li>
                               <li>@lang('home.desc-5-2-3')</li>
                               <li>@lang('home.desc-5-2-4')</li>
                               <li>@lang('home.desc-5-2-5')</li>
                               <li>@lang('home.desc-5-2-6')</li>
                               <li>@lang('home.desc-5-2-7')</li>
                           </ul>
                           @lang('home.sub-sub-title-5-2')
                       </div>
                      </div>
                     </div>
                     <div class="card">
                      <div class="card-header" id="headingThree2">
                       <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2">
                        @lang('home.sub-title-5-3')
                       </div>
                      </div>
                      <div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
                       <div class="card-body">
                               <ul>
                                   <li>@lang('home.desc-5-3-1')</li>
                                   <li>@lang('home.desc-5-3-2')</li>
                                   <li>@lang('home.desc-5-3-3')</li>
                               </ul>
                       </div>
                      </div>
                     </div>
                     <div class="card">
                      <div class="card-header" id="headingFour2">
                       <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour2">
                        @lang('home.sub-title-5-4')
                       </div>
                      </div>
                      <div id="collapseFour2" class="collapse" data-parent="#accordionExample2">
                       <div class="card-body">
                           @lang('home.desc-5-4-1')
                           @lang('home.desc-5-4-2') <br/><br/>
                           @lang('home.desc-5-4-3') <br/><br/>
                           @lang('home.desc-5-4-4')
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



<!-- Modal Detail Tools-->
<div class="modal fade" id="modaldetail" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h2 class="modal-title" id="modal-title"></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <p id="modal-desc"></p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-light-primary font-weight-bold px-5" data-dismiss="modal">Close</button>
                <a id="modal-link" href=""><button class="button btn btn-primary btn-sm px-5 font-weight-bolder text-uppercase text-white form-control">Launch</button></a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/slick.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
      $('#modaldetail').on('show.bs.modal', function(e) {
          var target = $(e.relatedTarget);
          var title = target.data('title');
          var route = target.data('route');
          var desc = target.data('desc');

          $('#modal-title').text(title);
          $('#modal-link').attr('href', route);
          $('#modal-desc').text(desc);
      });

      $('.contributor-slide').carousel({
          pause: "hover"
      })
    });
</script>
@endpush
@push('script')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "@lang('home.homepage')"
    }]
  }
</script>
@endpush
<!-- home -->
@section('home')
menu-item-active
@endsection
