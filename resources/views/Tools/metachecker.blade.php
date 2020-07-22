@extends('layouts.app')

@section('title')
    | TITLE & META DESCRIPTION CHECKER
@endsection

@section('meta-desc')
    {{--Isi Desc disini--}}
@endsection

@section('meta-keyword')
    {{--Isi Keyword disini--}}
@endsection

@section('content')
    @push('style')
        <style media="screen">
            @media only screen and (max-width: 768px) {
                #desktop {
                    display: none;
                }

                #mobile {
                    width: 100%;
                }
            }
        </style>
    @endpush
    <div class="card card-custom mb-5" id="kt_page_stretched_card">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">@lang('metachecker.title')</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 mb-5" id="mobile">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <div class="card-header justify-content-center">
                    <div class="card-title">
                        <i class="fas fa-mobile-alt icon-3x"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 p-5" style="background-color:white; border:1px solid #EEF0F8; height:100%;">
                        <span id="resulturlmobile">https://cmlabs.co</span><br>
                        <span id="resulttitlemobile">CMLABS / Content Marketing Labs Indonesia</span> <br>
                        <span id="resultdescmobile">@lang('metachecker.desc-result')</span>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-lg-7 mb-5" id="desktop">
            <!--begin::Card-->
            <div class="card card-custom card-stretch">
                <div class="card-header justify-content-center">
                    <div class="card-title">
                        <i class="fas fa-laptop icon-3x"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12 p-5" style="background-color:white; border:1px solid #EEF0F8; height:100%;">
                        <span id="resulttitle">CMLABS / Content Marketing Labs Indonesia</span><br>
                        <span id="resulturl">https://cmlabs.co</span> <br>
                        <span id="resultdesc">@lang('metachecker.desc-result')</span>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    <div class="card card-custom mb-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">URL's <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input type="text" name="" class="form-control" value="https://cmlabs.co" id="url">
            <button type="button" class="btn btn-primary mt-5" name="button" id="execute">Get Title & Meta Desc.
                from URL's?
            </button>
            <br> <br>
            <a onclick="copy('url')" style="cursor:pointer;"> <small>@lang('metachecker.copy')</small> </a> <br>
            <small id="urlcheck">eg. https://cmlabs.co/en/</small>
        </div>
    </div>

    <div class="card card-custom mb-5 mt-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">@lang('metachecker.page-title') <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input id="title" type="text" name="" class="form-control"
                   value="CMLABS / Content Marketing Labs Indonesia"> <br>
            <a onclick="copy('title')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small> </a> <br>
            <small id="titlecount"></small>
        </div>
    </div>

    <div class="card card-custom mb-5 mt-5">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">META DESCRIPTION <small></small></h3>
            </div>
        </div>
        <div class="card-body">
            <input id="desc" type="text" name="" class="form-control"
                   value="@lang('metachecker.desc-result')"><br>
            <a onclick="copy('desc')" style="cursor: pointer"> <small>@lang('metachecker.copy')</small> </a> <br>
            <small id="desccount"></small>
        </div>
    </div>

    <div class="card card-custom gutte-b">
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">Mengapa anda butuh tools ini?</h3>
        </div>
      </div>
      <div class="card-body">
        <p><a href="https://cmlabs.co/kamus-seo/apa-itu-serp/" style="color:blue" class="font-weight-bold">SERP</a>, singkatan dari <i class="font-weight-bold" style="color:black; font-size:1rem">Search Engine Results Page</i> menjadi medium penting dari hasil aktifitas SEO (Search Engine Optimization). Pekerjaan ini menuntut perhatian khusus dari setiap pelaku marketers, dari junior hingga level senior. Tiga atribut paling penting untuk SERP adalah <b>URL</b>, <b>Page Title</b>, dan <b>Meta Description</b>.</p>
        <table class="table" border="1px" bordercolor="#EBEDF3" >
          <tbody>
            <tr>
              <th class="align-middle" style="text-align:center"> <i class="far fa-lightbulb icon-2x"></i> </th>
              <td class="align-middle"> <p class="font-weight-bold">Mengapa 3 atribut ini penting?</p> <p>Jawaban yang paling sederhana adalah, karena mereka muncul di SERP seperti Google, Bing, dan Yahoo. Sehingga 3 atribut tersebut akan dilihat oleh users. Tentu saja dari hasil crawl dan indexing dari bot mesin telusur. Mari bahas lebih mendalam pada paragraf-paragraf berikutnya.</p> <p>Penting juga diketahui, jika mesin telusur adalah salah satu marketing channel dengan biaya paling murah dan memiliki akurasi lebih baik, karena skema demand dan supply yang terjadi di dalam penyajiannya.</p> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">URL</h3>
        </div>
      </div>
      <div class="card-body">
        <p><b>URL</b> merupakan perwakilan merek/website anda. Sehingga umur domain dan popularitasnya menjadi penting. Misalnya: ketika merek cmlabs telah sering muncul di SERP Google, Bing, Yahoo, maka dengan sendirinya pembaca akan memberikan kepercayaan lebih tinggi, sehingga kedepannya berpotensi di klik lebih dulu. Begitupun dengan crawler atau bot. Semakin banyak keyword yang berhasil di tangkap domain tertentu, maka domain-authority website akan lebih tinggi dan terus direkomendasikan search engine untuk menjawan pertanyaan anda.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">PAGE TITLE</h3>
        </div>
      </div>
      <div class="card-body">
        <p><b>Page Title</b> merupakan salah satu pintu masuk ke website anda. Ketika judul itu menarik untuk di klik, dan cukup informatif menjawab secara singkat pertanyaan pengguna, maka website anda akan berpotensi di klik. Optimasi berkelanjutan dan konsisten akan mempengaruhi satu metrix penting di SEO, yaitu Click-Through Rate. Lebih dari itu, mesin telusur juga akan mengerti jika website anda relevan untuk menjawab pertanyaan tertentu, sehingga mesin telusur akan menampilkan artikel anda kepada pengguna lainnya yang menanyakan pertanyaan berkaitan.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">META DESCRIPTION</h3>
        </div>
      </div>
      <div class="card-body">
        <p><b>Meta Description</b> merupakan cara mesin relusur menberikan bagian konten yang terbatas, agar websmater memberikan pengantar konten atas pertanyaan pengguna yang ditampilkan di SERP. Pada tips yang paling sederhana dan umum diketahui, keyword tertentu dianggap penting untuk dicantumkan di meta-description ini, sehingga bot akan memahami keseluruhan konten dan target keyword anda dengan lebih baik dan lebih mudah. Tentu saja, harus diikuti dengan kualitas konten dan relevansi keyword yang anda targetkan. Strategi yang tidak mengikuti <a href="https://cmlabs.co/panduan-seo/" style="color:blue"><u>pedoman mesin telusur</u></a> akan berakibat pinalti dari crawler.</p>
      </div>
      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">CONTOH DAN SIMULASI</h3>
        </div>
      </div>
      <div class="card-body">
        <center>
        <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/serp-google-cmlabs-1024x820.png" width="100%" alt="">
        </div>
        </center>

        <p>Untuk memudahkan anda memahami Gambar (diatas), kami sudah membuat informasi yang dibutuhkan tepat dibawah bagian konten ini. Silahkan pelajari spesifikasi yang kami tentukan di dalam Tool dan Tip SEO yang dapat anda terapkan untuk optimasi website.</p>

        <h5>KOTAK ORANGE</h5>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row" width="10%">Atribut:</th>
                <td>Page Title / Title Tag</td>
            </tr>
            <tr>
                <th scope="row">Contoh:</th>
                <td>Temukan Peluang Karir di CMLABS Indonesia</td>
            </tr>
            </tbody>
        </table>

        <h5>KOTAK HIJAU</h5>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row" width="10%">Atribut:</th>
                <td>Page Title / Title Tag</td>
            </tr>
            <tr>
                <th scope="row">Contoh:</th>
                <td>Temukan Peluang Karir di CMLABS Indonesia</td>
            </tr>
            <tr>
                <th scope="row">Tip SEO:</th>
                <td>Page title muncul di SERP, sehingga penting untuk diperhatikan, misalnya panjang dan informasi yang akan disampaikan.</td>
            </tr>
            <tr>
                <th scope="row">*Pixel</th>
                <td>Minimal 250 pixel dan Maksimal: 470 pixel.</td>
            </tr>
            <tr>
                <th scope="row">*Katakter</th>
                <td>Minimal 30 karakter dan Maksimal 55 karakter.</td>
            </tr>
            </tbody>
        </table>

        <h5>KOTAK BIRU</h5>
        <table class="table">
            <tbody>
            <tr>
                <th scope="row" width="10%">Atribut:</th>
                <td>Meta Description</td>
            </tr>
            <tr>
                <th scope="row">Contoh:</th>
                <td>Mari bergabung di salah satu perusahaan jasa yang fokus pada SEO untuk Enterprise. Saat ini kami beroperasi di Jakarta dan Kota Malang.</td>
            </tr>
            <tr>
                <th scope="row">Tip SEO:</th>
                <td>Meta Description muncul di SERP, sehingga penting untuk diperhatikan, misalnya panjang dan informasi yang akan disampaikan.</td>
            </tr>
            <tr>
                <th scope="row">*Pixel</th>
                <td>Minimal 400 pixel dan Maksimal: 750 pixel.</td>
            </tr>
            <tr>
                <th scope="row">*Katakter</th>
                <td>Minimal 65 karakter dan Maksimal 160 karakter.</td>
            </tr>
            </tbody>
        </table>
        <center>
        <div class="col-12 col-md-7">
            <img src="https://cmlabs.co/wp-content/uploads/2020/06/galaxy-note-10-cmlabs.png" width="100%" alt="">
        </div>
        </center>
      </div>

    </div>

    <br>
    <span id="titlesizer" class="pd-0"></span>
    <span id="titlesizertemp"></span>
    <span id="descsizer"></span>
    <span id="descsizertemp"></span>


@endsection

@push('script')
    <script src="{{asset('js/logic/metachecker.js')}}"></script>
@endpush
@section('title-checker')
    active
@endsection
