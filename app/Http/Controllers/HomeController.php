<?php

namespace App\Http\Controllers;

use App\Models\Cpenerima;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\User;

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
        $date =Cpenerima::all();
        $data =Todo::all();
        $us =User::all();
        return view('home.home',compact('data','date','us'));
    }
}
