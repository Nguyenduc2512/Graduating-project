<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    	$kw = $request->searchword;
		$productSearch = Product::where('name', 'like', "%$kw%")->paginate(9);	
		$productSearch->withPath("?searchword=$kw");
		return view ('client/search', compact('productSearch', 'kw'));
    }
}
