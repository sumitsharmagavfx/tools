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
