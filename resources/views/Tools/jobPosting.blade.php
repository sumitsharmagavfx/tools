@extends('layouts.app')

@section('title', "JSON-LD Job Posting Schema Generator")

@section('meta-desc', "JSON-LD Job Posting Schema Generator")

@section('meta-keyword', "JSON-LD Job Posting Schema Generator")

@section('conical','/en/json-ld-jobPosting-schema-generator')

@section('en-link')
en/json-ld-jobPosting-schema-generator
@endsection

@section('id-link')
id/json-ld-jobPosting-schema-generator
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

.form-control.custom-textarea-100px {
  resize: none;
  height: 100px;
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

.bootstrap-select .dropdown-menu.inner > li.active:not(.selected) > a {
  background: var(--primaryblue);
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
      <h1 class="text-darkgrey font-weight-normal">JSON-LD JOB POSTING SCHEMA GENERATOR</h1>
      <span class="text-darkgrey h4 font-weight-normal">Login to unlock all features here, 100% free!</span>

      <div class="card card-custom mt-10 mb-5">
        <div class="card-body py-5">
          <div class="row">
            <div class="col-md-4 mb-5">
              <label for="schema-json-ld" class="font-weight-bold text-black h6">Which Schema would you like to create?</label>
              <select class="form-control selectpicker custom-select-blue" tabindex="null" id="schema-json-ld">
                <option value="home">Home</option>
                <option value="breadcrumb">Breadcrumb</option>
                <option value="faq">FAQ Page</option>
                <option value="how-to">How-to</option>
                <option value="job-posting" selected="selected">Job Posting</option>
                <option value="person">Person</option>
                <option value="product">Product</option>
                <option value="recipe">Recipe</option>
              </select>
            </div>
            <div class="col-md-8 d-flex align-items-center mb-5">
              <p class="text-black mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-custom mb-5">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 mb-5">
              <p class="h6 text-black mb-5">Job Posting</p>
              <div class="" id="formjobposting">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="text-black font-weight-bold" for="jobTitle">Job’s title</label>
                    <input type="text" name="" class="form-control jobTitle mb-5" placeholder="@lang('jobPosting.jobTitle')" value="" data-id="0">
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="text-black font-weight-bold" for="identifier">Identifier</label>
                    <input type="text" name="" class="form-control identifier mb-5" placeholder="@lang('jobPosting.identifier')" value="" data-id="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label class="text-black font-weight-bold" for="description">Job description (in HTML)</label>
                    <textarea name="" class="form-control custom-textarea-100px description mb-5" placeholder="@lang('jobPosting.description')" data-id="0"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-xl-4">
                    <label class="text-black font-weight-bold" for="name">Company</label>
                    <input type="text" name="" class="form-control name mb-5" placeholder="@lang('jobPosting.name')" value="" data-id="0">
                  </div>
                  <div class="col-12 col-md-6 col-xl-4  mb-5">
                    <label class="text-black font-weight-bold" for="companyUrl">Company URL</label>
                    <input type="text" name="" class="form-control companyUrl" placeholder="@lang('jobPosting.companyUrl')" value="" data-id="0">
                    <div class="invalid-feedback">Invalid URL</div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                    <label class="text-black font-weight-bold" for="industry">Industry</label>
                    <input type="text" name="" class="form-control industry mb-5" placeholder="@lang('jobPosting.industry')" value="" data-id="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <label class="text-black font-weight-bold" for="employmentType">Employment type</label>
                    <select class="form-control selectpicker employmentType mb-5">
                      <option value="Full time">Full time</option>
                      <option value="Part time">Part time</option>
                      <option value="Contractor">Contractor</option>
                      <option value="Temporary">Temporary</option>
                      <option value="Intern">Intern</option>
                    </select>
                  </div>
                  <div class="col-12 col-xl-6">
                    <label class="text-black font-weight-bold" for="workHours">Work hours</label>
                    <input type="text" name="" class="form-control workHours mb-5" placeholder="@lang('jobPosting.workHours')" value="" data-id="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label class="text-black font-weight-bold" for="datePosted">Date posted</label>                      
                    <div class="input-group date mb-5">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="bx bx-calendar text-darkgrey"></i>
                        </span>
                      </div>
                      <input type="text" id="kt_datepicker_2" name="" class="form-control custom-date datePosted" readonly  placeholder="@lang('jobPosting.datePosted')" value="" data-id="0"/>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="text-black font-weight-bold" for="expiredDate">Date expired</label>
                    <div class="input-group date mb-5">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="bx bx-calendar text-darkgrey"></i>
                        </span>
                      </div>
                      <input type="text" id="kt_datepicker_2" name="" class="form-control custom-date expiredDate" readonly  placeholder="@lang('jobPosting.expiredDate')" value="" data-id="0"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-3 col-xxl-2 align-self-center mt-md-2 mb-5 mb-md-0">
                    <div class="checkbox-list align-items-center">
                      <label class="checkbox text-black font-weight-bold">
                      <input type="checkbox" id="remoteJob" name="" />
                      <span></span>Remote job</label>
                    </div>
                  </div>
                  <div class="col-12 col-md-5 col-xxl-5">
                    <label class="text-black font-weight-bold" for="street">Street</label>
                    <input type="text" name="" class="form-control street mb-5" placeholder="@lang('jobPosting.street')" value="" data-id="0">
                  </div>
                  <div class="col-12 col-md-4 col-xxl-5">
                    <label class="text-black font-weight-bold" for="city">City</label>
                    <input type="text" name="" class="form-control city mb-5" placeholder="@lang('jobPosting.city')" value="" data-id="0">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-8 col-xl-5">
                    <label class="text-black font-weight-bold" for="province">State/Province/Region</label>
                    <select class="form-control selectpicker province mb-5" data-size="4" data-live-search="true" tabindex="null">
                      <option value="null">null</option>
                    </select>
                  </div>
                  <div class="col-4 col-xl-2">
                    <label class="text-black font-weight-bold" for="zipCode">Zip code</label>
                    <input type="text" name="" class="form-control zipCode mb-5" placeholder="@lang('jobPosting.zipCode')" value="" data-id="0">
                  </div>
                  <div class="col-8 col-md-12 col-xl-5">
                    <label class="text-black font-weight-bold" for="country">Country</label>
                    <select class="form-control selectpicker country mb-5" data-size="4" data-live-search="true" tabindex="null">
                      <option value="null">null</option>
                      {{-- use api from https://technicalseo.com/tools/assets/data/regions.json --}}
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 col-xl-4 mb-5">
                    <label class="text-black font-weight-bold" for="salary">Salary</label>
                    <input type="number" name="" class="form-control salary" placeholder="@lang('jobPosting.salary')" value="" min="0" data-id="0">
                    <div class="invalid-feedback">Value should be more than 0</div>
                  </div>
                  <div class="col-6 col-xl-3 mb-5">
                    <label class="text-black font-weight-bold" for="maxSalary">Max. Salary</label>
                    <input type="number" name="" class="form-control maxSalary" placeholder="@lang('jobPosting.maxSalary')" value="" min="0" data-id="0" disabled="disabled">
                    <div class="invalid-feedback">Value should be more than 0</div>
                  </div>
                  <div class="col-6 col-xl-3">
                    <label class="text-black font-weight-bold" for="currency">Currency</label>
                    <select class="form-control selectpicker currency mb-5" data-size="4" data-live-search="true" disabled="disabled">
                      <option value="null">null</option>
                      {{-- use api from https://technicalseo.com/tools/assets/data/currencies.json --}}
                    </select>
                  </div>
                  <div class="col-6 col-xl-2">
                    <label class="text-black font-weight-bold" for="unitText">Per-</label>
                    <select class="form-control selectpicker unitText mb-5" tabindex="null" disabled="disabled">
                      <option value="Hour">Hour</option>
                      <option value="Week">Week</option>
                      <option value="Month">Month</option>
                      <option value="Year">Year</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <label class="text-black font-weight-bold" for="educationRequirements">Education requirements</label>
                    <input type="text" name="" class="form-control educationRequirements mb-5" placeholder="@lang('jobPosting.educationRequirements')" value="" data-id="0">
                  </div>
                  <div class="col-12 col-xl-6">
                    <label class="text-black font-weight-bold" for="experienceRequirements">Experience requirements</label>
                    <input type="text" name="" class="form-control experienceRequirements mb-5" placeholder="@lang('jobPosting.experienceRequirements')" value="" data-id="0">
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
                        <i class='bx bx-copy'></i> <span>Copy</span></button>
                      </div>
                      <div class="col-4 d-flex justify-content-center px-0 button-result">
                        <button type="submit" id="test" class="btn font-weight-bold " name="button">
                        <i class='bx bx-check-circle'></i> <span>Check</span></button>
                      </div>
                      <div id="reset" class="col-4 d-flex justify-content-center px-0 button-result">
                        <button type="button" class="btn font-weight-bold" name="button">
                        <i class='bx bx-refresh' ></i> <span>Reset</span></button>
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
                <span class="text-black font-15px">Your Local History</span>
              </div>
              <div onclick="clearAll()">
                <span class="clear-all font-15px pointer">Clear All</span>
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
    <div id="localsavemobile" class="local-collection-body mt-3 px-5"></div>
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


{{-- <div class="d-flex flex-column-fluid">
    <div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background-color:#EEF0F8 !important;">
    <li class="breadcrumb-item"><a href="/{{$local}}" class="menu-breadcrumb">@lang('home.homepage')</a></li>
    <li class="breadcrumb-item active" style="color:#2F80ED"><b>JSON-LD jobPosting Schema Generator</b></li>
  </ol>
</nav>
<div class="card card-custom mb-5">
  <div class="card-header">
    <div class="card-title">
      <h1 class="card-label">JSON-LD jobPosting SCHEMA GENERATOR </h1>
      <small>@lang('jobPosting.subtitle')</small>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <!--begin::Card-->
    <div class="card card-custom card-stretch gutter-b">
      <div class="card-body">
        <div class="mb-5" id="formjobPosting">
          <input type="text" name="" class="form-control mb-5 jobTitle" placeholder="@lang('jobPosting.jobTitle') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 identifier" placeholder="@lang('jobPosting.identifier') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 description" placeholder="@lang('jobPosting.description') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 name" placeholder="@lang('jobPosting.name') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 companyUrl" placeholder="@lang('jobPosting.companyUrl') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 industry" placeholder="@lang('jobPosting.industry') :" value="" data-id="0">
          <select name="" id="" class="form-control mb-5 employmentType" data-id="0">
              <option value="">@lang('jobPosting.employmentType')</option>
              <option value="fulltime">Full Time</option>
              <option value="parttime">Part Time</option>
              <option value="contractor">Contractor</option>
              <option value="temporary">Temporary</option>
              <option value="intern">Intern</option>
              <option value="volunteer">Volunter</option>
              <option value="perdiem">Per diem</option>
              <option value="other">Other</option>
          </select>
          <input type="number" name="" class="form-control mb-5 workHours" placeholder="@lang('jobPosting.workHours') :" value="" data-id="0">
          <input type="date" name="" class="form-control mb-5 datePosted" placeholder="@lang('jobPosting.datePosted') :" value="" data-id="0">
          <input type="date" name="" class="form-control mb-5 expiredDate" placeholder="@lang('jobPosting.expiredDate') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 street" placeholder="@lang('jobPosting.street') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 city" placeholder="@lang('jobPosting.city') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 zipCode" placeholder="@lang('jobPosting.zipCode') :" value="" data-id="0">
          <input type="text" name="" class="form-control mb-5 country" placeholder="@lang('jobPosting.country') :" value="" data-id="0">
          <input type="number" name="" class="form-control mb-5 salary" placeholder="@lang('jobPosting.salary') :" value="" data-id="0">
          <input type="number" name="" class="form-control mb-5 maxSalary" placeholder="@lang('jobPosting.maxSalary') :" value="" data-id="0">
          <select name="" id="" class="form-control mb-5 currency" data-id="0">
            <option value="">@lang('jobPosting.currency')</option>
            <option value="USD">United States</option>
            <option value="GB">United Kingdom</option>
            <option value="CA">Canada</option>
            <option value="IDR">Indonesia</option>
        </select>
          <select name="" id="" class="form-control mb-5 unitText" data-id="0">
            <option value="">@lang('jobPosting.unitText')</option>
            <option value="Hour">Hour</option>
            <option value="Week">Week</option>
            <option value="Month">Month</option>
            <option value="Year">Year</option>
        </select>
        <input type="text" name="" class="form-control mb-5 responsibilities" placeholder="@lang('jobPosting.responsibilities') :" value="" data-id="0">
        <input type="text" name="" class="form-control mb-5 skills" placeholder="@lang('jobPosting.skills') :" value="" data-id="0">
        <input type="text" name="" class="form-control mb-5 qualifications" placeholder="@lang('jobPosting.qualifications') :" value="" data-id="0">
        <input type="text" name="" class="form-control mb-5 educationRequirements" placeholder="@lang('jobPosting.educationRequirements') :" value="" data-id="0">
        <input type="text" name="" class="form-control mb-5 experienceRequirements" placeholder="@lang('jobPosting.experienceRequirements') :" value="" data-id="0">

        </div>
        {{-- <button type="button" class="btn btn-primary" name="button" id="add-jobPosting">
        <i class="flaticon2-plus"></i> @lang('jobPosting.btn-add')
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
              <i class="far fa-copy"></i> @lang('jobPosting.btn-copy')
              </button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="test" class="btn btn-text-dark-50 btn-icon-primary font-weight-bold btn-hover-bg-light mr-3 form-control mb-5" name="button">
              <i class="fas fa-circle"></i> @lang('jobPosting.btn-test')</button>
            </div>
          </div>
          <textarea name="code_snippet" style="resize:none" rows="55" class="form-control" id="json-format"></textarea>
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
          <h2 class="card-label">@lang('jobPosting.title')</h2>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td style="width:60%;" class="align-middle">
                <p>@lang('jobPosting.desc-1-1')</p>
              </td>
              <td class="align-middle"> <img id="1" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-1-min-1024x898.png" class="form-control" style="height:auto" alt="json 1 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('jobPosting.desc-1-2')</p>
              </td>
              <td class="align-middle"> <img id="2" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-2-min-1024x509.png" class="form-control" style="height:auto" alt="json 2 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('jobPosting.desc-1-3')</p>
              </td>
              <td class="align-middle"> <img id="3" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-3-min-1024x502.png" class="form-control" style="height:auto" alt="json 3 min"> </td>
            </tr>
            <tr>
              <td class="align-middle">
                <p>@lang('jobPosting.desc-1-4')</p>
                <p>@lang('jobPosting.desc-1-5')</p>
              </td>
              <td class="align-middle"> <img id="4" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-4-min-1024x556.png" class="form-control" style="height:auto" alt="json 4 min"> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('jobPosting.title-2')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('jobPosting.desc-2-1')</p>
        <p>@lang('jobPosting.desc-2-2')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('jobPosting.title-3')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('jobPosting.desc-3-1')</p>
        <p>@lang('jobPosting.desc-3-2')</p>
        <table class="table" border="1px" bordercolor="#EBEDF3">
          <tbody>
            <tr>
              <th class="align-middle"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td>@lang('jobPosting.desc-3-3')</td>
            </tr>
          </tbody>
        </table>
        <p>@lang('jobPosting.desc-3-4')</p>
        <ul>
          <li>@lang('jobPosting.li-1')</li>
          <li>@lang('jobPosting.li-2')</li>
          <li>@lang('jobPosting.li-3')</li>
        </ul>
        <p>@lang('jobPosting.desc-3-5')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('jobPosting.title-4')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('jobPosting.desc-4-1')</p>
        <p>@lang('jobPosting.desc-4-2')</p>
        <p>@lang('jobPosting.desc-4-3')</p>
        <p>@lang('jobPosting.desc-4-4')</p>
        <p>@lang('jobPosting.desc-4-5')</p>
        <p>@lang('jobPosting.desc-4-6')</p>
        <p>@lang('jobPosting.desc-4-7')</p>
        <p>@lang('jobPosting.desc-4-8')</p>
        <p>@lang('jobPosting.desc-4-9')</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h2 class="card-label">@lang('jobPosting.title-5')</h2>
        </div>
      </div>
      <div class="card-body">
        <p>@lang('jobPosting.desc-5-1')</p>
        <p>@lang('jobPosting.desc-5-2')</p>
        <h3 class="font-weight-bold py-5">@lang('jobPosting.title-6')</h3>
        <p>@lang('jobPosting.desc-6-1')</p>
        <p>@lang('jobPosting.desc-6-2')</p>
        <p>@lang('jobPosting.desc-6-3')</p>
        <h3 class="font-weight-bold py-5">@lang('jobPosting.title-7')</h3>
        <p>@lang('jobPosting.desc-7-1')</p>
        <p>@lang('jobPosting.desc-7-2')</p>
        <p>@lang('jobPosting.desc-7-3')</p>
        <p>@lang('jobPosting.desc-7-4')</p>
        <h3 class="font-weight-bold py-5">@lang('jobPosting.title-8')</h3>
        <p>@lang('jobPosting.desc-8-1')</p>
        <p>@lang('jobPosting.desc-8-2')</p>
        <p>@lang('jobPosting.desc-8-3')</p>
        <p>@lang('jobPosting.desc-8-4')</p>
        <h3 class="font-weight-bold py-5">@lang('jobPosting.title-9')</h3>
        <p>@lang('jobPosting.desc-9-1')</p>
        <p>@lang('jobPosting.desc-9-2')</p>
        <p>@lang('jobPosting.desc-9-3')</p>
        <p>@lang('jobPosting.desc-9-4')</p>
        <p>@lang('jobPosting.desc-9-5')</p>
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
      "name": "JSON-LD jobPosting Schema Generator"
    }]
  }
</script>
@endpush
@push('script')
<script src="{{asset('js/logic/jobPosting-json.js')}}"></script>
<script src="{{asset('js/pages/crud/forms/widgets/bootstrap-datepicker.min.js')}}"></script>
@endpush
@section('json-ld-jobPosting')
active
@endsection
