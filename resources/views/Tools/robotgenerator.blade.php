@extends('layouts.app')

@section('title', Lang::get('robot.meta-title'))

@section('meta-desc', Lang::get('robot.meta-desc'))

@section('meta-keyword', Lang::get('robot.meta-keyword'))

@section('conical','/en/robotstxt-generator')

@section('en-link','/en/robotstxt-generator')

@section('id-link','/id/robotstxt-generator')

@push('style')
<style media="screen">
  @media (min-width: 992px) {

    .container-description,
    .container-tools {
      padding: 0px 100px;
    }
  }

  .button-result span,
  .button-result i {
    color: var(--darkgrey);
  }

  .button-result:hover span {
    color: var(--black);
  }

  .button-result:hover i {
    color: var(--primaryblue);
  }

  .delete {
    color: var(--darkgrey);
    cursor: pointer;
  }

  .delete:hover {
    color: var(--black);
  }

  .btn-add-question {
    color: white;
    background: var(--primaryblue);
    border-radius: 20px;
  }

  .btn-add-question i {
    color: white;
  }

  .btn-add-question:hover {
    background: #1382CC;
    color: white;
  }

  .btn-add-question:hover i {
    color: white;
  }

  .btn-delete-disabled {
    color: var(--grey);
  }

  @media (max-width:767px) {
    .btn-add-question {
      width: 100%;
    }
  }

  /* DESCRIPTION TOOLS */

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
    max-width: 55%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

@media only screen and (min-width: 1200px) and (max-width:1399px){
  .local-collection .local-collection-title {
    max-width: 65%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

@media only screen and (min-width: 1400px) {
  .local-collection .local-collection-title {
    max-width: 70%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
}

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
</style>
@endpush


@section('content')

<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">ROBOT.TXT GENERATOR</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

      <div class="card card-custom mb-5 mt-10">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 mb-5">
              <div class="" id="form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="robotAccess" class="text-black font-weight-bold">Default robot access</label>
                      <select class="form-control" name="" id="robotAccess">
                        <option value="" disabled selected>Select access</option>
                        <option value="allow">Allow</option>
                        <option value="disallow">Disallow</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="crawlDelay" class="text-black font-weight-bold">Crawl delay</label>
                      <select class="form-control" name="" id="crawlDelay">
                        <option value="" disabled selected>Select delay</option>
                        <option value="">No delay</option>
                        <option value="5">5 second</option>
                        <option value="10">10 second</option>
                        <option value="20">20 second</option>
                        <option value="60">60 second</option>
                        <option value="120">120 second</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="sitemap" class="text-black font-weight-bold">Sitemap</label>
                      <span class="text-darkgrey">(leave blank if you don’t have)</span>
                      <input type="text" id="sitemap" class="form-control" name="" value="" placeholder="https://example.com/sitemap.xml">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label class="text-black font-weight-bold" for="">Directive</label>
                    <span ></span>
                  </div>
                  <div class="col-10 col-sm-11">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select access</option>
                            <option value="allow">Allow</option>
                            <option value="disallow">Dissalow</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select user agent</option>
                            <option value="*">All</option>
                            <option value="NinjaBot">NinjaBot</option>
                            <option value="Googlebot">Googlebot</option>
                            <option value="Googlebot-Mobile">Googlebot-Mobile</option>
                            <option value="Googlebot-Image">Googlebot-Image</option>
                            <option value="Mediapartners-Google">Mediapartners-Google</option>
                            <option value="Adsbot-Google">Adsbot-Google</option>
                            <option value="Bingbot">Bingbot</option>
                            <option value="Slurp">Slurp</option>
                            <option value="msnbot">msnbot</option>
                            <option value="msnbot-media">msnbot-media</option>
                            <option value="Teoma">Teoma</option>
                            <option value="twiceler">twiceler</option>
                            <option value="Gigabot">Gigabot</option>
                            <option value="Scrubby">Scrubby</option>
                            <option value="Robozilla">Robozilla</option>
                            <option value="ia_archiver">ia_archiver</option>
                            <option value="baiduspider">baiduspider</option>
                            <option value="naverbot">naverbot</option>
                            <option value="yeti">yeti</option>
                            <option value="yahoo-mmcrawler">yahoo-mmcrawler</option>
                            <option value="psbot">psbot</option>
                            <option value="asterias">asterias</option>
                            <option value="yahoo-blogs">yahoo-blogs</option>
                            <option value="Yandex">Yandex</option>
                            <option value="Specify">Specify</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" name="" value="" placeholder="/your-directory">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2 col-sm-1">
                    <div class="d-flex justify-content-center align-items-center mt-1">
                      <i class='bx bxs-x-circle bx-md btn-delete-disabled'></i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-10 col-sm-11">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select access</option>
                            <option value="allow">Allow</option>
                            <option value="disallow">Dissalow</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select user agent</option>
                            <option value="*">All</option>
                            <option value="NinjaBot">NinjaBot</option>
                            <option value="Googlebot">Googlebot</option>
                            <option value="Googlebot-Mobile">Googlebot-Mobile</option>
                            <option value="Googlebot-Image">Googlebot-Image</option>
                            <option value="Mediapartners-Google">Mediapartners-Google</option>
                            <option value="Adsbot-Google">Adsbot-Google</option>
                            <option value="Bingbot">Bingbot</option>
                            <option value="Slurp">Slurp</option>
                            <option value="msnbot">msnbot</option>
                            <option value="msnbot-media">msnbot-media</option>
                            <option value="Teoma">Teoma</option>
                            <option value="twiceler">twiceler</option>
                            <option value="Gigabot">Gigabot</option>
                            <option value="Scrubby">Scrubby</option>
                            <option value="Robozilla">Robozilla</option>
                            <option value="ia_archiver">ia_archiver</option>
                            <option value="baiduspider">baiduspider</option>
                            <option value="naverbot">naverbot</option>
                            <option value="yeti">yeti</option>
                            <option value="yahoo-mmcrawler">yahoo-mmcrawler</option>
                            <option value="psbot">psbot</option>
                            <option value="asterias">asterias</option>
                            <option value="yahoo-blogs">yahoo-blogs</option>
                            <option value="Yandex">Yandex</option>
                            <option value="Specify">Specify</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" name="" value="" placeholder="/your-directory">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2 col-sm-1">
                    <div class="d-flex justify-content-center align-items-center mt-1">
                      <i class='bx bxs-x-circle bx-md delete'></i>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-10 col-sm-11">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select access</option>
                            <option value="allow">Allow</option>
                            <option value="disallow">Dissalow</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <select name="" class="form-control">
                            <option value="" disabled selected>Select user agent</option>
                            <option value="*">All</option>
                            <option value="NinjaBot">NinjaBot</option>
                            <option value="Googlebot">Googlebot</option>
                            <option value="Googlebot-Mobile">Googlebot-Mobile</option>
                            <option value="Googlebot-Image">Googlebot-Image</option>
                            <option value="Mediapartners-Google">Mediapartners-Google</option>
                            <option value="Adsbot-Google">Adsbot-Google</option>
                            <option value="Bingbot">Bingbot</option>
                            <option value="Slurp">Slurp</option>
                            <option value="msnbot">msnbot</option>
                            <option value="msnbot-media">msnbot-media</option>
                            <option value="Teoma">Teoma</option>
                            <option value="twiceler">twiceler</option>
                            <option value="Gigabot">Gigabot</option>
                            <option value="Scrubby">Scrubby</option>
                            <option value="Robozilla">Robozilla</option>
                            <option value="ia_archiver">ia_archiver</option>
                            <option value="baiduspider">baiduspider</option>
                            <option value="naverbot">naverbot</option>
                            <option value="yeti">yeti</option>
                            <option value="yahoo-mmcrawler">yahoo-mmcrawler</option>
                            <option value="psbot">psbot</option>
                            <option value="asterias">asterias</option>
                            <option value="yahoo-blogs">yahoo-blogs</option>
                            <option value="Yandex">Yandex</option>
                            <option value="Specify">Specify</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" class="form-control" name="" value="" placeholder="/your-directory">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2 col-sm-1">
                    <div class="d-flex justify-content-center align-items-center mt-1">
                      <i class='bx bxs-x-circle bx-md delete'></i>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-add-question d-flex align-items-center justify-content-center" name="button" id="add">
                <i class='bx bx-plus'></i> ADD DIRECTIVE
              </button>
            </div>
            <div class="col-md-4 mb-5">
              <div class="p-2" style="border: 1px solid #E4E6EF; border-radius: 0.42rem;">
                <form class="" style="" target="_blank" rel="nofollow noopener noreferrer" action="https://search.google.com/test/rich-results" method="post">
                  <div class="row mb-2">
                    <div class="col-4 d-flex justify-content-center px-0 button-result">
                      <button type="button" id="copy" class="btn font-weight-bold" name="button">
                        <i class='bx bx-copy'></i> <span>Copy</span></button>
                    </div>
                    <div class="col-4 d-flex justify-content-center px-0 button-result">
                      <button type="submit" id="test" class="btn font-weight-bold " name="button">
                        <i class='bx bx-download'></i> <span>Export</span></button>
                    </div>
                    <div class="col-4 d-flex justify-content-center px-0 button-result">
                      <button type="button" class="btn font-weight-bold" name="button">
                        <i class='bx bx-refresh'></i> <span>Reset</span></button>
                    </div>
                  </div>
                  <textarea name="code_snippet" style="resize:none" rows="16" class="form-control" id="json-format"></textarea>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div id="local-collection-desktop" class="local-collection">
            <div class="local-collection-header d-flex justify-content-between px-2 mb-3">
              <div class="d-flex flex-row align-items-center">
                <i class='bx bxs-collection bx-sm text-darkgrey mr-2'></i>
                <span class="text-black font-15px">Your Local History</span>
              </div>
              <div>
                <span class="clear-all font-15px pointer">Clear All</span>
              </div>
            </div>
            <div class="local-collection-body">
              <ul class="list-group">
                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                  <div class="d-flex justify-content-center text-center">
                    <span>This is your first impressions, no history yet!</span>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action pointer mb-2 border-radius-5px">
                  <div class="d-flex justify-content-between">
                    <div class="local-collection-title">Hari ini saya akan menulis tentang bagaimana Hari ini saya akan menulis tentang bagaimana Hari ini saya akan menulis tentang bagaimana</div>
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
        <div class="col-md-4">
          <div class="desktop-version">
          <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
            <div class="card bg-transparent" style="">
              <div class="card-header" id="headingOne2">
                <div class="card-title pt-0" data-toggle="collapse" data-target="#collapseOne2">
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
    <div class="local-collection-body mt-3 px-5">
      <div class="custom-card py-5 px-3">
        <div class="d-flex justify-content-center text-center">
          <span>This is your first impressions, no history yet!</span>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
          <div class="d-flex align-items-center">
            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
            <i class='bx bxs-x-circle bx-sm text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
          <div class="d-flex align-items-center">
            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
            <i class='bx bxs-x-circle bx-sm text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
          <div class="d-flex align-items-center">
            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
            <i class='bx bxs-x-circle bx-sm text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
          <div class="d-flex align-items-center">
            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
            <i class='bx bxs-x-circle bx-sm text-grey'></i>
          </div>
        </div>
      </div>
      <div class="custom-card py-5 px-3">
        <div class="d-flex align-items-center justify-content-between">
          <div class="local-collection-title">https://v2-analytics.cmlabs.co/member/domain-management</div>
          <div class="d-flex align-items-center">
            <i class='bx bxs-info-circle text-grey bx-sm mr-2' data-toggle="tooltip" data-theme="dark" title="Created at 09.17 | 8, JAN 2021"></i>
            <i class='bx bxs-x-circle bx-sm text-grey'></i>
          </div>
        </div>
      </div>
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

{{--
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
<li class="breadcrumb-item active" style="color:#2F80ED"><b>Robots.txt Generator</b></li>
</ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">ROBOTS TXT GENERATOR </h1>
      <small>@lang('robot.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="form">
          <div class="row mb-5">
            <div class="col-lg-6">
              <div class="form-group">
                <label><b>@lang('robot.drop1')</b></label>
                <select class="form-control" id="defaultaccess">
                  <option value="">@lang('robot.drop1.1')</option>
                  <option value="Allow">@lang('robot.drop1.2')</option>
                  <option value="Disallow">@lang('robot.drop1.3')</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label><b>@lang('robot.drop2')</b></label>
                <select class="form-control" id="crawldelay">
                  <option value="">@lang('robot.drop2.1')</option>
                  <option value="">@lang('robot.drop2.2')</option>
                  <option value="5">@lang('robot.drop2.3')</option>
                  <option value="10">@lang('robot.drop2.4')</option>
                  <option value="20">@lang('robot.drop2.5')</option>
                  <option value="60">@lang('robot.drop2.6')</option>
                  <option value="120">@lang('robot.drop2.7')>
                </select>
              </div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="form-group">
                <label><b>@lang('robot.drop3')</b> @lang('robot.drop3.1')</label>
                <input type="url" id="sitemapurl" class="form-control" placeholder="https://example.com/sitemap.xml" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12"><label><b>@lang('robot.drop4')</b></label></div>
          </div>
          <div class="row mb-5 directive" data-id="0">
            <div class="col-lg-3 mb-5">
              <select class="form-control access-directive" name="" data-id="0">
                <option value="">@lang('robot.drop1.1')</option>
                <option value="Allow">@lang('robot.drop1.2')</option>
                <option value="Disallow">@lang('robot.drop1.3')</option>
              </select>
            </div>
            <div class="col-lg-3 mb-5">
              <select class="form-control user-agent" name="" data-id="0">
                <option value="">@lang('robot.drop4.1')</option>
              </select>
            </div>
            <div class="col-lg-3 mb-5">
              <input type="text" class="form-control directory" name="" placeholder="@lang('robot.drop4.2')" data-id="0" />
            </div>
            <div class="col-lg-3 mb-5">
              <button type="button" class="btn btn-success btn-block" id="add-directive">@lang('robot.btn add')</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-lg-12 text-center">
            <button type="button" class="btn btn-primary" id="create-robot">@lang('robot.btn create')</button>
          </div>
        </div>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Card-->
</div>
<div class="row" id="result" style="display:none">
  <div class="col-lg-12">
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.result')</h2>
        </div>
      </div>
      <div class="card-body">
        <textarea name="" id="robot-result" class="form-control" rows="20" readonly></textarea>
      </div>
      <div class="card-footer">
        <div class="row">
          <div class="col-lg-12 text-center">
            <button type="button" class="btn btn-success" id="export">@lang('robot.export')</button>
            <button type="button" class="btn btn-success" id="copy">@lang('robot.copy')</button>
            <button type="button" class="btn btn-danger" id="reset">RESET</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc1')</p>
        <p>@lang('robot.desc1-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc2')</p>
        <p>@lang('robot.desc2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc3')</p>
        <p>@lang('robot.desc3-2')</p>
        <p>@lang('robot.desc3-3')</p>
        <p>@lang('robot.desc3-4')</p>
        <p>@lang('robot.desc3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc4')</p>
        <p>@lang('robot.desc4-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('robot.desc5')</p>
        <table class="table border-0">
          <tbody>
            <tr>
              <td>1</td>
              <td>Disallow: /admin/</td>
              <td style="text-align: center;">=</td>
              <td>@lang('robot.list-5-1')</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Disallow: /config/</td>
              <td style="text-align: center;">=</td>
              <td>@lang('robot.list-5-2')</td>
            </tr>
            <tr>
              <td>3</td>
              <td>User-agent: *</td>
              <td style="text-align: center;">=</td>
              <td>@lang('robot.list-5-3')</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Allow: /</td>
              <td style="text-align: center;">=</td>
              <td>@lang('robot.list-5-4')</td>
            </tr>
          </tbody>
        </table>
        <!-- <ol>
          <li>@lang('robot.list-5-1')</li>
          <li>@lang('robot.list-5-2')</li>
          <li>@lang('robot.list-5-3')</li>
          <li>@lang('robot.list-5-4')</li>
        </ol> -->
        <p>@lang('robot.desc5-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('robot.title-6')</h2>
        </div>
      </div>
      <div class="card-body">
        <ul style="list-style-type:disc">
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-1')</p>
            <p>@lang('robot.sub-opt-1')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-2')</p>
                <p>@lang('robot.list-desc-6-1-2')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-3')</p>
                <p>@lang('robot.list-desc-6-1-3')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-1-4')</p>
                <p>@lang('robot.list-desc-6-1-4')</p>
              </li>
            </ol>
          </li>
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-2')</p>
            <p>@lang('robot.sub-opt-2')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-2-1')</p>
                <p>@lang('robot.list-desc-6-2-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-2-2')</p>
                <p>@lang('robot.list-desc-6-2-2')</p>
              </li>
            </ol>
          </li>
          <li>
            <p class="font-weight-bolder">@lang('robot.opt-3')</p>
            <ol>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-1')</p>
                <p>@lang('robot.list-desc-6-3-1')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-2')</p>
                <p>@lang('robot.list-desc-6-3-2')</p>
              </li>
              <li>
                <p class="font-weight-bold">@lang('robot.list-title-6-3-3')</p>
                <p>@lang('robot.list-desc-6-3-3')</p>
              </li>
            </ol>
          </li>
        </ul>
      </div>
    </div>
    <!--end::Card-->
  </div>
  @include('layouts/stickybar')
</div>
</div>
</div>
--}}
@endsection

<!-- @push('styles')
<style>
  .borderless td, .borderless th {
    border: 0 !important;
  }
</style>
@endpush -->

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
      "name": "Robot.txt Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/robotgenerator.js')}}"></script>
@endpush
@section('robotstxt-generator')
active
@endsection

@section('generator')
active
@endsection
