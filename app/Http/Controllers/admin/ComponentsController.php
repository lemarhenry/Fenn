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
    public function testimonialSave(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'sm_description' => 'required',
            'rating' => 'required',
            'testimonial' => 'required',
        ]);

        $tes = new Testimonial;
        if ($request->image != null) {
            //gets the image name with extension.
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //gets the just the file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //gets extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //new file name
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('image')->storeAs('public/testimonial', $filenametostore);
            $tes->image = $filenametostore;
        }
        $tes->rating = htmlentities($request->rating);
        $tes->fdist = htmlentities($request->sm_description);
        $tes->testimonial = htmlentities($request->testimonial);
        $tes->client = htmlentities($request->Name);
        $tes->save();
        return ['status' => 201];
    }
}
