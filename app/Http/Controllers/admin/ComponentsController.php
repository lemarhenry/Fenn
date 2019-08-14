<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;

class ComponentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  tcpage()
    {
        return view('admin.testimonial/create');
    }

    public function tvpage()
    {
        return view('admin.testimonial/index');
    }

    public function testimonialSave(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'sm_description' => 'required',
            'rating' => 'required',
            'testimonial' => 'required',
        ]);

        $tes = new Testimonial;
        $tes->rating = htmlentities($request->rating);
        $tes->fdist = htmlentities($request->sm_description);
        $tes->testimonial = htmlentities($request->testimonial);
        $tes->client = htmlentities($request->Name);
        $tes->save();
        return ['status' => 201];
    }

    public function testimonialDelete(Testimonial $id)
    {
        $id->delete();
        return ['status' => '200'];
    }

    public function testimonialSingle(Testimonial $id)
    {
        return $id;
    }
    public function testimonialUpdate(Request $request, Testimonial $id)
    {
        $id->rating = $request->edrating;
        $id->fdist = $request->edsmdes;
        $id->client = $request->edclient;
        $id->testimonial = $request->edtest;
        $id->save();
        return ['status', '200'];
    }
}
