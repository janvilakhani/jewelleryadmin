<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getAbout()
    {
        return view('front.pages.about');
    }

    public function getContact()
    {
        return view('front.pages.contact');
    }
}
