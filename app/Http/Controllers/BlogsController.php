<?php

namespace App\Http\Controllers;

use App\Models\BlogCat;
use App\Models\Blogs;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function index()
    {
        return view('pages.blogs.index');
    }

    public function details($id)
    {
        return view('pages.blogs.details');
    }

    public function fetch()
    {
        $blogs = Blogs::all();

        return view('admin.blog.index', compact('blogs'));
    }

    public function destroy($id)
    {
        Blogs::findOrFail($id)->delete();

        return response()->json(['success' => true]);
    }

    public function create()
    {
        $categories = BlogCat::all();
        $stores = Stores::all();

        return view('admin.blog.create', compact('categories', 'stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'b_title' => 'required|string|max:255',
            'b_slug' => 'required|string|max:255|unique:tblblogpost,url',
            'b_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'b_category' => 'required|exists:tblblogcat,id',
        ]);

        $data = [
            'name' => $request->b_title,
            'url' => $request->b_slug,
            'short_des' => $request->b_short_description,
            'long_des' => $request->b_long_description,
            'category' => $request->b_category,
            'r_store' => $request->r_store,
            'tags' => $request->tags,
            'image_alt' => $request->img_alt,
            'meta_title' => $request->b_meta_title,
            'meta_des' => $request->b_meta_desc,
            'meta_key' => $request->b_meta_key,
            'featured' => $request->b_feature ?? 0,
            'is_draft' => $request->is_draft ?? 0,
            'publish_date' => \Carbon\Carbon::parse(now())->format('Y-m-d'),
        ];

        /* =========================
           Image Upload
        ========================== */
        if ($request->hasFile('b_image')) {
            $image = $request->file('b_image');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/blogs'), $name);
            $data['image'] = $name;
        }

        /* =========================
           DRAFT CASE
        ========================== */
        if ($request->is_draft == 1) {

            DB::table('tblblogpost_draft')->insert($data);

            return redirect()->back()->with('success', 'Blog saved as draft');
        }

        /* =========================
           PUBLISH CASE
        ========================== */
        Blogs::create($data);

        return redirect()->back()->with('success', 'Blog Published');
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        // return $blog;
        $stores = Stores::all();
        $categories = BlogCat::all();

        return view('admin.blog.edit', compact('blog', 'stores', 'categories'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'blog_id' => 'required|exists:tblblogpost,id',
            'b_title' => 'required|string|max:255',
            'b_slug' => 'required|string|max:255|unique:tblblogpost,url,'.$request->blog_id.',id',
            'b_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'b_category' => 'required|exists:tblblogcat,id',
        ]);

        $id = $request->blog_id;

        $data = [
            'name' => $request->b_title,
            'url' => $request->b_slug,
            'short_des' => $request->b_short_description,
            'long_des' => $request->b_long_description,
            'category' => $request->b_category,
            'r_store' => $request->r_store,
            'tags' => $request->tags,
            'image_alt' => $request->img_alt,
            'meta_title' => $request->b_meta_title,
            'meta_des' => $request->b_meta_desc,
            'meta_key' => $request->b_meta_key,
            'featured' => $request->b_feature ?? 0,
            'publish_date' => \Carbon\Carbon::parse(now())->format('Y-m-d'),
        ];

        /* =========================
           Image Upload
        ========================== */
        if ($request->hasFile('b_image')) {
            $image = $request->file('b_image');
            $name = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/blogs'), $name);
            $data['image'] = $name;
        }

        /* =========================
           DRAFT CASE
        ========================== */
        if ($request->is_draft == 1) {

            DB::table('tblblogpost_draft')
                ->updateOrInsert(
                    ['blog_id' => $id],
                    $data
                );

            return redirect()->back()->with('success', 'Blog updated in draft');
        }

        /* =========================
           PUBLISH CASE
        ========================== */
        Blogs::where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Blog Updated');
    }
}
