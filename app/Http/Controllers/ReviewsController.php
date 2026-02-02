<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Stores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('pages.reviews.index');
    }

    public function details($id)
    {
        return view('pages.reviews.details');
    }

    public function create()
    {
        $stores = Stores::orderBy('name', 'asc')->get();

        return view('admin.review.create', compact('stores'));
    }

    public function fetch()
    {
        $reviews = Review::all();

        return view('admin.review.index', compact('reviews'));
    }

    public function destroy($id)
    {
        Review::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Review Deleted',
        ]);
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
            'r_product' => 'required|string|max:255',
            'r_slug' => 'required|string|max:255|unique:review,slug',
            'r_store' => 'required|exists:tblstores,id',
            'r_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = [
            'product'         => $request->r_product,
            'slug'            => $request->r_slug,
            'store_id'        => $request->r_store,
            'short_desc'      => $request->r_short_description,
            'long_desc'       => $request->r_description,
            'img_alt'         => $request->img_alt,
            'meta_title'      => $request->r_meta_title,
            'meta_desc'       => $request->r_meta_desc,
            'featured'        => $request->r_feature ?? 0,
            'product_review'  => $request->product_review ?? 0,
            'editor_choice'   => $request->editor_choice ?? 0,
            'is_draft'        => $request->is_draft ?? 0,
            'date'            => $request->date,
            'created_at'      => now(),
            'updated_at'      => now(),
        ];

        // image upload
        if ($request->hasFile('r_image')) {
            $image = $request->file('r_image');
            $name  = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('uploads/reviews'), $name);
            $data['img'] = $name;
        }

        /* ===============================
        DRAFT CASE
        =============================== */
        if ($request->is_draft == 1) {

            DB::table('review_draft')->insert($data);

            return redirect()
                ->back()
                ->with('success', 'Review saved as draft');
        }

        /* ===============================
        PUBLISHED CASE
        =============================== */
        Review::create($data);

        return redirect()
            ->back()
            ->with('success', 'Review published successfully');
        }catch(\Exception $e){
            return redirect()
            ->back()
            ->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $stores = Stores::all();
        $review = Review::findOrFail($id)->first();

        // return $review;
        return view('admin.review.edit', compact('review', 'stores'));
    }

    public function update(Request $request)
    {
        try {
            $data = [
                'product' => $request->r_product,
                'slug' => $request->r_slug,
                'store_id' => $request->r_store,
                'short_desc' => $request->r_short_description,
                'long_desc' => $request->r_description,
                'img_alt' => $request->img_alt,
                'meta_title' => $request->r_meta_title,
                'meta_desc' => $request->r_meta_desc,
                'featured' => $request->r_feature ?? 0,
                'product_review' => $request->product_review ?? 0,
                'editor_choice' => $request->editor_choice ?? 0,
                'is_draft' => $request->is_draft ?? 0,
                'date' => $request->date,
            ];

            // image upload (same for both)
            if ($request->hasFile('r_image')) {
                $image = $request->file('r_image');
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/reviews'), $name);
                $data['image'] = $name;
            }

            /* ===============================
               DRAFT CASE
               =============================== */
            if ($request->is_draft == 1) {

                DB::table('review_draft')->insert(array_merge($data, [
                    'review_id' => $request->review_id,
                    'created_at' => now(),
                ]));

                return redirect()
                    ->back()
                    ->with('success', 'Review saved as draft');
            }

            /* ===============================
               PUBLISHED CASE
               =============================== */
            $review = Review::findOrFail($request->review_id);
            $review->update($data);

            return redirect()
                ->back()
                ->with('success', 'Review updated successfully');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', $e->getMessage());
        }
    }
}
