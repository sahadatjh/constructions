<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function servicesSingle()
    {
        return view('frontend.pages.service-single');
    }

    public function projects()
    {
        return view('frontend.pages.projects');
    }

    public function projectsSingle()
    {
        return view('frontend.pages.project-single');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }

    public function teams()
    {
        return view('frontend.pages.blog');
    }

    public function blogSingle()
    {
        return view('frontend.pages.blog-single');
    }

    public function readyDesign()
    {
        return view('frontend.pages.cost');
    }

    public function productSingle()
    {
        return view('frontend.pages.product-single');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
    }
}
