<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function index()
    {
        return view('pages.coupons.index');
    }

    public function details($id)
    {
        return view('pages.coupons.details');
    }

    public function fetch()
    {
        return view('admin.coupon.index', [
            'stores' => Stores::all(),
            'totalCoupons' => Coupons::count(),
        ]);
    }

    public function byStore($store)
    {
        $coupons = $store === 'Select'
            ? Coupons::with('store')->get()
            : Coupons::with('store')->where('store', $store)->get();

        return response()->json($coupons);
    }

    public function destroy($id)
    {
        Coupons::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Coupon Deleted',
        ]);
    }

    public function edit($id)
    {
        return view('admin.coupon.partials.edit-modal', [
            'coupon' => Coupons::findOrFail($id),
            'stores' => Stores::all(),
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'coupon_id' => 'required|exists:tblcoupon,id',
            'update_offer' => 'required|string|max:255',
            'update_offer_details' => 'nullable|string|max:255',
            'store' => 'required|exists:tblstores,id',
            'category' => 'required|exists:tblcategory,id',
            'coupon_image_update' => 'nullable|string|max:255',
            'update_offer_desc' => 'nullable|string',
            'update_tracking_url' => 'nullable|url|max:255',
            'update_expiry_date' => 'nullable|date',
            'update_code_type' => 'required|in:true,false',
            'update_code' => 'nullable|string|max:50',
            'featured' => 'nullable|boolean',
            'popular' => 'nullable|boolean',
            'store_feature' => 'nullable|boolean',
            'exp_chk' => 'nullable|boolean',
        ]);

        $coupon = Coupons::findOrFail($request->coupon_id);

        // Basic fields
        $coupon->name = $request->update_offer;
        $coupon->offer = $request->update_offer_details;
        $coupon->store = $request->store;
        $coupon->category = $request->category;
        $coupon->img = $request->coupon_image_update;
        $coupon->offer_desc = $request->update_offer_desc;
        $coupon->tracking_url = $request->update_tracking_url;
        $coupon->expdate = $request->update_expiry_date;

        // Code Type
        $coupon->chk_active = $request->update_code_type;
        if ($request->update_code_type === 'false') {
            $coupon->coupon_code = $request->update_code;
        } else {
            $coupon->coupon_code = null;
        }

        // Checkboxes (default 0 if not present)
        $coupon->featured = $request->has('featured') ? 1 : 0;
        $coupon->popular = $request->has('popular') ? 1 : 0;
        $coupon->store_feature = $request->has('store_feature') ? 1 : 0;
        $coupon->exp_chk = $request->has('exp_chk') ? 1 : 0;

        $coupon->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Coupon updated successfully',
        ]);
    }
}
