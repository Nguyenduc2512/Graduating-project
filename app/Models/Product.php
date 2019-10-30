<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
    	'category_id', 'brand_id','name',
    	'descripton', 'price',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    
}
