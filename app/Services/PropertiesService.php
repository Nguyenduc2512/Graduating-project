<?php


namespace App\Services;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Properties;
use App\Models\Properties_Bill;
use Illuminate\Http\Request;

class PropertiesService
{
    public function addNewProperties(Request $request)
    {

        $product = Product::orderBy('id', 'desc')->first();
        $sizes = $request->size;
        foreach($request->color as $color) {
            foreach ($sizes[$color] as $size) {
                $properties = new Properties();
                $data = [
                    'product_id' => $product->id,
                    'color_id' => $color,
                    'size' => $size,
                    'amount' => 0
                ];
                $properties->fill($data);
                $properties->save();
            }
        }
    }

    public function getPropertiesProduct($id)
    {
        $properties = Properties::where('product_id', $id)->get();
        return $properties;
    }

    public function reduction(Request $request)
    {
        $id = $request->order_id;
        $carts = Cart::where('order_id', $id)->get();
        foreach ($carts as $cart) {
            $property = Properties::find($cart->properties_id);
            $property->amount = $property->amount - $cart->amount;
            $property->save();
        }
    }

    public function addAmountProperties(Request $request)
    {
        foreach ($request->properties_id as $properties) {
            $property = Properties::find($properties);
            $property->amount = $request->amount[$properties] + $property->amount;
            $property->save();
        }
    }

    public function newBill(Request $request)
    {
        foreach ($request->properties_id as $property) {

            $properties = new Properties_Bill();
                $data = [
                    'bill_id' => $request->bill_id,
                    'properties_id' => $property,
                    'amount' => $request->amount[$property],
                ];
                $properties->fill($data);
                $properties->save();
        }
    }

    public function getPropertiesBill($id)
    {
        $properties = Properties_Bill::where('bill_id', $id)->get();
        return $properties;
    }

    public function getFirstBill($id)
    {
        $properties = Properties_Bill::where('bill_id', $id)->first();
        return $properties;
    }

}
