<div class="aside aside-left d-flex flex-column" id="kt_aside">
    <!--begin::Brand-->
    <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-4 py-lg-8">
        <!--begin::Logo-->
        <a href="/">
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
                data-boundary="window" title="Mobile Friendly Test">
                <a href="/{{$local}}/mobile-test"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('mobile-test')">
                  <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-29-055858/theme/html/demo4/dist/../src/media/svg/icons/Devices/Tablet.svg--><svg
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                          height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path
                                d="M6.5,4 L6.5,20 L17.5,20 L17.5,4 L6.5,4 Z M7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,20 C19,21.1045695 18.1045695,22 17,22 L7,22 C5.8954305,22 5,21.1045695 5,20 L5,4 C5,2.8954305 5.8954305,2 7,2 Z"
                                fill="#000000" fill-rule="nonzero"/>
                            <polygon fill="#000000" opacity="0.3" points="6.5 4 6.5 20 17.5 20 17.5 4"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Sitemap Generator">
                <a href="/{{$local}}/sitemap-generator"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('sitemap')">
                  <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-29-055858/theme/html/demo4/dist/../src/media/svg/icons/Code/Code.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                           height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1"
                               fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24"
                                      height="24"></rect>
                                <path
                                    d="M15.2718029,8.68536757 C14.8932864,8.28319382 14.9124644,7.65031935 15.3146382,7.27180288 C15.7168119,6.89328641 16.3496864,6.91246442 16.7282029,7.31463817 L20.7282029,11.5646382 C21.0906029,11.9496882 21.0906029,12.5503176 20.7282029,12.9353676 L16.7282029,17.1853676 C16.3496864,17.5875413 15.7168119,17.6067193 15.3146382,17.2282029 C14.9124644,16.8496864 14.8932864,16.2168119 15.2718029,15.8146382 L18.6267538,12.2500029 L15.2718029,8.68536757 Z M8.72819712,8.6853647 L5.37324625,12.25 L8.72819712,15.8146353 C9.10671359,16.2168091 9.08753558,16.8496835 8.68536183,17.2282 C8.28318808,17.6067165 7.65031361,17.5875384 7.27179713,17.1853647 L3.27179713,12.9353647 C2.90939712,12.5503147 2.90939712,11.9496853 3.27179713,11.5646353 L7.27179713,7.3146353 C7.65031361,6.91246155 8.28318808,6.89328354 8.68536183,7.27180001 C9.08753558,7.65031648 9.10671359,8.28319095 8.72819712,8.6853647 Z"
                                    fill="#000000"
                                    fill-rule="nonzero"></path>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Page Speed">
                <a href="/{{$local}}/page-speed"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('page-speed')">
                    <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo4/dist/../src/media/svg/icons/Devices/Diagnostics.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="18" rx="2"/>
                            <path
                                d="M9.9486833,13.3162278 C9.81256925,13.7245699 9.43043041,14 9,14 L5,14 C4.44771525,14 4,13.5522847 4,13 C4,12.4477153 4.44771525,12 5,12 L8.27924078,12 L10.0513167,6.68377223 C10.367686,5.73466443 11.7274983,5.78688777 11.9701425,6.75746437 L13.8145063,14.1349195 L14.6055728,12.5527864 C14.7749648,12.2140024 15.1212279,12 15.5,12 L19,12 C19.5522847,12 20,12.4477153 20,13 C20,13.5522847 19.5522847,14 19,14 L16.118034,14 L14.3944272,17.4472136 C13.9792313,18.2776054 12.7550291,18.143222 12.5298575,17.2425356 L10.8627389,10.5740611 L9.9486833,13.3162278 Z"
                                fill="#000000" fill-rule="nonzero"/>
                            <circle fill="#000000" opacity="0.3" cx="19" cy="6" r="1"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="JSON-LD Schema Generator">
                <a href="/{{$local}}/json-ld-faq-schema-generator"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('json-ld')">
                    <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo4/dist/../src/media/svg/icons/Code/Code.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path
                                d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z"
                                fill="#000000" fill-rule="nonzero"/>
                            <rect fill="#000000" opacity="0.3"
                                  transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) "
                                  x="11" y="4" width="2" height="16" rx="1"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Title & Lengths Checker">
                <a href="/{{$local}}/page-title-meta-description-checker"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('title-checker')">
                    <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo4/dist/../src/media/svg/icons/Text/Text-width.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path
                                d="M13.5,4 L13.5,14 C13.5,14.5522847 13.0522847,15 12.5,15 L11.5,15 C10.9477153,15 10.5,14.5522847 10.5,14 L10.5,4 L7,4 C6.44771525,4 6,3.55228475 6,3 L6,2 C6,1.44771525 6.44771525,1 7,1 L17,1 C17.5522847,1 18,1.44771525 18,2 L18,3 C18,3.55228475 17.5522847,4 17,4 L13.5,4 Z"
                                fill="#000000" opacity="0.3"/>
                            <path
                                d="M6.41421356,20 L7.70710678,21.2928932 C8.09763107,21.6834175 8.09763107,22.3165825 7.70710678,22.7071068 C7.31658249,23.0976311 6.68341751,23.0976311 6.29289322,22.7071068 L3.29289322,19.7071068 C2.90236893,19.3165825 2.90236893,18.6834175 3.29289322,18.2928932 L6.29289322,15.2928932 C6.68341751,14.9023689 7.31658249,14.9023689 7.70710678,15.2928932 C8.09763107,15.6834175 8.09763107,16.3165825 7.70710678,16.7071068 L6.41421356,18 L17.5857864,18 L16.2928932,16.7071068 C15.9023689,16.3165825 15.9023689,15.6834175 16.2928932,15.2928932 C16.6834175,14.9023689 17.3165825,14.9023689 17.7071068,15.2928932 L20.7071068,18.2928932 C21.0976311,18.6834175 21.0976311,19.3165825 20.7071068,19.7071068 L17.7071068,22.7071068 C17.3165825,23.0976311 16.6834175,23.0976311 16.2928932,22.7071068 C15.9023689,22.3165825 15.9023689,21.6834175 16.2928932,21.2928932 L17.5857864,20 L6.41421356,20 Z"
                                fill="#000000"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body"
                data-boundary="window" title="Word Counter">
                <a href="/{{$local}}/word-counter"
                   class="nav-link btn btn-icon btn-clean btn-text-white btn-lg @yield('word-counter')">
                    <span class="svg-icon svg-icon-light svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-07-07-181510/theme/html/demo4/dist/../src/media/svg/icons/Shopping/Calculator.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="7" y="4" width="10" height="4"/>
                            <path
                                d="M7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,20 C19,21.1045695 18.1045695,22 17,22 L7,22 C5.8954305,22 5,21.1045695 5,20 L5,4 C5,2.8954305 5.8954305,2 7,2 Z M8,12 C8.55228475,12 9,11.5522847 9,11 C9,10.4477153 8.55228475,10 8,10 C7.44771525,10 7,10.4477153 7,11 C7,11.5522847 7.44771525,12 8,12 Z M8,16 C8.55228475,16 9,15.5522847 9,15 C9,14.4477153 8.55228475,14 8,14 C7.44771525,14 7,14.4477153 7,15 C7,15.5522847 7.44771525,16 8,16 Z M12,12 C12.5522847,12 13,11.5522847 13,11 C13,10.4477153 12.5522847,10 12,10 C11.4477153,10 11,10.4477153 11,11 C11,11.5522847 11.4477153,12 12,12 Z M12,16 C12.5522847,16 13,15.5522847 13,15 C13,14.4477153 12.5522847,14 12,14 C11.4477153,14 11,14.4477153 11,15 C11,15.5522847 11.4477153,16 12,16 Z M16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 C15.4477153,10 15,10.4477153 15,11 C15,11.5522847 15.4477153,12 16,12 Z M16,16 C16.5522847,16 17,15.5522847 17,15 C17,14.4477153 16.5522847,14 16,14 C15.4477153,14 15,14.4477153 15,15 C15,15.5522847 15.4477153,16 16,16 Z M16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 C15.4477153,18 15,18.4477153 15,19 C15,19.5522847 15.4477153,20 16,20 Z M8,18 C7.44771525,18 7,18.4477153 7,19 C7,19.5522847 7.44771525,20 8,20 L12,20 C12.5522847,20 13,19.5522847 13,19 C13,18.4477153 12.5522847,18 12,18 L8,18 Z M7,4 L7,8 L17,8 L17,4 L7,4 Z"
                                fill="#000000"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </li>
            <!--end::Item-->
        </ul>
        <!--end::Nav-->
    </div>
    <!--end::Nav Wrapper-->
</div>
