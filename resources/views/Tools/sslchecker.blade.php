@extends('layouts.app')

@section('title', Lang::get('sslchecker.meta-title'))

@section('meta-desc', Lang::get('sslchecker.meta-desc'))

@section('meta-keyword', Lang::get('sslchecker.meta-keyword'))

@section('conical','/en/ssl-checker')

@section('en-link','/en/ssl-checker')

@section('id-link','/id/ssl-checker')

@section('content')
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">SSL CHECKER</h1>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-10 mb-5">
        <input id="url" type="text" name="" class="form-control" value="" placeholder="Input Your URL">
      </div>
      <div class="col-lg-2 mb-5">
        <button id="btn-ssl" type="button" class="btn btn-success form-control" name="button">CHECK!</button>
      </div>
    </div>
  </div>
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8">
    <div class="card card-custom mb-5" id="result" style="display: none">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">CHECK RESULT</h2>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample5">
          <div class="card">
            <div class="card-header" id="headingOne5">
              <div class="card-title" data-toggle="collapse" data-target="#collapseOne5">
                <i class="fas fa-check text-success"></i> DNS resolves tools.cmlabs.co to 128.199.126.255
              </div>
            </div>
            <div id="collapseOne5" class="collapse show" data-parent="#accordionExample5">
              <div class="card-body">
                <p style="color: red">HTTP Server Header: Apache/2.4.41 (Ubuntu)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo5">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo5">
                <i class="fas fa-check text-success"></i> TLS Certificate
              </div>
            </div>
            <div id="collapseTwo5" class="collapse" data-parent="#accordionExample5">
              <div class="card-body" id="tls-certificate">
                <p>Common Name = tools.cmlabs.co</p>
                <p>Subject Alternative Names = tools.cmlabs.co</p>
                <p>Issuer = Let's Encrypt Authority X3</p>
                <p>Serial Number = 4676161E51F10CE0193E8DD10CB359879F9</p>
                <p>SHA1 Thumbprint = DDBF7706688D098176F8242B3842845C1890CE21</p>
                <p>Key Length = 2048</p>
                <p>Signature algorithm = SHA256-RSA</p>
                <p>Secure Renegotiation:</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree5">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree5">
                <i class="fas fa-check text-success"></i> TLS Certificate has not been revoked
              </div>
            </div>
            <div id="collapseThree5" class="collapse" data-parent="#accordionExample5">
              <div class="card-body">
                <p style="color: red">OCSP Staple: Not Enabled</p>
                <p style="color: red">OCSP Origin: Good</p>
                <p style="color: red">CRL Status: Not Enabled</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour5">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour5">
                <i class="fas fa-check text-success"></i> TLS Certificate expiration
              </div>
            </div>
            <div id="collapseFour5" class="collapse" data-parent="#accordionExample5">
              <div class="card-body">
                <p id="date">The certificate expires October 21, 2020 (77 days from today)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive5">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive5">
                <i class="fas fa-check text-success"></i> Certificate Name matches tools.cmlabs.co
              </div>
            </div>
            <div id="collapseFive5" class="collapse" data-parent="#accordionExample5">
              <div class="card-body">
                <table>
                  <tr>
                    <td> <img src="{{asset('media/images/server-certificate.png')}}" alt="server certificate" width="150"> </td>
                    <td class="pt-5 pl-5">
                      <p>Subject tools.cmlabs.co</p>
                      <p>Valid from 23/Jul/2020 to 21/Oct/2020</p>
                      <p>Issuer Let's Encrypt Authority X3</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <center> <img src="{{asset('media/images/chain.png')}}" alt="chain" width="150"> </center>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td> <img src="{{asset('media/images/intermediate-certificate.png')}}" alt="intermediate certificate" width="150"> </td>
                    <td class="pt-5 pl-5">
                      <p style="color: red">Subject Let's Encrypt Authority X3</p>
                      <p style="color: red">Valid from 17/Mar/2016 to 17/Mar/2021</p>
                      <p style="color: red">Issuer DST Root CA X3</p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix5">
              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSix5">
                <i class="fas fa-check text-success"></i> TLS Certificate is correctly installed
              </div>
            </div>
            <div id="collapseSix5" class="collapse" data-parent="#accordionExample5">
              <div class="card-body">
                <p style="color: red">Congratulations! This certificate is correctly installed.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card card-custom mb-5">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">Lorem Ipsum Dolor Sit Amet</h2>
        </div>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">Lorem Ipsum Dolor Sit Amet</h2>
        </div>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">Lorem Ipsum Dolor Sit Amet</h2>
        </div>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  @include('layouts/stickybar')
</div>
@endsection

@push('script')
<script src="{{asset('js/logic/sslchecker.js')}}"></script>
@endpush
@section('ssl-checker')
active
@endsection
