<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function member(){
        $users = User::all();
        return view('member', compact('users','users'));
        return view('member', compact('users','users'));
    }


    public function index()
    {
        $users = User::all();
        return view('home');
    }

    public function about()
    {
        $users = User::all();
        return view('about');
    }

    public function gallery()
    {
        $users = User::all();
        return view('galeri');
    }



}
