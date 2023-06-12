<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Review;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function getDashboard()
    {
        $banner=Banner::get()->first();
        $newArrival=SubCategory::inRandomOrder()->limit(4)->get();
        $review=Review::inRandomOrder()->limit(4)->get();
        $product=Product::inRandomOrder()->with('category','subcategory')->limit(6)->get();

        // $url=asset('storage/uploads/banner/'.$banner->image);
        return view('front.layouts.dashboard',compact('banner','newArrival','review','product'));

    }
    public function getAbout()
    {
        return view('front.pages.about');
    }

    public function getContact()
    {
        return view('front.pages.contact');
    }
    // public function getReview()
    // {
    //     return view('front.pages.contact');
    // }
}
