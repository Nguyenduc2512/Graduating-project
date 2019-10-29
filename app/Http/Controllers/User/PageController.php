<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use DB;

class PageController extends Controller
{
    public function index() {
        $showModal = false;
        $productNew = DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
        $productMost = DB::table('products')->orderBy('id', 'desc')->limit(8)->get();   
        $brands = Brand::all();
        return view('client/index', compact('showModal', 'productNew', 'brands', 'productMost'));
    }

    public function search(Request $request)
    {
        $kw = $request->searchword;
        $productSearch = Product::where('name', 'like', "%$kw%")->paginate(9);  
        $productSearch->withPath("?searchword=$kw");
        return view ('client/search', compact('productSearch', 'kw'));
    }

    public function listCart() {
        if (Auth::user()) {
            $showModal = false;
        }
            $showModal = true;
        return view('client/index', compact('showModal'));
    }

    public function abc(Request $request) {
        dd($request);
    }
}
