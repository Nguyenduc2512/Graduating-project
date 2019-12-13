<?php

namespace App\Http\Controllers\User;
use App\Http\Requests\AccountRequest;
use App\Models\Favorite;
use App\Services\AccountUserService;
use App\Services\CartService;
use App\Services\OrderService;
use App\Services\UserService;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\SlideShow;
use App\Models\User;
use App\Http\Requests\CustomerRequest;
use Hash;
use App\Models\Web_Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $accountUserService;
    protected $cartService;
    protected $userService;
    protected $orderService;

    public function __construct(CartService $cartService,
                                OrderService $orderService,
                                UserService $userService,
                                AccountUserService $accountUserService)
    {
        $this->accountUserService = $accountUserService;
        $this->cartService =$cartService;
        $this->userService =$userService;
        $this->orderService = $orderService;
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        $count = count($this->cartService->countCartUser());
     return view('client/editcustomer', compact('profile', 'count'));
    }
    public function editProfile(CustomerRequest $request )
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        if ($request->hasFile('avatar')) {
    		$filename = $request->avatar->getClientOriginalName();
        	$filename = str_replace(' ', '-', $filename);
        	$filename = uniqid() . '-' . $filename;
            $path = $filename;
            $user->avatar = request()->avatar->move('images/avatar', $path);
        }else{
        	$request->avatar = $user->avatar;
        }
        $user->password = Hash::make($request->password);
        $user->fill($request->all());
        $user->save();
     return redirect()->back()->with('msg', 'Bạn đã sửa tài khoản thành công!');
    }

    public function login()
    {
        $showModal = true;
        $showModalSignup = false;
        $productsNew = Product::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::where('status', 1)->get();
        $slideshow = SlideShow::where("status", 1)->get();
        $webs = Web_Setting::first();
        return view('client/index', compact('showModal','webs','productsNew', 'brands', 'productsMost', 'slideshow', 'showModalSignup'));

    }

    public function newAccount(AccountRequest $request)
    {
        $newAccount = $this->accountUserService->newAccount($request);
        return redirect()->route('login')->with(['success' => 'Đăng ký thành công']);

    }

    public function signUpFalse()
    {
        $showModal = false;
        $showModalSignup = true;
        $productsNew = Product::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::where('status', 1)->get();
        $slideshow = SlideShow::where("status", 1)->get();
        $webs = Web_Setting::first();
        return view('client/index', compact('showModalSignup','webs','productsNew', 'brands', 'productsMost', 'slideshow', 'showModal'));
    }

    public function history()
    {
        $carts = $this->cartService->getListCart();
        $orders = $this->orderService->getOrder();
        $count = count($carts);
        $all_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $all_price = $all_price + $price;
            }
        }
        return view('client/listcart', compact('carts', 'count', 'all_price', 'orders'));
    }

    public function favorite()
    {
        if (Auth::user()) {
            $carts = $this->cartService->getListCart();
            $count = count($carts);
            $favorites = Favorite::where('user_id', Auth::id())->get();
            return view('client/favorite', compact('count',  'favorites'));
        }
    }

    public function addToFavorite($id)
    {
        $favorite = $this->userService->addToFavorite($id);

        return redirect()->route('member.favorite');
    }
}
