<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
      return view('Landing');
  }


  public function about(){

    return view('FnHome.about');

}

public function homeSecurity(){

    return view('FnHome.homeSecurity');

}

  public function contact(){

    return view('FnHome.contact');
}
}
