<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DeliveryBrand;
use App\Http\Requests\DeliveryCartRequest;

class CartController extends Controller
{
    protected $cartService;
    public function __construct( CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $orders = $this->cartService->getListOrder();
        return view('admin/cart/index', compact('orders'));
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

    public function delivery($id)
    {
        $cart = Order::find($id);
        $delivery = DeliveryBrand::where('status','1')->get();
        return view('admin/cart/delivery', compact('delivery','cart'));
    }

    public function addDelivery($id,DeliveryCartRequest $request)
    {
        $cart = $this->cartService->addDelivery($request, $id);
        return redirect()->route('admin.list_cart');
    }

    public function detail($id)
    {
        $order = $this->cartService->getDetailOrder($id);
        return view('admin/cart/detailcart', compact('order'));
    }
}
