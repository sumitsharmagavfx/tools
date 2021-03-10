@extends('layouts.app')

@section('title', Lang::get('product.meta-title'))

@section('meta-desc', Lang::get('product.meta-desc'))

@section('conical','/en/json-ld-product-schema-generator')

@section('en-link')
en/json-ld-product-schema-generator
@endsection

@section('id-link')
id/json-ld-product-schema-generator
@endsection

@section('content')
@push('style')
<style media="screen">
@media (min-width: 992px) {

.container-description,
.container-tools {
  padding: 0px 100px;
}
}

.button-result span, .button-result i  {
color: var(--darkgrey);
}

.button-result:hover span {
color: var(--black);
}

.button-result:hover i {
color: var(--primaryblue);
}

.delete {
color:var(--darkgrey);
cursor: pointer;
}

.delete:hover {
color:var(--black);
}

.btn-add-question {
color: white;
background: var(--primaryblue);
border-radius: 20px;
}

.btn-add-question i {
color: white;
}

.btn-add-question:hover{
background: #1382CC;
color: white;
}

.btn-add-question:hover i {
color: white;
}

.btn-delete-disabled {
color: var(--grey);
}

.bootstrap-select.custom-select-blue .dropdown-menu.inner > li.selected > a, .bootstrap-select.custom-select-blue .dropdown-menu.inner > li:hover > a {
    background: var(--primaryblue) !important;
}

.bootstrap-select.custom-select-blue .dropdown-menu.inner > li.selected > a .text, .bootstrap-select.custom-select-blue .dropdown-menu.inner > li:hover > a .text {
    color: white;
    transition: 0.15s !important;
}

.form-control:focus {
  border-color: var(--primaryblue);
}

.form-control.custom-textarea-82 {
  resize: none;
  height: 82%;
}

.bootstrap-select .bs-searchbox {
  padding: 0;
}

.bs-searchbox .form-control {
  border-radius: 0.42rem 0.42rem 0 0;
}

.bs-searchbox .form-control:focus {
  border-color: transparent;
}

.bootstrap-select .dropdown-menu {
  padding: 0;
}

.bootstrap-select .no-results {
  margin: 0;
}

.input-group-text {
  background-color: transparent;
  border-right-style: none;
  border-radius: 0.42rem 0 0 0.42rem !important;
}

.custom-date {
  border-left-style: none;
}

.custom-date:focus {
  border-left-style: solid;
}

.hide-div {
  display: none;
}

@media (max-width:767px) {
.btn-add-question {
  width: 100%;
}
}

@media (min-width: 992px) {
.container-description,
.container-tools {
  padding: 0px 100px;
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
</style>
@endpush
<div class="container container-tools mb-10">
  <div class="d-flex flex-column-fluid">
    <div class="container-fluid px-0">
      <h1 class="text-darkgrey font-weight-normal">@lang('product.title')</h1>
      <span class="text-darkgrey h4 font-weight-normal">@lang('product.subtitle')</span>

      {{-- <div class="card card-custom mt-10 mb-5">
        <div class="card-body py-5">
          <div class="row">
            <div class="col-md-4 mb-5">
              <label for="schema-json-ld" class="font-weight-bold text-black h6">Which Schema would you like to create?</label>
              <select class="form-control selectpicker custom-select-blue" tabindex="null" id="schema-json-ld">
                <option value="home">Home</option>
                <option value="breadcrumb">Breadcrumb</option>
                <option value="faq">FAQ Page</option>
                <option value="how-to">How-to</option>
                <option value="job-posting">Job Posting</option>
                <option value="person">Person</option>
                <option value="product" selected="selected">Product</option>
                <option value="recipe">Recipe</option>
              </select>
            </div>
            <div class="col-md-8 d-flex align-items-center mb-5">
              <p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="card card-custom mb-5 mt-10">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 mb-5">
              <div class="row mb-8">
                <div class="col-12">
                  <label for="schema-json-ld" class="font-weight-bold text-black h6">@lang('layout.which-schema')</label>
                  <select class="form-control selectpicker custom-select-blue" tabindex="null" id="schema-json-ld">
                    <option value="home">Home</option>
                    <option value="breadcrumb">Breadcrumb</option>
                    <option value="faq">FAQ Page</option>
                    <option value="how-to">How-to</option>
                    <option value="job-posting">Job Posting</option>
                    <option value="person">Person</option>
                    <option value="product" selected="selected">Product</option>
                    <option value="recipe">Recipe</option>
                  </select>
                </div>
              </div>
              <p class="h6 text-black mb-5">Product</p>
              <div class="" id="formproduct">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="text-black font-weight-bold" for="name">@lang('product.label-name')</label>
                    <input type="text" name="" class="form-control name mb-5" placeholder="@lang('product.placeholder-name')" value="" data-id="0">
                  </div>
                  <div class="col-12 col-md-6 mb-5">
                    <label class="text-black font-weight-bold" for="image">@lang('product.label-image')</label>
                    <input type="text" name="" class="form-control image" placeholder="@lang('product.placeholder-image')" value="" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-url')</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label class="text-black font-weight-bold" for="productBrand">@lang('product.label-productBrand')</label>
                    <input type="text" name="" class="form-control productBrand mb-5" placeholder="@lang('product.placeholder-productBrand')" value="" data-id="0">
                    <div class="row">
                      <div class="col-12 mb-5">
                        <label class="text-black font-weight-bold" for="identifier">@lang('product.label-identifier')</label>
                        <div class="dropdown bootstrap-select show-tick form-control">
                          <select class="form-control selectpicker custom-select-blue identifier" multiple="multiple" data-actions-box="false" tabindex="null">
                            <option value="sku">sku</option>
                            <option value="gtin8">gtin8</option>
                            <option value="gtin13">gtin13</option>
                            <option value="gtin14">gtin14</option>
                            <option value="mpn">mpn</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 mb-8 mb-lg-5">
                    <label class="text-black font-weight-bold" for="description">@lang('product.label-description')</label>
                    <textarea name="" class="form-control custom-textarea-82 description" placeholder="@lang('product.placeholder-description')" data-id="0"></textarea>
                  </div>
                </div>
                <div class="row product-description">
                    <input type="hidden" id="skulang" value="@lang('product.placeholder-sku')">
                    <input type="hidden" id="gtin8lang" value="@lang('product.placeholder-gtin8')">
                    <input type="hidden" id="gtin13lang" value="@lang('product.placeholder-gtin13')">
                    <input type="hidden" id="gtin14lang" value="@lang('product.placeholder-gtin14')">
                    <input type="hidden" id="mpnlang" value="@lang('product.placeholder-mpn')">
                </div>
                <div class="row">
                  <div class="col-6 col-md-3">
                    <label class="text-black font-weight-bold" for="offerType">@lang('product.label-offer-type') @type</label>
                    <select class="form-control selectpicker custom-select-blue offerType mb-5">
                      <option value="None">@lang('product.offer-type-opt-1')</option>
                      <option value="Offer">@lang('product.offer-type-opt-2')</option>
                      <option value="Aggregate Offer">@lang('product.offer-type-opt-3')</option>
                    </select>
                  </div>
                  <div class="col-6 col-md-3 mb-5">
                    <label class="text-black font-weight-bold" for="url">URL</label>
                    <input type="text" name="" class="form-control url" placeholder="@lang('product.placeholder-url')" value="" data-id="0" disabled>
                    <div class="invalid-feedback">@lang('layout.invalid-url')</div>
                  </div>
                  <div class="col-6 col-md-3">
                    <label class="text-black font-weight-bold" for="priceCurrency">@lang('product.label-currency')</label>
                    <select class="form-control selectpicker custom-select-blue priceCurrency mb-5" data-size="4" data-live-search="true" disabled>
                      <option value="None">@lang('product.placeholder-currency')</option>
                        @foreach($currencies as $c)
                      <option value="{{ $c['code'] }}">{{ $c['name'] }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-6 col-md-3 mb-5">
                    <label class="text-black font-weight-bold" for="price">@lang('product.label-price')</label>
                    <input type="number" name="" class="form-control price" placeholder="@lang('product.placeholder-price')" value="" data-id="0" disabled>
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                </div>
                <div id="ag_offer" class="row hide-div">
                  <div class="col-md-4">
                    <label class="text-black font-weight-bold" for="validThrough">@lang('product.label-validThrough')</label>
                    <div class="input-group date mb-5">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="bx bx-calendar text-darkgrey"></i>
                        </span>
                      </div>
                      <input type="text" id="kt_datepicker_2" name="" class="form-control custom-date validThrough" readonly  placeholder="@lang('product.placeholder-validThrough')" value="" data-id="0"/>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black font-weight-bold" for="availability">@lang('product.label-availability')</label>
                    <select class="form-control selectpicker custom-select-blue availability mb-5">
                      <option selected="selected" value="In stock">@lang('product.availability-opt-1')</option>
                      <option value="Out of stock">@lang('product.availability-opt-2')</option>
                      <option value="Online only">@lang('product.availability-opt-3')</option>
                      <option value="In store only">@lang('product.availability-opt-4')</option>
                      <option value="Pre-order">@lang('product.availability-opt-5')</option>
                      <option value="Pre-sale">@lang('product.availability-opt-6')</option>
                      <option value="Limited availability">@lang('product.availability-opt-7')</option>
                      <option value="Sold out">@lang('product.availability-opt-8')</option>
                      <option value="Discontinued">@lang('product.availability-opt-9')</option>
                      <option class="font-italic" value="Not specified">@lang('product.availability-opt-10')</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label class="text-black font-weight-bold" for="condition">@lang('product.label-condition')</label>
                    <select class="form-control selectpicker custom-select-blue condition mb-5">
                      <option selected="selected" value="New">@lang('product.condition-opt-1')</option>
                      <option value="Used">@lang('product.condition-opt-2')</option>
                      <option value="Refurbished">@lang('product.condition-opt-3')</option>
                      <option value="Damaged">@lang('product.condition-opt-4')</option>
                      <option value="Pre-order">@lang('product.condition-opt-5')</option>
                    </select>
                  </div>
                </div>
                <div id="offer" class="row hide-div">
                  <div class="col-md-6 mb-5">
                    <label class="text-black font-weight-bold" for="highPrice">@lang('product.label-highPrice')</label>
                    <input type="number" name="" class="form-control highPrice" placeholder="@lang('product.placeholder-highPrice')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                  <div class="col-md-6 mb-5">
                    <label class="text-black font-weight-bold" for="offer">@lang('product.label-offer')</label>
                    <input type="number" name="" class="form-control offer" placeholder="@lang('product.placeholder-offer')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 mb-5">
                    <label class="text-black font-weight-bold" for="ratingValue">@lang('product.label-ratingValue')</label>
                    <input type="number" name="" class="form-control ratingValue" placeholder="@lang('product.placeholder-ratingValue')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                  <div class="col-6 mb-5">
                    <label class="text-black font-weight-bold" for="ratingCount">@lang('product.label-ratingCount')</label>
                    <input type="number" name="" class="form-control ratingCount" disabled placeholder="@lang('product.placeholder-ratingCount')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                  <div class="col-6 mb-5">
                    <label class="text-black font-weight-bold" for="bestRating">@lang('product.label-bestRating')</label>
                    <input type="number" name="" class="form-control bestRating" disabled placeholder="@lang('product.placeholder-bestRating')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                  <div class="col-6 mb-5">
                    <label class="text-black font-weight-bold" for="worstRating">@lang('product.label-worstRating')</label>
                    <input type="number" name="" class="form-control worstRating" disabled placeholder="@lang('product.placeholder-worstRating')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">@lang('layout.invalid-number')</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div id="addReview"></div>
                  </div>
                  <div class="col-12 col-md-4">
                    <button type="button" class="btn btn-block btn-add-question mt-5 mb-5" name="button" id="add-product-review">
                      <i class='bx bx-plus'></i> @lang('product.btn-addReview')
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="p-2" style="border: 1px solid #E4E6EF; border-radius: 0.42rem;">
                <form class="" style="" target="_blank" rel="nofollow noopener noreferrer" action="https://search.google.com/test/rich-results" method="post">
                    <div class="row mb-2">
                      <div class="col-4 d-flex justify-content-center px-0 button-result">
                        <button type="button" id="copy" class="btn font-weight-bold" name="button">
                        <i class='bx bx-copy'></i> <span>@lang('layout.btn-copy')</span></button>
                      </div>
                      <div class="col-4 d-flex justify-content-center px-0 button-result">
                        <button type="submit" id="test" class="btn font-weight-bold " name="button">
                        <i class='bx bx-check-circle'></i> <span>@lang('layout.btn-check')</span></button>
                      </div>
                      <div id="reset" class="col-4 d-flex justify-content-center px-0 button-result">
                        <button type="button" class="btn font-weight-bold" name="button">
                        <i class='bx bx-refresh' ></i> <span>@lang('layout.btn-reset')</span></button>
                      </div>
                    </div>
                  <textarea name="code_snippet" style="resize:none" rows="16" class="form-control" id="json-format" data-key="{{time()}}"></textarea>
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
                <span class="text-black font-15px">@lang('layout.local-history')</span>
              </div>
              <div onclick="clearAll()">
                <span class="clear-all font-15px pointer">@lang('layout.clear-all')</span>
              </div>
            </div>
            <div class="local-collection-body">
              <ul class="list-group" id="localsavedesktop"></ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="accordion accordion-light accordion-toggle-arrow custom-features-accordion" id="accordionExample2">
             <div class="card bg-transparent" style="">
              <div class="card-header" id="headingOne2">
               <div class="card-title pt-0" data-toggle="collapse" data-target="#collapseOne2">
                @lang('layout.version') 1.0
               </div>
              </div>
              <div id="collapseOne2" class="collapse show" data-parent="#accordionExample2">
               <div class="card-body">
                <p>@lang('product.highlight')</p>
                <div class="d-flex align-items-center">
                  <i class='bx bxs-check-circle text-darkgrey mr-1' ></i>
                  <span class="text-darkgrey h6 mb-0">@lang('layout.updated') 15 Mar, 2021</span>
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
        <span class="text-black font-15px">@lang('layout.local-history')</span>
      </div>
      <div>
        <span class="clear-all font-15px pointer">@lang('layout.clear-all')</span>
      </div>
    </div>
    <div id="localsavemobile" class="local-collection-body mt-3 px-5"></div>
  </div>
</div>
<div class="" style="background:white">
  <div class="container container-description">
    <div class="row">
      <div class="col-md-9">
        <div class="" id="description-tab-1">
          <h2>@lang('product.desc-1')</h2>
          <p>@lang('product.desc-1-1')</p>
          <p>@lang('product.desc-1-2')</p>
          <p>@lang('product.desc-1-3')</p>
          <img class="mb-4" src="{{asset('/media/images/product-instruction-1.png')}}" alt="" width="300">
          <p>@lang('product.desc-1-4')</p>
          <ul>
            <li>@lang('product.desc-1-4-1')</li>
            <li>@lang('product.desc-1-4-2')</li>
          </ul>
          <p>@lang('product.desc-1-5')</p>
        </div>
        <div class="d-none" id="description-tab-2">
          <h2>@lang('product.desc-2')</h2>
          <p>@lang('product.desc-2-1')</p>
          <p>@lang('product.desc-2-2')</p>
          <p>@lang('product.desc-2-3')</p>
          <img class="mb-4" src="{{asset('/media/images/product-instruction-2.png')}}" alt="" width="300">
        </div>
        <div class="d-none" id="description-tab-3">
          <h2>@lang('product.desc-3')</h2>
          <p>@lang('product.desc-3-1')</p>
          <p>@lang('product.desc-3-2')</p>
          <p>@lang('product.desc-3-3')</p>
        </div>
        <div class="d-none" id="description-tab-4">
          <h2>@lang('product.desc-4')</h2>
          <p>@lang('product.desc-4-1')</p>
          <pre class="language-html mb-4">
            <code class="language-html">
              &lt;html&gt;
                &lt;head&gt;
                  &lt;title&gt;Executive Anvil&lt;/title&gt;
                  &lt;script type="application/ld+json"&gt;
                  {
                    "@context": "https://schema.org/",
                    "@type": "Product",
                    "name": "Executive Anvil",
                    "image": [
                      "https://example.com/photos/1x1/photo.jpg",
                      "https://example.com/photos/4x3/photo.jpg",
                      "https://example.com/photos/16x9/photo.jpg"
                     ],
                    "description": "Sleeker than ACME's Classic Anvil, the Executive Anvil is perfect for the business traveler looking for something to drop from a height.",
                    "sku": "0446310786",
                    "mpn": "925872",
                    "brand": {
                      "@type": "Brand",
                      "name": "ACME"
                    },
                    "review": {
                      "@type": "Review",
                      "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "4",
                        "bestRating": "5"
                      },
                      "author": {
                        "@type": "Person",
                        "name": "Fred Benson"
                      }
                    },
                    "aggregateRating": {
                      "@type": "AggregateRating",
                      "ratingValue": "4.4",
                      "reviewCount": "89"
                    },
                    "offers": {
                      "@type": "Offer",
                      "url": "https://example.com/anvil",
                      "priceCurrency": "USD",
                      "price": "119.99",
                      "priceValidUntil": "2020-11-20",
                      "itemCondition": "https://schema.org/UsedCondition",
                      "availability": "https://schema.org/InStock"
                    }
                  }              
                  &lt;/script&gt;
                &lt;/head&gt;
                &lt;body&gt;
                &lt;/body&gt;
              &lt;/html&gt;                            
            </code>
          </pre>
        </div>
      </div>
      <div class="col-md-3">
        <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-1">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description active" id="nav-label-tab-1">1</span>
          </div>
          <a class="">@lang('product.desc-1')</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-2">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description" id="nav-label-tab-2">2</span>
          </div>
          <a class="">@lang('product.desc-2')</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-3">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description" id="nav-label-tab-3">3</span>
          </div>
          <a class="">@lang('product.desc-3')</a>
        </div>
        <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-4">
          <div class="mr-2" style="width:24px !important; height: 24px !important;">
            <span class="label label-lg label-tools-description" id="nav-label-tab-4">4</span>
          </div>
          <a class="">@lang('product.desc-4')</a>
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
            <h2 class="text-white">@lang('layout.banner-robo-title')</h2>
            <p class="text-white">@lang('layout.banner-robo-desc')</p>
            <button type="button" class="btn btn-explore " name="button" onclick="window.open('https://cmlabs.co','_blank')">@lang('layout.banner-robo-btn')</button>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="row mb-10">
      <div class="col-md-6">
        <h2 class="text-black">@lang('layout.feature-title')</h2>
        <p class="text-black" style="font-size:1.5rem">@lang('layout.feature-sub-title') @lang('product.title')</p>
        <p class="text-black">@lang('layout.feature-desc')</p>
      </div>
      <div class="col-md-6">
        <div class="d-flex align-items-center">
          <span class="text-primaryblue">cmlabs JSON-LD Product Schema Generator</span>
          <span class="bx bxs-check-circle ml-5 mr-1 text-primaryblue"></span>
          <small class="text-grey">@lang('layout.updated') 25 Dec, 2020</small>
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
    </div> --}}
    <h2 class="text-black">@lang('layout.whats-new-title') @lang('product.title')</h2>
    <div class="row my-5">
      <div class="col-md-6 mb-5">
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
            <span class="font-weight-light">@lang('layout.whats-new-update') 15 Mar, 2021</span>
          </div>
          <div class="alert-close pt-5 pr-5">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
            </button>
          </div>
          <span class="alert-features-text">@lang('product.whats-new-1')</span>
        </div>
      </div>
      <div class="col-md-6 mb-5">
        <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
          <div class="alert-text mb-5">
            <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
            <br />
            <span class="font-weight-light">@lang('layout.whats-new-update') 15 Mar, 2021</span>
          </div>
          <div class="alert-close pt-5 pr-5">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
            </button>
          </div>
          <span class="alert-features-text">@lang('product.whats-new-2')</span>
        </div>
      </div>
    </div>
    {{-- <p class="text-black view-all-release">@lang('layout.view-web-release')</p> --}}
  </div>
</div>



{{-- <div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>JSON-LD product Schema Generator</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">JSON-LD product SCHEMA GENERATOR </h1>
      <small>@lang('product.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="formproduct">
          <input type="text" name="" class="form-control mb-5 name" placeholder="@lang('product.name') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 image" placeholder="@lang('product.imageUrl') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 description" placeholder="@lang('product.description') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 brand" placeholder="@lang('product.brand') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 gtin8" placeholder="@lang('product.gtin8') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 gtin14" placeholder="@lang('product.gtin14') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 mpn" placeholder="@lang('product.mpn') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 gtin13" placeholder="@lang('product.gtin13') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 sku" placeholder="@lang('product.sku') :" value="" data-id="0">
          <select name="" class="form-control mb-5 offer" data-id="0">
              <option value="">Type</option>
              <option value="AggregationRating">Aggregation Offer</option>
          </select>
          <input type="text" name="" class="form-control mb-5 url" placeholder="@lang('product.url') :" value="" data-id="0">
          <select name="" class="form-control mb-5 priceCurrency" data-id="0">
            <option value="">Price Currency</option>
            <option value="USD">United States Dollar</option>
            <option value="GBP">British Pound Sterling</option>
            <option value="CA">Canada</option>
        </select>
        <input type="number" name="" class="form-control mb-5 lowPrice" placeholder="@lang('product.lowPrice') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 highPrice" placeholder="@lang('product.highPrice') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 numberOffers" placeholder="@lang('product.numberOffers') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 ratingValue" placeholder="@lang('product.ratingValue') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 bestRating" placeholder="@lang('product.bestRating') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 worstrating" placeholder="@lang('product.worstRating') :" value="" data-id="0">
        <input type="number" name="" class="form-control mb-5 ratingCount" placeholder="@lang('product.ratingCount') :" value="" data-id="0">

        </div>
        <button type="button" class="btn btn-primary" name="button" id="add-product">
        <i class="flaticon2-plus"></i> @lang('product.btn-add')
        </button>
      </div>
    </div>
    <!--end::Card-->
  </div>
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <form class="" target="_blank" rel="nofollow noopener noreferrer" action="https://search.google.com/test/rich-results" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <button type="button" id="copy" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="far fa-copy"></i> @lang('product.btn-copy')
              </button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="test" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="fas fa-circle"></i> @lang('product.btn-test')</button>
            </div>
          </div>
          <textarea name="code_snippet" style="resize:none" rows="30" class="form-control" id="json-format"></textarea>
        </div>
      </form>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Card-->
</div>
<div class="row" data-sticky-container>
  <div class="col-lg-8 mb-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('product.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td style="width:60%;" class="align-middle">
                <p>@lang('product.desc-1-1')</p>
              </td>
              <td class="align-middle"> <img id="1" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-1-min-1024x898.png" class="form-control" style="height:auto" alt="json 1 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('product.desc-1-2')</p>
              </td>
              <td class="align-middle"> <img id="2" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-2-min-1024x509.png" class="form-control" style="height:auto" alt="json 2 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('product.desc-1-3')</p>
              </td>
              <td class="align-middle"> <img id="3" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-3-min-1024x502.png" class="form-control" style="height:auto" alt="json 3 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('product.desc-1-4')</p>
                <p>@lang('product.desc-1-5')</p>
              </td>
              <td class="align-middle"> <img id="4" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-4-min-1024x556.png" class="form-control" style="height:auto" alt="json 4 min"> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('product.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('product.desc-2-1')</p>
        <p>@lang('product.desc-2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('product.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('product.desc-3-1')</p>
        <p>@lang('product.desc-3-2')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td>@lang('product.desc-3-3')</td>
            </tr>
          </tbody>
        </table>
        <p>@lang('product.desc-3-4')</p>
        <ul>
          <li>@lang('product.li-1')</li>
          <li>@lang('product.li-2')</li>
          <li>@lang('product.li-3')</li>
        </ul>
        <p>@lang('product.desc-3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('product.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('product.desc-4-1')</p>
        <p>@lang('product.desc-4-2')</p>
        <p>@lang('product.desc-4-3')</p>
        <p>@lang('product.desc-4-4')</p>
        <p>@lang('product.desc-4-5')</p>
        <p>@lang('product.desc-4-6')</p>
        <p>@lang('product.desc-4-7')</p>
        <p>@lang('product.desc-4-8')</p>
        <p>@lang('product.desc-4-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('product.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('product.desc-5-1')</p>
        <p>@lang('product.desc-5-2')</p>
        <h3 class="font-weight-bold py-5">@lang('product.title-6')</h3>
        <p>@lang('product.desc-6-1')</p>
        <p>@lang('product.desc-6-2')</p>
        <p>@lang('product.desc-6-3')</p>
        <h3 class="font-weight-bold py-5">@lang('product.title-7')</h3>
        <p>@lang('product.desc-7-1')</p>
        <p>@lang('product.desc-7-2')</p>
        <p>@lang('product.desc-7-3')</p>
        <p>@lang('product.desc-7-4')</p>
        <h3 class="font-weight-bold py-5">@lang('product.title-8')</h3>
        <p>@lang('product.desc-8-1')</p>
        <p>@lang('product.desc-8-2')</p>
        <p>@lang('product.desc-8-3')</p>
        <p>@lang('product.desc-8-4')</p>
        <h3 class="font-weight-bold py-5">@lang('product.title-9')</h3>
        <p>@lang('product.desc-9-1')</p>
        <p>@lang('product.desc-9-2')</p>
        <p>@lang('product.desc-9-3')</p>
        <p>@lang('product.desc-9-4')</p>
        <p>@lang('product.desc-9-5')</p>
      </div>
    </div>
    <!--end::Card-->
  </div>
  @include('layouts/stickybar')
</div>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img class="img-responsive form-control" alt="image modal" style="height:auto;" src="" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> --}}


@endsection

@push('script')
<script type="text/javascript">
  $(document).ready(function() {
    $('#myModal').on('show.bs.modal', function(e) {
      var image = $(e.relatedTarget).attr('src');
      $(".img-responsive").attr("src", image);
    });
  });
</script>
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
    },{
      "@type": "ListItem",
      "position": 2,
      "name": "JSON-LD product Schema Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/product-json.js')}}"></script>
<script src="{{asset('js/pages/crud/forms/widgets/bootstrap-datepicker.min.js')}}"></script>
@endpush
@section('json-ld-product')
active
@endsection
