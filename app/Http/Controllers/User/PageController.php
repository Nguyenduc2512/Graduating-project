<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Item;
use App\Models\Comment;
use App\Models\Slide;
use DB;

class PageController extends Controller
{
    public function index() {
        $showModal = false;
        $productNew = DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
        $productMost = DB::table('products')->orderBy('id', 'desc')->limit(8)->get();   
        $brands = Brand::all();
        $slide = Slide::all();
        return view('client/index', compact('showModal', 'productNew', 'brands', 'productMost', 'slide'));
    }

    public function search(Request $request)
    {
        $kw = $request->searchword;
        $productSearch = Product::where('name', 'like', "%$kw%")->paginate(9);  
        $productSearch->withPath("?searchword=$kw");
        return view ('client/search', compact('productSearch', 'kw'));
    }

    public function comment(Request $request)
    {
        $model = new Comment();
        $model->fill($request->all());
        $model->save();
        return redirect()->back();
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $cate_id = $product->category_id;
        $item = DB::table('items')->where('product_id', '=', "$id")->get();
        $productCategory = DB::table('products')->whereNotIn('id', [1])->where('category_id', '=', "$cate_id")->get();
        $comment = Comment::where('product_id', $id)->get();
        if(!$product){
            return redirect(route('home'));
        }
        return view ('client/detail-product', compact('product', 'productCategory', 'item', 'comment'));
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
