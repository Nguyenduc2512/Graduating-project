<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\PropertiesService;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DeliveryBrand;

class CartController extends Controller
{
    protected $cartService;
    protected $propertiesService;
    public function __construct( CartService $cartService,
                                PropertiesService $propertiesService)
    {
        $this->cartService = $cartService;
        $this->propertiesService = $propertiesService;
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
        $properties = $this->propertiesService->reduction($id);

        return redirect()->route('admin.list_cart');
    }

    public function delivery($id)
    {
        $cart = Order::find($id);
        $delivery = DeliveryBrand::all();
        return view('admin/cart/delivery', compact('delivery','cart'));
    }

    public function addDelivery($id,Request $request)
    {
        $cart = $this->cartService->addDelivery($request, $id);
        return redirect()->route('admin.list_cart');
    }

    public function detail($id)
    {
        $order = $this->cartService->getDetailOrder($id);
        return view('admin/cart/detailcart', compact('order'));
    }

    public function listShip()
    {
        $orders = $this->cartService->getListShip();

        return view('admin/cart/list_ship', compact('orders'));

    }
}
