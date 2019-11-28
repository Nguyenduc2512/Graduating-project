<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use App\Models\SlideShow;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addItem(Request $request)
    {
        $properties = $this->cartService->findProperties($request);

        return redirect()->route('member.list_cart');

    }

    public function removeItem($id)
    {
        $cart = $this->cartService->removeItem($id);
        return redirect()->route('member.list_cart');
    }

    public function order(Request $request)
    {
        $cart = $this->cartService->order($request);
        $slideshows = SlideShow::all();
        $carts = $this->cartService->getListCart();
        $count = count($carts);
        $total_price = 0;
        foreach ($carts as $cart){
            if ($cart->status == 0) {
                $price = $cart->properties->product->price * $cart->amount;
                $total_price = $total_price + $price;
            }
        }
        return view('client/listcart', compact('slideshows', 'carts', 'count', 'showModal', 'total_price'));
    }
}
