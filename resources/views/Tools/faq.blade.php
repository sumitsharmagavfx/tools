@extends('layouts.app')

@section('title')
    JSON-LD FAQ SCHEMA GENERATOR
@endsection

@section('content')
<div class="row">
  <div class="col-md-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">JSON-LD FAQ SCHEMA GENERATOR <small>AKTIFKAN CUPLIKAN KAYA DI SERP</small></h3>
            </div>
        </div>
        <div class="card-body">

        </div>
    </div>
    <!--end::Card-->
  </div>
    <div class="col-md-4">
      <!--begin::Card-->
      <div class="card card-custom">
       <div class="card-body">
         <div class="row">
           <div class="col-md-4">
             <button type="button" class="btn btn-success form-control" name="button">Copy</button>
           </div>
           <div class="col-md-8">
             <button type="button" class="btn btn-warning form-control" name="button">Test Rich Result</button>
           </div>
         </div>
       </div>
      </div>
      <!--end::Card-->
    </div>
  </div>
@endsection

@section('json-ld')
    active
@endsection
