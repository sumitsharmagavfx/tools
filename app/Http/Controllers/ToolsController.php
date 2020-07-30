<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redirect;

class ToolsController extends Controller
{
    public function strikethrough()
    {
        return view('Tools/strikethrough');
    }

    public function FAQ($lang)
    {
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/faq', compact('local'));
    }

    public function wordcounter($lang)
    {
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/wordcounter', compact('local'));
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
        $local = App::getLocale();
        return view('Tools/metachecker', compact('local'));
    }

    public function pagespeed($lang)
    {
        App::setLocale($lang);
        $local = App::getLocale();
        return view('Tools/pagespeed', compact('local'));
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

    public function sitemap()
    {
      $local = "en";
      return view('Tools/sitemap', compact('local'));
    }

}
