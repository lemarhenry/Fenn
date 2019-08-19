<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }


    public function Messages()
    {
        return contact::orderBy("created_at", "desc")->get();
    }

    public function Mvpage()
    {
        return view('admin.message/index');
    }
}
