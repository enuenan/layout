<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.pages.index');
    }

    public function charts()
    {
      return view('admin.pages.charts');
    }

    public function tables()
    {
      return view('admin.pages.tables');
    }

    public function login()
    {
      return view('admin.pages.login');
    }
}
