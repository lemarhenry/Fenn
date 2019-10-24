<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('admin.edit');
    }

    public function AdminData()
    {
        return Auth::user();
    }

    public function adminUpdate(Request $request)
    {
        $this->validate($request, [
            'Email' => 'required|email',
        ]);
        $admin = User::find(Auth::user()->id);
        $like = User::where('email', htmlentities($request->Email))->first();
        if ($this->validateEmail($like, $admin) == 1) {
            $admin->name = htmlentities($request->Name);
            $admin->email = htmlentities($request->Email);
            $admin->save();
            return ['status' => 200];
        } else {
            return ['status' => 403];
        }
    }

    public function validateEmail($like, $email)
    {
        if (empty($like)) {
            return 1;
        } else if ($like->id == $email->id) {
            return 1;
        } else {
            return 0;
        }
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
        ]);
        $admin = User::find(Auth::user()->id);
        $admin->password = Hash::make(htmlentities($request->password));
        $admin->save();
        return ['status' => 200];
    }

    public function adminCheckpassword(Request $request)
    {
        $admin = User::find(Auth::user()->id);
        if (Hash::check($request->password, $admin->password)) {
            return ['status' => 403];
        } else {
            return ['status' => 200];
        }
    }
}
