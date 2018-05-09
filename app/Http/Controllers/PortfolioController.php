<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function show()
    {
        return view('projects.show');
    }
}
