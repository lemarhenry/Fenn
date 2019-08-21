<?php

namespace App\Http\Controllers\Fnhome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\job;

class JobController extends Controller
{
    public function index()
    {
        return job::orderBy("created_at", "desc")->get();
    }
}
