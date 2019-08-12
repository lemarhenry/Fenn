<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{

    public function index()
    {
        $user = User::all();
        if (count($user) < 1) {
            $user = new User;
            $user->name = "admin";
            $user->email = "admin@fenntech.com";
            $user->password = Hash::make("admin123");
            $user->save();
        }

        return view('Landing');
    }


    public function about()
    {

        return view('FnHome.about');
    }

    public function homeSecurity()
    {

        return view('FnHome.homeSecurity');
    }

    public function contact()
    {

        return view('FnHome.contact');
    }
}
