<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('pages.others.about');
    }
    public function terms(){
        return view('pages.others.terms');
    }
    public function privacy(){
        return view('pages.others.privacy');
    }
    public function contact(){
        return view('pages.others.contact');
    }
    public function categories(){
        return view('pages.others.categories');
    }
}
