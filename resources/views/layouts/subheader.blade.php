<div class="subheader py-2 py-lg-2 subheader-solid custom-subheader custom-subheader-desktop" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <a href="/{{ $local }}" id="subheader_logo" class="d-none">
                    <img alt="Logo" src="{{ asset('media/logos/new/new-logo-default.png') }}" class="max-h-30px mr-8" />
                </a>
                <ul class="nav custom-nav d-none" id="menu_tools_webmaster">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="/{{ $local }}">@lang('layout.home')</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('json-ld')" href="/{{ $local }}/json-ld-schema-generator">JSON-LD</a>
                    </li>
                    {{--
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('keyword-research')" href="/{{ $local }}/keyword-research">Keyword Research</a>
                    </li>
                    --}}
                    <li class="nav-item dropdown ml-7">
                        <a class="nav-link dropdown-toggle @yield('generator')" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Generator</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item @yield('sitemap')" href="/{{ $local }}/sitemap-generator">Sitemap .XML Generator</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('robotstxt-generator')" href="/{{ $local }}/robotstxt-generator">Robots .TXT Generator</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown ml-7">
                        <a class="nav-link dropdown-toggle @yield('test-n-checker')" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Test & Checker</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item @yield('page-speed')" href="/{{ $local }}/pagespeed-test">Page Speed Test</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('mobile-test')" href="/{{ $local }}/mobile-friendly-test">Mobile Friendly Test</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('ssl-checker')" href="/{{ $local }}/ssl-checker">SSL Certificate Checker</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('redirect-checker')" href="/{{ $local }}/redirect-checker">Redirect Chain Checker</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('hreflang-checker')" href="/{{ $local }}/hreflang-checker">Hreflang Cheker</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('link-analyzer')" href="/{{ $local }}/link-analyzer">Link Analyzer</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item @yield('technology-lookup')" href="/{{ $local }}/technology-lookup">Technology Lookup</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav custom-nav" id="menu_tools_writer">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="/{{ $local }}">@lang('layout.home')</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('word-counter')" href="/{{ $local }}/word-counter">Word Counter</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('title-checker')" href="/{{ $local }}/page-title-meta-description-checker">Title and Meta Checker</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex align-items-center">
            @lang('layout.switch-to')
            <button class="btn btn-custom-login ml-3" id="toggle_button_webmaster"><b>@lang('layout.for-web-master')</b></button>
            <button class="btn btn-custom-login ml-3 d-none" id="toggle_button_writer"><b>@lang('layout.for-writers')</b></button>
        </div>
    </div>
</div>
