<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('Frontend.About.about');
    }
    public function blog()
    {
        return view('Frontend.Blog.blog');
    }
    public function contact()
    {
        return view('Frontend.Contact.contact');
    }
    public function feature()
    {
        return view('Frontend.Feature.feature');
    }
    public function store()
    {
        return view('Frontend.Store.store');
    }
    public function product()
    {
        return view('Frontend.Product.product');
    }
    public function testimonial()
    {
        return view('Frontend.Testimonial.testimonial');
    }
}
