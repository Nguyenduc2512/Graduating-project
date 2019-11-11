<?php

namespace App\Http\Controllers\Admin;
use App\Services\ContactService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $contactService;
    public function __construct(contactService $contactService)
    {
        $this->contactService = $contactService;
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

}
