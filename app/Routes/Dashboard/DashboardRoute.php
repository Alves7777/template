<?php

namespace App\Routes\Dashboard;

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

class DashboardRoute
{
    public static function routes()
    {
        Route::get('dashboard', [DashboardController::class, 'months'])->name('dashboard.months');

    }
}
