<?php
namespace App\Services;
use App\Models\Cart;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

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
             $cart->order_id = $request->order_id;
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
         $order = Order::find($id);
         //$order->status = 4 ~ decline cart
         $order->status = 4;
         $order->save();
     }

     public function accept($id)
     {
         $order = Order::find($id);
         //$order->status = 2 ~ decline cart
         $order->status = 2;
         $order->save();

     }

     public function newOrder(Request $request)
     {
         $cart = new Cart();
         $data = [
             'user_id' => $request->user_id,
             'properties_id' => $request->properties_id,
             'amount' => $request->amount,
             'status' => $request->status,
             'order_id' => $request->order_id,
         ];
         $cart->fill($data);
         $cart->save();
     }
     public function addDelivery(Request $request,$id)
     {
         $order = Order::find($id);
         //$cart->status = 2 ~ decline cart
         $order->status = 4;
         $order->delivery = $request->delivery_id;
         $order->save();

     }

     public function getListOrder()
     {
         $order = Order::all();
         return $order;
     }

     public function getDetailOrder($id)
     {
         $order = Cart::where('order_id', $id)->get();
         return $order;
     }
 }
 //Đọc comment
// status = 1 : Đã đặt
// status = 2 : xác nhận
// status = 3 : Từ chối
// status = 4 : Đang giao
// status = 5 : Thành công
// status = 6 : Giao không thành công
