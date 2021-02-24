@extends('layouts.app')

@section('title', 'Keyword Research')

@section('meta-desc', 'Keyword Research')

@section('meta-keyword', 'Keyword Research')

@section('conical','/en/keyword-research')

@section('en-link')
en/keyword-research
@endsection

@section('id-link')
id/keyword-research
@endsection

@push('style')
<style media="screen">
  .btn-crawl {
    height: 60%;
    width: 100%;
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

  .header-blue {
    background: var(--primaryblue);
    border-radius: 5px;
  }

  .kwresearch-url {
    background: var(--primaryblue);
    border: none;
    color: white;
  }

  .kwresearch-url::placeholder {
    color: white;
  }

  .kwresearch-url:focus {
    background: var(--primaryblue);
    border: none;
    color: white;
  }

  .what-is-this {
    cursor: pointer;
  }

  .what-is-this:hover {
    text-decoration: underline;
  }

  .links {
    color: var(--primaryblue);
    cursor: pointer;
  }

  .links:hover {
    color: #037BCB;
    cursor: pointer;
    text-decoration: underline !important;
  }

  .label-primary-version {
    background: var(--lightgrey);
    color: var(--darkgrey);
  }

  .clear-all:hover {
    text-decoration: underline;
  }

  .kwresearch-url-result {
    color: var(--darkgrey);
    font-weight: bold;
  }

  @media (min-width: 992px) {

    .container-description,
    .container-tools {
      padding: 0px 100px;
    }
  }



  @media (max-width:767px) {
    .btn-add-question {
      width: 100%;
    }
  }



  @media only screen and (min-width: 768px) {
    #local-collection-desktop .local-collection-title {
      max-width: 70%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

  }

  .btn-cancel {
    line-height: 1;
    width: 100px;
    background: #FF5656;
    color: white;
    border-radius: 20px;
  }

  .btn-cancel:hover {
    background: #FB1818;
    color: white;
    border-radius: 20px;
  }

  .btn-cancel-disabled {
    line-height: 1;
    width: 100px;
    background: var(--grey);
    color: white;
    border-radius: 20px;
    cursor: not-allowed;
  }

  .btn-cancel-disabled:hover {
    line-height: 1;
    width: 100px;
    background: var(--grey);
    color: white;
    border-radius: 20px;
    cursor: not-allowed;
  }

  .btn-download-kwresearch {
    line-height: 1;
    width: 137px;
    background: var(--darkgrey);
    color: white;
    border-radius: 20px;
  }

  .btn-download-kwresearch:hover {
    background: var(--black);
    color: white;
  }

  .btn-download-kwresearch-disabled {
    line-height: 1;
    width: 137px;
    background: var(--grey);
    color: white;
    border-radius: 20px;
    cursor: not-allowed;
  }

  .btn-download-kwresearch-disabled:hover {
    background: var(--grey);
    color: white;
    cursor: not-allowed;
  }

  .kwresearch-show-more {
    color:var(--darkgrey);
  }

  .result-row:hover .kwresearch-url-result {
    color: var(--black);
  }

  .result-row-show-more {
    cursor: pointer;
  }

  .result-row .keyword, .result-row .vol, .result-row .cpc, .result-row .pd, .result-row .sd, .result-row .content-ideas{
    color: var(--darkgrey);
  }

  .result-row:hover .keyword, .result-row:hover .vol, .result-row:hover .cpc, .result-row:hover .pd, .result-row:hover .sd, .result-row:hover .content-ideas {
    color: var(--black);
    font-weight: 500;
  }

  .result-row-show-more:hover .kwresearch-url-result, .result-row-show-more:hover .kwresearch-show-more {
    color: var(--black);
  }

  /* DESCRIPTION TOOLS */
  @media only screen and (max-width: 767px) {
    .desktop-version {
      display: none;
    }
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
  .tools-description-points:hover a {
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
  .local-collection-mobile {
    display: none !important;
  }
  @media only screen and (max-width: 767px) {
    .local-collection-mobile {
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
  }
  .clear-all:hover {
    text-decoration: underline;
  }
  /* END DESCRIPTION TOOLS */

  @media only screen and (max-width:575px){
    .number {
      min-width: 10%;
      max-width: 10%;
      width: 10%;
    }

    .content-ideas {
      min-width: 90%;
      max-width: 90%;
      width: 90%;
    }

    .keyword {
      min-width: 25%;
      max-width: 25%;
      width: 25%;
    }

    .vol {
      min-width: 23%;
      max-width: 23%;
      width: 23%;
    }

    .cpc {
      min-width: 18%;
      max-width: 18%;
      width: 18%;
    }

    .pd {
      min-width: 12%;
      max-width: 12%;
      width: 12%;
    }

    .sd{
      min-width: 12%;
      max-width: 12%;
      width: 12%;
    }

  }

  @media only screen and (min-width:576px) and (max-width: 767px) {
    .number {
      min-width: 6%;
      max-width: 6%;
      width: 6%;
    }

    .content-ideas {
      min-width: 94%;
      max-width: 94%;
      width: 94%;
    }

    .keyword {
      min-width: 53%;
      max-width: 53%;
      width: 53%;
    }

    .vol {
      min-width: 15%;
      max-width: 15%;
      width: 15%;
    }

    .cpc {
      min-width: 10%;
      max-width: 10%;
      width: 10%;
    }

    .pd {
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

    .sd{
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

  }

  @media only screen and (min-width:768px) and (max-width: 991px) {
    .number {
      min-width: 6%;
      max-width: 6%;
      width: 6%;
    }

    .content-ideas {
      min-width: 94%;
      max-width: 94%;
      width: 94%;
    }

    .keyword {
      min-width: 53%;
      max-width: 53%;
      width: 53%;
    }

    .vol {
      min-width: 15%;
      max-width: 15%;
      width: 15%;
    }

    .cpc {
      min-width: 10%;
      max-width: 10%;
      width: 10%;
    }

    .pd {
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

    .sd{
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

  }

  @media only screen and (min-width:992px) and (max-width: 1199px) {
    .number {
      min-width: 6%;
      max-width: 6%;
      width: 6%;
    }

    .content-ideas {
      min-width: 94%;
      max-width: 94%;
      width: 94%;
    }

    .keyword {
      min-width: 53%;
      max-width: 53%;
      width: 53%;
    }

    .vol {
      min-width: 15%;
      max-width: 15%;
      width: 15%;
    }

    .cpc {
      min-width: 10%;
      max-width: 10%;
      width: 10%;
    }

    .pd {
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

    .sd{
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

  }

  @media only screen and (min-width:1200px) and (max-width: 1399px) {
    .number {
      min-width: 4%;
      max-width: 4%;
      width: 4%;
    }

    .content-ideas {
      min-width: 96%;
      max-width: 96%;
      width: 96%;
    }

    .keyword {
      min-width: 66%;
      max-width: 66%;
      width: 66%;
    }

    .vol {
      min-width: 12%;
      max-width: 12%;
      width: 12%;
    }

    .cpc {
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

    .pd {
      min-width: 5%;
      max-width: 5%;
      width: 5%;
    }

    .sd{
      min-width: 5%;
      max-width: 5%;
      width: 5%;
    }

  }

  @media only screen and (min-width:1400px){
    .number {
      min-width: 4%;
      max-width: 4%;
      width: 4%;
    }

    .content-ideas {
      min-width: 96%;
      max-width: 96%;
      width: 96%;
    }

    .keyword {
      min-width: 68%;
      max-width: 68%;
      width: 68%;
    }

    .vol {
      min-width: 10%;
      max-width: 10%;
      width: 10%;
    }

    .cpc {
      min-width: 8%;
      max-width: 8%;
      width: 8%;
    }

    .pd {
      min-width: 5%;
      max-width: 5%;
      width: 5%;
    }

    .sd{
      min-width: 5%;
      max-width: 5%;
      width: 5%;
    }

  }
  .number, .keyword, .vol, .cpc, .pd, .sd, .content-ideas{
    padding-left: 5px;
    padding-right: 5px;
  }

  .keyword {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }


  .label-internal {
    background-color: #18A0FB;
  }

  .label-external {
    background-color: #FBC918;
  }

  .label-nofollow{
    background-color: #9718FB;
  }

  .label-dofollow {
    background-color: #FF5656;
  }

  @media only screen and (max-width:767px) {
    .resultTable {
      justify-content: center;
    }
  }

  .btn-result-link {
    color:var(--darkgrey);
    font-weight: 500;
    border-radius: 20px;
  }

  .btn-result-link:hover {
    background-color: var(--lightgrey);
    border-radius: 20px;
    color:var(--black) !important;
  }

  .btn-result-link.active {
    background-color: var(--lightgrey);
    border-radius: 20px;
    color:var(--black);
  }

  .overview-label p {
    color:var(--grey);
  }

  .overview-label:hover p {
    color:var(--black);
  }

  .btn-export {
    color: white;
    background-color: var(--primaryblue);
    border-radius: 20px;
    font-weight: 500;
  }

  .btn-export:hover {
    color: white;
    background-color: #0F90E7;
    border-radius: 20px;
    font-weight: 500;
  }

  .btn-copy {
    color: var(--primaryblue);
    background-color: white;
    border-radius: 20px;
    border: 1px solid var(--primaryblue);
    font-weight: 500;
  }

  .btn-copy:hover {
    color: white;
    background-color: var(--primaryblue);
    border: 1px solid var(--primaryblue);
    border-radius: 20px;
    font-weight: 500;
  }

  .market {
    border: 1px solid white;
    background: var(--primaryblue);
    color: white;
    border-radius: 20px

  }

</style>
@endpush

@section('content')
<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">KEYWORD RESEARCH</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

      <div class="header-blue mt-10 mb-5 px-5 py-1">
        <div class="row d-flex align-items-center">
          <div class="col-sm-7 col-md-8 col-lg-7 col-xl-8 d-flex align-items-center py-1">
            <input type="text" class="form-control kwresearch-url" id="kwsearch" name="" value="" placeholder="INPUT / PASTE YOUR KEYWORD">
          </div>
          <div class="col-sm-5 col-md-4 col-lg-5 col-xl-4 d-flex justify-content-end py-1">
            <!-- CRAWL BUTTON -->
            <select class="form-control market mx-2 selectpicker" data-size="3" data-live-search="true" name="" id="market">
              <option value="" disabled selected>Select market</option>
              <option value="2360:id">Indonesia, id-ID</option>
{{--              <option value="">Indonesia, en-ID</option>--}}
{{--              <option value="">Singapore, en-SG</option>--}}
            </select>

            <button id="goResearch" type="button" class="btn btn-crawl" name="button">CHECK KEYWORD</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
            <div class="px-2 mb-3">
              <span class="text-black font-15px font-weight-bolder">Results</span>
              <span class="font-15px what-is-this" style="color:#9A99A2">(What is this?)</span>
            </div>
          <div class="card card-custom mb-5">
            <div class="card-body py-4 px-0">

              <!-- BEFORE CRAWL -->
              <!-- <div class="" id="noCrawlResult">
                <div class="text-center">
                  <p class="d-block">No keyword checked, please input your domain above!</p>
                  <a href="#" class="links">Learn how to use this tools?</a>
                </div>
              </div> -->

              <!-- RESULT CRAWL -->
              <div class="" id=result>
                <nav class="mb-5">
                  <div class="nav d-flex justify-content-center" id="nav-tab" role="tablist">
                    <a class="btn btn-result-link active py-1 d-flex align-items-center" style="height:25px" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                    <a class="btn btn-result-link mx-1 py-1 d-flex align-items-center" style="height:25px" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Keyword Ideas</a>
                    <a class="btn btn-result-link py-1 d-flex align-items-center" style="height:25px" id="nav-content-tab" data-toggle="tab" href="#nav-content" role="tab" aria-controls="nav-content" aria-selected="false">Content Ideas</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="px-5 mb-7">
                      <p><b>Keyword: </b>tiket pesawat murah</p>
                    </div>
                    <div class="px-5 mb-5">
                      <div class="row">
                        <div class="col-xl-4 col-sm-4 text-center overview-label" data-toggle="tooltip" data-theme="dark" data-html="true" title="<b>Search Volume</b> is Lorem Ipsum Dolor Sit Amet Kontekstural Explicit">
                          <p class="h1 mb-0 font-weight-bolder">9.999.999</p>
                          <p>Search Volume</p>
                        </div>
                        <div class="col-xl-4 col-sm-4 text-center overview-label" data-toggle="tooltip" data-theme="dark" data-html="true" title="<b>Paid Difficulty</b> is Lorem Ipsum Dolor Sit Amet Kontekstural Explicit">
                          <p class="h1 mb-0 font-weight-bolder">999</p>
                          <p>Paid Difficulty</p>
                        </div>
                        <div class="col-xl-4 col-sm-4 text-center overview-label" data-toggle="tooltip" data-theme="dark" data-html="true" title="<b>Cost Per Click (CPC)</b> is Lorem Ipsum Dolor Sit Amet Kontekstural Explicit">
                          <p class="h1 mb-0 font-weight-bolder">$99.99</p>
                          <p>Cost Per Click (CPC)</p>
                        </div>
                      </div>
                    </div>
                    <div class="px-5 mb-5">
                      <canvas id="myChart" width="100%" height="150"></canvas>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="px-5 mb-5">
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0"><b>Keyword Ideas</b>(10)</p>
                        <select class="form-control" style="width:150px!important;" name="">
                          <option value="" selected disabled>Select category</option>
                          <option value="">Suggestion (240)</option>
                          <option value="">Related (327)</option>
                          <option value="">Questions (0)</option>
                          <option value="">Prepositions (0)</option>
                          <option value="">Comparisons (2)</option>
                        </select>
                      </div>

                    </div>

                    <div class="d-flex mx-5 mb-5">
                      <div class="number">
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          </div>
                      </div>
                      <div class="keyword font-weight-bolder text-black">
                        <p class="mb-0">KEYWORD</p>
                      </div>
                      <div class="vol font-weight-bolder text-black">
                        <p class="mb-0">VOL</p>
                      </div>
                      <div class="cpc font-weight-bolder text-black">
                        <p class="mb-0">CPC</p>
                      </div>

                      <div class="pd font-weight-bolder text-black">
                        <p class="mb-0">PD</p>
                      </div>

                      <div class="sd font-weight-bolder text-black">
                        <p class="mb-0">SD</p>
                      </div>
                    </div>

                    <!-- DUMMY RESULT DATA START -->
                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah">tiket pesawat murah</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="promo tiket pesawat murah 2020">promo tiket pesawat murah 2020</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah ke new zealand">tiket pesawat murah ke new zealand</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah medan jakarta">tiket pesawat murah medan jakarta</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah 2019">tiket pesawat murah 2019</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat bisnis class murah">tiket pesawat bisnis class murah</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah ke medan">tiket pesawat murah ke medan</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah jakarta surabaya">tiket pesawat murah jakarta surabaya</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center" >
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="harga tiket pesawat murah online">harga tiket pesawat murah online</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="keyword d-flex align-items-center">
                        <p class="mb-0" data-toggle="tooltip" data-theme="dark" title="tiket pesawat murah pekanbaru jakarta">tiket pesawat murah pekanbaru jakarta</p>
                      </div>
                      <div class="vol d-flex align-items-center">
                        <p class="mb-0">9.999.999</p>
                      </div>
                      <div class="cpc d-flex align-items-center">
                        <p class="mb-0">$99.99</p>
                      </div>
                      <div class="pd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                      <div class="sd d-flex align-items-center">
                        <p class="mb-0">999</p>
                      </div>
                    </div>
                    <hr class="my-3">
                    <!-- DUMMY RESULT DATA END -->

                    <div class="px-5">
                      <button type="button" class="btn btn-copy mr-2" name="button">COPY TO CLIPBOARD</button>
                      <button type="button" class="btn btn-export" name="button">EXPORT TO CSV</button>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                    <div class="px-5 mb-5">
                        <p class="mb-0"><b>Content Ideas</b>(10)</p>
                    </div>

                    <div class="d-flex mx-5 mb-5">
                      <div class="number">
                          <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          </div>
                      </div>
                      <div class="content-ideas font-weight-bolder text-black">
                        <p class="mb-0">PAGE TITLE & URL</p>
                      </div>
                    </div>

                    <!-- DUMMY RESULT DATA START -->
                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="content-ideas ">
                        <p class="mb-0">JADI AGEN <b>TIKET PESAWAT MURAH</b> SEKARANG BANYAK KEMUDAHAN</p>
                        <p class="mb-0">fjb.kaskus.co.id</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="content-ideas ">
                        <p class="mb-0">JADI AGEN <b>TIKET PESAWAT MURAH</b> SEKARANG BANYAK KEMUDAHAN</p>
                        <p class="mb-0">fjb.kaskus.co.id</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="content-ideas ">
                        <p class="mb-0">JADI AGEN <b>TIKET PESAWAT MURAH</b> SEKARANG BANYAK KEMUDAHAN</p>
                        <p class="mb-0">fjb.kaskus.co.id</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <div class="d-flex mx-5 result-row">
                      <div class="number d-flex align-items-center">
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        </div>
                      </div>
                      <div class="content-ideas ">
                        <p class="mb-0">JADI AGEN <b>TIKET PESAWAT MURAH</b> SEKARANG BANYAK KEMUDAHAN</p>
                        <p class="mb-0">fjb.kaskus.co.id</p>
                      </div>
                    </div>
                    <hr class="my-3">

                    <!-- DUMMY RESULT DATA END -->

                    <div class="px-5">
                      <button type="button" class="btn btn-copy mr-2" name="button">COPY TO CLIPBOARD</button>
                      <button type="button" class="btn btn-export" name="button">EXPORT TO CSV</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="px-2 mb-3 d-flex align-items-center">
            <span class="text-black font-15px font-weight-bolder">Progress</span>
          </div>
            <div class="card card-custom mb-5">
                <div class="card-body py-4 px-5">
                    <div class="text-center">
                        <p class="text-black font-weight-bold mb-0" id="progress-stop-message">Our robot is sleeping right now. Give
                            him a task!</p>
                        <p class="text-black font-weight-bold mb-0" id="progress-start-message" style="display: none">Our robot is excecuting your task..</p>
                        <p class="text-black font-weight-bold mb-0" id="progress-finish-message" style="display: none">Our robot is already finished your
                            task.</p>
                        <div class="progress my-3">
                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                 id="progress-bar-loader">

                            </div>
                        </div>
                        {{--                <p class="text-black font-weight-bold mb-3">10 from 40 pages</p>--}}
                        <button type="button" class="btn btn-cancel-disabled" disabled name="button"
                                id="cancel-request-btn">Cancel
                        </button>
                    </div>
                </div>
            </div>
          <div id="local-collection-desktop" class="local-collection">
            <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
              <div class="d-flex flex-row align-items-center">
                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                <span class="text-black font-15px">Your Local History</span>
              </div>
              <div>
                <span class="clear-all font-15px pointer mr-3">Clear All</span>
              </div>
            </div>
            <div class="local-collection-body">
              <ul class="list-group" id="history-desktop">
                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                  <div class="d-flex justify-content-center text-center">
                    <span>This is your first impressions, no history yet!</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="desktop-version">
            <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
              <div class="card bg-transparent" style="">
                <div class="card-header" id="headingOne2">
                  <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
                    Version 2.3
                  </div>
                </div>
                <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="d-flex align-items-center">
                      <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
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
    <div class="local-collection-body mt-3 px-5" id="history-mobile">


    </div>
    <div id="mobile-version" class="px-5 accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
      <div class="card bg-transparent" style="">
        <div class="card-header" id="headingOne2">
          <div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
            Version 2.3
          </div>
        </div>
        <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="d-flex align-items-center">
              <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
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
      "name": "kwresearch Checker"
    }]
  }
</script>
@endpush
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
<script>
    const KEYWORD_RESEARCH_API_URL = '{{ route('api.keyword-research') }}';
</script>
<script src="{{ asset('js/logic/keyword-research.js') }}"></script>
<script type="text/javascript">

</script>
@endpush

@section('kwresearchchecker')
active
@endsection
