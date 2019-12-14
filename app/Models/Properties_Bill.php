<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties_Bill extends Model
{
    protected $table = 'properties_bills';
    protected $fillable = [
        'bill_id',
        'properties_id',
        'amount'
    ];

    public function properties()
    {
        return $this->hasOne(Properties::class, 'id','properties_id');
    }
}
