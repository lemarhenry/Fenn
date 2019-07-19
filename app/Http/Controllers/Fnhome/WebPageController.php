<?php

namespace App\Http\Controllers\Fnhome;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebPageController extends Controller
{
    public function index(){

        return view('FnHome.website');
    }

}

