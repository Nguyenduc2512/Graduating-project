<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Properties;
use DB;

class PageController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index() {
        $showModal = false;
        $productsNew = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::all();
        $slides = Slide::all();
        return view('client/index', compact('showModal', 'productsNew', 'brands', 'productsMost', 'slides'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect(route('home'));
        }
        $cate_id = $product->category_id;
        $size = DB::table('properties')->where('product_id', '=', "$id")->get();
        $color = DB::table('colors')
            ->join('properties', 'colors.id', '=', 'properties.color_id')
            ->where('product_id', '=', "$id")
            ->get();
        $productCategory = DB::table('products')->whereNotIn('id', [$id])->where('category_id', '=', "$cate_id")->get();
        $comment = Comment::where('product_id', $id)->get();
        return view ('client/detail-product', compact('product', 'productCategory', 'size', 'comment','color'));
    }

    public function comment(Request $request)
    {
        $model = new Comment();
        $model->fill($request->all());
        $model->save();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $kw = $request->keyWord;
        $brandSearch = Brand::where('name', 'like', "%$kw%")->first();
        $id = $brandSearch->id;
        $productSearch = $brandSearch->product->where('brand_id', $id);
        if(count($productSearch) == 0){
            $msg="Không tìm thấy Kết quả cho: ".$kw;
        }
        else{
            $msg="Kết quả tìm kiếm cho: ".$kw;
        }
        return view ('client.search', compact('productSearch', 'msg'));
    }

    public function showListCart() {
        if (Auth::user()) {
            $showModal = false;
            $slides = Slide::all();
            $carts = $this->cartService->getListCart();
            $count = count($carts);
            return view('client/listcart', compact('slides', 'carts', 'count', 'showModal'));
        }
            $showModal = true;
            $productsNew = Product::orderBy('created_at', 'desc')->limit(8)->get();
            $productsMost = Product::orderBy('id', 'desc')->limit(8)->get();
            $brands = Brand::all();
            $slides = Slide::all();
            return view('client/index', compact('showModal', 'productsNew', 'brands', 'productsMost', 'slides'));
    }

}
