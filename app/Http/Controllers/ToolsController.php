<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redirect;

class ToolsController extends Controller
{
    public function parse_date($date)
    {
        $dateFormat = date_create($date);
        return date_format($dateFormat,"d/m/Y H:i");
    }

    public function getEN()
    {
      $curl = curl_init();

  		curl_setopt_array($curl, array(
  		  CURLOPT_URL => "https://cmlabs.co/en/wp-json/wp/v2/posts?per_page=5",
  		  CURLOPT_RETURNTRANSFER => true,
  		  CURLOPT_ENCODING => "",
  		  CURLOPT_MAXREDIRS => 10,
  		  CURLOPT_TIMEOUT => 0,
  		  CURLOPT_FOLLOWLOCATION => false,
  		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  		  CURLOPT_CUSTOMREQUEST => "GET",
  		));

  		$response = curl_exec($curl);
  		$err = curl_error($curl);
  		curl_close($curl);
  		if ($err) {
  			$response =  "cURL Error #:" . $err;
  		} else {
  			$response;
  		}
  		return json_decode($response,TRUE);
    }

    public function getID()
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://cmlabs.co/wp-json/wp/v2/posts?per_page=5",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);
      if ($err) {
        $response =  "cURL Error #:" . $err;
      } else {
        $response;
      }
      return json_decode($response,TRUE);
    }

    public function parseID()
    {
      $data = $this->getID();
  		$result=array();
  		for ($i=0; $i < count($data); $i++) {
  			$result[$i]['title'] = $data[$i]['title']['rendered'];
  			$result[$i]['date'] = $data[$i]['date'];
  			$result[$i]['link'] = $data[$i]['link'];
  		}
  		return $result;

    }

    public function parseEN()
    {
      $data = $this->getEN();
  		$result=array();
  		for ($i=0; $i < count($data); $i++) {
  			$result[$i]['title'] = $data[$i]['title']['rendered'];
  			$result[$i]['date'] = $data[$i]['date'];
  			$result[$i]['link'] = $data[$i]['link'];
  		}
  		return $result;

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

    public function strikethrough()
    {
        return view('Tools/strikethrough');
    }

    public function sslchecker($lang)
    {
        $ea = $this-> parseID();
        dd($ea);
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/sslchecker', compact('local', 'dataID', 'dataEN'));
    }

    public function FAQ($lang)
    {
        $ea = $this-> parseEN();
        dd($ea);
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/faq', compact('local', 'dataID', 'dataEN'));
    }

    public function wordcounter($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/wordcounter', compact('local', 'dataID', 'dataEN'));
    }

    public function creditcard($local)
    {
        App::setLocale($local);
        $lang = App::getLocale();
        return view('Tools/creditcard');
    }

    public function symbolandtext($local)
    {
        App::setLocale($local);
        $lang = App::getLocale();
        return view('Tools/symbolandtext');
    }

    public function metachecker($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/metachecker', compact('local', 'dataID', 'dataEN'));
    }

    public function pagespeed($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/pagespeed', compact('local', 'dataID', 'dataEN'));
    }

    public function mobiletest($lang)
    {
      $dataID = $this->getBlogWordpressId();
      $dataEN = $this->getBlogWordpressEn();
      App::setLocale($lang);
      $local = App::getLocale();
      return view('Tools/mobiletest', compact('local', 'dataID', 'dataEN'));
    }

    public function sitemap($lang)
    {
      $dataID = $this->getBlogWordpressId();
      $dataEN = $this->getBlogWordpressEn();
      App::setLocale($lang);
      $local = App::getLocale();
      return view('Tools/sitemap', compact('local', 'dataID', 'dataEN'));
    }

    public function englishVersion()
    {
        $previous = url()->previous();
        $link = substr($previous, strrpos($previous,'/')+1);
        App::setLocale('en');
        session()->put('local','en');
        session()->save();
        if ($link == null) {
          return \redirect('/');
        }else {
            return \redirect('/en/'.$link);
        }
    }

    public function indonesiaVersion()
    {
        $previous = url()->previous();
        $link = substr($previous, strrpos($previous,'/')+1);
        App::setLocale('id');
        session()->put('local','id');
        session()->save();
        if ($link == null) {
          return \redirect('/');
        }else {
            return \redirect('/id/'.$link);
        }
    }

    public function loadssl()
    {
        $url = http_get_request_body();
        $client = new Client();
        $request = $client->get('https://ssl-cert.glitch.me/?host='.$url);
        $response = $request->getBody()->getContents();
        echo $response;
    }


}
