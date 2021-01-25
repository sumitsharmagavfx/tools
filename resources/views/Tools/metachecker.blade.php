@extends('layouts.app')

@section('title', Lang::get('metachecker.meta-title'))

@section('meta-desc', Lang::get('metachecker.meta-desc'))

@section('meta-keyword', Lang::get('metachecker.meta-keyword'))

@section('conical','/en/page-title-meta-description-checker')

@section('en-link')
en/page-title-meta-description-checker
@endsection

@section('id-link')
id/page-title-meta-description-checker
@endsection

@section('content')
@push('style')
<style media="screen">
  #mobile {
    display: none;
  }
  #resulturlmobile {
    font-size: 13px;
    line-height: 16px;
    text-decoration: none solid rgb(0,102,33);
    color: #006621;
  }
  #resulttitlemobile {
      font-size: 20px;
      color: #1A0DAB;
      line-height: 26px;
      word-spacing: 0px;
      text-decoration: none solid rgb(26,13,171);
    }
  #resultdescmobile {
    font-size: 14px;
    color: #3C4043;
    line-height: 22.12px;
    word-spacing: 0px;
    text-decoration: none solid rgb(60,64,67);
  }
  table.table {
    width: 100%;
  }
  table tr th.meta-desktop,
  table tr td.meta-desktop {
    width: 60%;
    /* background: red; */
  }
  table tr th.meta-mobile,
  table tr td.meta-mobile {
    width: 40%;
    /* background: pink; */
  }
  .custom-wrapper-desktop {
    background-color: white;
    border: 1px solid #dadce6;
    width: 44em;
    height: 100%;
    margin: 1.5rem 0 1.5rem 3rem;
  }
  .custom-wrapper-mobile {
    border:1px solid #dadce6;
    width: 19em;
    height:100%;
    background: white;
    margin: 1.5rem 1rem 1.5rem 1rem;
  }
  .custom-fixed-size {
    text-align: left;
    width: 570px;
    height: 100px;
  }
  .custom-fixed-size-1 {
    text-align: left;
    height: 200px;
    width: 253px;
  }
    #metachecker .title {
        font-weight: 400;
        font-size: 30px;
        color: var(--darkgrey);
        line-height: 35px;
    }
    #metachecker .subtitle {
        font-weight: 400;
        font-size: 20px;
        color: var(--darkgrey);
        line-height: 35px;
    }
    #metachecker .header-blue {
        background: var(--primaryblue);
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 40px;
    }
    #metachecker .header-blue-1024 {
        display: none !important;
    }
    #metachecker .btn-group-black {
        background: var(--black);
    }
    #metachecker .btn-group-black:focus, #metachecker .btn-group-black:hover {
        background: #DCAD05;
    }
    #metachecker .input-url, #metachecker .input-url:focus {
        background: var(--primaryblue);
        color: var(--white);
        border:none;
        width: 100%;
        text-transform: uppercase;
        outline: none;
    }
    #metachecker .for-mobile .input-url, #metachecker .input-url:focus {
        background: var(--primaryblue);
        color: var(--white);
        border:none;
        width: 95%;
        text-transform: uppercase;
        outline: none;
    }
    #metachecker .btn-rounded-white {
        background: var(--white);
        color: var(--black);
        border-radius: 20px;
        font-weight: 700;
    }
    #metachecker .desktop-result {
        width: 58%;
    }
    #metachecker .mobile-result {
        width: 39%;
    }
    #metachecker .title-meta {
        color: #1A0DAB;
        font-size: 20px;
        line-height: 23px;
    }
    #metachecker .color-green {
        color: #009A0F !important;
    }
    #metachecker .bg-color-lightyellow {
        background: rgba(255, 222, 104, 0.15) !important;
    }
    #metachecker .desc-meta {
        color: #4D5156;
        font-size: 13px;
        line-height: 15px;
    }
    #metachecker .header-local-collection {
        background: var(--lightgrey);
    }
    #metachecker .clear-all:hover {
        text-decoration: underline;
    }
    #metachecker .list-group-item-action:hover, #metachecker .list-group-item-action:focus {
        background: var(--primaryblue);
        color: var(--white);
    }
    #metachecker .list-group-item-action:hover .date-created {
        color: var(--white) !important;
    }
    #metachecker .list-group-item-action:hover i {
        color: rgba(42, 47, 51, 0.3) !important;
    }

    #metachecker .list-group-item-action i {
        color: var(--grey) !important;
    }
    #metachecker .custom-container {
        padding: 0 10em;
    }
    #metachecker .custom-container-fluid {
        padding: 0;
    }
    #metachecker .meta-title {
        color: var(--white);
        font-weight: 700;
        font-size: 15px;
    }
    #metachecker .meta-desc {
        color: var(--white);
        font-weight: 700;
        font-size: 15px;
    }
    #metachecker ::placeholder {
        color: var(--white);
    }
    #metachecker input, #metachecker textarea {
        border: none;
    }
    #metachecker .progress-bar_wrap {
        width: 150px;
        height: 11px;
        background: var(--primaryblue);
        display: inline-block;
        overflow: hidden;
    }
    #metachecker .progress-bar_item {
        display: inline-block;
        height: 100%;
        width: 20%;
        margin-right: .8%;
        float: left;
    }
    #metachecker .progress-bar_item-1.active, #metachecker .progress-bar_item-2.active, #metachecker .progress-bar_item-3.active {
        background: #B1F25D;
    }
    #metachecker .progress-bar_item-1.blank, #metachecker .progress-bar_item-2.blank, #metachecker .progress-bar_item-3.blank {
        background: var(--white);
    }
    #metachecker .for-mobile .custom-card {
        border-radius: 5px;
    }
    #metachecker .for-mobile .local-collection-body .custom-card:hover, #metachecker .for-mobile .local-collection-body .custom-card:focus {
        background: var(--primaryblue);
        color: var(--white);
    }
    #metachecker .for-mobile .local-collection-body .custom-card i:hover {
        color: var(--darkgrey) !important;
    }
    @media only screen and (min-width: 1400px) {
        .custom-fixed-size {
            width: 580px;
        }
        .custom-fixed-size-1 {
            transform: scale(0.9);
        }
    }
    @media only screen and (min-width: 801px) and (max-width: 1365px) {
        #metachecker .header-blue-1024 {
            display: flex !important;
            background: var(--primaryblue);
            border-radius: 5px;
        }
        #metachecker .custom-container {
            padding: 0 8em;
        }
        #metachecker .header-blue {
            display: none !important;
        }
    }
    @media only screen and (max-width: 800px) {
        #metachecker .mobile-result {
            width: 100%;
        }
        #metachecker .custom-container {
            padding: 0 1em;
        }
    }
    @media only screen and (max-width: 600px) {
        #metachecker .meta-desc {
            width: 40.7%;
        }
    }
    @media only screen and (max-width: 400px) {
        #metachecker .meta-desc {
            width: 47.7%;
        }
    }
  /* zoom 110% */
  @media only screen and (max-width: 1300px) {
    .custom-fixed-size {
      width: 580px;
      transform: scale(0.9);
      margin-left: -27px;
    }
    .custom-wrapper-desktop {
      width: 40em;
    }
    .custom-fixed-size-1 {
      margin-top: -18px;
      margin-left: -18px;
      transform: scale(0.85);
    }
    .custom-wrapper-mobile {
      width: 16em;
      height: 13em;
    }
  }
  /* zoom 125% */
  @media only screen and (max-width: 1200px) {
    .custom-fixed-size {
      transform: scale(0.68);
      margin-left: -90px;
      margin-top: -13px;
    }
    .custom-wrapper-desktop {
      width: 30em;
      height: 6em;
    }
    .custom-fixed-size-1 {
      transform: scale(0.65);
      margin-top: -36px;
      margin-left: -43px;
    }
    .custom-wrapper-mobile {
      width: 13em;
      height: 10em;
    }
  }
  @media only screen and (max-width: 768px) {
      #desktop {
        display: none;
      }
      #mobile {
        display: block;
        width: 100%;
      }
      .custom-wrapper-mobile {
      border: 1px solid #dadce6;
      background: white;
      height: 100%;
      margin: 0;
      width: auto;
      }
      .custom-fixed-size-1 {
        transform: scale(0.9);
        margin: 0;
        width: 280px;
      }
    }
    @media only screen and (max-width: 400px) {
      .custom-fixed-size-1 {
        transform: scale(0.8);
        margin-left: -15px;
      }
    }
    @media only screen and (max-width: 320px) {
      .custom-fixed-size-1 {
        transform: scale(0.72);
        margin-left: -35px;
        width: 280px;
      }
    }
  }
</style>
@endpush

<!-- START V2 VER -->
<div id="metachecker">
    <div class="for-desktop">
        <div class="custom-container">
            <div class="d-flex flex-column-fluid">
                <div>
                    <!-- Start Title & Subtitle -->
                    <div class="row d-flex flex-column" style="margin-bottom: 35px;">
                        <div class="font-weight-normal title">PAGE TITLE & META DESCRIPTION CHECKER</div>
                        <div class="font-weight-normal subtitle">Login to unlock all features here, 100% free!</div>
                    </div>
                    <!-- End Title & Subtitle -->
                    <!-- Start Blue Header Card -->
                    <div class="row d-flex flex-row justify-content-between align-items-center header-blue py-3 mb-3 px-8">
                        <div class="btn-group mr-8" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-group-black text-white"><i class='bx bx-cog' style='color:#ffffff'></i></button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is ON">MANUAL</button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="BOT mode is ON">BOT</button>
                        </div>
                        <div class="w-50">
                          <input type="text" class="input-url text-center w-100" placeholder="Input URL" value="HTTPS://SCHENGENVISAINFO.CO/SCHENGEN-VISA-INSURANCE">
                        </div>
                        <div>
                            <button class="btn btn-rounded-white px-10">CRAWL URL</button>
                        </div>
                    </div>
                    <div class="row d-flex flex-column justify-content-center align-items-center header-blue-1024 py-4 mb-5">
                        <div class="btn-group mb-4" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-group-black text-white"><i class='bx bx-cog' style='color:#ffffff'></i></button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is ON">MANUAL</button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="BOT mode is ON">BOT</button>
                        </div>
                          <input type="text" class="input-url text-center mb-4" placeholder="Input URL" value="HTTPS://SCHENGENVISAINFO.CO/SCHENGEN-VISA-INSURANCE">
                        <button class="btn btn-rounded-white px-10">CRAWL URL</button>
                    </div>
                    <!-- End Blue Header Card -->
                    <!-- Start Blue Input Text -->
                    <div class="manual-mode mb-5">
                        <div class="row mb-3 bg-info d-flex flex-column px-9 py-5 bg-primaryblue border-radius-5px">
                            <div class="d-flex align-items-center flex-row">
                                <span class="meta-title mr-5">PAGE TITLE</span>
                                <div class="progress-bar_wrap">
                                    <div class="progress-bar_item progress-bar_item-1 active"></div>
                                    <div class="progress-bar_item progress-bar_item-2 active"></div>
                                    <div class="progress-bar_item progress-bar_item-3 blank"></div>
                                </div>
                            </div>
                            <input type="text" class="form-control bg-primaryblue text-white px-0" id="meta-title" placeholder="Type or paste your text..">
                        </div>
                        <div class="row bg-info d-flex flex-column py-5 px-9 bg-primaryblue border-radius-5px">
                            <div class="d-flex align-items-center flex-row">
                                <span class="meta-desc mr-5">META DESCRIPTION</span>
                                <div class="progress-bar_wrap">
                                    <div class="progress-bar_item progress-bar_item-1 active"></div>
                                    <div class="progress-bar_item progress-bar_item-2 active"></div>
                                    <div class="progress-bar_item progress-bar_item-3 active"></div>
                                </div>
                            </div>
                            <textarea rows="1" class="form-control bg-primaryblue text-white px-0" placeholder="Type or paste your text.."></textarea>
                        </div>
                    </div>
                    <!-- End Blue Input Text -->
                    <!-- Start Main Content -->
                    <div class="row">
                        <div class="d-flex justify-content-between flex-row">
                            <div class="d-flex align-self-baseline desktop-result flex-column">
                                <!-- Start Desktop Result -->
                                <div class="card card-custom gutter-b">
                                    <div class="card-body px-0">
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <strong class="mr-2">Ad</strong>
                                                <span>visa-insurance.eu <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Buy ‪Travel Insurance Schengen‬ - Officially accepted for visa
                                            </div>
                                            <div class="desc-meta">
                                                Travel medical insurance to all Schengen Area. Refund if visa denied! Buy in 5 minutes. Pay with credit/deibt and get insurance documents instantly via email. No age limit.
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.traveloka.com › en-id › insurance › travel › visa-schengen <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Buy Your Schengen Visa Travel Insurance at Traveloka
                                            </div>
                                            <div class="desc-meta">
                                                When arranging a Schengen Visa, tourists must equip themselves with travel insurance. Travel insurance is very important to provide protection as long as you are in this country. Without adequate travel insurance, your Schengen Visa application will be refused.
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3 bg-color-lightyellow">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2 color-green">
                                                Schengen Travel Visa Insurance – Europe Travel Insurance
                                            </div>
                                            <div class="desc-meta">
                                                Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Schengen Travel Visa Insurance – Europe Travel Insurance
                                            </div>
                                            <div class="desc-meta">
                                                Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Desktop Result -->
                                <!-- Start Local Collection -->
                                <div class="local-collection">
                                    <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
                                        <div class="d-flex flex-row align-items-center">
                                            <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                                            <span class="text-black font-15px">Your Local Collection</span>
                                        </div>
                                        <div>
                                            <span class="clear-all font-15px pointer">Clear All</span>
                                        </div>
                                    </div>
                                    <div class="local-collection-body">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                                <div class="d-flex justify-content-between">
                                                    <div>https://cmlabs.co</div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2 text-grey date-created">Created at 11.40 | 8, JAN 2021</span>
                                                        <i class='bx bxs-x-circle text-grey'></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                                <div class="d-flex justify-content-between">
                                                    <div>https://cmlabs.co/en/pricing</div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                                        <i class='bx bxs-x-circle text-grey'></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                                <div class="d-flex justify-content-between">
                                                    <div>https://analytics.cmlabs.co/en</div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2 text-grey date-created">Created at 08.05 | 7, JAN 2021</span>
                                                        <i class='bx bxs-x-circle text-grey'></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                                <div class="d-flex justify-content-between">
                                                    <div>https://analytics.cmlabs.co/en/login</div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2 text-grey date-created">Created at 11.21 | 5, JAN 2021</span>
                                                        <i class='bx bxs-x-circle text-grey'></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                                                <div class="d-flex justify-content-between">
                                                    <div>https://analytics.cmlabs.co/en/member/dashboard</div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mr-2 text-grey date-created">Created at 16.56 | 3, JAN 2021</span>
                                                        <i class='bx bxs-x-circle text-grey'></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Local Collection -->
                            </div>
                            <!-- Start Mobile Result -->
                            <div class="d-flex align-self-baseline mobile-result flex-column">
                                <div class="card card-custom gutter-b mb-3">
                                    <div class="card-body px-0">
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex align-items-center mb-2">
                                                <strong class="mr-2">Ad</strong>
                                                <span>visa-insurance.eu <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Buy ‪Travel Insurance Schengen‬ - Officially accepted for visa
                                            </div>
                                            <div class="desc-meta">
                                                Travel medical insurance to all Schengen Area. Refund if visa denied! Buy in 5 minutes. Pay with credit/deibt and get insurance documents instantly via email. No age limit.
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.traveloka.com › en-id › insurance › travel › visa-schengen <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Buy Your Schengen Visa Travel Insurance at Traveloka
                                            </div>
                                            <div class="desc-meta">
                                                When arranging a Schengen Visa, tourists must equip themselves with travel insurance. Travel insurance is very important to provide protection as long as you are in this country. Without adequate travel insurance, your Schengen Visa application will be refused.
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3 bg-color-lightyellow">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2 color-green">
                                                Schengen Travel Visa Insurance – Europe Travel Insurance
                                            </div>
                                            <div class="desc-meta">
                                                Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column px-10 py-3">
                                            <div class="link-meta d-flex flex-row align-items-center mb-2">
                                                <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                            </div>
                                            <div class="title-meta mb-2">
                                                Schengen Travel Visa Insurance – Europe Travel Insurance
                                            </div>
                                            <div class="desc-meta">
                                                Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="version d-flex align-items-center pointer">
                                    <span class="mr-2 text-darkgrey">Version 3.7</span>
                                    <i class='bx bx-chevron-down text-darkgrey'></i>
                                </div>
                            </div>
                            <!-- End Mobile Result -->
                        </div>
                    </div>
                    <!-- End Main Content -->
                </div>
            </div>
        </div>
    </div>
    <div class="for-mobile">
        <div class="custom-container">
            <div class="d-flex flex-column">
                <div>
                    <!-- Start Title & Subtitle -->
                    <div class="row d-flex flex-column mx-0" style="margin-bottom: 15px;">
                        <div class="font-weight-normal title">PAGE TITLE & META DESCRIPTION CHECKER</div>
                        <div class="font-weight-normal subtitle">Login to unlock all features here, 100% free!</div>
                    </div>
                    <!-- End Title & Subtitle -->
                    <!-- Start Blue Header Card -->
                    <div class="row d-flex flex-column justify-content-center align-items-center header-blue py-4 mb-5 mx-0">
                        <div class="btn-group mb-4" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-group-black text-white"><i class='bx bx-cog' style='color:#ffffff'></i></button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is ON">MANUAL</button>
                            <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="BOT mode is ON">BOT</button>
                        </div>
                        <input type="text" class="input-url text-center mb-4" placeholder="Input URL" value="HTTPS://SCHENGENVISAINFO.CO/SCHENGEN-VISA-INSURANCE">
                        <button class="btn btn-rounded-white px-10">CRAWL URL</button>
                    </div>
                    <!-- End Blue Header Card -->
                    <!-- Start Blue Input Text -->
                    <div class="manual-mode mb-5">
                        <div class="row mb-5 bg-info d-flex flex-column px-9 py-5 bg-primaryblue border-radius-5px mx-0">
                            <div class="d-flex align-items-center flex-row">
                                <span class="meta-title">
                                    PAGE TITLE
                                </span>
                                <div class="progress-bar_wrap ml-3">
                                    <div class="progress-bar_item progress-bar_item-1 blank"></div>
                                    <div class="progress-bar_item progress-bar_item-2 blank"></div>
                                    <div class="progress-bar_item progress-bar_item-3 blank"></div>
                                </div>
                            </div>
                            <input type="text" class="form-control bg-primaryblue text-white px-0 w-100" id="meta-title" placeholder="Type or paste your text..">
                        </div>
                        <div class="row bg-info d-flex flex-column px-9 py-5 bg-primaryblue border-radius-5px mx-0">
                            <div class="d-inline-flex flex-row align-items-center">
                                <span class="meta-desc d-inline-flex">
                                    META DESCRIPTION
                                </span>
                                <div class="progress-bar_wrap ml-3">
                                    <div class="progress-bar_item progress-bar_item-1 active"></div>
                                    <div class="progress-bar_item progress-bar_item-2 blank"></div>
                                    <div class="progress-bar_item progress-bar_item-3 blank"></div>
                                </div>
                            </div>
                            <textarea rows="1" class="form-control bg-primaryblue text-white px-0" placeholder="Type or paste your text.."></textarea>
                        </div>
                    </div>
                    <!-- End Blue Input Text -->
                    <!-- Start Mobile Result -->
                    <div class="d-flex align-self-baseline mobile-result flex-column mb-5">
                        <div class="card card-custom gutter-b mb-3">
                            <div class="card-body px-0">
                                <div class="d-flex flex-column px-10 py-3">
                                    <div class="link-meta d-flex align-items-center mb-2">
                                        <strong class="mr-2">Ad</strong>
                                        <span>visa-insurance.eu <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                    </div>
                                    <div class="title-meta mb-2">
                                        Buy ‪Travel Insurance Schengen‬ - Officially accepted for visa
                                    </div>
                                    <div class="desc-meta">
                                        Travel medical insurance to all Schengen Area. Refund if visa denied! Buy in 5 minutes. Pay with credit/deibt and get insurance documents instantly via email. No age limit.
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-10 py-3">
                                    <div class="link-meta d-flex flex-row align-items-center mb-2">
                                        <span>www.traveloka.com › en-id › insurance › travel › visa-schengen <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                    </div>
                                    <div class="title-meta mb-2">
                                        Buy Your Schengen Visa Travel Insurance at Traveloka
                                    </div>
                                    <div class="desc-meta">
                                        When arranging a Schengen Visa, tourists must equip themselves with travel insurance. Travel insurance is very important to provide protection as long as you are in this country. Without adequate travel insurance, your Schengen Visa application will be refused.
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-10 py-3 bg-color-lightyellow">
                                    <div class="link-meta d-flex flex-row align-items-center mb-2">
                                        <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                    </div>
                                    <div class="title-meta mb-2 color-green">
                                        Schengen Travel Visa Insurance – Europe Travel Insurance
                                    </div>
                                    <div class="desc-meta">
                                        Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                    </div>
                                </div>
                                <div class="d-flex flex-column px-10 py-3">
                                    <div class="link-meta d-flex flex-row align-items-center mb-2">
                                        <span>www.schengenvisainfo.com › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                                    </div>
                                    <div class="title-meta mb-2">
                                        Schengen Travel Visa Insurance – Europe Travel Insurance
                                    </div>
                                    <div class="desc-meta">
                                        Dec 10, 2020 — Schengen Visa Insurance Requirements · Minimum coverage of at least 30,000 EUR (equivalent to 34,000 USD). · It should cover all member ...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mobile Result -->
                </div>
            </div>
        </div>
        <div class="custom-container-fluid">
          <!-- Start Local Collection -->
          <div class="local-collection px-0 bg-white p-5">
                  <div class="local-collection-header d-flex justify-content-between mb-3 w-100">
                      <div class="d-flex flex-row align-items-center">
                          <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                          <span class="text-black font-15px">Your Local Collection</span>
                      </div>
                      <div>
                          <span class="clear-all font-15px pointer">Clear All</span>
                      </div>
                  </div>
                  <div class="local-collection-body mt-3">
                      <div class="custom-card py-5 px-3">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>https://cmlabs.co/..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </div>
                      <div class="custom-card py-5 px-3">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>https://cmlabs.co/..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </div>
                      <div class="custom-card py-5 px-3">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>https://cmlabs.co/..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </div>
                      <div class="custom-card py-5 px-3">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>https://cmlabs.co/..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </div>
                      <div class="custom-card py-5 px-3">
                          <div class="d-flex align-items-center justify-content-between">
                              <div>https://cmlabs.co/..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
          <!-- End Local Collection -->
        </div>
    </div>
</div>
<!-- END v2 VER -->




<!-- <div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>Title & Meta Description Checker</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5" id="kt_page_stretched_card">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">@lang('metachecker.title') </h1>
      <small>@lang('metachecker.sub-title')</small>
    </div>
  </div>
</div>
<div class="row" id="desktop">
  <div class="col-lg-12 mb-5">
    <div class="card card-custom card-stretch">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="meta-desktop text-center"><i class="fas fa-laptop icon-3x"></i></th>
            <th scope="col" class="meta-mobile text-center"><i class="fas fa-mobile icon-3x"></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="meta-desktop">
              <center>
                <div class="custom-wrapper-desktop">
                  <div class="p-5 custom-fixed-size">
                    <span id="resulttitle">CMLABS / Content Marketing Labs Indonesia</span><br>
                    <span id="resulturl">https://cmlabs.co</span> <br>
                    <span id="resultdesc">@lang('metachecker.desc-result')</span>
                  </div>
                </div>
              </center>
            </td>
            <td class="meta-mobile">
              <center>
                <div class="custom-wrapper-mobile">
                  <div class="p-5 custom-fixed-size-1">
                    <span id="resulturlmobile">https://cmlabs.co</span><br>
                    <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
                    <span id="resultdescmobile">@lang('metachecker.desc-result')</span>
                  </div>
                </div>
              </center>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 mb-5" id="mobile">
    <div class="card card-custom card-stretch">
      <div class="card-header justify-content-center">
        <div class="card-title">
          <i class="fas fa-mobile-alt icon-3x"></i>
        </div>
      </div>
      <div class="card-body">
        <div class="custom-wrapper-mobile">
          <center>
            <div class="p-5 custom-fixed-size-1">
              <span id="resulturlmobile">https://cmlabs.co</span><br>
              <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
              <span id="resultdescmobile">@lang('metachecker.desc-result')</span>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row " data-sticky-container>
  <div class="col-lg-8 mb-5">
    <div class="card card-custom mb-5">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">URLs</h2>
        </div>
      </div>
      <div class="card-body">
        <input type="text" name="" class="form-control" value="https://cmlabs.co" id="url">
        <button type="button" class="btn btn-primary mt-5" name="button" id="execute">@lang('metachecker.btn-get')
        </button>
        <br> <br>
        <a onclick="copy('url')" style="cursor:pointer;"> <small>@lang('metachecker.copy')</small></a>
          <small id="alerturl"></small><br>
        <small id="urlcheck">eg. https://cmlabs.co/en/</small>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.page-title')</h2>
        </div>
      </div>
      <div class="card-body">
        <input id="title" type="text" name="" class="form-control" value="CMLABS / Content Marketing Labs Indonesia"> <br>
        <a onclick="copy('title')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small> </a>
          <small id="alerttitle"></small><br>
        <small id="titlecount"></small>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-8')</h2>
        </div>
      </div>
      <div class="card-body">
        <textarea id="desc" type="text" name="" rows="3" class="form-control">@lang('metachecker.desc-result')</textarea><br>
        <a onclick="copy('desc')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small></a>
          <small id="alertdesc"></small><br>
        <small id="desccount"></small>
      </div>
    </div>
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-1')</h2>
        </div>
      </div>
      <div class="card-body">
        <p><a href="https://cmlabs.co/kamus-seo/apa-itu-serp/" target="_blank" style="color:blue" class="font-weight-bold">@lang('metachecker.copy-desc-1')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle" style="text-align:center"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td class="align-middle">
                <p class="font-weight-bold">@lang('metachecker.copy-subtitle-1')</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">URL</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>@lang('metachecker.copy-list-3-1')</li>
          <li>@lang('metachecker.copy-list-3-2')</li>
          <li>@lang('metachecker.copy-list-3-3')</li>
          <li>@lang('metachecker.copy-list-3-4')</li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-4-1')</p>
            <p>@lang('metachecker.copy-list-desc-4-1')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-4-2')</p>
            <p>@lang('metachecker.copy-list-desc-4-2')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-6')</h2>
        </div>
      </div>
      <div class="card-body">
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-1-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-1-2')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-2')</p>
            <p>@lang('metachecker.copy-list-desc-6-2-1')</p>
            <p>@lang('metachecker.copy-list-desc-6-2-2')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-3')</p>
            <p?>@lang('metachecker.copy-list-desc-6-3')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-6-4')</p>
            <p?>@lang('metachecker.copy-list-desc-6-4')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-7')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('metachecker.copy-desc-7')</p>
        <ol>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-7-1')</p>
            <p>@lang('metachecker.copy-list-desc-7-1')</p>
          </li>
          <li>
            <p class="font-weight-bold">@lang('metachecker.copy-list-title-7-2')</p>
            <p>@lang('metachecker.copy-list-desc-7-2')</p>
          </li>
        </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-8')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-8')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-9')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-title-10')</h2>
        </div>
      </div>
      <div class="card-body">
          <p>@lang('metachecker.copy-desc-10')</p>
          <ol>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-1')</p>
              <p>@lang('metachecker.copy-list-desc-10-1')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-2')</p>
              <p>@lang('metachecker.copy-list-desc-10-2')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-3')</p>
              <p>@lang('metachecker.copy-list-desc-10-3')</p>
            </li>
            <li>
              <p class="font-weight-bold">@lang('metachecker.copy-list-title-10-4')</p>
              <p>@lang('metachecker.copy-list-desc-10-4')</p>
            </li>
          </ol>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('metachecker.copy-8')</h2>
        </div>
      </div>
      <div class="card-body">
        <center>
          <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/serp-google-cmlabs-1024x820.png" width="100%" alt="serp google cmlabs">
          </div>
        </center>
        <p>@lang('metachecker.copy-9')</p>
        <h3 class="py-5">@lang('metachecker.copy-10')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-11')</th>
              <td>@lang('metachecker.copy-12')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-13')</th>
              <td>@lang('metachecker.copy-14')</td>
            </tr>
          </tbody>
        </table>
        <h3 class="py-5">@lang('metachecker.copy-15')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-16')</th>
              <td>@lang('metachecker.copy-17')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-18')</th>
              <td>@lang('metachecker.copy-19')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-20')</th>
              <td>@lang('metachecker.copy-21')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-22')</th>
              <td>@lang('metachecker.copy-23')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-24')</th>
              <td>@lang('metachecker.copy-25')</td>
            </tr>
          </tbody>
        </table>
        <h3 class="py-5">@lang('metachecker.copy-26')</h3>
        <table class="table">
          <tbody>
            <tr>
              <th scope="row" width="10%">@lang('metachecker.copy-27')</th>
              <td>@lang('metachecker.copy-28')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-29')</th>
              <td>@lang('metachecker.copy-30')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-31')</th>
              <td>@lang('metachecker.copy-32')</td>
            </tr>
            <tr>
              <th scope="row">@lang('metachecker.copy-33')</th>
              <td>@lang('metachecker.copy-34')</td>
            </tr>
            <tr>
              <th scope="row">*@lang('metachecker.copy-35')</th>
              <td>@lang('metachecker.copy-36')</td>
            </tr>
          </tbody>
        </table>
        <center>
          <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/galaxy-note-10-cmlabs.png" width="100%" alt="galaxy note 10 cmlabs">
          </div>
        </center>
      </div>
    </div>
  </div>

</div>
</div>
</div>
<br>
<span id="titlesizer" class="pd-0"></span>
<span id="titlesizertemp"></span>
<span id="descsizer"></span>
<span id="descsizertemp"></span> -->

@endsection
@push('script')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "@lang('home.homepage')",
      "item": "{{url('/')}}/{{$local}}"
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "Title & Meta Description Checker"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/metachecker.js')}}"></script>
@endpush
@section('title-checker')
menu-item-active
@endsection
