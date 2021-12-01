<?php

namespace App\Routes\Title;


use App\Http\Controllers\Title\TitleController;
use Illuminate\Support\Facades\Route;

class TitleRoute
{
    public static function routes()
    {
        Route::resource('/title',TitleController::class);
    }
}
