<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function form()
    {
        //
        return view('form'); //se enlaza a la vista
    }

    public function aboutme()
    {
        //
        return view('aboutme'); //se enlaza a la vista
    }

    public function favorites()
    {
        //
        return view('favorites'); //se enlaza a la vista
    }

    public function recipebook()
    {
        //
        return view('recipebook'); //se enlaza a la vista
    }
}