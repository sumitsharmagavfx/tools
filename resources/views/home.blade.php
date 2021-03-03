@extends('layouts.app')

@section('title', Lang::get('home.meta-title'))

@section('meta-desc', Lang::get('home.meta-desc'))

@section('meta-keyword', Lang::get('home.meta-keyword'))

@section('en-link')
en
@endsection
@section('id-link')
id
@endsection

@section('content')
<div class="container container-tools mb-10">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid px-0">
            <div class="text-center">
                <h1 class="text-black font-weight-bold display-4">SEO TOOLS by CMLABS</h1>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu nibh mauris imperdiet est tincidunt libero. Pellentesque eget lacus, congue in aliquet luctus.</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 row">
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-calculator bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Word Counter</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/word-counter'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-text bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Title & Lengths Checker</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/page-title-meta-description-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-code-curly bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">JSON-LD Generator</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/json-ld-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-timer bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Page Speed Test</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/pagespeed-test'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-code-block bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Sitemap Generator</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/sitemap-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-mobile-alt bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Mobile Friendly Test</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/mobile-friendly-test'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-check-shield bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">SSL Checker</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/ssl-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-mask bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Robot.txt Generator</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/robotstxt-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-link bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Redirect Chain Checker</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/redirect-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-bot bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Technology Lookup</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/technology-lookup'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-lg bx-globe'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Link Analyzer</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/link-analyzer'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-file-find bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Hreflang Checker</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/hreflang-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-test-tube bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Keyword Research</h2>
                                <p class="text-darkgrey">JSON-LD Generator adalah sebuah tools yang dibuat oleh cmlabs untuk memudahkan user.</p>
                                <button onclick="window.location.href='/{{ $local }}/keyword-research'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
                <span class="text-darkgrey">Last update 1 Nov, 2020 | Version 1.7</span>
            </div>
        </div>
    </div>
</div>
<div class="" style="background:white">
    <div class="container container-description">
        <h2 class="text-black">Advance your writing</h2>
        <div class="row">
            <div class="col-md-9">
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
                <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>
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
                    <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update,
                        starting
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
                    <span class="alert-features-text">Now user can set their CTR’s for the each market projection with three-level of keywords. (a) Domain Level, (b) Page Category / Product Level, and (c) Tag / Sub-Catagory Level. With this update,
                        starting
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
    $(document).ready(function() {
        $('.contributor-slide').carousel({
            pause: "hover"
        })
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
            "name": "@lang('home.homepage')"
        }]
    }
</script>
<script type="text/javascript">
    $('#toggle_button_webmaster').click();
</script>
@endpush

@section('home')
active
@endsection
