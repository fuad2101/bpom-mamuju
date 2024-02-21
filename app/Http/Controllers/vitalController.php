<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vitalController extends Controller
{
    public function index(){
        return view('bpom.kearsipan.vital.index');
    }

    public function create(){
        return view('bpom.kearsipan.vital.create');
    }
}
