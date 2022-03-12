<?php

namespace App\Models\Post;

use App\Models\Comment\CommentComment;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
    ];

    public function comment()
    {
        return $this->hasMany(CommentComment::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected static function newFactory(): PostFactory
    {
        return new PostFactory();
    }

}
