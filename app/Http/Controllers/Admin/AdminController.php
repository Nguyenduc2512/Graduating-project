<?php

namespace App\Http\Controllers\Admin;
use App\Services\ContactService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $adminService;
    public function __construct(contactService $contactService)
    {
        $this->adminService = $contactService;
    }

    public function index() {
        return view('admin/layouts/main');
    }

    public function contact()
    {
       $contacts = $this->adminService->getContact();
        return view('admin/contact/index', compact('contacts'));
    }
}
