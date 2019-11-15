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
use App\Models\About;
use App\Models\Web_Setting;
use App\Models\Contact;
use App\Models\Promo;
use App\Models\Reply_Comment;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\DetailProductRequest;
use Carbon\Carbon;
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
        $productsNew = Product::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::where('status', 1)->get();
        $slides = Slide::all();
        return view('client/index', compact('showModal', 'productsNew', 'brands', 'productsMost', 'slides'));
    }

    public function detail($id)
    {
        $product = Product::find($id);
        $productStatus = Product::where('id', $id)->where('status', 1)->get();
        if(!$product || count($productStatus) == 0){
            return redirect(route('home'));
        }
        $cate_id = $product->category_id;
        $size = DB::table('properties')->where('product_id', '=', "$id")->get();
        $color = DB::table('colors')
            ->join('properties', 'colors.id', '=', 'properties.color_id')
            ->where('product_id', '=', "$id")->distinct()
            ->get();
        $productCategory = DB::table('products')->where('status', 1)->whereNotIn('id', [$id])->where('category_id', '=', "$cate_id")->get();
        $comment = Comment::where('product_id', $id)->limit(5)->orderBy('created_at', 'ASC')->get();
        return view ('client/detail-product', compact('product', 'productCategory', 'size', 'comment','color'));
    }

    public function cate($id)
    {
        $productcate = Product::where('category_id', $id)->where('status', 1)->paginate(3);
        $category = Category::withCount(['products'])->get(); 
        return view('client/cate', compact('productcate','category'));
    }

    public function comment(Request $request)
    {
        $model = new Comment();
        $model->fill($request->all());
        $model->save();
        return redirect()->back();
    }

    public function contact()
    { 
        $webs = Web_Setting::first();
        return view('client/contact', compact('webs'));
    }

    public function addcontact(ContactRequest $request)
    { 
        $model = new Contact();
        $model->fill($request->all());
        $model->save();
        return redirect()->back()->with('msg', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
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

    public function about()
    {
        $about = About::first();
        $productsNew = Product::orderBy('created_at', 'desc')->where('status', 1)->limit(2)->get();
        return view('client/about', compact('about', 'productsNew')); 
    }
    public function promo(Request $request)
    {
        $code = $request->code;
        $role = $request->role;
        $promo = Promo::where('code', 'like', "$code")->first();
        $date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        if(!$promo){
            $request->session()->forget('coupon');
            return redirect()->back()->with('msg', 'Mã giảm giá không hợp lệ!');
        }
        elseif($promo->start_time > $date || $promo->end_time < $date) {
           $request->session()->forget('coupon');
           return redirect()->back()->with('msg', 'Mã giảm giá của bạn đã hết hạn!');
        }
        elseif ($role < $promo->role) {
            $request->session()->forget('coupon');
            return redirect()->back()->with('msg', 'Bạn không thể sử dụng mã giảm giá này!'); 
        }
        else{    
        session()->put('coupon', [
            'code' => $promo->code,
            'down' => $promo->down,
        ]);
            return redirect()->back()->with('msg', 'Nhập mã giảm giá thành công');
        }
    }
    public function replyComment(Request $request){
        $comment = new Reply_Comment();
        $data = [
            'content' => $request->content,
            'user_id' => $request->user_id,
            'comment_id' => $request->comment_id,
            'admin_id' => $request->admin_id,
        ];
        $comment->fill($data);
        $comment->save();
        return redirect()->back()->with('msg', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
    }
}
