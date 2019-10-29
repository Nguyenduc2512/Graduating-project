<?php
 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index() {
        $showModal = false;
        return view('client/index', compact('showModal'));
    }

    public function search(Request $request)
    {
        $kw = $request->searchword;
        $productSearch = Product::where('name', 'like', "%$kw%")->paginate(9);
        if(count($productSearch) == 0){
            $msg="Không tìm thấy Kết quả cho: ".$kw;
        }
        else{
            $msg="Kết quả tìm kiếm cho: ".$kw;   
        }
        $productSearch->withPath("?searchword=$kw");
        return view ('client.search', compact('productSearch', 'msg'));
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
