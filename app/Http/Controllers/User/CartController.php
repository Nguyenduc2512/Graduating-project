<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartRequest;
use App\Http\Requests\OrderRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Properties;
use App\Models\SlideShow;
use App\Services\CartService;
use App\Services\OrderService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    protected $orderService;
    protected $productService;
    public function __construct(CartService $cartService,
                                ProductService $productService,
                                OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->productService = $productService;
    }

    public function addItem(CartRequest $request)
    {
        $properties = $this->cartService->findProperties($request);

        return redirect()->route('member.list_cart');

    }

    public function removeOrder($id)
    {
        $cart = $this->orderService->removeOrder($id);
        return redirect()->route('member.list_cart');
    }
 
    public function removeItem($id)
    {
        $cart = $this->cartService->removeItem($id);
        return redirect()->route('member.list_cart');

    }

    public function order(Request $request)
    {
        $order = $this->orderService->order($request);
        $cart = $this->cartService->order($request);
        $slideshows = SlideShow::all();
        $carts = $this->cartService->getListCart();
        $orders = $this->orderService->getOrder();
        $count = count($carts);
        $showModal = false;
        $total_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $total_price = $total_price + $price;
            }
        }
        return redirect()->back()->with('msg', 'h');
    }

    public function showFormOrder(OrderRequest $request)
    {
        $showModal = false;
        $showModalSignup = false;
        $properties = $this->orderService->findProperties($request);
        $amount = $request->amount_order;
            $brands = Brand::where('status', 1)->get();
        $count = count($this->cartService->countCartUser());
        return view('client/order', compact('showModal', 'brands', 'showModalSignup', 'count', 'properties', 'amount'));
    }

    public function newOrder(Request $request)
    {
        $showModal = false;
        $order = $this->orderService->order($request);
        $cart = $this->cartService->newOrder($request);
        $slideshows = SlideShow::all();
        $carts = $this->cartService->getListCart();
        $orders = $this->orderService->getOrder();
        $count = count($carts);
        $total_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $total_price = $total_price + $price;
            }
        }
        $msg="0";
        return redirect()->route('member.list_cart')->with('msg','h');

    }
}
