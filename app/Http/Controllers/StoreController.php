<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Stores::orderBy('name', 'asc')->get();

        return view('admin.store.index', compact('stores'));
    }

    public function create()
    {
        $category = Category::where('parent', '!=', 'please select')->orderby('name', 'desc')->get();

        return view('admin.store.create', compact('category'));
    }

    public function store(Request $request)
    {
        // ✅ 1. Validation
        $validator = Validator::make($request->all(), [
            'store_name' => 'required|string|max:255',
            'store_long_description' => 'nullable|string',
            'store_slug' => 'required|string|max:255',
            'store_tracking_url' => 'nullable|url',
            'direct_url' => 'nullable|url',
            'meta_title' => 'nullable|string|max:255',
            'meta_desc' => 'nullable|string',
            'meta_key' => 'nullable|string',
            'meta_date' => 'nullable|boolean',
            'image_alt' => 'nullable|string|max:255',
            'banner_image' => 'nullable|string|max:255',
            'store_category' => 'required|array',
            'store_image' => 'required|image|mimes:jpeg,jpg,png,gif,bmp,webp|max:2048',
            'top' => 'nullable|boolean',
            'for_sitemap' => 'nullable|boolean',
            'store_heading' => 'nullable|string|max:255',
            'store_short_description' => 'nullable|string',
            'facebook' => 'nullable|string',
            'pinterest' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string',
            'google_plus' => 'nullable|string',
            'android' => 'nullable|string',
            'ios' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $imageName = null;
        if ($request->hasFile('store_image')) {
            $image = $request->file('store_image');

            $imageName = Str::lower(time().'_'.$image->getClientOriginalName());

            // ✅ Save to storage/app/public/images/stores
            $image->storeAs('public/images/stores', $imageName);
        }

        // ✅ 3. Insert Data
        DB::table('tblstores')->insert([
            'name' => $request->store_name,
            'long_desc' => $request->store_long_description,
            'store_url' => $request->store_slug,
            'tracking_url' => $request->store_tracking_url,
            'direct_url' => $request->direct_url,
            'meta' => $request->meta_title,
            'meta_des' => $request->meta_desc,
            'meta_key' => $request->meta_key,
            'meta_date' => $request->meta_date ?? 0,
            'img' => $imageName,
            'img_alt' => $request->image_alt,
            'banner_img' => $request->banner_image,
            'Category' => implode(',', $request->store_category),
            'enterby' => auth()->user()->name ?? 'admin',
            'status' => 1,
            'heading' => $request->store_heading,
            'short_desc' => $request->store_short_description,
            'publish_date' => now()->format('F y j'),
            'top' => $request->top ?? 0,
            'for_sitemap' => $request->for_sitemap ?? 0,
            'views' => 100,
            'facebook' => $request->facebook,
            'pinterest' => $request->pinterest,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'google' => $request->google_plus,
            'android' => $request->android,
            'ios' => $request->ios,
        ]);

        // ✅ 4. Response
        return redirect()
            ->back()
            ->with('success', 'Store added successfully!');
    }

    public function destroy($id)
    {
        Stores::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Store Deleted');
    }

    public function editForm()
    {
        $stores = Stores::orderBy('name', 'asc')->get();

        return view('admin.store.edit', compact('stores'));
    }

    public function edit($id)
    {
        $store = Stores::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();

        return view('admin.store.editform', compact('store', 'categories'));
    }

    public function update(Request $request)
    {
        $store = Stores::findOrFail($request->store_id);

        // Validation
        $request->validate([
            'store_name' => 'required|string|max:255',
            'store_short_description' => 'nullable|string',
            'store_long_description' => 'nullable|string',
            'store_image_update' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // add more validation rules as needed
        ]);

        // Update fields
        $store->name = $request->store_name;
        $store->store_url = $request->store_url;
        $store->heading = $request->heading;
        $store->Category = implode(',', $request->category_store ?? []);
        $store->season = implode(',', $request->season_store ?? []);
        $store->short_desc = $request->store_short_description;
        $store->long_desc = $request->store_long_description;
        $store->meta = $request->meta_title;
        $store->meta_des = $request->meta_desc;
        $store->amp_meta_desc = $request->meta_desc_amp;
        $store->top = $request->top ? 1 : 0;
        $store->meta_date = $request->meta_date ? 1 : 0;
        $store->for_sitemap = $request->for_sitemap ? 1 : 0;

        // Links
        $links = ['facebook', 'pinterest', 'twitter', 'instagram', 'youtube', 'google', 'android', 'ios'];
        foreach ($links as $link) {
            $store->$link = $request->$link;
        }

        // Handle image upload
        if ($request->hasFile('store_image_update')) {
            $file = $request->file('store_image_update');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs('public/store_images', $filename);
            $store->img_alt = $request->image_alt;
            $store->store_image = $filename; // field name in DB
        }

        $store->save();

        return response()->json(['success' => true]);
    }
}
