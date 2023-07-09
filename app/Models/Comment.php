<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['post_id', 'message'];

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
