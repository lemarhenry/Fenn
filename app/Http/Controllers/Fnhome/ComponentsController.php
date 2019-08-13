<?php

namespace App\Http\Controllers\Fnhome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Carousel;
use App\Testimonial;

class ComponentsController extends Controller
{
    public function carouselImages()
    {
        $images = Carousel::orderBy('created_at', 'desc')->get();
        return $images;
    }

    public function testimonial()
    {
        $test = Testimonial::orderBy('created_at', 'desc')->get();
        return $test;
    }
}
