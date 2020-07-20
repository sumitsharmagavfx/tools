@extends('layouts.app')

@section('title')
    | JSON-LD FAQ SCHEMA GENERATOR
@endsection

@section('content')
@push('style')
<style media="screen">
  @media only screen and (max-width: 1200px) and (min-width: 992px)  {
    #copy {
      height: 50px;
    }

    #test{
      height: 50px;
    }
}
</style>
@endpush
<div class="row">
    <div class="col-lg-8">
        <!--begin::Card-->
        <div class="card card-custom card-stretch gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">JSON-LD FAQ SCHEMA GENERATOR <small>AKTIFKAN CUPLIKAN KAYA DI SERP</small></h3>
                </div>
            </div>
            <div class="card-body">
              <div class="mb-5" id="form">
                <input type="text" name="" class="form-control mb-5 question" placeholder="Question :" value="" data-id="0">
                <input type="text" name="" class="form-control mb-7 answer" placeholder="Answer :" value="" data-id="0">
              </div>
              <button type="button" class="btn btn-success" name="button" id="add">Add Another FAQ</button>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <div class="col-lg-4">
        <!--begin::Card-->
        <div class="card card-custom card-stretch gutter-b">
            <form class="" target="_blank" rel="”nofollow" noreferrer”="" action="https://search.google.com/test/rich-results" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-5" >
                  <button type="button" id="copy" class="btn btn-success form-control mb-5" name="button">Copy</button>
                </div>
                <div class="col-lg-7" >
                    <button type="submit" id="test" class="btn btn-warning form-control mb-5" name="button">Test Rich Result!</button>
                </div>
              </div>
              <textarea name="code_snippet" style="resize:none" rows="16" class="form-control" id="json-format"></textarea>
            </div>
            </form>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Card-->

    <div class="col-lg-12">
      <!--begin::Card-->
      <div class="card card-custom">
          <div class="card-header">
              <div class="card-title">
                  <h3 class="card-label">Langkah-Langkah Mengecek Tampilan FAQ Rich Result</h3>
              </div>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td style="width:60%;" class="align-middle"><p>1. Setelah mengetikkan FAQ, di kotak sebelah kanan akan muncul kode yang bisa Anda copy. Untuk melihat bagaimana tampilan FAQ ini di Google, klik “<b>Test Rich Result</b>“.</p></td>
                  <td class="align-middle"> <img id="1" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-1-min-1024x898.png" class="form-control" style="height:auto" alt=""> </td>
                </tr>
                <tr>
                  <td class="align-middle"><p>2. Pada laman ini Anda akan mengecek apakah kodenya dapat ditampilkan di rich result dengan mengklik “<b>TEST CODE</b></p>“.</td>
                  <td class="align-middle"> <img id="2" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-2-min-1024x509.png" class="form-control" style="height:auto" alt=""> </td>
                </tr>
                <tr>
                  <td class="align-middle"><p>3. Anda akan melihat centang hijau yang berarti FAQ dapat tampil di rich result. Setelah Anda tahu bahwa FAQ yang Anda ketik dapat tampil di rich result SERP, Anda dapat melihat pratinjaunya dalam tampilan smartphone. Tinggal klik “<b>PREVIEW RESULTS</b>“</p></td>
                  <td class="align-middle"> <img id="3" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-3-min-1024x502.png" class="form-control" style="height:auto" alt=""> </td>
                </tr>
                <tr>
                  <td class="align-middle"><p>4. Selanjutnya Anda akan diarahkan ke tampilan laman Google yang berisi FAQ yang Anda ketik. Beginilah tampilan rich result yang dihasilkan.</p>
                    <p><b>Catatan:</b> Agar FAQ dapat tampil di rich result, buatlah minimal 3 pertanyaan dan jawaban.</p></td>
                  <td class="align-middle"> <img id="4" data-toggle="modal" data-target="#myModal" src="https://cmlabs.co/wp-content/uploads/2020/06/json-4-min-1024x556.png" class="form-control" style="height:auto" alt=""> </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-header">
              <div class="card-title">
                  <h3 class="card-label">Apa Itu FAQ Schema?</h3>
              </div>
          </div>
          <div class="card-body">
            <p>Frequently Asked Questions (FAQ), dalam versi bahasa adalah “Halaman Pertanyaan Umum” berisi pertanyaan dan jawaban berkaitan dengan topik, produk, hingga perusahaan tertentu. Menariknya mesin telusur seperti Google mendukung tayangan informasi FAQ website anda tampil di SERP. Tentu saja dengan setelah anda mengikuti prosedur dan ketentuan yang telah dibuat.</p>
            <p>Kini, aktifitas kamu di SEO menjadi lebih mudah dengan adanya Tool ketiga cmlabs, yaitu FAQ Schema JSON Generator. Dengan proses yang simple, bahkan tidak membutuhkan pengetahuan coding bahasa promrograman tertentu, anda bisa menghaktifkan cuplikan kaya di SERP (Rich Snippet SERP).</p>
          </div>
          <div class="card-header">
              <div class="card-title">
                  <h3 class="card-label">Mengapa Website Anda Perlu FAQ Schema?</h3>
              </div>
          </div>
          <div class="card-body">
            <p>Sebelum menjawab pertanyaan utama, kami bawa anda mundur dua langkah, dan menanyakan “informasi apa yang pengguna paling butuhkan berkaitan produk atau perusahaan anda?”.</p>
            <p>Lalu kangkah berikutnya adalah, anda harus menyiapkan semua informasi yang mereka butuhkan, tentu lebih baik jika itu di publikasikan secara online. Karena ketika pengguna memiliki satu pertanyaan tertentu, mereka langsung mendapatkan jawabannya.</p>
            <table class="table" border="1px" bordercolor="#EBEDF3">
              <tbody>
                <tr>
                  <th class="align-middle"> <i class="far fa-lightbulb icon-2x"></i> </th>
                  <td> <p>Perlu diperhatikan, jika <b>pengguna membutuhkan jawaban dengan segera</b>. Maka mereka mengharapkan sebuah informasi penting yang untuk menjawab pertanyaan sulit yang sedang mereka pikirkan, tentu saja berkaitan dengan produk/layanan dan perusahaan anda.</p> </td>
                </tr>
              </tbody>
            </table>
            <p>Maka, FAQ Schema adalah solusinya. Fitur cuplikan kaya ini dirilis oleh Google untuk menjawab masalah kecepatan tersebut. Ketika pengguna benar-benar mengharapkan jawaban yang akurat dan cepat, kadangkala:</p>
            <ul>
              <li>Laman website lebih lambat dari espektasi,</li>
              <li>Tayangan informasi daftar pertanyaan dan jawaban yang tidaktersetruktur, hingga</li>
              <li>Penempatan informasi FAQ yang sulit ditemukan oleh kebanyakan pengguna internet;</li>
            </ul>
            <p>Terlepas dengan cara penerapan dan tingkat kesulitannya, itulah tiga alasan mendasar mengapaa FAQ Schema penting untuk diaktifkan oleh pemilik website. Pada bagian berikutnya, kami akan berikan tutorial cara pasang FAQ Schema di dalam website.</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h3 class="card-label">Mengapa Memiliki Halaman FAQ Penting untuk Situs Web Anda?</h3>
            </div>
          </div>
          <div class="card-body">
            <p>Daftar FAQ yang bagus adalah salah satu elemen terpenting dari suatu situs web bisnis. Benar, semua perusahaan perlu memiliki konten yang berkulitas dan tampilan yang menawan untuk memberikan pengalaman pengguna yang baik. Namun, Anda perlu FAQ di situs Anda agar menarik traffic besar dan mengonversi lebih banyak pelanggan.</p>
            <p>FAQ Shema adalah bagian integral dari navigasi yang baik dan perjalanan pelanggan menelusuri situs web. FAQ ini adalah pusat informasi bagi audiens Anda yang ingin mempelajari lebih lanjut tentang bisnis dan mencari tahu tentang produk dan layanan yang diberikan, dan melihat apakah sesuai dengan yang mereka inginkan.</p>
            <p>Setiap kali seseorang mengklik FAQ Shema, mereka sudah masuk ke dalam bisnis Anda. Bagi banyak orang, halaman FAQ adalah halaman kedua yang mereka kunjungi setelah halaman Beranda atau Layanan.</p>
            <p>Alih-alih menebak topik apa yang harus Anda tulis, Anda dapat menggunakan tool online marketing untuk bisnis kecil untuk membantu Anda memahami kebutuhan pelanggan. Cara ini adalah cara terbaik untuk mengoptimalkan FAQ Shema Anda sebelum menghabiskan banyak waktu atau sumber daya.</p>
            <p>Bagi banyak orang, halaman FAQ pada situs web adalah halaman kedua yang mereka kunjungi setelah halaman Beranda atau Layanan. Pada bagian FAQ Anda perlu menyertakan konten berkualitas tinggi yang akan membantu pelanggan memahami produk dan layanan dengan cepat.</p>
            <p>Artinya FAQ Shema Anda dapat memainkan peran penting dalam mengarahkan audiens menjadi pelanggan yang potensial. Anda harus tahu bahwa berinvestasi pada konten berkualitas tinggi untuk halaman FAQ akan sangat berdampak pada conversion rate dan membantu bisnis Anda meningkat pesat.</p>
            <p>Seiring dengan pertanyaan dan jawaban teknis, halaman FAQ akan memberikan kesan bahwa web Anda adalah situs yang resmi dan terpercaya. FAQ Shema menunjukkan bahwa perusahaan Anda tahu banyak tentang produk dan layanan sehingga dapat menjawab pertanyaan bahkan sebelum ditanyakan.</p>
            <p>Anda juga dapat menggunakan halaman FAQ sebagai bentuk bukti sosial karena bisnis Anda dapat menetapkan situs web perusahaan sebagai aset berharga untuk mendorong penjualan.</p>
            <p>Terakhir, halaman FAQ di situs web akan mengurangi banyak tekanan dari customer service. Daripada membuat banyak pertanyaan yang dapat diakses untuk menjawab pertanyaan customer, sebaikny promosikan halaman FAQ Anda kepada klien sebagai sumber informasi praktis seputar perusahaan.</p>
          </div>
          <div class="card-header">
            <div class="card-title">
              <h3 class="card-label">Manfaat Utama Halaman FAQ</h3>
            </div>
          </div>
          <div class="card-body">
            <p>Selain Beranda dan halaman penting lain di situs web Anda, pengunjung juga akan pergi ke halaman FAQ jika mereka ingin mempelajari lebih lanjut tentang produk dan penawaran yang tersedia.</p>
            <p>Karena halaman FAQ akan menjadi laman favorit di situs web perusahaan, Anda harus memberikan tautan ke halaman produk. Ini akan membantu strategi internal linking di website Anda dan meningkatkan strategi SEO yang juga berdampak ke area lain di website Anda.</p>
            <h4 class="font-weight-bold">1. Halaman FAQ Membantu Anda Mengatasi Kebutuhan Pembaca Anda</h4>
            <p>Jika Anda ingin meningkatkan nilai praktis situs Anda, meningkatkan otoritas bisnis, dan meningkatkan konversi, maka Anda perlu memiliki FAQ Shema yang lengkap dan tertarget. FAQ Shema adalah pusat utama yang dituju pelanggan ketika mereka punya pertanyaan.</p>
            <p>Salah satu alasan terkuat untuk memiliki bagian FAQ adalah untuk menjawab kebutuhan pelanggan, karena pelanggan adalah calon pembeli yang ingin tahu lebih banyak informasi tentang produk dan layanan dengan membaca di halaman FAQ. Anda harus memberikan konten berkualitas tentang bisnis Anda di halaman FAQ.</p>
            <p>Cara terbaik yang dapat Anda lakukan untuk mengatasi keberatan dan meningkatkan penjualan adalah memberikan informasi yang akurat untuk menjawab pertanyaan yang besar kemungkinan ditanyakan pelanggan.</p>
            <h4 class="font-weight-bold">2. Buatlah Website Perusahaan Anda Sebagai Rujukan Utama</h4>
            <p>Ketika ada pertanyaan yang menggantung, orang akan mencari di website Anda karena mereka percaya website Anda adalah rujukan utama. Hal yang sama terjadi ketika pelanggan Anda mengajukan pertanyaan tentang produk dan layanan Anda. Karena pelanggan Anda ingin mengetahui informasi tentang masalah yang diketahui bisnis Anda, gunakan halaman FAQ sebagai cara untuk membangun website perusahan sebagai pakar tepercaya.</p>
            <p>Setiap kali audiens mengajukan pertanyaan produk dan layanan, Anda dapat membuktikan diri sebagai pakar melalui jawaban-jawaban berisi informasi yang lengkap dan akurat.</p>
            <p>Tugas Anda adalah membuat orang-orang tertarik, jadi Anda harus melakukan apa saja untuk menjadikan diri Anda sebagai pakar tepercaya. Memberikan jawaban luar biasa untuk pertanyaan yang diajukan pelanggan adalah cara terbaik bagi Anda untuk menjadi sumber informasi yang dapat dipercaya.</p>
            <p>Gunakan FAQ Shema untuk membantu bisnis Anda mendapatkan kepercayaan dari pelanggan. Anda dapat menggunakan halaman  FAQ sebagai titik kontak pertama dengan pelanggan, setelah itu Anda dapat mengarahkan mereka menjadi pembeli.</p>
            <h4 class="font-weight-bold">3. Tingkatkan Penjualan Anda</h4>
            <p>Jika bisnis Anda memiliki halaman FAQ yang dioptimalkan di situs web, maka Anda akan melihat peningkatan konversi karena persentase pengunjung di situs web Anda akan membeli produk dan layanan yang tersedia.</p>
            <p>Namun, memiliki halaman FAQ yang berisi informasi yang terlalu beragam tidak akan sukses.</p>
            <p>Halaman FAQ Anda perlu disesuaikan dengan kebutuhan spesifik pelanggan. Selain memiliki konten yang fokus, Anda harus memiliki tautan dari halaman FAQ Anda ke halaman produk dan toko online.</p>
            <p>Taktik yang lebih bagus untuk halaman FAQ adalah membandingkan produk dan layanan Anda dengan kompetitor. Strategi ini adalah cara alami untuk menunjukkan keunggulan bisnis Anda dibandingkan dengan pesaing yang lain.</p>
            <h4 class="font-weight-bold">4. Tingkatkan SEO</h4>
            <p>Search engine menyukai halaman FAQ karena mereka menyediakan konten yang relevan untuk membantu Google memahami bisnis Anda.</p>
            <p>Artinya perlu banyak konten yang bagus untuk membantu website Anda muncul di mesin pencari. Halaman FAQ situs web Anda adalah tempat yang tepat untuk mempublikasikan banyak informasi menarik tentang bisnis, produk, dan layanan Anda.</p>
            <p>Anda juga dapat memanfaatkan halaman FAQ Anda untuk memasukkan long tail keyword yang dicari pelanggan. Karena Anda sudah memberikan informasi tentang bisnis Anda, Anda dapat menambahkan konten yang kaya kata kunci sehingga ketika seseorang mencari produk dan layanan terkait, mereka akan menemukan halaman FAQ.</p>
            <p>Pertanyaan dan jawaban yang Anda sertakan pada halaman FAQ Anda harus mewakili  pemikiran pelanggan. Ketika FAQ telah terisi banyak dan lengkap, halaman ini akan berperingkat tinggi di mesin pencari.</p>
            <p>Inilah sebabnya Anda harus memasukkan pertanyaan spesifik dan terperinci di halaman FAQ Anda. Laman ini harus berisi informasi yang relevan tentang bisnis Anda sehingga dapat muncul di mesin pencari seperti Google dan Bing.</p>
          </div>
      </div>
      <!--end::Card-->
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-body">
                <img class="img-responsive form-control" style="height:auto;" src="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script type="text/javascript">
$(document).ready(function () {
      $('#myModal').on('show.bs.modal', function (e) {
          var image = $(e.relatedTarget).attr('src');
          $(".img-responsive").attr("src", image);
      });
});
</script>
@endpush

@push('script')
    <script src="{{asset('js/logic/faq-json-ld.js')}}"></script>
@endpush
@section('json-ld')
    active
@endsection
