<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequests;
use App\Services\CategoryService;
use App\Services\BrandService;
use App\Services\ColorService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Imagick;

class ProductController extends Controller
{
    protected $categoryService;
    protected $brandService;
    protected $colorService;
    protected $productService;
    public function __construct(CategoryService $categoryService,
                                BrandService $brandService,
                                ColorService $colorService,
                                ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->brandService = $brandService;
        $this->colorService = $colorService;
        $this->productService = $productService;
    }

    public function newProduct()
    {
        $categories = $this->categoryService->getCategory();
        $brands = $this->brandService->getBrand();
        $colors = $this->colorService->getColor();
        return view('admin/product/add', compact('categories', 'brands', 'colors'));
    }

    public function  addNewProduct(ProductRequests $request)
    {
        $this->productService->addNewProduct($request);

        return redirect()->route('admin.adminHome');
    }

    public function showListProduct()
    {
        $products = $this->productService->getProduct();
        $activeProducts = $this->productService->getProductActive();
        return view('admin/product/index', compact('products', 'activeProducts'));
    }
}
