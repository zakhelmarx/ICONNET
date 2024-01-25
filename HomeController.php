<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\keluhan;

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
    public function index(){
        return view('welcome');
    }
    public function data1(){

        $keluhan = keluhan::all();   
        return view('welcome',compact(['keluhan']));
    }
    public function create()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        keluhan::create($request->except(['_token','submit']));
        return redirect('/welcome');
    }
    public function data2(){

        $transaksi = transaksi::all();   
        return view('welcome',compact(['transaksi']));
    }
    public function create2()
    {
        return view('welcome');
    }
    public function store2(Request $request)
    {
        transaksi::create($request->except(['_token','submit']));
        return redirect('/welcome');
    }
}
