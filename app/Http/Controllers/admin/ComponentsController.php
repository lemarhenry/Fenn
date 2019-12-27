<?php

namespace App\Http\Controllers\admin;

use App\Carousel;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComponentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tcpage()
    {
        return view('admin.testimonial/create');
    }

    public function tvpage()
    {
        return view('admin.testimonial/index');
    }

    public function Cvpage()
    {
        return view('admin.carousel/index');
    }

    public function Ccpage()
    {
        return view('admin.carousel/create');
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
        $id->rating = htmlentities($request->edrating);
        $id->fdist = htmlentities($request->edsmdes);
        $id->client = htmlentities($request->edclient);
        $id->testimonial = htmlentities($request->edtest);
        $id->save();
        return ['status', '200'];
    }

    public function carouselSave(Request $request)
    {

        $this->validate($request, ['img' => 'mimes:jpeg,jpg,png|max:1999|required']);
        $caro = new Carousel;
        $filenameWithExt = $request->file('img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('img')->getClientOriginalExtension();
        $filenametostore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('img')->storeAs('public/carousel', $filenametostore);
        $caro->caption = htmlentities($request->caption);
        $caro->image = $filenametostore;
        $caro->section = htmlentities($request->section);
        $caro->save();
        return ['status' => 200];
    }

    public function carouselDelete(Carousel $id)
    {
        Storage::delete('public/carousel/' . $id->image);
        $id->delete();
        return ['status' => 200];
    }

    public function carouselSingle(Carousel $id)
    {
        return $id;
    }

    public function carouselUpdate(Request $request, Carousel $id)
    {
        $id->caption = htmlentities($request->caption);
        $id->section = htmlentities($request->section);
        if ($request->file('img') != null) {
            $this->validate(
                $request,
                ['img' => 'mimes:jpeg,jpg,png|max:1999']
            );
            Storage::delete('public/carousel/' . $id->image);
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/carousel', $filenametostore);
            $id->image = $filenametostore;
            $id->section = htmlentities($request->section);
            $id->save();
        }
        $id->save();
        return ['status' => 200];
    }
}
