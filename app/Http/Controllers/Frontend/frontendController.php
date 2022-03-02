<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function home()
    {
    	return view('home');
    }
    public function pack()
    {
   	return view('frontend.packages');
    }
    public function gallery(){
    	return view('frontend.gallery');
    }
    public function transpotations(){
    	return view('frontend.transpotations');
    }
    public function accommodation(){
        return view('frontend.accommodation');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function contact(){
        return view('frontend.contact'); 
    }
}

