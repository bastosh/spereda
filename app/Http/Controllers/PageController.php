<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function cv()
    {
        return view('pages.cv');
    }

    public function coordonnees()
    {
        return view('pages.coordonnees');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
