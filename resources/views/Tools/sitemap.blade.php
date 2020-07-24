@extends('layouts.app')

<!-- @section('title', Lang::get('sitemap.meta-title'))

@section('meta-desc', Lang::get('sitemap.meta-desc'))

@section('meta-keyword', Lang::get('sitemap.meta-keyword')) -->

@section('content')
    <div class="card card-custom gutter-b">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">SITEMAP GENERATOR <small>CREATE A FREE GOOGLE XML SITEMAP</small></h3>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-10 gutter-b">
            <input type="text" class="form-control" name="" value="">
          </div>
          <div class="col-md-2 gutter-b">
            <button type="button" class="btn btn-success form-control" name="button">Generate</button>
          </div>
        </div>
        <center>
          <div class="col-sm-12 col-md-6 col-lg-5">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/mural-cmlabs.jpg" width="100%" class="gutter-b" alt="">
          </div>
        </center>
        <div class="progress mb-2" style="height:20px">
            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
        </div>
        <center><span>0 of 100 Pages Crawled</span></center>
      </div>
    </div>
    <div class="card card-custom gutter-b">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">SITEMAP RESULT</h3>
        </div>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-info" name="button">Download Sitemap</button>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" width="70px">Page #</th>
              <th scope="col">URL</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i <= 10; $i++)
            <tr>
              <th scope="row" style="text-align:right">{{$i}}</th>
              <td>www.google.com</td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
@endsection

<!-- @push('script')
    <script src="{{asset('js/logic/sitemap.js')}}"></script>
@endpush -->

<!-- @section('sitemap')
    active
@endsection -->
