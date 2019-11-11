<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $memberService;
    public function __construct(CustomerService $memberService)
    {
        $this->memberService = $memberService;
    }

    public function index()
    {
        $members = $this->memberService->getAllMember();
        $counts = $this->memberService->countSell();

        return view('admin/customer/index', compact('members', 'counts'));
    }

    public function block($id)
    {
        $member = $this->memberService->block($id);

        return $this->index();
    }

    public function unblock($id)
    {
        $member = $this->memberService->unblock($id);

        return $this->index();
    }

}
