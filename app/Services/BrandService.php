<?php


namespace App\Services;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandService
{
    public function getBrand()
    {
        $brands = Brand::withCount(['products'])->get();
        return $brands;
    }
    public function listBrandStatus1()
    {
        $brands1 = Brand::where('status', 1)->withCount(['products'])->get();
        return $brands1;
    }
    public function listBrandStatus0()
    {
        $brands0 = Brand::where('status', 0)->withCount(['products'])->get();
        return $brands0;
    }
    public function addNewBrand(Request $request)
    {
        $filename = $request->logo->getClientOriginalName();
        $filename = str_replace(' ', '-', $filename);
        $filename = uniqid() . '-' . $filename;
        $brand = new Brand();
        $data = [
            'name' => $request->name,
            'link' => $request->link,
            'status' => $request->status,
        ];
        $brand->fill($data);
        if ($request->hasFile('logo')) {
            $path = $filename;
            $brand->logo = request()->logo->move('images/brand', $path);
        }
        $brand->save();
    }
    public function editFormBrand($id)
    {
        $brand = Brand::find($id);
        return $brand;
    }
    public function editBrand(Request $request)
    {
    	$brand = Brand::find($request->id);
        if ($request->hasFile('logo')) {
    		$filename = $request->logo->getClientOriginalName();
        	$filename = str_replace(' ', '-', $filename);
        	$filename = uniqid() . '-' . $filename;
            $path = $filename;
            $brand->logo = request()->logo->move('images/brand', $path);
        }else{
        	$request->logo = $brand->logo;
        }
        $data = [
            'name' => $request->name,
            'link' => $request->link,
            'logo' => $request->logo,
            'status' => $request->status,
        ];
        if($request->status == 0){
            $request->status = 1;
        }
        else{
        	$request->status = 0;
        }
        $brand->fill($data);

        $brand->save();
    }
}
