<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
          [
            "title" => "JSON-LD FAQ SCHEMA GENERATOR",
            "description" => "Frequently Asked Questions (FAQ), dalam versi bahasa adalah “Halaman Pertanyaan Umum” berisi pertanyaan dan jawaban berkaitan dengan topik, produk, hingga perusahaan tertentu. Menariknya mesin telusur seperti Google mendukung tayangan informasi FAQ website anda tampil di SERP. Tentu saja dengan setelah anda mengikuti prosedur dan ketentuan yang telah dibuat.",
            "img" => "Axe"
          ],

          [
            "title" => "CEK JUDUL & META DESKRIPSI",
            "description" => "SERP, singkatan dari Search Engine Results Page menjadi medium penting dari hasil aktifitas SEO (Search Engine Optimization). Pekerjaan ini menuntut perhatian khusus dari setiap pelaku marketers, dari junior hingga level senior. Tiga atribut paling penting untuk SERP adalah URL, Page Title, dan Meta Description.",
            "img" => "Brush"
          ],

          [
            "title" => "WORD COUNTER",
            "description" => "Sebagai content writer dan copywirter, menulis konten artikel menjadi aktifitas sehari-hari. Secara umum, penulis dituntut membuat sebuah konten dengan jumlah kata atau kalimat tertentu. Sehingga jumlah kata menjadi sangat penting. Maka CMLABS Word Countet adalah tool tepat untuk membantu pekerjaan penulis konten.",
            "img" => "Compass"
          ],

          [
            "title" => "DUMMY CREDIT CARD GENERATOR CMLABS",
            "description" => "Generator nomor kartu kredit palsu atau dummy adalah adalah tool pendukung dari CMLABS untuk menghasilkan nomor unik kartu kredit. Anda cukup memilih jenis kartu kredit yang tersedia, dan tool secara otomatis akan menghasilkan serangkaian angka untuk kartu kredit yang Anda pilih. Tool ini juga akan menghilangkan urutan nomor tertentu jika tidak sesuai dengan aturan.",
            "img" => "Hummer"
          ],

          [
            "title" => "SYMBOL AND TEXT GENERATOR",
            "description" => "Emoji membantu membuat pesan terkesan lebih akrab, karena berkomunikasi dengan seseorang melalui chat tidak memungkinkan Anda untuk mendengar suara satu sama lain (kecuali jika Anda menggunakan voice note). Tentunya kedua belah pihak perlu menekankan bagaimana perasaan pada pesan yang dikirim, merepresentasikan pesan Anda dengan emoji adalah alternatif untuk memberitahu perasaan yang ingin Anda gambarkan teman atau audiens.",
            "img" => "Hummer2"
          ],

          [
            "title" => "STRIKETHROUGH TEXT GENERATOR",
            "description" => "Jika Anda ingin menambahkan efek dicoret ke tweet atau pesan facebook Anda, maka alat online ini yang Anda butuhkan. Cukup tambahkan teks di area yang tersedia di tool striketrough text generator, lalu klik pada tombol StrikeEm.",
            "img" => "Pantone"
          ],
        );
        
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
