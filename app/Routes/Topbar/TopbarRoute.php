<?php

namespace App\Routes\Topbar;

use App\Http\Controllers\Topbar\TopbarController;
use Illuminate\Support\Facades\Route;

class TopbarRoute
{
    public static function routes()
    {
        Route::resource('topbar', TopbarController::class);
    }
}
