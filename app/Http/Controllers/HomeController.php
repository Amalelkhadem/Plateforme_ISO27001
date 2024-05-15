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
    public function compte()
    {
        return view('home');
    }

    public function implementation()
    {
        return view('implementation');
    }

    public function register()
    {
        return view('Auth.register');
    }
}
