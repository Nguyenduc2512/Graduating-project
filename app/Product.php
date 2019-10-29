<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
    	'brand_id', 'category_id','name',
    	 'description','price',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    
}
