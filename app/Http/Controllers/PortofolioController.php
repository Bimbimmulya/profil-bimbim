<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function articel()
    {
        return view('articel');
    }

    public function kategori()
    {
        return view('kategori');
    }

}
