<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryBrand extends Model
{
    protected $table = 'delivery_brand';

    protected $fillable = [
        'name',
        'link',
        'email',
        'status',
    ];

}
