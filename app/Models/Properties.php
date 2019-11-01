<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $table = 'properties';
    protected $fillable = [
        'product_id',
        'color_id',
        'size',
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
