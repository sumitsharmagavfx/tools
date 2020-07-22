@extends('layouts.app')

@section('title')
    | WORD COUNTER
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">@lang('wordcounter.title') <small>@lang('wordcounter.subtitle')</small></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>@lang('wordcounter.character')</h6>
                            <h1 id="characterCount">0</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>@lang('wordcounter.word')</h6>
                            <h1 id="wordCount">0</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>@lang('wordcounter.sentence')</h6>
                            <h1 id="sentenceCount">0</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>@lang('wordcounter.paragraph')</h6>
                            <h1 id="paragraphCount">0</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>@lang('wordcounter.reading-time')</h6>
                            <h1 id="readingTime">0</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea data-autoresize name="name" rows="15" style="resize:none; overflow:hidden" class="form-control" id="textarea"></textarea>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-lg-4">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">@lang('wordcounter.keyword-density')</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="accordion accordion-toggle-arrow" id="accordionExample1">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
                                    @lang('wordcounter.word-1')
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
                                    @lang('wordcounter.word-2')
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
                                    @lang('wordcounter.word-3')
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
                                    @lang('wordcounter.word-4')
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
                                    @lang('wordcounter.word-5')
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
        <div class="col-lg-12">
          <!--begin::Card-->
          <div class="card card-custom card-stretch-half">
              <div class="card-header">
                  <div class="card-title">
                      <h3 class="card-label">@lang('wordcounter.copy-title-1')</h3>
                  </div>
              </div>
              <div class="card-body">
                  <p>  @lang('wordcounter.copy-desc-1-1') </p>
                  <p>@lang('wordcounter.copy-desc-1-1')</p>
                  <img class="" width="100%" src="https://cmlabs.co/wp-content/uploads/2020/06/cmlabs-word-counter.jpg" alt="">
              </div>
              <div class="card-header">
                  <div class="card-title">
                      <h3 class="card-label">@lang('wordcounter.copy-title-2')</h3>
                  </div>
              </div>
              <div class="card-body">
                  <p>  @lang('wordcounter.copy-desc-2-1')</p>
                  <ol>
                      <li>@lang('wordcounter.copy-li-1')</li>
                      <li>@lang('wordcounter.copy-li-2')</li>
                      <li>@lang('wordcounter.copy-li-3')</li>
                      <li>@lang('wordcounter.copy-li-4')</li>
                      <li>@lang('wordcounter.copy-li-5')</li>
                      <li>@lang('wordcounter.copy-li-6')</li>
                      <li>@lang('wordcounter.copy-li-7')</li>
                  </ol>
                  <h5>@lang('wordcounter.copy-sub-title-2')</h5>
                  <table class="table">
                      <tbody>
                      <tr>
                          <th scope="row">{{ucfirst(strtolower(__('wordcounter.character')))}}</th>
                          <td>@lang('wordcounter.copy-desc-3-1')</td>
                      </tr>
                      <tr>
                          <th scope="row">{{ucfirst(strtolower(__('wordcounter.word')))}}</th>
                          <td>@lang('wordcounter.copy-desc-3-2')</td>
                      </tr>
                      <tr>
                          <th scope="row">{{ucfirst(strtolower(__('wordcounter.sentence')))}}</th>
                          <td>@lang('wordcounter.copy-desc-3-3')</td>
                      </tr>
                      <tr>
                          <th scope="row">{{ucfirst(strtolower(__('wordcounter.paragraph')))}}</th>
                          <td>@lang('wordcounter.copy-desc-3-4')</td>
                      </tr>
                      <tr>
                          <th scope="row">{{ucfirst(strtolower(__('reading-time')))}}</th>
                          <td>@lang('wordcounter.copy-desc-3-5')</td>
                      </tr>
                      </tbody>
                  </table>
                  <h5> @lang('wordcounter.copy-sub-title-3')</h5>
                  <p>@lang('wordcounter.copy-desc-4-1')</p>
                  <p>@lang('wordcounter.copy-desc-4-2')</p>
                  <table class="table">
                      <tbody>
                      <tr>
                          <th scope="row">@lang('wordcounter.word-1')</th>
                          <td>@lang('wordcounter.copy-td-1')</td>
                      </tr>
                      <tr>
                          <th scope="row">@lang('wordcounter.word-2')</th>
                          <td>@lang('wordcounter.copy-td-2')</td>
                      </tr>
                      <tr>
                          <th scope="row">@lang('wordcounter.word-3')</th>
                          <td>@lang('wordcounter.copy-td-3')</td>
                      </tr>
                      <tr>
                          <th scope="row">@lang('wordcounter.word-4')</th>
                          <td>@lang('wordcounter.copy-td-4')</td>
                      </tr>
                      <tr>
                          <th scope="row">@lang('wordcounter.word-5')</th>
                          <td>@lang('wordcounter.copy-td-5')</td>
                      </tr>
                      </tbody>
                  </table>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Apa Itu Keyword Density</h3>
                </div>
                <div class="card-body">
                  <p>Keyword density atau kepadatan istilah kunci adalah elemen optimasi kata kunci yg akan membantu Anda buat melihat berapa kali kata kunci target digunakan dalam page web tertentu.</p>
                  <p>Perhitungan ini akan memunculkan persentase dan frekuensi kata kunci target yang muncul dibandingkan jumlah relatif kata yang muncul di halaman. Keyword density digunakan mesin pencari untuk menentukan apakah kata kunci atau frasa tertentu relevan dengan konten.</p>
                  <div class="p-5" style="background-color: #F4F4F4">
                    <h5 class="font-weight-bold">“Keyword density adalah aspek SEO dalam penggunaan kata kunci yang menunjukkan pada berapa kali kata kunci target muncul dalam konten di halaman web.”</h5>
                  </div>
                </div>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Bagaimana Cara Menghitung Keyword Density Manual?</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Sangat mudah untuk belajar menghitung keyword density. Caranya yaitu menghitung berapa kali kata kunci sasaran muncul pada page web & membaginya menggunakan jumlah total istilah di page web tersebut. Berikut ini merupakan rumusnya:</p>
                <table class="table" border="1px" bordercolor="#EBEDF3" >
                  <tbody>
                    <tr>
                      <th class="align-middle" style="text-align:center"> <i class="far fa-lightbulb icon-2x"></i> </th>
                      <td class="align-middle"> <p>“Frekuensi kata kunci target muncul / Jumlah istilah pada halaman web = Keyword density”</p> </td>
                    </tr>
                  </tbody>
                </table>
                <p>Berikut adalah contoh cara mengukur keyword density secara manual</p>
                <p>Misalkan situs cmlabs.co telah menerbitkan halaman web untuk content marketing. Di sini halaman tersebut menargetkan kata “content marketing” yang digunakan sebagai kata kunci muncul 20 kali dan jumlah total kata pada halaman web tersebut adalah 1.000 kata.</p>
                <p>20 (Frekuensi kata “content marketing” yang muncul pada halaman) / 1.000 (Jumlah total kata pada halaman web) = 2% (Kepadatan Kata Kunci atau keyword density)</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Bagaimana Keyword Density Yang Ideal?</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Tidak ada aturan yang ditetapkan untuk berapa kali kita diizinkan untuk menampilkan kata kunci dalam suatu halaman. Mesin pencari belum menentukan persentase keyword density, jadi writer harus menggunakan kebijaksanaan dan praktik terbaik untuk bereksperimen.</p>
                <p>Beberapa ahli SEO percaya bahwa kepadatan kata kunci yang ideal harus sekitar 1-2%. Yang berarti bahwa kata kunci target hanya muncul sekali atau dua kali dalam setiap 100 kata. Artinya jika kita menggunakannya pada tingkat ini, mesin pencari akan mengetahui bahwa kata kunci muncul tanpa berlebihan (keyword stuffing).</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Apa Artinya Keyword Stuffing?</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Keyword Stuffing adalah penggunaan kata kunci target berulang-ulang sehingga halaman tersebut mendapatkan peringkat untuk target niche tertentu. Taktik black hat SEO pernah sempat populer. Meskipun taktik ini tidak digunakan secara luas hari ini, tetap saja para marketer harus menyadari keyword stuffing sehingga mereka tidak melakukan dengan sengaja.</p>
                <p>Jika kepadatan kata kunci atau keyword density sangat tinggi maka keyword stuffing akan terjadi. Banyak orang sebisa mungkin menghindari keyword stuffing karena bertentangan dengan pedoman Google dan itu dapat menyebabkan mesin pencari untuk memberikan penalti atau menghapus halaman tersebut dari SERP.</p>
                <p>keyword density yang sangat tinggi dapat memberikan ketidaknyamanan bagi pembaca. Konten SEO yang mudah dibaca dapat mendatangkan pengunjung berulang kali.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">4 Strategi Keyword Density Yang Baik Dan Benar</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Seperti yang kita ketahui tidak ada keyword density yang ideal yang dijelaskan oleh mesin pencari, tetapi tetap saja, harus tetap berpegang pada praktik optimasi kata kunci daripada susah payah memperhitungkan persentase kata kunci yang tepat.</p>
                <p>Dengan menggunakan strategi berikut, Anda dapat melihat kepadatan kata kunci dalam konten.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Utamakan Pembaca Terlebih Dahulu, Kemudian Fokus Pada Penggunaan Kata Kunci</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Anda harus selalu ingat bahwa konten terbaik ditulis dengan mengutamakan pengguna. Konten tersebut harus ditulis secara alami dan organik menggunakan kata kunci dalam konten. Kita harus membuat konten berkualitas tinggi, menarik, dan berharga. Setelah selesai, kita harus kembali dan menambahkan kata kunci untuk melihat apakah kita dapat mencapai keyword density sekitar 1-2%.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Gunakan Keyword Stemming Untuk Menambahkan Variasi Kata Kunci Target</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Keyword stemming adalah kemampuan search engine untuk mengenali dan mengaitkan kata-kata serupa yang terhubung dengan kata kunci target. Biasanya, variasi ini berupa penambahan awalan, akhiran, atau pluralisasi ke kata kunci target.</p>
                <p>Misalnya, yang berasal dari kata “content market” dapat berupa “content marketing” atau “content marketing”. Hal ini karena mesin pencari mengenali dan mengaitkan kata-kata ini dan juga menggunakannya dalam konten untuk mendukung kata kunci target dengan menambahkan kejelasan tekstual.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Gunakan Kata Kunci Semantik Untuk Memberikan Konteks Dan Mendukung Kata Kunci Target</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Kata kunci semantik adalah beberapa istilah yang sinonim, variasi atau kata yang terkait secara kontekstual dengan kata kunci target. Kata-kata ini terkait dalam konteks dan bukan dalam arti literal.</p>
                <p>Misalnya, kata kunci semantik yang ditargetkan adalah “content market” yang bisa mencakup “content marketing” atau “content marketer”. Semua mesin pencari menggunakan SEO semantik untuk membantu memahami dan memberi peringkat pada halaman web.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Hindari Keyword Stuffing</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Setelah selesai menyelesaikan konten, Anda harus memasukkannya ke tool CMLABS Keyword Counter sebelum menerbitkannya. Pastikan Anda telah menggunakan kata kunci target yang cukup untuk memberi tahu mesin pencari tentang semua halaman tanpa keyword stuffing dan menghindari penalti.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Bagaimana Cara Memeriksa Keyword Density Dalam Konten?</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Sangat mudah untuk memeriksa kepadatan kata kunci di posting Anda. Pertama, kita dapat melakukannya secara manual dengan menghitung berapa kali kata kunci target muncul, kemudian jumlah total kata dalam posting dan kemudian menggunakan rumus yang disebutkan di atas. Kedua, kita dapat menggunakan alat yang disebut Word Counter CMLABS untuk memeriksa kepadatan kata kunci dalam postingan. Tool Word Counter ini punya fitur untuk mengukur keyword density.</p>
              </div>
              <div class="card-header">
                <div class="card-title">
                  <h3 class="card-label">Bagaimana Cara Menemukan Dan Menggunakan Kata Kunci Dengan Benar?</h3>
                </div>
              </div>
              <div class="card-body">
                <p>Dengan mengetahui kepadatan kata kunci dan berapa kata kunci target harus muncul dalam konten, jadi sekarang Anda sudah siap untuk menggunakan Word Counter CMLABS yang akan membantu Anda menulis konten yang SEO friendly.</p>
              </div>
              <div class="card-header">
                  <div class="card-title">
                      <h3 class="card-label">@lang('wordcounter.copy-title-5')</h3>
                  </div>
              </div>
              <div class="card-body">
                  <p>Perlu diketahui jika <a href="https://cmlabs.co/tipe-konten/"><u style="color:blue">tipe konten</u></a> itu cukup banyak. Pada akhirnya pekerjan seorang penulis itu akan rumit jika dihadapkan ke kasus-kasus yang dihadapi. Lalu Tools ini tepat untuk siapa saja?</p>
                  <div class="row">
                      <div class="col-md-6 mb-5">
                        <div class="container p-10"style="background-color:#53F9AD">
                          <h3>@lang('wordcounter.copy-sub-title-5-1')</h3>
                          <p>@lang('wordcounter.copy-desc-5-1')</p>
                        </div>
                      </div>
                      <div class="col-md-6 mb-5" >
                        <div class="container p-10" style="background-color:#53F9AD; height:100%">
                          <h3>@lang('wordcounter.copy-sub-title-5-2')</h3>
                          <p>@lang('wordcounter.copy-desc-5-2')</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--end::Card-->
        </div>
    </div>
@endsection

@push('script')
  <script type="text/javascript">
    jQuery.each(jQuery('textarea[data-autoresize]'), function() {
      var offset = this.offsetHeight - this.clientHeight;

      var resizeTextarea = function(el) {
        jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
      };
      jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
    });
  </script>
@endpush

@push('script')
    <script src="{{asset('js/logic/word-counter.js')}}"></script>
@endpush

@section('word-counter')
    active
@endsection
