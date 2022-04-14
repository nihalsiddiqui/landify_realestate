<?php

namespace App\Http\Controllers\landify;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landify.home');
    }
    public function services()
    {
        return view('landify.services');
    }

    public function experts()
    {
        return view('landify.experts');
    }

    public function FAQs()
    {
        return view('landify.FAQs');
    }
    public function About_us()
    {
        return view('landify.about_us');
    }
    public function contact()
    {
        return view('landify.contact');
    }
}
