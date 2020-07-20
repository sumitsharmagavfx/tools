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
                        <h3 class="card-label">WORD COUNTER <small>TINGKATKAN SKILL MENULIS</small></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>KARAKTER</h6>
                            <h1 id="characterCount">99999</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>KATA</h6>
                            <h1 id="wordCount">99999</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>KALIMAT</h6>
                            <h1 id="sentenceCount">99999</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>PARAGRAF</h6>
                            <h1 id="paragraphCount">99999</h1>
                        </div>
                        <div class="col-6 col-sm-4 col-md col-lg-4 col-xl" align="center">
                            <h6>WAKTU BACA</h6>
                            <h1 id="readingTime">99999</h1>
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
        <div class="col-lg-12">
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
                  <img class="" width="100%" src="https://cmlabs.co/wp-content/uploads/2020/06/cmlabs-word-counter.jpg" alt="">
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
                      <h3 class="card-label">Tool ini relevan untuk?</h3>
                  </div>
              </div>
              <div class="card-body">
                  <p>Perlu diketahui jika <a href="https://cmlabs.co/tipe-konten/"><u style="color:blue">tipe konten</u></a> itu cukup banyak. Pada akhirnya pekerjan seorang penulis itu akan rumit jika dihadapkan ke kasus-kasus yang dihadapi. Lalu Tools ini tepat untuk siapa saja?</p>
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
