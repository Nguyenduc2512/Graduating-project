<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SlideShow;
use App\Models\Web_Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request)
    {
        if (Auth::attempt(['email'   => $request->email,
            'password' => $request->password])) {
            return redirect('/');
        }
        return redirect()->route('login')->with(['false' => 'Sai tài khoản hoặc mật khẩu']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function loginAdminForm()
    {
        $slideshow = SlideShow::all();
        $webs = Web_Setting::first();
        return view('admin/layouts/form_login', compact('slideshow', 'webs'));
    }

    public function loginAdmin(Request $request)
    {
        if (Auth::guard('admins')->attempt(['email' => $request->email,
        'password' => $request->password])) {
            return redirect()->route('admin.adminHome');
        }
        return redirect()->route('login_admin');
    }

    public function logoutAdmin()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('login_admin');
    }

}
