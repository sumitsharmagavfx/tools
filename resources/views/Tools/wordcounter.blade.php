@extends('layouts.app')

@section('title')
    WORD COUNTER
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <!--begin::Card-->
            <div class="card card-custom card-stretch-half gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">WORD COUNTER <small>TINGKATKAN SKILL MENULIS</small></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md" align="center">
                            <h6>KARAKTER</h6>
                            <h1 id="characterCount">99999</h1>
                        </div>
                        <div class="col-md" align="center">
                            <h6>KATA</h6>
                            <h1 id="wordCount">99999</h1>
                        </div>
                        <div class="col-md" align="center">
                            <h6>KALIMAT</h6>
                            <h1 id="sentenceCount">99999</h1>
                        </div>
                        <div class="col-md" align="center">
                            <h6>PARAGRAF</h6>
                            <h1 id="paragraphCount">99999</h1>
                        </div>
                        <div class="col-md" align="center">
                            <h6>WAKTU BACA</h6>
                            <h1 id="readingTime">99999</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea name="name" rows="15" class="form-control" id="textarea"></textarea>
                    </div>
                </div>
            </div>
            <!--end::Card-->

            <!--begin::Card-->
            <div class="card card-custom card-stretch-half">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Tentang Word Counter</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p>  Sebagai content writer dan copywirter, menulis konten artikel menjadi aktifitas sehari-hari. Secara umum, penulis dituntut membuat sebuah konten dengan jumlah kata atau kalimat tertentu. Sehingga jumlah kata menjadi sangat penting. Maka CMLABS Word Countet adalah tool tepat untuk membantu pekerjaan penulis konten. </p>
                    <p>Tujuan utama cmlabs adalah menjadi bagian dari aktifitas komunitas penulis konten, khususnya di Indonesia. Namun untuk membuat Tools ini bisa diakses lebih banyak content writer, kami telah berikan dukungan dua bahasa untuk Tools Content Writer ini, yakni versi Indonesia dan English.</p>
                </div>
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Fase umum menulis konten</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p>  Lalu apa saja fase-fase menulis konten? Berikut merupakan tujuh fase dalam membuat konten yang paling umum. Dengan catatan, fase dalam membuat konten akan disesuaikan dengan tujuan dan proyek/kontrak dibalik adanya pekerjaan konten.</p>
                    <ol>
                        <li>Riset keyword,</li>
                        <li>Menemukan informasi untuk bahan konten,</li>
                        <li>Mendapatkan saran dari kompetisi di search engine,</li>
                        <li>Membuat outline,</li>
                        <li>Mulai menulis,</li>
                        <li>Melakukan revisi dan tambahan yang dibutuhkan, hingga</li>
                        <li>Merilis konten.</li>
                    </ol>
                    <h5> SPESIFIKASI "COUNTER"</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">Karakter</th>
                            <td>:Jumlah “character” dari semua tulisan anda di dalam kolom (termasuk SPASI di dalam sebuah kalimat dan tanda baca)</td>
                        </tr>
                        <tr>
                            <th scope="row">Kata</th>
                            <td>: Jumlah “word” dari tulisan anda dan semua kelompok karakter di dalam kolom</td>
                        </tr>
                        <tr>
                            <th scope="row">Kalimat</th>
                            <td>: Jumlah “kalimat” dari tulisan anda di dalam kolom.</td>
                        </tr>
                        <tr>
                            <th scope="row">Paragraf</th>
                            <td>: Jumlah “paragraf” atau kelompok kalimat dari tulisan anda di dalam kolom.</td>
                        </tr>
                        <tr>
                            <th scope="row">Waktu Baca</th>
                            <td>: Merupakan waktu keterbacaan tulisan anda berdasarkan hitungan.</td>
                        </tr>
                        </tbody>
                    </table>
                    <h5> KEPADATAN KEYWORD</h5>
                    <p>Kepadatan Keyword (dalam versi EN: <b>Keyword Density</b>) merupakan ukuran dan persentase kata yang digunakan oleh Content Writer, Copywriter dan SEO Specialist untuk menjaga kepadatan kata tertentu di dalam sebuah artikel.</p>
                    <p>Menjaga Keyword Density menjadi sangat penting dan merupakan salah satu algoritmas mesin telusur mengukur Spam Rate dari sebuah konten.</p>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">1 KATA</th>
                            <td>merupakan persentase kata tertentu, yang diurutkan secara descending.</td>
                        </tr>
                        <tr>
                            <th scope="row">2 KATA</th>
                            <td>merupakan persentase dari dua kata tertentu, yang diurutkan secara descending.</td>
                        </tr>
                        <tr>
                            <th scope="row">3 KATA</th>
                            <td>merupakan persentase dari tiga kata tertentu, yang diurutkan secara descending.</td>
                        </tr>
                        <tr>
                            <th scope="row">4 KATA</th>
                            <td>merupakan persentase dari empat kata tertentu, yang diurutkan secara descending.</td>
                        </tr>
                        <tr>
                            <th scope="row">5 KATA</th>
                            <td>merupakan persentase dari lima kata tertentu, yang diurutkan secara descending.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Tool ini relevan untuk?</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p>Perlu diketahui jika tipe konten itu cukup banyak. Pada akhirnya pekerjan seorang penulis itu akan rumit jika dihadapkan ke kasus-kasus yang dihadapi. Lalu Tools ini tepat untuk siapa saja?</p>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                          <div class="container p-10"style="background-color:#53F9AD">
                            <h3>CONTENT WRITER</h3>
                            <p>Word Counter akan membantu aktifitas menulis konten artikel dan melakukan penghitungan kata, kalimat dan waktu baca dengan akurat.</p>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5" >
                          <div class="container p-10" style="background-color:#53F9AD; height:100%">
                            <h3>COPYWRITER</h3>
                            <p>Popularitas copywriter semakin tinggi dan membuat pekerjaan ini dibutuhkan enterprise. Maka Word Counter akan sangat dibutuhkan.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-lg-4">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">KEYWORD DENSITY</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                                    1 KATA
                                </div>
                            </div>
                            <div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
                                <div class="card-body" id="topKeywords">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
                                    2 KATA
                                </div>
                            </div>
                            <div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
                                <div class="card-body" id="top2">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
                                    3 KATA
                                </div>
                            </div>
                            <div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
                                <div class="card-body" id="top3">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour1">
                                    4 KATA
                                </div>
                            </div>
                            <div id="collapseFour1" class="collapse" data-parent="#accordionExample1">
                                <div class="card-body" id="top4">

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive1">
                                    5 KATA
                                </div>
                            </div>
                            <div id="collapseFive1" class="collapse" data-parent="#accordionExample1">
                                <div class="card-body" id="top5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Card-->
    </div>
@endsection
@push('script')
    <script src="{{asset('js/logic/word-counter.js')}}"></script>
@endpush

@section('word-counter')
    active
@endsection
