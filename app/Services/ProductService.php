<?php


namespace App\Services;

use App\Http\Requests\ProductRequests;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductService
{
    public function addNewProduct(Request $request)
    {
        $filename = $request->picture->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $product = new Product();
        $data = [
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'picture' => $filename,
            'status' => $request->status,
        ];
        $product->fill($data);
        if ($request->hasFile('picture')) {
            $path = $filename;
            $product->picture = request()->picture->move('images/product', $path);
        }
        $product->save();
    }

    public function getProduct()
    {
        $product = Product::all();
        return $product;
    }

    public function getProductActive()
    {
        $products = Product::where('status', 1);
        return $products;
    }

    public function getOneProduct($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function editProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->hasFile('picture')) {
            $filename = $request->picture->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->cate_id,
                'description' => $request->description,

            ];
                $path = $filename;
                $product->picture = request()->picture->move('images/product', $path);
            $product->fill($data);
            $product->save();
        }else {
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->cate_id,
                'description' => $request->description,
                ];
            $product->fill($data);
            $product->save();
        }
    }
}
