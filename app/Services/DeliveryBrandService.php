<?php


namespace App\Services;

use App\Models\DeliveryBrand;
use Illuminate\Http\Request;

class DeliveryBrandService
{
    public function getDeliveryBrand()
    {
        $deliverybrands = DeliveryBrand::all();
        return $deliverybrands;
    }
    public function addNewDeliveryBrand(Request $request)
    {
        $deliverybrands = new DeliveryBrand();
        $data = [
            'name' => $request->name,
            'link' => $request->link,
            'email' => $request->email,
            'status' => $request->status,
        ];
        $deliverybrands->fill($data);
        $deliverybrands->save();
    }
    public function editFormDeliveryBrand($id)
    {
        $deliverybrands = DeliveryBrand::find($id);
        return $deliverybrands;
    }
    public function editDeliveryBrand(Request $request)
    {
        $deliverybrands = DeliveryBrand::find($request->id);
        $data = [
            'name' => $request->name,
            'link' => $request->link,
            'email' => $request->email,
            'status' => $request->status,
        ];
        $deliverybrands->fill($data);

        $deliverybrands->save();
    }
}
