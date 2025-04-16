<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indexView()
    {
        return view('pages.index');
    }

    public function aboutUsView()
    {
        return view('pages.indexAbout');
    }

    public function pricesView()
    {
        return view('pages.indexPrices');
    }
}
