<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = [
    	'gioi_thieu',
        'tam_nhin',
        'su_menh',
        'slogan',
    ];

}
