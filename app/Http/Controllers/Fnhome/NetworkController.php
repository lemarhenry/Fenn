<?php

namespace App\Http\Controllers\Fnhome;


use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index(){
        return view('FnHome.Networking');
    }
}
