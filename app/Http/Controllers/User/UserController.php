<?php

namespace App\Http\Controllers\User;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slide;
use App\Models\User;
use App\Http\Requests\CustomerRequest;
use Hash;
use App\Models\Web_Setting;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        $productsNew = Product::orderBy('created_at', 'desc')->limit(8)->get();
        $productsMost = Product::orderBy('id', 'desc')->limit(8)->get();
        $brands = Brand::all();
        $slides = Slide::all();
        $webs = Web_Setting::first();
        return view('client/index', compact('showModal','webs', 'productsNew', 'brands', 'productsMost', 'slides'));
    }

}
