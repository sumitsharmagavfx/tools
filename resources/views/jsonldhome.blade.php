@extends('layouts.app')

@section('title', 'JSON-LD Schema Generator')

@section('meta-desc', 'JSON-LD Schema Generator')

@section('conical','/en/json-ld-schema-generator')

@section('en-link')
en/json-ld-schema-generator
@endsection

@section('id-link')
id/json-ld-schema-generator
@endsection

@section('content')
<div class="container container-tools mb-10">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <div class="text-center">
                <h1 class="text-black font-weight-light">JSON-LD SCHEMA GENERATOR</h1>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p class="text-black font-weight-light">JSON-LD SCHEMA GENERATOR is a special tool created by CMLABS to facilitate SEO writers to add schema.org markup to their content.</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 row">
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-chevron-right-square bx-lg text-darkgrey'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Breadcrumb</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-breadcrumb-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-breadcrumb-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-help-circle text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">FAQ Page</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-faq-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-faq-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bx-list-check text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">How-to</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-howto-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-how-to-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-briefcase text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Job Posting</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-jobposting-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-job-posting-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-user text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Person</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-person-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-person-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-purchase-tag text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Product</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-product-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-product-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="">
                                <i class='bx bxs-receipt text-darkgrey bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Recipe</h2>
                                <p class="text-darkgrey mb-0">@lang('jsonldhome.json-ld-recipe-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-right border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-recipe-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
                <span class="text-darkgrey">@lang('layout.whats-new-update') 1 Nov, 2020 | @lang('layout.version') 1.7</span>
            </div>
        </div>
    </div>
</div>
<div class="" style="background:white">
    <div class="container container-description">
        <div class="row">
            <div class="col-md-9">
                <div class="" id="description-tab-1">
                    <h2>@lang('jsonldhome.desc-1')</h2>
                    <p>@lang('jsonldhome.desc-1-1')</p>
                    <p>@lang('jsonldhome.desc-1-2')</p>
                    <p>@lang('jsonldhome.desc-1-3')</p>
                    <p>@lang('jsonldhome.desc-1-3-1')</p>
                    <p>@lang('jsonldhome.desc-1-3-1-1')</p>
                    <p>@lang('jsonldhome.desc-1-3-2')</p>
                    <p>@lang('jsonldhome.desc-1-3-2-1')</p>
                    <p>@lang('jsonldhome.desc-1-4')</p>
                </div>
                <div class="d-none" id="description-tab-2">
                    <h2>@lang('jsonldhome.desc-2')</h2>
                    <p>@lang('jsonldhome.desc-2-1')</p>
                    <p>@lang('jsonldhome.desc-2-2')</p>
                    <p>@lang('jsonldhome.desc-2-3')</p>
                    <p>@lang('jsonldhome.desc-2-4')</p>
                    <p>@lang('jsonldhome.desc-2-5')</p>
                    <p>@lang('jsonldhome.desc-2-6')</p>
                </div>
                <div class="d-none" id="description-tab-3">
                    <h2>@lang('jsonldhome.desc-3')</h2>
                    <p>@lang('jsonldhome.desc-3-1')</p>
                    <p>@lang('jsonldhome.desc-3-2')</p>
                    <p>@lang('jsonldhome.desc-3-3')</p>
                    <p>@lang('jsonldhome.desc-3-4')</p>
                    <p>@lang('jsonldhome.desc-3-5')</p>
                    <p>@lang('jsonldhome.desc-3-6')</p>
                    <pre class="language-html mb-4">
            <code class="language-html">
              &lt;script type="application/ld+json"&gt;
                {
                  "@context": "http://schema.org/",
                  "@type": "Product",
                  "name": "Yoast SEO for WordPress",
                  "image": "https://cdn-images.yoast.com/uploads/2010/10/Yoast_SEO_WP_plugin_FB.png",
                  "description": "Yoast SEO is the most complete WordPress SEO plugin. It handles the technical optimization of your site & assists with optimizing your content.",
                  "brand": {
                    "@type": "Thing",
                    "name": "Yoast"
                  },
                  "offers": {
                    "@type": "Offer",
                    "priceCurrency": "USD",
                    "price": "69.00"
                  }
                }
              &lt;/script&gt;
            </code>
          </pre>
                    <p>@lang('jsonldhome.desc-3-7')</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-1">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description active" id="nav-label-tab-1">1</span>
                    </div>
                    <a class="">@lang('jsonldhome.desc-1')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-2">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-2">2</span>
                    </div>
                    <a class="">@lang('jsonldhome.desc-2')</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-3">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-3">3</span>
                    </div>
                    <a class="">@lang('jsonldhome.desc-3')</a>
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
                        <button type="button" class="btn btn-explore " name="button">@lang('layout.banner-robo-btn')</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-md-6">
                <h2 class="text-black">@lang('layout.feature-title')</h2>
                <p class="text-black" style="font-size:1.5rem">@lang('layout.feature-sub-title') @lang('jsonldhome.title')</p>
                <p class="text-black">@lang('layout.feature-desc')</p>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <span class="text-primaryblue">cmlabs JSON-LD Schema Generator</span>
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
        </div>
        <h2 class="text-black">@lang('layout.whats-new-title') @lang('jsonldhome.title')</h2>
        <div class="row my-5">
            <div class="col-md-6 mb-5">
                <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
                    <div class="alert-text mb-5">
                        <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
                        <br />
                        <span class="font-weight-light">@lang('layout.whats-new-update') Dec 2, 2020</span>
                    </div>
                    <div class="alert-close pt-5 pr-5">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                        </button>
                    </div>
                    <span class="alert-features-text">@lang('jsonldhome.whats-new-1')</span>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="alert alert-custom alert-features-new fade show card card-custom card-stretch" role="alert" style="background: var(--lightgrey); display:block">
                    <div class="alert-text mb-5">
                        <span class="h4 alert-title">@lang('layout.whats-new-sub-title')</span>&nbsp;&nbsp;<span class="label label-dot label-alert-features"></span>
                        <br />
                        <span class="font-weight-light">@lang('layout.whats-new-update') Dec 2, 2020</span>
                    </div>
                    <div class="alert-close pt-5 pr-5">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="ki ki-close icon-alert-close"></i></span>
                        </button>
                    </div>
                    <span class="alert-features-text">@lang('jsonldhome.whats-new-2')</span>
                </div>
            </div>
        </div>
        <p class="text-black view-all-release">@lang('layout.view-web-release')</p>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
    $('#toggle_button_webmaster').click();
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "@lang('layout.home')",
            "item": "{{url('/')}}/{{$local}}"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "JSON-LD Schema Generator",
            "item": "{{url('/')}}/{{$local}}/json-ld-schema-generator"
        }]
    }
</script>
@endpush

@section('json-ld')
active
@endsection
