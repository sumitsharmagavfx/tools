<div class="subheader py-2 py-lg-2 subheader-solid custom-subheader custom-subheader-desktop" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <a href="/{{ $local }}" id="subheader_logo" class="d-none">
                    <img alt="Logo" src="{{ asset('media/logos/new/new-logo-default.png') }}" class="max-h-30px mr-8"/>
                </a>
                <ul class="nav custom-nav d-none" id="menu_tools_webmaster">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="/{{ $local }}">Home</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('json-ld')" href="/{{ $local }}/json-ld-faq-schema-generator">JSON-LD Generator</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('page-speed')" href="/{{ $local }}/pagespeed-test">Page Speed Test</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('sitemap')" href="/{{ $local }}/sitemap-generator">Sitemap.XML Generator</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('mobile-test')" href="/{{ $local }}/mobile-friendly-test">Mobile Friendly Test</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('ssl-checker')" href="/{{ $local }}/ssl-checker">SSL Certificate Checker</a>
                    </li>
                    <li class="nav-item ml-7">
                        <a class="nav-link @yield('robotstxt-generator')" href="/{{ $local }}/robotstxt-generator">Robots.TXT Generator</a>
                    </li>
                </ul>
                <ul class="nav custom-nav" id="menu_tools_writer">
                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="/{{ $local }}">Home</a>
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
            Switch to
            <button class="btn btn-custom-login ml-3" id="toggle_button_webmaster"><b>SEO Tools for Webmaster</b></button>
            <button class="btn btn-custom-login ml-3 d-none" id="toggle_button_writer"><b>SEO Tools for Writers</b></button>
        </div>
    </div>
</div>
