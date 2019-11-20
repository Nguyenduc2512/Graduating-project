<?php


namespace App\Services;
use App\Models\Product;
use App\Models\Properties;
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

}
