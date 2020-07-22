@extends('layouts.app')

@section('title')
    | PAGE SPEED
@endsection

@section('meta-desc')
    {{--Isi Desc disini--}}
@endsection

@section('meta-keyword')
    {{--Isi Keyword disini--}}
@endsection

@section('content')
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">PAGE SPEED <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10 mb-5">
                    <div id="spinner">
                        <input type="text" name="" class="form-control" value="" id="url" placeholder="Input Your URL">
                    </div>
                </div>
                <div class="col-lg-2 mb-5">
                    <button type="button" class="btn btn-success form-control" name="button" id="analysis-button">Analysis!</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-custom gutter-b">
        <div class="card-header p-5">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-12 col-sm-5 col-md-4 col-lg col-xl">
                          <a href="#result" id="nav-performance">
                            <div class="progress performance" data-percentage="0">
                				<span class="progress-left">
                					<span class="progress-bar progress-bar-performance"></span>
                				</span>
                                <span class="progress-right">
                					<span class="progress-bar progress-bar-performance"></span>
                				</span>
                                <div class="progress-value" style="width:100%">
                                    <div class="value-performance">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <h6 class="font-weight-bold text-center mb-4">PERFORMANCE</h6>
                            </a>
                        </div>



                        <div class="col-12 col-sm-5 col-md-4 col-lg col-xl">
                          <a href="#result" id="nav-accessibility">
                            <div class="progress accessibility" data-percentage="0">
                  				<span class="progress-left">
                  					<span class="progress-bar progress-bar-accessibility"></span>
                  				</span>
                                <span class="progress-right">
                  					<span class="progress-bar progress-bar-accessibility"></span>
                  				</span>
                                <div class="progress-value" style="width:100%">
                                    <div class="value-accessibility">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <h6 class=" font-weight-bold text-center mb-4">ACCESIBILITY</h6>
                            </a>
                        </div>



                        <div class="col-12 col-sm-5 col-md-4 col-lg col-xl">
                          <a href="#result" id="nav-best-practices">
                            <div class="progress best-practices" data-percentage="0">
                  				<span class="progress-left">
                  					<span class="progress-bar progress-bar-best-practices"></span>
                  				</span>
                                <span class="progress-right">
                  					<span class="progress-bar progress-bar-best-practices"></span>
                  				</span>
                                <div class="progress-value" style="width:100%">
                                    <div class="value-best-practices">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <h6 class=" font-weight-bold text-center mb-4">BEST PRACTICES</h6>
                            </a>
                        </div>



                        <div class="col-12 col-sm-5 col-md-4 col-lg col-xl">
                          <a href="#result" id="nav-seo">
                            <div class="progress seo" data-percentage="0">
                  				<span class="progress-left">
                  					<span class="progress-bar progress-bar-seo"></span>
                  				</span>
                                <span class="progress-right">
                  					<span class="progress-bar progress-bar-seo"></span>
                  				</span>
                                <div class="progress-value" style="width:100%">
                                    <div class="value-seo">
                                        0%
                                    </div>
                                </div>
                            </div>
                            <h6 class=" font-weight-bold text-center mb-4">SEO</h6>
                            </a>
                        </div>



                        <div class="col-12 col-sm-5 col-md-4 col-lg col-xl">
                          <a href="#result" id="nav-pwa">
                            <div class="progress pwa" data-percentage="0">
                  				<span class="progress-left">
                  					<span class="progress-bar progress-bar-pwa"></span>
                  				</span>
                                <span class="progress-right">
                  					<span class="progress-bar progress-bar-pwa"></span>
                  				</span>
                                <div class="progress-value" style="width:100%">
                                    <div class="value-pwa">
                                        0%
                                    </div>
                                </div>

                            </div>
                            <h6 class=" font-weight-bold text-center mb-4">PWA</h6>
                            </a>
                        </div>


                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="row justify-content-center mb-5">
                <table class="border border-secondary-5" >
                    <tbody id="result">
                    <tr>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #F64E60; text-align:center"></span>
                            0-49
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #FFA800; text-align:center"></span>
                            50-89
                        </td>
                        <td style="width:100px; text-align:right"><span class="mb-1 mr-3"
                                                                        style="display: inline-block; width:30%; border-top:4px solid #1BC5BD; text-align:center"></span>
                            90-100
                        </td>
                        <td style="width:20px"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--Performance--}}
    <div class="card card-custom gutter-b " id="performance">
        <div class="ribbon ribbon-top">
            <div class="ribbon-target" id="ribbon-performance" style="top: -2px; right: 20px;">PERFORMANCE</div>
        </div>
        <div class="card-body pt-25">
            <div class="col">
                <div class="progress performance" data-percentage="0">
                    <span class="progress-left">
                      <span class="progress-bar progress-bar-performance"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar progress-bar-performance"></span>
                    </span>
                    <div class="progress-value" style="width:100%">
                        <div class="value-performance">
                            0%
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow performance-audit" id="performance-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-performance-audit" id="pass-performance-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-performance-audit" id="not-app-performance-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-performance-audit" id="manual-performance-audit"></div>
            </div>
        </div>
    </div>

{{--accessibility--}}
    <div class="card card-custom gutter-b " id="accessibility" style="display:none">
        <div class="ribbon ribbon-top">
            <div class="ribbon-target" id="ribbon-accessibility" style="top: -2px; right: 20px;">ACCESSIBILITY</div>
        </div>
        <div class="card-body pt-25">
            <div class="col">
                <div class="progress accessibility" data-percentage="0">
                    <span class="progress-left">
                      <span class="progress-bar progress-bar-accessibility"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar progress-bar-accessibility"></span>
                    </span>
                    <div class="progress-value" style="width:100%">
                        <div class="value-accessibility">
                            0%
                        </div>
                    </div>
                </div>
                <!-- END -->
                <!-- <h6 class=" font-weight-bold text-center mb-4">ACCESIBILITY</h6> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow accessibility-audit" id="accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-accessibility-audit" id="pass-accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-accessibility-audit" id="not-app-accessibility-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-accessibility-audit" id="manual-accessibility-audit"></div>
            </div>
        </div>
    </div>

{{--best practice--}}
    <div class="card card-custom gutter-b " id="best-practices" style="display:none">
        <div class="ribbon ribbon-top">
            <div class="ribbon-target" id="ribbon-best-practices" style="top: -2px; right: 20px;">BEST PRACTICES</div>
        </div>
        <div class="card-body pt-25">
            <div class="col">
                <div class="progress best-practices" data-percentage="0">
                    <span class="progress-left">
                      <span class="progress-bar progress-bar-best-practices"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar progress-bar-best-practices"></span>
                    </span>
                    <div class="progress-value" style="width:100%">
                        <div class="value-best-practices">
                            60%
                        </div>
                    </div>
                </div>
                <!-- END -->
                <!-- <h6 class=" font-weight-bold text-center mb-4">BEST PRACTICES</h6> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow best-practices-audit" id="best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-best-practices-audit" id="pass-best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-best-practices-audit" id="not-app-best-practices-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-best-practices-audit" id="manual-best-practices-audit"></div>
            </div>
        </div>
    </div>

{{--seo--}}
    <div class="card card-custom gutter-b " id="seo" style="display:none">
        <div class="ribbon ribbon-top">
            <div class="ribbon-target" id="ribbon-seo" style="top: -2px; right: 20px;">SEO</div>
        </div>
        <div class="card-body pt-25">
            <div class="col">
                <div class="progress seo" data-percentage="0">
                    <span class="progress-left">
                      <span class="progress-bar progress-bar-seo"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar progress-bar-seo"></span>
                    </span>
                    <div class="progress-value" style="width:100%">
                        <div class="value-seo">
                            0%
                        </div>
                    </div>
                </div>
                <!-- END -->
                <!-- <h6 class=" font-weight-bold text-center mb-4">SEO</h6> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow seo-audit" id="seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-seo-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-seo-audit"></div>
            </div>
        </div>
    </div>

{{--pwa--}}
    <div class="card card-custom gutter-b " id="pwa" style="display:none">
        <div class="ribbon ribbon-top">
            <div class="ribbon-target" id="ribbon-pwa" style="top: -2px; right: 20px;">PWA</div>
        </div>
        <div class="card-body pt-25">
            <div class="col">
                <div class="progress pwa" data-percentage="0">
                    <span class="progress-left">
                      <span class="progress-bar progress-bar-pwa"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar progress-bar-pwa"></span>
                    </span>
                    <div class="progress-value" style="width:100%">
                        <div class="value-pwa">
                            0%
                        </div>
                    </div>
                </div>
                <!-- <h6 class=" font-weight-bold text-center mb-4">PWA</h6> -->
            </div>
            <div class="">
                <div class="accordion accordion-light accordion-toggle-arrow pwa-audit" id="pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow pass-pwa-audit" id="pass-pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow not-app-pwa-audit" id="not-app-pwa-audit"></div>
                <div class="accordion accordion-light accordion-toggle-arrow manual-pwa-audit" id="manual-pwa-audit"></div>
            </div>
        </div>
    </div>
    <div class="card card-custom gutter-b">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Tentang PageSpeed Tool</h3>
        </div>
      </div>
      <div class="card-body">
        <p>PageSpeed tool melaporkan kinerja halaman pada perangkat mobile dan desktop, dan memberikan saran tentang bagaimana halaman tersebut dapat ditingkatkan.</p>
        <p>PageSpeed tool menyediakan data lab dan lapangan tentang halaman web. Data lab ini berguna untuk debugging masalah kinerja, karena dikumpulkan di lingkungan yang terkendali. Namun, tool ini mungkin tidak menangkap permasalahan dunia nyata. Data lapangan berguna untuk menangkap pengalaman pengguna nyata yang sebenarnya, tetapi memiliki serangkaian metrik yang lebih terbatas. </p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Skor kinerja/performa</h3>
        </div>
      </div>
      <div class="card-body">
        <p>Di bagian atas laporan, PageSpeed tool memberikan skor yang merangkum kinerja halaman. Skor ini ditentukan dengan menjalankan Lighthouse untuk mengumpulkan dan menganalisis data lab tentang halaman. Skor 90 atau lebih dianggap baik. 50 hingga 90 adalah skor yang perlu ditingkatkan, dan di bawah 50 dianggap buruk.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Data Lapangan Real-time</h3>
        </div>
      </div>
      <div class="card-body">
        <p>Saat URL diinput di PageSpeed tool, tool ini akan mencarinya dalam set data Chrome User Experience Report (CrUX). Jika tersedia, PageSpeed melaporkan First Contentful Paint (FCP), First Input Delay (FID), Largest Contentful Paint (LCP), dan data metrik Cumulative Layout Shift (CLS) untuk URL asal dan halaman tertentu yang berpotensi.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Klasifikasi Baik, Perlu Perbaikan, dan Buruk</h3>
        </div>
      </div>
      <div class="card-body">
        <p>PageSpeed juga mengklasifikasikan data lapangan menjadi 3 ember, menggambarkan pengalaman yang dianggap baik, perlu diperbaiki, atau buruk. PageSpeed menetapkan ambang berikut untuk standar baik / butuh peningkatan / buruk, berdasarkan analisis kami terhadap dataset CrUX:</p>
        <table class="table">
            <tbody>
            <tr>
                <th scope="col"></th>
                <th scope="col">Bagus</th>
                <th scope="col">Butuh Peningkatan</th>
                <th scope="col">Buruk</th>
            </tr>
            <tr>
                <th scope="row">FCP</th>
                <td>[0, 1000ms]</td>
                <td>(1000ms, 3000ms)</td>
                <td>lebih dari 3000ms</td>
            </tr>
            <tr>
                <th scope="row">FID</th>
                <td>[0, 100ms]</td>
                <td>(100ms, 300ms)</td>
                <td>melebihi 300ms</td>
            </tr>
            <tr>
                <th scope="row">LCP</th>
                <td>[0, 2500ms]</td>
                <td>(2500ms, 4000ms)</td>
                <td>lebih dari 4000ms</td>
            </tr>
            <tr>
                <th scope="row">CLS</th>
                <td>[0, 0,1]</td>
                <td>(0,1, 0,25)</td>
                <td>lebih dari 0,25</td>
            </tr>
            </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Distribusi dan nilai metrik yang dipilih</h3>
        </div>
      </div>
      <div class="card-body">
        <p>PageSpeed menyajikan distribusi metrik ini sehingga developer dapat memahami rentang nilai FCP, FID, LCP, dan CLS untuk halaman tersebut. Distribusi ini juga dibagi menjadi tiga kategori: Baik, Butuh Peningkatan, dan Buruk, dilambangkan dengan warna hijau, oranye, dan merah. Sebagai contoh, melihat 14% berawrna oranye FCP menunjukkan bahwa 14% dari semua nilai FCP yang diamati berada di antara 1000ms dan 3000ms. Data ini mewakili tampilan agregat dari semua pemuatan halaman selama periode pengumpulan 28 hari sebelumnya.</p>
        <p>Di atas bilah distribusi, PageSpeed melaporkan persentil ke-75 untuk semua metrik. Persentil ke-75 dipilih agar developer dapat memahami pengalaman pengguna yang paling membuat frustrasi di situs mereka. Nilai-nilai metrik lapangan ini diklasifikasikan sebagai baik / butuh peningkatan / buruk dengan menerapkan ambang yang sama seperti yang ditunjukkan di atas.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Tentang PageSpeed Tool</h3>
        </div>
      </div>
      <div class="card-body">
        <p>PageSpeed tool melaporkan kinerja halaman pada perangkat mobile dan desktop, dan memberikan saran tentang bagaimana halaman tersebut dapat ditingkatkan.</p>
        <p>PageSpeed tool menyediakan data lab dan lapangan tentang halaman web. Data lab ini berguna untuk debugging masalah kinerja, karena dikumpulkan di lingkungan yang terkendali. Namun, tool ini mungkin tidak menangkap permasalahan dunia nyata. Data lapangan berguna untuk menangkap pengalaman pengguna nyata yang sebenarnya, tetapi memiliki serangkaian metrik yang lebih terbatas. </p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Core Web Vitals</h3>
        </div>
      </div>
      <div class="card-body">
        <p>Core Web Vitals adalah seperangkat sinyal umum yang penting untuk semua pengalaman web. Metrik Core Web Vitals adalah FID, LCP, dan CLS, dengan ambangnya masing-masing. Sebuah halaman melewati penilaian Core Web Vitals jika persentil ke-75 dari ketiga metrik baik. Jika tidak, halaman tersebut tidak lulus penilaian.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Perbedaan antara Data Lapangan dalam PageSpeed dan CrUX</h3>
        </div>
      </div>
      <div class="card-body">
        <p>Perbedaan antara data lapangan dalam PageSpeed versus Chrome User Experience Report di BigQuery, yaitu data PageSpeed diperbarui setiap hari untuk periode 28 hari berikutnya. Kumpulan data pada BigQuery hanya diperbarui setiap bulan.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Data lab</h3>
        </div>
      </div>
      <div class="card-body">
        <p>PageSpeed menggunakan Lighthouse untuk menganalisis URL yang diinput, menghasilkan skor kinerja yang memperkirakan kinerja halaman pada metrik yang berbeda, termasuk: First Contentful Paint, Largest Contentful Paint, Speed Index, Cumulative Layout Shift, Time to Interactive, dan Total Blocking Time.</p>
        <p>Setiap metrik diberi skor dan diberi label dengan ikon:</p>
        <ul>
          <li>Bagus ditandai dengan warna biru
              <div class="btn btn-icon btn-circle bg-success" style="height:15px; width:15px">
              </div>
          </li>
          <li>Butuh Peningkatan ditunjukkan dengan warna oranye
            <div class="btn btn-icon btn-circle bg-warning" style="height:15px; width:15px">
            </div>
          </li>
          <li>Buruk ditandai dengan warna merah
            <div class="btn btn-icon btn-circle bg-danger" style="height:15px; width:15px">
            </div>
          </li>
        </ul>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Audit</h3>
        </div>
      </div>
      <div class="card-body">
        <p>Lighthouse memisahkan auditnya menjadi tiga bagian:</p>
        <p>Peluang (opportunities) memberikan saran cara meningkatkan metrik kinerja halaman. Setiap saran di bagian ini memperkirakan seberapa cepat halaman akan dimuat jika perbaikan diterapkan.</p>
        <p>Diagnostik (diagnostics) memberikan informasi tambahan tentang bagaimana suatu halaman mematuhi praktik terbaik untuk pengembangan web.</p>
        <p>Audit Lulus (Passed Audits) menunjukkan audit yang telah dilewati oleh halaman.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Pertanyaan yang sering diajukan (FAQ)</h3>
        </div>
      </div>
      <div class="card-body">
        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
          <div class="card">
              <div class="card-header">
                  <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                      Perangkat dan kondisi jaringan apa yang digunakan Lighthouse untuk mensimulasikan pemuatan halaman?
                  </div>
              </div>
              <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                  <div class="card-body">
                      Saat ini, Lighthouse mensimulasikan pemuatan halaman pada perangkat tingkat menengah (Moto G4) pada jaringan seluler.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                      Mengapa data lapangan dan data lab terkadang saling bertentangan?
                  </div>
              </div>
              <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Data lapangan adalah laporan historis tentang kinerja URL tertentu, dan merupakan data kinerja anonim dari pengguna di dunia nyata pada berbagai perangkat dan kondisi jaringan. Data lab didasarkan pada beban simulasi halaman pada satu perangkat dan kondisi jaringan tetap. Akibatnya, nilainya mungkin berbeda.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                      Mengapa persentil ke-75 dipilih untuk semua metrik?
                  </div>
              </div>
              <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Tujuan kami adalah memastikan bahwa halaman berfungsi dengan baik untuk sebagian besar pengguna. Dengan berfokus pada nilai persentil ke-75 untuk metrik kami, hal ini memastikan bahwa halaman memberikan pengalaman pengguna yang baik di bawah kondisi perangkat dan jaringan yang paling sulit.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1">
                      Mengapa FID di v5 memiliki nilai yang berbeda?
                  </div>
              </div>
              <div id="collapseFour1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      FID melaporkan persentil ke-75 (per 27 Mei 2020), sebelumnya yang dilaporkan adalah persentil ke-95.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive1">
                      Apa skor yang baik untuk data lab?
                  </div>
              </div>
              <div id="collapseFive1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Skor hijau apa pun (90+) dianggap baik.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSix1">
                      Mengapa skor kinerja berubah padahal saya tidak mengubah apa pun di halaman saya?
                  </div>
              </div>
              <div id="collapseSix1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Variabilitas dalam pengukuran kinerja diperkenalkan melalui sejumlah saluran dengan berbagai tingkat dampak. Beberapa sumber umum variabilitas metrik adalah ketersediaan jaringan lokal, ketersediaan perangkat keras klien, dan pertentangan sumber daya klien.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseSeven1">
                      Mengapa data kecepatan Chrome User Experience Report real-time tidak tersedia?
                  </div>
              </div>
              <div id="collapseSeven1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Chrome User Experience Report mengumpulkan data kecepatan real-time dari pengguna yang ikut serta dan mensyaratkan bahwa URL harus bersifat publik (dapat dijelajahi dan diindeks) dan memiliki jumlah sampel berbeda yang memadai yang memberikan tampilan kinerja URL yang representatif dan dianonimkan.
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseEight1">
                      Mengapa data kecepatan Chrome User Experience Report real-time tidak tersedia untuk sumber asli?
                  </div>
              </div>
              <div id="collapseEight1" class="collapse" data-parent="#accordionExample1">
                  <div class="card-body">
                      Chrome User Experience Report mengumpulkan data kecepatan real-time dari pengguna yang ikut serta dan mensyaratkan bahwa halaman root asal harus bersifat publik (dapat dijelajahi dan diindeks) dan memiliki jumlah sampel berbeda yang cukup yang memberikan pandangan yang representatif, anonim tentang kinerja asal di semua URL asal.
                  </div>
              </div>
          </div>
      </div>
      </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{asset('css/pagespeed.css')}}">
@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.1/showdown.min.js"></script>
@endpush

@push('script')
    <script src="{{asset('js/logic/pagespeed.js')}}"></script>
@endpush

@section('home')
    active
@endsection
