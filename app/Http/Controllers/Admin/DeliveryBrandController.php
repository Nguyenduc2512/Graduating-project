<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DeliveryBrandService;
use App\Http\Requests\DeliveryBrandRequest;
use Illuminate\Http\Request;
use Imagick;

class DeliveryBrandController extends Controller
{
    protected $deliveryBrandService;
    public function __construct(
        DeliveryBrandService $deliveryBrandService
    ) {
        $this->deliveryBrandService = $deliveryBrandService;
    }

 
    public function listDeliveryBrand(){
        $listdeliverybrand = $this->deliveryBrandService->getDeliveryBrand();
        return view('admin/delivery_brand/index', compact('listdeliverybrand'));
    }
    public function newDeliveryBrand()
    {
        return view('admin/delivery_brand/add');
    }

    public function  addNewDeliveryBrand(DeliveryBrandRequest $request)
    {
        $this->deliveryBrandService->addNewDeliveryBrand($request);
        return redirect()->route('admin.list_deliverybrand');
    }

    public function  editFormDeliveryBrand($id)
    {
        $listdeliverybrand = $this->deliveryBrandService->editFormDeliveryBrand($id);
        return view('admin/delivery_brand/edit', compact('listdeliverybrand'));
    }
    public function  editDeliveryBrand(DeliveryBrandRequest $request)
    {
        $listdeliverybrand = $this->deliveryBrandService->editDeliveryBrand($request);
        return redirect()->route('admin.list_deliverybrand');
    }
}
