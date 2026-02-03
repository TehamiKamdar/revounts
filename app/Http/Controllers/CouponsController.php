<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use App\Models\Coupons;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function index(){
        return view('pages.coupons.index');
    }

    public function details($id){
        return view('pages.coupons.details');
    }

    public function fetch(){
        return view('admin.coupon.index', [
            'stores' => Stores::all(),
            'totalCoupons' => Coupons::count()
        ]);
    }
    public function byStore($store)
    {
        $coupons = $store === 'Select'
            ? Coupons::with('store')->get()
            : Coupons::with('store')->where('store', $store)->get();

        return response()->json($coupons);
    }

    public function destroy($id){
        Coupons::findOrFail($id)->delete();
        return response()->json([
            'success' => true,
            'message' => "Coupon Deleted"
        ]);
    }
}
