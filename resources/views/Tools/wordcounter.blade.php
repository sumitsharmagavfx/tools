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
  /* @media only screen and (max-width: 320px) {
    .tulisan {
      font-size: 60%;
    }
  }

  @media only screen and (min-width: 320px) {
    .tulisan {
      font-size: 55%;
    }
  }

  @media only screen and (min-width: 375px) {
    .tulisan {
      font-size: 70%;
    }
  }

  @media only screen and (min-width: 425px) {
    .tulisan {
      font-size: 80%;
    }
  }

  @media only screen and (min-width: 768px) {
    .tulisan {
      font-size: 120%;
    }
  }

  @media only screen and (min-width: 992px) and (max-width: 1207px) {
    .tulisan {
      font-size: 86%;
    }
  } */
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
.list-group-item-action:hover, .list-group-item-action:focus {
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

    @media (min-width: 280px) and (max-width: 768px) {
      .robo-container {
        display: flex;
        justify-content: center;
        vertical-align: middle;
      }

      .robo-text-container {
          text-align: center;
      }
    }

    @media (min-width: 576px) and (max-width: 768px) {
      .robo-img {
        width: 40%;
        vertical-align: middle;
      }
      .robo-text-container {
        padding: 0 50px;
          text-align: center;
      }
    }

    @media (min-width: 769px) {
      .robo-container {
        display: flex;
        justify-content: flex-end;
        vertical-align: middle;
      }
    }

    @media (min-width: 992px) {
      .container-description, .container-tools{
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

    .label-tools-description-footer {
      background: var(--darkgrey);
      color: var(--white);
      font-weight: bold;
    }

    .tools-description-points {
      color: var(--primaryblue);
    }

    .tools-description-points:hover {
      text-decoration: underline !important;
      color: #0F90E7 !important;
    }

    .checkbox-features {
        cursor: auto !important;
        opacity: 1 !important;
        margin-bottom: 10px !important;
    }
    .checkbox-features >  span::after  {
        width: 5px !important;
        height: 10px !important;
    }
    .checkbox-features > input:checked ~ span {
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
    /* @media only screen and (max-width: 800px) {

      .local-collection-mobile .local-collection-title {
          max-width: 70%;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
        }
    } */
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
      color:white;
      font-weight: bold;
    }

    .label-not-top-3 {
      background: var(--lightgrey);
      color:var(--black);
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

    .bg-red {
      background: red !important;

    }

    .tooltip.tooltip-autosave-off.bs-tooltip-top .arrow::before,
    .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="top"] .arrow::before {
      border-top-color: red;
    }

    .tooltip.tooltip-autosave-off.bs-tooltip-right .arrow::before,
    .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="right"] .arrow::before {
      border-right-color: red;
    }

    .tooltip.tooltip-autosave-off.bs-tooltip-bottom .arrow::before,
    .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      border-bottom-color: red;
    }

    .tooltip.tooltip-autosave-off.bs-tooltip-left .arrow::before,
    .tooltip.tooltip-autosave-off.bs-tooltip-auto[x-placement^="left"] .arrow::before {
      border-left-color: red;
    }

    .tooltip.tooltip-autosave-off .tooltip-inner {
      background-color: red;
    }

</style>
@endpush

@section('content')
<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey">WORDS COUNTER</h1>
      <span class="text-darkgrey h4 ">Login to unlock all features here, 100% free!</span>

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
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M5 12L3 12 3 21 12 21 12 19 5 19zM12 5L19 5 19 12 21 12 21 3 12 3z" style="fill:white"></path></svg>
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
                <div class="">
                  <i id="saveLocal" class='bx bxs-collection bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <i id="autoSaveOff" class='bx bxs-server bx-sm mx-2 text-darkgrey text-hover-primaryblue auto-save-off' data-toggle="tooltip" data-html="true" data-placement="top" title="Autosave is <b>OFF</b>"></i>
                  <i id="autoSaveOn" class='bx bxs-server bx-sm mx-2 text-primaryblue text-hover-primaryblue auto-save-on' data-toggle="tooltip" data-html="true" data-placement="top" title="Autosave is <b>ON</b>"></i>
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
              <textarea data-autoresize name="name" placeholder="Type or paste your text.." rows="15" style="resize:none; overflow:hidden" class="form-control word-counter-text-area font-size-12px" id="textarea"></textarea>
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
                              <div class="local-collection-title">Hari ini saya akan menulis tentang bagaimana..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 11.40 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                          <div class="d-flex justify-content-between">
                              <div class="local-collection-title">Sudah sembilan puluh hari, perusahaan kami m..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 09.17 | 8, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                          <div class="d-flex justify-content-between">
                              <div class="local-collection-title">Dalam banyak kasus, virus paling mematikan di..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 08.05 | 7, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                          <div class="d-flex justify-content-between">
                              <div class="local-collection-title">SEO merupakan pekerjaan marketing dengan ef..</div>
                              <div class="d-flex align-items-center">
                                  <span class="mr-2 text-grey date-created">Created at 11.21 | 5, JAN 2021</span>
                                  <i class='bx bxs-x-circle text-grey'></i>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                          <div class="d-flex justify-content-between">
                              <div class="local-collection-title">Pekerjaan ini menuntut setiap penulis harus pek..</div>
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
          <div class="card card-custom">
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
        </div>
      </div>

      {{--
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
      <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
      <li class="breadcrumb-item active" style="color:#2F80ED"><b>Word Counter</b></li>
      </ol>
      </nav>
      <div class="card card-custom mb-5">
        <div class="card-header">
          <div class="card-title">
            <h1 class="card-label">@lang('wordcounter.title') </h1>
            <small>@lang('wordcounter.subtitle')</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <!--begin::Card-->
          <div class="card card-custom card-stretch gutter-b">
            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col col-sm col-md col-lg col-xl mb-10" style="padding:0" align="center">
                  <span class="tulisan">@lang('wordcounter.character')</span>
                  <br>
                  <span class="h1" id="characterCount">0</span>
                </div>
                <div class="col col-sm col-md col-lg col-xl mb-10" style="padding:0" align="center">
                  <span class="tulisan">@lang('wordcounter.word')</span>
                  <br>
                  <span class="h1" id="wordCount">0</span>
                </div>
                <div class="col col-sm col-md col-lg col-xl mb-10" style="padding:0" align="center">
                  <span class="tulisan">@lang('wordcounter.sentence')</span>
                  <br>
                  <span class="h1" id="sentenceCount">0</span>
                </div>
                <div class="col col-sm col-md col-lg col-xl mb-10" style="padding:0" align="center">
                  <span class="tulisan">@lang('wordcounter.paragraph')</span>
                  <br>
                  <span class="h1" id="paragraphCount">0</span>
                </div>
                <div class="col col-sm col-md col-lg col-xl mb-10" style="padding:0" align="center">
                  <span class="tulisan">@lang('wordcounter.reading-time')</span>
                  <br>
                  <span class="h1" id="readingTime">0</span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="text-center mt-5">
                  <button type="button" class="btn btn-primary btn-sm" id="reset">@lang('wordcounter.btn-reset')</button>
                </div>
              </div>
            </div>
          </div>
          <!--end::Card-->
        </div>
        <div class="col-lg-4">
          <!--begin::Card-->
          <div class="card card-custom card-stretch gutter-b">
            <div class="card-header">
              <div id="word1" class="card-title">
                <h2 class="card-label">@lang('wordcounter.keyword-density')</h2>
              </div>
            </div>
            <div class="card-body">
              <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                <div class="card" id="kd">
                  <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne1">
                      @lang('wordcounter.word-1')
                    </div>
                  </div>
                  <div id="collapseOne1" class="collapse" data-parent="#accordionExample1">
                    <div class="card-body" id="topKeywords">
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                      @lang('wordcounter.word-2')
                    </div>
                  </div>
                  <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
                    <div class="card-body" id="top2">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                      @lang('wordcounter.word-3')
                    </div>
                  </div>
                  <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
                    <div class="card-body" id="top3">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1">
                      @lang('wordcounter.word-4')
                    </div>
                  </div>
                  <div id="collapseFour1" class="collapse" data-parent="#accordionExample1">
                    <div class="card-body" id="top4">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive1">
                      @lang('wordcounter.word-5')
                    </div>
                  </div>
                  <div id="collapseFive1" class="collapse" data-parent="#accordionExample1">
                    <div class="card-body" id="top5">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end::Card-->
        </div>
        <!--end::Card-->
      </div>
      <div class="row" data-sticky-container>


        <div class="col-lg-8 mb-5">
          <!--begin::Card-->
          <div class="card card-custom card-stretch-half">
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-title-1')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-1-1')</p>
              <center>
                <div class="col-12 col-md-9">
                  <img class="" width="100%" src="https://cmlabs.co/wp-content/uploads/2020/06/cmlabs-word-counter.jpg" alt="cmlabs word counter">

                </div>
              </center>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-title-2')</h2>
              </div>
            </div>
            <div class="card-body">
              <p> @lang('wordcounter.copy-desc-2-1')</p>
              <ol>
                <li>@lang('wordcounter.copy-li-1')</li>
                <li>@lang('wordcounter.copy-li-2')</li>
                <li>@lang('wordcounter.copy-li-3')</li>
                <li>@lang('wordcounter.copy-li-4')</li>
                <li>@lang('wordcounter.copy-li-5')</li>
                <li>@lang('wordcounter.copy-li-6')</li>
                <li>@lang('wordcounter.copy-li-7')</li>
              </ol>
              <h3 id="@lang('wordcounter.jumpto-link-1')" class="py-5">@lang('wordcounter.copy-sub-title-2')</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">{{ucfirst(strtolower(__('wordcounter.character')))}}</th>
                    <td>@lang('wordcounter.copy-desc-3-1')</td>
                  </tr>
                  <tr>
                    <th scope="row">{{ucfirst(strtolower(__('wordcounter.word')))}}</th>
                    <td>@lang('wordcounter.copy-desc-3-2')</td>
                  </tr>
                  <tr>
                    <th scope="row">{{ucfirst(strtolower(__('wordcounter.sentence')))}}</th>
                    <td>@lang('wordcounter.copy-desc-3-3')</td>
                  </tr>
                  <tr>
                    <th scope="row">{{ucfirst(strtolower(__('wordcounter.paragraph')))}}</th>
                    <td>@lang('wordcounter.copy-desc-3-4')</td>
                  </tr>
                  <tr>
                    <th scope="row">{{ucfirst(strtolower(__('reading-time')))}}</th>
                    <td>@lang('wordcounter.copy-desc-3-5')</td>
                  </tr>
                </tbody>
              </table>
              <h3 id="@lang('wordcounter.jumpto-link-2')" class="py-5"> @lang('wordcounter.copy-sub-title-3')</h3>
              <p>@lang('wordcounter.copy-desc-4-1')</p>
              <p>@lang('wordcounter.copy-desc-4-2')</p>
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">@lang('wordcounter.word-1')</th>
                    <td>@lang('wordcounter.copy-td-1')</td>
                  </tr>
                  <tr>
                    <th scope="row">@lang('wordcounter.word-2')</th>
                    <td>@lang('wordcounter.copy-td-2')</td>
                  </tr>
                  <tr>
                    <th scope="row">@lang('wordcounter.word-3')</th>
                    <td>@lang('wordcounter.copy-td-3')</td>
                  </tr>
                  <tr>
                    <th scope="row">@lang('wordcounter.word-4')</th>
                    <td>@lang('wordcounter.copy-td-4')</td>
                  </tr>
                  <tr>
                    <th scope="row">@lang('wordcounter.word-5')</th>
                    <td>@lang('wordcounter.copy-td-5')</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-0')</h2>
              </div>
              <div class="card-body">
                <p>@lang('wordcounter.copy-desc-6-1')</p>
                <p>@lang('wordcounter.copy-desc-6-2')</p>
                <div class="p-5" style="background-color: #F4F4F4">
                  <h3 class="font-weight-bold">@lang('wordcounter.copy-desc-6-3')</h3>
                </div>
              </div>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-4')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-5')</p>
              <table class="table" border="1px" bordercolor="#EBEDF3">
                <tbody>
                  <tr>
                    <th class="align-middle" style="text-align:center"> <i class="far fa-lightbulb icon-2x"></i> </th>
                    <td class="align-middle">
                      <p>@lang('wordcounter.copy-desc-6-6')</p>
                    </td>
                  </tr>
                </tbody>
              </table>
              @lang('wordcounter.copy-desc-6-7')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-8')</h2>
              </div>
            </div>
            <div class="card-body">
              @lang('wordcounter.copy-desc-6-8-1')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-8-2')</h2>
              </div>
            </div>
            <div class="card-body">
              @lang('wordcounter.copy-desc-6-9')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-10')</h2>
              </div>
            </div>
            <div class="card-body">
              @lang('wordcounter.copy-desc-6-11')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-12')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-13')</p>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-14')</h2>
              </div>
            </div>
            <div class="card-body">
              @lang('wordcounter.copy-desc-6-15')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-16')</h2>
              </div>
            </div>
            <div class="card-body">
              @lang('wordcounter.copy-desc-6-17')
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-18')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-19')</p>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-20')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-21')</p>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">@lang('wordcounter.copy-desc-6-22')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-23')</p>
            </div>
            <div class="card-header">
              <div class="card-title">
                <h2 id="@lang('wordcounter.jumpto-link-3')" class="card-label">@lang('wordcounter.copy-title-5')</h2>
              </div>
            </div>
            <div class="card-body">
              <p>@lang('wordcounter.copy-desc-6-24') <a href="https://cmlabs.co/tipe-konten/" target="_blank"><u style="color:blue">@lang('wordcounter.copy-desc-6-25')</u></a> @lang('wordcounter.copy-desc-6-26')</p>
              <div class="row">
                <div class="col-md-6 mb-5">
                  <div class="container p-10" style="background-color:#f2f2f2; border-radius: 7px;">
                    <h3>@lang('wordcounter.copy-sub-title-5-1')</h3>
                    <p>@lang('wordcounter.copy-desc-5-2')</p>
                  </div>
                </div>
                <div class="col-md-6 mb-5">
                  <div class="container p-10" style="background-color:#f2f2f2; height:100%; border-radius: 7px;">
                    <h3>@lang('wordcounter.copy-sub-title-5-2')</h3>
                    <p>@lang('wordcounter.copy-desc-5-3')</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end::Card-->
        </div>
        @include('layouts/stickybar')
      </div>--}}
    </div>
  </div>
</div>
<div class="w-100">
    <!-- Start Local Collection -->
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
      <div class="" id="top3Mobile">
      </div>
    </div>
</div>
<div class="" style="background:white">
  <div class="container container-description py-20">
    <h2 class="text-black">Advance your writing</h2>
    <div class="row">
      <div class="col-md-9">
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-3">
        <div class="d-flex align-items-center mb-5">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">1</span>
          </div>
          <a href="#" class="tools-description-points">Why does SEO important for writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">2</span>
          </div>
          <a href="#" class="tools-description-points">How search engine works?</a>
        </div>
        <div class="d-flex align-items-center mb-5">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">3</span>
          </div>
          <a href="#" class="tools-description-points">The basic of writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description">4</span>
          </div>
          <a href="#" class="tools-description-points">Measuring your writing?</a>
        </div>
        <div class="d-flex align-items-center mb-5">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description-footer">5</span>
          </div>
          <a href="#" class="tools-description-points">Hiring profesional content strategy and consultant?</a>
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
        <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes12"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 1.0</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features mb-1"><input type="checkbox" disabled="disabled" checked="checked" name="Checkboxes13"/><span></span>&nbsp;&nbsp;<bdi>Exact and average Google Search Volume. Version 1.3</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
        <label class="checkbox checkbox-disabled checkbox-features features-disabled mb-1"><input type="checkbox" disabled="disabled" name="Checkboxes14"/><span></span>&nbsp;&nbsp;<bdi>Daily domain ranking on SERP. Version 0.1</bdi></label>
      </div>
    </div>
    <h2 class="text-black">What’s new on cmlabs Words Counter</h2>
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="card card-custom card-whats-new px-5 pb-5 pt-2 card-stretch">
          <div class="d-flex justify-content-end">
            <i class='bx bx-x bx-md button-close-whats-new'></i>
          </div>
          <p class="text-black font-weight-bold mb-3" style="font-size:1.3rem">What's new <span class="label label-dot label-lg label-whats-new mb-2 ml-1"></span></p>
          <p class="font-weight-light mb-3">Last Update Dec 2, 2020</p>
          <p>Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives.</p>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="card card-custom card-whats-new px-5 pb-5 pt-2 card-stretch">
          <div class="d-flex justify-content-end">
            <i class='bx bx-x bx-md button-close-whats-new'></i>
          </div>
          <p class="text-black font-weight-bold mb-3" style="font-size:1.3rem">What's new <span class="label label-dot label-lg label-whats-new mb-2 ml-1"></span></p>
          <p class="font-weight-light mb-3">Last Update Dec 2, 2020</p>
          <p>Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update, starting from now you will have better insight for specific niche. You can learn more about this update anytimes, hopefully the changes better for your business objectives.</p>
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
    // $('#textarea').popover().click(function () {
    //   setTimeout(function () {
    //       $('#textarea').popover('hide');
    //   }, 2000);
    // });
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
  $('#autoSaveOff').tooltip({'template' : '<div class="tooltip tooltip-auto-save-off" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'});
    $("#top2").hide();
    $("#top3").hide();
    $("#top2Mobile").hide();
    $("#top3Mobile").hide();
    $("#autoSaveOn").hide();

    $("#autoSaveOn").click(function() {
      $("#autoSaveOn").hide();
      $("#autoSaveOff").show();
    });

    $("#autoSaveOff").click(function() {
      $("#autoSaveOn").show();
      $("#autoSaveOff").hide();
    });

    $("#saveLocal").click(function() {
      toastr.info('Saved to Local Collection', 'Information');
    });

    $("#copy-text").click(function(){
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

    $("#showWords1Desktop").click(function(){
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

    $("#showWords2Desktop").click(function(){
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

    $("#showWords3Desktop").click(function(){
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

    $("#showWords1Mobile").click(function(){
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

    $("#showWords2Mobile").click(function(){
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

    $("#showWords3Mobile").click(function(){
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


});
</script>
@endpush
@section('word-counter')
active
@endsection
