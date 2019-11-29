<?php
namespace App\Services;
use App\Models\Cart;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartService {
     public function getListCart()
     {
         $carts = Cart::where('user_id', Auth::id())->get();
         return $carts;
     }

     public function countCartUser()
     {
         $carts = Cart::where('user_id', Auth::id())->where('status', 0)->get();
         return $carts;
     }

     public function findProperties(Request $request)
     {
         $cart = new Cart;
         $properties = Properties::where('product_id', $request->product_id)->where('color_id', $request->color_id)->where('size', $request->size)->first();
         $data = [
             'user_id' => Auth::id(),
             'admin_id',
             'properties_id' => $properties->id,
             'amount' => $request->amount,
             'status' => 0,
         ];
         $cart->fill($data);
         $cart->save();

     }

     public function removeItem($id)
     {
         $cart = Cart::find($id);
         $cart->status = 3;
         $cart->save();
     }

     public function order(Request $request)
     {
         $amount = $request->amount;
         foreach ($request->cart_id as $id)
         {
             $cart = Cart::find($id);
             if($amount[$id] == null) {

             } else{
             $cart->amount = $amount[$id];
             }
             $cart->status = 1;
             $cart->save();
         }
     }

     public function getAllCart()
     {
         $cart = Cart::all();
         return $cart;
     }

     public function decline($id)
     {
         $cart = Cart::find($id);
         //$cart->status = 4 ~ decline cart
         $cart->status = 4;
         $cart->save();

     }

     public function accept($id)
     {
         $cart = Cart::find($id);
         //$cart->status = 2 ~ decline cart
         $cart->status = 2;
         $cart->save();

     }
 }
