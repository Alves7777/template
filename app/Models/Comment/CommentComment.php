<?php

namespace App\Models\Comment;

use App\Models\Post\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentComment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','user_id', 'title', 'body'];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
