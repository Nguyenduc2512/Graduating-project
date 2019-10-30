<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Web_setting;
use DB;

class PageController extends Controller
{
    public function index() {
        $showModal = false;
        $productNew = DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
        $productMost = DB::table('products')->orderBy('id', 'desc')->limit(8)->get();   
        $brands = Brand::all();
        $slide = Slide::all();
        $web = Web_setting::first();
        return view('client/index', compact('showModal','web', 'productNew', 'brands', 'productMost', 'slide',));
    }

    public function search(Request $request)
    {
        $kw = $request->searchword;
        $brandSearch = Brand::where('name', 'like', "%$kw%")->first();
        $id = $brandSearch->id;
        $productSearch = $brandSearch->product->where('brand_id', $id);
        if(count($productSearch) == 0){
            $msg="Không tìm thấy Kết quả cho: ".$kw;
        }
        else{
            $msg="Kết quả tìm kiếm cho: ".$kw;
        }
//        $productSearch->withPath("?searchword=$kw");
        return view ('client.search', compact('productSearch', 'msg', 'web',));
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
