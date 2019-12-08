<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorRequest;
use App\Http\Requests\ProductRequests;
use App\Services\CategoryService;
use App\Services\BrandService;
use App\Services\ColorService;
use App\Services\ProductService;
use App\Services\PropertiesService;
use Illuminate\Http\Request;
use Imagick;

class ProductController extends Controller
{
    protected $categoryService;
    protected $brandService;
    protected $colorService;
    protected $productService;
    protected $propertiesService;
    public function __construct(CategoryService $categoryService,
                                BrandService $brandService,
                                ColorService $colorService,
                                ProductService $productService,
                                PropertiesService $propertiesService)
    {
        $this->categoryService = $categoryService;
        $this->brandService = $brandService;
        $this->colorService = $colorService;
        $this->productService = $productService;
        $this->propertiesService = $propertiesService;
    }

    public function newProduct()
    {
        $categories = $this->categoryService->getCategory();
        $brands = $this->brandService->getBrand();
        $colors = $this->colorService->getColor();
        $sizes = [
            36,37,38,39,40,41,42,43
        ];
        return view('admin/product/add', compact('categories', 'brands', 'colors','sizes'));
    }

    public function  addNewProduct(ProductRequests $request)
    {
//        dd($request->all());
        $this->productService->addNewProduct($request);
        $this->propertiesService->addNewProperties($request);

        return redirect()->route('admin.adminHome');
    }

    public function showListProduct()
    {
        $products = $this->productService->getProduct();
        $activeProducts = $this->productService->getProductActive();
        return view('admin/product/index', compact('products', 'activeProducts'));
    }

    public function editProduct($id)
    {
        $product = $this->productService->getOneProduct($id);
        $categories = $this->categoryService->getAllCategories();
        return view('admin/product/edit', compact('product', 'categories'));
    }

    public function saveEditProduct(Request $request, $id)
    {
        $product = $this->productService->editProduct($request, $id);

        return redirect()->route('admin.show_product');
    }

    public function showColor()
    {
        $colors = $this->productService->getAllColor();
        return view('admin/color/index', compact('colors'));
    }

    public function addColor()
    {
        return view('admin/color/add');
    }

    public function newColor(ColorRequest $request)
    {
        $color = $this->productService->newColor($request);

        return redirect()->route('admin.show_color');
    }

    public function editColor($id)
    {
        $color = $this->productService->findColor($id);
        return view('admin/color/edit', compact('color'));
    }

    public function updateColor(ColorRequest $request, $id)
    {
        $color = $this->productService->editColor($request, $id);
        return redirect()->route('admin.show_color');
    }

    public function showAlbum($id)
    {
        $album = $this->productService->getAlbumProduct($id);
        $product = $this->productService->getOneProduct($id);

        return view('admin/album/index', compact('album', 'product'));
    }

    public function newPicture(Request $request, $id)
    {
        $product = $this->productService->newPicture($request, $id);

        return redirect()->route('admin.show_album', ['id' => $id]);
    }

    public function removePicture($id)
    {
        $picture = $this->productService->removePicture($id);

        return redirect()->route('admin.show_album', ['id' => $picture]);

    }
}
