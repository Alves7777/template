<?php

namespace App\Routes\Navbar;

use App\Http\Controllers\Navbar\NavbarController;
use Illuminate\Support\Facades\Route;

class NavbarRoute
{
    public static function routes()
    {
        Route::resource('navbar', NavbarController::class);

    }
}
