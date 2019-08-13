<?php

namespace App\Http\Controllers\Fnhome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index(){


        return view('FnHome\portfolio');

    }
}
