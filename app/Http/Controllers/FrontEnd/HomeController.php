<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.pages.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function services()
    {
        return view('frontend.pages.services');
    }
    public function quality()
    {
        return view('frontend.pages.quality');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
