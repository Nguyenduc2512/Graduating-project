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
use App\Services\PromoService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    protected $orderService;
    protected $promoService;
    protected $productService;
    public function __construct(CartService $cartService,
                                ProductService $productService,
                                PromoService $promoService,
                                OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->promoService = $promoService;
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
        return redirect()->route('member.list_cart')->with('decline', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
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
        $promo = $this->promoService->usePromo($request);
        $slideshows = SlideShow::all();
        $carts = $this->cartService->getListCart();
        $orders = $this->orderService->getOrder();
        $count = count($carts);
        $showModal = false;
        $all_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $all_price = $all_price + $price;
            }
        }
        return redirect()->back()->with('cart', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
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
        $all_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $all_price = $all_price + $price;
            }
        }
        return redirect()->route('member.list_cart')->with('cart', 'Cảm ơn bạn đã liên hệ với chúng tôi!');
    }

    public function orderDetail($id)
    {
        $carts = $this->orderService->orderDetail($id);
        $order = $this->orderService->getOrderDetail($id);
        $count = count($carts);
        return view('client/detailorders', compact('carts', 'count', 'order'));
    }
}
