<?php

namespace App\Http\Controllers\Fnhome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contact;

class ContactController extends Controller
{
    public function create(){
        return view('FnHome.contact');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'subject'=>'required|min:3',
            'body'=>'required|min:3',
        ]);
        $store = new contact;
        $store->name= htmlentities($request->name);
        $store->email= htmlentities($request->email);
        $store->subject = htmlentities($request->subject);
        $store->body = htmlentities($request->body);
        $store->save();
        return json_encode(['status'=>201]);

    }
}
