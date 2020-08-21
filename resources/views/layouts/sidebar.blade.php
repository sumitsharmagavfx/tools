<div class="aside aside-left d-flex flex-column bg-white" id="kt_aside">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
        <!--begin::Logo-->
        <a href="/{{$local}}">
            <img alt="Logo" src="{{asset('media/logos/logo-letter-9.png')}}" class="max-h-30px"/>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Nav Wrapper-->
    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
        <!--begin::Nav-->
        <ul class="nav flex-column">
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Overview">
                <a href="/{{$local}}"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('word-counter')">
                    <span class="svg-icon svg-icon-light svg-icon-2x">
                        <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 5V8V14V17V19C3 21.201 4.794 22 6 22H21V20H6.012C5.55 19.988 5 19.806 5 19C5 18.194 5.55 18.012 6.012 18H19H20H21V17V15V4C21 2.897 20.103 2 19 2H6C4.794 2 3 2.799 3 5Z" fill="#0095EB"/>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </a>
            </li>
        <ul class="nav flex-column">
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="Word Counter">
              <a href="/{{$local}}/word-counter"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('word-counter')">
                  <span class="svg-icon svg-icon-light svg-icon-2x">
                      <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 22H18C19.104 22 20 21.104 20 20V4C20 2.896 19.104 2 18 2H6C4.896 2 4 2.896 4 4V20C4 21.104 4.896 22 6 22ZM9 19H7V17H9V19ZM9 15H7V13H9V15ZM9 11H7V9H9V11ZM13 19H11V17H13V19ZM13 15H11V13H13V15ZM13 11H11V9H13V11ZM17 19H15V13H17V19ZM17 11H15V9H17V11ZM6 4H18V7H6V4Z" fill="#0095EB"/>
                        </svg>                        
                      <!--end::Svg Icon-->
                </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="Title & Lengths Checker">
              <a href="/{{$local}}/page-title-meta-description-checker"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('title-checker')">
                    <span class="svg-icon svg-icon-light svg-icon-2x">
                      <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 8H7V6H10.252L7.68 18H5V20H13V18H10.748L13.32 6H17V8H19V4H5V8Z" fill="#0095EB"/></g>
                        </svg>
                      <!--end::Svg Icon-->
                    </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="JSON-LD Schema Generator">
              <a href="/{{$local}}/json-ld-faq-schema-generator"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('json-ld')">
                <span class="svg-icon svg-icon-light svg-icon-2x">
                    <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.29306 6.29303L2.58606 12L8.29306 17.707L9.70706 16.293L5.41406 12L9.70706 7.70703L8.29306 6.29303ZM15.7071 17.707L21.4141 12L15.7071 6.29303L14.2931 7.70703L18.5861 12L14.2931 16.293L15.7071 17.707Z" fill="#0095EB"/>
                        </svg>
                    <!--end::Svg Icon-->
                </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="Page Speed">
              <a href="/{{$local}}/page-speed"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('page-speed')">
                <span class="svg-icon svg-icon-light svg-icon-2x">
                        <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 3H17V5H13V3ZM3 8H7V10H3V8ZM3 16H7V18H3V16ZM2 12H5.99V14H2V12ZM21.707 6.707L20.293 5.293L18.586 7C17.536 6.369 16.312 6 15 6C11.141 6 8 9.141 8 13C8 16.859 11.141 20 15 20C18.859 20 22 16.859 22 13C22 11.176 21.292 9.517 20.145 8.27L21.707 6.707ZM16 14H14V8.958H16V14Z" fill="#0095EB"/>
                        </svg>
                        <!--end::Svg Icon-->
                </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="Sitemap Generator">
              <a href="/{{$local}}/sitemap-generator"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('sitemap')">
                <span class="svg-icon svg-icon-light svg-icon-2x">
                    <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3H4C2.897 3 2 3.897 2 5V19C2 20.103 2.897 21 4 21H20C21.103 21 22 20.103 22 19V5C22 3.897 21.103 3 20 3ZM4 19V7H20L20.002 19H4Z" fill="#0095EB"/>
                            <path d="M9.29306 9.29303L5.58606 13L9.29306 16.707L10.7071 15.293L8.41406 13L10.7071 10.707L9.29306 9.29303ZM14.7071 9.29303L13.2931 10.707L15.5861 13L13.2931 15.293L14.7071 16.707L18.4141 13L14.7071 9.29303Z" fill="#0095EB"/>
                        </svg>
                    <!--end::Svg Icon-->
                </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="Mobile Friendly Test">
              <a href="/{{$local}}/mobile-test"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('mobile-test')">
                <span class="svg-icon svg-icon-light svg-icon-2x">
                    <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 22C19.103 22 20 21.103 20 20V4C20 2.897 19.103 2 18 2H8C6.897 2 6 2.897 6 4V20C6 21.103 6.897 22 8 22H18ZM13 17C13.553 17 14 17.447 14 18C14 18.553 13.553 19 13 19C12.447 19 12 18.553 12 18C12 17.447 12.447 17 13 17Z" fill="#0095EB"/>
                        </svg>
                    <!--end::Svg Icon--></span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
              data-boundary="window" title="SSL Checker">
              <a href="/{{$local}}/ssl-checker"
                 class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('ssl-checker')">
                <span class="svg-icon svg-icon-light svg-icon-2x">
                    <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.488 21.754C11.782 21.911 12.151 21.91 12.445 21.753C20.457 17.449 21.026 9.03998 21.019 6.64898C21.018 6.25498 20.784 5.90498 20.423 5.74598L12.373 2.17998C12.114 2.06598 11.819 2.06598 11.56 2.18098L3.56603 5.74698C3.21103 5.90598 2.97903 6.24998 2.97403 6.63898C2.94003 9.01798 3.41903 17.445 11.488 21.754ZM8.67403 10.293L10.967 12.586L15.26 8.29298L16.674 9.70698L10.967 15.414L7.26003 11.707L8.67403 10.293Z" fill="#0095EB"/>
                        </svg>
                    <!--end::Svg Icon-->
                </span>
              </a>
          </li>
          <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Robots.txt Generator">
                <a href="/{{$local}}/robotstxt-generator" class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('robotstxt-generator')">
                    <span class="svg-icon svg-icon-light svg-icon-2x">
                        <!--begin::Svg Icon-->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 6H5C3.346 6 2 7.346 2 9V14C2 16.206 3.794 18 6 18H7.637C8.803 18 9.917 17.443 10.618 16.509C11.278 15.63 12.722 15.629 13.382 16.51C14.083 17.444 15.197 18 16.363 18H18C20.206 18 22 16.206 22 14V9C22 7.346 20.654 6 19 6ZM7.5 13C6.119 13 5 12.328 5 11.5C5 10.672 6.119 10 7.5 10C8.881 10 10 10.672 10 11.5C10 12.328 8.881 13 7.5 13ZM16.5 13C15.119 13 14 12.328 14 11.5C14 10.672 15.119 10 16.5 10C17.881 10 19 10.672 19 11.5C19 12.328 17.881 13 16.5 13Z" fill="#0095EB"/>
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
