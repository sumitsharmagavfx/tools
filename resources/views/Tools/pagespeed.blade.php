@extends('layouts.app')

@section('title')
    PAGE SPEED
@endsection

@section('content')
        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-header">
              <div class="card-title">
                <h3 class="card-label">PAGE SPEED <small></small></h3>
              </div>
            </div>
            <div class="card-body">
              <div class="row">

                <div class="col-lg-10 mb-5">
                  <input type="text" name="" class="form-control" value="">
                </div>
                <div class="col-lg-2 mb-5">
                  <button type="button" class="btn btn-success form-control" name="button">Analysis!</button>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-5 col-md-4 col-lg" id="performance">
                    <div class="progress mx-auto mb-5" data-value='100'>
                      <span class="progress-left">
                        <span class="progress-bar border-success"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-success"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">100<sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                    <h3 class="h6 font-weight-bold text-center mb-4">PERFORMANCE</h3>
                  </div>

                  <div class="col-12 col-sm-5 col-md-4 col-lg" id="accesibility">
                    <div class="progress mx-auto mb-5" data-value='80'>
                      <span class="progress-left">
                        <span class="progress-bar border-warning"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-warning"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                    <h3 class="h6 font-weight-bold text-center mb-4">ACCESIBILITY</h3>
                  </div>

                  <div class="col-12 col-sm-5 col-md-4 col-lg" id="bestpractices">
                    <div class="progress mx-auto mb-5" data-value='40'>
                      <span class="progress-left">
                        <span class="progress-bar border-danger"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-danger"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">40<sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                    <h3 class="h6 font-weight-bold text-center mb-4">BEST PRACTICES</h3>
                  </div>

                  <div class="col-12 col-sm-5 col-md-4 col-lg" id="seo">
                    <div class="progress mx-auto mb-5" data-value='0'>
                      <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">0<sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                    <h3 class="h6 font-weight-bold text-center mb-4">SEO</h3>
                  </div>

                  <div class="col-12 col-sm-5 col-md-4 col-lg" id="pwa">
                    <div class="progress mx-auto mb-5" data-value='20'>
                      <span class="progress-left">
                        <span class="progress-bar border-danger"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-danger"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">20<sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                    <h3 class="h6 font-weight-bold text-center mb-4">PWA</h3>
                  </div>

                </div>
              </div>
              <div class="row justify-content-center mb-5">
                <table style="border:5px solid #EEEEEE;">
                  <tbody >
                    <tr>
                      <td style="width:100px; text-align:right"> <span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #F64E60; text-align:center"></span> 0-49</td>
                      <td style="width:100px; text-align:right"><span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #FFA800; text-align:center"></span> 50-89</td>
                      <td style="width:100px; text-align:right"><span class="mb-1 mr-3" style="display: inline-block; width:30%; border-top:4px solid #1BC5BD; text-align:center"></span> 90-100</td>
                      <td style="width:20px"></td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="col" id="performance">
                <div class="progress mx-auto mb-5" data-value='100'>
                  <span class="progress-left">
                    <span class="progress-bar border-success"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-success"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">100<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->
                <h3 class="h6 font-weight-bold text-center mb-4">PERFORMANCE</h3>
              </div>

              <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">
                 <div class="card">
                  <div class="card-header" id="headingOne2">
                   <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                    Recent Reports
                   </div>
                  </div>
                  <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                   <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Gambar</th>
                          <th scope="col">URL</th>
                          <th scope="col" style="text-align:right">Speed</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">AAA</th>
                          <td>123</td>
                          <td style="text-align:right">456</td>
                        </tr>
                        <tr>
                          <th scope="row">AAA</th>
                          <td>123</td>
                          <td style="text-align:right">456</td>
                        </tr>
                        <tr>
                          <th scope="row">AAA</th>
                          <td>123</td>
                          <td style="text-align:right">456</td>
                        </tr>
                      </tbody>
                    </table>
                   </div>
                  </div>
                 </div>
                 <div class="card">
                  <div class="card-header" id="headingTwo2">
                   <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo2">
                    Accounting Updates
                   </div>
                  </div>
                  <div id="collapseTwo2" class="collapse"  data-parent="#accordionExample2">
                   <div class="card-body">
                     <table class="table table-striped">
                       <thead>
                         <tr>
                           <th scope="col">Gambar</th>
                           <th scope="col">URL</th>
                           <th scope="col" style="text-align:right">Speed</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                  </div>
                 </div>
                 <div class="card">
                  <div class="card-header" id="headingThree2">
                   <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree2">
                    Latest Payroll
                   </div>
                  </div>
                  <div id="collapseThree2" class="collapse" data-parent="#accordionExample2">
                   <div class="card-body">
                     <table class="table table-striped">
                       <thead>
                         <tr>
                           <th scope="col">Gambar</th>
                           <th scope="col">URL</th>
                           <th scope="col" style="text-align:right">Speed</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                         <tr>
                           <th scope="row">AAA</th>
                           <td>123</td>
                           <td style="text-align:right">456</td>
                         </tr>
                       </tbody>
                     </table>
                   </div>
                  </div>
                 </div>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="col" id="accesibility">
                <div class="progress mx-auto mb-5" data-value='80'>
                  <span class="progress-left">
                    <span class="progress-bar border-warning"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-warning"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->
                <h3 class="h6 font-weight-bold text-center mb-4">ACCESIBILITY</h3>
              </div>


            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="col" id="bestpractices">
                <div class="progress mx-auto mb-5" data-value='40'>
                  <span class="progress-left">
                    <span class="progress-bar border-danger"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-danger"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">40<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->
                <h3 class="h6 font-weight-bold text-center mb-4">BEST PRACTICES</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="col" id="seo">
                <div class="progress mx-auto mb-5" data-value='0'>
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">0<sup class="small">%</sup></div>
                  </div>
                </div>
                <!-- END -->
                <h3 class="h6 font-weight-bold text-center mb-4">SEO</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <div class="col" id="pwa">
                <div class="progress mx-auto mb-5" data-value='20'>
                  <span class="progress-left">
                    <span class="progress-bar border-danger"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-danger"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold">20<sup class="small">%</sup></div>
                  </div>
                </div>
                <h3 class="h6 font-weight-bold text-center mb-4">PWA</h3>
            </div>
          </div>
        </div>
@endsection
@push('style')
<style media="screen">

.progress {
  width: 150px;
  height: 150px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}

.rounded-lg {
  border-radius: 1rem;
}

.text-gray {
  color: #aaa;
}

div.h4 {
  line-height: 1rem;
}
</style>

@endpush

@push('script')
<script type="text/javascript">
$(function() {

    $(".progress").each(function() {

      var value = $(this).attr('data-value');
      var left = $(this).find('.progress-left .progress-bar');
      var right = $(this).find('.progress-right .progress-bar');

      if (value > 0) {
        if (value <= 50) {
          right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
        } else {
          right.css('transform', 'rotate(180deg)')
          left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
        }
      }

    })

    function percentageToDegrees(percentage) {

      return percentage / 100 * 360

    }

  });
</script>

@endpush
