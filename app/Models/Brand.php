<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
      'name',
      'logo',
      'link',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
