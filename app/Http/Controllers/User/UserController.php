<?php

namespace App\Http\Controllers\User;
use App\Http\Requests\AccountRequest;
use App\Services\AccountUserService;
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

    public function __construct(AccountUserService $accountUserService)
    {
        $this->accountUserService = $accountUserService;
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
     return view('client/editcustomer', compact('profile'));
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
}
