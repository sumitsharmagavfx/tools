<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function strikethrough()
    {
      return view('Tools/strikethrough');
    }

    public function FAQ()
    {
      return view('Tools/faq');
    }

    public function wordcounter()
    {
      return view('Tools/wordcounter');
    }

    public function creditcard()
    {
      return view('Tools/creditcard');
    }

    public function symbolandtext()
    {
      return view('Tools/symbolandtext');
    }

    public function metachecker()
    {
      return view('Tools/metachecker');
    }
}
