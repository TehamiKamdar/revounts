<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        return view('pages.reviews.index');
    }

    public function details($id){
        return view('pages.reviews.details');
    }
}
