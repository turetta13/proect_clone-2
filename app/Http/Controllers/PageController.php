<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function acc()
    {
        return view('account');
    }

    public function check()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function prod()
    {

        return view('products');
    }

    public function single()
    {
        return view('single');
    }

    public function sup()
    {
        return view('support');
    }

    public function team()
    {
        return view('team');
    }

    public function pay()
    {
        return view('pay');
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function faq()
    {
        return view('faq');
    }

    public function test1()
    {
        return view('test1');
    }

    public function test2()
    {
        return view('test2');
    }

        public function cat($slug)
    {
       $category =  \App\Category::where([
            'slug'=>$slug
        ])->first();
        // dd($category->name);
        return view('index');
    }
}