<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
