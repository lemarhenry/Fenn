<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
      return view('Landing');
  }


  public function about(){

    return view('Fnhome.about');

}

public function homeSecurity(){

    return view('Fnhome.homeSecurity');

}

  public function contact(){

    return view('Fnhome.contact');
}
}
