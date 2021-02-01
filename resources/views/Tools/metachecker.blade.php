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
    text-decoration: none solid rgb(0, 102, 33);
    color: #006621;
  }

  #resulttitlemobile {
    font-size: 20px;
    color: #1A0DAB;
    line-height: 26px;
    word-spacing: 0px;
    text-decoration: none solid rgb(26, 13, 171);
  }

  #resultdescmobile {
    font-size: 14px;
    color: #3C4043;
    line-height: 22.12px;
    word-spacing: 0px;
    text-decoration: none solid rgb(60, 64, 67);
  }

  table.table {
    width: 100%;
  }

  table tr th.meta-desktop,
  table tr td.meta-desktop {
    width: 60%;
    /*  */
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
    border: 1px solid #dadce6;
    width: 19em;
    height: 100%;
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

  .title {
    font-weight: 400;
    font-size: 30px;
    color: var(--darkgrey);
    line-height: 35px;
  }

  .subtitle {
    font-weight: 400;
    font-size: 20px;
    color: var(--darkgrey);
    line-height: 35px;
  }

  .header-blue {
    background: var(--primaryblue);
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 40px;
  }

  .btn-group-black {
    background: var(--black);
  }

  .btn-group-black:focus,
  .btn-group-black:hover {
    background: #DCAD05;
  }

  .input-url,
  .input-url:focus {
    background: var(--primaryblue);
    color: var(--white);
    border: none;
    width: 100%;
    text-transform: uppercase;
    outline: none;
  }

  .for-mobile .input-url,
  .input-url:focus {
    background: var(--primaryblue);
    color: var(--white);
    border: none;
    width: 95%;
    text-transform: uppercase;
    outline: none;
  }

  .btn-rounded-white {
    background: var(--white);
    color: var(--black);
    border-radius: 20px;
    font-weight: 700;
  }

  .desktop-result {
    width: 58%;
  }

  .mobile-result {
    width: 39%;
  }

  .title-meta {
    color: #1A0DAB;
    font-size: 20px;
    line-height: 23px;
  }

  .color-green {
    color: #009A0F !important;
  }

  .bg-color-lightyellow {
    background: rgba(255, 222, 104, 0.15) !important;
  }

  .desc-meta {
    color: #4D5156;
    font-size: 13px;
    line-height: 15px;
  }

  .header-local-collection {
    background: var(--lightgrey);
  }

  .clear-all:hover {
    text-decoration: underline;
  }

  .list-group-item-action:hover,
  .list-group-item-action:focus {
    background: var(--primaryblue);
    color: var(--white);
  }

  .list-group-item-action:hover .date-created {
    color: var(--white) !important;
  }

  .list-group-item-action:hover i {
    color: rgba(42, 47, 51, 0.3) !important;
  }

  .list-group-item-action i {
    color: var(--grey) !important;
  }

  .list-group-item-action i:hover {
    color: var(--darkgrey) !important;
  }

  .custom-container {
    padding: 0 100px;
  }

  .meta-title {
    color: var(--white);
    font-weight: 700;
    font-size: 15px;
  }

  .meta-desc {
    color: var(--white);
    font-weight: 700;
    font-size: 15px;
  }

  .input-meta-title::placeholder,
  .input-meta-description::placeholder,
  .input-url::placeholder {
    color: var(--white);
  }

  input.input-meta-title,
  textarea.input-meta-description {
    border: none;
  }

  .progress-bar_wrap {
    width: 150px;
    height: 11px;
    background: var(--primaryblue);
    display: inline-block;
    overflow: hidden;
  }

  .progress-bar_item {
    display: inline-block;
    height: 100%;
    width: 20%;
    margin-right: .8%;
    float: left;
  }

  .progress-bar_item-1.active,
  .progress-bar_item-2.active,
  .progress-bar_item-3.active {
    background: #B1F25D;
  }

  .progress-bar_item-1.blank,
  .progress-bar_item-2.blank,
  .progress-bar_item-3.blank {
    background: var(--white);
  }

  .for-mobile .custom-card {
    border-radius: 5px;
  }

  .for-mobile .local-collection-body .custom-card:hover,
  .for-mobile .local-collection-body .custom-card:focus {
    background: var(--primaryblue);
    color: var(--white);
  }

  .for-mobile .local-collection-body .custom-card i:hover {
    color: var(--darkgrey) !important;
  }

  .header-blue-mobile,
  .local-collection-mobile {
    display: none !important;
  }

  @media only screen and (min-width: 1400px) {
    .custom-fixed-size {
      width: 580px;
    }

    .custom-fixed-size-1 {
      transform: scale(0.9);
    }
  }

  @media only screen and (max-width: 992px) {

    .col-mobile {
      text-align: center !important;
      margin-bottom: 5px !important;
      margin-top: 5px !important;
    }

    .custom-card:hover,
    .custom-card:focus,
    .custom-card:hover .date-created,
    .custom-card:focus .date-created {
      background: var(--primaryblue);
      color: var(--white);
    }

    .custom-card:hover i {
      color: var(--darkgrey)
    }

    .local-collection {
      display: none !important;
    }

    .version {
      display: none !important;
    }


    .mobile-result {
      width: 100%;
    }

    .desktop-result {
      display: none !important;
    }

  }

  @media only screen and (max-width: 800px) {
    /* .custom-container {
            padding: 0 1em;
        } */

  }

  @media only screen and (max-width: 700px) {

    .date-created {
      font-size: 10px !important;
    }
  }

  @media only screen and (max-width: 600px) {
    .meta-desc {
      width: 40.7%;
    }

  }

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

  @media only screen and (max-width: 767px) {
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

    .progress-bar_wrap {
      width: 100px !important;
    }
  }
  }
  /* DESCRIPTION TOOLS */
  @media (max-width:767px) {
    .container-description {
      padding-top: 1.25rem !important;
      padding-bottom: 1.25rem !important;
    }
  }

  .alert-features-new .alert-text .alert-title {
    color: var(--darkblue);
  }

  .alert-features-new .alert-text .label-alert-features {
    background: #0FBC0C;
    margin-bottom: 2px;
  }

  .alert-features-new .alert-close {
    position: absolute;
    top: 0;
    right: 0;
  }

  .alert-features-new .alert-close>button {
    opacity: 1;
  }

  .alert-features-new .alert-close>button>span>.icon-alert-close {
    color: var(--darkgrey) !important;
    font-weight: bolder;
  }


  .list-group-item-action:hover,
  .list-group-item-action:focus {
    background: var(--primaryblue);
    color: var(--white);
    cursor: pointer;
  }

  .list-group-item-action:hover .date-created {
    color: var(--white) !important;
  }

  .list-group-item-action:hover i {
    color: rgba(42, 47, 51, 0.3) !important;
  }

  .list-group-item-action:hover i:hover {
    color: var(--black) !important;
  }

  .list-group-item-action i {
    color: var(--grey) !important;
  }

  .btn-explore {
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

  .btn-explore:hover {
    background: var(--lightgrey);
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

  .robo-img {
    width: 60%;
    vertical-align: middle;
  }

  @media (min-width: 280px) and (max-width: 767px) {
    .robo-container {
      display: flex;
      justify-content: center;
      vertical-align: middle;
    }

    .robo-text-container {
      text-align: center;
    }
  }

  @media (min-width: 576px) and (max-width: 767px) {
    .robo-img {
      width: 40%;
      vertical-align: middle;
    }

    .robo-text-container {
      padding: 0 50px;
      text-align: center;
    }
  }

  @media (min-width: 768px) {
    .robo-container {
      display: flex;
      justify-content: flex-end;
      vertical-align: middle;
    }
  }

  @media (min-width: 992px) {

    .container-description,
    .container-tools {
      padding: 0px 100px;
    }
  }

  .card-whats-new {
    background: var(--lightgrey);
    border-radius: 5px;
  }

  .label-tools-description {
    background: var(--lightgrey);
    color: var(--black);
    font-weight: bold;
  }


    .tools-description-points:hover .label-tools-description {
      background: var(--darkgrey);
      color: var(--white);
      font-weight: bold;
      text-decoration: none !important;
    }

    .tools-description-points {
      color: var(--primaryblue);
      cursor: pointer;
    }

    .tools-description-points:hover a{
      text-decoration: underline !important;
      color: #0F90E7 !important;

    }


  .checkbox-features {
    cursor: auto !important;
    opacity: 1 !important;
    margin-bottom: 10px !important;
  }

  .checkbox-features>span::after {
    width: 5px !important;
    height: 10px !important;
  }

  .checkbox-features>input:checked~span {
    background: var(--black);
  }

  .checkbox-features.features-disabled bdi {
    opacity: 0.6;
  }

  .label-whats-new {
    background: #0FBC0C;
  }

  .button-close-whats-new {
    color: var(--darkgrey);
    cursor: pointer;
  }

  .button-close-whats-new:hover {
    color: var(--black);
  }

  .view-all-release {
    cursor: pointer;
  }

  .view-all-release:hover {
    text-decoration: underline;
  }

  .container-description {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }

  .custom-features-accordion .card .card-header .card-title.collapsed,
  .custom-features-accordion .card .card-header .card-title::after {
      color: var(--darkgrey) !important;
  }
  .custom-features-accordion .card .card-header .card-title,
  .custom-features-accordion .card .card-header .card-title.collapsed::after {
      color: var(--darkgrey) !important;
  }

  .custom-features-accordion .card .card-header .card-title small {
      color: var(--darkgrey) !important;
  }
  .custom-features-accordion .card .card-header .card-title.collapsed span,
  .custom-features-accordion .card .card-header .card-title.collapsed small {
      color: var(--darkgrey) !important;
  }
  /* END DESCRIPTION TOOLS */

  .metachecker-background-text-size {
    background: var(--black);
    width: 65.16px;
    height: 33.16px;
  }

  .metachecker-background-text-size:hover {
    background: #DCAD05;
    cursor: pointer;
  }

  .metachecker-background-text-size-left-edge {
    background: var(--black);
    width: 35.16px;
    height: 33.16px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .metachecker-background-text-size-right-edge {
    width: 38.16px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .metachecker-background-text-size.active {
    background: #DCAD05;
  }

  @media (max-width:767px) {
    .metachecker-option {
      justify-content: center;
    }

    #DesktopResult {
      display: none !important;
    }


    .metachecker-version-desktop {
      display: none;
    }

    .local-collection-mobile {
      display: block !important;
    }

  }

  .btn-crawl {
    background: white;
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

  .btn-crawl:hover {
    background: var(--lightgrey);
    color: var(--black);
    border-radius: 20px;
    font-weight: bold;
  }

  .local-collection-mobile .local-collection-body .custom-card {
    border-radius: 5px;
  }

  .local-collection-mobile .local-collection-body .custom-card:hover {
    background: var(--primaryblue);
    cursor: pointer;
    color: white;
  }

  .local-collection-mobile .local-collection-body .custom-card:hover .date-created {
    color: white !important;
  }

  .local-collection-mobile .local-collection-body .custom-card:hover i {
    color: #1d7ebf !important;
  }

  .local-collection-mobile .local-collection-body .custom-card i:hover {
    color: #66757f !important;
  }
</style>
@endpush
<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">PAGE TITLE & META DESCRIPTION CHECKER</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>
      <div class="header-blue py-3 mb-5 px-4 mt-10">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 text-left pl-0 col-mobile">
            <div class="d-flex align-items-center metachecker-option">
              <div class="metachecker-background-text-size-left-edge d-flex justify-content-center align-items-center p-2 ml-5">
                <i class='bx bxs-cog text-white'></i>
              </div>
              <div id="manualModeOff" class="metachecker-background-text-size text-white font-weight-bolder justify-content-center align-items-center p-2" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is OFF">
                MANUAL
              </div>
              <div id="manualModeOn" class="metachecker-background-text-size active text-white font-weight-bolder justify-content-center align-items-center p-2" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is ON">
                MANUAL
              </div>
              <div id="botModeOff" class="metachecker-background-text-size metachecker-background-text-size-right-edge text-white font-weight-bolder justify-content-center align-items-center p-2" data-toggle="tooltip" data-theme="dark" title="BOT mode is OFF">
                BOT
              </div>
              <div id="botModeOn" class="metachecker-background-text-size active metachecker-background-text-size-right-edge text-white font-weight-bolder justify-content-center align-items-center p-2" data-toggle="tooltip" data-theme="dark" title="BOT mode is ON">
                BOT
              </div>
            </div>
            <!-- <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-group-black text-white"><i class='bx bxs-cog' style='color:#ffffff'></i></button>
              <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="MANUAL mode is ON">MANUAL</button>
              <button type="button" class="btn btn-group-black text-white" data-toggle="tooltip" data-theme="dark" title="BOT mode is ON">BOT</button>
            </div> -->
          </div>
          <div class="col-md-6 col-mobile">
            <input id="url" type="text" class="input-url text-center w-100" placeholder="Input URL" value="HTTPS://SCHENGENVISAINFO.CO/SCHENGEN-VISA-INSURANCE">
          </div>
          <div class="col-md-3 text-right col-mobile">
            <button id="crawlURL" class="btn btn-crawl px-10">CRAWL URL</button>
          </div>
        </div>
      </div>

      <div id="manual-mode" class="mb-5">
        <div class="bg-info bg-primaryblue border-radius-5px mb-5 px-9 py-5">
          <div class="row d-flex flex-column ">
            <div class="d-flex align-items-center flex-row">
              <span class="meta-title mr-5">PAGE TITLE</span>
              <div class="progress-bar_wrap">
                <div class="progress-bar_item progress-bar_item-1 active"></div>
                <div class="progress-bar_item progress-bar_item-2 active"></div>
                <div class="progress-bar_item progress-bar_item-3 blank"></div>
              </div>
            </div>
            <input id="title" type="text" class="form-control bg-primaryblue text-white px-0 input-meta-title" id="meta-title" placeholder="Type or paste your text..">
          </div>
        </div>
        <div class="bg-info py-5 px-9 bg-primaryblue border-radius-5px">
          <div class="row d-flex flex-column">
            <div class="d-flex align-items-center flex-row">
              <span class="meta-desc mr-5">META DESCRIPTION</span>
              <div class="progress-bar_wrap">
                <div class="progress-bar_item progress-bar_item-1 active"></div>
                <div class="progress-bar_item progress-bar_item-2 active"></div>
                <div class="progress-bar_item progress-bar_item-3 active"></div>
              </div>
            </div>
            <textarea id="desc" data-autoresize rows="1" class="form-control bg-primaryblue text-white px-0 input-meta-description" placeholder="Type or paste your text.." style="resize:none; overflow:hidden"></textarea>
          </div>
        </div>
      </div>
      <!-- End Blue Input Text -->
      <!-- Start Main Content -->
      <div class="row mb-5">
        <div id="DesktopResult" class="col-lg-7">
          <div class="card card-custom mb-5">
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
                  When arranging a Schengen Visa, tourists must equip themselves with travel insurance. Travel insurance is very important to provide protection as long as you are in this country. Without adequate travel insurance, your Schengen
                  Visa application will be refused.
                </div>
              </div>
              <div class="d-flex flex-column px-10 py-3 bg-color-lightyellow">
                <div class="link-meta d-flex flex-row align-items-center mb-2">
                  <span id="resulturl">www.schengenvisainfo.com</span><span> › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                </div>
                <div id="resulttitle" class="title-meta mb-2 color-green">
                  Schengen Travel Visa Insurance – Europe Travel Insurance
                </div>
                <div id="resultdesc" class="desc-meta">
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
        </div>
        <div  id="MobileResult"  class="col-lg-5">
          <div class="card card-custom mb-5">
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
                  When arranging a Schengen Visa, tourists must equip themselves with travel insurance. Travel insurance is very important to provide protection as long as you are in this country. Without adequate travel insurance, your Schengen
                  Visa application will be refused.
                </div>
              </div>
              <div class="d-flex flex-column px-10 py-3 bg-color-lightyellow">
                <div class="link-meta d-flex flex-row align-items-center mb-2">
                  <span id="resulturlmobile">www.schengenvisainfo.com</span><span> › schengen-visa-insurance <i class='bx bx-caret-down ml-1' style="color: #4D5156; vertical-align: text-bottom;"></i></span>
                </div>
                <div id="resulttitlemobile" class="title-meta mb-2 color-green">
                  Schengen Travel Visa Insurance – Europe Travel Insurance
                </div>
                <div id="resultdescmobile" class="desc-meta">
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
          <div class="metachecker-version-desktop">
            <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
             <div class="card bg-transparent" style="">
              <div class="card-header" id="headingOne2">
               <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                Version 2.3
               </div>
              </div>
              <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
               <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="d-flex align-items-center">
                  <i class='bx bxs-check-circle text-darkgrey mr-1' ></i>
                  <span class="text-darkgrey h6 mb-0">Updated 8 Jan, 2021</span>
                </div>
               </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w-100">
  <div class="local-collection-mobile bg-white py-5">
    <div class="local-collection-header d-flex justify-content-between mb-3 w-100 px-5">
      <div class="d-flex flex-row align-items-center">
        <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
        <span class="text-black font-15px">Your Local Collection</span>
      </div>
      <div>
        <span class="clear-all font-15px pointer">Clear All</span>
      </div>
    </div>
    <div class="local-collection-body mt-3 px-5">
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">Hari ini saya akan menulis tentang bagaimana..</div>
          <div class="d-flex align-items-center">
            <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
            <i class='bx bxs-x-circle text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">Sudah sembilan puluh hari, perusahaan kami m..</div>
          <div class="d-flex align-items-center">
            <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
            <i class='bx bxs-x-circle text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">Dalam banyak kasus, virus paling mematikan di..</div>
          <div class="d-flex align-items-center">
            <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
            <i class='bx bxs-x-circle text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">SEO merupakan pekerjaan marketing dengan ef..</div>
          <div class="d-flex align-items-center">
            <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
            <i class='bx bxs-x-circle text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">Pekerjaan ini menuntut setiap penulis harus pek..</div>
          <div class="d-flex align-items-center">
            <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
            <i class='bx bxs-x-circle text-grey'></i>
          </div>
        </div>
      </div>
    </div>
    <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion px-5" id="accordionExample2">
      <div class="card bg-transparent" style="">
        <div class="card-header" id="headingOne2">
          <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
            Version 2.3
          </div>
        </div>
        <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="d-flex align-items-center">
              <i class='bx bxs-check-circle text-darkgrey mr-1' ></i>
              <span class="text-darkgrey h6 mb-0">Updated 8 Jan, 2021</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="" style="background:white">
  <div class="container container-description">
    <h2 class="text-black">Advance your writing</h2>
    <div class="row">
      <div class="col-md-9">
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-3">
        <div class="d-flex align-items-center mb-5 tools-description-points">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">1</span>
          </div>
          <a href="#" class="">Why does SEO important for writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">2</span>
          </div>
          <a href="#" class="">How search engine works?</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">3</span>
          </div>
          <a href="#" class="">The basic of writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">4</span>
          </div>
          <a href="#" class="">Measuring your writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">5</span>
          </div>
          <a href="#" class="">Hiring profesional content strategy and consultant?</a>
        </div>
      </div>
    </div>
    <div class="my-10" style="background:var(--darkgrey); border-radius:20px">
      <div class="row">
        <div class="col-md-6 py-5">
          <div class="robo-container">
            <img src="{{asset('/media/images/robo-footer.png')}}" alt="" class="robo-img">
          </div>
        </div>
        <div class="col-md-6 py-10 pr-10">
          <div class="robo-text-container">
            <h2 class="text-white">Writing Starter Guide</h2>
            <p class="text-white">The Search Engine Optimization (SEO) Starter Guide provides best practices to make it easier for search engines to crawl, index, and understand your content.</p>
            <button type="button" class="btn btn-explore " name="button">Explore today?</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-10">
      <div class="col-md-6">
        <h2 class="text-black">Available features</h2>
        <p class="text-black" style="font-size:1.5rem">Explore the full features of cmlabs WORD COUNTER</p>
        <p class="text-black">CMLABS will enhance your writing capabilities and incorporate strategical thinking to provide technical advice from the our data.</p>
      </div>
      <div class="col-md-6">
        <div class="d-flex align-items-center">
          <span class="text-primaryblue">cmlabs Words Counter</span>
          <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
          <small class="text-grey">Updated 25 Dec, 2020</small>
        </div>
        <p class="font-weight-bold mt-3">CMLABS Analytics opens many possible ways to access, organize, and visualize your SERRPs data to suit your business needs.</p>
        <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes12" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 1.0</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes13" /><span></span>&nbsp;&nbsp;<bdi>Exact and average Google Search Volume. Version
            1.3</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14" /><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
      </div>
    </div>
    <h2 class="text-black">What’s new on cmlabs Words Counter</h2>
    <div class="row my-5">
      <div class="col-md-6 mb-5">
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
            <span class="font-weight-light">Last Update Dec 2, 2020</span>
          </div>
          <div class="alert-close pt-5 pr-5">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
            </button>
          </div>
          <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting
            from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives.</span>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">What's new</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
            <span class="font-weight-light">Last Update Dec 2, 2020</span>
          </div>
          <div class="alert-close pt-5 pr-5">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
            </button>
          </div>
          <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting
            from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives. </span>
        </div>
      </div>
    </div>
    <p class="text-black view-all-release">View all web-release?</p>
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
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "Title & Meta Description Checker"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/metachecker.js')}}"></script>
<script type="text/javascript">
$( document ).ready(function() {
    $("#manualModeOn").hide();
    $("#botModeOff").hide();
    $("#manual-mode").hide();

    $('#manualModeOff').click(function(){
      $('#manualModeOn').show();
      $('#manualModeOff').hide();
      $('#botModeOn').hide();
      $('#botModeOff').show();
      $("#manual-mode").show();
      $("#crawlURL").attr("disabled", true);
    });

    $('#botModeOff').click(function(){
      $('#manualModeOn').hide();
      $('#manualModeOff').show();
      $('#botModeOn').show();
      $('#botModeOff').hide();
      $("#manual-mode").hide();
      $("#crawlURL").attr("disabled", false);
    });
});
jQuery.each(jQuery('textarea[data-autoresize]'), function() {
  var offset = this.offsetHeight - this.clientHeight;

  var resizeTextarea = function(el) {
    jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
  };
  jQuery(this).on('keyup input', function() {
    resizeTextarea(this);
  }).removeAttr('data-autoresize');
});
</script>
<script type="text/javascript">


</script>

@endpush
@section('title-checker')
active
@endsection
