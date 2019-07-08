<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
      return view('web.index');
    }

    public function jeans()
    {
      return view('web.jeans');
    }

    public function promociones()
    {
      return view('web.promociones');
    }

    public function contactanos()
    {
      return view('web.contactanos');
    }
}
