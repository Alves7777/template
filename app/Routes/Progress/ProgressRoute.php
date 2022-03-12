<?php

namespace App\Routes\Progress;

use App\Http\Controllers\Progress\ProgressController;
use Illuminate\Support\Facades\Route;

class ProgressRoute
{
    public static function routes()
    {
        Route::resource('progress',ProgressController::class);
        Route::match(['get', 'Post'], 'export-excel', [ProgressController::class, 'exportExcel'])->name('export-excel');

    }
}
