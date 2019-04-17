<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // home page check login for authen
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
