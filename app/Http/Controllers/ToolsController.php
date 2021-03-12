<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

class ToolsController extends Controller
{

    protected $HomeController;
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
    }

    public function strikethrough()
    {
        return view('Tools/strikethrough');
    }

    public function sslchecker($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/sslchecker', compact('local', 'dataID', 'dataEN'));
    }

    public function jsonld($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('jsonldhome', compact('local', 'dataID', 'dataEN'));
    }

    public function FAQ($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/faq', compact('local', 'dataID', 'dataEN'));
    }

    public function breadcrumb($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/breadcrumb', compact('local', 'dataID', 'dataEN'));
    }

    public function howto($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();

        // currencies
        $path_currencies = public_path('json/currencies.json');
        $currencies = json_decode(file_get_contents($path_currencies), true);

        $local = App::getLocale();
        return view('Tools/howto', compact('local', 'dataID', 'dataEN', 'currencies'));
    }

    public function jobposting($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();

        // country
        $path = public_path('json/regions.json');
        $region = json_decode(file_get_contents($path), true);

        // province
        $path_province = public_path('json/province-id.json');
        $province = json_decode(file_get_contents($path_province), true);

        // currencies
        $path_currencies = public_path('json/currencies.json');
        $currencies = json_decode(file_get_contents($path_currencies), true);

        $local = App::getLocale();
        return view('Tools/jobposting', compact('local', 'dataID', 'dataEN','region','province','currencies'));
    }

    public function person($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/person', compact('local', 'dataID', 'dataEN'));
    }

    public function product($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();

        // currencies
        $path_currencies = public_path('json/currencies.json');
        $currencies = json_decode(file_get_contents($path_currencies), true);

        $local = App::getLocale();
        return view('Tools/product', compact('local', 'dataID', 'dataEN', 'currencies'));
    }

    public function recipe($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/recipe', compact('local', 'dataID', 'dataEN'));
    }

    public function wordcounter($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
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
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/metachecker', compact('local', 'dataID', 'dataEN'));
    }

    public function pagespeed($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/pagespeed', compact('local', 'dataID', 'dataEN'));
    }

    public function mobiletest($lang)
    {
      App::setLocale($lang);
      $dataID = $this->HomeController->getBlogWordpressId();
      $dataEN = $this->HomeController->getBlogWordpressEn();
      $local = App::getLocale();
      return view('Tools/mobiletest', compact('local', 'dataID', 'dataEN'));
    }

    public function sitemap($lang)
    {
      App::setLocale($lang);
      $dataID = $this->HomeController->getBlogWordpressId();
      $dataEN = $this->HomeController->getBlogWordpressEn();
      $local = App::getLocale();
      return view('Tools/sitemap', compact('local', 'dataID', 'dataEN'));
    }

    public function robotgenerator($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/robotgenerator', compact('local', 'dataID', 'dataEN'));
    }

    public function technologylookup($lang)
    {
        App::setLocale($lang);
        $dataID = [];
        $dataEN = [];
//        $dataID = $this->HomeController->getBlogWordpressId();
//        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/technologylookup', compact('local', 'dataID', 'dataEN'));
    }

    public function redirectchecker($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/redirectchecker', compact('local', 'dataID', 'dataEN'));
    }

    public function hreflangchecker($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/hreflangchecker', compact('local', 'dataID', 'dataEN'));
    }

    public function linkanalyzer($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/linkanalyzer', compact('local', 'dataID', 'dataEN'));
    }

    public function keywordresearch($lang)
    {
        App::setLocale($lang);
        $dataID = $this->HomeController->getBlogWordpressId();
        $dataEN = $this->HomeController->getBlogWordpressEn();
        $local = App::getLocale();
        return view('Tools/keywordresearch', compact('local', 'dataID', 'dataEN'));
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
