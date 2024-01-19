<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

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
        // $userModel = User::all();
        // Session::put('user',Auth::)
        return view('bpom.index');
    }
    public function pegawai(){
        return view('bpom.pegawai');
    }
    public function surat(){
        return view('bpom.persuratan.surat');
    }
    public function nodin(){
        return view('bpom.nodin');
    }
}
