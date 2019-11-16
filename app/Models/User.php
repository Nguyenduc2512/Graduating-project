<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'status',
        'gender',
        'date_of_birth',
    ];
    protected $hidden = [
        'password',
    ];
}
