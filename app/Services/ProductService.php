<?php


namespace App\Services;

use App\Http\Requests\ProductRequests;
use App\Models\Album;
use App\Models\Color;
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
        $products = Product::where('status', 1)->get();
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

    public function getAlbumProduct($id)
    {
        $album = Album::where('product_id', $id)->get();

        return $album;
    }

    public function getAllColor()
    {
        $colors = Color::where('status', '0')->get();
        return $colors;
    }

    public function newColor(Request $request)
    {
        $color = new Color();
        $data = [
            'name' => $request->name,
        ];
        $color->fill($data);
        $color->save();
    }

    public function findColor($id)
    {
        $color = Color::find($id);

        return $color;
        dd($color);
    }

    public function editColor(Request $request, $id)
    {
        $color = Color::find($id);
        $data = [
            'name' => $request->name,
        ];
        $color->fill($data);
        $color->save();
    }

    public function newPicture(Request $request, $id)
    {
        foreach ($request->picture as $picture)
        {
            $product = new Album();
            $filename = $picture->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $data = [
                'product_id' => $id
            ];
            $path = $filename;
            $product->picture = $picture->move('images/product', $path);
            $product->fill($data);
            $product->save();
        }
    }

    public function removePicture($id)
    {
        $product = Album::find($id)->product_id;
        $picture = Album::find($id);
        $picture->delete();

        return $product;
    }

    public function disableColor($id)
    {
        $color = Color::find($id);
        $color->status = 1;
        $color->save();
    }

    public function disableProduct($id)
    {
        $product = Product::find($id);
        $product->status = 2;
        $product->save();
    }

    public function getProductDeactivate()
    {
        $product = Product::where('status', 2)->get();
        return $product;
    }
}
