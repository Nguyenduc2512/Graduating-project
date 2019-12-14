<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use App\Services\PropertiesService;
use App\Services\UserService;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\DeliveryBrand;
use App\Http\Requests\DeliveryCartRequest;

class CartController extends Controller
{
    protected $cartService;
    protected $userService;
    protected $propertiesService;
    public function __construct( CartService $cartService,
                                PropertiesService $propertiesService,
                                UserService $userService)
    {
        $this->cartService = $cartService;
        $this->userService = $userService;
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
        $user = $this->userService->updateRole($id);

        return redirect()->route('admin.list_cart');
    }

    public function accept($id)
    {
        $cart = $this->cartService->accept($id);
        $user = $this->userService->updateRole($id);

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

    public function listShip()
    {
        $orders = $this->cartService->getListShip();

        return view('admin/cart/list_ship', compact('orders'));

    }

    public function listCartInsert()
    {
        $bills = $this->cartService->getListBill();

        return view('admin/cart_insert/index', compact('bills'));
    }

    public function detailCartInsert($id)
    {
        $bills = $this->propertiesService->getPropertiesBill($id);

        return view('admin/cart_insert/detail', compact('bills'));
    }
}
