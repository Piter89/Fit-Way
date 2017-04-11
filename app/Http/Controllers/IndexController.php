<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function community()
    {
        return view('webs.community');
    }

    public function knowledge()
    {
        return view('webs.knowledge');
    }

    public function tests()
    {
        return view('webs.tests');
    }

    public function contact()
    {
        return view('webs.contact');
    }
}
