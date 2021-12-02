<?php

namespace App\Routes\Ecommerce\UserEcommerce;

use App\Http\Controllers\Ecommerce\UserEcommerce\UserEcommerceController;
use Illuminate\Support\Facades\Route;

class UserEcommerceRoute
{
    public static function routes()
    {
        Route::match(['get', 'post'], 'user-ecommerce', [UserEcommerceController::class, 'userEcommerce'])->name('user-ecommerce');

    }
}
