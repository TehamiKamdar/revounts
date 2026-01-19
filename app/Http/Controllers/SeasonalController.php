<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeasonalController extends Controller
{
    public function index(){
        return view('pages.seasonal.index');
    }
}
