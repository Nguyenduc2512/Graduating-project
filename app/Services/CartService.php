<?php
namespace App\Services;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartService {
     public function getListCart()
     {
         $carts = Cart::where('user_id', Auth::id())->get();
         return $carts;
     }

 }
