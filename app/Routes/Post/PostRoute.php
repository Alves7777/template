<?php

namespace App\Routes\Post;

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

class PostRoute
{
    public static function routes()
    {
        Route::resource('/post', PostController::class);

    }
}
