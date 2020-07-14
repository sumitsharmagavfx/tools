@extends('layouts.app')

@section('title')
    TOOLS TITTLE
@endsection

@section('content')
<div class="row">
  <div class="col-md-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">WORD COUNTER <small>TINGKATKAN SKILL MENULIS</small></h3>
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md" align="center">
              <h6>KARAKTER</h6>
              <h1>99999</h1>
            </div>
            <div class="col-md" align="center">
              <h6>KATA</h6>
              <h1>99999</h1>
            </div>
            <div class="col-md" align="center">
              <h6>KALIMAT</h6>
              <h1>99999</h1>
            </div>
            <div class="col-md" align="center">
              <h6>PARAGRAF</h6>
              <h1>99999</h1>
            </div>
            <div class="col-md" align="center">
              <h6>WAKTU BACA</h6>
              <h1>99999</h1>
            </div>
          </div>
          <div class="col-md-12">
            <textarea name="name" rows="8" class="form-control"></textarea>
          </div>
        </div>
    </div>
    <!--end::Card-->
  </div>
    <div class="col-md-4">
      <!--begin::Card-->
      <div class="card card-custom">
       <div class="card-header">
        <div class="card-title">
         <h3 class="card-label">KEYWORD DENSITY</h3>
        </div>

       </div>
       <div class="card-body">
         <div class="accordion accordion-toggle-arrow" id="accordionExample1">
     <div class="card">
         <div class="card-header">
             <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                 KATA 1
             </div>
         </div>
         <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
             <div class="card-body">
                 ...
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                 KATA 2
             </div>
         </div>
         <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
             <div class="card-body">
                 ...
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                 KATA 3
             </div>
         </div>
         <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
             <div class="card-body">
                 ...
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1">
                 KATA 4
             </div>
         </div>
         <div id="collapseFour1" class="collapse" data-parent="#accordionExample1">
             <div class="card-body">
                 ...
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-header">
             <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive1">
                 KATA 5
             </div>
         </div>
         <div id="collapseFive1" class="collapse" data-parent="#accordionExample1">
             <div class="card-body">
                 ...
             </div>
         </div>
     </div>
 </div>
       </div>
      </div>
      <!--end::Card-->
    </div>
  </div>
@endsection
