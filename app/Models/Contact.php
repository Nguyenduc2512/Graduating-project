<?php

namespace App\Models;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'content',
        'rep_by_admin_id',
    ];
}
