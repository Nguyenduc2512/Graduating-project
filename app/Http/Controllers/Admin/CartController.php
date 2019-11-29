<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    public function __construct( CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $carts = $this->cartService->getAllCart();
        return view('admin/cart/index', compact('carts'));
    }

    public function decline($id)
    {
        $cart = $this->cartService->decline($id);

        return redirect()->route('admin.list_cart');
    }

    public function accept($id)
    {
        $cart = $this->cartService->accept($id);

        return redirect()->route('admin.list_cart');
    }

    public function editProduct()
    {
        return view('admin/product/edit');
    }
}
