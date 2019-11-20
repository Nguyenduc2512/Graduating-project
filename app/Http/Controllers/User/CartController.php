<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Properties;
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
}
