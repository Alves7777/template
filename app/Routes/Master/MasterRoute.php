<?php

namespace App\Routes\Master;

use App\Http\Controllers\Master\MasterController;
use Illuminate\Support\Facades\Route;

class MasterRoute
{
    public static function routes()
    {
        Route::middleware(['auth', 'is_master'])->group(function () {
            Route::resource('/master', MasterController::class);
        });
    }
}
