@extends('layouts.app')

@section('title', Lang::get('wordcounter.meta-title'))

@section('meta-desc', Lang::get('wordcounter.meta-desc'))

@section('meta-keyword', Lang::get('wordcounter.meta-keyword'))

@section('conical','/en/word-counter')

@section('en-link')
en/word-counter
@endsection

@section('id-link')
id/word-counter
@endsection

@push('style')
<style media="screen">
  .tooltip.tooltip-autosave-off.bs-tooltip-top .arrow::before,
  .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="top"] .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-top .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-auto[x-placement^="top"] .arrow::before {
    border-top-color: var(--primaryblue);
  }

  .tooltip.tooltip-autosave-off.bs-tooltip-right .arrow::before,
  .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="right"] .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-right .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-auto[x-placement^="right"] .arrow::before {
    border-right-color: var(--primaryblue);
  }

  .tooltip.tooltip-autosave-off.bs-tooltip-bottom .arrow::before,
  .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="bottom"] .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-bottom .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
    border-bottom-color: var(--primaryblue);
  }

  .tooltip.tooltip-autosave-off.bs-tooltip-left .arrow::before,
  .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="left"] .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-left .arrow::before,
  .tooltip.tooltip-autosave-on.bs-tooltip-auto[x-placement^="left"] .arrow::before {
    border-left-color: var(--primaryblue);
  }

  .tooltip.tooltip-autosave-off .tooltip-inner,
  .tooltip.tooltip-autosave-on .tooltip-inner {
    background-color: var(--primaryblue);
    color: white;
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

  @media only screen and (min-width: 768px) and (max-width:991px) {
    .local-collection .local-collection-title {
      max-width: 50%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

@media only screen and (min-width: 992px) and (max-width:1199px) {
  .local-collection .local-collection-title {
    max-width: 50%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

@media only screen and (min-width: 1200px) and (max-width:1399px){
  .local-collection .local-collection-title {
    max-width: 60%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

@media only screen and (min-width: 1400px) {
  .local-collection .local-collection-title {
    max-width: 63%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

  @media only screen and (min-width: 701px) {
    .local-collection-mobile .local-collection-title {
      max-width: 70%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 700px) {
    .local-collection-mobile .local-collection-title {
      max-width: 65%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

  }

  @media only screen and (max-width: 600px) {
    .local-collection-mobile .local-collection-title {
      max-width: 60%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 526px) {
    .local-collection-mobile .local-collection-title {
      max-width: 55%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 470px) {
    .local-collection-mobile .local-collection-title {
      max-width: 50%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 420px) {
    .local-collection-mobile .local-collection-title {
      max-width: 45%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 390px) {
    .local-collection-mobile .local-collection-title {
      max-width: 40%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen and (max-width: 370px) {
    .local-collection-mobile .local-collection-title {
      max-width: 35%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  @media only screen adn (max-width: 346px) {
    .local-collection-mobile .local-collection-title {
      max-width: 30%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }

  .container-label-top-keywords {
    width: 24px !important;
    height: 24px !important;

  }

  .label-top-3 {
    background: var(--darkgrey);
    color: white;
    font-weight: bold;
  }

  .label-not-top-3 {
    background: var(--lightgrey);
    color: var(--black);
    font-weight: bold;
  }

  .font-size-10px {
    font-size: 10px !important;
  }

  .font-size-12px {
    font-size: 12px !important;
  }

  .font-size-15px {
    font-size: 15px !important;
  }

  .wordcounter-background-text-size {
    background: #66757F;
    width: 45.16px;
    height: 33.16px;
  }

  .wordcounter-background-text-size:hover {
    background: #2A2F33;
    cursor: pointer;
  }

  .wordcounter-background-text-size-left-edge {
    background: #66757F;
    width: 45.16px;
    height: 33.16px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .wordcounter-background-text-size-right-edge {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .wordcounter-background-text-size.active {
    background: #2A2F33;
  }

  .wordcounter-background-density {
    background: #E1E8ED;
    width: 45.16px;
    height: 33.16px;
  }

  .wordcounter-background-density-left-edge {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    width: 65.16px;
  }

  .wordcounter-background-density-right-edge {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .wordcounter-background-density.active {
    background: #CCD6DD;
  }

  .wordcounter-background-density.wordcounter-background-density-left-edge:hover {
    background: #E1E8ED;
    cursor: auto;
  }

  .wordcounter-background-density:hover {
    background: #CCD6DD;
    cursor: pointer;
  }

  .word-counter-text-area {
    border: none;
  }

  .clear-all:hover {
    text-decoration: underline;
    cursor: pointer;
  }

  .local-collection-mobile {
    display: none !important;
  }

  .word-counter-result-card-mobile {
    display: none !important;
  }

  .header-local-collection {
    background: var(--lightgrey);
  }

  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .local-collection .local-collection-title {
      max-width: 55%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }


  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .local-collection .local-collection-title {
      max-width: 55%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  }


  @media only screen and (max-width: 767px) {
    .local-collection-mobile {
      display: block !important;
    }

    .word-counter-result-card-mobile {
      display: block !important;
    }

    .local-collection-mobile .local-collection-title {
      max-width: 70%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .local-collection {
      display: none !important;
    }

    .word-counter-result-card-desktop {
      display: none !important;
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




</style>
@endpush

@section('content')
<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">WORDS COUNTER</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>
      <div class="row mt-10">
        <div class="col-md-8">
          <div class="card card-custom mb-5">
            <div class="card-body py-3 px-4">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i id="copy-text" class='bx bxs-copy-alt bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <i id="reset" class='bx bxs-trash bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <div class="wordcounter-background-text-size-left-edge d-flex justify-content-center align-items-center p-2 ml-5">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                        <path d="M5 12L3 12 3 21 12 21 12 19 5 19zM12 5L19 5 19 12 21 12 21 3 12 3z" style="fill:white"></path>
                      </svg>
                    </span>
                  </div>
                  <div id="set-font-size-10px" class="wordcounter-background-text-size text-white font-weight-bolder d-flex justify-content-center align-items-center p-2">
                    10px
                  </div>
                  <div id="set-font-size-12px" class="wordcounter-background-text-size active text-white d-flex justify-content-center font-weight-bolder align-items-center p-2">
                    12px
                  </div>
                  <div id="set-font-size-15px" class="wordcounter-background-text-size wordcounter-background-text-size-right-edge text-white font-weight-bolder d-flex justify-content-center align-items-center p-2">
                    15px
                  </div>
                </div>
                <div id="autosaveParam" data-autosave="on" class="">
                  <a href="#local-collection-desktop">
                    <i class='bx bxs-collection bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  </a>
                  <i id="autoSaveOff" class='bx bxs-server bx-sm mx-2 text-darkgrey text-hover-primaryblue auto-save-off' data-html="true" data-placement="top" title="Autosave is <b>OFF</b>"></i>
                  <i id="autoSaveOn" class='bx bxs-server bx-sm mx-2 text-primaryblue text-hover-primaryblue auto-save-on' data-html="true" data-placement="top" title="Autosave is <b>ON</b>"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-custom mb-5">
            <div class="card-header pb-0 px-4">
              <div class="container px-0 pt-3">
                <div class="row">
                  <div class="col-lg col-md-3 col-sm-4 col-5">
                    <p class="mb-0">Characters</p>
                    <span class="h4 mb-0" id="characterCount">0</span>
                  </div>
                  <div class="col-lg col-md-3 col-sm-4 col-5">
                    <p class="mb-0">Words</p>
                    <span class="h4 mb-0" id="wordCount">0</span>
                  </div>
                  <div class="col-lg col-md-3 col-sm-4 col-5">
                    <p class="mb-0">Sentences</p>
                    <span class="h4 mb-0" id="sentenceCount">0</span>
                  </div>
                  <div class="col-lg col-md-3 col-sm-4 col-5">
                    <p class="mb-0">Paragraph</p>
                    <span class="h4 mb-0" id="paragraphCount">0</span>
                  </div>
                  <div class="col-lg col-md-3 col-sm-4 col-5">
                    <p class="mb-0">Reading Time</p>
                    <span class="h4 mb-0" id="readingTime">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body p-0">
            <textarea data-key="{{time()}}" data-autoresize name="name" placeholder="Type or paste your text.." rows="15" style="resize:none; overflow:hidden" class="form-control word-counter-text-area font-size-12px" id="textarea"></textarea>
            </div>
          </div>
          <div id="local-collection-desktop" class="local-collection">
            <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
              <div class="d-flex flex-row align-items-center">
                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                <span class="text-black font-15px">Your Local History</span>
              </div>
              <div onclick="clearAll()">
                <span class="clear-all font-15px pointer">Clear All</span>
              </div>
            </div>
            <div class="local-collection-body">
              <ul class="list-group" id="localsavedesktop">

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 word-counter-result-card-desktop">
          <div class="card card-custom mb-5">
            <div class="card-body py-3 px-4">
              <div class="d-flex justify-content-center align-items-center">
                <div class="wordcounter-background-density wordcounter-background-density-left-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  WORDS
                </div>
                <div id="showWords1Desktop" class="wordcounter-background-density active font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  1
                </div>
                <div id="showWords2Desktop" class="wordcounter-background-density d-flex justify-content-center font-weight-bolder align-items-center p-2">
                  2
                </div>
                <div id="showWords3Desktop" class="wordcounter-background-density wordcounter-background-density-right-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  3
                </div>
              </div>
            </div>
          </div>
          <div class="card card-custom mb-5">
            <div class="card-body p-5">
              <!-- DON'T DELETE THIS !!! -->
              <!-- <div class="row">
                <div class="col-6">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="container-label-top-keywords mr-3">
                      <span class="label label-lg label-top-3">1</span>
                    </div>
                    phases
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex justify-content-end align-items-center">
                    <span class="mr-3 font-weight-bolder mt-1">12</span>
                    <span class="font-weight-bolder mt-1">11.4%</span>
                  </div>
                </div>
              </div>
              <hr class="my-2"> -->
              <!-- DON'T DELETE THIS !!! -->
              <div class="" id="topKeywords">
              </div>
              <div class="" id="top2">
              </div>
              <div class="" id="top3">
              </div>
            </div>
          </div>
          <div class="word-counter-version-desktop">
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
        <span class="text-black font-15px">Your Local History</span>
      </div>
      <div>
        <span class="clear-all font-15px pointer">Clear All</span>
      </div>
    </div>
    <div class="local-collection-body mt-3 px-5" id="localsavemobile">

    </div>
  </div>
  <div class="bg-white p-5 word-counter-result-card-mobile">
    <div class="d-flex justify-content-center align-items-center mb-5">
      <div class="wordcounter-background-density wordcounter-background-density-left-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
        WORDS
      </div>
      <div id="showWords1Mobile" class="wordcounter-background-density active font-weight-bolder d-flex justify-content-center align-items-center p-2">
        1
      </div>
      <div id="showWords2Mobile" class="wordcounter-background-density d-flex justify-content-center font-weight-bolder align-items-center p-2">
        2
      </div>
      <div id="showWords3Mobile" class="wordcounter-background-density wordcounter-background-density-right-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
        3
      </div>
    </div>
    <div class="" id="topKeywordsMobile">
    </div>
    <div class="" id="top2Mobile">
    </div>
    <div class="mb-5" id="top3Mobile">
    </div>
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
@endsection
@push('script')
<script type="text/javascript">
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
<script>
  var counter = 0;

  function myFunction() {
    document.getElementById("kd").style.borderBottom = "2px solid #24daff";
    counter += 1;
    if (counter == 1) {
      $('#textarea').popover().click(function() {
        setTimeout(function() {
          $('#textarea').popover('hide');
        }, 24000);
      });
    } else {
      $('#textarea').popover().click(function() {
        $('#textarea').popover('hide');
      });
    }
  }
</script>
@endpush

@push('script')
<script src="{{asset('js/logic/word-counter.js')}}"></script>
@endpush
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
      "name": "Word Counter"
    }]
  }
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#autoSaveOff').tooltip({
      'template': '<div class="tooltip tooltip-autosave-off" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    });

    $('#autoSaveOn').tooltip({
      'template': '<div class="tooltip tooltip-autosave-on" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    });
    $("#top2").hide();
    $("#top3").hide();
    $("#top2Mobile").hide();
    $("#top3Mobile").hide();
    $("#autoSaveOff").hide();

    $("#autoSaveOn").click(function() {
      $("#autoSaveOn").hide();
      $("#autoSaveOff").show();
      $('#autosaveParam').data('autosave','off');
    });

    $("#autoSaveOff").click(function() {
      $("#autoSaveOn").show();
      $("#autoSaveOff").hide();
      $('#autosaveParam').data('autosave','on');
    });


    $("#copy-text").click(function() {
      const textarea = $('#textarea');
      textarea.select();
      document.execCommand("copy");
      toastr.info('Copied to Clipboard', 'Information');
    });

    $("#set-font-size-10px").click(function() {
      $("#set-font-size-10px").addClass("active");
      $("#set-font-size-12px").removeClass("active");
      $("#set-font-size-15px").removeClass("active");
      $("#textarea").addClass("font-size-10px");
      $("#textarea").removeClass("font-size-12px");
      $("#textarea").removeClass("font-size-15px");
    });

    $("#set-font-size-12px").click(function() {
      $("#set-font-size-10px").removeClass("active");
      $("#set-font-size-12px").addClass("active");
      $("#set-font-size-15px").removeClass("active");
      $("#textarea").removeClass("font-size-10px");
      $("#textarea").addClass("font-size-12px");
      $("#textarea").removeClass("font-size-15px");
    });

    $("#set-font-size-15px").click(function() {
      $("#set-font-size-10px").removeClass("active");
      $("#set-font-size-12px").removeClass("active");
      $("#set-font-size-15px").addClass("active");
      $("#textarea").removeClass("font-size-10px");
      $("#textarea").removeClass("font-size-12px");
      $("#textarea").addClass("font-size-15px");
    });

    $("#showWords1Desktop").click(function() {
      $("#showWords1Desktop").addClass("active");
      $("#showWords2Desktop").removeClass("active");
      $("#showWords3Desktop").removeClass("active");
      $("#showWords1Mobile").addClass("active");
      $("#showWords2Mobile").removeClass("active");
      $("#showWords3Mobile").removeClass("active");
      $("#topKeywords").show();
      $("#top2").hide();
      $("#top3").hide();
      $("#topKeywordsMobile").show();
      $("#top2Mobile").hide();
      $("#top3Mobile").hide();
    });

    $("#showWords2Desktop").click(function() {
      $("#showWords1Desktop").removeClass("active");
      $("#showWords2Desktop").addClass("active");
      $("#showWords3Desktop").removeClass("active");
      $("#showWords1Mobile").removeClass("active");
      $("#showWords2Mobile").addClass("active");
      $("#showWords3Mobile").removeClass("active");
      $("#topKeywords").hide();
      $("#top2").show();
      $("#top3").hide();
      $("#topKeywordsMobile").hide();
      $("#top2Mobile").show();
      $("#top3Mobile").hide();
    });

    $("#showWords3Desktop").click(function() {
      $("#showWords1Desktop").removeClass("active");
      $("#showWords2Desktop").removeClass("active");
      $("#showWords3Desktop").addClass("active");
      $("#showWords1Mobile").removeClass("active");
      $("#showWords2Mobile").removeClass("active");
      $("#showWords3Mobile").addClass("active");
      $("#topKeywords").hide();
      $("#top2").hide();
      $("#top3").show();
      $("#topKeywordsMobile").hide();
      $("#top2Mobile").hide();
      $("#top3Mobile").show();
    });

    $("#showWords1Mobile").click(function() {
      $("#showWords1Desktop").addClass("active");
      $("#showWords2Desktop").removeClass("active");
      $("#showWords3Desktop").removeClass("active");
      $("#showWords1Mobile").addClass("active");
      $("#showWords2Mobile").removeClass("active");
      $("#showWords3Mobile").removeClass("active");
      $("#topKeywords").show();
      $("#top2").hide();
      $("#top3").hide();
      $("#topKeywordsMobile").show();
      $("#top2Mobile").hide();
      $("#top3Mobile").hide();
    });

    $("#showWords2Mobile").click(function() {
      $("#showWords1Desktop").removeClass("active");
      $("#showWords2Desktop").addClass("active");
      $("#showWords3Desktop").removeClass("active");
      $("#showWords1Mobile").removeClass("active");
      $("#showWords2Mobile").addClass("active");
      $("#showWords3Mobile").removeClass("active");
      $("#topKeywords").hide();
      $("#top2").show();
      $("#top3").hide();
      $("#topKeywordsMobile").hide();
      $("#top2Mobile").show();
      $("#top3Mobile").hide();
    });

    $("#showWords3Mobile").click(function() {
      $("#showWords1Desktop").removeClass("active");
      $("#showWords2Desktop").removeClass("active");
      $("#showWords3Desktop").addClass("active");
      $("#showWords1Mobile").removeClass("active");
      $("#showWords2Mobile").removeClass("active");
      $("#showWords3Mobile").addClass("active");
      $("#topKeywords").hide();
      $("#top2").hide();
      $("#top3").show();
      $("#topKeywordsMobile").hide();
      $("#top2Mobile").hide();
      $("#top3Mobile").show();
    });

    $('a[href*="#"]:not([href="#"])').click(function() {
      var offset = -80;
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top + offset
          }, 400);
          return false;
        }
      }
    });
  });
</script>
@endpush
@section('word-counter')
active
@endsection
