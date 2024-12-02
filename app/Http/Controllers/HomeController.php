<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        Alert::alert('Title', 'Message', 'Type');
        return view('pages.bpom.index');
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
