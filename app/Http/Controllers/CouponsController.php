<?php

namespace App\Http\Controllers;

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
        $coupons = Coupons::all();
        return view('admin.coupon.index', compact('coupons'));
    }
}
