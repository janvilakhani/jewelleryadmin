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
        $getTwoSubCat=SubCategory::inRandomOrder()->limit(2)->get();
        $proName='';
        if(count($getTwoSubCat)>0){
            foreach ($getTwoSubCat as $key => $cat) {
                $comma=$proName!=''?',':'';
                $proName=$proName.$comma.$cat->subcat_name;
            }
        }
        $review=Review::inRandomOrder()->limit(4)->get();
        $product=Product::inRandomOrder()->with('category','subcategory')->limit(6)->get();

        // $url=asset('storage/uploads/banner/'.$banner->image);
        return view('front.layouts.dashboard',compact('banner','newArrival','review','product','getTwoSubCat','proName'));

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
