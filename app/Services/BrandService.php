<?php


namespace App\Services;


use App\Models\Brand;

class BrandService
{
    public function getBrand()
    {
        $brands = Brand::all();
        return $brands;
    }
}
