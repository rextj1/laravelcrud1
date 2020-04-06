<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageRouteController extends Controller
{
    // to load the navbar from route
    public function getHome(){
        return view('/messages.homee');
    }
    public function getAbout(){
        return view('/messages.about');
    }
    public function getContact(){
        return view('/messages.contact');
    }
    public function getShowcase(){
        return view('/messages.inc.showcase');
    }
    // pagescontroller
    public function getPageContact(){
        return view('/pages.contact');
    }
}
