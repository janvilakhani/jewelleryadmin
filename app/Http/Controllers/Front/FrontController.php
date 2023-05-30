<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function getDashboard()
    {
        $banner=Banner::get()->first();
        $newArrival=SubCategory::inRandomOrder()->limit(4)->get();
        $url=asset('storage/uploads/banner/'.$banner->image);
        return view('front.layouts.dashboard',compact('banner','url','newArrival'));

    }
    public function getAbout()
    {
        return view('front.pages.about');
    }

    public function getContact()
    {
        return view('front.pages.contact');
    }
}
