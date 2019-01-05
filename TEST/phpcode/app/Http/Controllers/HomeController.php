<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Session\Middleware\StartSession;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('test','HelloThisissessiontesting');
        $cookie = Cookie::make('cookie', 'HelloThisiscookietesting', time()+100);
        return  response()->view('home', compact('cookie'))->withCookie($cookie);
    }
}
