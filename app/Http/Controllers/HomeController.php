<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
      return view('home');
    }
    public function about()
    {
      return view('about');
    }
    public function service()
    {
      return view('service');
    }
    public function contact()
    {
      return view('contact');
    }
    public function default()
    {
      return view('website.layouts.default');
    }
}
