<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Stores;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        return view('pages.reviews.index');
    }

    public function details($id){
        return view('pages.reviews.details');
    }

    public function create(){
        $stores = Stores::orderBy('name', 'asc')->get();
        return view('admin.review.create', compact('stores'));
    }

    public function fetch(){
        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }

    public function destroy($id){
        Review::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => "Review Deleted"
        ]);
    }
}
