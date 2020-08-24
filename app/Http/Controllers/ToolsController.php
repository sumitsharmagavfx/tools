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
  public function parseDate($date)
  {
      $date=date_create($date);
      return date_format($date,"M d, Y - H:i");
  }

    public function getBlogWordpressId()
    {
      $client = new Client();
      $response = $client->get("https://cmlabs.co/wp-json/wp/v2/posts?per_page=4");
      $data = json_decode($response->getBody()->getContents(),true);
      $data_fix = [];
      foreach ($data as $datum){
          array_push($data_fix,[
              "link" => $datum['link'],
              "title" => str_replace('&#038;','&',$datum['title']['rendered']),
              "date" => $this->parseDate($datum['date'])
          ]);
      }
      return $data_fix;
    }

    public function getBlogWordpressEn()
    {
      $client = new Client();
      $response = $client->get("https://cmlabs.co/en/wp-json/wp/v2/posts?per_page=4");
      $data = json_decode($response->getBody()->getContents(),true);
      $data2 = $response->getBody()->getContents();
      $data_fix = [];
      foreach ($data as $datum){
          array_push($data_fix,[
              "link" => $datum['link'],
              "title" => str_replace('&#038;','&',$datum['title']['rendered']),
              "date" => $this->parseDate($datum['date'])
          ]);
      }
      return $data_fix;
    }

    public function strikethrough()
    {
        return view('Tools/strikethrough');
    }

    public function sslchecker($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/sslchecker', compact('local', 'dataID', 'dataEN'));
    }

    public function FAQ($lang)
    {
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

    public function robotgenerator($lang)
    {
        $dataID = $this->getBlogWordpressId();
        $dataEN = $this->getBlogWordpressEn();
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/robotgenerator', compact('local', 'dataID', 'dataEN'));
    }

    public function englishVersion()
    {
        $previous = url()->previous();
        $link = substr($previous, strrpos($previous,'/')+1);
        App::setLocale('en');
        session()->put('local','en');
        session()->save();
        if ($link === 'en' || $link === 'id') {
          return \redirect('/en');
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
        if ($link === 'en' || $link === 'id') {
          return \redirect('/id');
        }else {
            return \redirect('/id/'.$link);
        }
    }

    public function loadssl()
    {
        $url = $_GET['host'];
        $client = new Client();
        $request = $client->get('https://api.cmlabs.co/ssl/?url='.$url);
        $response = $request->getBody()->getContents();
        echo $response;
    }


}
