<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'promo',
        'code_order',
        'location',
        'delivery'
    ];
    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
