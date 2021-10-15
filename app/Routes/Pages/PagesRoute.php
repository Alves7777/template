<?php

namespace App\Routes\Pages;

use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Route;

class PagesRoute
{
    public static function routes()
    {
        Route::resource('pages', PagesController::class);
    }
}
