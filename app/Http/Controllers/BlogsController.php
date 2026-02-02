<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Stores;
use App\Models\BlogCat;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('pages.blogs.index');
    }
    public function details($id){
        return view('pages.blogs.details');
    }
    public function fetch(){
        $blogs = Blogs::all();
        return view('admin.blog.index', compact('blogs'));
    }
    public function destroy($id)
    {
        Blogs::findOrFail($id)->delete();

        return response()->json(['success' => true]);
    }

    public function create(){
        $categories = BlogCat::all();
        $stores = Stores::all();
        return view('admin.blog.create', compact('categories', 'stores'));
    }
}
