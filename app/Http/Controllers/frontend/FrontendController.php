<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tophead;
use App\Models\About;

class FrontendController extends Controller
{
    public function indexpage() {
        $topheader = Tophead::all();
        return view('frontend.index', compact('topheader'));
    }
    public function servicepage() {
        $topheader = Tophead::all();
        return view('frontend.service', compact('topheader'));
    }

    public function aboutpage(){
        $topheader = Tophead::all();
        $aboutpage = About::all();
        return view('frontend.about', compact('topheader'));
    }
    public function gallerypage(){
        $topheader = Tophead::all();
        return view('frontend.gallery', compact('topheader'));
    }
    public function tourpackagepage(){
        $topheader = Tophead::all();
        return view('frontend.package', compact('topheader'));
    }
    public function blogpage(){
        $topheader = Tophead::all();
        return view('frontend.blog', compact('topheader'));
    }
    public function singlepage(){
        $topheader = Tophead::all();
        return view('frontend.single', compact('topheader'));
    }
    public function destinationpage(){
        $destinationheader = Tophead::all();
        return view('frontend.destination', compact('destinationheader'));
    }
    public function guidepage(){
        $guideheader = Tophead::all();
        return view('frontend.guide', compact('guideheader'));
    }
    public function testimonialpage(){
        $testheader = Tophead::all();
        return view('frontend.testimonial', compact('testheader'));
    }



    public function contactpage(){
        $contactheader = Tophead::all();
        return view('frontend.contact', compact('contactheader'));
    }
    public function careerpage(){
        $careerheader = Tophead::all();
        return view('frontend.career', compact('careerheader'));
    }
    public function clientpage(){
        $careerheader = Tophead::all();
        return view('frontend.client', compact('careerheader'));
    }
    public function teampage(){
        $teampageheader = Tophead::all();
        return view('frontend.team', compact('teampageheader'));
    }
    public function storiespage(){
        $storiespageheader = Tophead::all();
        return view('frontend.story', compact('storiespageheader'));
    }
    
}
