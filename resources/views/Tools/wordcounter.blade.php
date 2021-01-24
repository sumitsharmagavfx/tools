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
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .wordcounter-background-text-size-right-edge {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .wordcounter-background-text-size-active {
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

  .wordcounter-background-density-active {
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
</style>
@endpush

@section('content')
<div class="container">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid">
      <h1 class="text-darkgrey">WORDS COUNTER</h1>
      <span class="text-darkgrey h4 ">Login to unlock all features here, 100% free!</span>

      <div class="row mt-10">
        <div class="col-md-8">
          <div class="card card-custom mb-5">
            <div class="card-body py-3 px-4">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class='bx bxs-copy-alt bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <i class='bx bxs-trash bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <div class="wordcounter-background-text-size wordcounter-background-text-size-left-edge d-flex justify-content-center align-items-center p-2 ml-5">
                    <i class='bx bx-fullscreen bx-sm text-white'></i>
                  </div>
                  <div class="wordcounter-background-text-size wordcounter-background-text-size-active text-white font-weight-bolder d-flex justify-content-center align-items-center p-2">
                    10px
                  </div>
                  <div class="wordcounter-background-text-size text-white d-flex justify-content-center font-weight-bolder align-items-center p-2">
                    12px
                  </div>
                  <div class="wordcounter-background-text-size wordcounter-background-text-size-right-edge text-white font-weight-bolder d-flex justify-content-center align-items-center p-2">
                    15px
                  </div>
                </div>
                <div class="">
                  <i class='bx bxs-collection bx-sm mx-2 text-darkgrey text-hover-primaryblue'></i>
                  <i id="autoSaveOff" class='bx bxs-server bx-sm mx-2 text-darkgrey text-hover-primaryblue' data-toggle="tooltip" data-placement="top" title="Autosave is off"></i>
                  <!-- <i id="autoSaveOn" class='bx bxs-server bx-sm mx-2 text-primaryblue text-hover-primaryblue' data-toggle="tooltip" data-placement="top" title="Autosave is on"></i> -->
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
              <textarea data-autoresize name="name" placeholder="Type or paste your text.." rows="15" style="resize:none; overflow:hidden" class="form-control word-counter-text-area" id="textarea"></textarea>
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
        <div class="col-md-4">
          <div class="card card-custom mb-5">
            <div class="card-body py-3 px-4">
              <div class="d-flex justify-content-center align-items-center">
                <div class="wordcounter-background-density wordcounter-background-density-left-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  WORDS
                </div>
                <div class="wordcounter-background-density wordcounter-background-density-active font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  1
                </div>
                <div class="wordcounter-background-density d-flex justify-content-center font-weight-bolder align-items-center p-2">
                  2
                </div>
                <div class="wordcounter-background-density wordcounter-background-density-right-edge font-weight-bolder d-flex justify-content-center align-items-center p-2">
                  3
                </div>
              </div>
            </div>
          </div>
          <div class="card card-custom">
            <div class="card-body">
              <div class="" id="topKeywords">

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
                <textarea data-autoresize name="name" rows="15" style="resize:none; overflow:hidden" class="form-control" id="textarea" data-placement="top" data-trigger="click" data-toggle="popover" data-html="true"
                  title="@lang('wordcounter.popover-title')" data-content="@lang('wordcounter.popover-content')" onclick="myFunction()"></textarea>
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
  $(document).ready(function() {
    $("#autoSave").tooltip();
  });
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
@endpush
@section('word-counter')
menu-item-active
@endsection
