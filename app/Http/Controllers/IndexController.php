<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use DB;

class IndexController extends Controller
{
    public function index()
    {
    	$productNew = DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
    	$productMost = DB::table('products')->orderBy('id', 'desc')->limit(8)->get();	
		$brands = Brand::all();
	return view ('client/index', compact('productNew', 'brands', 'productMost'));
    }
}
