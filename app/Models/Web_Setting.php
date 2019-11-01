<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Web_Setting extends Model
{
    protected $table = 'web_setting';
    protected $fillable = [
    	'logo',
        'logoblue',
        'address',
        'hotline',
        'email',
        'map',
    ];

}
