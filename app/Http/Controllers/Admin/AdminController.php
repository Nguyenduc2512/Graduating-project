<?php

namespace App\Http\Controllers\Admin;
use App\Services\ContactService;
use App\Services\AccountAdminService;
use App\Http\Requests\AccountAdminRequest;
use App\Services\WebSettingService;
use App\Services\AboutService;
use App\Services\UserService;
use App\Http\Requests\WebSettingRequest;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;
use App\Models\Web_Setting;
use App\Models\Category;
use App\Models\Promo;
use App\Models\Brand;
use App\Models\Order;
use App\Models\User;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Cart;
class AdminController extends Controller
{
    protected $contactService;
    protected $accountAdminService;
    protected $webSettingService;
    protected $userService;
    public function __construct(contactService $contactService,
                                AccountAdminService $accountAdminService,
                                WebSettingService $webSettingService,
                                AboutService $aboutService,
                                UserService $userService)
    {
        $this->contactService = $contactService;
        $this->accountAdminService = $accountAdminService;
        $this->webSettingService = $webSettingService;
        $this->aboutService = $aboutService;
        $this->userService = $userService;
    }

    public function index() {
    $range = \Carbon\Carbon::now(0)->subYears(0)->subMonths(0);
        $date_range1 = date_format($range,"m");
        
        $Promo= Promo::all();
        $orders= Order::where('status','2')->get();
        $brands= Brand::all();
        $comments= Comment::all();
        $contacts= Contact::all();
        $products = Product::all();
        $cates = Category::all();
        $web_settings = Web_Setting::all();
        foreach ($web_settings as $w) {
            $map = $w->map;
        }
        $ordersAmount = DB::table('carts')->whereIn('status',[1,2,3])->SUM('amount');
        $users = DB::table('users')
                    ->select(DB::raw('month(created_at) as getMonth'), DB::raw('COUNT(*) as value'))
                    ->where('updated_at', '>=', $date_range1)
                    ->groupBy('getMonth')
                    ->orderBy('getMonth', 'ASC')
                    ->get();
        foreach ($users as $u) {
            $us = $u->value;
        }
        
        $date_range = date_format($range,"Y");
        $orderMonth = DB::table('orders')
                    ->select(DB::raw('month(updated_at) as getMonth'), DB::raw('COUNT(*) as value'))
                    ->where('updated_at', '>=', $date_range)
                    ->groupBy('getMonth')
                    ->orderBy('getMonth', 'ASC')
                    ->get();
        foreach ($orderMonth as $d) {
        $hh[] = $d->getMonth;
        $dh[] = $d->value;
    }
        
     $data = Product::
       select(
        DB::raw('brand_id'),
        DB::raw('count(*) as number'))
       ->groupBy('brand_id')
       ->get();
    foreach ($data as $d) {
        $brandCount[] = $d->brand->name;
        $brandNumber[] = $d->number;
    }


        return view('admin/index',compact('brandCount','brandNumber','hh','dh','products','cates','us','comments','orders','contacts','map','ordersAmount','brands'));
    }

    public function contact()
    {
       $contacts = $this->contactService->getContact();
        return view('admin/contact/index', compact('contacts'));
    }

    public function removeContact($id)
    {
        $contact = $this->contactService->removeContact($id);

        return redirect()->route('admin.contact')->with(['success'=> 'Xóa thành công']);
    }
    public function listAdmin()
    {
       $admins = $this->accountAdminService->getAdmin();
        return view('admin/admin/index', compact('admins'));
    }
    public function  editFormAdmin($id) 
    {
        $admin = $this->accountAdminService->editFormAdmin($id);
        return view('admin/admin/edit', compact('admin'));
    }
    public function  editAdmin(AccountAdminRequest $request)
    {
        $admin = $this->accountAdminService->editAdmin($request);
        return redirect()->route('admin.list_admin')->with(['success'=> 'Sửa tài khoản thành công']);
    }
    public function listWeb()
    {
       $web = $this->webSettingService->getWeb();
        return view('admin/websetting/index', compact('web'));
    }
    public function  editFormWeb($id)
    {
        $web = $this->webSettingService->editFormWeb($id);
        return view('admin/websetting/edit', compact('web'));
    }
    public function  editWeb(WebSettingRequest $request)
    {
        $web = $this->webSettingService->editWeb($request);
        return redirect()->route('admin.list_web')->with(['success'=> 'Sửa tài khoản thành công']);
    }
    public function listUser()
    {
       $users = $this->userService->getUser();
        return view('admin/customer/index', compact('users'));
    }
    public function listAbout()
    {
       $about = $this->aboutService->getAbout();
        return view('admin/about/index', compact('about'));
    }
    public function  editFormAbout($id)
    {
        $about = $this->aboutService->editFormAbout($id);
        return view('admin/about/edit', compact('about'));
    }
    public function  editAbout(AboutRequest $request)
    {
        $web = $this->aboutService->editAbout($request);
        return redirect()->route('admin.list_about')->with(['success'=> 'Sửa giới thiệu thành công']);
    }
}
