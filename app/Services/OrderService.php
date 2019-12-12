<?php


namespace App\Services;


use App\Models\Cart;
use App\Models\Order;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use App\Mail\OrderMail;
use Mail;

class OrderService
{
    public function order(Request $request)
    {
        $order = new Order();
        $permitted_chars ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code_order = substr(str_shuffle($permitted_chars), 0, 6);
        $data = [
            'user_id' => Auth::user()->id,
            'promo'   => $request->code_promo,
            'total_price' => $request->total_price,
            'code_order' => $code_order,
            'location' => $request->location,
        ];
        $order->fill($data);
        $order->save();
        $request->request->add(['order_id' => $order->id]);
        $id=DB::getPdo()->lastInsertId();
        $user = User::find(Auth::user()->id);
        $orderMail = Order::find($id);
        Mail::to($user)->send(new OrderMail($orderMail));

    }

    public function getOrder()
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
         return $order;
    }

    public function removeOrder($id)
    {
        $order = Order::find($id);
        $order->status = 7;
        $order->save();
    }

    public function findProperties(Request $request)
    {
        $properties = Properties::where('product_id', $request->product_id_order)->where('color_id', $request->color_id_order)->where('size', $request->size_order)->first();
        return $properties;
    }

    public function orderDetail($id)
    {
        $order = Cart::where('order_id', $id)->get();
        return $order;
    }

    public function getOrderDetail($id)
    {
        $order = Order::find($id);
        return $order;
    }

}
