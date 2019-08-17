<?php

namespace App\Http\Controllers\Fnhome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('FnHome\portfolio');
    }
    public function portfolio()
    {
        return Portfolio::orderBy("created_at", "desc")->get();
    }
}
