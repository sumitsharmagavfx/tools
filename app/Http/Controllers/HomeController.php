<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        // dd(App::getLocale());
        $data = json_decode(file_get_contents(base_path('resources/js/json/tools.json')),true);
//        if (session()->exists('local')) {
//            App::setLocale(session('local'));
//            session()->put('local',App::getLocale());
//            session()->save();
//        }
        if ($lang==='en'){
            App::setLocale('en');
        }else{
            App::setLocale('id');
        }
        $local = App::getLocale();
        return view('home', compact('data','local', 'dataID', 'dataEN'));
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

    public function getBlogWordpressId()
    {
//        $dataToPost =[];
//        $stream = [
//            'ssl' => [
//                'verify_peer' => false,
//                'verify_peer_name' => false,
//                'allow_self_signed' => true,
//            ],
//        ];
//        $client = new Client();
//        $request = $client->get('https://api.cmlabs.co/wordpress?lang=en');
//        $response = $request->getBody()->getContents();
//        $dataArr=json_decode($response,true );
//        foreach ($dataArr as $data){
//            array_push($dataToPost,[
//                "title" => $data["title"]["rendered"],
//                "date" => $this->parse_date($data["date"]),
//                "link" => $data["link"]
//            ]);
//        }
        return json_decode(file_get_contents(base_path('resources/js/json/idBlog.json')),true);
    }

    public function getBlogWordpressEn()
    {
//        $dataToPost =[];
//        $stream = [
//            'ssl' => [
//                'verify_peer' => false,
//                'verify_peer_name' => false,
//                'allow_self_signed' => true,
//            ],
//        ];
//        $result_from_json = file_get_contents('https://cmlabs.co/en/wp-json/wp/v2/posts?per_page=5',false,stream_context_create($stream));
//        $client = new Client();
//        $request = $client->get('https://cmlabs.co/en/wp-json/wp/v2/posts?per_page=5',['verify'=> false]);
//        $response = $request->getBody()->getContents();
//        $dataArr=json_decode($response,true );
//        foreach ($dataArr as $data){
//            array_push($dataToPost,[
//                "title" => $data["title"]["rendered"],
//                "date" => $this->parse_date($data["date"]),
//                "link" => $data["link"]
//            ]);
//        }
        return json_decode(file_get_contents(base_path('resources/js/json/enBlog.json')),true);
    }
}
