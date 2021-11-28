<?php

namespace App\Routes\Score;

use App\Http\Controllers\Score\ScoreController;
use Illuminate\Support\Facades\Route;

class ScoreRoute
{
    public static function routes()
    {
        Route::resource('score',ScoreController::class);

    }
}
