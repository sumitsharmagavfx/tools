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
                    <div id="input">
                        <input id="url" type="text" name="" class="form-control" value="" placeholder="Input Your URL">
                    </div>
                </div>
                <div class="col-lg-2 mb-5">
                    <button id="btn-ssl" type="button" class="btn btn-success form-control" name="button">CHECK!
                    </button>
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
                    <h3 id="nothing" style="display: none"><i class="fa fa-times-circle text-danger mr-5"></i>Your SSL is not installed</h3>
                    <div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample5">
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
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour5">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour5">
                                    <i id="date-ex" class=""></i> TLS Certificate expiration
                                </div>
                            </div>
                            <div id="collapseFour5" class="collapse" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <p id="date">The certificate expires October 21, 2020 (77 days from today)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix5">
                                <div class="card-title collapsed" data-toggle="collapse" id="correct" data-target="#collapseSix5">

                                </div>
                            </div>
                            <div id="collapseSix5" class="collapse" data-parent="#accordionExample5">
                                <div class="card-body">
                                    <p id="congrats">Congratulations! This certificate is correctly installed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom mb-5">
                <div class="card-header">
                    <div class="card-title">
                        <h2 class="card-label">Cek SSL di Website Anda</h2>
                    </div>
                </div>
                <div class="card-body">
                    <p>Memasang sertifikat SSL bisa menjadi kesulitan tersendiri bagi developer. Anda tidak hanya ditugaskan untuk mendapatkan jenis sertifikat yang benar, tantangannya datang ketika Anda harus menerbitkannya, menginstalnya dan kemudian mengonfigurasi server web Anda dengan benar dan melakukan migrasi seluruh situs web Anda ke HTTPS.</p>
                    <p>Anda dapat meringankan beban ini dan meminta seorang yang ahli untuk menangani pemasangan sertifikat SSL. Tetapi jika Anda merasa sangat suka tantangan dan ingin mencoba instalasi dan konfigurasi sendiri, kami siap membantu Anda.</p>
                </div>
                <div class="card-header">
                    <div class="card-title">
                        <h2 class="card-label">SSL Checker Tool CMLABS</h2>
                    </div>
                </div>
                <div class="card-body">
                    <p>SSL Checker Tool dari CMLABS dapat memverifikasi untuk mengecek apakah Sertifikat SSL di server web Anda dipasang dengan benar dan tepercaya. SSL Checker akan menampilkan Common Name, jenis server, penerbit, validitas, rantai sertifikat, bersama dengan detail sertifikat tambahan.</p>
                    <p>Dengan hanya memasukkan nama host atau alamat IP server Anda di kotak di bawah ini dan mengklik "Periksa", Anda dapat langsung melihat detail yang berkaitan dengan Sertifikat SSL Anda.</p>
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
