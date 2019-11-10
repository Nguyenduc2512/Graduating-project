<?php

namespace App\Models;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';
    protected $fillable = [
    	'code', 'down', 'admin_id', 'start_time','end_time','role'
    ];
}
