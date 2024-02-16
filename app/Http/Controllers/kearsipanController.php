<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kearsipanController extends Controller
{
    public function index(){
        return view('bpom.kearsipan.vital');
    }
}
