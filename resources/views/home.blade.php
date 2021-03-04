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
                <h1 class="text-black font-weight-bold display-4">@lang('home.title')</h1>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p class="text-black">@lang('home.sub-title')</p>
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
                                <p class="text-darkgrey mb-0">@lang('home.word-counter-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/word-counter'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-text bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Title & Lengths Checker</h2>
                                <p class="text-darkgrey mb-0">@lang('home.meta-checker-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/page-title-meta-description-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-code-curly bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">JSON-LD Generator</h2>
                                <p class="text-darkgrey mb-0">@lang('home.json-ld-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/json-ld-schema-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-timer bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Page Speed Test</h2>
                                <p class="text-darkgrey mb-0">@lang('home.pagespeed-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/pagespeed-test'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-code-block bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Sitemap Generator</h2>
                                <p class="text-darkgrey mb-0">@lang('home.sitemap-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/sitemap-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-mobile-alt bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Mobile Friendly Test</h2>
                                <p class="text-darkgrey mb-0">@lang('home.mobile-friendly-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/mobile-friendly-test'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-check-shield bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">SSL Checker</h2>
                                <p class="text-darkgrey mb-0">@lang('home.ssl-checker-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/ssl-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-mask bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Robot.txt Generator</h2>
                                <p class="text-darkgrey mb-0">@lang('home.robot-txt-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/robotstxt-generator'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-link bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Redirect Chain Checker</h2>
                                <p class="text-darkgrey mb-0">@lang('home.redirect-checker-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/redirect-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-bot bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Technology Lookup</h2>
                                <p class="text-darkgrey mb-0">@lang('home.technology-lookup-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/technology-lookup'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-lg bx-globe'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Link Analyzer</h2>
                                <p class="text-darkgrey mb-0">@lang('home.link-analyzer-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/link-analyzer'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-8">
                    <div class="card card-custom card-stretch card-home">
                        <div class="card-body p-7">
                            <div class="text-center">
                                <i class='text-darkgrey bx bx-file-find bx-lg'></i>
                                <h2 class="h6 text-darkgrey font-weight-bolder">Hreflang Checker</h2>
                                <p class="text-darkgrey mb-0">@lang('home.hreflang-checker-desc')</p>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top-0 pt-0">
                            <button onclick="window.location.href='/{{ $local }}/hreflang-checker'" type="button" class="btn btn-launch" name="button">LAUNCH</button>
                        </div>
                    </div>
                </div>
                {{--
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
                --}}
            </div>
            <div class="d-flex align-items-center">
                <i class='bx bxs-check-circle text-darkgrey mr-1'></i>
                <span class="text-darkgrey">Last update 31 Mar, 2021 | Version 1.0</span>
            </div>
        </div>
    </div>
</div>
<div class="" style="background:white">
    <div class="container container-description">
        <div class="row">
            <div class="col-md-9">
                <div class="" id="description-tab-1">
                    <h2>Important Note</h2>
                    <ul>
                        <li>In using some tools that require you to enter a URL, make sure it is valid. Otherwise, the tool will not function properly.</li>
                        <li>If you run your test on one tool and it shows different results at different times, keep in mind that it may be due to a Google update.</li>
                        <li>If you lose your internet connection in the middle of testing the tool, we recommend that you refresh the page and try running the test again.</li>
                        <li>This tool is provided free of charge and has no restrictions for any user.</li>
                        <li>If you find any bugs or problems using the tool, please contact our team on the live chat in the bottom corner of cmlabs.co.</li>
                    </ul>
                </div>

                <div class="d-none" id="description-tab-2">
                    <h2>How to Use</h2>
                    <h3>WORD COUNTER</h3>
                    <ol>
                        <li>Copy the article you want to check.</li>
                        <li>Paste in the fields provided.</li>
                        <li>You will get results for the number of characters, words, sentences, paragraphs and reading time.</li>
                        <li>On the right, per 1 word, 2 words, up to 5 words, you will also get the keyword density.</li>
                    </ol>
                    <h3>TITLE & META DESCRIPTION CHECKER</h3>
                    <ol>
                        <li>Copy the URL of the web page you want to analyze.</li>
                        <li>Paste in the URL field provided.</li>
                        <li>Click the Get Title & Meta Desc button.</li>
                        <li>The resulting title and meta description of the page will be available in the fields provided. You can edit directly in that field.</li>
                        <li>Click Copy to Clipboard to copy the customized title and meta description.</li>
                    </ol>
                    <h3>JSON-LD SCHEMA GENERATOR</h3>
                    <h4>Breadcrumb</h4>
                    <ol>
                        <li>Fill the Page name and the URL</li>
                        <li>If you wish to add more, click the “Add URL” button.</li>
                        <li>Once done, check the code in the right column to make sure whether it is eligible on Google Rich Result.</li>
                        <li>Finally, you can copy the code onto your website.</li>
                    </ol>
                    <h4>FAQ</h4>
                    <ol>
                        <li>Fill in the questions and answers in the given column.</li>
                        <li>If you wish to add more, click the Add Another FAQ button.</li>
                        <li>Once done, check the code in the right column to make sure whether it is eligible on Google Rich Result.</li>
                        <li>Finally, you can copy the code onto your website.</li>
                    </ol>
                    <h4></h4>
                </div>

                <div class="d-none" id="description-tab-3">
                    <h2>Frequently Asked Question (FAQ)</h2>
                    <h3>What is the cmlabs tool?</h3>
                    <p>The cmlabs tool is an online tool developed to help content writers, SEO experts and developers improve the quality of their work. All of these tools are free and accessible to all users without limits.</p>
                    <p>This tool started after observing the enthusiasm of newbies in learning content writing, SEO and web development. Here we are taking learning shortcuts using this free and unlimited tool.</p>
                    <p>With the number and features added every week, the cmlabs tool will evolve even further.</p>
                    <h3>What are the tools that have been released?</h3>
                    <p><b>Word Counter</b> is useful for counting the number of words, paragraphs, reading time, and keyword density.</p>
                    <p>You can measure the length of your title and meta definition in pixels and characters with the <b>Title & Meta Length Checker.</b></p>
                    <p>The <b>JSON-LD Schema FAQ generator</b> is useful for creating schema FAQs in SERPs.</p>
                    <p>For testing website efficiency from different aspects, the <b>PageSpeed Test</b> is useful.</p>
                    <p><b>Mobile Friendly Test</b> is useful for testing the responsiveness of websites on mobile devices.</p>
                    <p><b>The Sitemap Generator</b> is useful for creating XML sitemaps.</p>
                    <p><b>SSL Checker</b> is useful for checking the validation of a website's SSL certificate.</p>
                    <p>In number and functionality, the tools is still increasing. Subscribe to our email and push notifications to get the latest updates on the CMLABS tool.</p>
                    <h3>Who needs this tool?</h3>
                    <ol>
                        <li>Content writers and Copywriters need both a Word Counter and a Title & Meta Checker.</li>
                        <li>SEO experts need the JSON-LD Schema FAQ, PageSpeed ​​Testing, and Mobile Friendly Testing.</li>
                        <li>Developers need a Sitemap Generator and SSL Checker</li>
                    </ol>
                    <h3>When does a Marketer or Product Manager need a cmlabs tool?</h3>
                    <p>At the research, production, and audit stages, the cmlabs tool can be used. At the research stage, marketers can see the keyword density of competitors by using the Word Counter tool.</p>
                    <p>At the development stage, the Product Manager can create an FAQ schema in the SERP by using the JSON-LD Schema FAQ. Apart from that, they can also optimize the appearance of websites on mobile devices using Mobile Friendly
                        Testing. In order to speed up crawling using the Robot.txt Generator, you can also connect robot.txt to the website. The developer at this stage can create an XML sitemap using the Sitemap Generator.</p>
                    <p>In the audit stage, content writers can check the title length and meta description using the Title & Meta Length Checker. SEO experts and developers can check website performance using the PageSpeed ​​Test. At this stage the
                        developer can also check the SSL certificate using SSL Checker.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-1">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description active" id="nav-label-tab-1">1</span>
                    </div>
                    <a class="">Important Note</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-2">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-2">2</span>
                    </div>
                    <a class="">How to Use</a>
                </div>
                <div class="d-flex align-items-center mb-5 tools-description-points" id="nav-desc-tab-3">
                    <div class="mr-2" style="width:24px !important; height: 24px !important;">
                        <span class="label label-lg label-tools-description" id="nav-label-tab-3">3</span>
                    </div>
                    <a class="">Frequently Asked Question (FAQ)</a>
                </div>
            </div>
        </div>
        <div class="mt-10" style="background:var(--darkgrey); border-radius:20px">
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
