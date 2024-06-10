<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tophead;
use App\Models\About;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Ourclient;
use App\Models\Story;
use App\Models\Package;
use App\Models\Team;
use App\Models\Blog;
use App\Models\TopDestination;


class FrontendController extends Controller
{
    public function indexpage() {
        $topheader = Tophead::all();
        $servicepage = Service::all();
        $clientpage = OurClient::all();
        $distinationpage = TopDestination::all();
        return view('frontend.index', compact('topheader','servicepage','clientpage','distinationpage'));
    }
    public function servicepage() {
        $topheader = Tophead::all();
        $servicepage = Service::all();
        return view('frontend.service', compact('topheader','servicepage'));
    }

    public function aboutpage(){
        $topheader = Tophead::all();
        $aboutpage = About::all();
        return view('frontend.about', compact('topheader','aboutpage'));
    }
    public function gallerypage(){
        $topheader = Tophead::all();
        $gallerypage = Gallery::all();
        return view('frontend.gallery', compact('topheader','gallerypage'));
    }
    public function tourpackagepage(){
        $topheader = Tophead::all();
        $packagepage = Package::all();
        return view('frontend.package', compact('topheader','packagepage'));
    }
    public function blogpage(){
        $topheader = Tophead::all();
        $blogpage = Blog::all();
        return view('frontend.blog', compact('topheader', 'blogpage'));
    }
    public function singlepage(){
        $topheader = Tophead::all();
        return view('frontend.single', compact('topheader'));
    }
    public function destinationpage(){
        $topheader = Tophead::all();
        return view('frontend.destination', compact('topheader'));
    }
    public function guidepage(){
        $topheader = Tophead::all();
        return view('frontend.guide', compact('topheader'));
    }
    public function testimonialpage(){
        $topheader = Tophead::all();
        return view('frontend.testimonial', compact('topheader'));
    }



    public function contactpage(){
        $topheader = Tophead::all();
        return view('frontend.contact', compact('topheader'));
    }
    public function careerpage(){
        $topheader = Tophead::all();
        return view('frontend.career', compact('topheader'));
    }
    public function clientpage(){
        $topheader = Tophead::all();
        $clientpage = OurClient::all();
        return view('frontend.client', compact('topheader', 'clientpage'));
    }
    public function teampage(){
        $topheader = Tophead::all();
        $teampage = Team::all();
        return view('frontend.team', compact('topheader','teampage'));
    }
    public function storiespage(){
        $topheader = Tophead::all();
        $storypage = Story::all();
        return view('frontend.story', compact('topheader', 'storypage'));
    }
    
}
