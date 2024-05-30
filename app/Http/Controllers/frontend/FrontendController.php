<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function servicepage() {
        return view('frontend.service');
    }

    public function aboutpage(){
        return view('frontend.about');
    }
    public function gallerypage(){
        return view('frontend.gallery');
    }
    public function tourpackagepage(){
        return view('frontend.package');
    }
    public function blogpage(){
        return view('frontend.blog');
    }
    public function singlepage(){
        return view('frontend.single');
    }
    public function destinationpage(){
        return view('frontend.destination');
    }
    public function guidepage(){
        return view('frontend.guide');
    }
    public function testimonialpage(){
        return view('frontend.testimonial');
    }



    public function contactpage(){
        return view('frontend.contact');
    }
    public function careerpage(){
        return view('frontend.career');
    }
    public function clientpage(){
        return view('frontend.client');
    }
    public function teampage(){
        return view('frontend.team');
    }
    
}
