<?php

namespace App\Http\Controllers\Fnhome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorporateController extends Controller
{
    public function index(){
        return view('FnHome.corporate');
    }
}
