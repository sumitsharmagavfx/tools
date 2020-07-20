@extends('layouts.app')

@section('title')
    | TITLE & META DESCRIPTION CHECKER
@endsection

@section('content')
    @push('style')
        <style media="screen">
            @media only screen and (max-width: 768px) {
                #desktop {
                    display: none;
                }

                #mobile {
                    width: 100%;
                }
            }
        </style>
    @endpush
    <div class="card card-custom mb-5" id="kt_page_stretched_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">TITLE & META DESCRIPTION CHECKER <small>ADVANCE YOUR WRITING</small></h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mb-5" id="mobile">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <div class="card-header justify-content-center">
                    <div class="card-title">
                        <i class="fas fa-mobile-alt icon-3x"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 p-5" style="background-color:white; border:1px solid #EEF0F8; height:100%;">
                        <span id="resulturlmobile">https://cmlabs.co</span><br>
                        <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
                        <span id="resultdescmobile">CMLABS specializes in the work of SEO Enterprise, Content Writing, Copywriting, and Content Marketing. Check 2020 offers?</span>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-lg-7 mb-5" id="desktop">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <div class="card-header justify-content-center">
                    <div class="card-title">
                        <i class="fas fa-laptop icon-3x"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 p-5" style="background-color:white; border:1px solid #EEF0F8; height:100%;">
                        <span id="resulttitle">CMLABS / Content Marketing Labs Indonesia</span><br>
                        <span id="resulturl">https://cmlabs.co</span> <br>
                        <span id="resultdesc">CMLABS specializes in the work of SEO Enterprise, Content Writing, Copywriting, and Content Marketing. Check 2020 offers?</span>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    <div class="card card-custom mb-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">URL's <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input type="text" name="" class="form-control" value="https://cmlabs.co" id="url">
            <button type="button" class="btn btn-primary mt-5" name="button" id="execute">Get Title & Meta Desc.
                from URL's?
            </button>
            <br> <br>
            <a onclick="copy('url')" style="cursor:pointer;"> <small>Copy to clipboard!</small> </a> <br>
            <small id="urlcheck">eg. https://cmlabs.co/en/</small>
        </div>
    </div>

    <div class="card card-custom mb-5 mt-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">PAGE TITLE <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input id="title" type="text" name="" class="form-control"
                   value="CMLABS / Content Marketing Labs Indonesia"> <br>
            <a onclick="copy('title')" style="cursor: pointer"> <small>Copy to clipboard!</small> </a> <br>
            <small id="titlecount"></small>
        </div>
    </div>

    <div class="card card-custom mb-5 mt-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">META DESCRIPTION <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input id="desc" type="text" name="" class="form-control"
                   value="CMLABS mengkhususkan diri pada pekerjaan SEO Enterprise, Content Writing, Copywriting, dan Content Marketing. Cek penawaran 2020?"><br>
            <a onclick="copy('desc')" style="cursor: pointer"> <small>Copy to clipboard!</small> </a> <br>
            <small id="desccount"></small>
        </div>
    </div><br>
    <span id="titlesizer" class="pd-0"></span>
    <span id="titlesizertemp"></span>
    <span id="descsizer"></span>
    <span id="descsizertemp"></span>


@endsection

@push('script')
    <script src="{{asset('js/logic/metachecker.js')}}"></script>
@endpush
@section('title-checker')
    active
@endsection
