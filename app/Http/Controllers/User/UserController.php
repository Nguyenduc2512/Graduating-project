<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Web_Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
     return view('client/editcustomer');
    }

    public function login()
    {
        $showModal = true;
        $productsNew = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::all();
        $slides = Slide::all();
        $webs = Web_Setting::first();
        return view('client/index', compact('showModal','webs', 'productsNew', 'brands', 'productsMost', 'slides'));
    }
}
