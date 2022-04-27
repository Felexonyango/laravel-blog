<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'body'
    ];

    //comment belongs to the post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
