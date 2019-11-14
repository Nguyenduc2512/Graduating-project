<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply_Comment extends Model
{
    protected $table = 'reply_comments';
    protected $fillable = [
        'content','user_id',
        'admin_id','comment_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id', 'id');
    }
    public function comment()
    {
    	return $this->belongsTo('App\Models\Comment', 'comment_id', 'id');
    }
    
}
