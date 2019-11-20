<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Properties;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'admin_id',
        'properties_id',
        'price',
        'status',
        'amount',
    ];

    public function properties() {
       return $this->hasOne(Properties::class, 'id', 'properties_id');
    }

//    public function product()
//    {
//        return $this->belongsTo( Product::class, 'properties_id', '')
//    }
}
