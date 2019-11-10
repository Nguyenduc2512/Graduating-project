<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BrandService;
use Illuminate\Http\Request;
use Imagick;

class BrandController extends Controller
{
    protected $brandService;
    public function __construct(BrandService $brandService
                                )
    {
        $this->brandService = $brandService;
     
    }

    public function listBrand()
    {
        $brands = $this->brandService->getBrand();
        $brands1 = $this->brandService->listBrandStatus1();
        $brands0 = $this->brandService->listBrandStatus0();
        return view('admin/brand/index', compact('brands', 'brands1', 'brands0'));
    }
    public function newBrand()
    {
        return view('admin/brand/add');
    }

    public function  addNewBrand(Request $request)
    {
        $this->brandService->addNewBrand($request);
        return redirect()->route('admin.list_brand');
    }

    public function  editFormBrand($id)
    {
        $brand = $this->brandService->editFormBrand($id);
        return view('admin/brand/edit', compact('brand'));
    }
    public function  editBrand(Request $request)
    {
        $brand = $this->brandService->editBrand($request);
        return redirect()->route('admin.list_brand');
    }
    
}
