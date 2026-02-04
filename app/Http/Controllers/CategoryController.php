<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index', ['categories' => Category::orderBy('name', 'asc')->get()]);
    }
    public function create()
    {
        return view('admin.category.create', ['categories' => Category::orderBy('name', 'asc')->get()]);
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'cat_slug' => 'required|string|max:255|unique:tblcategory,slug',
            'cat_title' => 'nullable|string|max:255',
            'cat_meta_desc' => 'nullable|string|max:255',
            'cat_desc' => 'nullable|string',
            'type_radio' => 'required|in:0,1', // 0 = parent, 1 = sub
            'parent' => 'nullable|exists:tblcategory,id', // agar sub-category
        ]);

        // Determine parent
        $parentId = $request->type_radio == '1' ? $request->parent : "please select";

        // Create Category
        $category = new Category();
        $category->name = $request->cat_name;
        $category->slug = $request->cat_slug;
        $category->meta = $request->cat_title;
        $category->meta_des = $request->cat_meta_desc;
        $category->des = $request->cat_desc;
        $category->parent = $parentId;
        $category->update_date = \Carbon\Carbon::parse(now())->format('Y-m-d');
        $category->save();

        return response()->json([
            'success' => true,
            'message' => "Category Added"
        ]);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return response()->json([
            'id'          => $category->id,
            'name'        => $category->name,
            'slug'        => $category->slug,
            'title'       => $category->meta,
            'meta_desc'   => $category->meta_des,
            'description'=> $category->des,
        ]);
    }

}
