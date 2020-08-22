<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto bg-white" id="kt_aside">
  <!--begin::Brand-->
  <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
    <!--begin::Logo-->
    <a href="/{{$local}}">
      <img alt="Logo" src="{{asset('media/logos/logo-letter-9.png')}}" class="max-h-30px" />
    </a>
    <!--end::Logo-->
  </div>
  <!--end::Brand-->
  <!--begin::Nav Wrapper-->
  <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
    <!--begin::Nav-->
    <ul class="nav flex-column">
      <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Overview">
        <a href="/{{$local}}" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('home')">
          <span class="svg-icon svg-icon-2x">
            <!--begin::Svg Icon-->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24" />
                <path d="M3,5v3v6v3v2c0,2.201,1.794,3,3,3h15v-2H6.012C5.55,19.988,5,19.806,5,19s0.55-0.988,1.012-1H19h1h1v-1v-2V4 c0-1.103-0.897-2-2-2H6C4.794,2,3,2.799,3,5z" fill="#B2B2B2" />
              </g>
            </svg>
            <!--end::Svg Icon-->
          </span>
        </a>
      </li>
      <ul class="nav flex-column">
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Word Counter">
          <a href="/{{$local}}/word-counter" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('word-counter')">
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M6,22h12c1.104,0,2-0.896,2-2V4c0-1.104-0.896-2-2-2H6C4.896,2,4,2.896,4,4v16C4,21.104,4.896,22,6,22z M9,19H7v-2h2V19z M9,15H7v-2h2V15z M9,11H7V9h2V11z M13,19h-2v-2h2V19z M13,15h-2v-2h2V15z M13,11h-2V9h2V11z M17,19h-2v-6h2V19z M17,11h-2V9h2V11z M6,4h12v3H6V4z"
                    fill="#B2B2B2" />
                </g>
              </svg>
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Title & Lengths Checker">
          <a href="/{{$local}}/page-title-meta-description-checker" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('title-checker')">
            <span class="svg-icon svg-icon-2x">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M5 8L7 8 7 6 10.252 6 7.68 18 5 18 5 20 13 20 13 18 10.748 18 13.32 6 17 6 17 8 19 8 19 4 5 4z" fill="#B2B2B2" />
                </g>
              </svg>
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="JSON-LD Schema Generator">
          <a href="/{{$local}}/json-ld-faq-schema-generator" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('json-ld')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M8.293 6.293L2.586 12 8.293 17.707 9.707 16.293 5.414 12 9.707 7.707zM15.707 17.707L21.414 12 15.707 6.293 14.293 7.707 18.586 12 14.293 16.293z" fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Page Speed">
          <a href="/{{$local}}/page-speed" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('page-speed')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M20.145,8.27l1.563-1.563l-1.414-1.414L18.586,7c-1.05-0.63-2.274-1-3.586-1c-3.859,0-7,3.14-7,7s3.141,7,7,7s7-3.14,7-7 C22,11.175,21.292,9.517,20.145,8.27z M15,18c-2.757,0-5-2.243-5-5s2.243-5,5-5s5,2.243,5,5S17.757,18,15,18z"
                    fill="#B2B2B2" />
                  <path d="M14 10H16V14H14zM13 3H17V5H13zM3 8H7V10H3zM3 16H7V18H3zM2 12H5.99V14H2z" fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Sitemap Generator">
          <a href="/{{$local}}/sitemap-generator" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('sitemap')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M20,3H4C2.897,3,2,3.897,2,5v14c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V5C22,3.897,21.103,3,20,3z M4,19V7h16 l0.002,12H4z" fill="#B2B2B2" />
                  <path d="M9.293 9.293L5.586 13 9.293 16.707 10.707 15.293 8.414 13 10.707 10.707zM14.707 9.293L13.293 10.707 15.586 13 13.293 15.293 14.707 16.707 18.414 13z" fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Mobile Friendly Test">
          <a href="/{{$local}}/mobile-test" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('mobile-test')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path d="M18,22c1.103,0,2-0.897,2-2V4c0-1.103-0.897-2-2-2H8C6.897,2,6,2.897,6,4v16c0,1.103,0.897,2,2,2H18z M13,17 c0.553,0,1,0.447,1,1s-0.447,1-1,1s-1-0.447-1-1S12.447,17,13,17z" fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon--></span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="SSL Checker">
          <a href="/{{$local}}/ssl-checker" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('ssl-checker')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M11.488,21.754c0.294,0.157,0.663,0.156,0.957-0.001c8.012-4.304,8.581-12.713,8.574-15.104 c-0.001-0.394-0.235-0.744-0.596-0.903L12.373,2.18c-0.259-0.114-0.554-0.114-0.813,0.001L3.566,5.747 C3.211,5.906,2.979,6.25,2.974,6.639C2.94,9.018,3.419,17.445,11.488,21.754z M8.674,10.293l2.293,2.293l4.293-4.293l1.414,1.414 l-5.707,5.707L7.26,11.707L8.674,10.293z"
                    fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </a>
        </li>
        <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Robots.txt Generator">
          <a href="/{{$local}}/robotstxt-generator" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('robotstxt-generator')">
            <span class="svg-icon svg-icon-light svg-icon-2x">
              <!--begin::Svg Icon-->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24" />
                  <path
                    d="M19,6H5C3.346,6,2,7.346,2,9v5c0,2.206,1.794,4,4,4h1.637c1.166,0,2.28-0.557,2.981-1.491 c0.66-0.879,2.104-0.88,2.764,0.001c0.701,0.934,1.815,1.49,2.981,1.49H18c2.206,0,4-1.794,4-4V9C22,7.346,20.654,6,19,6z M7.5,13 C6.119,13,5,12.328,5,11.5S6.119,10,7.5,10s2.5,0.672,2.5,1.5S8.881,13,7.5,13z M16.5,13c-1.381,0-2.5-0.672-2.5-1.5 s1.119-1.5,2.5-1.5s2.5,0.672,2.5,1.5S17.881,13,16.5,13z"
                    fill="#B2B2B2" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>
          </a>
        </li>
      </ul>
      <!--end::Nav-->
  </div>
  <!--end::Nav Wrapper-->
</div>
@push('style')
<style media="screen">
  .btn.btn-clean .svg-icon svg g [fill]:hover {
    fill: #0095EB;
  }
</style>
@endpush
