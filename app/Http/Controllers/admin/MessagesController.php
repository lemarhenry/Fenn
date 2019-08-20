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

    public function seen(contact $id)
    {
        $id->seen = 1;
        $id->save();
        return ['status' => 200];
    }

    public function messageSingle(contact $id)
    {
        return $id;
    }

    public function messageDelete(contact $id)
    {
        $id->delete();
        return ['status' => 200];
    }

    public function messageSearch(Request $request)
    {
        $search = htmlentities($request->search);
        $res = contact::where('email', 'LIKE', '%' . $search . '%')
            ->orwhere('name', 'LIKE', '%' . $search . '%')
            ->orwhere('subject', 'LIKE', '%' . $search . '%')
            ->orderBy('created_at', 'desc')->get();
        return $res;
    }
}
