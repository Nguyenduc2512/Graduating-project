<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';
    protected $fillable = [
      'code',
      'down',
      'admin_id',
      'status',
      'start_time',
      'end_time',
      'role',
      'amount',
    ];
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id', 'id');
    }
}
