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
        return view('admin/layouts/main');
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
