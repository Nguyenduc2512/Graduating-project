<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Services\OrderService;
use App\Services\PropertiesService;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Models\Product;
use App\Models\SlideShow;
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
use phpDocumentor\Reflection\Types\Object_;

class PageController extends Controller
{
    protected $cartService;
    protected $propertiesService;
    protected $orderService;
    public function __construct(CartService $cartService,
                                PropertiesService $propertiesService,
                                OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->propertiesService = $propertiesService;
        $this->orderService = $orderService;
    }

    public function index() {
        $showModal = false;
        $showModalSignup = false;
        $productsNew = Product::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::where('status', 1)->get();
        $count = count($this->cartService->countCartUser());
        $slideshow = SlideShow::where("status", 1)->get();
        return view('client/index', compact('showModal', 'productsNew', 'brands', 'productsMost', 'slideshow', 'showModalSignup', 'count'));
    }

    public function detail($id)
    {
        $colors = array();
        $sizes = array();
        $color_size = array();
        $product = Product::find($id);
        $count = count($this->cartService->countCartUser());
        $productStatus = Product::where('id', $id)->where('status', 1)->get();
        if(!$product || count($productStatus) == 0){
            return redirect(route('home'));
        }
        $cate_id = $product->category_id;
        $properties = $this->propertiesService->getPropertiesProduct($id);
        foreach ($properties as $property) {
            $proper_color = new Properties();
            $color = $property->getAttribute("color_id");
            $proper_color->color_id = $color;
            if (!in_array($proper_color, $colors)) {
                array_push($colors, $proper_color);
            }
        }
        foreach ($properties as $property) {
            $size = $property->getAttribute("size");
                array_push($sizes, $size);
        }
        foreach ($properties as $property) {
            $sizes = array();
            $proper = new Properties();
            $color = $property->getAttribute("color_id");
                $proper->color_id = $color;
            array_push($color_size, $proper);
            foreach ($properties as $property) {
                $size = $property->getAttribute("size");
                if ($property -> color_id == $color) {
                    array_push($sizes, $size);
                }
            }
            $proper->size = $sizes;
        }
        $productCategory = DB::table('products')->where('status', 1)->whereNotIn('id', [$id])->where('category_id', '=', "$cate_id")->get();
        $comment = Comment::where('product_id', $id)->limit(5)->orderBy('created_at', 'ASC')->get();
        return view ('client/detail-product', compact('product', 'productCategory', 'comment','properties','colors', 'sizes', 'color_size', 'count'));
    }

    public function proDetail(Request $request)
    {
        $id = $request->id;
        $color = $request->color;
        if($color!=""){
            $sizes = DB::table('properties')
            ->where('product_id', '=', "$id")
            ->where('color_id', '=', "$color")
            ->get();

        }
        else{
            $sizes = [];
        }

        return view('client/prosize', ['sizes' => $sizes,]);

    }


    public function cate(Request $request,$id)
    {
        $productcate = Product::where('category_id', $id)->where('status', 1)->paginate(6);
        $category = Category::withCount(['products'])->get();
        $count = count($this->cartService->countCartUser());
        return view('client/cate', compact('productcate','category', 'count','id'));
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax()){
        $id = $request->id;
        $brand_id = $request->brand_id;
        $se = $request->se;

        if($brand_id!="" && $se!=""){
            switch ($se) {
            case 'new':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('created_at', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'asc':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('price', 'asc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'desc':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('price', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            }
        
        }
        else if($brand_id!=""){
            $productcate = Product::where('category_id', $id)
                        ->whereIn('brand_id', explode(",", $brand_id))
                        ->where('status', 1)
                        ->paginate(6);
        }
        else if($se!=""){
            switch ($se) {
            case 'new':
                $productcate = Product::where('category_id', $id)
                ->orderBy('created_at', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'asc':
                $productcate = Product::where('category_id', $id)
                ->orderBy('price', 'asc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'desc':
                $productcate = Product::where('category_id', $id)
                ->orderBy('price', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            }
        }
        else{
            $productcate = Product::where('category_id', $id)->where('status', 1)->paginate(6);
        }
            }
            
        return view('client/procate', compact('productcate'));
     }


    public function proCate(Request $request){
        $id = $request->id;
        $brand_id = $request->brand_id;
        $se = $request->se;

        if($brand_id!="" && $se!=""){
            switch ($se) {
            case 'new':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('created_at', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'asc':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('price', 'asc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'desc':
                $productcate = Product::where('category_id', $id)
                ->whereIn('brand_id', explode(",", $brand_id))
                ->orderBy('price', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            }
        
        }
        else if($brand_id!=""){
            $productcate = Product::where('category_id', $id)
                        ->whereIn('brand_id', explode(",", $brand_id))
                        ->where('status', 1)
                        ->paginate(6);
        }
        else if($se!=""){
            switch ($se) {
            case 'new':
                $productcate = Product::where('category_id', $id)
                ->orderBy('created_at', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'asc':
                $productcate = Product::where('category_id', $id)
                ->orderBy('price', 'asc')
                ->where('status', 1)
                ->paginate(6);
                break;
            case 'desc':
                $productcate = Product::where('category_id', $id)
                ->orderBy('price', 'desc')
                ->where('status', 1)
                ->paginate(6);
                break;
            }
        }
        else{
            $productcate = Product::where('category_id', $id)->where('status', 1)->paginate(6);
        }

        return view('client/procate', compact('productcate'));
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
        $count = count($this->cartService->countCartUser());
        return view('client/contact', compact('webs', 'count'));
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
        $count = count($this->cartService->countCartUser());
        $brandSearch = Brand::where('name', 'like', "%$kw%");
        dd($brandSearch);
        if ($brandSearch) {
            $id = $brandSearch->id;
            $productSearch = $brandSearch->product->where('brand_id', $id);
        } else {
            $id = null;
            $productSearch = $brandSearch->product->where('brand_id', $id);
        }
        if(count($productSearch) == 0){
            $msg="Không tìm thấy Kết quả cho: ".$kw;
        }
        else{
            $msg="Kết quả tìm kiếm cho: ".$kw;
        }
        return view ('client.search', compact('productSearch', 'msg', 'count'));
    }

    public function showListCart() {
        if (Auth::user()) {
            $showModal = false;
            $show_order = false;
            $carts = $this->cartService->getListCart();
            $orders = $this->orderService->getOrder();
            $count = count($carts);
            $total_price = 0;
            foreach ($carts as $cart){
                if ($cart->status == 0) {
                    $price = $cart->properties->product->price * $cart->amount;
                    $total_price = $total_price + $price;
                }
            }
            return view('client/listcart', compact( 'carts', 'count', 'showModal', 'total_price', 'orders', 'show_order'));
        }
    }

    public function about()
    {
        $about = About::first();
        $count = count($this->cartService->countCartUser());
        $productsNew = Product::orderBy('created_at', 'desc')->where('status', 1)->limit(2)->get();
        return view('client/about', compact('about', 'productsNew', 'count'));
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
