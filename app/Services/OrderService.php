<?php


namespace App\Services;


use App\Models\Order;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    }

    public function getOrder()
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
         return $order;
    }

    public function removeOrder($id)
    {
        $order = Order::find($id);
        $order->status = 4;
        $order->save();
    }

    public function findProperties(Request $request)
    {
        $properties = Properties::where('product_id', $request->product_id_order)->where('color_id', $request->color_id_order)->where('size', $request->size_order)->first();
        return $properties;
    }

}
