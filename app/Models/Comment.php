<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'content','user_id',
        'product_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function product()
    {
    	return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    
}
